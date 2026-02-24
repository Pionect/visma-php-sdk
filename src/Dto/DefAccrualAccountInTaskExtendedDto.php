<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * General ledger accounts tab &gt; Default values section &gt; Accrual account &gt; The default
 * accrual account to be used in project transactions for the project task.
 *
 * @method static \Pionect\VismaSdk\Factories\DefAccrualAccountInTaskExtendedDtoFactory testFactory()
 */
class DefAccrualAccountInTaskExtendedDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\DefAccrualAccountInTaskExtendedDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
