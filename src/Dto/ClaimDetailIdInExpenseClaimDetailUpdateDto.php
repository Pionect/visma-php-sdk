<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Identifies the expense claim detail line to update
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ClaimDetailIdInExpenseClaimDetailUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ClaimDetailIdInExpenseClaimDetailUpdateDtoFactory testFactory()
 */
class ClaimDetailIdInExpenseClaimDetailUpdateDto extends Model
{
    public function __construct(
        public ?int $value = null,
    ) {}
}
