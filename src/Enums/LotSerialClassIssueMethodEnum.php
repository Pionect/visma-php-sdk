<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Issue method used for the Lot Serial Class (FIFO, LIFO, Sequential,
 * Expiration, User-Enterable)
 */
enum LotSerialClassIssueMethodEnum: string
{
    case FIFO = 'FIFO';
    case LIFO = 'LIFO';
    case SEQUENTIAL = 'Sequential';
    case EXPIRATION = 'Expiration';
    case USER_ENTERABLE = 'UserEnterable';
}
