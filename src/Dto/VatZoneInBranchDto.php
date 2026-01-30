<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Delivery settings tab &gt; Delivery instruction section &gt; VAT zone ID &gt; The VAT zone of
 * the delivery location.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatZoneInBranchDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatZoneInBranchDtoFactory testFactory()
 */
class VatZoneInBranchDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
