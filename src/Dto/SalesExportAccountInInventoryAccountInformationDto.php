<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Sales - export account &gt; The income account to be used for this stock item to record export
 * sales.
 *
 * @method static \Pionect\VismaSdk\Factories\SalesExportAccountInInventoryAccountInformationDtoFactory testFactory()
 */
class SalesExportAccountInInventoryAccountInformationDto extends SpatieData
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
