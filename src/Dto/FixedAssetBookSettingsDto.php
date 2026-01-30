<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FixedAssetBookSettingsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FixedAssetBookSettingsDtoFactory factory()
 */
class FixedAssetBookSettingsDto extends Model
{
    public function __construct(
        #[MapName('bookID')]
        public ?string $bookId = null,
        #[MapName('depreciationMethodID')]
        public ?string $depreciationMethodId = null,
    ) {}
}
