<?php

namespace Pionect\VismaSdk\Requests\SupplierInvoice;

use Pionect\VismaSdk\Dto\SupplierInvoiceDto;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * SupplierInvoice_GetByTypeBydocumentTypeinvoiceNumber
 *
 * Data for a single invoice. <br></br>
 * The response headers include an ETag after a successful GET
 * operation.
 */
class SupplierInvoiceGetByTypeBydocumentTypeinvoiceNumberRequest extends Request
{
    protected Method $method = Method::GET;

    public function createDtoFromResponse(Response $response): SupplierInvoiceDto
    {
        return SupplierInvoiceDto::from($response->json());
    }

    public function resolveEndpoint(): string
    {
        return "/v1/supplierInvoice/{$this->documentType}/{$this->invoiceNumber}";
    }

    /**
     * @param  string  $documentType  Identifies the Invoice
     * @param  string  $invoiceNumber  Identifies the Invoice
     * @param  null|bool  $expandLinePrebookAccounts  Expland line-level pre-booking account and sub-account information.
     * @param  null|bool  $expandLandedCosts  Expland landed costs information.
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
        protected string $documentType,
        protected string $invoiceNumber,
        protected ?bool $expandLinePrebookAccounts = null,
        protected ?bool $expandLandedCosts = null,
        protected ?string $erpApiBackground = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['expandLinePrebookAccounts' => $this->expandLinePrebookAccounts, 'expandLandedCosts' => $this->expandLandedCosts]);
    }

    public function defaultHeaders(): array
    {
        return array_filter(['erp-api-background' => $this->erpApiBackground]);
    }
}
