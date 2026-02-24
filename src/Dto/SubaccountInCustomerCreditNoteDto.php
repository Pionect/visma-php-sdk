<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Document details tab &gt; Subaccount* &gt; The corresponding subaccount used for this
 * transaction.
 *
 * @method static \Pionect\VismaSdk\Factories\SubaccountInCustomerCreditNoteDtoFactory testFactory()
 */
class SubaccountInCustomerCreditNoteDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SubaccountInCustomerCreditNoteDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Mandatory field: Subaccount* > The subaccount number. Format 9-XX. */
        public ?string $subaccountNumber = null,
        /** SubID > The  identifier of the subaccount. */
        public ?int $subaccountId = null,
        /** Description > The description of the identifier. */
        public ?string $description = null,
        /** System generated information. */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        /** Active > The status of the identifier. */
        public ?bool $active = null,
        /**
         * @var SegmentDto[]|null
         *                        Segments are entities that you use to define the structure of IDs for the
         *                        subaccount.  This information is collected from window CS202000.
         */
        public ?array $segments = null,
        /** The timestamp of the subaccount, used for concurrency control. */
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
