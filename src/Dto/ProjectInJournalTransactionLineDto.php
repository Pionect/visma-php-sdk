<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The table &gt; Project &gt; The project with which this batch is associated, or the code indicating
 * that this batch is not associated with any project.
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectInJournalTransactionLineDtoFactory testFactory()
 */
class ProjectInJournalTransactionLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
