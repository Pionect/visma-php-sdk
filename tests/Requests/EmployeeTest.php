<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Employee\EmployeeChangeEmployeeNrActionByinternalIdRequest;
use Pionect\VismaSdk\Requests\Employee\EmployeeGetAllEmployeesCollectionRequest;
use Pionect\VismaSdk\Requests\Employee\EmployeeGetEmployeeByemployeeCdRequest;
use Pionect\VismaSdk\Requests\Employee\EmployeeGetEmployeeExpenseClaimsByemployeeCdRequest;
use Pionect\VismaSdk\Requests\Employee\EmployeeGetEmployeeExpenseReceiptsByemployeeCdRequest;
use Pionect\VismaSdk\Requests\Employee\EmployeeGetEmployeeTimeCardsCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the employeeGetEmployeeByemployeeCd method in the Employee resource', function () {
    Saloon::fake([
        EmployeeGetEmployeeByemployeeCdRequest::class => MockResponse::make([
            'employeeUserId' => 'mock-id-123',
            'employeeId' => 42,
            'employeeNumber' => 'String value',
            'employeeName' => 'String value',
            'status' => 'String value',
            'department' => 'String value',
            'contact' => null,
            'address' => null,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'employeeClass' => null,
            'branch' => null,
            'calendarId' => 'mock-id-123',
            'employeeLogin' => 'String value',
            'workGroupDescription' => [],
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
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
        ->employeeNumber->toBe('String value')
        ->employeeName->toBe('String value')
        ->status->toBe('String value')
        ->department->toBe('String value')
        ->contact->toBeNull()
        ->address->toBeNull()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->employeeClass->toBeNull()
        ->branch->toBeNull()
        ->calendarId->toBe('mock-id-123')
        ->employeeLogin->toBe('String value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the employeeGetAllEmployeesCollection method in the Employee resource', function () {
    Saloon::fake([
        EmployeeGetAllEmployeesCollectionRequest::class => MockResponse::make([
            0 => [
                'employeeUserId' => 'mock-id-123',
                'employeeId' => 42,
                'employeeNumber' => 'String value',
                'employeeName' => 'String value',
                'status' => 'String value',
                'department' => 'String value',
                'contact' => null,
                'address' => null,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'employeeClass' => null,
                'branch' => null,
                'calendarId' => 'mock-id-123',
                'employeeLogin' => 'String value',
                'workGroupDescription' => [],
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'employeeUserId' => 'mock-id-123',
                'employeeId' => 42,
                'employeeNumber' => 'String value',
                'employeeName' => 'String value',
                'status' => 'String value',
                'department' => 'String value',
                'contact' => null,
                'address' => null,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'employeeClass' => null,
                'branch' => null,
                'calendarId' => 'mock-id-123',
                'employeeLogin' => 'String value',
                'workGroupDescription' => [],
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new EmployeeGetAllEmployeesCollectionRequest(linkedToUser: true, greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (EmployeeGetAllEmployeesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->employeeUserId->toBe('mock-id-123')
        ->employeeId->toBe(42)
        ->employeeNumber->toBe('String value')
        ->employeeName->toBe('String value')
        ->status->toBe('String value')
        ->department->toBe('String value')
        ->contact->toBeNull()
        ->address->toBeNull()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->employeeClass->toBeNull()
        ->branch->toBeNull()
        ->calendarId->toBe('mock-id-123')
        ->employeeLogin->toBe('String value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the employeeGetEmployeeTimeCardsCollection method in the Employee resource', function () {
    Saloon::fake([
        EmployeeGetEmployeeTimeCardsCollectionRequest::class => MockResponse::make([
            0 => [
                'refNbr' => 'String value',
                'status' => 'String value',
                'approvalStatus' => 'String value',
                'week' => null,
                'employee' => null,
                'type' => 'String value',
                'origRefNbr' => 'String value',
                'timeSpent' => '2025-11-22T10:40:04.065Z',
                'invoiceable' => 42,
                'overtimeSpent' => 42,
                'invoiceableOvertime' => 42,
                'totalTimeSpent' => 42,
                'invoiceableTotalTime' => '2025-11-22T10:40:04.065Z',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'summary' => [],
                'materials' => [],
                'approvalStatusText' => 'String value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'refNbr' => 'String value',
                'status' => 'String value',
                'approvalStatus' => 'String value',
                'week' => null,
                'employee' => null,
                'type' => 'String value',
                'origRefNbr' => 'String value',
                'timeSpent' => '2025-11-22T10:40:04.065Z',
                'invoiceable' => 42,
                'overtimeSpent' => 42,
                'invoiceableOvertime' => 42,
                'totalTimeSpent' => 42,
                'invoiceableTotalTime' => '2025-11-22T10:40:04.065Z',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'summary' => [],
                'materials' => [],
                'approvalStatusText' => 'String value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new EmployeeGetEmployeeTimeCardsCollectionRequest(employeeCd: 'test string', status: 'test string', week: 'test string', type: 'test string', greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', employeeCd: 'test string'));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (EmployeeGetEmployeeTimeCardsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->refNbr->toBe('String value')
        ->status->toBe('String value')
        ->approvalStatus->toBe('String value')
        ->week->toBeNull()
        ->employee->toBeNull()
        ->type->toBe('String value')
        ->origRefNbr->toBe('String value')
        ->timeSpent->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->invoiceable->toBe(42)
        ->overtimeSpent->toBe(42)
        ->invoiceableOvertime->toBe(42)
        ->totalTimeSpent->toBe(42)
        ->invoiceableTotalTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->approvalStatusText->toBe('String value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the employeeGetEmployeeExpenseClaimsByemployeeCd method in the Employee resource', function () {
    Saloon::fake([
        EmployeeGetEmployeeExpenseClaimsByemployeeCdRequest::class => MockResponse::make([
            'refNbr' => 'String value',
            'status' => 'String value',
            'approvalStatus' => 'String value',
            'date' => '2025-11-22T10:40:04.065Z',
            'description' => 'String value',
            'claimedBy' => null,
            'claimTotal' => 3.14,
            'vatTaxableTotal' => 3.14,
            'vatExemptTotal' => 3.14,
            'customer' => null,
            'currency' => 'String value',
            'approvalDate' => '2025-11-22T10:40:04.065Z',
            'department' => null,
            'location' => null,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'details' => [],
            'approvalStatusText' => 'String value',
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
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
        ->refNbr->toBe('String value')
        ->status->toBe('String value')
        ->approvalStatus->toBe('String value')
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->description->toBe('String value')
        ->claimedBy->toBeNull()
        ->claimTotal->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->customer->toBeNull()
        ->currency->toBe('String value')
        ->approvalDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->department->toBeNull()
        ->location->toBeNull()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->approvalStatusText->toBe('String value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the employeeGetEmployeeExpenseReceiptsByemployeeCd method in the Employee resource', function () {
    Saloon::fake([
        EmployeeGetEmployeeExpenseReceiptsByemployeeCdRequest::class => MockResponse::make([
            'internalId' => 42,
            'receiptId' => 'mock-id-123',
            'date' => '2025-11-22T10:40:04.065Z',
            'taxTotal' => 3.14,
            'currency' => null,
            'refNbr' => 'String value',
            'inventory' => null,
            'description' => 'String value',
            'uom' => 'String value',
            'quantity' => 3.14,
            'unitCost' => 3.14,
            'totalAmount' => 3.14,
            'employeePart' => 3.14,
            'claimAmount' => 3.14,
            'status' => 'String value',
            'claimedBy' => null,
            'branch' => null,
            'expenseClaim' => null,
            'invoiceable' => true,
            'project' => null,
            'projectTask' => null,
            'customer' => null,
            'location' => null,
            'expenseAccount' => null,
            'expenseSub' => null,
            'salesAccount' => null,
            'salesSub' => null,
            'taxCategory' => null,
            'image' => null,
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'id' => 'mock-id-123',
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
        ->currency->toBeNull()
        ->refNbr->toBe('String value')
        ->inventory->toBeNull()
        ->description->toBe('String value')
        ->uom->toBe('String value')
        ->quantity->toBe(3.14)
        ->unitCost->toBe(3.14)
        ->totalAmount->toBe(3.14)
        ->employeePart->toBe(3.14)
        ->claimAmount->toBe(3.14)
        ->status->toBe('String value')
        ->claimedBy->toBeNull()
        ->branch->toBeNull()
        ->expenseClaim->toBeNull()
        ->invoiceable->toBeTrue()
        ->project->toBeNull()
        ->projectTask->toBeNull()
        ->customer->toBeNull()
        ->location->toBeNull()
        ->expenseAccount->toBeNull()
        ->expenseSub->toBeNull()
        ->salesAccount->toBeNull()
        ->salesSub->toBeNull()
        ->taxCategory->toBeNull()
        ->image->toBeNull()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->id->toBe('mock-id-123');
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
