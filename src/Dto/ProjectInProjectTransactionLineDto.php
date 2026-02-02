<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Project &gt; The project associated with the transaction.
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectInProjectTransactionLineDtoFactory testFactory()
 */
class ProjectInProjectTransactionLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
