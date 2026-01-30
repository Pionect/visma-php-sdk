<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PromoCodeIdDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PromoCodeIdDescriptionDtoFactory testFactory()
 */
class PromoCodeIdDescriptionDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
