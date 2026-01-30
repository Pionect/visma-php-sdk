<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\EinvoiceContractUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\EinvoiceContractUpdateDtoFactory factory()
 */
class EinvoiceContractUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $fInvoiceContractId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $fInvoiceIntermediatorId;
}
