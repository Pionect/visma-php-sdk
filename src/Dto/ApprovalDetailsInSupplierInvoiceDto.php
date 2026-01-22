<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Approval details tab &gt;
 */
class ApprovalDetailsInSupplierInvoiceDto extends Model
{
    /** The Approval details tab &gt; Default document &gt; The default document that includes the payments requiring approval. */
    #[Property]
    public ?string $attachmentId;

    /** The Approval details tab &gt; Comment &gt; The comment connected with the approval of the payments. */
    #[Property]
    public ?string $comment;
}
