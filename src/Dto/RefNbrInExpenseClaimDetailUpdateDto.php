<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The identifier of the transaction.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\RefNbrInExpenseClaimDetailUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\RefNbrInExpenseClaimDetailUpdateDtoFactory factory()
 */
class RefNbrInExpenseClaimDetailUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
