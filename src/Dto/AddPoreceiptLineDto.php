<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AddPoreceiptLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AddPoreceiptLineDtoFactory factory()
 */
class AddPoreceiptLineDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $poReceiptNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $poReceiptLineNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $quantity;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $unitCostInCurrency;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $costInCurrency;
}
