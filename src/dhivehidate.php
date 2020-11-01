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
        if (date('D', strtotime($oldtime)) == date('D'))
        {
            return $this->thaana_date(time() - strtotime($oldtime));
        }
        return parent::normalDate(strtotime($oldtime));

    }
}
