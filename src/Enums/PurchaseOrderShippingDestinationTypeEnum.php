<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Shipping instructions tab > The Delivery address section > Shipping
 * destination type > The type of the shipping destination, which is one of the
 * following options: Branch location (meaning a branch of your company),
 * Customer, Supplier, and Warehouse.
 */
enum PurchaseOrderShippingDestinationTypeEnum: string
{
    case COMPANY_LOCATION = 'CompanyLocation';
    case CUSTOMER = 'Customer';
    case VENDOR = 'Vendor';
    case SITE = 'Site';
}
