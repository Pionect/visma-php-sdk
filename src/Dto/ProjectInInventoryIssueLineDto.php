<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Project
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectInInventoryIssueLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectInInventoryIssueLineDtoFactory testFactory()
 */
class ProjectInInventoryIssueLineDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
