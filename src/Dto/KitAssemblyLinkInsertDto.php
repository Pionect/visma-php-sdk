<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\KitAssemblyLinkInsertDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\KitAssemblyLinkInsertDtoFactory factory()
 */
class KitAssemblyLinkInsertDto extends Model
{
    #[Property]
    public ?orderTypeInKitAssemblyLinkInsertDto $orderType;

    #[Property]
    public ?orderNumberInKitAssemblyLinkInsertDto $orderNumber;

    #[Property]
    public ?orderLineNumberInKitAssemblyLinkInsertDto $orderLineNumber;
}
