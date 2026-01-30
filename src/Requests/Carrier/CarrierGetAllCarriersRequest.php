<?php

namespace Pionect\VismaSdk\Requests\Carrier;

use Pionect\VismaSdk\Dto\CarrierDto;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\PaginationPlugin\Contracts\Paginatable;

/**
 * Carrier_GetAllCarriers
 */
class CarrierGetAllCarriersRequest extends Request implements Paginatable
{
    protected $model = CarrierDto::class;

    protected Method $method = Method::GET;

    public function createDtoFromResponse(Response $response): mixed
    {
        $data = $response->json();

        return collect($data)->map(
            fn (array $item) => CarrierDto::from($item)
        );
    }

    public function resolveEndpoint(): string
    {
        return '/v1/carrier';
    }

    /**
     * @param  null|int  $numberToRead  This field has been deprecated and will be removed in future versions.
     * @param  null|int  $skipRecords  This field has been deprecated and will be removed in future versions.
     * @param  null|string  $lastModifiedDateTime  System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.
     * @param  null|string  $lastModifiedDateTimeCondition  System retrieved information for state/condition.
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
        protected ?int $numberToRead = null,
        protected ?int $skipRecords = null,
        protected ?string $lastModifiedDateTime = null,
        protected ?string $lastModifiedDateTimeCondition = null,
        protected ?int $pageNumber = null,
        protected ?int $pageSize = null,
        protected ?string $erpApiBackground = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter([
            'numberToRead' => $this->numberToRead,
            'skipRecords' => $this->skipRecords,
            'lastModifiedDateTime' => $this->lastModifiedDateTime,
            'lastModifiedDateTimeCondition' => $this->lastModifiedDateTimeCondition,
            'pageNumber' => $this->pageNumber,
            'pageSize' => $this->pageSize,
        ]);
    }

    public function defaultHeaders(): array
    {
        return array_filter(['erp-api-background' => $this->erpApiBackground]);
    }
}
