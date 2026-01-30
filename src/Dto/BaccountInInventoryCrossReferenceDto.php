<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Supplier/Customer*, click magnifier &gt; Account ID &gt; Account no. identifying
 * the business account.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BaccountInInventoryCrossReferenceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BaccountInInventoryCrossReferenceDtoFactory testFactory()
 */
class BaccountInInventoryCrossReferenceDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
