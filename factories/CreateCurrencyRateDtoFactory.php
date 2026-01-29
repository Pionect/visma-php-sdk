<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CreateCurrencyRateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CreateCurrencyRateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'fromCurrencyId' => FromCurrencyIdInCreateCurrencyRateDtoFactory::new()->make(),
            'toCurrencyId' => ToCurrencyIdInCreateCurrencyRateDtoFactory::new()->make(),
            'rateType' => RateTypeInCreateCurrencyRateDtoFactory::new()->make(),
            'effectiveDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'rate' => RateInCreateCurrencyRateDtoFactory::new()->make(),
            'multDiv' => MultDivInCreateCurrencyRateDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return CreateCurrencyRateDto::class;
    }
}
