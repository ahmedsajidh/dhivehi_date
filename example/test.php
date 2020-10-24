<?php

use Sajidh\Dhivehidate\Dhivehidate;

require '../vendor/autoload.php';

$time =new Dhivehidate();

echo "<div style='direction: rtl; font-family: Faruma;'>".$time->thaanadate("2020-10-24T18:36:16.000000Z")."\n </div>";