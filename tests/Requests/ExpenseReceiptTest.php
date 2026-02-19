<?php

use Pionect\VismaSdk\Dto\ExpenseReceiptUpdateDto;
use Pionect\VismaSdk\Enums\ContactTitleEnum;
use Pionect\VismaSdk\Enums\EmployeeStatusEnum;
use Pionect\VismaSdk\Enums\ExpenseReceiptQueryParametersStatusEnum;
use Pionect\VismaSdk\Requests\ExpenseReceipt\ExpenseReceiptCreateAttachmentByreceiptNumberRequest;
use Pionect\VismaSdk\Requests\ExpenseReceipt\ExpenseReceiptDeleteByreceiptNumberRequest;
use Pionect\VismaSdk\Requests\ExpenseReceipt\ExpenseReceiptGetAllRequest;
use Pionect\VismaSdk\Requests\ExpenseReceipt\ExpenseReceiptGetByreceiptNumberRequest;
use Pionect\VismaSdk\Requests\ExpenseReceipt\ExpenseReceiptPostRequest;
use Pionect\VismaSdk\Requests\ExpenseReceipt\ExpenseReceiptPutByreceiptNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the expenseReceiptGetByreceiptNumberRequest method in the ExpenseReceipt resource', function () {
    Saloon::fake([
        ExpenseReceiptGetByreceiptNumberRequest::class => MockResponse::make([
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
            'status' => 'Open',
            'claimedBy' => [
                'employeeUserId' => 'mock-id-123',
                'employeeId' => 42,
                'employeeNumber' => 'String value',
                'employeeName' => 'String value',
                'status' => 'Active',
                'department' => 'String value',
                'contact' => [
                    'employeeContact' => 'String value',
                    'title' => 'Doctor',
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

    $request = new ExpenseReceiptGetByreceiptNumberRequest(
        receiptNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ExpenseReceiptGetByreceiptNumberRequest::class);

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
        ->status->toEqual(ExpenseReceiptQueryParametersStatusEnum::OPEN)
        ->claimedBy->employeeUserId->toBe('mock-id-123')
        ->claimedBy->employeeId->toBe(42)
        ->claimedBy->employeeNumber->toBe('String value')
        ->claimedBy->employeeName->toBe('String value')
        ->claimedBy->status->toEqual(EmployeeStatusEnum::ACTIVE)
        ->claimedBy->department->toBe('String value')
        ->claimedBy->contact->employeeContact->toBe('String value')
        ->claimedBy->contact->title->toEqual(ContactTitleEnum::DOCTOR)
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

it('calls the expenseReceiptPutByreceiptNumberRequest method in the ExpenseReceipt resource', function () {
    $bodyData = new ExpenseReceiptUpdateDto(
        date: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        currency: 'String value',
        refNbr: 'String value',
        inventory: 'String value',
        description: 'String value',
        uom: 'String value',
        quantity: 42,
        unitCost: 42,
        totalAmount: 42,
        employeePart: 42,
        claimedBy: 'String value',
        branch: 'String value',
        expenseClaim: 'String value',
        invoiceable: true,
        project: 'String value',
        projectTask: 'String value',
        customer: 'String value',
        location: 'String value',
        expenseAccount: 'String value',
        expenseSub: 'String value',
        salesAccount: 'String value',
        salesSub: 'String value',
        taxCategory: 'String value'
    );

    Saloon::fake([
        ExpenseReceiptPutByreceiptNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ExpenseReceiptPutByreceiptNumberRequest(
        receiptNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ExpenseReceiptPutByreceiptNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the expenseReceiptDeleteByreceiptNumberRequest method in the ExpenseReceipt resource', function () {
    Saloon::fake([
        ExpenseReceiptDeleteByreceiptNumberRequest::class => MockResponse::make([], 204),
    ]);

    $request = new ExpenseReceiptDeleteByreceiptNumberRequest(
        receiptNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ExpenseReceiptDeleteByreceiptNumberRequest::class);

    expect($response->status())->toBe(204);
});

it('calls the expenseReceiptGetAllRequest method in the ExpenseReceipt resource', function () {
    Saloon::fake([
        ExpenseReceiptGetAllRequest::class => MockResponse::make([
            0 => [
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
                'status' => 'Open',
                'claimedBy' => [
                    'employeeUserId' => 'mock-id-123',
                    'employeeId' => 42,
                    'employeeNumber' => 'String value',
                    'employeeName' => 'String value',
                    'status' => 'Active',
                    'department' => 'String value',
                    'contact' => [
                        'employeeContact' => 'String value',
                        'title' => 'Doctor',
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
            ],
            1 => [
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
                'status' => 'Open',
                'claimedBy' => [
                    'employeeUserId' => 'mock-id-123',
                    'employeeId' => 42,
                    'employeeNumber' => 'String value',
                    'employeeName' => 'String value',
                    'status' => 'Active',
                    'department' => 'String value',
                    'contact' => [
                        'employeeContact' => 'String value',
                        'title' => 'Doctor',
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
            ],
        ], 200),
    ]);

    $request = new ExpenseReceiptGetAllRequest(
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

    Saloon::assertSent(ExpenseReceiptGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
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
        ->status->toEqual(ExpenseReceiptQueryParametersStatusEnum::OPEN)
        ->claimedBy->employeeUserId->toBe('mock-id-123')
        ->claimedBy->employeeId->toBe(42)
        ->claimedBy->employeeNumber->toBe('String value')
        ->claimedBy->employeeName->toBe('String value')
        ->claimedBy->status->toEqual(EmployeeStatusEnum::ACTIVE)
        ->claimedBy->department->toBe('String value')
        ->claimedBy->contact->employeeContact->toBe('String value')
        ->claimedBy->contact->title->toEqual(ContactTitleEnum::DOCTOR)
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

it('calls the expenseReceiptPostRequest method in the ExpenseReceipt resource', function () {
    $bodyData = new ExpenseReceiptUpdateDto(
        date: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        currency: 'String value',
        refNbr: 'String value',
        inventory: 'String value',
        description: 'String value',
        uom: 'String value',
        quantity: 42,
        unitCost: 42,
        totalAmount: 42,
        employeePart: 42,
        claimedBy: 'String value',
        branch: 'String value',
        expenseClaim: 'String value',
        invoiceable: true,
        project: 'String value',
        projectTask: 'String value',
        customer: 'String value',
        location: 'String value',
        expenseAccount: 'String value',
        expenseSub: 'String value',
        salesAccount: 'String value',
        salesSub: 'String value',
        taxCategory: 'String value'
    );

    Saloon::fake([
        ExpenseReceiptPostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ExpenseReceiptPostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ExpenseReceiptPostRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the expenseReceiptCreateAttachmentByreceiptNumberRequest method in the ExpenseReceipt resource', function () {
    $bodyData = [];

    Saloon::fake([
        ExpenseReceiptCreateAttachmentByreceiptNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ExpenseReceiptCreateAttachmentByreceiptNumberRequest(
        receiptNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ExpenseReceiptCreateAttachmentByreceiptNumberRequest::class);

    expect($response->status())->toBe(201);
});
