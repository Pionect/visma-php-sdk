<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Project task &gt; The project task associated with the transaction.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectTaskInProjectTransactionLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskInProjectTransactionLineDtoFactory testFactory()
 */
class ProjectTaskInProjectTransactionLineDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
