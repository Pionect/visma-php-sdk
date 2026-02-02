<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a RutRot Distribution Line For RutRot in RutRotController. Used for getting
 * data.
 *
 * @method static \Pionect\VismaSdk\Factories\RotRutDistributionDtoFactory testFactory()
 */
class RotRutDistributionDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $lineNbr = null,
        public ?string $personalId = null,
        public int|float|null $amount = null,
        public ?bool $extra = null,
    ) {}
}
