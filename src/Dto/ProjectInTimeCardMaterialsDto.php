<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Project* &gt; The project that the employee worked on.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectInTimeCardMaterialsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectInTimeCardMaterialsDtoFactory factory()
 */
class ProjectInTimeCardMaterialsDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
