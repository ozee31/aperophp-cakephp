<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Query;

class ActiveBehavior extends Behavior
{
    public function findActive(Query $query, array $options)
    {
        $query->where([
            'active' => true,
        ]);
        return $query;
    }

    public function findUnactive(Query $query, array $options)
    {
        $query->where([
            'active' => false,
        ]);
        return $query;
    }
}
