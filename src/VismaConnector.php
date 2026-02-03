<?php

namespace Pionect\VismaSdk;

use Pionect\VismaSdk\Foundation\Pagination\VismaPaginator;
use Saloon\Helpers\OAuth2\OAuthConfig;
use Saloon\Http\Connector;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\HasPagination;
use Saloon\Traits\OAuth2\ClientCredentialsGrant;
use Saloon\Traits\Plugins\AlwaysThrowOnErrors;

/**
 * Visma.net ERP API
 */
class VismaConnector extends Connector implements HasPagination
{
    use AlwaysThrowOnErrors;
    use ClientCredentialsGrant;

    /**
     * Visma.net ERP API
     */
    public function __construct()
    {
        //
    }

    public function resolveBaseUrl(): string
    {
        return config('visma-sdk.base_url');
    }

    protected function defaultHeaders(): array
    {
        return [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];
    }

    protected function defaultOAuth2Config(): OAuthConfig
    {
        return OAuthConfig::make()
            ->setClientId(config('visma-sdk.application_id'))
            ->setClientSecret(config('visma-sdk.application_secret'))
            ->setTokenEndpoint('https://connect.visma.com/connect/token')
            ->setDefaultScopes([
                'vismanet_erp_service_api:read',
                'vismanet_erp_service_api:create',
                'vismanet_erp_service_api:update',
                'vismanet_erp_service_api:delete',
            ])
            ->setRequestModifier(function (Request $request) {
                $request->body()->add('tenant_id', config('visma-sdk.tenant_id'));
            });
    }

    public function paginate(Request $request): VismaPaginator
    {
        return new VismaPaginator($this, $request);
    }
}
