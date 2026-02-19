<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * Default book settings for the fixed asset using this fixed asset class
 *
 * @method static \Pionect\VismaSdk\Factories\BookSettingsInFixedAssetClassDtoFactory testFactory()
 */
class BookSettingsInFixedAssetClassDto extends SpatieData
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
