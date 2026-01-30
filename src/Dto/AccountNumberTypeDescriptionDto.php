<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AccountNumberTypeDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AccountNumberTypeDescriptionDtoFactory factory()
 */
class AccountNumberTypeDescriptionDto extends Model
{
    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
