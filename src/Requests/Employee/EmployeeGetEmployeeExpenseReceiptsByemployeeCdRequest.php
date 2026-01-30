<?php

namespace Pionect\VismaSdk\Requests\Employee;

use Pionect\VismaSdk\Dto\ExpenseReceiptDto;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Employee_GetEmployeeExpenseReceiptsByemployeeCd
 */
class EmployeeGetEmployeeExpenseReceiptsByemployeeCdRequest extends Request
{
    protected $model = ExpenseReceiptDto::class;

    protected Method $method = Method::GET;

    public function createDtoFromResponse(Response $response): mixed
    {
        return ExpenseReceiptDto::from($response->json());
    }

    public function resolveEndpoint(): string
    {
        return "/v1/employee/{$this->employeeCd}/expenseReceipt";
    }

    /**
     * @param  string  $employeeCd  Identifies the employee
     * @param  null|string  $date  The date of the document
     * @param  null|string  $inventory  Identifies the inventory item from the document
     * @param  null|string  $project  Identifies the project from the document
     * @param  null|string  $claimedBy  Identifies the employee from the document
     * @param  null|string  $projectTask  Filter on Task ID.
     * @param  null|bool  $invoiceable  If the document is invoiceable
     * @param  null|string  $status  The status of the document.
     * @param  null|string  $customer  Identifies the customer from the document
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
        protected string $employeeCd,
        protected ?string $date = null,
        protected ?string $dateCondition = null,
        protected ?string $inventory = null,
        protected ?string $project = null,
        protected ?string $claimedBy = null,
        protected ?string $projectTask = null,
        protected ?bool $invoiceable = null,
        protected ?string $status = null,
        protected ?string $customer = null,
        protected ?string $erpApiBackground = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter([
            'date' => $this->date,
            'dateCondition' => $this->dateCondition,
            'inventory' => $this->inventory,
            'project' => $this->project,
            'claimedBy' => $this->claimedBy,
            'projectTask' => $this->projectTask,
            'invoiceable' => $this->invoiceable,
            'status' => $this->status,
            'customer' => $this->customer,
        ]);
    }

    public function defaultHeaders(): array
    {
        return array_filter(['erp-api-background' => $this->erpApiBackground]);
    }
}
