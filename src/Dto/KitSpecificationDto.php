<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\KitSpecificationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\KitSpecificationDtoFactory factory()
 */
class KitSpecificationDto extends Model
{
    public function __construct(
        #[MapName('kitInventoryID')]
        public ?string $kitInventoryId = null,
        public ?string $revision = null,
        public ?string $description = null,
        public ?bool $isActive = null,
        public ?bool $allowComponentAddition = null,
        public ?bool $isNonStock = null,
        public ?\Carbon\Carbon $createdDateTime = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?array $stockComponentLines = null,
        public ?array $nonStockComponentLines = null,
        public ?string $timestamp = null,
        public ?string $errorInfo = null,
    ) {}
}
