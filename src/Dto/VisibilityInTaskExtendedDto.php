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
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $visibleInGl = null,
        public ?bool $visibleInAp = null,
        public ?bool $visibleInAr = null,
        public ?bool $visibleInSo = null,
        public ?bool $visibleInPo = null,
        public ?bool $visibleInEa = null,
        public ?bool $visibleInTa = null,
        public ?bool $visibleInIn = null,
        public ?bool $visibleInCa = null,
        public ?bool $visibleInCr = null,
    ) {}
}
