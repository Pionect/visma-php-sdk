<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Payment settings tab > Payment settings section > Account used for payment >
 * The bank account to be used for payments to the supplier.
 */
enum SupplierAccountUsedForPaymentEnum: string
{
    case IBAN = 'IBAN';
    case BBAN = 'BBAN';
    case BANKGIRO = 'BANKGIRO';
    case PLUSGIRO = 'PLUSGIRO';
}
