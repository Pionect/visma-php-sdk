<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\EinvoiceContractUpdateDtoFactory testFactory()
 */
class EinvoiceContractUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\EinvoiceContractUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('fInvoiceContractID'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $fInvoiceContractId = null,
        #[MapName('fInvoiceIntermediatorID'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $fInvoiceIntermediatorId = null,
    ) {}
}
