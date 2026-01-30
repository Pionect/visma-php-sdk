<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WithoutWithVatDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WithoutWithVatDtoFactory factory()
 */
class WithoutWithVatDto extends Model
{
    public function __construct(
        public int|float|null $withoutVat = null,
        public int|float|null $withVat = null,
    ) {}
}
