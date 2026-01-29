<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents an attribute in AttributeController. Used for getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AttributeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AttributeDtoFactory factory()
 */
class AttributeDto extends Model
{
    #[Property]
    public ?string $attributeId;

    #[Property]
    public ?string $description;

    #[Property]
    public ?string $controlType;

    #[Property]
    public ?bool $internal;

    #[Property]
    public ?string $entryMask;

    #[Property]
    public ?string $regExp;

    #[Property]
    public ?array $details;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $createdDateTime;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?string $errorInfo;
}
