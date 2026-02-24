<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\LandedCostApDocTypeEnum;
use Pionect\VismaSdk\Enums\SupplierInvoiceForSupplierQueryParametersStatusEnum;
use Pionect\VismaSdk\Enums\TimeCardSummaryApprovalStatusEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SupplierDocumentDtoFactory testFactory()
 */
class SupplierDocumentDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SupplierDocumentDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?AccountInSupplierDocumentDto $account = null,
        public ?SubaccountInSupplierDocumentDto $subaccount = null,
        /**
         * Document details tab > Amount > Read-only. The total amount for the specified
         * quantity of items or services of this type (after the discount has been
         * taken).
         */
        public int|float|null $amount = null,
        /**
         * An automatic calculation of the amount with the currency set as default for
         * supplier.
         */
        public int|float|null $amountInCurrency = null,
        public ?BranchInSupplierDocumentDto $branch = null,
        public ?SupplierInSupplierDocumentDto $supplier = null,
        /**
         * The top part > Top part > Type > The type of the document. The following
         * types are available: Purchase invoice, credit adjustment, purchase credit
         * note, prepayment.
         */
        public ?LandedCostApDocTypeEnum $documentType = null,
        public ?string $referenceNumber = null,
        /**
         * The Top part > Post period* > The post period of the payment document. Format
         * MMYYYY.
         */
        public ?string $postPeriod = null,
        /**
         * The financial period to which the transactions recorded in the document
         * should be posted. Format YYYYMM.
         */
        public ?string $financialPeriod = null,
        /**
         * The Top part > Date* > The date of the original supplier ledger document; by
         * default, it is the current date, which can be changed.
         */
        public ?\Carbon\Carbon $date = null,
        /**
         * The Top part > OrigInvoiceDate* > The original invoice date of the original
         * supplier ledger document; by default, it is the current date, which can be
         * changed.
         */
        public ?\Carbon\Carbon $origInvoiceDate = null,
        /**
         * The Top part > Due date* > The date when payment for the document is due in
         * accordance with the supplier's credit terms.
         */
        public ?\Carbon\Carbon $dueDate = null,
        /**
         * The Top part > Approval status > The status of the document in Visma.net
         * Approval. [New, Canceled, SentToApproval, ReceivedByApproval,
         * InProgressApproval, RejectedInApproval, ApprovedInApproval,
         * ActiveWorkflowApproval.
         */
        public ?TimeCardSummaryApprovalStatusEnum $approvalStatus = null,
        /**
         * The Top part > Document status > A read-only field that shows the status of
         * the supplier ledger document:[Hold, Balanced, Voided, Scheduled, Open,
         * Closed, Printed, Prebooked, Reserved]
         */
        public ?SupplierInvoiceForSupplierQueryParametersStatusEnum $status = null,
        /** The Top part > Currency > The currency of the document. */
        public ?string $currencyId = null,
        /**
         * The Top part > Balance > The balance of the supplier ledger document after
         * VAT (if inclusive) and the discount as specified in the tabs below.
         */
        public int|float|null $balance = null,
        /**
         * Background calculation giving you the Balance in your default currency. This
         * field is applicable if the amount is given in another currency than your
         * default.
         */
        public int|float|null $balanceInCurrency = null,
        /**
         * The Top part > Cash discount > The cash discount amount that has been or will
         * be taken in the document, which the system calculates based in the specified
         * credit terms.
         */
        public int|float|null $cashDiscount = null,
        /**
         * Background calculation giving you the Cash discount in your default currency.
         * This field is applicable if the amount is given in another currency than your
         * default.
         */
        public int|float|null $cashDiscountInCurrency = null,
        public ?PaymentMethodInSupplierDocumentDto $paymentMethod = null,
        /**
         * The Top part > Supplier ref. > The document's original reference number as
         * assigned by the supplier (for informational purposes).
         */
        public ?string $supplierReference = null,
        /**
         * The Top part > Description > A user-provided description for this supplier
         * ledger document.
         */
        public ?string $description = null,
        public ?\Carbon\Carbon $createdDateTime = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        /**
         * Document details tab and Applications tab > Icon Notes > Pop-up window for
         * providing any user-defined text connected with to invoice.
         */
        public ?string $note = null,
        /** Format YYYYMM. */
        public ?string $closedFinancialPeriod = null,
        public ?LocationInSupplierDocumentDto $location = null,
        /** The Top part > VAT total > The total amount of tax paid in the document. */
        public int|float|null $vatTotal = null,
        /**
         * Background calculation giving you the VAT total in your default currency.
         * This field is applicable if the amount is given in another currency than your
         * default.
         */
        public int|float|null $vatTotalInCurrency = null,
        public ?BranchNumberDto $branchNumber = null,
        /**
         * The Financial details tab > The Payment information section > Pay date* > The
         * date when the invoice should be paid. The date is the difference between the
         * document due date or discount date and the number of days specified in the
         * Payment lead time field in AP303000.
         */
        public ?\Carbon\Carbon $payDate = null,
        /**
         * The Financial details tab > The Payment information section > Payment message
         * > The message connected with the payment.
         */
        public ?string $paymentMessage = null,
        /**
         * Financial details tab > The payment information section > Cash account > The
         * cash account associated with the payment method.
         */
        public ?string $cashAccount = null,
        /**
         * Identifier that represents a specific version of the resource.
         * It helps to prevent simultaneous updates of the resource from overwriting
         * each other (by using ETags and If-Match headers)
         */
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
