<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Project Task
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskInInventoryIssueLineDtoFactory testFactory()
 */
class ProjectTaskInInventoryIssueLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
