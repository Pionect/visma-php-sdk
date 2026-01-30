<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Project task &gt; The particular task of the project with which this transaction is associated.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectTaskInTransactionDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskInTransactionDetailDtoFactory testFactory()
 */
class ProjectTaskInTransactionDetailDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
