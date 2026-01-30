<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TaxCategoryNumberDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TaxCategoryNumberDescriptionDtoFactory testFactory()
 */
class TaxCategoryNumberDescriptionDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
