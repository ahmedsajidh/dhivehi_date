<?php

use Sajidh\Dhivehidate\Dhivehidate;

require '../vendor/autoload.php';

echo "<div style='direction: rtl; font-family: Faruma;'>".Dhivehidate::thaanadate('2020-10-24T18:36:16.000000Z')."\n </div>";

$date = new Dhivehidate();

echo "<div style='direction: rtl; font-family: Faruma;'>".$date->dhivehidate('2020-10-24T18:36:16.000000Z')."\n </div>";
