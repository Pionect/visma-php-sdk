<?php

namespace Pionect\VismaSdk\Requests\StocktakeV2;

use Pionect\VismaSdk\Dto\StocktakeV2dto;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\PaginationPlugin\Contracts\Paginatable;

/**
 * StocktakeV2_GetAllStocktakes
 */
class StocktakeV2GetAllStocktakesRequest extends Request implements Paginatable
{
    protected Method $method = Method::GET;

    public function createDtoFromResponse(Response $response): mixed
    {
        $data = $response->json();

        return collect($data)->map(
            fn (array $item) => StocktakeV2dto::from($item)
        );
    }

    public function resolveEndpoint(): string
    {
        return '/v2/stocktake';
    }

    /**
     * @param  null|string  $warehouse  Filter by Warehouse.
     * @param  null|string  $location  Filter by Location.
     * @param  null|string  $inventory  Filter by Inventory.
     * @param  null|string  $lotSerialNumber  Filter by LotSerialNumber.
     * @param  null|string  $summaryStatus  Filter by SummaryStatus.
     * @param  null|int  $startWithLine  Filter by LineNumber GreaterEqual StartWithLine.
     * @param  null|int  $endWithLine  Filter by by LineNumber LessEqual EndWithLine.
     * @param  null|string  $freezeDateTime  Filter by FreezeDateTime.
     * @param  null|string  $freezeDateTimeCondition  Filter by FreezeDateTimeCondition.
     * @param  null|string  $lastModifiedDateTime  System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present..
     * @param  null|string  $lastModifiedDateTimeCondition  System retrieved information for state/condition.
     * @param  null|string  $expirationDateTime  Filter by ExpirationDateTime.
     * @param  null|string  $expirationDateTimeCondition  Filter by ExpirationDateTimeCondition.
     * @param  null|string  $status  Filter by StocktakeLineStatus.
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
        protected ?string $warehouse = null,
        protected ?string $location = null,
        protected ?string $inventory = null,
        protected ?string $lotSerialNumber = null,
        protected ?string $summaryStatus = null,
        protected ?int $startWithLine = null,
        protected ?int $endWithLine = null,
        protected ?string $freezeDateTime = null,
        protected ?string $freezeDateTimeCondition = null,
        protected ?string $lastModifiedDateTime = null,
        protected ?string $lastModifiedDateTimeCondition = null,
        protected ?string $expirationDateTime = null,
        protected ?string $expirationDateTimeCondition = null,
        protected ?string $status = null,
        protected ?int $pageNumber = null,
        protected ?int $pageSize = null,
        protected ?string $erpApiBackground = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter([
            'warehouse' => $this->warehouse,
            'location' => $this->location,
            'inventory' => $this->inventory,
            'lotSerialNumber' => $this->lotSerialNumber,
            'summaryStatus' => $this->summaryStatus,
            'startWithLine' => $this->startWithLine,
            'endWithLine' => $this->endWithLine,
            'freezeDateTime' => $this->freezeDateTime,
            'freezeDateTimeCondition' => $this->freezeDateTimeCondition,
            'lastModifiedDateTime' => $this->lastModifiedDateTime,
            'lastModifiedDateTimeCondition' => $this->lastModifiedDateTimeCondition,
            'expirationDateTime' => $this->expirationDateTime,
            'expirationDateTimeCondition' => $this->expirationDateTimeCondition,
            'status' => $this->status,
            'pageNumber' => $this->pageNumber,
            'pageSize' => $this->pageSize,
        ]);
    }

    public function defaultHeaders(): array
    {
        return array_filter(['erp-api-background' => $this->erpApiBackground]);
    }
}
