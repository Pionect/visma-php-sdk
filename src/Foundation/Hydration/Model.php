<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Foundation\Hydration;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use ReflectionClass;

abstract class Model implements ModelInterface
{
    use HasAttributes;

    #[Property(isReadOnly: true)]
    public string $id;

    /**
     * Get a new factory instance for the model.
     */
    public static function factory(): mixed
    {
        $modelClass = static::class;
        $factoryClass = str_replace('\\Dto\\', '\\Factories\\', $modelClass).'Factory';

        if (class_exists($factoryClass)) {
            return $factoryClass::new();
        }

        throw new \RuntimeException("Factory [{$factoryClass}] not found for model [{$modelClass}].");
    }

    /**
     * @param  array<string, mixed>  $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->fill($attributes);
    }

    /**
     * @param  array<string, mixed>  $attributes
     */
    public function fill(array $attributes): void
    {
        $propertyNames = $this->propertyNames();

        foreach ($attributes as $key => $value) {
            if (in_array($key, $propertyNames)) {
                $this->$key = $value;
            }
        }
    }

    /**
     * @return array<int, string>
     */
    private function propertyNames(): array
    {
        $reflectionClass = new ReflectionClass($this);
        $properties = $reflectionClass->getProperties();
        $propertyNames = [];

        foreach ($properties as $property) {
            $attributes = $property->getAttributes(Property::class);
            if (count($attributes) > 0) {
                $propertyNames[] = $property->getName();
            }
        }

        return $propertyNames;
    }

    /**
     * Convert Model to array for request body.
     *
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return $this->attributes();
    }
}
