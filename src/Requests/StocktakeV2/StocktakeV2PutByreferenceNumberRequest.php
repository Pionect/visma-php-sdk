<?php

namespace Pionect\VismaSdk\Requests\StocktakeV2;

use Pionect\VismaSdk\Dto\StocktakeUpdateDto;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Spatie\LaravelData\Data;

/**
 * StocktakeV2_PutByreferenceNumber
 *
 * Response Message has StatusCode NoContent if PUT operation succeed
 *
 * Response Message has
 * StatusCode BadRequest if PUT operation failed
 *
 * If PUT operation failed, Response body contains
 * all stocktake line details (the ones that have values), the error message and also an error code
 * (The first member of StocktakeExceptionErrorCode will be 0, and the value of each successive enum
 * member is increased by 1)
 */
class StocktakeV2PutByreferenceNumberRequest extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/v2/stocktake/{$this->referenceNumber}";
    }

    /**
     * @param  string  $referenceNumber  Identifies the stocktake to update
     * @param  null|\Pionect\VismaSdk\Dto\StocktakeUpdateDto|array|null  $data  Request data
     * @param  null|string  $erpApiBackground  Accepts the request and queues it to be executed in the background by our least busy worker. Responds with 202 Accepted and a document containing a JobId reference and details state location.
     *                                         Supported values:
     *                                         * a URL: when the background operation is finished, a notification will be posted to the URL with a document containing a reference id, status code and a details state location.
     *                                         * "none" (without quotes): Fire and forget; no notification will be sent when background operation is finished.
     *                                         * "subscription[:<name_1>=<value_1>,..,<name_n>=<value_n>]" (without quotes): when the background operation is finsihed, a notification is posted to the Webhook subscription set up in Developer Portal for your integration client.
     *                                         Optionally a set of name-value pairs can be added. These will be sent as headers in the POST request to the Webhook subscription's url.
     *
     * To find status and details of a background-api operation, GET .. v1/background/{id}. To get the response payload of a background-api operation, if any, GET .. v1/background/{id}/content
     */
    public function __construct(
        protected string $referenceNumber,
        protected StocktakeUpdateDto|array|null $data = null,
        protected ?string $erpApiBackground = null,
    ) {}

    protected function defaultBody(): array
    {
        if ($this->data instanceof Data) {
            return $this->data->toArray();
        }

        return $this->data ?? [];
    }

    public function defaultHeaders(): array
    {
        return array_filter(['erp-api-background' => $this->erpApiBackground]);
    }
}
