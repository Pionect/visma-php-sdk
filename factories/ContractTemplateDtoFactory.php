<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ContractTemplateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ContractTemplateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
        ];
    }

    protected function modelClass(): string
    {
        return ContractTemplateDto::class;
    }
}
