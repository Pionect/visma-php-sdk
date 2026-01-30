<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\KitSpecificationUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\KitSpecificationUpdateDtoFactory testFactory()
 */
class KitSpecificationUpdateDto extends Model
{
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
