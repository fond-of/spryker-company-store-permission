<?php

declare(strict_types=1);

namespace FondOfSpryker\Shared\CompanyStorePermission\Plugin\Permission;

use Spryker\Shared\PermissionExtension\Dependency\Plugin\PermissionPluginInterface;

class EditStoreAddressPermissionPlugin implements PermissionPluginInterface
{
    public const KEY = 'EditStoreAddressPermissionPlugin';

    /**
     * @return string
     */
    public function getKey(): string
    {
        return static::KEY;
    }
}
