<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ReleaseCustomerCreditNoteActionResultDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ReleaseCustomerCreditNoteActionResultDtoFactory factory()
 */
class ReleaseCustomerCreditNoteActionResultDto extends Model
{
    #[Property]
    public ?string $actionId;

    #[Property]
    public ?string $actionResult;

    #[Property]
    public ?string $errorInfo;
}
