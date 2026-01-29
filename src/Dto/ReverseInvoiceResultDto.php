<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ReverseInvoiceResultDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ReverseInvoiceResultDtoFactory factory()
 */
class ReverseInvoiceResultDto extends Model
{
    #[Property]
    public ?string $refNbr;

    #[Property]
    public ?string $docType;

    #[Property]
    public ?string $actionId;

    #[Property]
    public ?string $actionResult;

    #[Property]
    public ?string $errorInfo;
}
