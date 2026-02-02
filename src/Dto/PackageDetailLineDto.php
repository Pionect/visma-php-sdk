<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\PackageDetailLineDtoFactory testFactory()
 */
class PackageDetailLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $lineNumber = null,
        public ?bool $confirmed = null,
        public ?string $boxId = null,
        public ?string $type = null,
        public ?string $description = null,
        public int|float|null $weight = null,
        public ?string $uom = null,
        public int|float|null $volume = null,
        #[MapName('volumeUOM')]
        public ?string $volumeUom = null,
        public int|float|null $declaredValue = null,
        #[MapName('coDAmount')]
        public int|float|null $coDamount = null,
        public ?string $trackingNumber = null,
        public ?string $customRefNbr1 = null,
        public ?string $customRefNbr2 = null,
    ) {}
}
