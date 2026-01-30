<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\MultilanguageDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\MultilanguageDtoFactory factory()
 */
class MultilanguageDto extends Model
{
    public function __construct(
        #[MapName('languageISO')]
        public ?string $languageIso = null,
        public ?string $translation = null,
        public ?bool $isTranslated = null,
    ) {}
}
