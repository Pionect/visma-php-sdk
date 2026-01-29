<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TimeCardMaterialsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TimeCardMaterialsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'itemId' => ItemIdInTimeCardMaterialsUpdateDtoFactory::new()->make(),
            'description' => DescriptionInTimeCardMaterialsUpdateDtoFactory::new()->make(),
            'uoM' => UoMInTimeCardMaterialsUpdateDtoFactory::new()->make(),
            'project' => ProjectInTimeCardMaterialsUpdateDtoFactory::new()->make(),
            'projectTask' => ProjectTaskInTimeCardMaterialsUpdateDtoFactory::new()->make(),
            'mon' => MonInTimeCardMaterialsUpdateDtoFactory::new()->make(),
            'tue' => TueInTimeCardMaterialsUpdateDtoFactory::new()->make(),
            'wed' => WedInTimeCardMaterialsUpdateDtoFactory::new()->make(),
            'thu' => ThuInTimeCardMaterialsUpdateDtoFactory::new()->make(),
            'fri' => FriInTimeCardMaterialsUpdateDtoFactory::new()->make(),
            'sat' => SatInTimeCardMaterialsUpdateDtoFactory::new()->make(),
            'sun' => SunInTimeCardMaterialsUpdateDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return TimeCardMaterialsUpdateDto::class;
    }
}
