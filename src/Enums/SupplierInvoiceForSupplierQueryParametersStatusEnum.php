<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The status of the document
 */
enum SupplierInvoiceForSupplierQueryParametersStatusEnum: string
{
    case HOLD = 'Hold';
    case BALANCED = 'Balanced';
    case VOIDED = 'Voided';
    case SCHEDULED = 'Scheduled';
    case OPEN = 'Open';
    case CLOSED = 'Closed';
    case PRINTED = 'Printed';
    case PREBOOKED = 'Prebooked';
    case RESERVED = 'Reserved';
}
