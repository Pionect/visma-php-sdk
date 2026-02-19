<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\CustomerContractSummaryInvoiceToEnum;
use Pionect\VismaSdk\Enums\CustomerContractSummaryInvoicingPeriodEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * Summary tab &gt;
 *
 * @method static \Pionect\VismaSdk\Factories\SummaryInCustomerContractDtoFactory testFactory()
 */
class SummaryInCustomerContractDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Mandatory field: Contract settings section > Setup date* > The date of
         * contract setup.
         */
        public ?\Carbon\Carbon $setupDate = null,
        /**
         * Contract settings section > Activation date > The date to initiate the
         * provision of the contract services.
         */
        public ?\Carbon\Carbon $activationDate = null,
        /**
         * Contract settings section > Expiration date > The date when the contract
         * expires.
         */
        public ?\Carbon\Carbon $expirationDate = null,
        /**
         * Contract settings section > Termination date > The date when the contract
         * will be cancelled; no services will be provided.
         */
        public ?\Carbon\Carbon $terminationDate = null,
        /**
         * Contract settings section > Mass renewal > A check box indicating renewal of
         * all contract at expiration date.
         */
        public ?bool $massRenewal = null,
        /**
         * Contract settings section > Renewal point > The number of days before
         * expiration where the renewal process are to begin.
         */
        public ?int $renewalPoint = null,
        /**
         * Contract settings section > Grace period > The number of days after the
         * expiration date where the contract can still be renewed.
         */
        public ?int $gracePeriod = null,
        /**
         * Mandatory field: Contract settings section > Currency* > The currency used in
         * the contract.
         */
        public ?string $currency = null,
        /**
         * Invoicing schedule section > Invoice schedule starts on > A read-only field
         * that displays the start date of the first invoicing period.
         */
        public ?\Carbon\Carbon $invoicingScheduleStartsOn = null,
        /**
         * Mandatory field: Invoicing schedule section > Invoicing period* > The type of
         * invoicing schedule, which can be one of the following options: Weekly,
         * Monthly; Quarterly, Half a year, Yearly, On demand, Statement based.
         */
        public ?CustomerContractSummaryInvoicingPeriodEnum $invoicingPeriod = null,
        /**
         * Invoicing schedule section > Last invoicing date > A read-only field that
         * shows the date when the invoicing was performed most recently.
         */
        public ?\Carbon\Carbon $lastInvoicingDate = null,
        /**
         * Invoicing schedule section > Next invoicing date > The date of the next
         * invoicing invoice, according to the invoicing schedule.
         */
        public ?\Carbon\Carbon $nextInvoicingDate = null,
        /**
         * Invoice information section > Invoice to > The setting that defines the
         * customer account to be invoiced for a contract. The following options are
         * available: Parent account, Customer account, Specific account.
         */
        public ?CustomerContractSummaryInvoiceToEnum $invoiceTo = null,
        public ?InvoiceAccountInCustomerContractSummaryDto $invoiceAccount = null,
        public ?LocationNameDescriptionDto $invoiceLocation = null,
        public ?OwnerInCustomerContractSummaryDto $owner = null,
        public ?SalesPersonInCustomerContractSummaryDto $salesPerson = null,
        public ?CaseCountItemInCustomerContractSummaryDto $caseCountItem = null,
    ) {}
}
