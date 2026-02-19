<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Mandatory field: Invoicing schedule section > Invoicing period* > The type of
 * invoicing schedule, which can be one of the following options: Weekly,
 * Monthly; Quarterly, Half a year, Yearly, On demand, Statement based.
 */
enum CustomerContractSummaryInvoicingPeriodEnum: string
{
    case STATEMENT = 'Statement';
    case QUARTERLY = 'Quarterly';
    case MONTHLY = 'Monthly';
    case ANNUAL = 'Annual';
    case SEMI_ANNUAL = 'SemiAnnual';
    case WEEKLY = 'Weekly';
    case ON_DEMAND = 'OnDemand';
}
