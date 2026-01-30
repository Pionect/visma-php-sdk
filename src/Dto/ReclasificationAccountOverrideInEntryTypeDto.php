<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The account that should be used instead of the reclassification account specified as the default one
 * on the Entry types tab.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ReclasificationAccountOverrideInEntryTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ReclasificationAccountOverrideInEntryTypeDtoFactory testFactory()
 */
class ReclasificationAccountOverrideInEntryTypeDto extends Model
{
    public function __construct(
        public ?string $type = null,
        public ?string $externalCode1 = null,
        public ?string $externalCode2 = null,
        public ?bool $active = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
