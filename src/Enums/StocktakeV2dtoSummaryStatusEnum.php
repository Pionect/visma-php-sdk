<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The top part > Status > An info field that shows the current status of this
 * stocktaking document.
 */
enum StocktakeV2dtoSummaryStatusEnum: string
{
    case CANCELLED = 'Cancelled';
    case COMPLETED = 'Completed';
    case COUNTING = 'Counting';
    case ENTERING = 'Entering';
}
