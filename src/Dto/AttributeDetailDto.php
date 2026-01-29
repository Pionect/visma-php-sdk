<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AttributeDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AttributeDetailDtoFactory factory()
 */
class AttributeDetailDto extends Model
{
    #[Property]
    public ?string $valueId;

    #[Property]
    public ?string $description;

    #[Property]
    public ?int $sortOrder;

    #[Property]
    public ?bool $disabled;

    #[Property]
    public ?string $errorInfo;
}
