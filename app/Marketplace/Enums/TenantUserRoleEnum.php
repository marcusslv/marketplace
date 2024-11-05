<?php

namespace App\Marketplace\Enums;

enum TenantUserRoleEnum: string
{
    case OWNER = 'owner';
    case EMPLOYEE = 'employee';
    case CUSTOMER = 'customer';

}
