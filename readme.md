## THF - Getting Started

Place this project in your Apache Document Root

<a href="http://fatfreeframework.com/api-reference">API Docs for F3 PHP Framework</a>

You'll need to add an .htaccess file to the project root.

It should look something like this :

```
RewriteEngine On

RewriteBase /

RewriteCond %{REQUEST_URI} \.ini$
RewriteRule \.ini$ - [R=404]

RewriteCond %{REQUEST_FILENAME} !-l
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule .* index.php [L,QSA]
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization},L]
```
