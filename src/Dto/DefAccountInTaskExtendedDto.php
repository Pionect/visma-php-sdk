<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * General ledger accounts tab &gt; Default values section &gt; Default account &gt; The account to be
 * used as one of the sources of possible accounts for the invoices and transactions for the project
 * task.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DefAccountInTaskExtendedDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DefAccountInTaskExtendedDtoFactory testFactory()
 */
class DefAccountInTaskExtendedDto extends Model
{
    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
