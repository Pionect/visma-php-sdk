<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Foundation\Hydration;

interface ModelInterface
{
    public function fill(array $attributes): void;

    public function attributes(): array;

    public function toArray(): array;
}
