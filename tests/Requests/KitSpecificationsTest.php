<?php

use Pionect\VismaSdk\Requests\KitSpecifications\KitSpecificationsGetAllRequest;
use Pionect\VismaSdk\Requests\KitSpecifications\KitSpecificationsGetBykitInventoryIdRequest;
use Pionect\VismaSdk\Requests\KitSpecifications\KitSpecificationsGetBykitInventoryIdrevisionIdRequest;
use Pionect\VismaSdk\Requests\KitSpecifications\KitSpecificationsPostRequest;
use Pionect\VismaSdk\Requests\KitSpecifications\KitSpecificationsPutBykitInventoryIdrevisionIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the kitSpecificationsGetAllRequest method in the KitSpecifications resource', function () {
    Saloon::fake([
        KitSpecificationsGetAllRequest::class => MockResponse::make([
            0 => [
                'name' => 'Mock value',
            ],
            1 => [
                'name' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = new KitSpecificationsGetAllRequest(
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        createdDateTime: 'test string',
        createdDateTimeCondition: 'test string',
        kitInventoryId: 'test string',
        revisionId: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(KitSpecificationsGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->name->toBe('Mock value');
});

it('calls the kitSpecificationsPostRequest method in the KitSpecifications resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        KitSpecificationsPostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new KitSpecificationsPostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(KitSpecificationsPostRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the kitSpecificationsGetBykitInventoryIdrevisionIdRequest method in the KitSpecifications resource', function () {
    Saloon::fake([
        KitSpecificationsGetBykitInventoryIdrevisionIdRequest::class => MockResponse::make([
            'kitInventoryId' => 'mock-id-123',
            'revision' => 'String value',
            'description' => 'String value',
            'isActive' => true,
            'allowComponentAddition' => true,
            'isNonStock' => true,
            'createdDateTime' => '2025-11-22T10:40:04+00:00',
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'stockComponentLines' => [],
            'nonStockComponentLines' => [],
            'timestamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new KitSpecificationsGetBykitInventoryIdrevisionIdRequest(
        kitInventoryId: 'test string',
        revisionId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(KitSpecificationsGetBykitInventoryIdrevisionIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->kitInventoryId->toBe('mock-id-123')
        ->revision->toBe('String value')
        ->description->toBe('String value')
        ->isActive->toBe(true)
        ->allowComponentAddition->toBe(true)
        ->isNonStock->toBe(true)
        ->createdDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->timestamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the kitSpecificationsPutBykitInventoryIdrevisionIdRequest method in the KitSpecifications resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        KitSpecificationsPutBykitInventoryIdrevisionIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new KitSpecificationsPutBykitInventoryIdrevisionIdRequest(
        kitInventoryId: 'test string',
        revisionId: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(KitSpecificationsPutBykitInventoryIdrevisionIdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the kitSpecificationsGetBykitInventoryIdRequest method in the KitSpecifications resource', function () {
    Saloon::fake([
        KitSpecificationsGetBykitInventoryIdRequest::class => MockResponse::make([
            'pageNumber' => 42,
            'pageSize' => 42,
            'totalCount' => 42,
            'records' => [],
        ], 200),
    ]);

    $request = new KitSpecificationsGetBykitInventoryIdRequest(
        kitInventoryId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(KitSpecificationsGetBykitInventoryIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->pageNumber->toBe(42)
        ->pageSize->toBe(42)
        ->totalCount->toBe(42);
});
