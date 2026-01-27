<?php

namespace Pionect\VismaSdk\Requests\Background;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Background_GetBackgroundApiOperationContentByrequestId
 */
class BackgroundGetBackgroundApiOperationContentByrequestIdRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/background/{$this->requestId}/content";
    }

    public function __construct(
        protected string $requestId,
    ) {}
}
