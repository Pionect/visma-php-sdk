<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\AccountTypeEnum;
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
        /** Account > The account number. */
        public ?AccountTypeEnum $type = null,
        /** Account class > The identifier of the account class. */
        public ?string $externalCode1 = null,
        /** Account class > The name of the account class. */
        public ?string $externalCode2 = null,
        public ?bool $active = null,
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
