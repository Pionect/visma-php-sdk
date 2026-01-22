<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ReleaseSupplierPaymentActionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ReleaseSupplierPaymentActionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
        ];
    }

    protected function modelClass(): string
    {
        return ReleaseSupplierPaymentActionDto::class;
    }
}
