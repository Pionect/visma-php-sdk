<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Payment settings tab > Payment settings section > Charge bearer > The party
 * that will pay possible expenses connected with the payment.
 */
enum SupplierChargeBearerEnum: string
{
    case PAYER = 'Payer';
    case BENEFICIARY = 'Beneficiary';
    case SHARED = 'Shared';
    case SERVICE_LEVEL = 'ServiceLevel';
}
