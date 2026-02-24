<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Information retrieved from the Summary tab
 *
 * @method static \Pionect\VismaSdk\Factories\VisibilityInTaskExtendedDtoFactory testFactory()
 */
class VisibilityInTaskExtendedDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\VisibilityInTaskExtendedDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** General ledger */
        public ?bool $visibleInGl = null,
        /** Supplier ledger */
        public ?bool $visibleInAp = null,
        /** Customer ledger */
        public ?bool $visibleInAr = null,
        /** Sales */
        public ?bool $visibleInSo = null,
        /** Purchases */
        public ?bool $visibleInPo = null,
        /** Expenses */
        public ?bool $visibleInEa = null,
        /** Time entries */
        public ?bool $visibleInTa = null,
        /** Inventory */
        public ?bool $visibleInIn = null,
        /** Cash management */
        public ?bool $visibleInCa = null,
        public ?bool $visibleInCr = null,
    ) {}
}
