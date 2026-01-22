<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Expense Receipt in ExpenseReceiptController. Used to post data to server.
 */
class ExpenseReceiptUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfNullableOfDateTime $date;

    #[Property]
    public ?\DtoValueOfString $currency;

    #[Property]
    public ?\DtoValueOfString $refNbr;

    #[Property]
    public ?\DtoValueOfString $inventory;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\DtoValueOfString $uom;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $quantity;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $unitCost;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $totalAmount;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $employeePart;

    #[Property]
    public ?\DtoValueOfString $claimedBy;

    #[Property]
    public ?\DtoValueOfString $branch;

    #[Property]
    public ?\DtoValueOfString $expenseClaim;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $invoiceable;

    #[Property]
    public ?\DtoValueOfString $project;

    #[Property]
    public ?\DtoValueOfString $projectTask;

    #[Property]
    public ?\DtoValueOfString $customer;

    #[Property]
    public ?\DtoValueOfString $location;

    #[Property]
    public ?\DtoValueOfString $expenseAccount;

    #[Property]
    public ?\DtoValueOfString $expenseSub;

    #[Property]
    public ?\DtoValueOfString $salesAccount;

    #[Property]
    public ?\DtoValueOfString $salesSub;

    #[Property]
    public ?\DtoValueOfString $taxCategory;
}
