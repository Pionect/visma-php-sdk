<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Recognition method > The method used to distribute the document amount over
 * the periods.
 */
enum DeferralCodeRecognitionMethodEnum: string
{
    case EVEN_PERIODS = 'EvenPeriods';
    case PRORATE_DAYS = 'ProrateDays';
    case EXACT_DAYS = 'ExactDays';
    case FLEXIBILE_PRORATE_DAYS = 'FlexibileProrateDays';
    case FLEXIBILE_EXACT_DAYS = 'FlexibileExactDays';
    case CASH_RECEIPT = 'CashReceipt';
}
