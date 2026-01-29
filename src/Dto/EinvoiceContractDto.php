<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\EinvoiceContractDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\EinvoiceContractDtoFactory factory()
 */
class EinvoiceContractDto extends Model
{
    #[Property]
    public ?string $fInvoiceContractId;

    #[Property]
    public ?string $fInvoiceIntermediatorId;
}
