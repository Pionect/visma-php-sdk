<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerSalesPriceUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerSalesPriceUpdateDtoFactory factory()
 */
class CustomerSalesPriceUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $priceType;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $priceCode;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $inventoryId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $uoM;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $promotion;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $breakQty;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $price;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $currency;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $vat;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $effectiveDate;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $expirationDate;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $warehouse;
}
