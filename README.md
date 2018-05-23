# Simple MVC Application

#### Project Description
- MVC Application using PHP
- YouTube [Link](https://www.youtube.com/watch?v=OsCTzGASImQ&list=PLfdtiltiRHWGXVHXX09fxXDi-DqInchFD)

#### Purpose:
- To learn what is MVC

#### Timeline:
- Start: May 23, 2018
- End: xxx

#### For rewrite to work:
- For 500 internal error, see: https://stackoverflow.com/a/31451383/6353682
- Make sure to run: sudo a2enmod rewrite
- Then add these lines on apache2.conf or sites-available/xxx.conf if enabled:

```
<Directory directory>
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>
```
- where directory could be /var/www/ or the directory in your sites-available/xxx.conf

#### Create .htaccess inside app/ and add these lines:

```
# prevent access to app folder
Options -Indexes
```
#### Create .htaccess inside public/ and add these lines:

```
Options -Multiviews
RewriteEngine On

# base URL
RewriteBase /mvc/public/

# directory checking
RewriteCond %{REQUEST_FILENAME} !-d
# file checking
RewriteCond %{REQUEST_FILENAME} !-f

# take the value of $_GET['url'] and pass to index.php as a query string
# ^(.+)$ will match everything
# $1 is the first parameter
RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]
```

#### Credit:
- [Codecourse YouTube Channel](https://www.youtube.com/user/phpacademy/about)
