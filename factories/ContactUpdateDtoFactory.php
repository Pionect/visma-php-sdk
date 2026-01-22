<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ContactUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ContactUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'active' => $this->faker->word(),
            'title' => $this->faker->sentence(),
            'firstName' => $this->faker->company(),
            'lastName' => $this->faker->company(),
            'position' => $this->faker->word(),
            'businessAccount' => $this->faker->word(),
            'sameAsAccount' => $this->faker->word(),
            'address' => $this->faker->word(),
            'email' => $this->faker->safeEmail(),
            'web' => $this->faker->word(),
            'phone1' => $this->faker->word(),
            'phone2' => $this->faker->word(),
            'phone3' => $this->faker->word(),
            'fax' => $this->faker->word(),
            'contactMethod' => $this->faker->word(),
            'doNotCall' => $this->faker->word(),
            'doNotFax' => $this->faker->word(),
            'doNotEmail' => $this->faker->safeEmail(),
            'doNotMail' => $this->faker->word(),
            'noMassMail' => $this->faker->word(),
            'noMarketing' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ContactUpdateDto::class;
    }
}
