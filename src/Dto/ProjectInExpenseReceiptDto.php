<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Receipt details tab &gt; Expense details section &gt; Project/contract &gt; The project or contract,
 * which should be specified if the employee incurred the expenses while working on a particular
 * project or contract.
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectInExpenseReceiptDtoFactory testFactory()
 */
class ProjectInExpenseReceiptDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
