<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Generator\Generators\Traits;

/**
 * Plain JSON DTO Assertions Trait
 *
 * Overrides the generateDtoAssertions method to handle plain JSON format
 * instead of JSON:API format (data.attributes structure).
 */
trait PlainJsonDtoAssertions
{
    /**
     * Generate DTO assertions based on plain JSON mock data
     *
     * @param  array  $mockData  Plain JSON object (not wrapped in data.attributes)
     * @return string Generated assertion code
     */
    protected function generateDtoAssertions(array $mockData): string
    {
        // For plain JSON format, the attributes are directly in $mockData
        $attributes = $mockData;

        if (empty($attributes)) {
            return '        // No attributes to validate';
        }

        $assertions = [];

        foreach ($attributes as $key => $value) {
            // Skip arrays and objects
            if (is_array($value) || is_object($value)) {
                continue;
            }

            $assertion = $this->generateAssertionForValue($key, $value);
            $assertions[] = $assertion;
        }

        if (empty($assertions)) {
            return '        // No simple attributes to validate (arrays/objects skipped)';
        }

        return implode("\n", $assertions);
    }

    /**
     * Generate an assertion for a specific attribute value
     */
    protected function generateAssertionForValue(string $key, mixed $value): string
    {
        if (is_bool($value)) {
            $methodName = $value ? 'toBeTrue' : 'toBeFalse';

            return "        ->{$key}->{$methodName}()";
        }

        if (is_int($value)) {
            return "        ->{$key}->toBe({$value})";
        }

        if (is_float($value)) {
            return "        ->{$key}->toBe({$value})";
        }

        if (is_null($value)) {
            return "        ->{$key}->toBeNull()";
        }

        // Check if it's a datetime string
        if (is_string($value) && $this->isDateTimeString($value)) {
            return "        ->{$key}->toEqual(new Carbon(\"{$value}\"))";
        }

        // Default: string value
        $escapedValue = addslashes($value);

        return "        ->{$key}->toBe(\"{$escapedValue}\")";
    }

    /**
     * Check if a string is a datetime format
     */
    protected function isDateTimeString(string $value): bool
    {
        return (bool) preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}/', $value);
    }
}
