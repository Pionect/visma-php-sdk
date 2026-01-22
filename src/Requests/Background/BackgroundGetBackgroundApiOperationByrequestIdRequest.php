<?php

namespace Pionect\VismaSdk\Requests\Background;

use Pionect\VismaSdk\Dto\BackgroundRequestStateDto;
use Pionect\VismaSdk\Foundation\Hydration\Facades\Hydrator;
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
        return Hydrator::hydrate(
            $this->model,
            $response->json('data'),
            $response->json('included')
        );
    }

    public function resolveEndpoint(): string
    {
        return "/v1/background/{$this->requestIdId}";
    }

    public function __construct(
        protected string $requestIdId,
    ) {}
}
