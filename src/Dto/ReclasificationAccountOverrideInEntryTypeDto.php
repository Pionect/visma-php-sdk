<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The account that should be used instead of the reclassification account specified as the default one
 * on the Entry types tab.
 *
 * @method static \Pionect\VismaSdk\Factories\ReclasificationAccountOverrideInEntryTypeDtoFactory testFactory()
 */
class ReclasificationAccountOverrideInEntryTypeDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        public ?string $externalCode1 = null,
        public ?string $externalCode2 = null,
        public ?bool $active = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
