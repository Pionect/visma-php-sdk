<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Item ID &gt; The ID of the non-stock item specified as the transaction subject.
 *
 * @method static \Pionect\VismaSdk\Factories\ItemInTransactionDetailDtoFactory testFactory()
 */
class ItemInTransactionDetailDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
