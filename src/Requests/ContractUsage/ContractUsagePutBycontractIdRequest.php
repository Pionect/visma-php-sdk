<?php

namespace Pionect\VismaSdk\Requests\ContractUsage;

use Pionect\VismaSdk\Dto\ContractUsageUpdateDto;
use Pionect\VismaSdk\Foundation\Requests\VismaMutationRequest;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Spatie\LaravelData\Data;

/**
 * ContractUsage_PutBycontractId
 *
 * Response Message has StatusCode NoContent if PUT operation succeed
 */
class ContractUsagePutBycontractIdRequest extends VismaMutationRequest
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/v1/contractUsage/{$this->contractId}";
    }

    /**
     * @param  string  $contractId  Identifies the Contract Usage to update
     * @param  null|\Pionect\VismaSdk\Dto\ContractUsageUpdateDto|array|null  $data  Request data
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
        protected string $contractId,
        protected ContractUsageUpdateDto|array|null $data = null,
        protected ?string $erpApiBackground = null,
    ) {}

    public function defaultHeaders(): array
    {
        return array_filter(['erp-api-background' => $this->erpApiBackground]);
    }
}
