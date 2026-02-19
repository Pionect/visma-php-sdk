<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\LocationIdNameDtoFactory testFactory()
 */
class LocationIdNameDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click the magnifier > The identifier */
        public ?int $id = null,
        /** Click the magnifier > The displayed name */
        public ?string $name = null,
    ) {}
}
