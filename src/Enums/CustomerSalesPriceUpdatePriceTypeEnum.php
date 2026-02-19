<?php

namespace Pionect\VismaSdk\Enums;

enum CustomerSalesPriceUpdatePriceTypeEnum: string
{
    case BASE = 'Base';
    case CUSTOMER = 'Customer';
    case CUSTOMER_PRICE_CLASS = 'CustomerPriceClass';
}
