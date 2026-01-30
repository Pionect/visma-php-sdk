<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
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
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $date = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $currency = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $refNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $inventory = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $uom = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $quantity = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $unitCost = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $totalAmount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $employeePart = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $claimedBy = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $branch = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $expenseClaim = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $invoiceable = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $project = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $projectTask = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customer = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $location = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $expenseAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $expenseSub = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $salesAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $salesSub = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $taxCategory = null,
    ) {}
}
