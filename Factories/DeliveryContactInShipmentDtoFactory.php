<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DeliveryContactInShipmentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DeliveryContactInShipmentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'overrideContact' => $this->faker->boolean(),
            'contactId' => $this->faker->numberBetween(1, 1000),
            'name' => $this->faker->name(),
            'attention' => $this->faker->word(),
            'email' => $this->faker->safeEmail(),
            'web' => $this->faker->word(),
            'phone1' => $this->faker->word(),
            'phone2' => $this->faker->word(),
            'fax' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DeliveryContactInShipmentDto::class;
    }
}
