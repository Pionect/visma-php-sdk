<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\KitAssemblyDtoFactory testFactory()
 */
class KitAssemblyDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        public ?string $refNo = null,
        public ?string $status = null,
        public ?bool $hold = null,
        public ?\Carbon\Carbon $date = null,
        public ?string $postPeriod = null,
        #[MapName('itemID')]
        public ?string $itemId = null,
        public ?string $revision = null,
        public ?string $reasonCode = null,
        public ?string $description = null,
        public ?string $warehouse = null,
        public ?string $location = null,
        public ?string $uoM = null,
        public int|float|null $quantity = null,
        public ?\Carbon\Carbon $createdDateTime = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $salesOrderLink = null,
        public ?array $stockComponentLines = null,
        public ?array $nonStockComponentLines = null,
        public ?array $kitAllocations = null,
        public ?string $timestamp = null,
        public ?string $errorInfo = null,
    ) {}
}
