# UnissonDissability



### Bang (29-10-2019) - New Development

Old reference doc: https://drive.google.com/file/d/1rigBlpaoD62McNnKjlNd6dPj1CpWrQKl/view



#### While setting up instance on local



1. ***Setting up instance on local:***
   1.1 Changed .htaccess - Commented the HTTPS option 

   ```
   Line 83:
     RewriteCond %{HTTPS} off
   	#RewriteCond %{REQUEST_URI} !^/\.well-known/cpanel-dcv/[0-9a-zA-Z_-]+$
   	#RewriteCond %{REQUEST_URI} !^/\.well-known/pki-validation/[A-F0-9]{32}\.txt(?:\ Comodo\ DCV)?$
   	#RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
   ```

   1.2 Db Changes removed the all the INSERT command from table : cache_default (if FOREIGN KEY ERROR arises)

   
   
2. ***Settings Changes:***

   2.1 Changed database settings in settings.php

   2.2 Changed SYNC config in settings.php

   ```
   $config_directories['sync'] = 'config/sync';
   //Bang - 29-10-2019 $config_directories['sync'] = 'sites/default/files/config_nSy3Yaupwfrnl1xK2CH0zTCUt96Q4VkprXjBesZDs4-9ztLGOFjwCG919M_NroLEyxNZuanIiQ/sync';
   ```

   2.2 ON DEBUG Mode for twig in service.yml

   
   
3. ***Removed edit pages layout issue error:***

   3.1 Provide 777 permissions to files folder will resolve issue



### Created Own Theme:

1. Copied 'unisson_disability' theme from root > themes and rename that to 'unisson_disability_v2'.
2. Renamed info, libraries, theme yml files
3. Changed theme functions name in theme yml file
4. Renamed few templates file name a well
5. Changes in page.html.twig if theme path is manually added.



### SMTP Settings

Follow this link to correct SMTP settings: https://stevepolito.design/blog/drupal-configure-smtp-module-work-gmail-updated/

#### Initially settings was (but is not working, even on live):

![](https://tva1.sinaimg.cn/large/006tNbRwly1g9sre6wtm0j30u0115465.jpg)

#### Tested with (working):

![](https://tva1.sinaimg.cn/large/006tNbRwly1g9srda31txj30u016eah6.jpg)



