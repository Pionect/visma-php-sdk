<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Foundation\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Spatie\LaravelData\Data;

/**
 * @property \Spatie\LaravelData\Data|array<string, mixed>|null $data
 */
abstract class VismaMutationRequest extends Request implements HasBody
{
    use HasJsonBody;

    /**
     * Recursively filters null values from the array.
     *
     * This prevents null values from being sent to the Visma API, which would
     * cause unwanted field modifications. Empty strings are preserved to allow
     * clearing fields.
     */
    protected function recursiveFilterNulls(array $data): array
    {
        $filtered = [];

        foreach ($data as $key => $value) {
            if (is_null($value)) {
                continue;
            }

            if (is_array($value)) {
                if (isset($value['value']) && count($value) === 1) {
                    if (is_null($value['value'])) {
                        continue;
                    }
                    if (is_array($value['value'])) {
                        $filtered[$key] = ['value' => $this->recursiveFilterNulls($value['value'])];
                    } else {
                        $filtered[$key] = $value;
                    }
                } else {
                    $filtered[$key] = $this->recursiveFilterNulls($value);
                }
            } else {
                $filtered[$key] = $value;
            }
        }

        return $filtered;
    }

    protected function defaultBody(): array
    {
        $data = $this->data ?? null;

        if ($data instanceof Data) {
            return $this->recursiveFilterNulls($data->toArray());
        }

        return is_array($data) ? $data : [];
    }
}
