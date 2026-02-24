<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SendToAutoinvoice;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\SendToAutoinvoice>
 */
class SendToAutoinvoiceFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return SendToAutoinvoice::class;
    }
}
