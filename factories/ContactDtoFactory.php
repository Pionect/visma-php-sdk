<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ContactDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ContactDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'displayName' => $this->faker->company(),
            'active' => $this->faker->boolean(),
            'title' => $this->faker->sentence(),
            'firstName' => $this->faker->company(),
            'lastName' => $this->faker->company(),
            'position' => $this->faker->word(),
            'businessAccount' => $this->faker->word(),
            'businessAccountType' => $this->faker->word(),
            'sameAsAccount' => $this->faker->boolean(),
            'address' => $this->faker->word(),
            'email' => $this->faker->safeEmail(),
            'web' => $this->faker->word(),
            'phone1' => $this->faker->word(),
            'phone2' => $this->faker->word(),
            'phone3' => $this->faker->word(),
            'fax' => $this->faker->word(),
            'contactMethod' => $this->faker->word(),
            'doNotCall' => $this->faker->boolean(),
            'doNotFax' => $this->faker->boolean(),
            'doNotEmail' => $this->faker->boolean(),
            'doNotMail' => $this->faker->boolean(),
            'noMassMail' => $this->faker->boolean(),
            'noMarketing' => $this->faker->boolean(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'contactId' => $this->faker->numberBetween(1, 1000),
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'errorInfo' => $this->faker->word(),
            'metadata' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ContactDto::class;
    }
}
