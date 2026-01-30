<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\UserDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\UserDescriptionDtoFactory testFactory()
 */
class UserDescriptionDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
