<?php

namespace Pionect\VismaSdk\Requests\PurchaseReceiptV2;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PurchaseReceiptV2_GetPurchaseReceiptByreceiptNumber
 *
 * Data for a single Purchase Receipt. <br></br>
 * The response headers include an ETag after a
 * successful GET operation.
 */
class PurchaseReceiptV2GetPurchaseReceiptByreceiptNumberRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/PurchaseReceipt/{$this->receiptNumberId}";
    }

    /**
     * @param  string  $receiptNumberId  Identifies the Purchase Receipt
     * @param  null|bool  $includeCustomFreeFields  Optional parameter to request custom free fields.
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
        protected string $receiptNumberId,
        protected ?bool $includeCustomFreeFields = null,
        protected ?string $erpApiBackground = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['includeCustomFreeFields' => $this->includeCustomFreeFields]);
    }

    public function defaultHeaders(): array
    {
        return array_filter(['erp-api-background' => $this->erpApiBackground]);
    }
}
