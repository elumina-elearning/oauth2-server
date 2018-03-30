<?php
/**
 * OAuth 2.0 Access token entity
 *
 * @package     elumina-elearning/oauth2-server
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 * @link        https://github.com/elumina-elearning/oauth2-server
 */

namespace EluminaElearning\OAuth2\Server\Entity;

/**
 * Access token entity class
 */
class AccessTokenEntity extends AbstractTokenEntity
{
    /**
     * Get session
     *
     * @return \EluminaElearning\OAuth2\Server\Entity\SessionEntity
     */
    public function getSession()
    {
        if ($this->session instanceof SessionEntity) {
            return $this->session;
        }

        $this->session = $this->server->getSessionStorage()->getByAccessToken($this);

        return $this->session;
    }

    /**
     * Check if access token has an associated scope
     *
     * @param string $scope Scope to check
     *
     * @return bool
     */
    public function hasScope($scope)
    {
        if ($this->scopes === null) {
            $this->getScopes();
        }

        return isset($this->scopes[$scope]);
    }

    /**
     * Return all scopes associated with the access token
     *
     * @return \EluminaElearning\OAuth2\Server\Entity\ScopeEntity[]
     */
    public function getScopes()
    {
        if ($this->scopes === null) {
            $this->scopes = $this->formatScopes(
                $this->server->getAccessTokenStorage()->getScopes($this)
            );
        }

        return $this->scopes;
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        $this->server->getAccessTokenStorage()->create(
            $this->getId(),
            $this->getExpireTime(),
            $this->getSession()->getId()
        );

        // Associate the scope with the token
        foreach ($this->getScopes() as $scope) {
            $this->server->getAccessTokenStorage()->associateScope($this, $scope);
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function expire()
    {
        $this->server->getAccessTokenStorage()->delete($this);
    }
}
