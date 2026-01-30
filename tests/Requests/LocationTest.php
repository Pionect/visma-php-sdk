<?php

// Generated 2026-01-30 15:19:40
use Pionect\VismaSdk\Dto\LocationUpdateDto;
use Pionect\VismaSdk\Requests\Location\LocationCreateRequest;
use Pionect\VismaSdk\Requests\Location\LocationGetLocationBybAccountIdlocationIdRequest;
use Pionect\VismaSdk\Requests\Location\LocationGetLocationsForBaccountBybAccountIdRequest;
use Pionect\VismaSdk\Requests\Location\LocationGetLocationsRequest;
use Pionect\VismaSdk\Requests\Location\LocationUpdateBybAccountIdlocationIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the locationGetLocationBybAccountIdlocationIdRequest method in the Location resource', function () {
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
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'peppolScheme' => null,
            'internalId' => 42,
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new LocationGetLocationBybAccountIdlocationIdRequest(
        bAccountId: 'test string',
        locationId: 'test string',
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
        ->active->toBe(true)
        ->address->toBeNull()
        ->contact->toBeNull()
        ->vatRegistrationId->toBe('mock-id-123')
        ->vatZone->toBeNull()
        ->ediCode->toBe('String value')
        ->gln->toBe('String value')
        ->corporateId->toBe('mock-id-123')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->peppolScheme->toBeNull()
        ->internalId->toBe(42)
        ->errorInfo->toBe('String value');
});

it('calls the locationUpdateBybAccountIdlocationIdRequest method in the Location resource', function () {
    $bodyData = new LocationUpdateDto(
        baccountId: null,
        locationId: null,
        locationName: 'String value',
        active: true,
        addressIsSameAsMain: true,
        address: null,
        contactIsSameAsMain: true,
        contact: null,
        vatRegistrationId: 'mock-id-123',
        vatZone: 'String value',
        ediCode: 'String value',
        gln: 'String value',
        corporateId: 'mock-id-123',
        peppolScheme: null
    );

    Saloon::fake([
        LocationUpdateBybAccountIdlocationIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new LocationUpdateBybAccountIdlocationIdRequest(
        bAccountId: 'test string',
        locationId: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(LocationUpdateBybAccountIdlocationIdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the locationGetLocationsForBaccountBybAccountIdRequest method in the Location resource', function () {
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
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'peppolScheme' => null,
            'internalId' => 42,
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new LocationGetLocationsForBaccountBybAccountIdRequest(
        bAccountId: 'test string',
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
        ->active->toBe(true)
        ->address->toBeNull()
        ->contact->toBeNull()
        ->vatRegistrationId->toBe('mock-id-123')
        ->vatZone->toBeNull()
        ->ediCode->toBe('String value')
        ->gln->toBe('String value')
        ->corporateId->toBe('mock-id-123')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->peppolScheme->toBeNull()
        ->internalId->toBe(42)
        ->errorInfo->toBe('String value');
});

it('calls the locationGetLocationsRequest method in the Location resource', function () {
    Saloon::fake([
        LocationGetLocationsRequest::class => MockResponse::make([
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
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'peppolScheme' => null,
                'internalId' => 42,
                'errorInfo' => 'String value',
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
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'peppolScheme' => null,
                'internalId' => 42,
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new LocationGetLocationsRequest(
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

    Saloon::assertSent(LocationGetLocationsRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->baccount->toBeNull()
        ->locationId->toBe('mock-id-123')
        ->locationName->toBe('String value')
        ->active->toBe(true)
        ->address->toBeNull()
        ->contact->toBeNull()
        ->vatRegistrationId->toBe('mock-id-123')
        ->vatZone->toBeNull()
        ->ediCode->toBe('String value')
        ->gln->toBe('String value')
        ->corporateId->toBe('mock-id-123')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->peppolScheme->toBeNull()
        ->internalId->toBe(42)
        ->errorInfo->toBe('String value');
});

it('calls the locationCreateRequest method in the Location resource', function () {
    $bodyData = new LocationUpdateDto(
        baccountId: null,
        locationId: null,
        locationName: 'String value',
        active: true,
        addressIsSameAsMain: true,
        address: null,
        contactIsSameAsMain: true,
        contact: null,
        vatRegistrationId: 'mock-id-123',
        vatZone: 'String value',
        ediCode: 'String value',
        gln: 'String value',
        corporateId: 'mock-id-123',
        peppolScheme: null
    );

    Saloon::fake([
        LocationCreateRequest::class => MockResponse::make([], 201),
    ]);

    $request = new LocationCreateRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(LocationCreateRequest::class);

    expect($response->status())->toBe(201);
});
