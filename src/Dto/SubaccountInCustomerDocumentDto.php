<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; Subaccount* &gt; The corresponding subaccount used for this
 * transaction.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SubaccountInCustomerDocumentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SubaccountInCustomerDocumentDtoFactory factory()
 */
class SubaccountInCustomerDocumentDto extends Model
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
