<?php

namespace Pionect\VismaSdk\Requests\CurrencyRate;

use Pionect\VismaSdk\Dto\CurrencyRateDto;
use Pionect\VismaSdk\Foundation\Hydration\Facades\Hydrator;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\PaginationPlugin\Contracts\Paginatable;

/**
 * CurrencyRate_GetAll
 */
class CurrencyRateGetAllCollectionRequest extends Request implements Paginatable
{
    protected $model = CurrencyRateDto::class;

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
        return '/v2/currencyrate';
    }

    /**
     * @param  null|string  $fromDate  From effective date.
     * @param  null|string  $toDate  To effective date.
     * @param  null|string  $fromCurrency  Identifies from currency.
     * @param  null|string  $toCurrency  Identifies to currency.
     * @param  null|string  $rateType  Identifies rate type.
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
        protected ?string $fromDate = null,
        protected ?string $toDate = null,
        protected ?string $fromCurrency = null,
        protected ?string $toCurrency = null,
        protected ?string $rateType = null,
        protected ?string $erpApiBackground = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter([
            'fromDate' => $this->fromDate,
            'toDate' => $this->toDate,
            'fromCurrency' => $this->fromCurrency,
            'toCurrency' => $this->toCurrency,
            'rateType' => $this->rateType,
        ]);
    }

    public function defaultHeaders(): array
    {
        return array_filter(['erp-api-background' => $this->erpApiBackground]);
    }
}
