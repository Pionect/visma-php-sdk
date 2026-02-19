<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\DisposalMethodDtoFactory testFactory()
 */
class DisposalMethodDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The description of the disposal method */
        public ?string $description = null,
    ) {}
}
