<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a inventory issue in InventoryIssueController. Used by getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryReceiptUpdateDtoFactory testFactory()
 */
class InventoryReceiptUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $transferNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $controlCost = null,
        /**
         * @var InventoryReceiptLineUpdateDto[]|null
         *                                           The inventory issue lines
         */
        public ?array $receiptLines = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $referenceNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $hold = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $date = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $postPeriod = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $externalReference = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $controlQuantity = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $branchNumber = null,
    ) {}
}
