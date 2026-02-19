<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Type > The type of discount applied to the document (Group or Document).
 */
enum DiscountDetailTypeEnum: string
{
    case LINE = 'Line';
    case GROUP = 'Group';
    case DOCUMENT = 'Document';
    case FLAT = 'Flat';
}
