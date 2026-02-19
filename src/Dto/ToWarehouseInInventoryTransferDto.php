<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The top part &gt; To warehouse &gt; The warehouse to which the goods are
 * transferred.
 *
 * @method static \Pionect\VismaSdk\Factories\ToWarehouseInInventoryTransferDtoFactory testFactory()
 */
class ToWarehouseInInventoryTransferDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
