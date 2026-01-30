<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VisibilityDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VisibilityDtoFactory factory()
 */
class VisibilityDto extends Model
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
