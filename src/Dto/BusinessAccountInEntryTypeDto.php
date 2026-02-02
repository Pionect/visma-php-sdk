<?php

namespace Pionect\VismaSdk\Dto;

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
        public ?string $type = null,
        public ?string $externalCode1 = null,
        public ?string $externalCode2 = null,
        public ?bool $active = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
