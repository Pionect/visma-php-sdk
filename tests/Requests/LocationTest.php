<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Location\LocationGetLocationBybAccountIdlocationIdRequest;
use Pionect\VismaSdk\Requests\Location\LocationGetLocationsCollectionRequest;
use Pionect\VismaSdk\Requests\Location\LocationGetLocationsForBaccountBybAccountIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the locationGetLocationBybAccountIdlocationId method in the Location resource', function () {
    Saloon::fake([
        LocationGetLocationBybAccountIdlocationIdRequest::class => MockResponse::make([
            'baccount' => 'Mock value',
            'locationId' => 'mock-id-123',
            'locationName' => 'Mock value',
            'active' => true,
            'address' => 'Mock value',
            'contact' => 'Mock value',
            'vatRegistrationId' => 'mock-id-123',
            'vatZone' => 'Mock value',
            'ediCode' => 'Mock value',
            'gln' => 'Mock value',
            'corporateId' => 'mock-id-123',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'peppolScheme' => 'Mock value',
            'internalId' => 42,
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
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
        ->baccount->toBe('Mock value')
        ->locationId->toBe('mock-id-123')
        ->locationName->toBe('Mock value')
        ->active->toBeTrue()
        ->address->toBe('Mock value')
        ->contact->toBe('Mock value')
        ->vatRegistrationId->toBe('mock-id-123')
        ->vatZone->toBe('Mock value')
        ->ediCode->toBe('Mock value')
        ->gln->toBe('Mock value')
        ->corporateId->toBe('mock-id-123')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->peppolScheme->toBe('Mock value')
        ->internalId->toBe(42)
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the locationGetLocationsForBaccountBybAccountId method in the Location resource', function () {
    Saloon::fake([
        LocationGetLocationsForBaccountBybAccountIdRequest::class => MockResponse::make([
            'baccount' => 'Mock value',
            'locationId' => 'mock-id-123',
            'locationName' => 'Mock value',
            'active' => true,
            'address' => 'Mock value',
            'contact' => 'Mock value',
            'vatRegistrationId' => 'mock-id-123',
            'vatZone' => 'Mock value',
            'ediCode' => 'Mock value',
            'gln' => 'Mock value',
            'corporateId' => 'mock-id-123',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'peppolScheme' => 'Mock value',
            'internalId' => 42,
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
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
        ->baccount->toBe('Mock value')
        ->locationId->toBe('mock-id-123')
        ->locationName->toBe('Mock value')
        ->active->toBeTrue()
        ->address->toBe('Mock value')
        ->contact->toBe('Mock value')
        ->vatRegistrationId->toBe('mock-id-123')
        ->vatZone->toBe('Mock value')
        ->ediCode->toBe('Mock value')
        ->gln->toBe('Mock value')
        ->corporateId->toBe('mock-id-123')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->peppolScheme->toBe('Mock value')
        ->internalId->toBe(42)
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the locationGetLocationsCollection method in the Location resource', function () {
    Saloon::fake([
        LocationGetLocationsCollectionRequest::class => MockResponse::make([
            0 => [
                'baccount' => 'Mock value',
                'locationId' => 'mock-id-123',
                'locationName' => 'Mock value',
                'active' => true,
                'address' => 'Mock value',
                'contact' => 'Mock value',
                'vatRegistrationId' => 'mock-id-123',
                'vatZone' => 'Mock value',
                'ediCode' => 'Mock value',
                'gln' => 'Mock value',
                'corporateId' => 'mock-id-123',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'peppolScheme' => 'Mock value',
                'internalId' => 42,
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'baccount' => 'Mock value',
                'locationId' => 'mock-id-123',
                'locationName' => 'Mock value',
                'active' => true,
                'address' => 'Mock value',
                'contact' => 'Mock value',
                'vatRegistrationId' => 'mock-id-123',
                'vatZone' => 'Mock value',
                'ediCode' => 'Mock value',
                'gln' => 'Mock value',
                'corporateId' => 'mock-id-123',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'peppolScheme' => 'Mock value',
                'internalId' => 42,
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new LocationGetLocationsCollectionRequest(locationId: 'test string', gln: 'test string', numberToRead: 123, skipRecords: 123, greaterThanValue: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (LocationGetLocationsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->baccount->toBe('Mock value')
        ->locationId->toBe('mock-id-123')
        ->locationName->toBe('Mock value')
        ->active->toBeTrue()
        ->address->toBe('Mock value')
        ->contact->toBe('Mock value')
        ->vatRegistrationId->toBe('mock-id-123')
        ->vatZone->toBe('Mock value')
        ->ediCode->toBe('Mock value')
        ->gln->toBe('Mock value')
        ->corporateId->toBe('mock-id-123')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->peppolScheme->toBe('Mock value')
        ->internalId->toBe(42)
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
