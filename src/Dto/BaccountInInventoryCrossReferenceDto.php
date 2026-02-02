<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: Supplier/Customer*, click magnifier &gt; Account ID &gt; Account no. identifying
 * the business account.
 *
 * @method static \Pionect\VismaSdk\Factories\BaccountInInventoryCrossReferenceDtoFactory testFactory()
 */
class BaccountInInventoryCrossReferenceDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
