<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\RegisterInFixedAssetTransactionDto;
use Pionect\VismaSdk\Enums\FixedAssetRegisterStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\RegisterInFixedAssetTransactionDto>
 */
class RegisterInFixedAssetTransactionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'documentDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'status' => $this->faker->randomElement(FixedAssetRegisterStatusEnum::cases()),
            'hold' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return RegisterInFixedAssetTransactionDto::class;
    }
}
