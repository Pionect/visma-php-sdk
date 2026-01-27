<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Vat\VatGetAllVatsCollectionRequest;
use Pionect\VismaSdk\Requests\Vat\VatGetVatByvatIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the vatGetVatByvatId method in the Vat resource', function () {
    Saloon::fake([
        VatGetVatByvatIdRequest::class => MockResponse::make([
            'vatCategoryId' => 'mock-id-123',
            'vatId' => 'mock-id-123',
            'description' => 'String value',
            'deductibleVat' => true,
            'reverseVat' => true,
            'statisticalVat' => true,
            'pendingVat' => true,
            'includeinVatExemptTotal' => true,
            'includeinVatTotal' => true,
            'enterFromVatInvoice' => true,
            'calculateOn' => 'String value',
            'cashDiscount' => 'String value',
            'vatAgencyId' => null,
            'notValidAfter' => '2025-11-22T10:40:04.065Z',
            'euReportCode' => 'String value',
            'documentText' => 'String value',
            'defaultNonStockItem' => null,
            'vismaXmlVatType' => 'String value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'glAccounts' => null,
            'schedules' => [],
            'categories' => [],
            'zones' => [],
        ], 200),
    ]);

    $request = new VatGetVatByvatIdRequest(
        vatIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(VatGetVatByvatIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->vatCategoryId->toBe('mock-id-123')
        ->vatId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->deductibleVat->toBeTrue()
        ->reverseVat->toBeTrue()
        ->statisticalVat->toBeTrue()
        ->pendingVat->toBeTrue()
        ->includeinVatExemptTotal->toBeTrue()
        ->includeinVatTotal->toBeTrue()
        ->enterFromVatInvoice->toBeTrue()
        ->calculateOn->toBe('String value')
        ->cashDiscount->toBe('String value')
        ->vatAgencyId->toBeNull()
        ->notValidAfter->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->euReportCode->toBe('String value')
        ->documentText->toBe('String value')
        ->defaultNonStockItem->toBeNull()
        ->vismaXmlVatType->toBe('String value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->glAccounts->toBeNull();
});

it('calls the vatGetAllVatsCollection method in the Vat resource', function () {
    Saloon::fake([
        VatGetAllVatsCollectionRequest::class => MockResponse::make([
            0 => [
                'vatCategoryId' => 'mock-id-123',
                'vatId' => 'mock-id-123',
                'description' => 'String value',
                'deductibleVat' => true,
                'reverseVat' => true,
                'statisticalVat' => true,
                'pendingVat' => true,
                'includeinVatExemptTotal' => true,
                'includeinVatTotal' => true,
                'enterFromVatInvoice' => true,
                'calculateOn' => 'String value',
                'cashDiscount' => 'String value',
                'vatAgencyId' => null,
                'notValidAfter' => '2025-11-22T10:40:04.065Z',
                'euReportCode' => 'String value',
                'documentText' => 'String value',
                'defaultNonStockItem' => null,
                'vismaXmlVatType' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'glAccounts' => null,
                'schedules' => [],
                'categories' => [],
                'zones' => [],
            ],
            1 => [
                'vatCategoryId' => 'mock-id-123',
                'vatId' => 'mock-id-123',
                'description' => 'String value',
                'deductibleVat' => true,
                'reverseVat' => true,
                'statisticalVat' => true,
                'pendingVat' => true,
                'includeinVatExemptTotal' => true,
                'includeinVatTotal' => true,
                'enterFromVatInvoice' => true,
                'calculateOn' => 'String value',
                'cashDiscount' => 'String value',
                'vatAgencyId' => null,
                'notValidAfter' => '2025-11-22T10:40:04.065Z',
                'euReportCode' => 'String value',
                'documentText' => 'String value',
                'defaultNonStockItem' => null,
                'vismaXmlVatType' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'glAccounts' => null,
                'schedules' => [],
                'categories' => [],
                'zones' => [],
            ],
        ], 200),
    ]);

    $request = (new VatGetAllVatsCollectionRequest(numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string'));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (VatGetAllVatsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->vatCategoryId->toBe('mock-id-123')
        ->vatId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->deductibleVat->toBeTrue()
        ->reverseVat->toBeTrue()
        ->statisticalVat->toBeTrue()
        ->pendingVat->toBeTrue()
        ->includeinVatExemptTotal->toBeTrue()
        ->includeinVatTotal->toBeTrue()
        ->enterFromVatInvoice->toBeTrue()
        ->calculateOn->toBe('String value')
        ->cashDiscount->toBe('String value')
        ->vatAgencyId->toBeNull()
        ->notValidAfter->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->euReportCode->toBe('String value')
        ->documentText->toBe('String value')
        ->defaultNonStockItem->toBeNull()
        ->vismaXmlVatType->toBe('String value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->glAccounts->toBeNull();
});
