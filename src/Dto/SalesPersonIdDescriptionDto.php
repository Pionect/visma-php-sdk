<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesPersonIdDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesPersonIdDescriptionDtoFactory factory()
 */
class SalesPersonIdDescriptionDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
