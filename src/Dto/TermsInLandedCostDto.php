<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Landed costs tab &gt; Terms &gt; The credit terms used in relations with the landed cost supplier.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TermsInLandedCostDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TermsInLandedCostDtoFactory factory()
 */
class TermsInLandedCostDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
