<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\MultilanguageDtoFactory testFactory()
 */
class MultilanguageDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('languageISO')]
        public ?string $languageIso = null,
        public ?string $translation = null,
        public ?bool $isTranslated = null,
    ) {}
}
