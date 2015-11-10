<?php

namespace AppBundle\Repository;

use AppBundle\Security\User\ApiUserInterface;

interface ApiUserRepositoryInterface
{
    /**
     * @return ApiUserInterface
     */
    public function findOneByApiToken($apiToken);
}
