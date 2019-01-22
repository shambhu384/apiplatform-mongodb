<?php

namespace App\Repository;

use Doctrine\ODM\MongoDB\DocumentRepository;

class CustomerRepository extends DocumentRepository
{
    public function findAllOrderedByName()
    {
        return $this->createQueryBuilder()
            ->sort('name', 'ASC')
            ->getQuery()
            ->execute();
    }
}
