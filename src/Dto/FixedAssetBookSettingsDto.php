<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class FixedAssetBookSettingsDto extends Model
{
    /** The book id */
    #[Property]
    public ?string $bookId;

    /** The depreciation method id */
    #[Property]
    public ?string $depreciationMethodId;
}
