<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Order by Branch ID
 */
enum BranchQueryParametersOrderByEnum: string
{
    case ID = 'Id';
    case NUMBER = 'Number';
    case NAME = 'Name';
    case ORGANIZATION_ID = 'OrganizationId';
    case LAST_MODIFIED_DATE_TIME = 'LastModifiedDateTime';
}
