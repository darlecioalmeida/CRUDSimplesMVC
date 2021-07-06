<?php

class relatorioController extends Controller
{

    private $_pdf;

    public function __construct()
    {
        
        Session::acesso('normal');
    
        
        parent::__construct();
        $this->getLibrary('fpdf/fpdf');
        $this->_pdf = new FPDF;

    }

    public function index()
    {
      //  echo "pdf";

    }

    public function cabecalhoPdf($header=array())
    {
        $this->_pdf->SetFont('Arial','B',18);
        $this->_pdf->Cell(92,10, utf8_decode(APP_EMPRESA),0,1,'L');
        $this->_pdf->Ln(5);
        
        if(isset($header['titulo']) && isset($header['subtitulo']) && isset($header['totalizadores'])){
            $this->_pdf->SetTitle(utf8_decode($header['titulo']));
            $this->_pdf->SetFont('Arial','',16);
            $this->_pdf->Cell(95,6, utf8_decode($header['titulo']),0,1,'LR');
            $this->_pdf->SetFont('Arial','',12);
            $this->_pdf->Cell(86,6, utf8_decode($header['subtitulo']),0,1,'LR');
            $this->_pdf->SetFont('Arial','',12);
            $this->_pdf->Cell(86,6, utf8_decode($header['totalizadores']),0,1,'LR');
        } else{
            $this->_pdf->Cell(30,10, utf8_decode('Relatório'),0,1,'LR');
        }
          
       
        $this->_pdf->Ln(10);

    }

    public function rodapePdf()
    {
       
        $this->_pdf->SetY(-38);
        $this->_pdf->SetFont('Arial','I',8);
        $this->_pdf->Cell(0,10,'Pagina '. $this->_pdf->PageNo().'',0,0,'C');
    }



    //RELATORIO DE PESSOAS

    public function listagemPessoas($saida='pdf')
    {
        
        $lista = $this->loadModel('pessoa');
        $pessoas = $lista->getPessoas();
               

        if($saida=="pdf"){

        $this->_pdf = new FPDF();
        $this->_pdf->AddPage();
        $this->cabecalhoPdf(
                array(
                'titulo'=>'Relatório de Pessoas',
                'subtitulo'=>'Data do relatório: '.date('d/m/Y H:i'),
                'totalizadores'=>'Total de registros: '.count($pessoas),
                ));

                

        if(isset($pessoas) && count($pessoas)){

            $header = array('CODIGO', 'NOME', 'E-MAIL', 'CATEGORIA');
            $w = array(20, 85, 60, 25);  // largura da coluna
            // Dados
            $dados = $pessoas; 
            // Cores, largura da linha e fonte em negrito
            $this->_pdf->SetFillColor(105,105,105);     //COR DO FUNDO DA HEADER DA TABELA
            $this->_pdf->SetTextColor(255);         //COR DO TITULO DO HEADER DA TABELA
            $this->_pdf->SetDrawColor(220,220,220);     //COR DOS SEPARADORES DA TABELA
            $this->_pdf->SetLineWidth(.1);          //COR DA ESPESSURA DO SEPARADORES DA TABELA
            $this->_pdf->SetFont('Arial','B',10); 
               
            // Header

            // pecorre array Reseta Cor e fonte
                for($i=0;$i<count($header);$i++)
                $this->_pdf->Cell($w[$i],7,$header[$i],1,0,'C',true);
                    $this->_pdf->Ln();
                
                // Reseta Cor e fonte
                $this->_pdf->SetFillColor(224,235,255); //COR DAS LINHAS 224,235,255
                $this->_pdf->SetTextColor(0);
                $this->_pdf->SetFont('');
                
                // monta listagem
                $fill = false;
                foreach($dados as $row)
                {
                    $this->_pdf->Cell($w[0],6,number_format($row[0]),'LR',0,'L',$fill);
                    $this->_pdf->Cell($w[1],6,utf8_decode($row[1]),'LR',0,'L',$fill);
                    $this->_pdf->Cell($w[2],6,$row[2],'LR',0,'R',$fill);
                    $this->_pdf->Cell($w[3],6,$row[4],'LR',0,'R',$fill);
                    $this->_pdf->Ln();
                    $fill = !$fill;
                }
               
                
                // fecha a linha
                $this->_pdf->Cell(array_sum($w),0,'','T');
               
                $this->rodapePdf(); // INSERE RODABE AO DOCUMENTO
                $this->_pdf->SetAutoPageBreak(true,10);
    
        } else {
    
                echo 'Não há dados cadastrado.';
        }
            
            $this->_pdf->Output(); //exibe  o PDF na tela


        } elseif ($saida=="json"){


        }
        
      

    }


    //RELATORIO DE CATEGORIAS

    public function listagemCategorias($saida='pdf')
    {
        
        $lista = $this->loadModel('categoria');
        $categorias = $lista->getCategorias();
               

        if($saida=="pdf"){

        $this->_pdf = new FPDF();
        $this->_pdf->AddPage();
        $this->cabecalhoPdf(
                array(
                'titulo'=>'Relatório de Categorias',
                'subtitulo'=>'Data do relatório: '.date('d/m/Y H:i'),
                'totalizadores'=>'Total de registros: '.count($categorias),
                ));

                

        if(isset($categorias) && count($categorias)){

            $header = array('CODIGO', 'NOME', 'QTD_PESSOAS');
            $w = array(20, 85, 30);  // largura da coluna
            // Dados
            $dados = $categorias; 
            // Cores, largura da linha e fonte em negrito
            $this->_pdf->SetFillColor(105,105,105);     //COR DO FUNDO DA HEADER DA TABELA
            $this->_pdf->SetTextColor(255);         //COR DO TITULO DO HEADER DA TABELA
            $this->_pdf->SetDrawColor(220,220,220);     //COR DOS SEPARADORES DA TABELA
            $this->_pdf->SetLineWidth(.1);          //COR DA ESPESSURA DO SEPARADORES DA TABELA
            $this->_pdf->SetFont('Arial','B',10); 
               
            // Header

            // pecorre array Reseta Cor e fonte
                for($i=0;$i<count($header);$i++)
                $this->_pdf->Cell($w[$i],7,$header[$i],1,0,'C',true);
                    $this->_pdf->Ln();
                
                // Reseta Cor e fonte
                $this->_pdf->SetFillColor(224,235,255); //COR DAS LINHAS 224,235,255
                $this->_pdf->SetTextColor(0);
                $this->_pdf->SetFont('');
                
                // monta listagem
                $fill = false;
                foreach($dados as $row)
                {
                    $this->_pdf->Cell($w[0],6,number_format($row[0]),'LR',0,'L',$fill);  // ID
                    $this->_pdf->Cell($w[1],6,utf8_decode($row[1]),'LR',0,'L',$fill);   // NOME
                    $this->_pdf->Cell($w[2],6,number_format($row[2]),'LR',0,'C',$fill); //QTD PESSOAS
                    $this->_pdf->Ln();
                    $fill = !$fill;
                }
               
                
                // fecha a linha
                $this->_pdf->Cell(array_sum($w),0,'','T');
               
                $this->rodapePdf(); // INSERE RODABE AO DOCUMENTO
                $this->_pdf->SetAutoPageBreak(true,10);
    
        } else {
    
                echo 'Não há dados cadastrado.';
        }
            
            $this->_pdf->Output(); //exibe  o PDF na tela


        } elseif ($saida=="json"){


        }
        
        

    }


    


}


?>