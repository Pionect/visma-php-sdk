<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Reclassification account override &gt; The account that should be used as the offset account for
 * this entry type with this cash account instead of the default offset account specified on the Entry
 * types tab.
 * We recommend that for the disbursement type of transaction, you specify an expense
 * account. For the receipt type of transaction, specify an asset account.
 *
 * @method static \Pionect\VismaSdk\Factories\OffsetAccountOverrideInEntryTypeDtoFactory testFactory()
 */
class OffsetAccountOverrideInEntryTypeDto extends SpatieData
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
