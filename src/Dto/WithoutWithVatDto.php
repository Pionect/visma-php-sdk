<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\WithoutWithVatDtoFactory testFactory()
 */
class WithoutWithVatDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public int|float|null $withoutVat = null,
        public int|float|null $withVat = null,
    ) {}
}
