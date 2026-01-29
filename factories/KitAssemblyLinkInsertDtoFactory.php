<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\KitAssemblyLinkInsertDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class KitAssemblyLinkInsertDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'orderType' => OrderTypeInKitAssemblyLinkInsertDtoFactory::new()->make(),
            'orderNumber' => OrderNumberInKitAssemblyLinkInsertDtoFactory::new()->make(),
            'orderLineNumber' => OrderLineNumberInKitAssemblyLinkInsertDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return KitAssemblyLinkInsertDto::class;
    }
}
