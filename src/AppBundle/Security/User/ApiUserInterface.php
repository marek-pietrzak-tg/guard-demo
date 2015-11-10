<?php

namespace AppBundle\Security\User;

use Symfony\Component\Security\Core\User\UserInterface;

interface ApiUserInterface extends UserInterface
{
    /**
     * @return string
     */
    public function getApiToken();
}

