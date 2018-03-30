<?php
/**
 * OAuth 2.0 Abstract Token Type
 *
 * @package     elumina-elearning/oauth2-server
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 * @link        https://github.com/elumina-elearning/oauth2-server
 */

namespace EluminaElearning\OAuth2\Server\TokenType;

use EluminaElearning\OAuth2\Server\AbstractServer;
use EluminaElearning\OAuth2\Server\Entity\SessionEntity;

abstract class AbstractTokenType
{
    /**
     * Response array
     *
     * @var array
     */
    protected $response = [];

    /**
     * Server
     *
     * @var \EluminaElearning\OAuth2\Server\AbstractServer $server
     */
    protected $server;

    /**
     * Server
     *
     * @var \EluminaElearning\OAuth2\Server\Entity\SessionEntity $session
     */
    protected $session;

    /**
     * {@inheritdoc}
     */
    public function setServer(AbstractServer $server)
    {
        $this->server = $server;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setSession(SessionEntity $session)
    {
        $this->session = $session;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setParam($key, $value)
    {
        $this->response[$key] = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function getParam($key)
    {
        return isset($this->response[$key]) ? $this->response[$key] : null;
    }
}
