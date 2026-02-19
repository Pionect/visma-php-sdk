<?php

namespace Pionect\VismaSdk\Enums;

enum TemplateNumberDescriptionStatusEnum: string
{
    case PLANNED = 'Planned';
    case ACTIVE = 'Active';
    case COMPLETED = 'Completed';
    case CANCELLED = 'Cancelled';
    case ON_HOLD = 'OnHold';
    case PENDING_APPROVAL = 'PendingApproval';
}
