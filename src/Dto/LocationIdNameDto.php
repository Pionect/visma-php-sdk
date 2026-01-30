<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationIdNameDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationIdNameDtoFactory factory()
 */
class LocationIdNameDto extends Model
{
    public function __construct(
        public ?int $id = null,
        public ?string $name = null,
    ) {}
}
