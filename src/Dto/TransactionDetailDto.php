<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class TransactionDetailDto extends Model
{
    /** The line number in the table. */
    #[Property]
    public ?int $lineNumber;

    #[Property]
    public ?\branchInTransactionDetailDto $branch;

    #[Property]
    public ?\itemInTransactionDetailDto $item;

    /** Description &gt; The description provided for the item. */
    #[Property]
    public ?string $description;

    /** Quantity &gt; The quantity of the item. */
    #[Property]
    public ?float $quantity;

    /** UoM &gt; The unit of measure of the item. */
    #[Property]
    public ?string $uom;

    /** Price &gt; The unit price for the item. */
    #[Property]
    public ?float $price;

    /** Amount &gt; The total amount for all units or items. */
    #[Property]
    public ?float $amount;

    #[Property]
    public ?\offsetCashAccountInTransactionDetailDto $offsetCashAccount;

    #[Property]
    public ?\offsetAccountInTransactionDetailDto $offsetAccount;

    #[Property]
    public ?\offsetSubAccountInTransactionDetailDto $offsetSubAccount;

    #[Property]
    public ?\taxCategoryInTransactionDetailDto $taxCategory;

    /** Non-invoiceable &gt; A check box that indicates (if selected) that this transaction is non-invoiceable in the project. */
    #[Property]
    public ?bool $nonBillable;

    #[Property]
    public ?\projectInTransactionDetailDto $project;

    #[Property]
    public ?\projectTaskInTransactionDetailDto $projectTask;
}
