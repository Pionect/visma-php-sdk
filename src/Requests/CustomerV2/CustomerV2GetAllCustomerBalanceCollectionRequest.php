<?php

namespace Pionect\VismaSdk\Requests\CustomerV2;

use Pionect\VismaSdk\Dto\CustomerBalanceV2Dto;
use Pionect\VismaSdk\Foundation\Hydration\Facades\Hydrator;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\PaginationPlugin\Contracts\Paginatable;

/**
 * CustomerV2_GetAllCustomerBalance
 */
class CustomerV2GetAllCustomerBalanceCollectionRequest extends Request implements Paginatable
{
    protected $model = CustomerBalanceV2Dto::class;

    protected Method $method = Method::GET;

    public function createDtoFromResponse(Response $response): mixed
    {
        return Hydrator::hydrateCollection(
            $this->model,
            $response->json()
        );
    }

    public function resolveEndpoint(): string
    {
        return '/v2/customer/balance';
    }

    /**
     * @param  null|string  $branchNumber  Filter by Branch
     * @param  null|string  $customer  Filter by Customer
     * @param  string  $fromFinPeriod  Filter from financial period, format YYYYPP
     *                                 The filte is inclusive, the records for the specified period will be included in the results.
     *                                 This filter is required.
     * @param  string  $toFinPeriod  Filter to financial period, format YYYYPP
     *                               The filte is inclusive, the records for the specified period will be included in the results.
     *                               This filter is required.
     * @param  null|int  $pageNumber  Pagination parameter. Page number.
     * @param  null|int  $pageSize  Pagination parameter. Number of items to be collected.
     *                              Please use a page size lower or equal to the allowed max page size which is returned as part of the metadata information.
     *                              If requested page size is greater than allowed max page size, request will be limited to max page size.
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
        protected ?string $branchNumber,
        protected ?string $customer,
        protected string $fromFinPeriod,
        protected string $toFinPeriod,
        protected ?int $pageNumber = null,
        protected ?int $pageSize = null,
        protected ?string $erpApiBackground = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter([
            'branchNumber' => $this->branchNumber,
            'customer' => $this->customer,
            'fromFinPeriod' => $this->fromFinPeriod,
            'toFinPeriod' => $this->toFinPeriod,
            'pageNumber' => $this->pageNumber,
            'pageSize' => $this->pageSize,
        ]);
    }

    public function defaultHeaders(): array
    {
        return array_filter(['erp-api-background' => $this->erpApiBackground]);
    }
}
