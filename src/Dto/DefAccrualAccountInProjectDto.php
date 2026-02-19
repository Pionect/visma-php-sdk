<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * General ledger accounts tab &gt; Default values section &gt; Accrual account &gt; The default
 * accrual account to be used in project transactions for the project.
 *
 * @method static \Pionect\VismaSdk\Factories\DefAccrualAccountInProjectDtoFactory testFactory()
 */
class DefAccrualAccountInProjectDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
