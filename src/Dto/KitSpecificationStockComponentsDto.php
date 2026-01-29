<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\KitSpecificationStockComponentsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\KitSpecificationStockComponentsDtoFactory factory()
 */
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
}
