<?php
/**
 * OAuth 2.0 Invalid Credentials Exception
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
class InvalidCredentialsException extends OAuthException
{
    /**
     * {@inheritdoc}
     */
    public $httpStatusCode = 401;

    /**
     * {@inheritdoc}
     */
    public $errorType = 'invalid_credentials';

    /**
     * {@inheritdoc}
     */
    public function __construct()
    {
        parent::__construct('The user credentials were incorrect.');
    }
}
