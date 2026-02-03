<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\KitSpecificationDtoFactory testFactory()
 */
class KitSpecificationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
        /** @var KitSpecificationStockComponentsDto[]|null */
        public ?array $stockComponentLines = null,
        /** @var KitSpecificationNonStockComponentDto[]|null */
        public ?array $nonStockComponentLines = null,
        public ?string $timestamp = null,
        public ?string $errorInfo = null,
    ) {}
}
