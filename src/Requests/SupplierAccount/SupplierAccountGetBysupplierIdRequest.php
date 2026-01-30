<?php

namespace Pionect\VismaSdk\Requests\SupplierAccount;

use Pionect\VismaSdk\Dto\SupplierAccountsDto;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * SupplierAccount_GetBysupplierId
 */
class SupplierAccountGetBysupplierIdRequest extends Request
{
    protected $model = SupplierAccountsDto::class;

    protected Method $method = Method::GET;

    public function createDtoFromResponse(Response $response): mixed
    {
        return SupplierAccountsDto::from($response->json());
    }

    public function resolveEndpoint(): string
    {
        return "/v1/supplieraccount/{$this->supplierId}";
    }

    /**
     * @param  string  $supplierId  The id of the supplier
     * @param  null|array  $supplierItemId  The list of supplier itemIds to search the expense account for. If the list empty, then the general expense account for the specific supplier is returned
     * @param  null|string  $vatRegistrationId  The vat registration id of the supplier
     * @param  null|bool  $linesNonTaxable  Indicates if all lines are taxable or not. Default is false
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
        protected string $supplierId,
        protected ?array $supplierItemId = null,
        protected ?string $vatRegistrationId = null,
        protected ?bool $linesNonTaxable = null,
        protected ?string $erpApiBackground = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter([
            'supplierItemId' => $this->supplierItemId,
            'vatRegistrationId' => $this->vatRegistrationId,
            'linesNonTaxable' => $this->linesNonTaxable,
        ]);
    }

    public function defaultHeaders(): array
    {
        return array_filter(['erp-api-background' => $this->erpApiBackground]);
    }
}
