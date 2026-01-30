<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Receipt details tab &gt; Expense details section &gt; Project task &gt; The project task to which
 * the expenses are related.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectTaskInExpenseReceiptDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskInExpenseReceiptDtoFactory testFactory()
 */
class ProjectTaskInExpenseReceiptDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
