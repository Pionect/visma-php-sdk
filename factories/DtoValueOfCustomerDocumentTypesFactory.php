<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfCustomerDocumentTypes;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfCustomerDocumentTypesFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfCustomerDocumentTypes::class;
    }
}
