<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\MultilanguageTranslationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\MultilanguageTranslationDtoFactory factory()
 */
class MultilanguageTranslationDto extends Model
{
    public function __construct(
        public ?string $translation = null,
    ) {}
}
