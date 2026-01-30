<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * The Approval details tab &gt;
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ApprovalDetailsInSupplierInvoiceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ApprovalDetailsInSupplierInvoiceDtoFactory factory()
 */
class ApprovalDetailsInSupplierInvoiceDto extends Model
{
    public function __construct(
        #[MapName('attachmentID')]
        public ?string $attachmentId = null,
        public ?string $comment = null,
    ) {}
}
