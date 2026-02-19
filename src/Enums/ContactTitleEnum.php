<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The top part > First name > The contact's courtesy title.
 */
enum ContactTitleEnum: string
{
    case DOCTOR = 'Doctor';
    case MISS = 'Miss';
    case MR = 'Mr';
    case MRS = 'Mrs';
    case MS = 'Ms';
    case PROF = 'Prof';
}
