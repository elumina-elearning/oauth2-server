<?php
/**
 * OAuth 2.0 Access Denied Exception
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
class AccessDeniedException extends OAuthException
{
    /**
     * {@inheritdoc}
     */
    public $httpStatusCode = 401;

    /**
     * {@inheritdoc}
     */
    public $errorType = 'access_denied';

    /**
     * {@inheritdoc}
     */
    public function __construct()
    {
        parent::__construct('The resource owner or authorization server denied the request.');
    }
}
