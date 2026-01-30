<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationNameDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationNameDescriptionDtoFactory testFactory()
 */
class LocationNameDescriptionDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
