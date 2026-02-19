<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Method used to track the Lot Serial Class
 */
enum LotSerialClassTrackingMethodEnum: string
{
    case NOT_NUMBERED = 'NotNumbered';
    case LOT_NUMBERED = 'LotNumbered';
    case SERIAL_NUMBERED = 'SerialNumbered';
}
