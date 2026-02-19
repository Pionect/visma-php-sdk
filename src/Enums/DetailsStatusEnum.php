<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Status can be
 */
enum DetailsStatusEnum: string
{
    case ACTIVE = 'Active';
    case DISPOSED = 'Disposed';
    case FULLY_DEPRECIATED = 'FullyDepreciated';
    case HOLD = 'Hold';
    case REVERSED = 'Reversed';
    case SUSPENDED = 'Suspended';
}
