<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PackageDetailLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PackageDetailLineDtoFactory factory()
 */
class PackageDetailLineDto extends Model
{
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
