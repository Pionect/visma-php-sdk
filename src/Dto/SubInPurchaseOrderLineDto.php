<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Sub. ID &gt; The subaccount used to record the purchased non-stock item that does not require
 * receipt (by default, the subaccount generated in accordance with the rule defined in the Combine
 * COGS/expense sub. from field in the Posting classes (IN206000) window).
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SubInPurchaseOrderLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SubInPurchaseOrderLineDtoFactory factory()
 */
class SubInPurchaseOrderLineDto extends Model
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
