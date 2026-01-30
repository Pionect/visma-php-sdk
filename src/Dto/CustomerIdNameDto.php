<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerIdNameDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerIdNameDtoFactory factory()
 */
class CustomerIdNameDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
