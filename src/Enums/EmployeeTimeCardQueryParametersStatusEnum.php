<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The status of the document.
 */
enum EmployeeTimeCardQueryParametersStatusEnum: string
{
    case HOLD = 'Hold';
    case OPEN = 'Open';
    case APPROVED = 'Approved';
    case REJECTED = 'Rejected';
    case RELEASED = 'Released';
}
