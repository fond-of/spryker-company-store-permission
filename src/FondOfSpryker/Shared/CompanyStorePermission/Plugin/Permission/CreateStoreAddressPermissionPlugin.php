<?php

declare(strict_types = 1);

namespace FondOfSpryker\Shared\CompanyStorePermission\Plugin\Permission;

use Spryker\Shared\PermissionExtension\Dependency\Plugin\PermissionPluginInterface;

class CreateStoreAddressPermissionPlugin implements PermissionPluginInterface
{
    public const KEY = 'CreateStoreAddressPermissionPlugin';

    /**
     * @return string
     */
    public function getKey(): string
    {
        return static::KEY;
    }
}
