<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ReasonCodeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ReasonCodeDtoFactory testFactory()
 */
class ReasonCodeDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
