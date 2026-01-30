<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseClaimNumberDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseClaimNumberDescriptionDtoFactory factory()
 */
class ExpenseClaimNumberDescriptionDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
