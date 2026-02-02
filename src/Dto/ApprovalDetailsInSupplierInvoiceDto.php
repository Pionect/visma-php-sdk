<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * The Approval details tab &gt;
 *
 * @method static \Pionect\VismaSdk\Factories\ApprovalDetailsInSupplierInvoiceDtoFactory testFactory()
 */
class ApprovalDetailsInSupplierInvoiceDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('attachmentID')]
        public ?string $attachmentId = null,
        public ?string $comment = null,
    ) {}
}
