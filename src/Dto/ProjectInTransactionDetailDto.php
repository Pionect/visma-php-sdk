<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Project &gt; The project with which this transaction is associated, or the code indicating that this
 * transaction is not associated with any project.
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectInTransactionDetailDtoFactory testFactory()
 */
class ProjectInTransactionDetailDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
