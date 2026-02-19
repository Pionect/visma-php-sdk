<?php

namespace Pionect\VismaSdk\Enums;

enum CustomerSalesPriceQueryParametersPriceTypeEnum: string
{
    case ALL = 'All';
    case BASE = 'Base';
    case CUSTOMER = 'Customer';
    case CUSTOMER_PRICE_CLASS = 'CustomerPriceClass';
}
