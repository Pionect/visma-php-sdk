<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Delivery settings tab &gt; Delivery instruction section &gt; VAT zone ID &gt; The VAT zone of
 * the delivery location.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatZoneInBranchDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatZoneInBranchDtoFactory factory()
 */
class VatZoneInBranchDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
