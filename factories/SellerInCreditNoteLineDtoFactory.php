<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SellerInCreditNoteLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SellerInCreditNoteLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return SellerInCreditNoteLineDto::class;
    }
}
