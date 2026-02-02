<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The disposal method details of this fixed asset
 *
 * @method static \Pionect\VismaSdk\Factories\DisposalMethodInDetailsDtoFactory testFactory()
 */
class DisposalMethodInDetailsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $description = null,
    ) {}
}
