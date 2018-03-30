<?php
/**
 * OAuth 2.0 Unsupported Response Type Exception
 *
 * @package     elumina-elearning/oauth2-server
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 * @link        https://github.com/elumina-elearning/oauth2-server
 */

namespace EluminaElearning\OAuth2\Server\Exception;

/**
 * Exception class
 */
class UnsupportedResponseTypeException extends OAuthException
{
    /**
     * {@inheritdoc}
     */
    public $httpStatusCode = 400;

    /**
     * {@inheritdoc}
     */
    public $errorType = 'unsupported_response_type';

    /**
     * {@inheritdoc}
     */
    public function __construct($parameter, $redirectUri = null)
    {
        $this->parameter = $parameter;
        parent::__construct('The authorization server does not support obtaining an access token using this method.');
        $this->redirectUri = $redirectUri;
    }
}
