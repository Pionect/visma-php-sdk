<?php

// auto-generated

use Pionect\VismaSdk\Requests\UiExtension\UiExtensionGetAllUiExtensionsByownerIdRequest;
use Pionect\VismaSdk\Requests\UiExtension\UiExtensionGetAllUiExtensionsCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the uiExtensionGetAllUiExtensionsCollection method in the UiExtension resource', function () {
    Saloon::fake([
        UiExtensionGetAllUiExtensionsCollectionRequest::class => MockResponse::make([
            0 => [
                'screenId' => 'mock-id-123',
                'stepIds' => [],
                'id' => 'mock-id-123',
            ],
            1 => [
                'screenId' => 'mock-id-123',
                'stepIds' => [],
                'id' => 'mock-id-123',
            ],
        ], 200),
    ]);

    $request = (new UiExtensionGetAllUiExtensionsCollectionRequest);

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (UiExtensionGetAllUiExtensionsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->screenId->toBe('mock-id-123')
        ->id->toBe('mock-id-123');
});

it('calls the uiExtensionGetAllUiExtensionsByownerId method in the UiExtension resource', function () {
    Saloon::fake([
        UiExtensionGetAllUiExtensionsByownerIdRequest::class => MockResponse::make([
            'internalId' => 'mock-id-123',
            'title' => 'String value',
            'url' => 'String value',
            'type' => 'String value',
            'screenId' => 'mock-id-123',
            'stepId' => 'mock-id-123',
            'ownerName' => 'String value',
            'enabled' => true,
            'id' => 'mock-id-123',
        ], 200),
    ]);

    $request = new UiExtensionGetAllUiExtensionsByownerIdRequest(
        ownerId: 'test string',
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
        ->title->toBe('String value')
        ->url->toBe('String value')
        ->type->toBe('String value')
        ->screenId->toBe('mock-id-123')
        ->stepId->toBe('mock-id-123')
        ->ownerName->toBe('String value')
        ->enabled->toBeTrue()
        ->id->toBe('mock-id-123');
});
