<?php

// Generated 2026-01-30 14:10:14
use Pionect\VismaSdk\Dto\SupplierUpdateDto;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetAllContactForSupplierBysupplierCdRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetAllDocumentsForSupplierBysupplierNumberRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetAllInvoicesForSupplierBysupplierNumberRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetAllRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetAllSupplierBalanceRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetAllSupplierClassesRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetAllSupplierPobalanceRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetBysupplierCdRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetSpecificSupplierClassBysupplierClassIdRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetSupplierBalanceBysupplierCdRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetSupplierPobalanceBysupplierCdRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierPostRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierPutBysupplierCdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the supplierGetAllSupplierClassesRequest method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetAllSupplierClassesRequest::class => MockResponse::make([
            0 => [
                'attributes' => [],
                'paymentMethodId' => 'mock-id-123',
                'paymentMethodDescription' => 'String value',
                'timeStamp' => 'String value',
                'description' => 'String value',
            ],
            1 => [
                'attributes' => [],
                'paymentMethodId' => 'mock-id-123',
                'paymentMethodDescription' => 'String value',
                'timeStamp' => 'String value',
                'description' => 'String value',
            ],
        ], 200),
    ]);

    $request = new SupplierGetAllSupplierClassesRequest(
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierGetAllSupplierClassesRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->paymentMethodId->toBe('mock-id-123')
        ->paymentMethodDescription->toBe('String value')
        ->timeStamp->toBe('String value')
        ->description->toBe('String value');
});

it('calls the supplierGetSpecificSupplierClassBysupplierClassIdRequest method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetSpecificSupplierClassBysupplierClassIdRequest::class => MockResponse::make([
            'attributes' => [],
            'paymentMethodId' => 'mock-id-123',
            'paymentMethodDescription' => 'String value',
            'timeStamp' => 'String value',
            'description' => 'String value',
        ], 200),
    ]);

    $request = new SupplierGetSpecificSupplierClassBysupplierClassIdRequest(
        supplierClassId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierGetSpecificSupplierClassBysupplierClassIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->paymentMethodId->toBe('mock-id-123')
        ->paymentMethodDescription->toBe('String value')
        ->timeStamp->toBe('String value')
        ->description->toBe('String value');
});

it('calls the supplierGetAllSupplierBalanceRequest method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetAllSupplierBalanceRequest::class => MockResponse::make([
            0 => [
                'branchNumber' => 'String value',
                'supplier' => null,
                'balance' => 42,
                'unreleasedPurchasesNotInApproval' => null,
                'totalSentForApproval' => null,
                'totalPurchaseInvoicePeriod' => null,
                'totalPurchaseInvoiceYear' => null,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            ],
            1 => [
                'branchNumber' => 'String value',
                'supplier' => null,
                'balance' => 42,
                'unreleasedPurchasesNotInApproval' => null,
                'totalSentForApproval' => null,
                'totalPurchaseInvoicePeriod' => null,
                'totalPurchaseInvoiceYear' => null,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            ],
        ], 200),
    ]);

    $request = new SupplierGetAllSupplierBalanceRequest(
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        orderBy: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierGetAllSupplierBalanceRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->branchNumber->toBe('String value')
        ->supplier->toBeNull()
        ->balance->toBe(42)
        ->unreleasedPurchasesNotInApproval->toBeNull()
        ->totalSentForApproval->toBeNull()
        ->totalPurchaseInvoicePeriod->toBeNull()
        ->totalPurchaseInvoiceYear->toBeNull()
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'));
});

it('calls the supplierGetAllSupplierPobalanceRequest method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetAllSupplierPobalanceRequest::class => MockResponse::make([
            0 => [
                'name' => 'Mock value',
            ],
            1 => [
                'name' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = new SupplierGetAllSupplierPobalanceRequest(
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        orderBy: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierGetAllSupplierPobalanceRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->name->toBe('Mock value');
});

it('calls the supplierGetBysupplierCdRequest method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetBysupplierCdRequest::class => MockResponse::make([
            'internalId' => 42,
            'number' => 'String value',
            'name' => 'String value',
            'status' => 'String value',
            'mainAddress' => null,
            'mainContact' => null,
            'accountReference' => 'String value',
            'parentRecord' => null,
            'supplierClass' => null,
            'creditTerms' => null,
            'documentLanguage' => 'String value',
            'currencyId' => 'mock-id-123',
            'remitAddress' => null,
            'remitContact' => null,
            'paymentMethod' => null,
            'cashAccount' => 'String value',
            'chargeBearer' => 'String value',
            'accountUsedForPayment' => 'String value',
            'paymentBy' => 'String value',
            'paymentLeadTime' => 42,
            'paymentRefDisplayMask' => 'String value',
            'paySeparately' => true,
            'supplierAddress' => null,
            'supplierContact' => null,
            'location' => null,
            'vatRegistrationId' => 'mock-id-123',
            'corporateId' => 'mock-id-123',
            'vatZone' => null,
            'glAccounts' => null,
            'attributes' => [],
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'supplierPaymentMethodDetails' => [],
            'retainageApply' => true,
            'retainageCashAccountId' => 'mock-id-123',
            'retainagePct' => 42,
            'note' => 'String value',
            'numberOfEmployees' => 42,
            'naceCode' => 'String value',
            'landedCostSupplier' => true,
            'currencyOverride' => true,
            'currencyRateOverride' => true,
            'timeStamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new SupplierGetBysupplierCdRequest(
        supplierCd: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierGetBysupplierCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->internalId->toBe(42)
        ->number->toBe('String value')
        ->name->toBe('String value')
        ->status->toBe('String value')
        ->mainAddress->toBeNull()
        ->mainContact->toBeNull()
        ->accountReference->toBe('String value')
        ->parentRecord->toBeNull()
        ->supplierClass->toBeNull()
        ->creditTerms->toBeNull()
        ->documentLanguage->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->remitAddress->toBeNull()
        ->remitContact->toBeNull()
        ->paymentMethod->toBeNull()
        ->cashAccount->toBe('String value')
        ->chargeBearer->toBe('String value')
        ->accountUsedForPayment->toBe('String value')
        ->paymentBy->toBe('String value')
        ->paymentLeadTime->toBe(42)
        ->paymentRefDisplayMask->toBe('String value')
        ->paySeparately->toBe(true)
        ->supplierAddress->toBeNull()
        ->supplierContact->toBeNull()
        ->location->toBeNull()
        ->vatRegistrationId->toBe('mock-id-123')
        ->corporateId->toBe('mock-id-123')
        ->vatZone->toBeNull()
        ->glAccounts->toBeNull()
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->retainageApply->toBe(true)
        ->retainageCashAccountId->toBe('mock-id-123')
        ->retainagePct->toBe(42)
        ->note->toBe('String value')
        ->numberOfEmployees->toBe(42)
        ->naceCode->toBe('String value')
        ->landedCostSupplier->toBe(true)
        ->currencyOverride->toBe(true)
        ->currencyRateOverride->toBe(true)
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the supplierPutBysupplierCdRequest method in the Supplier resource', function () {
    $bodyData = new SupplierUpdateDto(
        number: 'String value',
        name: 'String value',
        status: 'String value',
        accountReference: 'String value',
        numberOfEmployees: 42,
        parentRecordNumber: 'String value',
        supplierClassId: 'mock-id-123',
        overrideWithClassValues: true,
        creditTermsId: 'mock-id-123',
        documentLanguage: 'String value',
        currencyId: 'mock-id-123',
        currencyOverride: true,
        currencyRateOverride: true,
        paymentMethodId: 'mock-id-123',
        cashAccount: 'String value',
        paymentLeadTime: 42,
        paymentRefDisplayMask: 'String value',
        paySeparately: true,
        vatRegistrationId: 'mock-id-123',
        corporateId: 'mock-id-123',
        vatZoneId: 'mock-id-123',
        chargeBearer: 'String value',
        accountUsedForPayment: 'String value',
        paymentBy: 'String value',
        mainAddress: null,
        mainContact: null,
        remitAddress: null,
        remitContact: null,
        supplierAddress: null,
        supplierContact: null,
        glAccounts: null,
        supplierPaymentMethodDetails: [],
        attributeLines: [],
        retainageCashAccountId: 'mock-id-123',
        retainageApply: true,
        retainagePct: 42,
        note: 'String value',
        overrideNumberSeries: true,
        naceCode: 'String value',
        landedCostSupplier: true
    );

    Saloon::fake([
        SupplierPutBysupplierCdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SupplierPutBysupplierCdRequest(
        supplierCd: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierPutBysupplierCdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the supplierGetAllRequest method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetAllRequest::class => MockResponse::make([
            0 => [
                'internalId' => 42,
                'number' => 'String value',
                'name' => 'String value',
                'status' => 'String value',
                'mainAddress' => null,
                'mainContact' => null,
                'accountReference' => 'String value',
                'parentRecord' => null,
                'supplierClass' => null,
                'creditTerms' => null,
                'documentLanguage' => 'String value',
                'currencyId' => 'mock-id-123',
                'remitAddress' => null,
                'remitContact' => null,
                'paymentMethod' => null,
                'cashAccount' => 'String value',
                'chargeBearer' => 'String value',
                'accountUsedForPayment' => 'String value',
                'paymentBy' => 'String value',
                'paymentLeadTime' => 42,
                'paymentRefDisplayMask' => 'String value',
                'paySeparately' => true,
                'supplierAddress' => null,
                'supplierContact' => null,
                'location' => null,
                'vatRegistrationId' => 'mock-id-123',
                'corporateId' => 'mock-id-123',
                'vatZone' => null,
                'glAccounts' => null,
                'attributes' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'supplierPaymentMethodDetails' => [],
                'retainageApply' => true,
                'retainageCashAccountId' => 'mock-id-123',
                'retainagePct' => 42,
                'note' => 'String value',
                'numberOfEmployees' => 42,
                'naceCode' => 'String value',
                'landedCostSupplier' => true,
                'currencyOverride' => true,
                'currencyRateOverride' => true,
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
            1 => [
                'internalId' => 42,
                'number' => 'String value',
                'name' => 'String value',
                'status' => 'String value',
                'mainAddress' => null,
                'mainContact' => null,
                'accountReference' => 'String value',
                'parentRecord' => null,
                'supplierClass' => null,
                'creditTerms' => null,
                'documentLanguage' => 'String value',
                'currencyId' => 'mock-id-123',
                'remitAddress' => null,
                'remitContact' => null,
                'paymentMethod' => null,
                'cashAccount' => 'String value',
                'chargeBearer' => 'String value',
                'accountUsedForPayment' => 'String value',
                'paymentBy' => 'String value',
                'paymentLeadTime' => 42,
                'paymentRefDisplayMask' => 'String value',
                'paySeparately' => true,
                'supplierAddress' => null,
                'supplierContact' => null,
                'location' => null,
                'vatRegistrationId' => 'mock-id-123',
                'corporateId' => 'mock-id-123',
                'vatZone' => null,
                'glAccounts' => null,
                'attributes' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'supplierPaymentMethodDetails' => [],
                'retainageApply' => true,
                'retainageCashAccountId' => 'mock-id-123',
                'retainagePct' => 42,
                'note' => 'String value',
                'numberOfEmployees' => 42,
                'naceCode' => 'String value',
                'landedCostSupplier' => true,
                'currencyOverride' => true,
                'currencyRateOverride' => true,
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new SupplierGetAllRequest(
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        orderBy: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        name: 'test string',
        status: 'test string',
        vatRegistrationId: 'test string',
        corporateId: 'test string',
        attributes: 'test string',
        expandAccountInformation: true,
        expandNote: true,
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->internalId->toBe(42)
        ->number->toBe('String value')
        ->name->toBe('String value')
        ->status->toBe('String value')
        ->mainAddress->toBeNull()
        ->mainContact->toBeNull()
        ->accountReference->toBe('String value')
        ->parentRecord->toBeNull()
        ->supplierClass->toBeNull()
        ->creditTerms->toBeNull()
        ->documentLanguage->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->remitAddress->toBeNull()
        ->remitContact->toBeNull()
        ->paymentMethod->toBeNull()
        ->cashAccount->toBe('String value')
        ->chargeBearer->toBe('String value')
        ->accountUsedForPayment->toBe('String value')
        ->paymentBy->toBe('String value')
        ->paymentLeadTime->toBe(42)
        ->paymentRefDisplayMask->toBe('String value')
        ->paySeparately->toBe(true)
        ->supplierAddress->toBeNull()
        ->supplierContact->toBeNull()
        ->location->toBeNull()
        ->vatRegistrationId->toBe('mock-id-123')
        ->corporateId->toBe('mock-id-123')
        ->vatZone->toBeNull()
        ->glAccounts->toBeNull()
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->retainageApply->toBe(true)
        ->retainageCashAccountId->toBe('mock-id-123')
        ->retainagePct->toBe(42)
        ->note->toBe('String value')
        ->numberOfEmployees->toBe(42)
        ->naceCode->toBe('String value')
        ->landedCostSupplier->toBe(true)
        ->currencyOverride->toBe(true)
        ->currencyRateOverride->toBe(true)
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the supplierPostRequest method in the Supplier resource', function () {
    $bodyData = new SupplierUpdateDto(
        number: 'String value',
        name: 'String value',
        status: 'String value',
        accountReference: 'String value',
        numberOfEmployees: 42,
        parentRecordNumber: 'String value',
        supplierClassId: 'mock-id-123',
        overrideWithClassValues: true,
        creditTermsId: 'mock-id-123',
        documentLanguage: 'String value',
        currencyId: 'mock-id-123',
        currencyOverride: true,
        currencyRateOverride: true,
        paymentMethodId: 'mock-id-123',
        cashAccount: 'String value',
        paymentLeadTime: 42,
        paymentRefDisplayMask: 'String value',
        paySeparately: true,
        vatRegistrationId: 'mock-id-123',
        corporateId: 'mock-id-123',
        vatZoneId: 'mock-id-123',
        chargeBearer: 'String value',
        accountUsedForPayment: 'String value',
        paymentBy: 'String value',
        mainAddress: null,
        mainContact: null,
        remitAddress: null,
        remitContact: null,
        supplierAddress: null,
        supplierContact: null,
        glAccounts: null,
        supplierPaymentMethodDetails: [],
        attributeLines: [],
        retainageCashAccountId: 'mock-id-123',
        retainageApply: true,
        retainagePct: 42,
        note: 'String value',
        overrideNumberSeries: true,
        naceCode: 'String value',
        landedCostSupplier: true
    );

    Saloon::fake([
        SupplierPostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SupplierPostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierPostRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the supplierGetAllInvoicesForSupplierBysupplierNumberRequest method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetAllInvoicesForSupplierBysupplierNumberRequest::class => MockResponse::make([
            'taxDetailLines' => [],
            'attachments' => [],
            'approvalDetails' => null,
            'invoiceLines' => [],
            'landedCosts' => [],
            'hold' => true,
            'exchangeRate' => 42,
            'paymentRefNo' => 'String value',
            'creditTerms' => null,
            'retainageApply' => true,
            'cashDiscountDate' => '2025-11-22T10:40:04+00:00',
            'detailTotal' => 42,
            'detailTotalInCurrency' => 42,
            'discountTotal' => 42,
            'discountTotalInCurrency' => 42,
            'vatTaxableTotal' => 42,
            'vatTaxableTotalInCurrency' => 42,
            'vatExemptTotal' => 42,
            'vatExemptTotalInCurrency' => 42,
            'withholdingTax' => 42,
            'withholdingTaxInCurrency' => 42,
            'buyerReference' => 'String value',
            'roundingDiff' => 42,
            'roundingDiffInCurrency' => 42,
            'amount' => 42,
            'vatAmount' => 42,
            'taxCalculationMode' => 'String value',
            'supplierTaxZone' => null,
            'paySelected' => true,
            'curyRetainageTotal' => 42,
            'curyRetainageUnreleasedAmt' => 42,
            'documentVersionNumber' => 42,
            'supplier' => null,
            'documentType' => 'String value',
            'referenceNumber' => 'String value',
            'postPeriod' => 'String value',
            'financialPeriod' => 'String value',
            'date' => '2025-11-22T10:40:04+00:00',
            'origInvoiceDate' => '2025-11-22T10:40:04+00:00',
            'dueDate' => '2025-11-22T10:40:04+00:00',
            'approvalStatus' => 'String value',
            'status' => 'String value',
            'currencyId' => 'mock-id-123',
            'balance' => 42,
            'balanceInCurrency' => 42,
            'cashDiscount' => 42,
            'cashDiscountInCurrency' => 42,
            'paymentMethod' => null,
            'supplierReference' => 'String value',
            'description' => 'String value',
            'createdDateTime' => '2025-11-22T10:40:04+00:00',
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'note' => 'String value',
            'closedFinancialPeriod' => 'String value',
            'location' => null,
            'vatTotal' => 42,
            'vatTotalInCurrency' => 42,
            'branchNumber' => null,
            'payDate' => '2025-11-22T10:40:04+00:00',
            'paymentMessage' => 'String value',
            'cashAccount' => 'String value',
            'timeStamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new SupplierGetAllInvoicesForSupplierBysupplierNumberRequest(
        supplierNumber: 'test string',
        expandAttachment: true,
        expandLandedCosts: true,
        documentType: 'test string',
        released: 123,
        project: 'test string',
        expandApproval: true,
        expandNote: true,
        numberToRead: 123,
        skipRecords: 123,
        status: 'test string',
        expandLinePrebookAccounts: true,
        branch: 'test string',
        financialPeriod: 'test string',
        dueDate: 'test string',
        dueDateCondition: 'test string',
        docDate: 'test string',
        docDateCondition: 'test string',
        item: 'test string',
        balance: 123.45,
        balanceCondition: 'test string',
        greaterThanValue: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        createdDateTime: 'test string',
        createdDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierGetAllInvoicesForSupplierBysupplierNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->approvalDetails->toBeNull()
        ->hold->toBe(true)
        ->exchangeRate->toBe(42)
        ->paymentRefNo->toBe('String value')
        ->creditTerms->toBeNull()
        ->retainageApply->toBe(true)
        ->cashDiscountDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->detailTotal->toBe(42)
        ->detailTotalInCurrency->toBe(42)
        ->discountTotal->toBe(42)
        ->discountTotalInCurrency->toBe(42)
        ->vatTaxableTotal->toBe(42)
        ->vatTaxableTotalInCurrency->toBe(42)
        ->vatExemptTotal->toBe(42)
        ->vatExemptTotalInCurrency->toBe(42)
        ->withholdingTax->toBe(42)
        ->withholdingTaxInCurrency->toBe(42)
        ->buyerReference->toBe('String value')
        ->roundingDiff->toBe(42)
        ->roundingDiffInCurrency->toBe(42)
        ->amount->toBe(42)
        ->vatAmount->toBe(42)
        ->taxCalculationMode->toBe('String value')
        ->supplierTaxZone->toBeNull()
        ->paySelected->toBe(true)
        ->curyRetainageTotal->toBe(42)
        ->curyRetainageUnreleasedAmt->toBe(42)
        ->documentVersionNumber->toBe(42)
        ->supplier->toBeNull()
        ->documentType->toBe('String value')
        ->referenceNumber->toBe('String value')
        ->postPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->origInvoiceDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->dueDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->approvalStatus->toBe('String value')
        ->status->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->balance->toBe(42)
        ->balanceInCurrency->toBe(42)
        ->cashDiscount->toBe(42)
        ->cashDiscountInCurrency->toBe(42)
        ->paymentMethod->toBeNull()
        ->supplierReference->toBe('String value')
        ->description->toBe('String value')
        ->createdDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->note->toBe('String value')
        ->closedFinancialPeriod->toBe('String value')
        ->location->toBeNull()
        ->vatTotal->toBe(42)
        ->vatTotalInCurrency->toBe(42)
        ->branchNumber->toBeNull()
        ->payDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->paymentMessage->toBe('String value')
        ->cashAccount->toBe('String value')
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the supplierGetAllDocumentsForSupplierBysupplierNumberRequest method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetAllDocumentsForSupplierBysupplierNumberRequest::class => MockResponse::make([
            'account' => null,
            'subaccount' => null,
            'amount' => 42,
            'amountInCurrency' => 42,
            'branch' => null,
            'supplier' => null,
            'documentType' => 'String value',
            'referenceNumber' => 'String value',
            'postPeriod' => 'String value',
            'financialPeriod' => 'String value',
            'date' => '2025-11-22T10:40:04+00:00',
            'origInvoiceDate' => '2025-11-22T10:40:04+00:00',
            'dueDate' => '2025-11-22T10:40:04+00:00',
            'approvalStatus' => 'String value',
            'status' => 'String value',
            'currencyId' => 'mock-id-123',
            'balance' => 42,
            'balanceInCurrency' => 42,
            'cashDiscount' => 42,
            'cashDiscountInCurrency' => 42,
            'paymentMethod' => null,
            'supplierReference' => 'String value',
            'description' => 'String value',
            'createdDateTime' => '2025-11-22T10:40:04+00:00',
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'note' => 'String value',
            'closedFinancialPeriod' => 'String value',
            'location' => null,
            'vatTotal' => 42,
            'vatTotalInCurrency' => 42,
            'branchNumber' => null,
            'payDate' => '2025-11-22T10:40:04+00:00',
            'paymentMessage' => 'String value',
            'cashAccount' => 'String value',
            'timeStamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new SupplierGetAllDocumentsForSupplierBysupplierNumberRequest(
        supplierNumber: 'test string',
        documentType: 'test string',
        released: 123,
        project: 'test string',
        expandApproval: true,
        expandNote: true,
        numberToRead: 123,
        skipRecords: 123,
        status: 'test string',
        expandLinePrebookAccounts: true,
        branch: 'test string',
        financialPeriod: 'test string',
        dueDate: 'test string',
        dueDateCondition: 'test string',
        docDate: 'test string',
        docDateCondition: 'test string',
        item: 'test string',
        balance: 123.45,
        balanceCondition: 'test string',
        greaterThanValue: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        createdDateTime: 'test string',
        createdDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierGetAllDocumentsForSupplierBysupplierNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->account->toBeNull()
        ->subaccount->toBeNull()
        ->amount->toBe(42)
        ->amountInCurrency->toBe(42)
        ->branch->toBeNull()
        ->supplier->toBeNull()
        ->documentType->toBe('String value')
        ->referenceNumber->toBe('String value')
        ->postPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->origInvoiceDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->dueDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->approvalStatus->toBe('String value')
        ->status->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->balance->toBe(42)
        ->balanceInCurrency->toBe(42)
        ->cashDiscount->toBe(42)
        ->cashDiscountInCurrency->toBe(42)
        ->paymentMethod->toBeNull()
        ->supplierReference->toBe('String value')
        ->description->toBe('String value')
        ->createdDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->note->toBe('String value')
        ->closedFinancialPeriod->toBe('String value')
        ->location->toBeNull()
        ->vatTotal->toBe(42)
        ->vatTotalInCurrency->toBe(42)
        ->branchNumber->toBeNull()
        ->payDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->paymentMessage->toBe('String value')
        ->cashAccount->toBe('String value')
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the supplierGetSupplierBalanceBysupplierCdRequest method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetSupplierBalanceBysupplierCdRequest::class => MockResponse::make([
            'branchNumber' => 'String value',
            'supplier' => null,
            'balance' => 42,
            'unreleasedPurchasesNotInApproval' => null,
            'totalSentForApproval' => null,
            'totalPurchaseInvoicePeriod' => null,
            'totalPurchaseInvoiceYear' => null,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
        ], 200),
    ]);

    $request = new SupplierGetSupplierBalanceBysupplierCdRequest(
        supplierCd: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierGetSupplierBalanceBysupplierCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->branchNumber->toBe('String value')
        ->supplier->toBeNull()
        ->balance->toBe(42)
        ->unreleasedPurchasesNotInApproval->toBeNull()
        ->totalSentForApproval->toBeNull()
        ->totalPurchaseInvoicePeriod->toBeNull()
        ->totalPurchaseInvoiceYear->toBeNull()
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'));
});

it('calls the supplierGetSupplierPobalanceBysupplierCdRequest method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetSupplierPobalanceBysupplierCdRequest::class => MockResponse::make([
            'name' => 'Mock value',
        ], 200),
    ]);

    $request = new SupplierGetSupplierPobalanceBysupplierCdRequest(
        supplierCd: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierGetSupplierPobalanceBysupplierCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->name->toBe('Mock value');
});

it('calls the supplierGetAllContactForSupplierBysupplierCdRequest method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetAllContactForSupplierBysupplierCdRequest::class => MockResponse::make([
            'displayName' => 'String value',
            'active' => true,
            'title' => 'String value',
            'firstName' => 'String value',
            'lastName' => 'String value',
            'position' => 'String value',
            'businessAccount' => 'String value',
            'businessAccountType' => 'String value',
            'sameAsAccount' => true,
            'address' => null,
            'email' => 'test@example.com',
            'web' => 'String value',
            'phone1' => 'String value',
            'phone2' => 'String value',
            'phone3' => 'String value',
            'fax' => 'String value',
            'contactMethod' => 'String value',
            'doNotCall' => true,
            'doNotFax' => true,
            'doNotEmail' => true,
            'doNotMail' => true,
            'noMassMail' => true,
            'noMarketing' => true,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'contactId' => 42,
            'timeStamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new SupplierGetAllContactForSupplierBysupplierCdRequest(
        supplierCd: 'test string',
        displayName: 'test string',
        active: 'test string',
        firstName: 'test string',
        lastName: 'test string',
        businessAccount: 'test string',
        email: 'test string',
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        orderBy: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierGetAllContactForSupplierBysupplierCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->displayName->toBe('String value')
        ->active->toBe(true)
        ->title->toBe('String value')
        ->firstName->toBe('String value')
        ->lastName->toBe('String value')
        ->position->toBe('String value')
        ->businessAccount->toBe('String value')
        ->businessAccountType->toBe('String value')
        ->sameAsAccount->toBe(true)
        ->address->toBeNull()
        ->email->toBe('test@example.com')
        ->web->toBe('String value')
        ->phone1->toBe('String value')
        ->phone2->toBe('String value')
        ->phone3->toBe('String value')
        ->fax->toBe('String value')
        ->contactMethod->toBe('String value')
        ->doNotCall->toBe(true)
        ->doNotFax->toBe(true)
        ->doNotEmail->toBe(true)
        ->doNotMail->toBe(true)
        ->noMassMail->toBe(true)
        ->noMarketing->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->contactId->toBe(42)
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});
