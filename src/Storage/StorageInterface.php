<?php
/**
 * OAuth 2.0 Storage interface
 *
 * @package     elumina-elearning/oauth2-server
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 * @link        https://github.com/elumina-elearning/oauth2-server
 */

namespace EluminaElearning\OAuth2\Server\Storage;

use EluminaElearning\OAuth2\Server\AbstractServer;

/**
 * Storage interface
 */
interface StorageInterface
{
    /**
     * Set the server
     *
     * @param \EluminaElearning\OAuth2\Server\AbstractServer $server
     */
    public function setServer(AbstractServer $server);
}
