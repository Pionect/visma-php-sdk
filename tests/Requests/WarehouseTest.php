<?php

use Pionect\VismaSdk\Dto\WarehouseLocationUpdateDto;
use Pionect\VismaSdk\Requests\Warehouse\WarehouseGetAllRequest;
use Pionect\VismaSdk\Requests\Warehouse\WarehouseGetBywarehouseIdRequest;
use Pionect\VismaSdk\Requests\Warehouse\WarehousePostBywarehouseIdRequest;
use Pionect\VismaSdk\Requests\Warehouse\WarehousePutBywarehouseIdlocationIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the warehouseGetBywarehouseIdRequest method in the Warehouse resource', function () {
    Saloon::fake([
        WarehouseGetBywarehouseIdRequest::class => MockResponse::make([
            'warehouseId' => 'mock-id-123',
            'branch' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
            'replenishmentClass' => [
                'description' => 'String value',
            ],
            'active' => true,
            'lockSitePicountEntry' => true,
            'description' => 'String value',
            'locationEntry' => 'String value',
            'avgDefaultCost' => 'String value',
            'fifoDefaultCost' => 'String value',
            'receiptLocation' => [
                'description' => 'String value',
            ],
            'shipLocation' => [
                'description' => 'String value',
            ],
            'returnLocation' => [
                'description' => 'String value',
            ],
            'dropShipLocation' => [
                'description' => 'String value',
            ],
            'contact' => [
                'contactId' => 42,
                'companyName' => 'String value',
                'attention' => 'String value',
                'email' => 'test@example.com',
                'web' => 'String value',
                'phone1' => 'String value',
                'phone2' => 'String value',
                'fax' => 'String value',
            ],
            'address' => [
                'addressId' => 42,
                'addressType' => 'String value',
                'validated' => true,
                'addressLine1' => 'String value',
                'addressLine2' => 'String value',
                'city' => 'String value',
                'country' => [
                    'name' => 'String value',
                    'errorInfo' => 'String value',
                ],
                'county' => [
                    'name' => 'String value',
                ],
                'postalCode' => 'String value',
            ],
            'locations' => [],
            'timestamp' => 'String value',
        ], 200),
    ]);

    $request = new WarehouseGetBywarehouseIdRequest(
        warehouseId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(WarehouseGetBywarehouseIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->warehouseId->toBe('mock-id-123')
        ->branch->number->toBe('String value')
        ->branch->name->toBe('String value')
        ->replenishmentClass->description->toBe('String value')
        ->active->toBe(true)
        ->lockSitePicountEntry->toBe(true)
        ->description->toBe('String value')
        ->locationEntry->toBe('String value')
        ->avgDefaultCost->toBe('String value')
        ->fifoDefaultCost->toBe('String value')
        ->receiptLocation->description->toBe('String value')
        ->shipLocation->description->toBe('String value')
        ->returnLocation->description->toBe('String value')
        ->dropShipLocation->description->toBe('String value')
        ->contact->contactId->toBe(42)
        ->contact->companyName->toBe('String value')
        ->contact->attention->toBe('String value')
        ->contact->email->toBe('test@example.com')
        ->contact->web->toBe('String value')
        ->contact->phone1->toBe('String value')
        ->contact->phone2->toBe('String value')
        ->contact->fax->toBe('String value')
        ->address->addressId->toBe(42)
        ->address->addressType->toBe('String value')
        ->address->validated->toBe(true)
        ->address->addressLine1->toBe('String value')
        ->address->addressLine2->toBe('String value')
        ->address->city->toBe('String value')
        ->address->country->name->toBe('String value')
        ->address->country->errorInfo->toBe('String value')
        ->address->county->name->toBe('String value')
        ->address->postalCode->toBe('String value')
        ->timestamp->toBe('String value');
});

it('calls the warehouseGetAllRequest method in the Warehouse resource', function () {
    Saloon::fake([
        WarehouseGetAllRequest::class => MockResponse::make([
            0 => [
                'warehouseId' => 'mock-id-123',
                'branch' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'replenishmentClass' => [
                    'description' => 'String value',
                ],
                'active' => true,
                'lockSitePicountEntry' => true,
                'description' => 'String value',
                'locationEntry' => 'String value',
                'avgDefaultCost' => 'String value',
                'fifoDefaultCost' => 'String value',
                'receiptLocation' => [
                    'description' => 'String value',
                ],
                'shipLocation' => [
                    'description' => 'String value',
                ],
                'returnLocation' => [
                    'description' => 'String value',
                ],
                'dropShipLocation' => [
                    'description' => 'String value',
                ],
                'contact' => [
                    'contactId' => 42,
                    'companyName' => 'String value',
                    'attention' => 'String value',
                    'email' => 'test@example.com',
                    'web' => 'String value',
                    'phone1' => 'String value',
                    'phone2' => 'String value',
                    'fax' => 'String value',
                ],
                'address' => [
                    'addressId' => 42,
                    'addressType' => 'String value',
                    'validated' => true,
                    'addressLine1' => 'String value',
                    'addressLine2' => 'String value',
                    'city' => 'String value',
                    'country' => [
                        'name' => 'String value',
                        'errorInfo' => 'String value',
                    ],
                    'county' => [
                        'name' => 'String value',
                    ],
                    'postalCode' => 'String value',
                ],
                'locations' => [],
                'timestamp' => 'String value',
            ],
            1 => [
                'warehouseId' => 'mock-id-123',
                'branch' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'replenishmentClass' => [
                    'description' => 'String value',
                ],
                'active' => true,
                'lockSitePicountEntry' => true,
                'description' => 'String value',
                'locationEntry' => 'String value',
                'avgDefaultCost' => 'String value',
                'fifoDefaultCost' => 'String value',
                'receiptLocation' => [
                    'description' => 'String value',
                ],
                'shipLocation' => [
                    'description' => 'String value',
                ],
                'returnLocation' => [
                    'description' => 'String value',
                ],
                'dropShipLocation' => [
                    'description' => 'String value',
                ],
                'contact' => [
                    'contactId' => 42,
                    'companyName' => 'String value',
                    'attention' => 'String value',
                    'email' => 'test@example.com',
                    'web' => 'String value',
                    'phone1' => 'String value',
                    'phone2' => 'String value',
                    'fax' => 'String value',
                ],
                'address' => [
                    'addressId' => 42,
                    'addressType' => 'String value',
                    'validated' => true,
                    'addressLine1' => 'String value',
                    'addressLine2' => 'String value',
                    'city' => 'String value',
                    'country' => [
                        'name' => 'String value',
                        'errorInfo' => 'String value',
                    ],
                    'county' => [
                        'name' => 'String value',
                    ],
                    'postalCode' => 'String value',
                ],
                'locations' => [],
                'timestamp' => 'String value',
            ],
        ], 200),
    ]);

    $request = new WarehouseGetAllRequest(
        active: true,
        branch: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(WarehouseGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->warehouseId->toBe('mock-id-123')
        ->branch->number->toBe('String value')
        ->branch->name->toBe('String value')
        ->replenishmentClass->description->toBe('String value')
        ->active->toBe(true)
        ->lockSitePicountEntry->toBe(true)
        ->description->toBe('String value')
        ->locationEntry->toBe('String value')
        ->avgDefaultCost->toBe('String value')
        ->fifoDefaultCost->toBe('String value')
        ->receiptLocation->description->toBe('String value')
        ->shipLocation->description->toBe('String value')
        ->returnLocation->description->toBe('String value')
        ->dropShipLocation->description->toBe('String value')
        ->contact->contactId->toBe(42)
        ->contact->companyName->toBe('String value')
        ->contact->attention->toBe('String value')
        ->contact->email->toBe('test@example.com')
        ->contact->web->toBe('String value')
        ->contact->phone1->toBe('String value')
        ->contact->phone2->toBe('String value')
        ->contact->fax->toBe('String value')
        ->address->addressId->toBe(42)
        ->address->addressType->toBe('String value')
        ->address->validated->toBe(true)
        ->address->addressLine1->toBe('String value')
        ->address->addressLine2->toBe('String value')
        ->address->city->toBe('String value')
        ->address->country->name->toBe('String value')
        ->address->country->errorInfo->toBe('String value')
        ->address->county->name->toBe('String value')
        ->address->postalCode->toBe('String value')
        ->timestamp->toBe('String value');
});

it('calls the warehousePostBywarehouseIdRequest method in the Warehouse resource', function () {
    $bodyData = new WarehouseLocationUpdateDto(
        locationId: 'mock-id-123',
        description: 'String value',
        active: true,
        inclQtyAvail: true,
        isCosted: true,
        salesValid: true,
        receiptsValid: true,
        transfersValid: true,
        assemblyValid: true,
        pickPriority: 42,
        primaryItemValid: 'String value',
        primaryItemId: 'mock-id-123',
        primaryItemClassId: 'mock-id-123',
        projectId: 'mock-id-123',
        projectTaskId: 'mock-id-123'
    );

    Saloon::fake([
        WarehousePostBywarehouseIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new WarehousePostBywarehouseIdRequest(
        warehouseId: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(WarehousePostBywarehouseIdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the warehousePutBywarehouseIdlocationIdRequest method in the Warehouse resource', function () {
    $bodyData = new WarehouseLocationUpdateDto(
        locationId: 'mock-id-123',
        description: 'String value',
        active: true,
        inclQtyAvail: true,
        isCosted: true,
        salesValid: true,
        receiptsValid: true,
        transfersValid: true,
        assemblyValid: true,
        pickPriority: 42,
        primaryItemValid: 'String value',
        primaryItemId: 'mock-id-123',
        primaryItemClassId: 'mock-id-123',
        projectId: 'mock-id-123',
        projectTaskId: 'mock-id-123'
    );

    Saloon::fake([
        WarehousePutBywarehouseIdlocationIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new WarehousePutBywarehouseIdlocationIdRequest(
        warehouseId: 'test string',
        locationId: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(WarehousePutBywarehouseIdlocationIdRequest::class);

    expect($response->status())->toBe(201);
});
