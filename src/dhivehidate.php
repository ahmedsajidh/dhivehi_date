<?php 

namespace Sajidh\Dhivehidate;

use Sajidh\Dhivehidate\Component;

/**
 * undocumented class
 */
class Dhivehidate extends Component
{
    public function dhivehidate($oldtime)
    {
        $ctime = time() - strtotime($oldtime);
        return $this-> thaana_date($ctime);
    }
}
