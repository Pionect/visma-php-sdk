<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a RutRot Distribution Line For RutRot in RutRotController. Used for getting
 * data.
 */
class RotRutDistributionDto extends Model
{
    #[Property]
    public ?int $lineNbr;

    #[Property]
    public ?string $personalId;

    #[Property]
    public ?float $amount;

    #[Property]
    public ?bool $extra;
}
