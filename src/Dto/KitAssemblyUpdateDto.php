<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\KitAssemblyUpdateDtoFactory testFactory()
 */
class KitAssemblyUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Type, possible values: P - Production, D - Disassembly */
        public ?string $type = null,
        public ?string $refNo = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $hold = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $date = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $postPeriod = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $itemId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $revision = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $reasonCode = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $warehouse = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $location = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $uoM = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $quantity = null,
        /** @var KitAssemblyStockComponentsUpdateDto[]|null */
        public ?array $stockComponentLines = null,
        /**
         * @var KitAssemblyStockComponentAllocationsUpdateDto[]|null
         *                                                           This property is deprecated and will be removed in a future version.
         *                                                           Use StockComponentLineAllocations within each StockComponentLine instead.
         */
        public ?array $stockComponentAllocations = null,
        /** @var KitAssemblyNonStockComponentsUpdateDto[]|null */
        public ?array $nonStockComponentLines = null,
        /** @var InallocationsUpdateDto[]|null */
        public ?array $kitAllocations = null,
    ) {}
}
