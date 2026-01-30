<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SendExpenseClaimToApprovalActionResultDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SendExpenseClaimToApprovalActionResultDtoFactory factory()
 */
class SendExpenseClaimToApprovalActionResultDto extends Model
{
    public function __construct(
        public ?string $actionId = null,
        public ?string $actionResult = null,
        public ?string $errorInfo = null,
    ) {}
}
