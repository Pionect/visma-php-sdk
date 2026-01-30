<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Sales - export account &gt; The income account to be used for this stock item to record export
 * sales.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesExportAccountInInventoryAccountInformationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesExportAccountInInventoryAccountInformationDtoFactory factory()
 */
class SalesExportAccountInInventoryAccountInformationDto extends Model
{
    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
