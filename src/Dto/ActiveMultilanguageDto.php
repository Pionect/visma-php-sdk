<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ActiveMultilanguageDtoFactory testFactory()
 */
class ActiveMultilanguageDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ActiveMultilanguageDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $isDefault = null,
        #[MapName('languageISO')]
        public ?string $languageIso = null,
        public ?string $nativeName = null,
        public ?bool $isActive = null,
    ) {}
}
