<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * Other invoice settings tab.
 *
 * @method static \Pionect\VismaSdk\Factories\EinvoiceContractInCustomerDtoFactory testFactory()
 */
class EinvoiceContractInCustomerDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\EinvoiceContractInCustomerDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('fInvoiceContractID')]
        public ?string $fInvoiceContractId = null,
        #[MapName('fInvoiceIntermediatorID')]
        public ?string $fInvoiceIntermediatorId = null,
    ) {}
}
