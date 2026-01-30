<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PutExpenseClaimOnHoldActionResultDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PutExpenseClaimOnHoldActionResultDtoFactory testFactory()
 */
class PutExpenseClaimOnHoldActionResultDto extends Model
{
    public function __construct(
        public ?string $actionId = null,
        public ?string $actionResult = null,
        public ?string $errorInfo = null,
    ) {}
}
