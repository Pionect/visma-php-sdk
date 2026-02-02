<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Both tabs
 *
 * @method static \Pionect\VismaSdk\Factories\ItemInContractUsageLineDtoFactory testFactory()
 */
class ItemInContractUsageLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
