<?php

namespace AppBundle\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;

class FormLoginAuthenticator extends AbstractFormLoginAuthenticator
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $encoder;
    /**
     * @var UrlGeneratorInterface
     */
    private $urlGenerator;

    /**
     * @param UserPasswordEncoderInterface $encoder
     * @param UrlGeneratorInterface $urlGenerator
     */
    public function __construct(UserPasswordEncoderInterface $encoder, UrlGeneratorInterface $urlGenerator)
    {
        $this->encoder = $encoder;
        $this->urlGenerator = $urlGenerator;
    }

    /**
     * {@inheritdoc}
     */
    protected function getLoginUrl()
    {
        return $this->urlGenerator->generate('security_login');
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultSuccessRedirectUrl()
    {
        return $this->urlGenerator->generate('homepage');
    }

    /**
     * {@inheritdoc}
     */
    public function getCredentials(Request $request)
    {
        if ($request->getPathInfo() != '/login_check') {
            return;
        }

        $username = $request->request->get('_username');
        $request->getSession()->set(Security::LAST_USERNAME, $username);
        $password = $request->request->get('_password');

        return [
            'username' => $username,
            'password' => $password
        ];

    }

    /**
     * {@inheritdoc}
     */
    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        $username = $credentials['username'];

        return $userProvider->loadUserByUsername($username);
    }

    /**
     * {@inheritdoc}
     */
    public function checkCredentials($credentials, UserInterface $user)
    {
        $plainPassword = $credentials['password'];

        if (!$this->encoder->isPasswordValid($user, $plainPassword)) {
            throw new BadCredentialsException();
        }

        return true;
    }
}
