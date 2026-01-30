<?php

namespace Pionect\VismaSdk\Requests\Warehouse;

use Pionect\VismaSdk\Dto\WarehouseLocationUpdateDto;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Warehouse_PutBywarehouseIDlocationID
 */
class WarehousePutBywarehouseIdlocationIdRequest extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/v1/warehouse/{$this->warehouseId}/location/{$this->locationId}";
    }

    /**
     * @param  null|\Pionect\VismaSdk\Dto\WarehouseLocationUpdateDto|array|null  $data  Request data
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
        protected string $warehouseId,
        protected string $locationId,
        protected WarehouseLocationUpdateDto|array|null $data = null,
        protected ?string $erpApiBackground = null,
    ) {}

    protected function defaultBody(): array
    {
        if ($this->data instanceof Model) {
            return $this->data->toArray();
        }

        return $this->data ?? [];
    }

    public function defaultHeaders(): array
    {
        return array_filter(['erp-api-background' => $this->erpApiBackground]);
    }
}
