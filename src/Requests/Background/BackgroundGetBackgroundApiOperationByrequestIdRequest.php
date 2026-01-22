<?php

namespace Pionect\VismaSdk\Requests\Background;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Background_GetBackgroundApiOperationByrequestId
 */
class BackgroundGetBackgroundApiOperationByrequestIdRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/background/{$this->requestIdId}";
    }

    public function __construct(
        protected string $requestIdId,
    ) {}
}
