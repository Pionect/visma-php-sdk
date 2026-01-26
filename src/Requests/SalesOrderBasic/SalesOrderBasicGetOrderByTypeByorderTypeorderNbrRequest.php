<?php

namespace Pionect\VismaSdk\Requests\SalesOrderBasic;

use Pionect\VismaSdk\Dto\SalesOrderBasicDto;
use Pionect\VismaSdk\Foundation\Hydration\Facades\Hydrator;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * SalesOrderBasic_GetOrderByTypeByorderTypeorderNbr
 *
 * Data for a single Sales Order Basic
 */
class SalesOrderBasicGetOrderByTypeByorderTypeorderNbrRequest extends Request
{
    protected $model = SalesOrderBasicDto::class;

    protected Method $method = Method::GET;

    public function createDtoFromResponse(Response $response): mixed
    {
        return Hydrator::hydrate(
            $this->model,
            $response->json()
        );
    }

    public function resolveEndpoint(): string
    {
        return "/v1/salesorderbasic/{$this->orderTypeId}/{$this->orderNbrId}";
    }

    /**
     * @param  string  $orderTypeId  Identifies the Sales Order Type
     * @param  string  $orderNbrId  Identifies the Sales Order Number
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
        protected string $orderTypeId,
        protected string $orderNbrId,
        protected ?string $erpApiBackground = null,
    ) {}

    public function defaultHeaders(): array
    {
        return array_filter(['erp-api-background' => $this->erpApiBackground]);
    }
}
