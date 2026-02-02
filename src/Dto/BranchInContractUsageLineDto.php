<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Both tabs &gt; Branch &gt;
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInContractUsageLineDtoFactory testFactory()
 */
class BranchInContractUsageLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
