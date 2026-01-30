<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\KitAssemblyLinkInsertDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\KitAssemblyLinkInsertDtoFactory testFactory()
 */
class KitAssemblyLinkInsertDto extends Model
{
    public function __construct(
        public ?OrderTypeInKitAssemblyLinkInsertDto $orderType = null,
        public ?OrderNumberInKitAssemblyLinkInsertDto $orderNumber = null,
        public ?OrderLineNumberInKitAssemblyLinkInsertDto $orderLineNumber = null,
    ) {}
}
