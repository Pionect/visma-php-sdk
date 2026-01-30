<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * Other invoice settings tab.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\EinvoiceContractInCustomerDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\EinvoiceContractInCustomerDtoFactory testFactory()
 */
class EinvoiceContractInCustomerDto extends Model
{
    public function __construct(
        #[MapName('fInvoiceContractID')]
        public ?string $fInvoiceContractId = null,
        #[MapName('fInvoiceIntermediatorID')]
        public ?string $fInvoiceIntermediatorId = null,
    ) {}
}
