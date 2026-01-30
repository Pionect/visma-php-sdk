<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Project &gt; The project associated with the transaction.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectInProjectTransactionLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectInProjectTransactionLineDtoFactory testFactory()
 */
class ProjectInProjectTransactionLineDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
