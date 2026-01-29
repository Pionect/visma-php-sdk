<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AddOrderLinesToPurchaseReceiptActionResultDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AddOrderLinesToPurchaseReceiptActionResultDtoFactory factory()
 */
class AddOrderLinesToPurchaseReceiptActionResultDto extends Model
{
    #[Property]
    public ?string $actionId;

    #[Property]
    public ?string $actionResult;

    #[Property]
    public ?string $errorInfo;
}
