<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Document details tab &gt; Subaccount* &gt; The corresponding subaccount used for this
 * transaction.
 *
 * @method static \Pionect\VismaSdk\Factories\SubaccountInCustomerCreditWriteOffDtoFactory testFactory()
 */
class SubaccountInCustomerCreditWriteOffDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $subaccountNumber = null,
        public ?int $subaccountId = null,
        public ?string $description = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?bool $active = null,
        /** @var SegmentDto[]|null */
        public ?array $segments = null,
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
