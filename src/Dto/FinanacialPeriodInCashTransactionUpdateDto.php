<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The property is now considered obsolete. Use Financial Period instead
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FinanacialPeriodInCashTransactionUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FinanacialPeriodInCashTransactionUpdateDtoFactory testFactory()
 */
class FinanacialPeriodInCashTransactionUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
