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
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the expenseReceiptGetByreceiptNumber method in the ExpenseReceipt resource', function () {
    Saloon::fake([
        ExpenseReceiptGetByreceiptNumberRequest::class => MockResponse::make([
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
        ->invoiceable->toBeTrue()
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

it('calls the expenseReceiptGetAllCollection method in the ExpenseReceipt resource', function () {
    Saloon::fake([
        ExpenseReceiptGetAllCollectionRequest::class => MockResponse::make([
            0 => [
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
            1 => [
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
        ], 200),
    ]);

    $request = (new ExpenseReceiptGetAllCollectionRequest(date: 'test string', dateCondition: 'test string', inventory: 'test string', project: 'test string', claimedBy: 'test string', projectTask: 'test string', invoiceable: true, status: 'test string', customer: 'test string'));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (ExpenseReceiptGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
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
        ->invoiceable->toBeTrue()
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
            ->toHaveKey('data')
            ->data->type->toBe('expenseReceipts')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->stateLocation->toBe('test value')
            );

        return true;
    });
});
