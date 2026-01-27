<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Location\LocationGetLocationBybAccountIdlocationIdRequest;
use Pionect\VismaSdk\Requests\Location\LocationGetLocationsCollectionRequest;
use Pionect\VismaSdk\Requests\Location\LocationGetLocationsForBaccountBybAccountIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the locationGetLocationBybAccountIdlocationId method in the Location resource', function () {
    Saloon::fake([
        LocationGetLocationBybAccountIdlocationIdRequest::class => MockResponse::make([
            'baccount' => null,
            'locationId' => 'mock-id-123',
            'locationName' => 'String value',
            'active' => true,
            'address' => null,
            'contact' => null,
            'vatRegistrationId' => 'mock-id-123',
            'vatZone' => null,
            'ediCode' => 'String value',
            'gln' => 'String value',
            'corporateId' => 'mock-id-123',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'peppolScheme' => null,
            'internalId' => 42,
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
        ], 200),
    ]);

    $request = new LocationGetLocationBybAccountIdlocationIdRequest(
        bAccountIdId: 'test string',
        locationIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(LocationGetLocationBybAccountIdlocationIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->baccount->toBeNull()
        ->locationId->toBe('mock-id-123')
        ->locationName->toBe('String value')
        ->active->toBeTrue()
        ->address->toBeNull()
        ->contact->toBeNull()
        ->vatRegistrationId->toBe('mock-id-123')
        ->vatZone->toBeNull()
        ->ediCode->toBe('String value')
        ->gln->toBe('String value')
        ->corporateId->toBe('mock-id-123')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->peppolScheme->toBeNull()
        ->internalId->toBe(42)
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the locationGetLocationsForBaccountBybAccountId method in the Location resource', function () {
    Saloon::fake([
        LocationGetLocationsForBaccountBybAccountIdRequest::class => MockResponse::make([
            'baccount' => null,
            'locationId' => 'mock-id-123',
            'locationName' => 'String value',
            'active' => true,
            'address' => null,
            'contact' => null,
            'vatRegistrationId' => 'mock-id-123',
            'vatZone' => null,
            'ediCode' => 'String value',
            'gln' => 'String value',
            'corporateId' => 'mock-id-123',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'peppolScheme' => null,
            'internalId' => 42,
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
        ], 200),
    ]);

    $request = new LocationGetLocationsForBaccountBybAccountIdRequest(
        bAccountIdId: 'test string',
        locationId: 'test string',
        gln: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        greaterThanValue: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        createdDateTime: 'test string',
        createdDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(LocationGetLocationsForBaccountBybAccountIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->baccount->toBeNull()
        ->locationId->toBe('mock-id-123')
        ->locationName->toBe('String value')
        ->active->toBeTrue()
        ->address->toBeNull()
        ->contact->toBeNull()
        ->vatRegistrationId->toBe('mock-id-123')
        ->vatZone->toBeNull()
        ->ediCode->toBe('String value')
        ->gln->toBe('String value')
        ->corporateId->toBe('mock-id-123')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->peppolScheme->toBeNull()
        ->internalId->toBe(42)
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the locationGetLocationsCollection method in the Location resource', function () {
    Saloon::fake([
        LocationGetLocationsCollectionRequest::class => MockResponse::make([
            0 => [
                'baccount' => null,
                'locationId' => 'mock-id-123',
                'locationName' => 'String value',
                'active' => true,
                'address' => null,
                'contact' => null,
                'vatRegistrationId' => 'mock-id-123',
                'vatZone' => null,
                'ediCode' => 'String value',
                'gln' => 'String value',
                'corporateId' => 'mock-id-123',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'peppolScheme' => null,
                'internalId' => 42,
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'baccount' => null,
                'locationId' => 'mock-id-123',
                'locationName' => 'String value',
                'active' => true,
                'address' => null,
                'contact' => null,
                'vatRegistrationId' => 'mock-id-123',
                'vatZone' => null,
                'ediCode' => 'String value',
                'gln' => 'String value',
                'corporateId' => 'mock-id-123',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'peppolScheme' => null,
                'internalId' => 42,
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new LocationGetLocationsCollectionRequest(locationId: 'test string', gln: 'test string', numberToRead: 123, skipRecords: 123, greaterThanValue: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (LocationGetLocationsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->baccount->toBeNull()
        ->locationId->toBe('mock-id-123')
        ->locationName->toBe('String value')
        ->active->toBeTrue()
        ->address->toBeNull()
        ->contact->toBeNull()
        ->vatRegistrationId->toBe('mock-id-123')
        ->vatZone->toBeNull()
        ->ediCode->toBe('String value')
        ->gln->toBe('String value')
        ->corporateId->toBe('mock-id-123')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->peppolScheme->toBeNull()
        ->internalId->toBe(42)
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});
