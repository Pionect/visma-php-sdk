<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Information retrieved from the Summary tab
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VisibilityInTaskExtendedDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VisibilityInTaskExtendedDtoFactory factory()
 */
class VisibilityInTaskExtendedDto extends Model
{
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
