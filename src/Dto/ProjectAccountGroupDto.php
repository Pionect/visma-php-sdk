<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectAccountGroupDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectAccountGroupDtoFactory factory()
 */
class ProjectAccountGroupDto extends Model
{
    public function __construct(
        public ?string $accountGroupId = null,
        public ?bool $active = null,
        public ?string $description = null,
        public ?array $attributes = null,
        public ?string $errorInfo = null,
    ) {}
}
