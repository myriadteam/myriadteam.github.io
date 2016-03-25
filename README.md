# New Myriad Website

See http://www.myriadcoin.org to see the live site, http://myriad-web.nutty.one for development.

Small changes should be pushed into the master branch, once tested merge into live (the website runs off the live branch and is automatically updated once per hour).
Large changes deserve their own branch.

Pull requests must be against master - otherwise they will be ignored.

**Requirements:** web server with PHP support. developed on apache 2.4, but anything should work.

Also using apache's rewrite module to give friendly URL's, some basic rules like this are needed:

```
RewriteEngine on
RewriteRule ^/$ /en/home [R]
RewriteRule ^/(\w+)$ /en/$1 [R]
RewriteRule ^/(\w{2})/(\w+)$ /$2.php?lang=$1
```
