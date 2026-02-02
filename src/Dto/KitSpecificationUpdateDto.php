<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\KitSpecificationUpdateDtoFactory testFactory()
 */
class KitSpecificationUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $operation = null,
        #[MapName('kitInventoryID'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $kitInventoryId = null,
        #[MapName('revisionID'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $revisionId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $descr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $isActive = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $allowCompAddition = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $isNonStock = null,
        public ?array $stockComponentLines = null,
        public ?array $nonStockComponentLines = null,
    ) {}
}
