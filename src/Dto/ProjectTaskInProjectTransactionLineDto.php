<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Project task &gt; The project task associated with the transaction.
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskInProjectTransactionLineDtoFactory testFactory()
 */
class ProjectTaskInProjectTransactionLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
