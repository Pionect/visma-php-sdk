<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Assignment method used for the Lot Serial Class (When Used, When Received)
 */
enum LotSerialClassAssignmentMethodEnum: string
{
    case WHEN_RECEIVED = 'WhenReceived';
    case WHEN_USED = 'WhenUsed';
}
