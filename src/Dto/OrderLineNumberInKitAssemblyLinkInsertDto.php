<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Reference to the order line number that the kit assembly is connected to
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\OrderLineNumberInKitAssemblyLinkInsertDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\OrderLineNumberInKitAssemblyLinkInsertDtoFactory testFactory()
 */
class OrderLineNumberInKitAssemblyLinkInsertDto extends Model
{
    public function __construct(
        public ?int $value = null,
    ) {}
}
