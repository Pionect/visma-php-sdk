<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Department\DepartmentGetAllDepartmentDtosCollectionRequest;
use Pionect\VismaSdk\Requests\Department\DepartmentGetDepartmentBydepartmentIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the departmentGetDepartmentBydepartmentId method in the Department resource', function () {
    Saloon::fake([
        DepartmentGetDepartmentBydepartmentIdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'departments',
                'id' => 'mock-id-123',
                'attributes' => [
                    'departmentId' => 'mock-id-123',
                    'publicId' => 'mock-id-123',
                    'description' => 'Mock value',
                    'expenseAccount' => 'Mock value',
                    'expenseSubaccount' => 'Mock value',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'timeStamp' => '2025-11-22T10:40:04.065Z',
                ],
            ],
        ], 200),
    ]);

    $request = new DepartmentGetDepartmentBydepartmentIdRequest(
        departmentIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(DepartmentGetDepartmentBydepartmentIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->departmentId->toBe('mock-id-123')
        ->publicId->toBe('mock-id-123')
        ->description->toBe('Mock value')
        ->expenseAccount->toBe('Mock value')
        ->expenseSubaccount->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});

it('calls the departmentGetAllDepartmentDtosCollection method in the Department resource', function () {
    Saloon::fake([
        DepartmentGetAllDepartmentDtosCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'departments',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'departmentId' => 'mock-id-123',
                        'publicId' => 'mock-id-123',
                        'description' => 'Mock value',
                        'expenseAccount' => 'Mock value',
                        'expenseSubaccount' => 'Mock value',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'timeStamp' => '2025-11-22T10:40:04.065Z',
                    ],
                ],
                1 => [
                    'type' => 'departments',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'departmentId' => 'mock-id-123',
                        'publicId' => 'mock-id-123',
                        'description' => 'Mock value',
                        'expenseAccount' => 'Mock value',
                        'expenseSubaccount' => 'Mock value',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'timeStamp' => '2025-11-22T10:40:04.065Z',
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new DepartmentGetAllDepartmentDtosCollectionRequest(greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string'));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (DepartmentGetAllDepartmentDtosCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->departmentId->toBe('mock-id-123')
        ->publicId->toBe('mock-id-123')
        ->description->toBe('Mock value')
        ->expenseAccount->toBe('Mock value')
        ->expenseSubaccount->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});
