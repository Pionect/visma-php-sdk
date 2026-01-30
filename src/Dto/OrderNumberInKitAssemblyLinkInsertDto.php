<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Reference to the order number that the kit assembly is connected to
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\OrderNumberInKitAssemblyLinkInsertDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\OrderNumberInKitAssemblyLinkInsertDtoFactory testFactory()
 */
class OrderNumberInKitAssemblyLinkInsertDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
