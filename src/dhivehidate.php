<?php

namespace Sajidh\Dhivehidate;

use Jenssegers\Date\Date;
use Sajidh\Dhivehidate\Component;

class Dhivehidate extends Component
{


    /**
     * @param $oldtime
     * @return string
     */
    public function dhivehidate($oldtime)
    {
        $ctime = time() - strtotime($oldtime);

        $timestamp =strtotime($oldtime);

        if (date('D', $timestamp) != date('D'))
        {
            return $this->thaana_date($ctime);
        }
        return parent::normalDate($timestamp);

    }
}
