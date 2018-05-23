# Simple MVC Application

#### Project Description
- MVC Application using PHP with Eloquent
- YouTube [Link](https://www.youtube.com/watch?v=OsCTzGASImQ&list=PLfdtiltiRHWGXVHXX09fxXDi-DqInchFD)

#### Purpose:
- To learn what is MVC

#### Timeline:
- Start: May 23, 2018
- End: May 23, 2018

#### Note:

##### For rewrite to work:
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

- To autoload classes specified in composer.json, make sure to run
```sh
composer dump-autoload
```

#### Credit:
- [Codecourse YouTube Channel](https://www.youtube.com/user/phpacademy/about)
