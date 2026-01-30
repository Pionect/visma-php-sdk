<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Business account &gt; The supplier account, if the entry type is used to record transactions that
 * involve a particular supplier, or the customer account,
 * if the entry type is used to record
 * transactions that involve a particular customer.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BusinessAccountInEntryTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BusinessAccountInEntryTypeDtoFactory factory()
 */
class BusinessAccountInEntryTypeDto extends Model
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
