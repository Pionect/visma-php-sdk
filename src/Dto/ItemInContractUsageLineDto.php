<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Both tabs
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ItemInContractUsageLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ItemInContractUsageLineDtoFactory testFactory()
 */
class ItemInContractUsageLineDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
