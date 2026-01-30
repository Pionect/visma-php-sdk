<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The table &gt; Subaccount &gt; The subaccount used with the account to detail a
 * journal entry.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SubaccountInJournalTransactionLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SubaccountInJournalTransactionLineDtoFactory factory()
 */
class SubaccountInJournalTransactionLineDto extends Model
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
