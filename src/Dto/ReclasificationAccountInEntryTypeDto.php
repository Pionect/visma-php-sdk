<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Reclassification account &gt;  &gt; The cash account that is used to temporary hold payments that
 * came to the bank account but cannot be entered as valid payments because the customer or supplier is
 * unknown.
 * The parameter is used together with the Use for payments reclassification check box.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ReclasificationAccountInEntryTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ReclasificationAccountInEntryTypeDtoFactory factory()
 */
class ReclasificationAccountInEntryTypeDto extends Model
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
