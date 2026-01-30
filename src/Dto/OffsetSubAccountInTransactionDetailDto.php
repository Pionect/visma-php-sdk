<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Offset subaccount* &gt; The corresponding subaccount to be used for the
 * transaction.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\OffsetSubAccountInTransactionDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\OffsetSubAccountInTransactionDetailDtoFactory factory()
 */
class OffsetSubAccountInTransactionDetailDto extends Model
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
