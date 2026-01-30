<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represents a Expense Receipt in ExpenseReceiptController. Used to post data to server.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseReceiptUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseReceiptUpdateDtoFactory factory()
 */
class ExpenseReceiptUpdateDto extends Model
{
    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $date;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $currency;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $refNbr;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $inventory;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $description;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $uom;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $quantity;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $unitCost;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $totalAmount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $employeePart;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $claimedBy;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $branch;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $expenseClaim;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $invoiceable;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $project;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $projectTask;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $customer;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $location;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $expenseAccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $expenseSub;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $salesAccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $salesSub;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $taxCategory;
}
