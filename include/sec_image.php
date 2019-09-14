<?php
// PHP Hotel San Germain, http://www.sangermain.com/php-hotel-san-germain
// A software product of NetArt Media, All Rights Reserved
// Find out more about our products and services on:
// http://www.san-germain.com
// Released under the MIT license
?><?php
   require('security_image.php');
   
   session_start();
    
   $oSecurityImage = new SecurityImage(150, 30);
   if ($oSecurityImage->Create()) 
   {
          $_SESSION['code'] = md5($oSecurityImage->GetCode());
   }
    else 
	{
      echo 'Image GIF library is not installed.';
   }
?>