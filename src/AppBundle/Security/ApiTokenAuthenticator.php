<?php

namespace AppBundle\Security;

use AppBundle\Repository\ApiUserRepositoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;

class ApiTokenAuthenticator extends AbstractGuardAuthenticator
{
    /**
     * @var ApiUserRepositoryInterface
     */
    private $apiUserRepository;

    /**
     * @param ApiUserRepositoryInterface $apiUserRepository
     */
    public function __construct(ApiUserRepositoryInterface $apiUserRepository)
    {
        $this->apiUserRepository = $apiUserRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function start(Request $request, AuthenticationException $authException = null)
    {
        // TODO: Implement start() method.
    }

    /**
     * {@inheritdoc}
     */
    public function getCredentials(Request $request)
    {
        // TODO: Implement getCredentials() method.
    }

    /**
     * {@inheritdoc}
     */
    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        // TODO: Implement getUser() method.
    }

    /**
     * {@inheritdoc}
     */
    public function checkCredentials($credentials, UserInterface $user)
    {
        // TODO: Implement checkCredentials() method.
    }

    /**
     * {@inheritdoc}
     */
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        // TODO: Implement onAuthenticationFailure() method.
    }

    /**
     * {@inheritdoc}
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        // TODO: Implement onAuthenticationSuccess() method.
    }

    /**
     * {@inheritdoc}
     */
    public function supportsRememberMe()
    {
        // TODO: Implement supportsRememberMe() method.
    }
}
