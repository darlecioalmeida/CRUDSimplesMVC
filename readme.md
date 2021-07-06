<p align="center"><img src="http://crixus.com.br/crudsimples.png"></p>
<br>

## Sobre CrudSimples MVC

CrudSimples é um pequeno framework projetado para ser simples e atender pequenos sistemas utilizando o padrão de projeto MVC. 

- [Roteamento simples]( /CONTROLADOR/METODO/...<PARAM>.../).
- [Envio de Email](Utilizando boblioteca PHPMailer).
- [Template]( Smarty 3 template engine ).
- [Pdf Simples] (FPDF).


## Instalação


- 1º - Dê permissão para o rewrite do Apache (.htaccess )

---
C:\xampp\apache\conf\httpd.conf
```
Listen 8081

<Directory />
Require all granted
AllowOverride All
</Directory>
```
---
- Ative rewrite do Apache
--
```
LoadModule rewrite_module modules/mod_rewrite.so
LoadModule vhost_alias_module modules/mod_vhost_alias.so
```

2º - Adicione virtual host na porta 8081

C:\xampp\apache\conf\extra\httpd-vhosts.conf
```
<VirtualHost *:8081>
    ServerAdmin webmaster@crudsimples.local
    DocumentRoot "C:/xampp/htdocs/projetos/crudsimples"
    <Directory "C:/xampp/htdocs/projetos/crudsimples">
        Require all granted
         AllowOverride All
    </Directory>
    ErrorLog "logs/crudsimples.local-error.log"
    CustomLog "logs/crudsimples.local-access.log" common
</VirtualHost>
```
Altere em app/Config.php conforme a porta usada

```define('BASE_URL', 'http://localhost:8084/');```

Em seguida reinicie o Apache (o Xampp) e teste novamente.

3º - Configuração de Email

Para que email funcione corretamente é preciso Alterar os dados de EMAIL :
``` C:\xampp\htdocs\projetos\crudsimples\app\Config.php``` alterando as variaveis:

```define('EMAIL_SMTPDEBUG', false); //SMTP::DEBUG_SERVER; //HABILITA OU NAO O DEBUG DE ENVIO
define('EMAIL_HOST', 'smtp.gmail.com'); //SETA O SERVIDOR QUE VAI ENVIAR EMAIL
define('EMAIL_SMTPAUTH', true); //HABILITA AUTENTICACAO SMTP
define('EMAIL_USUARIO', '****email****'); //USUARIO SMTP
define('EMAIL_SENHA', '****senha****'); //SENHA SMTP pode ser gerada Senha API / Ou senha normal
define('EMAIL_PORTA', 587); //PORTA DE ENVIO
define('EMAIL_USUARIO_ENVIO','****email_envio****');
define('EMAIL_USUARIO_NOME', 'CrudSimples');
define('EMAIL_USUARIO_TIULO', 'CrudSimples MVC');
```

## Tecnologias utilizadas
* Frontend: [Smarty]: (https://github.com/smarty-php)
* Backend: PHP
* Banco de Dados: MySQL


## Configuração para desenvolvimento

* Banco de Dados:
  * Criar um banco de dados no [phpMyAdmin](http://localhost/phpmyadmin/)
  * Importar arquivo *crudsimples.sql*
  * Alterar os dados arquivo *Config.php*
  ```define('DB_ENGINE', 'mysql');
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'crudsimples');
	define('DB_CHAR', 'utf8');
  ```


Você pode alternar entre os nível de acesso pelo banco de dados

Class que gerencia as persmissões por nível de acesso :
```C:\xampp\htdocs\projetos\crudsimples\app\Session.php```

*Uso nos controladores :
```Session::acessoRestrito(array('normal'),true); ```True = Restringe pro admin, false=bypass pro admin
Em uso com ajax , não redireciona. ```if(!Session::acessoView('admin'))```

admin= 3; gerente= 2; normal= 1;

A senha é gerado com HASH sha1 que pde ser gerada executando essa comando na Index.php
```echo Hash::getHash('sha1','1234', HASH_KEY);exit; //GERAR HASH SENHA```
Para alterar tempo de Sessão logado em : ```C:\xampp\htdocs\projetos\crudsimples\app\Config.php``` alterando o limite em minutos: ```define('SESSION_TIME', 10);```


## Bibliotecas Utilizadas

- **[FPDF](https://github.com/twbs/icons/releases/tag/v1.5.0)**
- **[Smarty PHP Template Engine](https://github.com/smarty-php)**
- **[Bootstrap](https://getbootstrap.com/docs/4.1/getting-started/introduction/)**
- **[Icon - Bootstrap](https://icons.getbootstrap.com/)**
- **[PHPMailer](https://github.com/PHPMailer/PHPMailer)**



## Vulnerabilidades de segurança
Se você descobrir uma vulnerabilidade de segurança no crudFramework, envie um e-mail para [darlecio.almeida@gmail.com] (mailto: darlecio.almeida@gmail.com).

## Licença

O CrudSimples é um crudframework criado sobre a [MIT license](https://opensource.org/licenses/MIT).

## Meta

Darlecio Almeida – darlecio.almeida@gmail.com

