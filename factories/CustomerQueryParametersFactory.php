<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'greaterThanValue' => $this->faker->word(),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'name' => $this->faker->name(),
            'status' => $this->faker->word(),
            'corporateId' => $this->faker->uuid(),
            'vatRegistrationId' => $this->faker->uuid(),
            'email' => $this->faker->safeEmail(),
            'phone' => $this->faker->word(),
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'createdDateTime' => $this->faker->word(),
            'createdDateTimeCondition' => $this->faker->word(),
            'expandAccountInformation' => $this->faker->boolean(),
            'expandPaymentMethods' => $this->faker->boolean(),
            'expandDirectDebit' => $this->faker->boolean(),
            'attributes' => $this->faker->word(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerQueryParameters::class;
    }
}
