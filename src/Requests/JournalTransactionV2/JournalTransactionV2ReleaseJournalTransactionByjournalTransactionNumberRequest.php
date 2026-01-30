<?php

namespace Pionect\VismaSdk\Requests\JournalTransactionV2;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Spatie\LaravelData\Data;

/**
 * JournalTransactionV2_ReleaseJournalTransactionByjournalTransactionNumber
 *
 * The action result dto contains information about the result of running the action<br></br>
 *
 * Response Message has StatusCode BadRequest or InternalServerError if POST operation failed
 */
class JournalTransactionV2ReleaseJournalTransactionByjournalTransactionNumberRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/v2/journaltransaction/{$this->journalTransactionNumber}/action/release";
    }

    /**
     * @param  string  $journalTransactionNumber  Reference number of the journal transaction to be released
     * @param  null|Spatie\LaravelData\Data|array|null  $data  Request data
     * @param  null|string  $erpApiBackground  Accepts the request and queues it to be executed in the background by our least busy worker. Responds with 202 Accepted and a document containing a JobId reference and details state location.
     *                                         Supported values:
     *                                         * a URL: when the background operation is finished, a notification will be posted to the URL with a document containing a reference id, status code and a details state location.
     *                                         * "none" (without quotes): Fire and forget; no notification will be sent when background operation is finished.
     *                                         * "subscription[:<name_1>=<value_1>,..,<name_n>=<value_n>]" (without quotes): when the background operation is finsihed, a notification is posted to the Webhook subscription set up in Developer Portal for your integration client.
     *                                         Optionally a set of name-value pairs can be added. These will be sent as headers in the POST request to the Webhook subscription's url.
     *
     * To find status and details of a background-api operation, GET .. v1/background/{id}. To get the response payload of a background-api operation, if any, GET .. v1/background/{id}/content
     * @param  null|string  $ifMatch  The If-Match HTTP header allows clients to update a resource only if its current version matches a specific ETag. This mechanism helps prevent conflicts when multiple clients attempt to modify the same resource simultaneously.
     *                                The If-Match header should be included in the request headers using the following syntax: If-Match: "etag_value"
     *                                * If the POST operation is successful, the server responds with 200 OK and includes the new ETag value in the response headers.
     *                                * If the ETag on the server does not match the value provided in the If-Match header, the server responds with 412 Precondition Failed.
     */
    public function __construct(
        protected string $journalTransactionNumber,
        protected Data|array|null $data = null,
        protected ?string $erpApiBackground = null,
        protected ?string $ifMatch = null,
    ) {}

    protected function defaultBody(): array
    {
        if ($this->data instanceof Data) {
            return $this->data->toArray();
        }

        return $this->data ?? [];
    }

    public function defaultHeaders(): array
    {
        return array_filter(['erp-api-background' => $this->erpApiBackground, 'If-Match' => $this->ifMatch]);
    }
}
