<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PriceManagerDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PriceManagerDtoFactory factory()
 */
class PriceManagerDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
