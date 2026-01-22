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
            'data' => [
                'type' => 'vats',
                'id' => 'mock-id-123',
                'attributes' => [
                    'vatCategoryId' => 'mock-id-123',
                    'vatId' => 'mock-id-123',
                    'description' => 'Mock value',
                    'deductibleVat' => true,
                    'reverseVat' => true,
                    'statisticalVat' => true,
                    'pendingVat' => true,
                    'includeinVatExemptTotal' => true,
                    'includeinVatTotal' => true,
                    'enterFromVatInvoice' => true,
                    'calculateOn' => 'Mock value',
                    'cashDiscount' => 'Mock value',
                    'vatAgencyId' => 'Mock value',
                    'notValidAfter' => '2025-11-22T10:40:04.065Z',
                    'euReportCode' => 'Mock value',
                    'documentText' => 'Mock value',
                    'defaultNonStockItem' => 'Mock value',
                    'vismaXmlVatType' => 'Mock value',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'glAccounts' => 'Mock value',
                    'schedules' => [],
                    'categories' => [],
                    'zones' => [],
                ],
            ],
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
        ->description->toBe('Mock value')
        ->deductibleVat->toBe(true)
        ->reverseVat->toBe(true)
        ->statisticalVat->toBe(true)
        ->pendingVat->toBe(true)
        ->includeinVatExemptTotal->toBe(true)
        ->includeinVatTotal->toBe(true)
        ->enterFromVatInvoice->toBe(true)
        ->calculateOn->toBe('Mock value')
        ->cashDiscount->toBe('Mock value')
        ->vatAgencyId->toBe('Mock value')
        ->notValidAfter->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->euReportCode->toBe('Mock value')
        ->documentText->toBe('Mock value')
        ->defaultNonStockItem->toBe('Mock value')
        ->vismaXmlVatType->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->glAccounts->toBe('Mock value');
});

it('calls the vatGetAllVatsCollection method in the Vat resource', function () {
    Saloon::fake([
        VatGetAllVatsCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'vats',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'vatCategoryId' => 'mock-id-123',
                        'vatId' => 'mock-id-123',
                        'description' => 'Mock value',
                        'deductibleVat' => true,
                        'reverseVat' => true,
                        'statisticalVat' => true,
                        'pendingVat' => true,
                        'includeinVatExemptTotal' => true,
                        'includeinVatTotal' => true,
                        'enterFromVatInvoice' => true,
                        'calculateOn' => 'Mock value',
                        'cashDiscount' => 'Mock value',
                        'vatAgencyId' => 'Mock value',
                        'notValidAfter' => '2025-11-22T10:40:04.065Z',
                        'euReportCode' => 'Mock value',
                        'documentText' => 'Mock value',
                        'defaultNonStockItem' => 'Mock value',
                        'vismaXmlVatType' => 'Mock value',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'glAccounts' => 'Mock value',
                        'schedules' => [],
                        'categories' => [],
                        'zones' => [],
                    ],
                ],
                1 => [
                    'type' => 'vats',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'vatCategoryId' => 'mock-id-123',
                        'vatId' => 'mock-id-123',
                        'description' => 'Mock value',
                        'deductibleVat' => true,
                        'reverseVat' => true,
                        'statisticalVat' => true,
                        'pendingVat' => true,
                        'includeinVatExemptTotal' => true,
                        'includeinVatTotal' => true,
                        'enterFromVatInvoice' => true,
                        'calculateOn' => 'Mock value',
                        'cashDiscount' => 'Mock value',
                        'vatAgencyId' => 'Mock value',
                        'notValidAfter' => '2025-11-22T10:40:04.065Z',
                        'euReportCode' => 'Mock value',
                        'documentText' => 'Mock value',
                        'defaultNonStockItem' => 'Mock value',
                        'vismaXmlVatType' => 'Mock value',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'glAccounts' => 'Mock value',
                        'schedules' => [],
                        'categories' => [],
                        'zones' => [],
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new VatGetAllVatsCollectionRequest(numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string'));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (VatGetAllVatsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->vatCategoryId->toBe('mock-id-123')
        ->vatId->toBe('mock-id-123')
        ->description->toBe('Mock value')
        ->deductibleVat->toBe(true)
        ->reverseVat->toBe(true)
        ->statisticalVat->toBe(true)
        ->pendingVat->toBe(true)
        ->includeinVatExemptTotal->toBe(true)
        ->includeinVatTotal->toBe(true)
        ->enterFromVatInvoice->toBe(true)
        ->calculateOn->toBe('Mock value')
        ->cashDiscount->toBe('Mock value')
        ->vatAgencyId->toBe('Mock value')
        ->notValidAfter->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->euReportCode->toBe('Mock value')
        ->documentText->toBe('Mock value')
        ->defaultNonStockItem->toBe('Mock value')
        ->vismaXmlVatType->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->glAccounts->toBe('Mock value');
});
