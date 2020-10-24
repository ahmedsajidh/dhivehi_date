<?php

namespace Sajidh\Dhivehidate;

class Component{


    public function thaana_date($secs){

        $bit = array(
            ' އަހަރު'        => $secs / 31556926 % 12,
            ' ހަފްތާ'        => $secs / 604800 % 52,
            ' ދުވަސް'        => $secs / 86400 % 7,
            ' ގަޑިއިރު'        => $secs / 3600 % 24,
            ' މިނެޓް'    => $secs / 60 % 60,
            ' ސިކުންތު'    => $secs % 60
        );
    
        foreach($bit as $x => $y){
            if($y > 1)$ret[] =   $y.$x;
            if($y == 1)$ret[] =  $y.$x;
        }
//        array_splice($ret, count($ret)-1, 0, 'އަދި');
        $ret[] = 'ކުރިން';
    
        return join(' ', $ret);
    }
    public static function thaanadate($oldtime) {
        $ctime = time() - strtotime($oldtime);
        return self::thaana_date($ctime);
    }
}
