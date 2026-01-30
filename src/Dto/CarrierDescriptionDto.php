<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CarrierDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CarrierDescriptionDtoFactory factory()
 */
class CarrierDescriptionDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
