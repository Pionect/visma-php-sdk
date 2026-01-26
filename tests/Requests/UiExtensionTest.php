<?php

// auto-generated

use Pionect\VismaSdk\Requests\UiExtension\UiExtensionGetAllUiExtensionsByownerIdRequest;
use Pionect\VismaSdk\Requests\UiExtension\UiExtensionGetAllUiExtensionsCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the uiExtensionGetAllUiExtensionsCollection method in the UiExtension resource', function () {
    Saloon::fake([
        UiExtensionGetAllUiExtensionsCollectionRequest::class => MockResponse::make([
            0 => [
                'screenId' => 'mock-id-123',
                'stepIds' => [],
            ],
            1 => [
                'screenId' => 'mock-id-123',
                'stepIds' => [],
            ],
        ], 200),
    ]);

    $request = (new UiExtensionGetAllUiExtensionsCollectionRequest);

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (UiExtensionGetAllUiExtensionsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->screenId->toBe('mock-id-123');
});

it('calls the uiExtensionGetAllUiExtensionsByownerId method in the UiExtension resource', function () {
    Saloon::fake([
        UiExtensionGetAllUiExtensionsByownerIdRequest::class => MockResponse::make([
            'internalId' => 'mock-id-123',
            'title' => 'Mock value',
            'url' => 'Mock value',
            'screenId' => 'mock-id-123',
            'stepId' => 'mock-id-123',
            'ownerName' => 'Mock value',
            'enabled' => true,
        ], 200),
    ]);

    $request = new UiExtensionGetAllUiExtensionsByownerIdRequest(
        ownerIdId: 'test string',
        screenId: 'test string',
        type: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(UiExtensionGetAllUiExtensionsByownerIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->internalId->toBe('mock-id-123')
        ->title->toBe('Mock value')
        ->url->toBe('Mock value')
        ->screenId->toBe('mock-id-123')
        ->stepId->toBe('mock-id-123')
        ->ownerName->toBe('Mock value')
        ->enabled->toBeTrue();
});
