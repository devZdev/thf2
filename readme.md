## THF - Getting Started

Setting up Apache, virtual hosts, and PHP for MacOS Sierra

<a href="https://medium.com/@JohnFoderaro/how-to-set-up-apache-in-macos-sierra-10-12-bca5a5dfffba">Helpful Article</a>

Additional `httpd-vhost.conf` configuration

```
<VirtualHost *:80>
...
  <Directory "/Users/[USERNAME]/Sites/[REPO]">
      Options -Indexes +FollowSymLinks +Includes
      AllowOverride All
      Order allow,deny
      Allow from All
  </Directory>
...
</VirtualHost>
```

In the top level of your repo:

1. Add `.htaccess` file. There is a copy in this repo called `.httaccess.local-backup`. From the command line run: `cp .httaccess.local-backup .httaccess`

2. Add `config.ini` file for debugging locally, There is a copy in this repo called `config.ini.local-backup`. From the command line run `cp config.ini.local-backup config.ini`

These files were purposely left out of version control becuase we don't want them being committed and deployed to production while we construct our development and staging environments.

This site was built using the <a href="http://fatfreeframework.com/api-reference">F3 PHP Framework</a>

