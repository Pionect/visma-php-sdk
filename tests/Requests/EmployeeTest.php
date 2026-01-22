<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Employee\EmployeeChangeEmployeeNrActionByinternalIdRequest;
use Pionect\VismaSdk\Requests\Employee\EmployeeGetAllEmployeesCollectionRequest;
use Pionect\VismaSdk\Requests\Employee\EmployeeGetEmployeeByemployeeCdRequest;
use Pionect\VismaSdk\Requests\Employee\EmployeeGetEmployeeExpenseClaimsByemployeeCdRequest;
use Pionect\VismaSdk\Requests\Employee\EmployeeGetEmployeeExpenseReceiptsByemployeeCdRequest;
use Pionect\VismaSdk\Requests\Employee\EmployeeGetEmployeeTimeCardsByemployeeCdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the employeeGetEmployeeByemployeeCd method in the Employee resource', function () {
    Saloon::fake([
        EmployeeGetEmployeeByemployeeCdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'employees',
                'id' => 'mock-id-123',
                'attributes' => [
                    'employeeUserId' => 'mock-id-123',
                    'employeeId' => 42,
                    'employeeNumber' => 'Mock value',
                    'employeeName' => 'Mock value',
                    'status' => 'Mock value',
                    'department' => 'Mock value',
                    'contact' => 'Mock value',
                    'address' => 'Mock value',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'employeeClass' => 'Mock value',
                    'branch' => 'Mock value',
                    'calendarId' => 'mock-id-123',
                    'employeeLogin' => 'Mock value',
                    'workGroupDescription' => [],
                    'timeStamp' => '2025-11-22T10:40:04.065Z',
                    'errorInfo' => 'Mock value',
                    'metadata' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new EmployeeGetEmployeeByemployeeCdRequest(
        employeeCdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(EmployeeGetEmployeeByemployeeCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->employeeUserId->toBe('mock-id-123')
        ->employeeId->toBe(42)
        ->employeeNumber->toBe('Mock value')
        ->employeeName->toBe('Mock value')
        ->status->toBe('Mock value')
        ->department->toBe('Mock value')
        ->contact->toBe('Mock value')
        ->address->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->employeeClass->toBe('Mock value')
        ->branch->toBe('Mock value')
        ->calendarId->toBe('mock-id-123')
        ->employeeLogin->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the employeeGetAllEmployeesCollection method in the Employee resource', function () {
    Saloon::fake([
        EmployeeGetAllEmployeesCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'employees',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'employeeUserId' => 'mock-id-123',
                        'employeeId' => 42,
                        'employeeNumber' => 'Mock value',
                        'employeeName' => 'Mock value',
                        'status' => 'Mock value',
                        'department' => 'Mock value',
                        'contact' => 'Mock value',
                        'address' => 'Mock value',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'employeeClass' => 'Mock value',
                        'branch' => 'Mock value',
                        'calendarId' => 'mock-id-123',
                        'employeeLogin' => 'Mock value',
                        'workGroupDescription' => [],
                        'timeStamp' => '2025-11-22T10:40:04.065Z',
                        'errorInfo' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
                1 => [
                    'type' => 'employees',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'employeeUserId' => 'mock-id-123',
                        'employeeId' => 42,
                        'employeeNumber' => 'Mock value',
                        'employeeName' => 'Mock value',
                        'status' => 'Mock value',
                        'department' => 'Mock value',
                        'contact' => 'Mock value',
                        'address' => 'Mock value',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'employeeClass' => 'Mock value',
                        'branch' => 'Mock value',
                        'calendarId' => 'mock-id-123',
                        'employeeLogin' => 'Mock value',
                        'workGroupDescription' => [],
                        'timeStamp' => '2025-11-22T10:40:04.065Z',
                        'errorInfo' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new EmployeeGetAllEmployeesCollectionRequest(linkedToUser: true, greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (EmployeeGetAllEmployeesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->employeeUserId->toBe('mock-id-123')
        ->employeeId->toBe(42)
        ->employeeNumber->toBe('Mock value')
        ->employeeName->toBe('Mock value')
        ->status->toBe('Mock value')
        ->department->toBe('Mock value')
        ->contact->toBe('Mock value')
        ->address->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->employeeClass->toBe('Mock value')
        ->branch->toBe('Mock value')
        ->calendarId->toBe('mock-id-123')
        ->employeeLogin->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the employeeGetEmployeeTimeCardsByemployeeCd method in the Employee resource', function () {
    Saloon::fake([
        EmployeeGetEmployeeTimeCardsByemployeeCdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'employees',
                'id' => 'mock-id-123',
                'attributes' => [
                    'refNbr' => 'Mock value',
                    'status' => 'Mock value',
                    'approvalStatus' => 'Mock value',
                    'week' => 'Mock value',
                    'employee' => 'Mock value',
                    'origRefNbr' => 'Mock value',
                    'timeSpent' => '2025-11-22T10:40:04.065Z',
                    'invoiceable' => 42,
                    'overtimeSpent' => 42,
                    'invoiceableOvertime' => 42,
                    'totalTimeSpent' => 42,
                    'invoiceableTotalTime' => '2025-11-22T10:40:04.065Z',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'summary' => [],
                    'materials' => [],
                    'approvalStatusText' => 'Mock value',
                    'timeStamp' => '2025-11-22T10:40:04.065Z',
                    'errorInfo' => 'Mock value',
                    'metadata' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new EmployeeGetEmployeeTimeCardsByemployeeCdRequest(
        employeeCdId: 'test string',
        status: 'test string',
        week: 'test string',
        type: 'test string',
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        orderBy: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(EmployeeGetEmployeeTimeCardsByemployeeCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->refNbr->toBe('Mock value')
        ->status->toBe('Mock value')
        ->approvalStatus->toBe('Mock value')
        ->week->toBe('Mock value')
        ->employee->toBe('Mock value')
        ->origRefNbr->toBe('Mock value')
        ->timeSpent->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->invoiceable->toBe(42)
        ->overtimeSpent->toBe(42)
        ->invoiceableOvertime->toBe(42)
        ->totalTimeSpent->toBe(42)
        ->invoiceableTotalTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->approvalStatusText->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the employeeGetEmployeeExpenseClaimsByemployeeCd method in the Employee resource', function () {
    Saloon::fake([
        EmployeeGetEmployeeExpenseClaimsByemployeeCdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'employees',
                'id' => 'mock-id-123',
                'attributes' => [
                    'refNbr' => 'Mock value',
                    'status' => 'Mock value',
                    'approvalStatus' => 'Mock value',
                    'date' => '2025-11-22T10:40:04.065Z',
                    'description' => 'Mock value',
                    'claimedBy' => 'Mock value',
                    'claimTotal' => 3.14,
                    'vatTaxableTotal' => 3.14,
                    'vatExemptTotal' => 3.14,
                    'customer' => 'Mock value',
                    'currency' => 'Mock value',
                    'approvalDate' => '2025-11-22T10:40:04.065Z',
                    'department' => 'Mock value',
                    'location' => 'Mock value',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'details' => [],
                    'approvalStatusText' => 'Mock value',
                    'timeStamp' => '2025-11-22T10:40:04.065Z',
                    'errorInfo' => 'Mock value',
                    'metadata' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new EmployeeGetEmployeeExpenseClaimsByemployeeCdRequest(
        employeeCdId: 'test string',
        status: 'test string',
        date: 'test string',
        customer: 'test string',
        departmentId: 'test string',
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        orderBy: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(EmployeeGetEmployeeExpenseClaimsByemployeeCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->refNbr->toBe('Mock value')
        ->status->toBe('Mock value')
        ->approvalStatus->toBe('Mock value')
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->description->toBe('Mock value')
        ->claimedBy->toBe('Mock value')
        ->claimTotal->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->customer->toBe('Mock value')
        ->currency->toBe('Mock value')
        ->approvalDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->department->toBe('Mock value')
        ->location->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->approvalStatusText->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the employeeGetEmployeeExpenseReceiptsByemployeeCd method in the Employee resource', function () {
    Saloon::fake([
        EmployeeGetEmployeeExpenseReceiptsByemployeeCdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'employees',
                'id' => 'mock-id-123',
                'attributes' => [
                    'internalId' => 42,
                    'receiptId' => 'mock-id-123',
                    'date' => '2025-11-22T10:40:04.065Z',
                    'taxTotal' => 3.14,
                    'currency' => 'Mock value',
                    'refNbr' => 'Mock value',
                    'inventory' => 'Mock value',
                    'description' => 'Mock value',
                    'uom' => 'Mock value',
                    'quantity' => 3.14,
                    'unitCost' => 3.14,
                    'totalAmount' => 3.14,
                    'employeePart' => 3.14,
                    'claimAmount' => 3.14,
                    'status' => 'Mock value',
                    'claimedBy' => 'Mock value',
                    'branch' => 'Mock value',
                    'expenseClaim' => 'Mock value',
                    'invoiceable' => true,
                    'project' => 'Mock value',
                    'projectTask' => 'Mock value',
                    'customer' => 'Mock value',
                    'location' => 'Mock value',
                    'expenseAccount' => 'Mock value',
                    'expenseSub' => 'Mock value',
                    'salesAccount' => 'Mock value',
                    'salesSub' => 'Mock value',
                    'taxCategory' => 'Mock value',
                    'image' => 'Mock value',
                    'timeStamp' => '2025-11-22T10:40:04.065Z',
                ],
            ],
        ], 200),
    ]);

    $request = new EmployeeGetEmployeeExpenseReceiptsByemployeeCdRequest(
        employeeCdId: 'test string',
        date: 'test string',
        dateCondition: 'test string',
        inventory: 'test string',
        project: 'test string',
        claimedBy: 'test string',
        projectTask: 'test string',
        invoiceable: true,
        status: 'test string',
        customer: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(EmployeeGetEmployeeExpenseReceiptsByemployeeCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->internalId->toBe(42)
        ->receiptId->toBe('mock-id-123')
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->taxTotal->toBe(3.14)
        ->currency->toBe('Mock value')
        ->refNbr->toBe('Mock value')
        ->inventory->toBe('Mock value')
        ->description->toBe('Mock value')
        ->uom->toBe('Mock value')
        ->quantity->toBe(3.14)
        ->unitCost->toBe(3.14)
        ->totalAmount->toBe(3.14)
        ->employeePart->toBe(3.14)
        ->claimAmount->toBe(3.14)
        ->status->toBe('Mock value')
        ->claimedBy->toBe('Mock value')
        ->branch->toBe('Mock value')
        ->expenseClaim->toBe('Mock value')
        ->invoiceable->toBe(true)
        ->project->toBe('Mock value')
        ->projectTask->toBe('Mock value')
        ->customer->toBe('Mock value')
        ->location->toBe('Mock value')
        ->expenseAccount->toBe('Mock value')
        ->expenseSub->toBe('Mock value')
        ->salesAccount->toBe('Mock value')
        ->salesSub->toBe('Mock value')
        ->taxCategory->toBe('Mock value')
        ->image->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});

it('calls the employeeChangeEmployeeNrActionByinternalId method in the Employee resource', function () {
    $mockClient = Saloon::fake([
        EmployeeChangeEmployeeNrActionByinternalIdRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\ChangeEmployeeNrActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new EmployeeChangeEmployeeNrActionByinternalIdRequest(internalId: 42, data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(EmployeeChangeEmployeeNrActionByinternalIdRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('employees')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

        return true;
    });
});
