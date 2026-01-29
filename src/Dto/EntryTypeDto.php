<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\EntryTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\EntryTypeDtoFactory factory()
 */
class EntryTypeDto extends Model
{
    /** Entry type ID* &gt; The entry type, selected by its identifier. */
    #[Property]
    public ?string $entryTypeId;

    /** Disb/receipt &gt; The basic type of cash transaction designated by this entry type: Receipt or Disbursement. */
    #[Property]
    public ?string $disableReceipt;

    /** Module &gt; The way the entry type is used in the system. */
    #[Property]
    public ?string $module;

    #[Property]
    public ?defaultOffsetAccountBranchInEntryTypeDto $defaultOffsetAccountBranch;

    #[Property]
    public ?defaultOffsetAccountInEntryTypeDto $defaultOffsetAccount;

    #[Property]
    public ?defaultOffsetSubaccountInEntryTypeDto $defaultOffsetSubaccount;

    #[Property]
    public ?reclasificationAccountInEntryTypeDto $reclasificationAccount;

    #[Property]
    public ?businessAccountInEntryTypeDto $businessAccount;

    /** Description &gt; A detailed description of the entry type that is used as transaction description by default. */
    #[Property]
    public ?string $description;

    /** A check box that you select if this entry type is used to record unknown payments that need to be reclassified later. */
    #[Property]
    public ?bool $useForPaymentsReclasification;

    #[Property]
    public ?reclasificationAccountOverrideInEntryTypeDto $reclasificationAccountOverride;

    #[Property]
    public ?offsetAccountOverrideInEntryTypeDto $offsetAccountOverride;

    #[Property]
    public ?offsetSubaccountOverrideInEntryTypeDto $offsetSubaccountOverride;

    #[Property]
    public ?offsetAccountBranchInEntryTypeDto $offsetAccountBranch;

    #[Property]
    public ?vatZoneInEntryTypeDto $vatZone;

    /** Tax calculation mode &gt; The tax calculation mode to be used by default with this entry type */
    #[Property]
    public ?string $taxCalculationMode;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;
}
