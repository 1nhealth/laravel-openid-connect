<?php

declare(strict_types=1);

namespace OpenIDConnect\Exceptions;

use RuntimeException;

class ProtectedScopeException extends RuntimeException
{
    public function __construct($scope)
    {
        parent::__construct("The scope '{$scope}' is a protected scope.");
    }
}
