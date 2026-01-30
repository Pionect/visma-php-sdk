<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DeferralCodeQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DeferralCodeQueryParametersFactory factory()
 */
class DeferralCodeQueryParameters extends Model
{
    public function __construct(
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
