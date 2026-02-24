<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\EinvoiceContractDtoFactory testFactory()
 */
class EinvoiceContractDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\EinvoiceContractDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('fInvoiceContractID')]
        public ?string $fInvoiceContractId = null,
        #[MapName('fInvoiceIntermediatorID')]
        public ?string $fInvoiceIntermediatorId = null,
    ) {}
}
