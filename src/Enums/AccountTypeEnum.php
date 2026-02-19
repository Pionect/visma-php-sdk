<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Type > The type of account: Asset, Liability, Income, or Expense.
 */
enum AccountTypeEnum: string
{
    case ASSET = 'Asset';
    case LIABILITY = 'Liability';
    case INCOME = 'Income';
    case EXPENSE = 'Expense';
}
