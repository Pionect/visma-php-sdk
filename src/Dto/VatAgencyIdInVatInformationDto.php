<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * VAT settings tab &gt; Tax agency &gt; The name of the tax agency to receive the VAT.
 */
class VatAgencyIdInVatInformationDto extends Model
{
    /** The internal id of the supplier */
    #[Property]
    public ?int $internalId;

    /** Click the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $number;

    /** Click the magnifier. &gt; The name. */
    #[Property]
    public ?string $name;
}
