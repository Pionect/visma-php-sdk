<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\FixedAssetBookSettingsDtoFactory testFactory()
 */
class FixedAssetBookSettingsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The book id */
        #[MapName('bookID')]
        public ?string $bookId = null,
        /** The depreciation method id */
        #[MapName('depreciationMethodID')]
        public ?string $depreciationMethodId = null,
    ) {}
}
