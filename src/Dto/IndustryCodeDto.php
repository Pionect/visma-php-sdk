<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\IndustryCodeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\IndustryCodeDtoFactory testFactory()
 */
class IndustryCodeDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
