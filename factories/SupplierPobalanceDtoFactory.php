<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SupplierPobalanceDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierPobalanceDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'supplier' => null,
            'totalPoonHoldOrderTotal' => null,
            'totalPoonHoldLineTotal' => null,
            'totalOpenPoorderTotal' => null,
            'totalOpenPolineTotal' => null,
            'totalClosedPoorderTotal' => null,
            'totalClosedPolineTotal' => null,
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierPobalanceDto::class;
    }
}
