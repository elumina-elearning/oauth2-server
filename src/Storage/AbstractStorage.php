<?php
/**
 * OAuth 2.0 abstract storage
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
 * Abstract storage class
 */
abstract class AbstractStorage implements StorageInterface
{
    /**
     * Server
     *
     * @var \EluminaElearning\OAuth2\Server\AbstractServer $server
     */
    protected $server;

    /**
     * Set the server
     *
     * @param \EluminaElearning\OAuth2\Server\AbstractServer $server
     *
     * @return self
     */
    public function setServer(AbstractServer $server)
    {
        $this->server = $server;

        return $this;
    }

    /**
     * Return the server
     *
     * @return \EluminaElearning\OAuth2\Server\AbstractServer
     */
    protected function getServer()
    {
        return $this->server;
    }
}
