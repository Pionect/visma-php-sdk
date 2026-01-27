<?php

namespace Pionect\VismaSdk\Requests\CustomerContract;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CustomerContract_ActivateContractBycontractId
 *
 * Response Message has StatusCode BadRequest or InternalServerError if POST operation failed
 */
class CustomerContractActivateContractBycontractIdRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/v1/customerContract/{$this->contractId}/action/activateContract";
    }

    /**
     * @param  string  $contractId  Reference number of the customer contract to be activated
     * @param  null|\Pionect\VismaSdk\Foundation\Hydration\Model|array|null  $data  Request data
     * @param  null|string  $activationDate  Optional Activation Date
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
        protected Model|array|null $data = null,
        protected ?string $activationDate = null,
        protected ?string $erpApiBackground = null,
    ) {}

    protected function defaultBody(): array
    {
        if ($this->data instanceof Model) {
            return $this->data->toArray();
        }

        return $this->data ?? [];
    }

    public function defaultQuery(): array
    {
        return array_filter(['activationDate' => $this->activationDate]);
    }

    public function defaultHeaders(): array
    {
        return array_filter(['erp-api-background' => $this->erpApiBackground]);
    }
}
