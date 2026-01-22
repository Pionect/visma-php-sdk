<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class FixedAssetRegisterDto extends Model
{
    /** The document date for this fixed asset transaction */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $documentDate;

    /** Status can be */
    #[Property]
    public ?string $status;

    /** Indecates whether this fixed asset transaction is on hold or not */
    #[Property]
    public ?bool $hold;
}
