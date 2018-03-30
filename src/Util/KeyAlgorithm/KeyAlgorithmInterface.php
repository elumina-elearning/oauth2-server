<?php
/**
 * OAuth 2.0 Secure key interface
 *
 * @package     elumina-elearning/oauth2-server
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 * @link        https://github.com/elumina-elearning/oauth2-server
 */

namespace EluminaElearning\OAuth2\Server\Util\KeyAlgorithm;

interface KeyAlgorithmInterface
{
    /**
     * Generate a new unique code
     *
     * @param integer $len Length of the generated code
     *
     * @return string
     */
    public function generate($len);
}
