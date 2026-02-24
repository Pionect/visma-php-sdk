<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ApprovalDetailsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ApprovalDetailsUpdateDto>
 */
class ApprovalDetailsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'attachmentId' => $this->faker->uuid(),
            'comment' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ApprovalDetailsUpdateDto::class;
    }
}
