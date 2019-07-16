<?php
include("Facebook/autoload.php");
include("fbconfig.php");
$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://ffq.000webhostapp.com/fb-callback.php', $permissions);
?>