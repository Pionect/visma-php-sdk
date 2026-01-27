<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ProjectAccountGroupDto extends Model
{
    /** The unique identifier of the account group. */
    #[Property]
    public ?string $accountGroupId;

    /** A check box that indicates that the account group is active. */
    #[Property]
    public ?bool $active;

    /** An alphanumeric string that describes the account group. */
    #[Property]
    public ?string $description;

    /** Attributes */
    #[Property]
    public ?array $attributes;

    #[Property]
    public ?string $errorInfo;
}
