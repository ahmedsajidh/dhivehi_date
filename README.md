# dhivehi-date

![GitHub](https://img.shields.io/github/license/ahmedsajidh/dhivehi_date)
![GitHub](https://github.styleci.io/repos/7548986/shield)



_Get date in dhivehi human readable format_

#### Installation

```
composer require sajidh/dhivehi-date
```

#### Usage

_if more than 24h human readable format will automatically change to YY/MM/DD_ 

```php
use Sajidh\Dhivehidate\Dhivehidate;

$date = new Dhivehidate();

echo "<div style='direction: rtl; font-family: Faruma;'>"..$date->dhivehidate("2020-10-24T18:36:16.000000Z")."\n </div>";

echo "<div style='direction: rtl; font-family: Faruma;'>"..$date->datenow()."\n </div>";

```

#### Sample

![alt text](https://github.com/ahmedsajidh/dhivehi_date/blob/main/image/sample.jpg?raw=true)
