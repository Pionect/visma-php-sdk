<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerCreditNoteLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerCreditNoteLineDtoFactory factory()
 */
class CustomerCreditNoteLineDto extends Model
{
    /**
     * The date when the process of deferred revenue recognition should start for the
     * selected item; this date can be specified manually if the deferral code assigned
     * to the item is based on the Flexible by Periods, Prorate by days or Flexible by
     * Days in Period recognition method.This column appears only if the Deferred
     * Revenue Management feature is enabled on the Enable/Disable Features screen.
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $termStartDate;

    /**
     * The date when the process of the deferred revenue recognition should finish
     * for the selected item; this date can be specified manually if the deferral code
     * assigned to the item is based on the Flexible by Periods, Prorate by days or
     * Flexible by Days in Period recognition method.This column appears only if the
     * Deferred Revenue Management feature is enabled on the Enable/Disable Features form.
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $termEndDate;

    #[Property]
    public ?bool $isRotRutDeductible;

    #[Property]
    public ?string $itemType;

    #[Property]
    public ?WorkTypeDto $typeOfWork;

    #[Property]
    public ?float $deductableAmount;

    #[Property]
    public ?string $soShipmentNbr;

    #[Property]
    public ?string $soOrderType;

    #[Property]
    public ?string $soOrderNbr;

    #[Property]
    public ?array $attachments;

    #[Property]
    public ?ProjectTaskIdDescriptionDto $projectTask;

    /** Line no. &gt; A counter of lines in the overview of cash sales document overview. */
    #[Property]
    public ?int $lineNumber;

    /** Item ID &gt; The item ID of the line item, if applicable. Only a non-stock item can be selected. */
    #[Property]
    public ?string $inventoryNumber;

    /** Transaction descr. &gt; Any brief comment relevant to the transaction.The alphanumeric string may contain up to 30 characters. */
    #[Property]
    public ?string $description;

    /** Quantity &gt; The quantity of items (goods or services) of a particular type sold to the customer. */
    #[Property]
    public ?float $quantity;

    /**
     * Unit price &gt; The unit price set for the item or service. If you want to update the unit price
     * automatically to the current value(that is, the applicable sales or default price),
     * you can use the Recalculate Prices and Discounts action.If you have modified
     * the unit price and saved the document, the value will not be updated by the
     * system if you change the document date.
     */
    #[Property]
    public ?float $unitPrice;

    /** Background calculation giving you the Unit price in your default currency. This field is applicable if the amount is given in another currency than your default. */
    #[Property]
    public ?float $unitPriceInCurrency;

    /** Manual amount &gt; a check box indicating that the amount has been entered manually. */
    #[Property]
    public ?float $manualAmount;

    /** Background calculation giving you the Manual amount in your default currency. This field is applicable if the amount is given in another currency than your default. */
    #[Property]
    public ?float $manualAmountInCurrency;

    /**
     * Amount &gt; The amount after the discount has been applied. The value of this read-only box
     * is calculated automatically by deducting the discount amount from the extended price.
     */
    #[Property]
    public ?float $amount;

    /**
     * Cost &gt; The total cost of the line in default currency.
     * The value will always be 0 for unreleased documents.
     */
    #[Property]
    public ?float $cost;

    /** Background calculation giving you the Amount in your default currency. This field is applicable if the amount is given in another currency than your default. */
    #[Property]
    public ?float $amountInCurrency;

    #[Property]
    public ?accountInCustomerCreditNoteLineDto $account;

    #[Property]
    public ?vatCodeInCustomerCreditNoteLineDto $vatCode;

    /** UoM &gt; The unit of measure (UoM) for the item. */
    #[Property]
    public ?string $uom;

    /**
     * Discount percent &gt; The percent of the line-level discount that has been applied manually or
     * automatically.The system selects the Manual Discount check box and
     * calculates the discount amount after you have entered the percent manually and
     * saved your changes or added a new line.
     */
    #[Property]
    public ?float $discountPercent;

    /**
     * Discount amount &gt; The amount of the line-level discount that has been applied manually or
     * automatically to this line.The system selects the Manual Discount check box
     * and calculates the line amount after you have entered the discount amount
     * manually and save your changes or added a new line.
     */
    #[Property]
    public ?float $discountAmount;

    /** Background calculation giving you the Discount amount in your default currency. This field is applicable if the amount is given in another currency than your default. */
    #[Property]
    public ?float $discountAmountInCurrency;

    /**
     * Manual discount &gt; A check box that indicates (if selected) that the discount has been applied
     * manually.If you clear the check box, the system clears entered discount percent,
     * or discount amount, or selected discount code.
     */
    #[Property]
    public ?bool $manualDiscount;

    #[Property]
    public ?subaccountInCustomerCreditNoteLineDto $subaccount;

    /** The field is deprecated for customer document endpoints, please use Seller instead */
    #[Property]
    public ?string $salesperson;

    #[Property]
    public ?sellerInCustomerCreditNoteLineDto $seller;

    /** Original deferral schedule &gt; A read-only column filled in by the system in the Cash return documents created by the reversing process. It shows the identifier of the deferral schedule associated with the original Cash sale document. */
    #[Property]
    public ?int $deferralSchedule;

    /**
     * The deferral code assigned to the stock item or non-stock item specified in this
     * document line.Upon release of the document, the system generates a deferral
     * schedule (or schedules) based on the settings defined in this deferral code.
     */
    #[Property]
    public ?string $deferralCode;

    /** The code of the line discount that has been applied to this line automatically or manually. */
    #[Property]
    public ?string $discountCode;

    /** Table &gt; Icon Notes &gt; Pop-up window for providing any user-defined text connected to the order. */
    #[Property]
    public ?string $note;

    #[Property]
    public ?branchNumberInCustomerCreditNoteLineDto $branchNumber;

    #[Property]
    public ?string $externalLink;
}
