<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerNumberDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerNumberDtoFactory testFactory()
 */
class CustomerNumberDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
