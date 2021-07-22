<?php

namespace Sajidh\Dhivehidate;

class Component implements Imonthday
{
    /**
     * @param $secs
     *
     * @return string
     */
    public function thaana_date($secs)
    {
        foreach (self::bit($secs) as $x => $y) {
            if ($y > 1) {
                $ret[] = $y.$x;
            }
            if ($y == 1) {
                $ret[] = $y.$x;
            }
        }
//        array_splice($ret, count($ret)-1, 0, 'އަދި');
        return join(' ', $ret).' '.$ret[] = 'ކުރިން';
    }

    /**
     * @param $secs
     *
     * @return array
     */
    public static function bit($secs): array
    {
        return $bit = [
            ' އަހަރު'          => $secs / 31556926 % 12,
            ' ހަފްތާ'          => $secs / 604800 % 52,
            ' ދުވަސް'          => $secs / 86400 % 7,
            ' ގަޑިއިރު'        => $secs / 3600 % 24,
            ' މިނެޓް'          => $secs / 60 % 60,
            ' ސިކުންތު'        => $secs % 60,
        ];
    }

    /**
     * @param $oldtime
     *
     * @return string
     */
    public static function thaanadate($oldtime)
    {
        return self::thaana_date(time() - strtotime($oldtime));
    }

    /**
     * @param $timestamp
     *
     * @return string
     */
    public static function normalDate($timestamp)
    {
        $normaldate = '';

        for ($i = 0; $i < strlen(Imonthday::FORMAT); $i++) {
            switch (Imonthday::FORMAT[$i]) {
                case 'D':
                case 'l':

                $normaldate .= Imonthday::DAYOFWEEK[getdate($timestamp)['wday']];
                    break;

                case 'S':

                    break;

                case 'F':
                case 'M':

                $normaldate .= Imonthday::MONTHS[getdate($timestamp)['mon']];
                    break;

                case 'a':
                case 'A':

                $normaldate .= (getdate($timestamp)['hours'] < 12) ? Imonthday::AMPM['am'] : Imonthday::AMPM['pm'];
                    break;

                case ' ':
                    $normaldate .= ' ';
                    break;

                case '\\':

                    $i++;
                    $normaldate .= Imonthday::FORMAT[$i];
                    break;

                default:
                    $normaldate .= date(Imonthday::FORMAT[$i], $timestamp);
            }
        }

        return $normaldate;
    }
}
