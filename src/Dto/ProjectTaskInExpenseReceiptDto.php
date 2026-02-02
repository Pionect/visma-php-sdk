<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Receipt details tab &gt; Expense details section &gt; Project task &gt; The project task to which
 * the expenses are related.
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskInExpenseReceiptDtoFactory testFactory()
 */
class ProjectTaskInExpenseReceiptDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
