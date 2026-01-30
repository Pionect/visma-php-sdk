<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\EinvoiceContractDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\EinvoiceContractDtoFactory testFactory()
 */
class EinvoiceContractDto extends Model
{
    public function __construct(
        #[MapName('fInvoiceContractID')]
        public ?string $fInvoiceContractId = null,
        #[MapName('fInvoiceIntermediatorID')]
        public ?string $fInvoiceIntermediatorId = null,
    ) {}
}
