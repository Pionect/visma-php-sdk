<?php

// Generated 2026-01-30 15:19:40
use Pionect\VismaSdk\Dto\SupplierLocationUpdateDto;
use Pionect\VismaSdk\Requests\SupplierLocation\SupplierLocationCreateRequest;
use Pionect\VismaSdk\Requests\SupplierLocation\SupplierLocationGetLocationBybAccountIdlocationIdRequest;
use Pionect\VismaSdk\Requests\SupplierLocation\SupplierLocationGetLocationsForBaccountBybAccountIdRequest;
use Pionect\VismaSdk\Requests\SupplierLocation\SupplierLocationGetLocationsRequest;
use Pionect\VismaSdk\Requests\SupplierLocation\SupplierLocationUpdateBybAccountIdlocationIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the supplierLocationGetLocationBybAccountIdlocationIdRequest method in the SupplierLocation resource', function () {
    Saloon::fake([
        SupplierLocationGetLocationBybAccountIdlocationIdRequest::class => MockResponse::make([
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
            'supplierPaymentMethodDetails' => [],
            'timeStamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new SupplierLocationGetLocationBybAccountIdlocationIdRequest(
        bAccountId: 'test string',
        locationId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierLocationGetLocationBybAccountIdlocationIdRequest::class);

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
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the supplierLocationUpdateBybAccountIdlocationIdRequest method in the SupplierLocation resource', function () {
    $bodyData = new SupplierLocationUpdateDto(
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
        corporateId: 'mock-id-123'
    );

    Saloon::fake([
        SupplierLocationUpdateBybAccountIdlocationIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SupplierLocationUpdateBybAccountIdlocationIdRequest(
        bAccountId: 'test string',
        locationId: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierLocationUpdateBybAccountIdlocationIdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the supplierLocationGetLocationsForBaccountBybAccountIdRequest method in the SupplierLocation resource', function () {
    Saloon::fake([
        SupplierLocationGetLocationsForBaccountBybAccountIdRequest::class => MockResponse::make([
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
            'supplierPaymentMethodDetails' => [],
            'timeStamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new SupplierLocationGetLocationsForBaccountBybAccountIdRequest(
        bAccountId: 'test string',
        locationId: 'test string',
        gln: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierLocationGetLocationsForBaccountBybAccountIdRequest::class);

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
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the supplierLocationGetLocationsRequest method in the SupplierLocation resource', function () {
    Saloon::fake([
        SupplierLocationGetLocationsRequest::class => MockResponse::make([
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
                'supplierPaymentMethodDetails' => [],
                'timeStamp' => 'String value',
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
                'supplierPaymentMethodDetails' => [],
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new SupplierLocationGetLocationsRequest(
        locationId: 'test string',
        gln: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierLocationGetLocationsRequest::class);

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
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the supplierLocationCreateRequest method in the SupplierLocation resource', function () {
    $bodyData = new SupplierLocationUpdateDto(
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
        corporateId: 'mock-id-123'
    );

    Saloon::fake([
        SupplierLocationCreateRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SupplierLocationCreateRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierLocationCreateRequest::class);

    expect($response->status())->toBe(201);
});
