<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Foundation\Hydration;

use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use ReflectionClass;
use ReflectionException;
use ReflectionNamedType;
use ReflectionProperty;
use Webmozart\Assert\Assert;

class Hydrator
{
    /**
     * @param  class-string<Model>|Model  $model
     * @param  array<string, mixed>  $item
     *
     * @throws ReflectionException
     */
    public function hydrate(string|Model $model, array $item): Model
    {
        if (is_string($model)) {
            $model = $this->getModelFromClassName($model);
        }

        $reflectionClass = new ReflectionClass($model);

        $fillable = Arr::pluck($this->filterProperties($reflectionClass, Property::class), 'name');

        $hydrator = function (Model $model, string $property, mixed $value) use ($fillable, $reflectionClass) {
            if (in_array($property, $fillable)) {
                $type = $reflectionClass->getProperty($property)->getType();

                $propertyReflectionAttributes = $reflectionClass->getProperty($property)->getAttributes(Property::class);
                Assert::count($propertyReflectionAttributes, 1);

                $propertyArguments = $propertyReflectionAttributes[0]->getArguments();
                if (isset($propertyArguments['hydrator'])) {
                    Assert::isCallable($propertyArguments['hydrator']);

                    $value = $propertyArguments['hydrator']($value);
                }

                $dateTimeAttributes = $reflectionClass->getProperty($property)->getAttributes(DateTime::class);
                if ($dateTimeAttributes !== []) {

                    if ($value === null && $reflectionClass->getProperty($property)->getType()?->allowsNull()) {
                        $value = null;
                    } else {
                        $value = Carbon::parse($value);
                    }
                }

                Assert::isInstanceOf($type, ReflectionNamedType::class);

                // Handle nested DTOs - if the property type is a Model subclass and value is an array
                if ($value !== null && is_array($value) && ! $type->isBuiltin()) {
                    $typeName = $type->getName();
                    if (is_subclass_of($typeName, Model::class)) {
                        $value = $this->hydrate($typeName, $value);
                    }
                }

                $model->$property = $value;
            }
        };

        // Hydrate all properties directly from the item (plain JSON, no 'attributes' wrapper)
        foreach ($item as $property => $value) {
            $hydrator($model, $property, $value);
        }

        return $model;
    }

    /**
     * @param  class-string<Model>  $model
     * @param  array<int, mixed>  $data
     * @return Collection<int, Model>
     */
    public function hydrateCollection(string $model, array $data): Collection
    {
        $collection = new Collection;

        foreach ($data as $item) {
            $collection->add($this->hydrate($model, $item));
        }

        return $collection;
    }

    /**
     * @param  ReflectionClass<Model>  $reflectionClass
     * @return array<int, ReflectionProperty>
     */
    private function filterProperties(ReflectionClass $reflectionClass, string ...$attributes): array
    {
        return array_values(array_filter(
            $reflectionClass->getProperties(),
            function (ReflectionProperty $value) use ($attributes) {
                $hasAttributes = true;

                foreach ($attributes as $attribute) {
                    $hasAttributes = (bool) count($value->getAttributes($attribute));
                }

                return $hasAttributes;
            }
        ));
    }

    /**
     * @param  class-string<Model>  $model
     */
    private function getModelFromClassName(string $model): Model
    {
        $reflectionClass = new ReflectionClass($model);
        if ($reflectionClass->getConstructor()?->getNumberOfRequiredParameters() > 0) {
            return $reflectionClass->newInstanceWithoutConstructor();
        }

        return new $model;
    }
}
