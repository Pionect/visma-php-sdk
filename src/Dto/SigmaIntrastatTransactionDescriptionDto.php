<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SigmaIntrastatTransactionDescriptionDtoFactory testFactory()
 */
class SigmaIntrastatTransactionDescriptionDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?int $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
