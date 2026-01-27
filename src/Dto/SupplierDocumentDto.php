<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class SupplierDocumentDto extends Model
{
    #[Property]
    public ?\accountInSupplierDocumentDto $account;

    #[Property]
    public ?\subaccountInSupplierDocumentDto $subaccount;

    /** Document details tab &gt; Amount &gt; Read-only. The total amount for the specified quantity of items or services of this type (after the discount has been taken). */
    #[Property]
    public ?float $amount;

    /** An automatic calculation of the amount with the currency set as default for supplier. */
    #[Property]
    public ?float $amountInCurrency;

    #[Property]
    public ?\branchInSupplierDocumentDto $branch;

    #[Property]
    public ?\supplierInSupplierDocumentDto $supplier;

    /** The top part &gt; Top part &gt; Type &gt; The type of the document. The following types are available: Purchase invoice, credit adjustment, purchase credit note, prepayment. */
    #[Property]
    public ?string $documentType;

    #[Property]
    public ?string $referenceNumber;

    /** The Top part &gt; Post period* &gt; The post period of the payment document. Format MMYYYY. */
    #[Property]
    public ?string $postPeriod;

    /** The financial period to which the transactions recorded in the document should be posted. Format YYYYMM. */
    #[Property]
    public ?string $financialPeriod;

    /** The Top part &gt; Date* &gt; The date of the original supplier ledger document; by default, it is the current date, which can be changed. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $date;

    /** The Top part &gt; OrigInvoiceDate* &gt; The original invoice date of the original supplier ledger document; by default, it is the current date, which can be changed. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $origInvoiceDate;

    /** The Top part &gt; Due date* &gt; The date when payment for the document is due in accordance with the supplier's credit terms. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $dueDate;

    /** The Top part &gt; Approval status &gt; The status of the document in Visma.net Approval. [New, Canceled, SentToApproval, ReceivedByApproval, InProgressApproval, RejectedInApproval, ApprovedInApproval, ActiveWorkflowApproval. */
    #[Property]
    public ?string $approvalStatus;

    /** The Top part &gt; Document status &gt; A read-only field that shows the status of the supplier ledger document:[Hold, Balanced, Voided, Scheduled, Open, Closed, Printed, Prebooked, Reserved] */
    #[Property]
    public ?string $status;

    /** The Top part &gt; Currency &gt; The currency of the document. */
    #[Property]
    public ?string $currencyId;

    /** The Top part &gt; Balance &gt; The balance of the supplier ledger document after VAT (if inclusive) and the discount as specified in the tabs below. */
    #[Property]
    public ?float $balance;

    /** Background calculation giving you the Balance in your default currency. This field is applicable if the amount is given in another currency than your default. */
    #[Property]
    public ?float $balanceInCurrency;

    /** The Top part &gt; Cash discount &gt; The cash discount amount that has been or will be taken in the document, which the system calculates based in the specified credit terms. */
    #[Property]
    public ?float $cashDiscount;

    /** Background calculation giving you the Cash discount in your default currency. This field is applicable if the amount is given in another currency than your default. */
    #[Property]
    public ?float $cashDiscountInCurrency;

    #[Property]
    public ?\paymentMethodInSupplierDocumentDto $paymentMethod;

    /** The Top part &gt; Supplier ref. &gt; The document's original reference number as assigned by the supplier (for informational purposes). */
    #[Property]
    public ?string $supplierReference;

    /** The Top part &gt; Description &gt; A user-provided description for this supplier ledger document. */
    #[Property]
    public ?string $description;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $createdDateTime;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    /** The table &gt; Document details tab and Applications tab &gt; Icon Notes &gt; Pop-up window for providing any user-defined text connected with to invoice. */
    #[Property]
    public ?string $note;

    /** Format YYYYMM. */
    #[Property]
    public ?string $closedFinancialPeriod;

    #[Property]
    public ?\locationInSupplierDocumentDto $location;

    /** The Top part &gt; VAT total &gt; The total amount of tax paid in the document. */
    #[Property]
    public ?float $vatTotal;

    /** Background calculation giving you the VAT total in your default currency. This field is applicable if the amount is given in another currency than your default. */
    #[Property]
    public ?float $vatTotalInCurrency;

    #[Property]
    public ?\BranchNumberDto $branchNumber;

    /** The Financial details tab &gt; The Payment information section &gt; Pay date* &gt; The date when the invoice should be paid. The date is the difference between the document due date or discount date and the number of days specified in the Payment lead time field in AP303000. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $payDate;

    /** The Financial details tab &gt; The Payment information section &gt; Payment message &gt; The message connected with the payment. */
    #[Property]
    public ?string $paymentMessage;

    /** Financial details tab &gt; The payment information section &gt; Cash account &gt; The cash account associated with the payment method. */
    #[Property]
    public ?string $cashAccount;

    /**
     * Identifier that represents a specific version of the resource.
     * It helps to prevent simultaneous updates of the resource from overwriting each other (by using ETags and If-Match headers)
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;

    #[Property]
    public ?string $errorInfo;
}
