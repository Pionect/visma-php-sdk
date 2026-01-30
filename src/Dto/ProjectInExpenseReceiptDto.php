<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Receipt details tab &gt; Expense details section &gt; Project/contract &gt; The project or contract,
 * which should be specified if the employee incurred the expenses while working on a particular
 * project or contract.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectInExpenseReceiptDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectInExpenseReceiptDtoFactory testFactory()
 */
class ProjectInExpenseReceiptDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
