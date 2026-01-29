<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierDetailsLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierDetailsLineDtoFactory factory()
 */
class SupplierDetailsLineDto extends Model
{
    #[Property]
    public ?bool $active;

    #[Property]
    public ?bool $default;

    #[Property]
    public ?string $supplierId;

    #[Property]
    public ?string $supplierName;

    #[Property]
    public ?string $location;

    #[Property]
    public ?string $warehouse;

    #[Property]
    public ?string $purchaseUnit;

    #[Property]
    public ?string $supplierItemId;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $shipmentLeadTime;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $leadTime;

    #[Property]
    public ?int $minOrderFreq;

    #[Property]
    public ?float $minOrderQty;

    #[Property]
    public ?float $maxOrderQty;

    #[Property]
    public ?float $lotSize;

    #[Property]
    public ?float $eoq;

    #[Property]
    public ?string $currencyId;

    #[Property]
    public ?float $lastSupplierPrice;

    #[Property]
    public ?bool $override;
}
