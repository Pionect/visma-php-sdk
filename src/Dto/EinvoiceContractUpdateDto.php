<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\EinvoiceContractUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\EinvoiceContractUpdateDtoFactory testFactory()
 */
class EinvoiceContractUpdateDto extends Model
{
    public function __construct(
        #[MapName('fInvoiceContractID'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $fInvoiceContractId = null,
        #[MapName('fInvoiceIntermediatorID'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $fInvoiceIntermediatorId = null,
    ) {}
}
