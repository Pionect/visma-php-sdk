<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Account &gt; The expense account used to record the purchased non-stock item that does not require
 * receipt (by default, the account specified for the item in the Combine COGS/expense sub. from field
 * in the Posting classes (IN206000) window).
 *
 * @method static \Pionect\VismaSdk\Factories\AccountInPurchaseOrderLineDtoFactory testFactory()
 */
class AccountInPurchaseOrderLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
