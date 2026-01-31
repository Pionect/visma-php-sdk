<?php

namespace Pionect\VismaSdk\Requests\Branch;

use Pionect\VismaSdk\Dto\BranchDto;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Branch_GetSpecificBranchBybranchNumber
 */
class BranchGetSpecificBranchBybranchNumberRequest extends Request
{
    protected Method $method = Method::GET;

    public function createDtoFromResponse(Response $response): mixed
    {
        return BranchDto::from($response->json());
    }

    public function resolveEndpoint(): string
    {
        return "/v1/branch/{$this->branchNumber}";
    }

    /**
     * @param  string  $branchNumber  Identifies the branch
     * @param  null|bool  $expandAddress  True to get main address for branch.
     * @param  null|bool  $expandContact  True to get main contact for a branch.
     * @param  null|bool  $expandCurrency  True to get base currency for a branch.
     * @param  null|bool  $expandVatZone  True to get vat zone for a branch.
     * @param  null|bool  $expandLedger  True to get ledger for a branch.
     * @param  null|bool  $expandIndustryCode  True to get industry code for a branch.
     * @param  null|bool  $expandDeliveryAddress  True to get delivery address for a branch.
     * @param  null|bool  $expandDeliveryContact  True to get delivery contact for a branch.
     * @param  null|bool  $expandDefaultCountry  True to get default country for a branch.
     * @param  null|bool  $expandBankSettings  True to get payment settings for Branch.
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
        protected string $branchNumber,
        protected ?bool $expandAddress = null,
        protected ?bool $expandContact = null,
        protected ?bool $expandCurrency = null,
        protected ?bool $expandVatZone = null,
        protected ?bool $expandLedger = null,
        protected ?bool $expandIndustryCode = null,
        protected ?bool $expandDeliveryAddress = null,
        protected ?bool $expandDeliveryContact = null,
        protected ?bool $expandDefaultCountry = null,
        protected ?bool $expandBankSettings = null,
        protected ?string $erpApiBackground = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter([
            'expandAddress' => $this->expandAddress,
            'expandContact' => $this->expandContact,
            'expandCurrency' => $this->expandCurrency,
            'expandVatZone' => $this->expandVatZone,
            'expandLedger' => $this->expandLedger,
            'expandIndustryCode' => $this->expandIndustryCode,
            'expandDeliveryAddress' => $this->expandDeliveryAddress,
            'expandDeliveryContact' => $this->expandDeliveryContact,
            'expandDefaultCountry' => $this->expandDefaultCountry,
            'expandBankSettings' => $this->expandBankSettings,
        ]);
    }

    public function defaultHeaders(): array
    {
        return array_filter(['erp-api-background' => $this->erpApiBackground]);
    }
}
