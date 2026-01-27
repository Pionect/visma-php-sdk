<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\ExpenseReceipt\ExpenseReceiptCreateAttachmentByreceiptNumberRequest;
use Pionect\VismaSdk\Requests\ExpenseReceipt\ExpenseReceiptGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\ExpenseReceipt\ExpenseReceiptGetByreceiptNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the expenseReceiptGetByreceiptNumber method in the ExpenseReceipt resource', function () {
    Saloon::fake([
        ExpenseReceiptGetByreceiptNumberRequest::class => MockResponse::make([
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

    $request = new ExpenseReceiptGetByreceiptNumberRequest(
        receiptNumberId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ExpenseReceiptGetByreceiptNumberRequest::class);

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

it('calls the expenseReceiptGetAllCollection method in the ExpenseReceipt resource', function () {
    Saloon::fake([
        ExpenseReceiptGetAllCollectionRequest::class => MockResponse::make([
            0 => [
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
            ],
            1 => [
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
            ],
        ], 200),
    ]);

    $request = (new ExpenseReceiptGetAllCollectionRequest(date: 'test string', dateCondition: 'test string', inventory: 'test string', project: 'test string', claimedBy: 'test string', projectTask: 'test string', invoiceable: true, status: 'test string', customer: 'test string'));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (ExpenseReceiptGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
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

it('calls the expenseReceiptCreateAttachmentByreceiptNumber method in the ExpenseReceipt resource', function () {
    $mockClient = Saloon::fake([
        ExpenseReceiptCreateAttachmentByreceiptNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\BackgroundApiAcceptedDto::factory()->state([
        'stateLocation' => 'test value',
    ])->make();

    $request = new ExpenseReceiptCreateAttachmentByreceiptNumberRequest(receiptNumberId: 'receipt_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(ExpenseReceiptCreateAttachmentByreceiptNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->stateLocation->toBe('test value');

        return true;
    });
});
