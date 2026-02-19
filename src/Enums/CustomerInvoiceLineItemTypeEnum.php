<?php

namespace Pionect\VismaSdk\Enums;

enum CustomerInvoiceLineItemTypeEnum: string
{
    case SERVICE = 'Service';
    case MATERIAL_COST = 'MaterialCost';
    case OTHER_COST = 'OtherCost';
}
