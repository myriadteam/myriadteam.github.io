# New Myriad Website

See http://myriad-web.nutty.one/ to see this in action.

**Requirements:** web server with PHP support. developed on apache 2.4, but anything should work.

Also using apache's rewrite module to give friendly URL's, some basic rules like this are needed:

```
RewriteEngine on
RewriteRule ^/$ /home [R]
RewriteRule ^/(\w+)$ /$1.php
```
