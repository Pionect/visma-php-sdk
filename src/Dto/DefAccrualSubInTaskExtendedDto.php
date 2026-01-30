<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * General ledger accounts tab &gt; Default values section &gt; Accrual subaccount &gt; The default
 * accrual subaccount to be used in project transactions for the project task.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DefAccrualSubInTaskExtendedDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DefAccrualSubInTaskExtendedDtoFactory testFactory()
 */
class DefAccrualSubInTaskExtendedDto extends Model
{
    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
