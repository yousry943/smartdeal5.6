RewriteEngine On
RewriteCond %{SERVER_PORT} 80
# RewriteRule ^(.*)$ https://www.ierek.net/$1 [R=301,L]


<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews
    </IfModule>

    RewriteEngine On
    RewriteRule ^(.*)$ public/$1 [L]

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ public/$1 [L]


    # Handle Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
</IfModule>

# # php -- BEGIN cPanel-generated handler, do not edit
# # Set the “ea-php71” package as the default “PHP” programming language.
# <IfModule mime_module>
#   AddHandler application/x-httpd-ea-php71 .php .php7 .phtml
# </IfModule>
# # php -- END cPanel-generated handler, do not edit


