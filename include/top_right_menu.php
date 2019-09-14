<?php
// PHP Hotel Booking, http://www.hotelsangermain.com/php-hotel-san-germain
// A software product of NetArt Media, All Rights Reserved
// Find out more about our products and services on:
// http://www.hotelsangermain.com
// Released under the MIT license
?><a href="index.php" class="top-right-link">
<?php echo $this->texts["home_link"];?>
</a> 
<a href="<?php if($this->settings["website"]["seo_urls"]==1) echo "page-contact.html";else echo "index.php?page=contact";?>" class="top-right-link">
<?php echo $this->texts["contact_link"];?>
</a> 


