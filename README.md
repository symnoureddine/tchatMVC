# local.chat
## Environnement
- Windows 7
- PHP 7
- apache2.4.23
- MySql 5.7.14


##Configuration de base de donnée
 
  1.Importer le fichier Sql qui se trouve dans le répertoire `C:\wamp\www\TchatMVC\db\chat.sql` dans phpmyadmin
  
      
##Configuration VHOST

1.Placer vous dans la repertoire  `C:\wamp\bin\apache\apache2.4.23\conf\extra\` puis ajouter le vhost  `httpd-vhosts.conf`

    <VirtualHost *:80>
        ServerName local.chat
        DocumentRoot "c:/wamp/www/TchatMVC/web"
        <Directory  "c:/wamp/www/TchatMVC/web/">
            Options +Indexes +Includes +FollowSymLinks +MultiViews
            AllowOverride All
            Require local
        </Directory>
    </VirtualHost>

 2. ajouter la ligne suivante dans le  fichier hosts `(C:\Windows\System32\drivers\etc\hosts)` : 
        
        127.0.0.1 local.chat
      