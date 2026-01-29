<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SocommissionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SocommissionDtoFactory factory()
 */
class SocommissionDto extends Model
{
    #[Property]
    public ?string $salesPersonId;

    #[Property]
    public ?float $commissionPercent;

    #[Property]
    public ?float $commissionAmount;

    #[Property]
    public ?float $commissionableAmount;
}
