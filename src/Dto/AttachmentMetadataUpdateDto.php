<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\AttachmentMetadataUpdateDtoFactory testFactory()
 */
class AttachmentMetadataUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\AttachmentMetadataUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * The field SendToAutoinvoice only applies to files attached to Customer
         * documents
         */
        public ?object $sendToAutoinvoice = null,
    ) {}
}
