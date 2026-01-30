<?php

// Generated 2026-01-30 14:10:14
use Pionect\VismaSdk\Dto\UiExtensionUpdateDto;
use Pionect\VismaSdk\Requests\UiExtension\UiExtensionDeleteByownerIdinternalIdRequest;
use Pionect\VismaSdk\Requests\UiExtension\UiExtensionDeleteByownerIdinternalIdscreenIdstepIdRequest;
use Pionect\VismaSdk\Requests\UiExtension\UiExtensionGetAllUiExtensionsByownerIdRequest;
use Pionect\VismaSdk\Requests\UiExtension\UiExtensionGetAllUiExtensionsRequest;
use Pionect\VismaSdk\Requests\UiExtension\UiExtensionPostRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the uiExtensionGetAllUiExtensionsRequest method in the UiExtension resource', function () {
    Saloon::fake([
        UiExtensionGetAllUiExtensionsRequest::class => MockResponse::make([
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

    $request = new UiExtensionGetAllUiExtensionsRequest(
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(UiExtensionGetAllUiExtensionsRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->screenId->toBe('mock-id-123');
});

it('calls the uiExtensionGetAllUiExtensionsByownerIdRequest method in the UiExtension resource', function () {
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
        ->enabled->toBe(true);
});

it('calls the uiExtensionPostRequest method in the UiExtension resource', function () {
    $bodyData = new UiExtensionUpdateDto(
        title: 'String value',
        url: 'String value',
        type: 'String value',
        screenId: 'mock-id-123',
        stepId: 'mock-id-123',
        ownerId: 'mock-id-123',
        ownerName: 'String value'
    );

    Saloon::fake([
        UiExtensionPostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new UiExtensionPostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(UiExtensionPostRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the uiExtensionDeleteByownerIdinternalIdRequest method in the UiExtension resource', function () {
    Saloon::fake([
        UiExtensionDeleteByownerIdinternalIdRequest::class => MockResponse::make([], 204),
    ]);

    $request = new UiExtensionDeleteByownerIdinternalIdRequest(
        ownerId: 'test string',
        internalId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(UiExtensionDeleteByownerIdinternalIdRequest::class);

    expect($response->status())->toBe(204);
});

it('calls the uiExtensionDeleteByownerIdinternalIdscreenIdstepIdRequest method in the UiExtension resource', function () {
    Saloon::fake([
        UiExtensionDeleteByownerIdinternalIdscreenIdstepIdRequest::class => MockResponse::make([], 204),
    ]);

    $request = new UiExtensionDeleteByownerIdinternalIdscreenIdstepIdRequest(
        ownerId: 'test string',
        internalId: 'test string',
        screenId: 'test string',
        stepId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(UiExtensionDeleteByownerIdinternalIdscreenIdstepIdRequest::class);

    expect($response->status())->toBe(204);
});
