<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Reclassification account &gt;  &gt; The cash account that is used to temporary hold payments that
 * came to the bank account but cannot be entered as valid payments because the customer or supplier is
 * unknown.
 * The parameter is used together with the Use for payments reclassification check box.
 *
 * @method static \Pionect\VismaSdk\Factories\ReclasificationAccountInEntryTypeDtoFactory testFactory()
 */
class ReclasificationAccountInEntryTypeDto extends SpatieData
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
