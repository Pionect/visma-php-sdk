<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CashAccountIdDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CashAccountIdDescriptionDtoFactory testFactory()
 */
class CashAccountIdDescriptionDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
