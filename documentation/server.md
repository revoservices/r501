# Server Configuration

## mod_rewrite and directory rules

There are several mod_rewrite rules that must be set. 

They are listed here below, it is not recommended that you modify them unless you know what you are doing.

```http
<Directory "**your DocumentRoot**">
Options +FollowSymLinks
AllowOverride All
RewriteEngine On
RewriteRule ^([^/]*)/$ /index.php?view=$1
RewriteRule /img/(.*)$ img/$1
RewriteRule /js/(.*)$ js/$1
RewriteRule /css/(.*)$ css/$1
RewriteRule /fonts/(.*)$ fonts/$1
RewriteRule /cfg/(.*)$ cfg/$1
RewriteRule /cfg/lib/(.*)$ cfg/lib/$1
RewriteRule /inc/(.*)$ inc/$1
RewriteRule /uploads/(.*)$ uploads/$1
RewriteRule /utilities/(.*)$ utilities/$1
RewriteRule ^images/([^/]*)/([^/]*)/$ /utilities/image.php?cat=$1&id=$2
RewriteRule ^docs/([^/]*)/$ /documentation/index.php?view=$1


RewriteRule /templates/(.*)$ templates/$1 [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_URI} !(.*)/$
RewriteRule ^(.*)$ %{REQUEST_URI}/ [R=301,L]
</Directory>
```
