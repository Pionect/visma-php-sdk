<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ActiveMultilanguageDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ActiveMultilanguageDtoFactory factory()
 */
class ActiveMultilanguageDto extends Model
{
    public function __construct(
        public ?bool $isDefault = null,
        #[MapName('languageISO')]
        public ?string $languageIso = null,
        public ?string $nativeName = null,
        public ?bool $isActive = null,
    ) {}
}
