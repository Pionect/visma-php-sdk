<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CreditNoteLineDtoFactory testFactory()
 */
class CreditNoteLineDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CreditNoteLineDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** @var AttachmentDto[]|null */
        public ?array $attachments = null,
        public ?ProjectTaskIdDescriptionDto $projectTask = null,
        /**
         * Line no. > A counter of lines in the overview of cash sales document
         * overview.
         */
        public ?int $lineNumber = null,
        /**
         * Item ID > The item ID of the line item, if applicable. Only a non-stock item
         * can be selected.
         */
        public ?string $inventoryNumber = null,
        /**
         * Transaction descr. > Any brief comment relevant to the transaction.The
         * alphanumeric string may contain up to 30 characters.
         */
        public ?string $description = null,
        /**
         * Quantity > The quantity of items (goods or services) of a particular type
         * sold to the customer.
         */
        public int|float|null $quantity = null,
        /**
         * Unit price > The unit price set for the item or service. If you want to
         * update the unit price
         * automatically to the current value(that is, the applicable sales or default
         * price),
         * you can use the Recalculate Prices and Discounts action.If you have modified
         * the unit price and saved the document, the value will not be updated by the
         * system if you change the document date.
         */
        public int|float|null $unitPrice = null,
        /**
         * Background calculation giving you the Unit price in your default currency.
         * This field is applicable if the amount is given in another currency than your
         * default.
         */
        public int|float|null $unitPriceInCurrency = null,
        /**
         * Manual amount > a check box indicating that the amount has been entered
         * manually.
         */
        public int|float|null $manualAmount = null,
        /**
         * Background calculation giving you the Manual amount in your default currency.
         * This field is applicable if the amount is given in another currency than your
         * default.
         */
        public int|float|null $manualAmountInCurrency = null,
        /**
         * Amount > The amount after the discount has been applied. The value of this
         * read-only box
         * is calculated automatically by deducting the discount amount from the
         * extended price.
         */
        public int|float|null $amount = null,
        /**
         * Cost > The total cost of the line in default currency.
         * The value will always be 0 for unreleased documents.
         */
        public int|float|null $cost = null,
        /**
         * Background calculation giving you the Amount in your default currency. This
         * field is applicable if the amount is given in another currency than your
         * default.
         */
        public int|float|null $amountInCurrency = null,
        public ?AccountInCreditNoteLineDto $account = null,
        public ?VatCodeInCreditNoteLineDto $vatCode = null,
        /** UoM > The unit of measure (UoM) for the item. */
        public ?string $uom = null,
        /**
         * Discount percent > The percent of the line-level discount that has been
         * applied manually or
         * automatically.The system selects the Manual Discount check box and
         * calculates the discount amount after you have entered the percent manually
         * and
         * saved your changes or added a new line.
         */
        public int|float|null $discountPercent = null,
        /**
         * Discount amount > The amount of the line-level discount that has been applied
         * manually or
         * automatically to this line.The system selects the Manual Discount check box
         * and calculates the line amount after you have entered the discount amount
         * manually and save your changes or added a new line.
         */
        public int|float|null $discountAmount = null,
        /**
         * Background calculation giving you the Discount amount in your default
         * currency. This field is applicable if the amount is given in another currency
         * than your default.
         */
        public int|float|null $discountAmountInCurrency = null,
        /**
         * Manual discount > A check box that indicates (if selected) that the discount
         * has been applied
         * manually.If you clear the check box, the system clears entered discount
         * percent,
         * or discount amount, or selected discount code.
         */
        public ?bool $manualDiscount = null,
        public ?SubaccountInCreditNoteLineDto $subaccount = null,
        /**
         * The field is deprecated for customer document endpoints, please use Seller
         * instead
         */
        public ?string $salesperson = null,
        public ?SellerInCreditNoteLineDto $seller = null,
        /**
         * Original deferral schedule > A read-only column filled in by the system in
         * the Cash return documents created by the reversing process. It shows the
         * identifier of the deferral schedule associated with the original Cash sale
         * document.
         */
        public ?int $deferralSchedule = null,
        /**
         * The deferral code assigned to the stock item or non-stock item specified in
         * this
         * document line.Upon release of the document, the system generates a deferral
         * schedule (or schedules) based on the settings defined in this deferral code.
         */
        public ?string $deferralCode = null,
        /**
         * The code of the line discount that has been applied to this line
         * automatically or manually.
         */
        public ?string $discountCode = null,
        /**
         * Table > Icon Notes > Pop-up window for providing any user-defined text
         * connected to the order.
         */
        public ?string $note = null,
        public ?BranchNumberInCreditNoteLineDto $branchNumber = null,
        public ?string $externalLink = null,
    ) {}
}
