<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LanguageUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LanguageUpdateDtoFactory testFactory()
 */
class LanguageUpdateDto extends Model
{
    public function __construct(
        #[MapName('languageISO')]
        public ?string $languageIso = null,
    ) {}
}
