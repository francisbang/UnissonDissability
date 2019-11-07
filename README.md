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

