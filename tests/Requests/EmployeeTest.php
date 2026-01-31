<?php

use Pionect\VismaSdk\Dto\ChangeEmployeeNrActionDto;
use Pionect\VismaSdk\Dto\EmployeeCreateDTO;
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
            'contact' => [
                'employeeContact' => 'String value',
                'title' => 'String value',
                'firstName' => 'String value',
                'midName' => 'String value',
                'lastName' => 'String value',
                'phone3' => 'String value',
                'contactId' => 42,
                'name' => 'String value',
                'attention' => 'String value',
                'email' => 'test@example.com',
                'web' => 'String value',
                'phone1' => 'String value',
                'phone2' => 'String value',
                'fax' => 'String value',
            ],
            'address' => [
                'addressId' => 42,
                'addressLine1' => 'String value',
                'addressLine2' => 'String value',
                'addressLine3' => 'String value',
                'postalCode' => 'String value',
                'city' => 'String value',
                'country' => [
                    'name' => 'String value',
                    'errorInfo' => 'String value',
                ],
                'county' => [
                    'name' => 'String value',
                ],
            ],
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'employeeClass' => [
                'description' => 'String value',
            ],
            'branch' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
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
        ->contact->employeeContact->toBe('String value')
        ->contact->title->toBe('String value')
        ->contact->firstName->toBe('String value')
        ->contact->midName->toBe('String value')
        ->contact->lastName->toBe('String value')
        ->contact->phone3->toBe('String value')
        ->contact->contactId->toBe(42)
        ->contact->name->toBe('String value')
        ->contact->attention->toBe('String value')
        ->contact->email->toBe('test@example.com')
        ->contact->web->toBe('String value')
        ->contact->phone1->toBe('String value')
        ->contact->phone2->toBe('String value')
        ->contact->fax->toBe('String value')
        ->address->addressId->toBe(42)
        ->address->addressLine1->toBe('String value')
        ->address->addressLine2->toBe('String value')
        ->address->addressLine3->toBe('String value')
        ->address->postalCode->toBe('String value')
        ->address->city->toBe('String value')
        ->address->country->name->toBe('String value')
        ->address->country->errorInfo->toBe('String value')
        ->address->county->name->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->employeeClass->description->toBe('String value')
        ->branch->number->toBe('String value')
        ->branch->name->toBe('String value')
        ->calendarId->toBe('mock-id-123')
        ->employeeLogin->toBe('String value')
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the employeePutByemployeeCdRequest method in the Employee resource', function () {
    $bodyData = new EmployeeUpdateDto(
        employeeClass: 'String value',
        status: 'String value',
        department: 'String value',
        contact: [
            'firstName' => 'String value',
            'lastName' => 'String value',
            'middleName' => 'String value',
            'email' => 'test@example.com',
            'phone1' => 'String value',
            'phone2' => 'String value',
            'phone3' => 'String value',
            'fax' => 'String value',
        ],
        address: [
            'addressLine1' => 'String value',
            'addressLine2' => 'String value',
            'addressLine3' => 'String value',
            'postalCode' => 'String value',
            'city' => 'String value',
            'countryId' => 'mock-id-123',
            'county' => 'String value',
        ],
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
                'contact' => [
                    'employeeContact' => 'String value',
                    'title' => 'String value',
                    'firstName' => 'String value',
                    'midName' => 'String value',
                    'lastName' => 'String value',
                    'phone3' => 'String value',
                    'contactId' => 42,
                    'name' => 'String value',
                    'attention' => 'String value',
                    'email' => 'test@example.com',
                    'web' => 'String value',
                    'phone1' => 'String value',
                    'phone2' => 'String value',
                    'fax' => 'String value',
                ],
                'address' => [
                    'addressId' => 42,
                    'addressLine1' => 'String value',
                    'addressLine2' => 'String value',
                    'addressLine3' => 'String value',
                    'postalCode' => 'String value',
                    'city' => 'String value',
                    'country' => [
                        'name' => 'String value',
                        'errorInfo' => 'String value',
                    ],
                    'county' => [
                        'name' => 'String value',
                    ],
                ],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'employeeClass' => [
                    'description' => 'String value',
                ],
                'branch' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
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
                'contact' => [
                    'employeeContact' => 'String value',
                    'title' => 'String value',
                    'firstName' => 'String value',
                    'midName' => 'String value',
                    'lastName' => 'String value',
                    'phone3' => 'String value',
                    'contactId' => 42,
                    'name' => 'String value',
                    'attention' => 'String value',
                    'email' => 'test@example.com',
                    'web' => 'String value',
                    'phone1' => 'String value',
                    'phone2' => 'String value',
                    'fax' => 'String value',
                ],
                'address' => [
                    'addressId' => 42,
                    'addressLine1' => 'String value',
                    'addressLine2' => 'String value',
                    'addressLine3' => 'String value',
                    'postalCode' => 'String value',
                    'city' => 'String value',
                    'country' => [
                        'name' => 'String value',
                        'errorInfo' => 'String value',
                    ],
                    'county' => [
                        'name' => 'String value',
                    ],
                ],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'employeeClass' => [
                    'description' => 'String value',
                ],
                'branch' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
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

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->employeeUserId->toBe('mock-id-123')
        ->employeeId->toBe(42)
        ->employeeNumber->toBe('String value')
        ->employeeName->toBe('String value')
        ->status->toBe('String value')
        ->department->toBe('String value')
        ->contact->employeeContact->toBe('String value')
        ->contact->title->toBe('String value')
        ->contact->firstName->toBe('String value')
        ->contact->midName->toBe('String value')
        ->contact->lastName->toBe('String value')
        ->contact->phone3->toBe('String value')
        ->contact->contactId->toBe(42)
        ->contact->name->toBe('String value')
        ->contact->attention->toBe('String value')
        ->contact->email->toBe('test@example.com')
        ->contact->web->toBe('String value')
        ->contact->phone1->toBe('String value')
        ->contact->phone2->toBe('String value')
        ->contact->fax->toBe('String value')
        ->address->addressId->toBe(42)
        ->address->addressLine1->toBe('String value')
        ->address->addressLine2->toBe('String value')
        ->address->addressLine3->toBe('String value')
        ->address->postalCode->toBe('String value')
        ->address->city->toBe('String value')
        ->address->country->name->toBe('String value')
        ->address->country->errorInfo->toBe('String value')
        ->address->county->name->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->employeeClass->description->toBe('String value')
        ->branch->number->toBe('String value')
        ->branch->name->toBe('String value')
        ->calendarId->toBe('mock-id-123')
        ->employeeLogin->toBe('String value')
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the employeeCreateEmployeeRequest method in the Employee resource', function () {
    $bodyData = new EmployeeCreateDTO(
        employeeCd: 'String value',
        department: 'String value',
        employeeClass: 'String value',
        branch: 'String value',
        calendar: 'String value',
        contact: [
            'firstName' => 'String value',
            'lastName' => 'String value',
            'middleName' => 'String value',
            'email' => 'test@example.com',
            'phone1' => 'String value',
            'phone2' => 'String value',
            'phone3' => 'String value',
            'fax' => 'String value',
        ],
        address: [
            'addressLine1' => 'String value',
            'addressLine2' => 'String value',
            'addressLine3' => 'String value',
            'postalCode' => 'String value',
            'city' => 'String value',
            'countryId' => 'mock-id-123',
            'county' => 'String value',
        ],
        status: 'String value'
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
                'week' => [
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'employee' => [
                    'internalId' => 'mock-id-123',
                    'number' => 'String value',
                    'name' => 'String value',
                ],
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
                'week' => [
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'employee' => [
                    'internalId' => 'mock-id-123',
                    'number' => 'String value',
                    'name' => 'String value',
                ],
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

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->refNbr->toBe('String value')
        ->status->toBe('String value')
        ->approvalStatus->toBe('String value')
        ->week->number->toBe('String value')
        ->week->description->toBe('String value')
        ->employee->internalId->toBe('mock-id-123')
        ->employee->number->toBe('String value')
        ->employee->name->toBe('String value')
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
            'claimedBy' => [
                'internalId' => 'mock-id-123',
                'number' => 'String value',
                'name' => 'String value',
            ],
            'claimTotal' => 42,
            'vatTaxableTotal' => 42,
            'vatExemptTotal' => 42,
            'customer' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
            'currency' => 'String value',
            'approvalDate' => '2025-11-22T10:40:04+00:00',
            'department' => [
                'description' => 'String value',
            ],
            'location' => [
                'description' => 'String value',
            ],
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
        ->claimedBy->internalId->toBe('mock-id-123')
        ->claimedBy->number->toBe('String value')
        ->claimedBy->name->toBe('String value')
        ->claimTotal->toBe(42)
        ->vatTaxableTotal->toBe(42)
        ->vatExemptTotal->toBe(42)
        ->customer->number->toBe('String value')
        ->customer->name->toBe('String value')
        ->currency->toBe('String value')
        ->approvalDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->department->description->toBe('String value')
        ->location->description->toBe('String value')
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
            'currency' => [
                'description' => 'String value',
            ],
            'refNbr' => 'String value',
            'inventory' => [
                'number' => 'String value',
                'description' => 'String value',
            ],
            'description' => 'String value',
            'uom' => 'String value',
            'quantity' => 42,
            'unitCost' => 42,
            'totalAmount' => 42,
            'employeePart' => 42,
            'claimAmount' => 42,
            'status' => 'String value',
            'claimedBy' => [
                'employeeUserId' => 'mock-id-123',
                'employeeId' => 42,
                'employeeNumber' => 'String value',
                'employeeName' => 'String value',
                'status' => 'String value',
                'department' => 'String value',
                'contact' => [
                    'employeeContact' => 'String value',
                    'title' => 'String value',
                    'firstName' => 'String value',
                    'midName' => 'String value',
                    'lastName' => 'String value',
                    'phone3' => 'String value',
                    'contactId' => 42,
                    'name' => 'String value',
                    'attention' => 'String value',
                    'email' => 'test@example.com',
                    'web' => 'String value',
                    'phone1' => 'String value',
                    'phone2' => 'String value',
                    'fax' => 'String value',
                ],
                'address' => [
                    'addressId' => 42,
                    'addressLine1' => 'String value',
                    'addressLine2' => 'String value',
                    'addressLine3' => 'String value',
                    'postalCode' => 'String value',
                    'city' => 'String value',
                    'country' => [
                        'name' => 'String value',
                        'errorInfo' => 'String value',
                    ],
                    'county' => [
                        'name' => 'String value',
                    ],
                ],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'employeeClass' => [
                    'description' => 'String value',
                ],
                'branch' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'calendarId' => 'mock-id-123',
                'employeeLogin' => 'String value',
                'workGroupDescription' => [],
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
            'branch' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
            'expenseClaim' => [
                'number' => 'String value',
                'description' => 'String value',
            ],
            'invoiceable' => true,
            'project' => [
                'internalId' => 42,
                'description' => 'String value',
            ],
            'projectTask' => [
                'internalId' => 42,
                'description' => 'String value',
            ],
            'customer' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
            'location' => [
                'description' => 'String value',
            ],
            'expenseAccount' => [
                'type' => 'String value',
                'number' => 'String value',
                'description' => 'String value',
            ],
            'expenseSub' => [
                'active' => true,
                'description' => 'String value',
            ],
            'salesAccount' => [
                'type' => 'String value',
                'number' => 'String value',
                'description' => 'String value',
            ],
            'salesSub' => [
                'active' => true,
                'description' => 'String value',
            ],
            'taxCategory' => [
                'number' => 'String value',
                'description' => 'String value',
            ],
            'image' => [
                'name' => 'String value',
                'revision' => 42,
            ],
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
        ->currency->description->toBe('String value')
        ->refNbr->toBe('String value')
        ->inventory->number->toBe('String value')
        ->inventory->description->toBe('String value')
        ->description->toBe('String value')
        ->uom->toBe('String value')
        ->quantity->toBe(42)
        ->unitCost->toBe(42)
        ->totalAmount->toBe(42)
        ->employeePart->toBe(42)
        ->claimAmount->toBe(42)
        ->status->toBe('String value')
        ->claimedBy->employeeUserId->toBe('mock-id-123')
        ->claimedBy->employeeId->toBe(42)
        ->claimedBy->employeeNumber->toBe('String value')
        ->claimedBy->employeeName->toBe('String value')
        ->claimedBy->status->toBe('String value')
        ->claimedBy->department->toBe('String value')
        ->claimedBy->contact->employeeContact->toBe('String value')
        ->claimedBy->contact->title->toBe('String value')
        ->claimedBy->contact->firstName->toBe('String value')
        ->claimedBy->contact->midName->toBe('String value')
        ->claimedBy->contact->lastName->toBe('String value')
        ->claimedBy->contact->phone3->toBe('String value')
        ->claimedBy->contact->contactId->toBe(42)
        ->claimedBy->contact->name->toBe('String value')
        ->claimedBy->contact->attention->toBe('String value')
        ->claimedBy->contact->email->toBe('test@example.com')
        ->claimedBy->contact->web->toBe('String value')
        ->claimedBy->contact->phone1->toBe('String value')
        ->claimedBy->contact->phone2->toBe('String value')
        ->claimedBy->contact->fax->toBe('String value')
        ->claimedBy->address->addressId->toBe(42)
        ->claimedBy->address->addressLine1->toBe('String value')
        ->claimedBy->address->addressLine2->toBe('String value')
        ->claimedBy->address->addressLine3->toBe('String value')
        ->claimedBy->address->postalCode->toBe('String value')
        ->claimedBy->address->city->toBe('String value')
        ->claimedBy->address->country->name->toBe('String value')
        ->claimedBy->address->country->errorInfo->toBe('String value')
        ->claimedBy->address->county->name->toBe('String value')
        ->claimedBy->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->claimedBy->employeeClass->description->toBe('String value')
        ->claimedBy->branch->number->toBe('String value')
        ->claimedBy->branch->name->toBe('String value')
        ->claimedBy->calendarId->toBe('mock-id-123')
        ->claimedBy->employeeLogin->toBe('String value')
        ->claimedBy->timeStamp->toBe('String value')
        ->claimedBy->errorInfo->toBe('String value')
        ->branch->number->toBe('String value')
        ->branch->name->toBe('String value')
        ->expenseClaim->number->toBe('String value')
        ->expenseClaim->description->toBe('String value')
        ->invoiceable->toBe(true)
        ->project->internalId->toBe(42)
        ->project->description->toBe('String value')
        ->projectTask->internalId->toBe(42)
        ->projectTask->description->toBe('String value')
        ->customer->number->toBe('String value')
        ->customer->name->toBe('String value')
        ->location->description->toBe('String value')
        ->expenseAccount->type->toBe('String value')
        ->expenseAccount->number->toBe('String value')
        ->expenseAccount->description->toBe('String value')
        ->expenseSub->active->toBe(true)
        ->expenseSub->description->toBe('String value')
        ->salesAccount->type->toBe('String value')
        ->salesAccount->number->toBe('String value')
        ->salesAccount->description->toBe('String value')
        ->salesSub->active->toBe(true)
        ->salesSub->description->toBe('String value')
        ->taxCategory->number->toBe('String value')
        ->taxCategory->description->toBe('String value')
        ->image->name->toBe('String value')
        ->image->revision->toBe(42)
        ->timeStamp->toBe('String value');
});

it('calls the employeeChangeEmployeeNrActionByinternalIdRequest method in the Employee resource', function () {
    $bodyData = new ChangeEmployeeNrActionDto(
        employeeNr: 'String value'
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
