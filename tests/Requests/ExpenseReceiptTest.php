<?php

use Pionect\VismaSdk\Dto\ExpenseReceiptUpdateDto;
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

it('calls the expenseReceiptPutByreceiptNumberRequest method in the ExpenseReceipt resource', function () {
    $bodyData = new ExpenseReceiptUpdateDto(
        date: '2025-11-22T10:40:04+00:00',
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
            ],
            1 => [
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

it('calls the expenseReceiptPostRequest method in the ExpenseReceipt resource', function () {
    $bodyData = new ExpenseReceiptUpdateDto(
        date: '2025-11-22T10:40:04+00:00',
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
    $bodyData = new ExpenseReceiptUpdateDto(
        date: '2025-11-22T10:40:04+00:00',
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
