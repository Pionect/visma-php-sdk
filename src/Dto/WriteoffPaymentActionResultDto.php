<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WriteoffPaymentActionResultDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WriteoffPaymentActionResultDtoFactory factory()
 */
class WriteoffPaymentActionResultDto extends Model
{
    #[Property]
    public ?string $actionId;

    #[Property]
    public ?string $actionResult;

    #[Property]
    public ?string $errorInfo;
}
