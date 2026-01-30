<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The table &gt; Project &gt; The project with which this batch is associated, or the code indicating
 * that this batch is not associated with any project.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectInJournalTransactionLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectInJournalTransactionLineDtoFactory factory()
 */
class ProjectInJournalTransactionLineDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
