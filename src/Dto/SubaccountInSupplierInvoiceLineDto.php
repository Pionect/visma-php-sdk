<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The table &gt; Mandatory field: Subaccount* &gt; The corresponding subaccount used for this invoice
 * line.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SubaccountInSupplierInvoiceLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SubaccountInSupplierInvoiceLineDtoFactory factory()
 */
class SubaccountInSupplierInvoiceLineDto extends Model
{
    public function __construct(
        public ?string $subaccountNumber = null,
        public ?int $subaccountId = null,
        public ?string $description = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?bool $active = null,
        public ?array $segments = null,
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
