<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class AttachmentMetadataUpdateDto extends Model
{
    /** The field SendToAutoinvoice only applies to files attached to Customer documents */
    #[Property]
    public ?object $sendToAutoinvoice;
}
