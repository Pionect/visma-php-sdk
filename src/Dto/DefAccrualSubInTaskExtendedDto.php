<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * General ledger accounts tab &gt; Default values section &gt; Accrual subaccount &gt; The default
 * accrual subaccount to be used in project transactions for the project task.
 *
 * @method static \Pionect\VismaSdk\Factories\DefAccrualSubInTaskExtendedDtoFactory testFactory()
 */
class DefAccrualSubInTaskExtendedDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
