# dhivehi-date

_Get date in dhivehi human readable format_

#### Installation

```
composer require sajidh/dhivehi-date
```

#### Usage

```php
use Sajidh\Dhivehidate\Dhivehidate;

$date = new Dhivehidate();

echo "<div style='direction: rtl; font-family: Faruma;'>".$date->thaanadate("2020-10-24T18:36:16.000000Z")."\n </div>";
```

#### Usage (Call function without creating an object)

```php
use Sajidh\Dhivehidate\Dhivehidate;

echo "<div style='direction: rtl; font-family: Faruma;'>".Dhivehidate::thaanadate("2020-10-24T18:36:16.000000Z")."\n </div>";
```

#### Sample

![alt text](https://github.com/ahmedsajidh/dhivehi_date/blob/main/sample/image.jpg?raw=true)
