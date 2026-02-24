<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalesOrderTypeDto;
use Pionect\VismaSdk\Enums\SalesOrderLineOperationEnum;
use Pionect\VismaSdk\Enums\SalesOrderTypeBehaviorEnum;
use Pionect\VismaSdk\Enums\SalesOrderTypeCustomerDocumentTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\SalesOrderTypeDto>
 */
class SalesOrderTypeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'orderType' => $this->faker->word(),
            'active' => $this->faker->boolean(),
            'description' => $this->faker->sentence(),
            'behavior' => $this->faker->randomElement(SalesOrderTypeBehaviorEnum::cases()),
            'defaultOperation' => $this->faker->randomElement(SalesOrderLineOperationEnum::cases()),
            'customerDocumentType' => $this->faker->randomElement(SalesOrderTypeCustomerDocumentTypeEnum::cases()),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SalesOrderTypeDto::class;
    }
}
