<?php

namespace Sajidh\Dhivehidate;

use Sajidh\Dhivehidate\Component;

class Dhivehidate extends Component
{


    /**
     * @param $oldtime
     * @return string
     */
    public function dhivehidate($oldtime)
    {
        if (date('j-M-Y', strtotime($oldtime)) > $this->thaana_date(time()))
        {
            return $this->thaana_date(time() - strtotime($oldtime));
        }
        return parent::normalDate(strtotime($oldtime));

    }
}
    /**
     * @param 
     * @return string
     */
    public function datenow()
    {
        
        return parent::normalDate(strtotime(date('j-M-Y')));

    }
}
