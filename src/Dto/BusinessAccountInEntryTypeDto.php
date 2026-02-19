<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\AccountTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * Business account &gt; The supplier account, if the entry type is used to record transactions that
 * involve a particular supplier, or the customer account,
 * if the entry type is used to record
 * transactions that involve a particular customer.
 *
 * @method static \Pionect\VismaSdk\Factories\BusinessAccountInEntryTypeDtoFactory testFactory()
 */
class BusinessAccountInEntryTypeDto extends SpatieData
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
