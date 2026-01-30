<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PaymentLineBaseUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentLineBaseUpdateDtoFactory factory()
 */
class PaymentLineBaseUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $documentType;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $refNbr;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $amountPaid;
}
