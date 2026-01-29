<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SendExpenseClaimToApprovalActionResultDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SendExpenseClaimToApprovalActionResultDtoFactory factory()
 */
class SendExpenseClaimToApprovalActionResultDto extends Model
{
    #[Property]
    public ?string $actionId;

    #[Property]
    public ?string $actionResult;

    #[Property]
    public ?string $errorInfo;
}
