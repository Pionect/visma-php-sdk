<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Status can be
 */
enum FixedAssetRegisterStatusEnum: string
{
    case BALANCED = 'Balanced';
    case ON_HOLD = 'OnHold';
    case POSTED = 'Posted';
    case UNPOSTED = 'Unposted';
}
