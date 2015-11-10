<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Security\Core\Exception\AuthenticationCredentialsNotFoundException;

class ApiUserRepository extends EntityRepository implements ApiUserRepositoryInterface
{
    /**
     * {@inheritdoc}
    */
    public function findOneByApiToken($apiToken)
    {
        $apiUser = $this->findOneBy(['apiToken' => $apiToken]);

        if (!$apiUser) {
            throw new AuthenticationCredentialsNotFoundException();
        }

        return $apiUser;
    }
}
