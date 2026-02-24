<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ContactUpdateDto;
use Pionect\VismaSdk\Enums\ContactContactMethodEnum;
use Pionect\VismaSdk\Enums\ContactTitleEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ContactUpdateDto>
 */
class ContactUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'active' => $this->faker->boolean(),
            'title' => $this->faker->randomElement(ContactTitleEnum::cases()),
            'firstName' => $this->faker->company(),
            'lastName' => $this->faker->company(),
            'position' => $this->faker->word(),
            'businessAccount' => $this->faker->word(),
            'sameAsAccount' => $this->faker->boolean(),
            'address' => AddressUpdateDtoFactory::new()->make(),
            'email' => $this->faker->safeEmail(),
            'web' => $this->faker->word(),
            'phone1' => $this->faker->word(),
            'phone2' => $this->faker->word(),
            'phone3' => $this->faker->word(),
            'fax' => $this->faker->word(),
            'contactMethod' => $this->faker->randomElement(ContactContactMethodEnum::cases()),
            'doNotCall' => $this->faker->boolean(),
            'doNotFax' => $this->faker->boolean(),
            'doNotEmail' => $this->faker->boolean(),
            'doNotMail' => $this->faker->boolean(),
            'noMassMail' => $this->faker->boolean(),
            'noMarketing' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return ContactUpdateDto::class;
    }
}
