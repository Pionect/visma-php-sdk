<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Delivery settings tab &gt; Delivery instruction section &gt; VAT zone ID &gt; The VAT zone of
 * the delivery location.
 *
 * @method static \Pionect\VismaSdk\Factories\VatZoneInBranchDtoFactory testFactory()
 */
class VatZoneInBranchDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
