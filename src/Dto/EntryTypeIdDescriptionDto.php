<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\EntryTypeIdDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\EntryTypeIdDescriptionDtoFactory testFactory()
 */
class EntryTypeIdDescriptionDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
