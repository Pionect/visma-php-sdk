<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a RutRot in RutRotController. Used for getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\RotRutDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\RotRutDtoFactory factory()
 */
class RotRutDto extends Model
{
    #[Property]
    public ?string $docType;

    #[Property]
    public ?string $refNbr;

    #[Property]
    public ?bool $distributedAutomaticaly;

    #[Property]
    public ?string $type;

    #[Property]
    public ?float $totalDeductableAmount;

    #[Property]
    public ?float $otherCost;

    #[Property]
    public ?float $materialCost;

    #[Property]
    public ?float $workPrice;

    #[Property]
    public ?float $distributedAmount;

    #[Property]
    public ?string $appartment;

    #[Property]
    public ?string $estate;

    #[Property]
    public ?string $organizationNbr;

    #[Property]
    public ?array $distribution;
}
