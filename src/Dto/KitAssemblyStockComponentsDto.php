<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class KitAssemblyStockComponentsDto extends Model
{
    #[Property]
    public ?int $lineNbr;

    #[Property]
    public ?string $itemId;

    #[Property]
    public ?string $description;

    #[Property]
    public ?string $location;

    #[Property]
    public ?string $uoM;

    #[Property]
    public ?float $quantity;

    #[Property]
    public ?float $unitCost;

    #[Property]
    public ?string $reasonCode;

    #[Property]
    public ?float $componentQty;

    #[Property]
    public ?float $minComponentQty;

    #[Property]
    public ?bool $allowComponentQtyVariance;

    #[Property]
    public ?float $maxComponentQty;

    #[Property]
    public ?bool $allowComponentSubstitution;

    #[Property]
    public ?float $disassemblyCoeff;

    #[Property]
    public ?array $allocations;

    #[Property]
    public ?string $errorInfo;

    #[Property]
    public ?\MetadataDto $metadata;
}
