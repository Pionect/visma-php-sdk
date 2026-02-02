<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\DetailsInCustomerContractDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DetailsInCustomerContractDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'effectiveFrom' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'promoCode' => PromoCodeIdDescriptionDtoFactory::new()->make(),
            'pendingSetup' => null,
            'pendingRecurring' => null,
            'pendingRenewal' => null,
            'totalPending' => null,
            'currentSetup' => null,
            'currentRecurring' => null,
            'currentRenewal' => null,
            'lines' => [],
        ];
    }

    protected function modelClass(): string
    {
        return DetailsInCustomerContractDto::class;
    }
}
