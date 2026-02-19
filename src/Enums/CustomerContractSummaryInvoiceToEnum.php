<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Invoice information section > Invoice to > The setting that defines the
 * customer account to be invoiced for a contract. The following options are
 * available: Parent account, Customer account, Specific account.
 */
enum CustomerContractSummaryInvoiceToEnum: string
{
    case PARENT_ACCOUNT = 'ParentAccount';
    case CUSTOMER_ACCOUNT = 'CustomerAccount';
    case SPECIFIC_ACCOUNT = 'SpecificAccount';
}
