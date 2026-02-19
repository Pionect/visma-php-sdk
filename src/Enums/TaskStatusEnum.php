<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Mandatory field: Status* > The status of the task, which can be one of the
 * following: In planning, Active, Cancelled, Completed.
 */
enum TaskStatusEnum: string
{
    case PLANNED = 'Planned';
    case ACTIVE = 'Active';
    case CANCELLED = 'Cancelled';
    case CANCELED = 'Canceled';
    case COMPLETED = 'Completed';
}
