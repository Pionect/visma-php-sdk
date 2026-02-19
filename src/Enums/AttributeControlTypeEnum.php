<?php

namespace Pionect\VismaSdk\Enums;

enum AttributeControlTypeEnum: string
{
    case TEXT = 'Text';
    case COMBO = 'Combo';
    case MULTI_SELECT_COMBO = 'MultiSelectCombo';
    case LOOKUP = 'Lookup';
    case CHECKBOX = 'Checkbox';
    case DATETIME = 'Datetime';
}
