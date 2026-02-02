<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Project task &gt; The particular task of the project with which this transaction is associated.
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskInTransactionDetailDtoFactory testFactory()
 */
class ProjectTaskInTransactionDetailDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
