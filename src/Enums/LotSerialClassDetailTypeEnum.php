<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Segment type for the Lot Serial segment
 */
enum LotSerialClassDetailTypeEnum: string
{
    case NUMERIC_VAL = 'NumericVal';
    case FIXED_CONST = 'FixedConst';
    case DATE_CONST = 'DateConst';
    case DAY_CONST = 'DayConst';
    case MONTH_CONST = 'MonthConst';
    case MONTH_LONG_CONST = 'MonthLongConst';
    case YEAR_CONST = 'YearConst';
    case YEAR_LONG_CONST = 'YearLongConst';
}
