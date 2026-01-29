<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ExpenseClaimUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseClaimUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'date' => DateInExpenseClaimUpdateDtoFactory::new()->make(),
            'description' => DescriptionInExpenseClaimUpdateDtoFactory::new()->make(),
            'claimedBy' => ClaimedByInExpenseClaimUpdateDtoFactory::new()->make(),
            'customer' => CustomerInExpenseClaimUpdateDtoFactory::new()->make(),
            'customerUpdateAnswer' => $this->faker->word(),
            'location' => LocationInExpenseClaimUpdateDtoFactory::new()->make(),
            'details' => [],
        ];
    }

    protected function modelClass(): string
    {
        return ExpenseClaimUpdateDto::class;
    }
}
