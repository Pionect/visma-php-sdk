<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CashTransactionDetailUpdateDtoFactory testFactory()
 */
class CashTransactionDetailUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $lineNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $branchNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $inventoryNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $quantity = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $uom = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $price = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $amount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $offsetAccount = null,
        /** @var SegmentUpdateDto[]|null */
        public ?array $offsetSubaccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $vatCode = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $notInvoiceable = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $project = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $projectTask = null,
    ) {}
}
