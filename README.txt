

75 - 

----------------------AJAX PESQUISA

ajaxPesquisa  = inserir no input para incluir o campo como pesquisa




LoadModule rewrite_module modules/mod_rewrite.so
LoadModule vhost_alias_module modules/mod_vhost_alias.so


Em seguida reinicie o Apache (o Xampp) e teste novamente.


1º - 

C:\xampp\apache\conf\httpd.conf

Listen 8081

<Directory />
Require all granted
AllowOverride All
</Directory>


2º - 

C:\xampp\apache\conf\extra\httpd-vhosts.conf

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






INSERT INTO `pessoas` (`id`, `nome`, `email`, `categoria_id`) VALUES 
('1', 'Jorge da Silva', 'jorge@terra.com.br', '1'), 
('2', 'Flavia Monteiro', 'flavia@globo.com', '2'), 
('3', 'Marcos Frota Ribeiro', 'ribeiro@gmail.com', '2'), 
('4', 'Raphael Souza Santos', 'rsantos@gmail.com', '1'), 
('5', 'Pedro Paulo Mota', 'ppmota@gmail.com', '1'), 
('6', 'Winder Carvalho da Silva', 'winder@hotmail.com', '3'), 
('7', 'Maria da Penha Albuquerque', 'mpa@hotmail.com', '3'), 
('8', 'Rafael Garcia Souza', 'rgsouza@hotmail.com', '3'), 
('9', 'Tabata Costa', 'tabata_costa@gmail.com', '2'), 
('10', 'Ronil Camarote', 'camarote@terra.com.br', '1'), 
('11', 'Joaquim Barbosa', 'barbosa@globo.com', '1'), 
('12', 'Eveline Maria Alcantra', 'ev_alcantra@gmail.com', '2'), 
('13', 'João Paulo Vieira', 'jpvieria@gmail.com', '1'), 
('14', 'Carla Zamborlini', 'zamborlini@terra.com.br', '3');


INSERT INTO `categorias` (`id`, `nome`) VALUES ('1', 'Admin'), ('2', 'Gerente'), ('3', 'Normal');

http://www.fpdf.org/
https://github.com/twbs/icons/releases/tag/v1.5.0


CREATE TABLE usuarios (
id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
nome varchar(100) not null,
usuario varchar(100) not null,
senha varchar(164) not null,
email varchar(100) not null,
funcao ENUM('admin','gerente','normal'),
status int(11),
data DATETIME NOT NULL,
codigo INT(10) UNSIGNED NOT NULL, 
ADD UNIQUE `codigo` (`codigo`)
);

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`, `email`, `funcao`, `status`) VALUES (NULL, 'Darlecio Almeida', 'admin', 'a6b909b9ad53502cabaf5085ad0e75d863c89aa0', 'darlecio.almeida@gmail.com', 'admin', '1', now() );


