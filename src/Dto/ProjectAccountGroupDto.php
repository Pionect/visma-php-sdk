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
        /** The unique identifier of the account group. */
        public ?string $accountGroupId = null,
        /** A check box that indicates that the account group is active. */
        public ?bool $active = null,
        /** An alphanumeric string that describes the account group. */
        public ?string $description = null,
        /**
         * @var AttributeIdValueDto[]|null
         *                                 Attributes
         */
        public ?array $attributes = null,
        public ?string $errorInfo = null,
    ) {}
}
