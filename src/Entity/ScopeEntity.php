<?php
/**
 * OAuth 2.0 scope entity
 *
 * @package     elumina-elearning/oauth2-server
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 * @link        https://github.com/elumina-elearning/oauth2-server
 */

namespace EluminaElearning\OAuth2\Server\Entity;

use EluminaElearning\OAuth2\Server\AbstractServer;

/**
 * Scope entity class
 */
class ScopeEntity implements \JsonSerializable
{
    use EntityTrait;

    /**
     * Scope identifier
     *
     * @var string
     */
    protected $id;

    /**
     * Scope description
     *
     * @var string
     */
    protected $description;

    /**
     * Authorization or resource server
     *
     * @var \EluminaElearning\OAuth2\Server\AbstractServer
     */
    protected $server;

    /**
     * __construct
     *
     * @param \EluminaElearning\OAuth2\Server\AbstractServer $server
     *
     * @return self
     */
    public function __construct(AbstractServer $server)
    {
        $this->server = $server;

        return $this;
    }

    /**
     * Return the scope identifer
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Return the scope's description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns a JSON object when entity is passed into json_encode
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'id'    =>  $this->getId(),
            'description'   =>  $this->getDescription()
        ];
    }
}
