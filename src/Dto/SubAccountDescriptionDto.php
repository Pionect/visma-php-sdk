<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SubAccountDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SubAccountDescriptionDtoFactory factory()
 */
class SubAccountDescriptionDto extends Model
{
    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
