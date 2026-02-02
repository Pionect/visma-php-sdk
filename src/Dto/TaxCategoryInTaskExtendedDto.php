<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * VAT category &gt; The tax category for the project task.
 *
 * @method static \Pionect\VismaSdk\Factories\TaxCategoryInTaskExtendedDtoFactory testFactory()
 */
class TaxCategoryInTaskExtendedDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
