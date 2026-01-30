<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a RutRot Distribution Line For RutRot in RutRotController. Used for getting
 * data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\RotRutDistributionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\RotRutDistributionDtoFactory factory()
 */
class RotRutDistributionDto extends Model
{
    public function __construct(
        public ?int $lineNbr = null,
        public ?string $personalId = null,
        public int|float|null $amount = null,
        public ?bool $extra = null,
    ) {}
}
