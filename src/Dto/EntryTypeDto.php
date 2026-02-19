<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\EntryTypeDisableReceiptEnum;
use Pionect\VismaSdk\Enums\EntryTypeTaxCalculationModeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\EntryTypeDtoFactory testFactory()
 */
class EntryTypeDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Entry type ID* > The entry type, selected by its identifier. */
        public ?string $entryTypeId = null,
        /**
         * Disb/receipt > The basic type of cash transaction designated by this entry
         * type: Receipt or Disbursement.
         */
        public ?EntryTypeDisableReceiptEnum $disableReceipt = null,
        /** Module > The way the entry type is used in the system. */
        public ?string $module = null,
        public ?DefaultOffsetAccountBranchInEntryTypeDto $defaultOffsetAccountBranch = null,
        public ?DefaultOffsetAccountInEntryTypeDto $defaultOffsetAccount = null,
        public ?DefaultOffsetSubaccountInEntryTypeDto $defaultOffsetSubaccount = null,
        public ?ReclasificationAccountInEntryTypeDto $reclasificationAccount = null,
        public ?BusinessAccountInEntryTypeDto $businessAccount = null,
        /**
         * Description > A detailed description of the entry type that is used as
         * transaction description by default.
         */
        public ?string $description = null,
        /**
         * A check box that you select if this entry type is used to record unknown
         * payments that need to be reclassified later.
         */
        public ?bool $useForPaymentsReclasification = null,
        public ?ReclasificationAccountOverrideInEntryTypeDto $reclasificationAccountOverride = null,
        public ?OffsetAccountOverrideInEntryTypeDto $offsetAccountOverride = null,
        public ?OffsetSubaccountOverrideInEntryTypeDto $offsetSubaccountOverride = null,
        public ?OffsetAccountBranchInEntryTypeDto $offsetAccountBranch = null,
        public ?VatZoneInEntryTypeDto $vatZone = null,
        /**
         * Tax calculation mode > The tax calculation mode to be used by default with
         * this entry type
         */
        public ?EntryTypeTaxCalculationModeEnum $taxCalculationMode = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
    ) {}
}
