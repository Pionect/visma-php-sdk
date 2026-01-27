<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\CashTransaction\CashTransactionCreateAttachmentByreferenceNbrRequest;
use Pionect\VismaSdk\Requests\CashTransaction\CashTransactionGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\CashTransaction\CashTransactionGetByreferenceNbrRequest;
use Pionect\VismaSdk\Requests\CashTransaction\CashTransactionReleaseByreferenceNbrRequest;
use Pionect\VismaSdk\Requests\CashTransaction\CashTransactionReverseByreferenceNbrRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the cashTransactionGetByreferenceNbr method in the CashTransaction resource', function () {
    Saloon::fake([
        CashTransactionGetByreferenceNbrRequest::class => MockResponse::make([
            'tranType' => 'String value',
            'referenceNbr' => 'String value',
            'status' => 'String value',
            'hold' => true,
            'tranDate' => '2025-11-22T10:40:04.065Z',
            'finPeriod' => 'String value',
            'financialPeriod' => 'String value',
            'cashAccount' => null,
            'currency' => 'String value',
            'entryType' => null,
            'disbReceipt' => 'String value',
            'documentRef' => 'String value',
            'owner' => null,
            'description' => 'String value',
            'amount' => 3.14,
            'vatTaxableTotal' => 3.14,
            'vatExemptTotal' => 3.14,
            'taxTotal' => 3.14,
            'controlTotal' => 3.14,
            'taxAmount' => 3.14,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'transactionDetails' => [],
            'taxDetails' => [],
            'financialsDetail' => null,
            'timeStamp' => '2025-11-22T10:40:04.065Z',
        ], 200),
    ]);

    $request = new CashTransactionGetByreferenceNbrRequest(
        referenceNbrId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CashTransactionGetByreferenceNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->tranType->toBe('String value')
        ->referenceNbr->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBeTrue()
        ->tranDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->finPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->cashAccount->toBeNull()
        ->currency->toBe('String value')
        ->entryType->toBeNull()
        ->disbReceipt->toBe('String value')
        ->documentRef->toBe('String value')
        ->owner->toBeNull()
        ->description->toBe('String value')
        ->amount->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->taxTotal->toBe(3.14)
        ->controlTotal->toBe(3.14)
        ->taxAmount->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->financialsDetail->toBeNull()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});

it('calls the cashTransactionGetAllCollection method in the CashTransaction resource', function () {
    Saloon::fake([
        CashTransactionGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'tranType' => 'String value',
                'referenceNbr' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'tranDate' => '2025-11-22T10:40:04.065Z',
                'finPeriod' => 'String value',
                'financialPeriod' => 'String value',
                'cashAccount' => null,
                'currency' => 'String value',
                'entryType' => null,
                'disbReceipt' => 'String value',
                'documentRef' => 'String value',
                'owner' => null,
                'description' => 'String value',
                'amount' => 3.14,
                'vatTaxableTotal' => 3.14,
                'vatExemptTotal' => 3.14,
                'taxTotal' => 3.14,
                'controlTotal' => 3.14,
                'taxAmount' => 3.14,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'transactionDetails' => [],
                'taxDetails' => [],
                'financialsDetail' => null,
                'timeStamp' => '2025-11-22T10:40:04.065Z',
            ],
            1 => [
                'tranType' => 'String value',
                'referenceNbr' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'tranDate' => '2025-11-22T10:40:04.065Z',
                'finPeriod' => 'String value',
                'financialPeriod' => 'String value',
                'cashAccount' => null,
                'currency' => 'String value',
                'entryType' => null,
                'disbReceipt' => 'String value',
                'documentRef' => 'String value',
                'owner' => null,
                'description' => 'String value',
                'amount' => 3.14,
                'vatTaxableTotal' => 3.14,
                'vatExemptTotal' => 3.14,
                'taxTotal' => 3.14,
                'controlTotal' => 3.14,
                'taxAmount' => 3.14,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'transactionDetails' => [],
                'taxDetails' => [],
                'financialsDetail' => null,
                'timeStamp' => '2025-11-22T10:40:04.065Z',
            ],
        ], 200),
    ]);

    $request = (new CashTransactionGetAllCollectionRequest(numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (CashTransactionGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->tranType->toBe('String value')
        ->referenceNbr->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBeTrue()
        ->tranDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->finPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->cashAccount->toBeNull()
        ->currency->toBe('String value')
        ->entryType->toBeNull()
        ->disbReceipt->toBe('String value')
        ->documentRef->toBe('String value')
        ->owner->toBeNull()
        ->description->toBe('String value')
        ->amount->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->taxTotal->toBe(3.14)
        ->controlTotal->toBe(3.14)
        ->taxAmount->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->financialsDetail->toBeNull()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});

it('calls the cashTransactionReleaseByreferenceNbr method in the CashTransaction resource', function () {
    $mockClient = Saloon::fake([
        CashTransactionReleaseByreferenceNbrRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\ReleaseCashTransactionActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new CashTransactionReleaseByreferenceNbrRequest(referenceNbrId: 'reference_nbr_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(CashTransactionReleaseByreferenceNbrRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('cashTransactions')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

        return true;
    });
});

it('calls the cashTransactionReverseByreferenceNbr method in the CashTransaction resource', function () {
    $mockClient = Saloon::fake([
        CashTransactionReverseByreferenceNbrRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\ReverseCashTransactionActionResultDto::factory()->state([
        'referenceNbr' => 'test value',
        'cashTransaction' => 'test value',
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
    ])->make();

    $request = new CashTransactionReverseByreferenceNbrRequest(referenceNbrId: 'reference_nbr_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(CashTransactionReverseByreferenceNbrRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('cashTransactions')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->referenceNbr->toBe('test value')
            ->cashTransaction->toBe('test value')
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            );

        return true;
    });
});

it('calls the cashTransactionCreateAttachmentByreferenceNbr method in the CashTransaction resource', function () {
    $mockClient = Saloon::fake([
        CashTransactionCreateAttachmentByreferenceNbrRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\BackgroundApiAcceptedDto::factory()->state([
        'stateLocation' => 'test value',
    ])->make();

    $request = new CashTransactionCreateAttachmentByreferenceNbrRequest(referenceNbrId: 'reference_nbr_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(CashTransactionCreateAttachmentByreferenceNbrRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('cashTransactions')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->stateLocation->toBe('test value')
            );

        return true;
    });
});
