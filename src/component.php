<?php

namespace Sajidh\Dhivehidate;

class Component implements Imonthday {

    /**
     * @param $secs
     * @return string
     */
    public function thaana_date($secs){

        $bit = self::bit($secs);

        foreach($bit as $x => $y){
            if($y > 1)$ret[] =   $y.$x;
            if($y == 1)$ret[] =  $y.$x;
        }
//        array_splice($ret, count($ret)-1, 0, 'އަދި');
        $ret[] = 'ކުރިން';


        return join(' ', $ret);

    }

    /**
     * @param $secs
     * @return array
     */
    public static function bit($secs):array
    {
        $bit = array(
            ' އަހަރު'        => $secs / 31556926 % 12,
            ' ހަފްތާ'        => $secs / 604800 % 52,
            ' ދުވަސް'        => $secs / 86400 % 7,
            ' ގަޑިއިރު'        => $secs / 3600 % 24,
            ' މިނެޓް'    => $secs / 60 % 60,
            ' ސިކުންތު'    => $secs % 60
        );

        return $bit;
    }

    /**
     * @param $oldtime
     * @return string
     */
    public static function thaanadate($oldtime) {
        $ctime = time() - strtotime($oldtime);
        return self::thaana_date($ctime);
    }

    /**
     * @param $timestamp
     * @return string
     */
    public static function normalDate($timestamp)
    {

        $dhivehidate = '';

        for ($i = 0; $i < strlen(Imonthday::FORMAT); $i++) {

            switch (Imonthday::FORMAT[$i]) {
                case 'D':
                case 'l':

                    $dhivehidate .= Imonthday::DAYOFWEEK[getdate($timestamp)['wday']];
                    break;

                case 'S':

                    break;

                case 'F':
                case 'M':

                    $dhivehidate .= Imonthday::MONTHS[getdate($timestamp)['mon']];
                    break;

                case 'a':
                case 'A':

                    $dhivehidate .= (getdate($timestamp)['hours'] < 12) ? Imonthday::AMPM['am'] : Imonthday::AMPM['pm'];
                    break;

                case ' ':
                    $dhivehidate .= ' ';
                    break;

                case '\\':

                    $i++;
                    $dhivehidate .= Imonthday::FORMAT[$i];
                    break;

                default:
                    $dhivehidate .= date(Imonthday::FORMAT[$i], $timestamp);
            }
        }

        return $dhivehidate;
    }
}
