GitHub.com Repro to the YouTube.com Tutorial from http://www.dlancedu.com/

Video Tutorial starts here: http://www.dlancedu.com/item/28-vt-01-phppoo%20mvc-crear-un-framework-b%C3%A1sico.html (Part 1 / 22)


How to Use:

Step 1: Download the Package
Step 2: Extract all Files in htdocs (web root folder)
Step 3: Rename example.htaccess to .htaccess

Login and Password for Admin user
Username: jessy
Password: jessy


Have you installed the package in subfolder, Edit the .htaccess and add RewriteBase /MYSUBFOLDER

Example:

RewriteEngine On

RewriteBase /framework/

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-l

RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]
