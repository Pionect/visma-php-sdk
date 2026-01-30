<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierDetailsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierDetailsDtoFactory factory()
 */
class SupplierDetailsDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $active;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $default;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $supplierId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $location;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $purchaseUnit;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $supplierItemId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $override;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $shipmentLeadTime;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $minOrderFreq;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $minOrderQty;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $maxOrderQty;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $lotSize;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $eoq;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $currencyId;
}
