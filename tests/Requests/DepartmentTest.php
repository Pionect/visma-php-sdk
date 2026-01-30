<?php

use Pionect\VismaSdk\Dto\DepartmentUpdateBaseDto;
use Pionect\VismaSdk\Requests\Department\DepartmentCreateDepartmentRequest;
use Pionect\VismaSdk\Requests\Department\DepartmentGetAllDepartmentDtosRequest;
use Pionect\VismaSdk\Requests\Department\DepartmentGetDepartmentBydepartmentIdRequest;
use Pionect\VismaSdk\Requests\Department\DepartmentUpdateDepartmentBydepartmentIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the departmentGetDepartmentBydepartmentIdRequest method in the Department resource', function () {
    Saloon::fake([
        DepartmentGetDepartmentBydepartmentIdRequest::class => MockResponse::make([
            'departmentId' => 'mock-id-123',
            'publicId' => 'mock-id-123',
            'description' => 'String value',
            'expenseAccount' => null,
            'expenseSubaccount' => null,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'timeStamp' => 'String value',
        ], 200),
    ]);

    $request = new DepartmentGetDepartmentBydepartmentIdRequest(
        departmentId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(DepartmentGetDepartmentBydepartmentIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->departmentId->toBe('mock-id-123')
        ->publicId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->expenseAccount->toBeNull()
        ->expenseSubaccount->toBeNull()
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->timeStamp->toBe('String value');
});

it('calls the departmentUpdateDepartmentBydepartmentIdRequest method in the Department resource', function () {
    $bodyData = new DepartmentUpdateBaseDto(
        departmentId: 'mock-id-123',
        description: 'String value',
        expenseAccount: 'String value',
        expenseSubaccount: []
    );

    Saloon::fake([
        DepartmentUpdateDepartmentBydepartmentIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new DepartmentUpdateDepartmentBydepartmentIdRequest(
        departmentId: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(DepartmentUpdateDepartmentBydepartmentIdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the departmentGetAllDepartmentDtosRequest method in the Department resource', function () {
    Saloon::fake([
        DepartmentGetAllDepartmentDtosRequest::class => MockResponse::make([
            0 => [
                'departmentId' => 'mock-id-123',
                'publicId' => 'mock-id-123',
                'description' => 'String value',
                'expenseAccount' => null,
                'expenseSubaccount' => null,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'timeStamp' => 'String value',
            ],
            1 => [
                'departmentId' => 'mock-id-123',
                'publicId' => 'mock-id-123',
                'description' => 'String value',
                'expenseAccount' => null,
                'expenseSubaccount' => null,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'timeStamp' => 'String value',
            ],
        ], 200),
    ]);

    $request = new DepartmentGetAllDepartmentDtosRequest(
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        orderBy: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(DepartmentGetAllDepartmentDtosRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->departmentId->toBe('mock-id-123')
        ->publicId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->expenseAccount->toBeNull()
        ->expenseSubaccount->toBeNull()
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->timeStamp->toBe('String value');
});

it('calls the departmentCreateDepartmentRequest method in the Department resource', function () {
    $bodyData = new DepartmentUpdateBaseDto(
        departmentId: 'mock-id-123',
        description: 'String value',
        expenseAccount: 'String value',
        expenseSubaccount: []
    );

    Saloon::fake([
        DepartmentCreateDepartmentRequest::class => MockResponse::make([], 201),
    ]);

    $request = new DepartmentCreateDepartmentRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(DepartmentCreateDepartmentRequest::class);

    expect($response->status())->toBe(201);
});
