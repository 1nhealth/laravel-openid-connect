<?php

declare(strict_types=1);

namespace OpenIDConnect\Entities;

use League\OAuth2\Server\Entities\Traits\EntityTrait;
use OpenIDConnect\Claims\Traits\WithClaims;
use OpenIDConnect\Interfaces\IdentityEntityInterface;

class IdentityEntity implements IdentityEntityInterface
{
    use EntityTrait;
    use WithClaims;

    /**
     * @return string[]
     */
    public function getClaims(): array
    {
        /**
         * For a complete list of default claim sets
         * @see \OpenIDConnect\ClaimExtractor
         */
        return [
            // profile
            'name' => 'Jon Snow',
            'nickname' => 'The Bastard of Winterfell',

            // email
            'email' => 'jon.snow@dorne.com',
            'email_verified' => true,

            // phone
            'phone_number' => '0031 493 123 456',
            'phone_number_verified' => true,

            // address
            'address' => 'Castle Black, The Night\'s Watch, The North',

            // custom
            'what_he_knows' => 'Nothing!',
        ];
    }
}
