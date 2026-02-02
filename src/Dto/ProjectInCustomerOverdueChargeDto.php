<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The top part &gt; Project* &gt; The identifier and description of the project with which this
 * document is associated, or the code indicating that this document is not associated with any
 * project; the non-project code is specified in the Project accounting preferences (PM101000) window.
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectInCustomerOverdueChargeDtoFactory testFactory()
 */
class ProjectInCustomerOverdueChargeDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
