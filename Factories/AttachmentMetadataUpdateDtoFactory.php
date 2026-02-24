<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AttachmentMetadataUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\AttachmentMetadataUpdateDto>
 */
class AttachmentMetadataUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'sendToAutoinvoice' => (object) [],
        ];
    }

    protected function modelClass(): string
    {
        return AttachmentMetadataUpdateDto::class;
    }
}
