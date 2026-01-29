<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WithoutWithVatDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WithoutWithVatDtoFactory factory()
 */
class WithoutWithVatDto extends Model
{
    #[Property]
    public ?float $withoutVat;

    #[Property]
    public ?float $withVat;
}
