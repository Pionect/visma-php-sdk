<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Sales - EU account &gt; The income account to be used for this stock item to record EU sales.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesEuAccountInInventoryAccountInformationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesEuAccountInInventoryAccountInformationDtoFactory factory()
 */
class SalesEuAccountInInventoryAccountInformationDto extends Model
{
    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
