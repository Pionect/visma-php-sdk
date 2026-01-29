<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AttachmentMetadataUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AttachmentMetadataUpdateDtoFactory factory()
 */
class AttachmentMetadataUpdateDto extends Model
{
    /** The field SendToAutoinvoice only applies to files attached to Customer documents */
    #[Property]
    public ?object $sendToAutoinvoice;
}
