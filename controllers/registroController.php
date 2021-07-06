<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class registroController extends Controller
{

    private $_registroModel;

    public function __construct()
    {
        parent::__construct();

        $this->_registroModel = $this->loadModel('registro');

        $this->_view->setJs(array('registro'));
        $this->_view->setCss(array('registro'));
    }

    public function index()
    {

        if (Session::get('autenticado')) {
            $this->redirect();
        }


        $this->_view->assign('titulo', 'Registro de Usuario' );

        if ($this->getInt('enviar') == 1) {

            $this->_view->assign('dados', $_POST );



            if (!$this->getAlphaNum('usuario')) {
                $this->_view->assign('_error', 'Digite seu nome de Usuario' );
                $this->_view->renderizar('index', 'registro');
                exit;
            }


            if ($this->_registroModel->verificarUsuario($this->getAlphaNum('usuario'))) {

                $this->_view->assign('_error', 'Usuario: ' . $this->getAlphaNum('usuario') . ' ja está em uso! Favor informe outro Usuario' );

                $this->_view->renderizar('index', 'registro');

                exit;
            }




            if (!$this->getSql('email')) {
                $this->_view->assign('_error', 'Digite seu Email' );
                $this->_view->renderizar('index', 'registro');
                exit;
            }




            if (!$this->validarEmail($this->getPostParametro('email'))) {
                $this->_view->assign('_error', 'Digite um Email Valido.' );
                $this->_view->renderizar('index', 'registro');
                exit;
            }

            if ($this->_registroModel->verificarEmail($this->getPostParametro('email'))) {
                $this->_view->assign('_error', 'Email: ' . $this->getPostParametro('email') . ' ja está em uso. Favor informe outro Email' );

                $this->_view->renderizar('index', 'registro');
                exit;
            }


            if (!$this->getSql('senha')) {
                $this->_view->assign('_error', 'Digite sua Senha' );
                $this->_view->renderizar('index', 'registro');
                exit;
            }

            if ($this->getPostParametro('confirmasenha') != $this->getPostParametro('senha')) {
                $this->_view->assign('_error', 'As Senhas não conhecidem.' );
                $this->_view->renderizar('index', 'registro');
                exit;
            }



            $this->_registroModel->registrarUsuario(
                $this->getSql('nome'),
                $this->getAlphaNum('usuario'),
                $this->getSql('senha'),
                $this->getPostParametro('email')
            );

            //$row = $this->_registroModel->getUsuario( $this->getAlphaNum('usuario'), $this->getSql('senha') );

            $usuario = $this->_registroModel->verificarUsuario($this->getAlphaNum('usuario'));

            if (!$usuario) {
                $this->_view->assign('_error', 'Error ao Registrar Usuario!' );
                $this->_view->renderizar('index', 'registro');
                exit;
            }

            $this->getLibrary('PHPMailer/src/Exception');
            $this->getLibrary('PHPMailer/src/PHPMailer');
            $this->getLibrary('PHPMailer/src/SMTP');

            $mail = new PHPMailer();

            try {
                //Server settings
                $mail->SMTPDebug = EMAIL_SMTPDEBUG; //SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = EMAIL_HOST;                     //Set the SMTP server to send through
                $mail->SMTPAuth   = EMAIL_SMTPAUTH;                                   //Enable SMTP authentication
                $mail->Username   = EMAIL_USUARIO;                     //SMTP username
                $mail->Password   = EMAIL_SENHA;                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = EMAIL_PORTA;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                //Recipients
                $mail->setFrom(EMAIL_USUARIO_ENVIO, EMAIL_USUARIO_NOME);
                $mail->addAddress($this->getPostParametro('email'));     //Add a recipient

                //Content
                $mail->isHTML(true); //Set email format to HTML
                $mail->Name = EMAIL_USUARIO_NOME;
                $mail->Subject = utf8_encode("ATIVACAO DE CONTA DE USUARIO");
                $mail->Body = "Olá <strong>" . $this->getSql('nome') . "</strong> tudo bem, falta pouco," .
                    "<p>Obrigado por se registrar para concluir o Registro Click no link abaixo:<br> 
                         <a href='" . BASE_URL . 'registro/ativar/' . $usuario['id'] . '/' . $usuario['codigo'] . "'></a> 
                         " . BASE_URL . 'registro/ativar/' . $usuario['id'] . '/' . $usuario['codigo'] . "</p>";
                $mail->AltBody = 'Seu servidor de email não suporta HTML';

                $mail->send();

                $this->_view->assign('dados', false );
                $this->_view->assign('mensagem', 'Registro Efetuado com Sucesso, Favor verifique seu email para ativar sua conta!' );
                $this->_view->renderizar('index', 'registro');
            
            } catch (Exception $e) {

                $this->_view->assign('_error', "Error ao Enviar email de Registro ao Usuario! <br> Error: {$mail->ErrorInfo}" );
                $this->_view->renderizar('index', 'registro');
            }
        }



        $this->_view->renderizar('index', 'registro');
    }




    public function ativar($id, $codigo)
    {




        if (!$this->filtrarInt($id)  || !$this->filtrarInt($codigo)) {

            $this->_view->assign('_error', 'Esta Conta não existe' );
            $this->_view->renderizar('ativar', 'registro');
            exit;
        }

        $row = $this->_registroModel->getUsuario($this->filtrarInt($id), $this->filtrarInt($codigo));

        if (!$row) {
            $this->_view->assign('_error', 'Esta Conta não existe' );
            $this->_view->renderizar('ativar', 'registro');
            exit;
        }

        if ($row['status'] == 1) {
            $this->_view->assign('_error', 'Esta Conta Já está ativada.' );
            $this->_view->renderizar('ativar', 'registro');
            exit;
        }

        $this->_registroModel->ativarUsuario($this->filtrarInt($id), $this->filtrarInt($codigo));

        $row = $this->_registroModel->getUsuario($this->filtrarInt($id), $this->filtrarInt($codigo));

        if ($row['status'] == 0) {
            $this->_view->assign('_error','Erro ao ativar está conta, favor tente mais tarde.' );
            $this->_view->renderizar('ativar', 'registro');
            exit;
        }

        $this->_view->assign('mensagem', 'Conta Ativada com Sucesso! ' );
        $this->_view->renderizar('ativar', 'registro');
    }
}
