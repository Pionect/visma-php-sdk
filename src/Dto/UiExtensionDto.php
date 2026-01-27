<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class UiExtensionDto extends Model
{
    #[Property]
    public ?string $internalId;

    #[Property]
    public ?string $title;

    #[Property]
    public ?string $url;

    #[Property]
    public ?string $type;

    #[Property]
    public ?string $screenId;

    #[Property]
    public ?string $stepId;

    #[Property]
    public ?string $ownerName;

    #[Property]
    public ?bool $enabled;
}
