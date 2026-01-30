<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\RateTableIdDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\RateTableIdDescriptionDtoFactory testFactory()
 */
class RateTableIdDescriptionDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
