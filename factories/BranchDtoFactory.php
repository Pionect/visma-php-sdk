<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\BranchDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'branchId' => $this->faker->numberBetween(1, 1000),
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
            'organizationId' => $this->faker->numberBetween(1, 1000),
            'isMainBranch' => $this->faker->boolean(),
            'isActive' => $this->faker->boolean(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'corporateId' => $this->faker->uuid(),
            'vatRegistrationId' => $this->faker->uuid(),
            'mainAddress' => null,
            'mainContact' => null,
            'deliveryAddress' => null,
            'deliveryContact' => null,
            'defaultCountry' => null,
            'industryCode' => null,
            'currency' => null,
            'vatZone' => null,
            'ledger' => null,
            'bankSettings' => null,
        ];
    }

    protected function modelClass(): string
    {
        return BranchDto::class;
    }
}
