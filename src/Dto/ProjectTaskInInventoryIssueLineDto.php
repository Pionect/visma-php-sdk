<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Project Task
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectTaskInInventoryIssueLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskInInventoryIssueLineDtoFactory factory()
 */
class ProjectTaskInInventoryIssueLineDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
