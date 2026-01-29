<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Summary tab &gt;
 */
class SummaryInCustomerContractDto extends Model
{
    /** Mandatory field: Contract settings section &gt; Setup date* &gt; The date of contract setup. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $setupDate;

    /** Contract settings section &gt; Activation date &gt; The date to initiate the provision of the contract services. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $activationDate;

    /** Contract settings section &gt; Expiration date &gt; The date when the contract expires. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $expirationDate;

    /** Contract settings section &gt; Termination date &gt; The date when the contract will be cancelled; no services will be provided. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $terminationDate;

    /** Contract settings section &gt; Mass renewal &gt; A check box indicating renewal of all contract at expiration date. */
    #[Property]
    public ?bool $massRenewal;

    /** Contract settings section &gt; Renewal point &gt; The number of days before expiration where the renewal process are to begin. */
    #[Property]
    public ?int $renewalPoint;

    /** Contract settings section &gt; Grace period &gt; The number of days after the expiration date where the contract can still be renewed. */
    #[Property]
    public ?int $gracePeriod;

    /** Mandatory field: Contract settings section &gt; Currency* &gt; The currency used in the contract. */
    #[Property]
    public ?string $currency;

    /** Invoicing schedule section &gt; Invoice schedule starts on &gt; A read-only field that displays the start date of the first invoicing period. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $invoicingScheduleStartsOn;

    /** Mandatory field: Invoicing schedule section &gt; Invoicing period* &gt; The type of invoicing schedule, which can be one of the following options: Weekly, Monthly; Quarterly, Half a year, Yearly, On demand, Statement based. */
    #[Property]
    public ?string $invoicingPeriod;

    /** Invoicing schedule section &gt; Last invoicing date &gt; A read-only field that shows the date when the invoicing was performed most recently. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastInvoicingDate;

    /** Invoicing schedule section &gt; Next invoicing date &gt; The date of the next invoicing invoice, according to the invoicing schedule. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $nextInvoicingDate;

    /** Invoice information section &gt; Invoice to &gt; The setting that defines the customer account to be invoiced for a contract. The following options are available: Parent account, Customer account, Specific account. */
    #[Property]
    public ?string $invoiceTo;

    #[Property]
    public ?invoiceAccountInCustomerContractSummaryDto $invoiceAccount;

    #[Property]
    public ?LocationNameDescriptionDto $invoiceLocation;

    #[Property]
    public ?ownerInCustomerContractSummaryDto $owner;

    #[Property]
    public ?salesPersonInCustomerContractSummaryDto $salesPerson;

    #[Property]
    public ?caseCountItemInCustomerContractSummaryDto $caseCountItem;
}
