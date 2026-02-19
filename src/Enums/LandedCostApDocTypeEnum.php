<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Landed costs tab > Supplier document type > The type of the supplier document
 * generated for the landed cost.
 */
enum LandedCostApDocTypeEnum: string
{
    case CHECK = 'Check';
    case CREDIT_ADJ = 'CreditAdj';
    case DEBIT_ADJ = 'DebitAdj';
    case INVOICE = 'Invoice';
    case PREPAYMENT = 'Prepayment';
    case QUICK_CHECK = 'QuickCheck';
    case REFUND = 'Refund';
    case VOID_CHECK = 'VoidCheck';
    case VOID_QUICK_CHECK = 'VoidQuickCheck';
}
