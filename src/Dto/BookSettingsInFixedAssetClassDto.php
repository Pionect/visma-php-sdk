<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Default book settings for the fixed asset using this fixed asset class
 */
class BookSettingsInFixedAssetClassDto extends Model
{
    /** The book id */
    #[Property]
    public ?string $bookId;

    /** The depreciation method id */
    #[Property]
    public ?string $depreciationMethodId;
}
