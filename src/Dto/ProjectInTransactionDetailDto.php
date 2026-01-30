<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Project &gt; The project with which this transaction is associated, or the code indicating that this
 * transaction is not associated with any project.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectInTransactionDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectInTransactionDetailDtoFactory testFactory()
 */
class ProjectInTransactionDetailDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
