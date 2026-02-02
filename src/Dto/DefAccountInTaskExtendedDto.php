<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * General ledger accounts tab &gt; Default values section &gt; Default account &gt; The account to be
 * used as one of the sources of possible accounts for the invoices and transactions for the project
 * task.
 *
 * @method static \Pionect\VismaSdk\Factories\DefAccountInTaskExtendedDtoFactory testFactory()
 */
class DefAccountInTaskExtendedDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
