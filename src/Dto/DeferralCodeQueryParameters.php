<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\DeferralCodeQueryParametersFactory testFactory()
 */
class DeferralCodeQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
