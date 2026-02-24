<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CountyDtoFactory testFactory()
 */
class CountyDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CountyDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click the magnifier > The identifier */
        public ?string $id = null,
        /** Click the magnifier > The displayed name */
        public ?string $name = null,
    ) {}
}
