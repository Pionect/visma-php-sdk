<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * VAT category &gt; The tax category for the project task.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TaxCategoryInTaskExtendedDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TaxCategoryInTaskExtendedDtoFactory testFactory()
 */
class TaxCategoryInTaskExtendedDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
