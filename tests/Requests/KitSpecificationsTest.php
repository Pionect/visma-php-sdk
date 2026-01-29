<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\KitSpecifications\KitSpecificationsGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\KitSpecifications\KitSpecificationsGetBykitInventoryIdRequest;
use Pionect\VismaSdk\Requests\KitSpecifications\KitSpecificationsGetBykitInventoryIdrevisionIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the kitSpecificationsGetAllCollection method in the KitSpecifications resource', function () {
    Saloon::fake([
        KitSpecificationsGetAllCollectionRequest::class => MockResponse::make([
            'records' => [
                0 => [
                    'kitInventoryId' => 'mock-id-123',
                    'revision' => 'String value',
                    'description' => 'String value',
                    'isActive' => true,
                    'allowComponentAddition' => true,
                    'isNonStock' => true,
                    'createdDateTime' => '2025-11-22T10:40:04.065Z',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'stockComponentLines' => [],
                    'nonStockComponentLines' => [],
                    'timestamp' => 'String value',
                    'errorInfo' => 'String value',
                ],
                1 => [
                    'kitInventoryId' => 'mock-id-123',
                    'revision' => 'String value',
                    'description' => 'String value',
                    'isActive' => true,
                    'allowComponentAddition' => true,
                    'isNonStock' => true,
                    'createdDateTime' => '2025-11-22T10:40:04.065Z',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'stockComponentLines' => [],
                    'nonStockComponentLines' => [],
                    'timestamp' => 'String value',
                    'errorInfo' => 'String value',
                ],
            ],
        ], 200),
    ]);

    $request = (new KitSpecificationsGetAllCollectionRequest(lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', kitInventoryId: 'test string', revisionId: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (KitSpecificationsGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->kitInventoryId->toBe('mock-id-123')
        ->revision->toBe('String value')
        ->description->toBe('String value')
        ->isActive->toBeTrue()
        ->allowComponentAddition->toBeTrue()
        ->isNonStock->toBeTrue()
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->timestamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the kitSpecificationsGetBykitInventoryIdrevisionId method in the KitSpecifications resource', function () {
    Saloon::fake([
        KitSpecificationsGetBykitInventoryIdrevisionIdRequest::class => MockResponse::make([
            'kitInventoryId' => 'mock-id-123',
            'revision' => 'String value',
            'description' => 'String value',
            'isActive' => true,
            'allowComponentAddition' => true,
            'isNonStock' => true,
            'createdDateTime' => '2025-11-22T10:40:04.065Z',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'stockComponentLines' => [],
            'nonStockComponentLines' => [],
            'timestamp' => 'String value',
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
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
        ->isActive->toBeTrue()
        ->allowComponentAddition->toBeTrue()
        ->isNonStock->toBeTrue()
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->timestamp->toBe('String value')
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the kitSpecificationsGetBykitInventoryId method in the KitSpecifications resource', function () {
    Saloon::fake([
        KitSpecificationsGetBykitInventoryIdRequest::class => MockResponse::make([
            'pageNumber' => 42,
            'pageSize' => 42,
            'totalCount' => 42,
            'records' => [],
            'id' => 'mock-id-123',
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
        ->totalCount->toBe(42)
        ->id->toBe('mock-id-123');
});
