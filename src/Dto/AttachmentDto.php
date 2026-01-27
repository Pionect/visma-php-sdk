<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class AttachmentDto extends Model
{
    /** The name of the attachment. */
    #[Property]
    public ?string $name;

    /** The version of the attachment. */
    #[Property]
    public ?int $revision;
}
