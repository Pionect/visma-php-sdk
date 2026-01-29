<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LanguageUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LanguageUpdateDtoFactory factory()
 */
class LanguageUpdateDto extends Model
{
    #[Property]
    public ?string $languageIso;
}
