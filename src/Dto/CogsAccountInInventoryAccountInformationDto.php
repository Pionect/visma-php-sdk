<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Only used for Stock items.
 * COGS account &gt; The expense account to be used for this stock item to
 * record the cost of goods sold (COGS) once the sales order is released.
 *
 * @method static \Pionect\VismaSdk\Factories\CogsAccountInInventoryAccountInformationDtoFactory testFactory()
 */
class CogsAccountInInventoryAccountInformationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
