<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ProjectAccountGroupDtoFactory testFactory()
 */
class ProjectAccountGroupDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $accountGroupId = null,
        public ?bool $active = null,
        public ?string $description = null,
        /** @var AttributeIdValueDto[]|null */
        public ?array $attributes = null,
        public ?string $errorInfo = null,
    ) {}
}
