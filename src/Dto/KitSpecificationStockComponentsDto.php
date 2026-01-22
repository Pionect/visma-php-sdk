<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class KitSpecificationStockComponentsDto extends Model
{
    #[Property]
    public ?int $lineNbr;

    #[Property]
    public ?string $componentId;

    #[Property]
    public ?float $componentQty;

    #[Property]
    public ?string $uom;

    #[Property]
    public ?bool $allowComponentQtyVariance;

    #[Property]
    public ?float $minComponentQty;

    #[Property]
    public ?float $maxComponentQty;

    #[Property]
    public ?float $disassemblyCoeff;

    #[Property]
    public ?bool $allowComponentSubstitution;

    #[Property]
    public ?string $description;

    #[Property]
    public ?string $errorInfo;

    #[Property]
    public ?\MetadataDto $metadata;
}
