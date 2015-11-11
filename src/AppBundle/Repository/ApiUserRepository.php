<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ApiUserRepository extends EntityRepository implements ApiUserRepositoryInterface
{
    /**
     * {@inheritdoc}
    */
    public function findOneByApiToken($apiToken)
    {
        return $this->findOneBy(['apiToken' => $apiToken]);
    }
}
