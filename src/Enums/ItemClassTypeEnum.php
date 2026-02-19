<?php

namespace Pionect\VismaSdk\Enums;

enum ItemClassTypeEnum: string
{
    case NON_STOCK_ITEM = 'NonStockItem';
    case LABOR_ITEM = 'LaborItem';
    case SERVICE_ITEM = 'ServiceItem';
    case CHARGE_ITEM = 'ChargeItem';
    case EXPENSE_ITEM = 'ExpenseItem';
    case FINISHED_GOOD_ITEM = 'FinishedGoodItem';
    case COMPONENT_PART_ITEM = 'ComponentPartItem';
    case SUBASSEMBLY_ITEM = 'SubassemblyItem';
}
