<?php

namespace Progrupa\Azure\Authentication;


use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\RequestOptions;
use Sainsburys\Guzzle\Oauth2\GrantType\AuthorizationCode;
use Sainsburys\Guzzle\Oauth2\GrantType\ClientCredentials;
use Sainsburys\Guzzle\Oauth2\GrantType\RefreshToken;
use Sainsburys\Guzzle\Oauth2\Middleware\OAuthMiddleware;

class OAuth2Plugin implements AuthenticationPluginInterface
{
    /** @var  string */
    private $tenant;
    /** @var  string */
    private $applicationId;
    /** @var  string */
    private $applicationKey;
    /** @var  string */
    private $applicationRedirectUrl;
    /** @var  string */
    private $applicationResourceUrl;

    /**
     * OAuth2Plugin constructor.
     * @param string $tenant
     * @param string $applicationId
     * @param string $applicationKey
     * @param string $applicationRedirectUrl
     * @param string $applicationResourceUrl
     */
    public function __construct(
        $tenant,
        $applicationId,
        $applicationKey,
        $applicationRedirectUrl,
        $applicationResourceUrl
    ) {
        $this->tenant = $tenant;
        $this->applicationId = $applicationId;
        $this->applicationKey = $applicationKey;
        $this->applicationRedirectUrl = $applicationRedirectUrl;
        $this->applicationResourceUrl = $applicationResourceUrl;
    }


    public function attach(ClientInterface $client)
    {
        $config = [
            AuthorizationCode::CONFIG_CLIENT_ID => $this->applicationId,
            AuthorizationCode::CONFIG_CLIENT_SECRET => $this->applicationKey,
            AuthorizationCode::CONFIG_TOKEN_URL => sprintf('https://login.microsoftonline.com/%s/oauth2/token', $this->tenant),
            AuthorizationCode::CONFIG_REDIRECT_URI => $this->applicationRedirectUrl,
            AuthorizationCode::CONFIG_AUTH_LOCATION => RequestOptions::BODY,
            'resource' => $this->applicationResourceUrl,
        ];

        $tokenClient = new Client();
        $token = new ClientCredentials($tokenClient, $config);
        $refreshToken = new RefreshToken($tokenClient, $config);
        $middleware = new OAuthMiddleware($tokenClient, $token, $refreshToken);

        $options = $client->getConfig('options');
        $options['auth'] = 'oauth2';

        $stack = $client->getConfig('handler');
        $stack->push($middleware->onBefore());
        $stack->push($middleware->onFailure(5));
    }
}
