<?php

namespace Pionect\VismaSdk\Requests\Background;

use Pionect\VismaSdk\Dto\BackgroundRequestStateDto;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Background_GetBackgroundApiOperationByrequestId
 */
class BackgroundGetBackgroundApiOperationByrequestIdRequest extends Request
{
    protected $model = BackgroundRequestStateDto::class;

    protected Method $method = Method::GET;

    public function createDtoFromResponse(Response $response): mixed
    {
        return BackgroundRequestStateDto::from($response->json());
    }

    public function resolveEndpoint(): string
    {
        return "/v1/background/{$this->requestId}";
    }

    public function __construct(
        protected string $requestId,
    ) {}
}
