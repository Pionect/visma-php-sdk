<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Summary tab > Invoicing and allocation settings section > Invoicing period >
 * The frequency of invoicing, which can be one of the following options: Week,
 * Month, Quarter, Year, On demand.
 */
enum ProjectBillingPeriodEnum: string
{
    case WEEKLY = 'Weekly';
    case MONTHLY = 'Monthly';
    case QUARTERLY = 'Quarterly';
    case ANNUAL = 'Annual';
    case ON_DEMAND = 'OnDemand';
}
