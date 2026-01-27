<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\FixedAssetClassDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FixedAssetClassDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'classId' => $this->faker->uuid(),
            'recordType' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'active' => $this->faker->boolean(),
            'assetTypeId' => $this->faker->uuid(),
            'isTangible' => $this->faker->boolean(),
            'depreciable' => $this->faker->boolean(),
            'usefulLife' => $this->faker->randomFloat(2, 0, 1000),
            'acceleratedDepreciation' => $this->faker->boolean(),
            'bookSettings' => $this->faker->word(),
            'accounts' => $this->faker->word(),
            'subAccountMask' => $this->faker->word(),
            'accumulatedDepreciationSubAccountMask' => $this->faker->word(),
            'depreciatedExpenseSubAccountMask' => $this->faker->word(),
            'proceedSubAccountMask' => $this->faker->word(),
            'gainLossSubAccountMask' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return FixedAssetClassDto::class;
    }
}
