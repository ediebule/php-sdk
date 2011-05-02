<?php
// Awesome Facebook Application
//
// Name: www.edie.bule.com
//

require_once 'facebook-php-sdk/src/facebook.php';

// Create our Application instance.
$facebook = new Facebook(array(
  'appId' => '217542421591112',
  'secret' => '93a6bcd99198bdf1ff8eb2a754705547',
  'cookie' => true,
)); 