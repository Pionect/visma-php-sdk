<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * Default book settings for the fixed asset using this fixed asset class
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BookSettingsInFixedAssetClassDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BookSettingsInFixedAssetClassDtoFactory testFactory()
 */
class BookSettingsInFixedAssetClassDto extends Model
{
    public function __construct(
        #[MapName('bookID')]
        public ?string $bookId = null,
        #[MapName('depreciationMethodID')]
        public ?string $depreciationMethodId = null,
    ) {}
}
