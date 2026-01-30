<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The table &gt; Project task &gt; The particular task of the project with which this batch is
 * associated.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectTaskInJournalTransactionLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskInJournalTransactionLineDtoFactory testFactory()
 */
class ProjectTaskInJournalTransactionLineDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
