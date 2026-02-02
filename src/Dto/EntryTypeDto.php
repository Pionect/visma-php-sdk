<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\EntryTypeDtoFactory testFactory()
 */
class EntryTypeDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $entryTypeId = null,
        public ?string $disableReceipt = null,
        public ?string $module = null,
        public ?DefaultOffsetAccountBranchInEntryTypeDto $defaultOffsetAccountBranch = null,
        public ?DefaultOffsetAccountInEntryTypeDto $defaultOffsetAccount = null,
        public ?DefaultOffsetSubaccountInEntryTypeDto $defaultOffsetSubaccount = null,
        public ?ReclasificationAccountInEntryTypeDto $reclasificationAccount = null,
        public ?BusinessAccountInEntryTypeDto $businessAccount = null,
        public ?string $description = null,
        public ?bool $useForPaymentsReclasification = null,
        public ?ReclasificationAccountOverrideInEntryTypeDto $reclasificationAccountOverride = null,
        public ?OffsetAccountOverrideInEntryTypeDto $offsetAccountOverride = null,
        public ?OffsetSubaccountOverrideInEntryTypeDto $offsetSubaccountOverride = null,
        public ?OffsetAccountBranchInEntryTypeDto $offsetAccountBranch = null,
        public ?VatZoneInEntryTypeDto $vatZone = null,
        public ?string $taxCalculationMode = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
    ) {}
}
