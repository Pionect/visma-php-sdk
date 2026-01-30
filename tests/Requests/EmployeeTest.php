<?php

use Pionect\VismaSdk\Dto\EmployeeUpdateDto;
use Pionect\VismaSdk\Requests\Employee\EmployeeChangeEmployeeNrActionByinternalIdRequest;
use Pionect\VismaSdk\Requests\Employee\EmployeeCreateEmployeeRequest;
use Pionect\VismaSdk\Requests\Employee\EmployeeGetAllEmployeesRequest;
use Pionect\VismaSdk\Requests\Employee\EmployeeGetEmployeeByemployeeCdRequest;
use Pionect\VismaSdk\Requests\Employee\EmployeeGetEmployeeExpenseClaimsByemployeeCdRequest;
use Pionect\VismaSdk\Requests\Employee\EmployeeGetEmployeeExpenseReceiptsByemployeeCdRequest;
use Pionect\VismaSdk\Requests\Employee\EmployeeGetEmployeeTimeCardsRequest;
use Pionect\VismaSdk\Requests\Employee\EmployeePutByemployeeCdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the employeeGetEmployeeByemployeeCdRequest method in the Employee resource', function () {
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
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'employeeClass' => null,
            'branch' => null,
            'calendarId' => 'mock-id-123',
            'employeeLogin' => 'String value',
            'workGroupDescription' => [],
            'timeStamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new EmployeeGetEmployeeByemployeeCdRequest(
        employeeCd: 'test string',
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
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->employeeClass->toBeNull()
        ->branch->toBeNull()
        ->calendarId->toBe('mock-id-123')
        ->employeeLogin->toBe('String value')
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the employeePutByemployeeCdRequest method in the Employee resource', function () {
    $bodyData = new EmployeeUpdateDto(
        employeeClass: 'String value',
        status: null,
        department: null,
        contact: null,
        address: null,
        branch: 'String value',
        calendar: 'String value',
        companyTreeInfo: []
    );

    Saloon::fake([
        EmployeePutByemployeeCdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new EmployeePutByemployeeCdRequest(
        employeeCd: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(EmployeePutByemployeeCdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the employeeGetAllEmployeesRequest method in the Employee resource', function () {
    Saloon::fake([
        EmployeeGetAllEmployeesRequest::class => MockResponse::make([
            0 => [
                'employeeUserId' => 'mock-id-123',
                'employeeId' => 42,
                'employeeNumber' => 'String value',
                'employeeName' => 'String value',
                'status' => 'String value',
                'department' => 'String value',
                'contact' => null,
                'address' => null,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'employeeClass' => null,
                'branch' => null,
                'calendarId' => 'mock-id-123',
                'employeeLogin' => 'String value',
                'workGroupDescription' => [],
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
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
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'employeeClass' => null,
                'branch' => null,
                'calendarId' => 'mock-id-123',
                'employeeLogin' => 'String value',
                'workGroupDescription' => [],
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new EmployeeGetAllEmployeesRequest(
        linkedToUser: true,
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

    Saloon::assertSent(EmployeeGetAllEmployeesRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->employeeUserId->toBe('mock-id-123')
        ->employeeId->toBe(42)
        ->employeeNumber->toBe('String value')
        ->employeeName->toBe('String value')
        ->status->toBe('String value')
        ->department->toBe('String value')
        ->contact->toBeNull()
        ->address->toBeNull()
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->employeeClass->toBeNull()
        ->branch->toBeNull()
        ->calendarId->toBe('mock-id-123')
        ->employeeLogin->toBe('String value')
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the employeeCreateEmployeeRequest method in the Employee resource', function () {
    $bodyData = new EmployeeUpdateDto(
        employeeClass: 'String value',
        status: null,
        department: null,
        contact: null,
        address: null,
        branch: 'String value',
        calendar: 'String value',
        companyTreeInfo: []
    );

    Saloon::fake([
        EmployeeCreateEmployeeRequest::class => MockResponse::make([], 201),
    ]);

    $request = new EmployeeCreateEmployeeRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(EmployeeCreateEmployeeRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the employeeGetEmployeeTimeCardsRequest method in the Employee resource', function () {
    Saloon::fake([
        EmployeeGetEmployeeTimeCardsRequest::class => MockResponse::make([
            0 => [
                'refNbr' => 'String value',
                'status' => 'String value',
                'approvalStatus' => 'String value',
                'week' => null,
                'employee' => null,
                'type' => 'String value',
                'origRefNbr' => 'String value',
                'timeSpent' => 42,
                'invoiceable' => 42,
                'overtimeSpent' => 42,
                'invoiceableOvertime' => 42,
                'totalTimeSpent' => 42,
                'invoiceableTotalTime' => 42,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'summary' => [],
                'materials' => [],
                'approvalStatusText' => 'String value',
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
            1 => [
                'refNbr' => 'String value',
                'status' => 'String value',
                'approvalStatus' => 'String value',
                'week' => null,
                'employee' => null,
                'type' => 'String value',
                'origRefNbr' => 'String value',
                'timeSpent' => 42,
                'invoiceable' => 42,
                'overtimeSpent' => 42,
                'invoiceableOvertime' => 42,
                'totalTimeSpent' => 42,
                'invoiceableTotalTime' => 42,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'summary' => [],
                'materials' => [],
                'approvalStatusText' => 'String value',
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new EmployeeGetEmployeeTimeCardsRequest(
        employeeCd: 'test string',
        status: 'test string',
        week: 'test string',
        type: 'test string',
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        orderBy: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        employeeCd: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(EmployeeGetEmployeeTimeCardsRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->refNbr->toBe('String value')
        ->status->toBe('String value')
        ->approvalStatus->toBe('String value')
        ->week->toBeNull()
        ->employee->toBeNull()
        ->type->toBe('String value')
        ->origRefNbr->toBe('String value')
        ->timeSpent->toBe(42)
        ->invoiceable->toBe(42)
        ->overtimeSpent->toBe(42)
        ->invoiceableOvertime->toBe(42)
        ->totalTimeSpent->toBe(42)
        ->invoiceableTotalTime->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->approvalStatusText->toBe('String value')
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the employeeGetEmployeeExpenseClaimsByemployeeCdRequest method in the Employee resource', function () {
    Saloon::fake([
        EmployeeGetEmployeeExpenseClaimsByemployeeCdRequest::class => MockResponse::make([
            'refNbr' => 'String value',
            'status' => 'String value',
            'approvalStatus' => 'String value',
            'date' => '2025-11-22T10:40:04+00:00',
            'description' => 'String value',
            'claimedBy' => null,
            'claimTotal' => 42,
            'vatTaxableTotal' => 42,
            'vatExemptTotal' => 42,
            'customer' => null,
            'currency' => 'String value',
            'approvalDate' => '2025-11-22T10:40:04+00:00',
            'department' => null,
            'location' => null,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'details' => [],
            'approvalStatusText' => 'String value',
            'timeStamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new EmployeeGetEmployeeExpenseClaimsByemployeeCdRequest(
        employeeCd: 'test string',
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
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->description->toBe('String value')
        ->claimedBy->toBeNull()
        ->claimTotal->toBe(42)
        ->vatTaxableTotal->toBe(42)
        ->vatExemptTotal->toBe(42)
        ->customer->toBeNull()
        ->currency->toBe('String value')
        ->approvalDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->department->toBeNull()
        ->location->toBeNull()
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->approvalStatusText->toBe('String value')
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the employeeGetEmployeeExpenseReceiptsByemployeeCdRequest method in the Employee resource', function () {
    Saloon::fake([
        EmployeeGetEmployeeExpenseReceiptsByemployeeCdRequest::class => MockResponse::make([
            'internalId' => 42,
            'receiptId' => 'mock-id-123',
            'date' => '2025-11-22T10:40:04+00:00',
            'taxTotal' => 42,
            'currency' => null,
            'refNbr' => 'String value',
            'inventory' => null,
            'description' => 'String value',
            'uom' => 'String value',
            'quantity' => 42,
            'unitCost' => 42,
            'totalAmount' => 42,
            'employeePart' => 42,
            'claimAmount' => 42,
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
            'timeStamp' => 'String value',
        ], 200),
    ]);

    $request = new EmployeeGetEmployeeExpenseReceiptsByemployeeCdRequest(
        employeeCd: 'test string',
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
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->taxTotal->toBe(42)
        ->currency->toBeNull()
        ->refNbr->toBe('String value')
        ->inventory->toBeNull()
        ->description->toBe('String value')
        ->uom->toBe('String value')
        ->quantity->toBe(42)
        ->unitCost->toBe(42)
        ->totalAmount->toBe(42)
        ->employeePart->toBe(42)
        ->claimAmount->toBe(42)
        ->status->toBe('String value')
        ->claimedBy->toBeNull()
        ->branch->toBeNull()
        ->expenseClaim->toBeNull()
        ->invoiceable->toBe(true)
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
        ->timeStamp->toBe('String value');
});

it('calls the employeeChangeEmployeeNrActionByinternalIdRequest method in the Employee resource', function () {
    $bodyData = new EmployeeUpdateDto(
        employeeClass: 'String value',
        status: null,
        department: null,
        contact: null,
        address: null,
        branch: 'String value',
        calendar: 'String value',
        companyTreeInfo: []
    );

    Saloon::fake([
        EmployeeChangeEmployeeNrActionByinternalIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new EmployeeChangeEmployeeNrActionByinternalIdRequest(
        internalId: 123,
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(EmployeeChangeEmployeeNrActionByinternalIdRequest::class);

    expect($response->status())->toBe(201);
});
