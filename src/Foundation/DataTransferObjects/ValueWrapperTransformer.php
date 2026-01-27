<?php

namespace Pionect\VismaSdk\Foundation\DataTransferObjects;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Support\DataProperty;
use Spatie\LaravelData\Support\Transformation\TransformationContext;
use Spatie\LaravelData\Transformers\Transformer;

class ValueWrapperTransformer implements Transformer
{
    #[\Override]
    public function transform(DataProperty $property, mixed $value, TransformationContext $context): ?array
    {
        if (is_null($value) || $value === '') {
            return null;
        }

        if ($value instanceof Data || $value instanceof DataCollection) {
            return ['value' => $value->transform($context)];
        }

        return ['value' => $value];
    }
}
