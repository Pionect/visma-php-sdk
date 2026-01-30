<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AttachmentMetadataUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AttachmentMetadataUpdateDtoFactory testFactory()
 */
class AttachmentMetadataUpdateDto extends Model
{
    public function __construct(
        public ?object $sendToAutoinvoice = null,
    ) {}
}
