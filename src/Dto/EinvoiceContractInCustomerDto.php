<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Other invoice settings tab.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\EinvoiceContractInCustomerDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\EinvoiceContractInCustomerDtoFactory factory()
 */
class EinvoiceContractInCustomerDto extends Model
{
    #[Property]
    public ?string $fInvoiceContractId;

    #[Property]
    public ?string $fInvoiceIntermediatorId;
}
