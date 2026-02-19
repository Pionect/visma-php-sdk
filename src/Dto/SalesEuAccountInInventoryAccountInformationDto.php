<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Sales - EU account &gt; The income account to be used for this stock item to record EU sales.
 *
 * @method static \Pionect\VismaSdk\Factories\SalesEuAccountInInventoryAccountInformationDtoFactory testFactory()
 */
class SalesEuAccountInInventoryAccountInformationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
