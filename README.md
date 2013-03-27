GitHub.com Repro to the YouTube.com Tutorial from http://www.dlancedu.com/ <br />
<br />
Video Tutorial starts here: http://www.dlancedu.com/item/28-vt-01-phppoo%20mvc-crear-un-framework-b%C3%A1sico.html (Part 1 / 22)
<br />
<br />
<h2>How to Use:</h2>
<b>Step 1:</b> Download the Package<br />
<b>Step 2:</b> Extract all Files in htdocs (web root folder)<br />
<b>Step 3:</b> Rename example.htaccess to .htaccess<br />
<br />
<h2>Login and Password for Admin user</h2>
<b>Username:</b> jessy<br />
<b>Password:</b> jessy<br />
<br />
<br />
Have you installed the package in subfolder, Edit the .htaccess and add RewriteBase /MYSUBFOLDER
<br />
<h2>Example:</h2>
RewriteEngine On<br />
<br />
RewriteBase /framework/<br />
<br />
RewriteCond %{REQUEST_FILENAME} !-d<br />
RewriteCond %{REQUEST_FILENAME} !-f<br />
RewriteCond %{REQUEST_FILENAME} !-l<br />
<br />
RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]<br />
