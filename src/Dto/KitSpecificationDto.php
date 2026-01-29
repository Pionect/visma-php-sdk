<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\KitSpecificationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\KitSpecificationDtoFactory factory()
 */
class KitSpecificationDto extends Model
{
    #[Property]
    public ?string $kitInventoryId;

    #[Property]
    public ?string $revision;

    #[Property]
    public ?string $description;

    #[Property]
    public ?bool $isActive;

    #[Property]
    public ?bool $allowComponentAddition;

    #[Property]
    public ?bool $isNonStock;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $createdDateTime;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?array $stockComponentLines;

    #[Property]
    public ?array $nonStockComponentLines;

    /** Timestamp of the kit specification record */
    #[Property]
    public ?string $timestamp;

    #[Property]
    public ?string $errorInfo;
}
