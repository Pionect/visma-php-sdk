<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Reference to the order type that the kit assembly is connected to
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\OrderTypeInKitAssemblyLinkInsertDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\OrderTypeInKitAssemblyLinkInsertDtoFactory testFactory()
 */
class OrderTypeInKitAssemblyLinkInsertDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
