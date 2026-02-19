<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Summary tab &gt; Visibility settings section &gt;
 *
 * @method static \Pionect\VismaSdk\Factories\VisibilityInProjectBasicDtoFactory testFactory()
 */
class VisibilityInProjectBasicDto extends SpatieData
{
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
