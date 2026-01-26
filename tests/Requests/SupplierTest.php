<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetAllContactForSupplierBysupplierCdRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetAllDocumentsForSupplierBysupplierNumberRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetAllInvoicesForSupplierBysupplierNumberRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetAllSupplierBalanceCollectionRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetAllSupplierClassesCollectionRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetBysupplierCdRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetSpecificSupplierClassBysupplierClassIdRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetSupplierBalanceBysupplierCdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the supplierGetAllSupplierClassesCollection method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetAllSupplierClassesCollectionRequest::class => MockResponse::make([
            0 => [
                'attributes' => [],
                'paymentMethodId' => 'mock-id-123',
                'paymentMethodDescription' => 'Mock value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'description' => 'Mock value',
            ],
            1 => [
                'attributes' => [],
                'paymentMethodId' => 'mock-id-123',
                'paymentMethodDescription' => 'Mock value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'description' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new SupplierGetAllSupplierClassesCollectionRequest);

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (SupplierGetAllSupplierClassesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->paymentMethodId->toBe('mock-id-123')
        ->paymentMethodDescription->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->description->toBe('Mock value');
});

it('calls the supplierGetSpecificSupplierClassBysupplierClassId method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetSpecificSupplierClassBysupplierClassIdRequest::class => MockResponse::make([
            'attributes' => [],
            'paymentMethodId' => 'mock-id-123',
            'paymentMethodDescription' => 'Mock value',
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'description' => 'Mock value',
        ], 200),
    ]);

    $request = new SupplierGetSpecificSupplierClassBysupplierClassIdRequest(
        supplierClassIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierGetSpecificSupplierClassBysupplierClassIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->paymentMethodId->toBe('mock-id-123')
        ->paymentMethodDescription->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->description->toBe('Mock value');
});

it('calls the supplierGetAllSupplierBalanceCollection method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetAllSupplierBalanceCollectionRequest::class => MockResponse::make([
            0 => [
                'branchNumber' => 'Mock value',
                'supplier' => 'Mock value',
                'balance' => 3.14,
                'unreleasedPurchasesNotInApproval' => 'Mock value',
                'totalSentForApproval' => 'Mock value',
                'totalPurchaseInvoicePeriod' => 'Mock value',
                'totalPurchaseInvoiceYear' => 'Mock value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            ],
            1 => [
                'branchNumber' => 'Mock value',
                'supplier' => 'Mock value',
                'balance' => 3.14,
                'unreleasedPurchasesNotInApproval' => 'Mock value',
                'totalSentForApproval' => 'Mock value',
                'totalPurchaseInvoicePeriod' => 'Mock value',
                'totalPurchaseInvoiceYear' => 'Mock value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            ],
        ], 200),
    ]);

    $request = (new SupplierGetAllSupplierBalanceCollectionRequest(greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string'));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (SupplierGetAllSupplierBalanceCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->branchNumber->toBe('Mock value')
        ->supplier->toBe('Mock value')
        ->balance->toBe(3.14)
        ->unreleasedPurchasesNotInApproval->toBe('Mock value')
        ->totalSentForApproval->toBe('Mock value')
        ->totalPurchaseInvoicePeriod->toBe('Mock value')
        ->totalPurchaseInvoiceYear->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});

it('calls the supplierGetBysupplierCd method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetBysupplierCdRequest::class => MockResponse::make([
            'internalId' => 42,
            'number' => 'Mock value',
            'name' => 'Mock value',
            'status' => 'Mock value',
            'mainAddress' => 'Mock value',
            'mainContact' => 'Mock value',
            'accountReference' => 'Mock value',
            'parentRecord' => 'Mock value',
            'supplierClass' => 'Mock value',
            'creditTerms' => 'Mock value',
            'documentLanguage' => 'Mock value',
            'currencyId' => 'mock-id-123',
            'remitAddress' => 'Mock value',
            'remitContact' => 'Mock value',
            'paymentMethod' => 'Mock value',
            'cashAccount' => 'Mock value',
            'chargeBearer' => 'Mock value',
            'accountUsedForPayment' => 'Mock value',
            'paymentBy' => 'Mock value',
            'paymentLeadTime' => '2025-11-22T10:40:04.065Z',
            'paymentRefDisplayMask' => 'Mock value',
            'paySeparately' => true,
            'supplierAddress' => 'Mock value',
            'supplierContact' => 'Mock value',
            'location' => 'Mock value',
            'vatRegistrationId' => 'mock-id-123',
            'corporateId' => 'mock-id-123',
            'vatZone' => 'Mock value',
            'glAccounts' => 'Mock value',
            'attributes' => [],
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'supplierPaymentMethodDetails' => [],
            'retainageApply' => true,
            'retainageCashAccountId' => 'mock-id-123',
            'retainagePct' => 3.14,
            'note' => 'Mock value',
            'numberOfEmployees' => 42,
            'naceCode' => 'Mock value',
            'landedCostSupplier' => true,
            'currencyOverride' => true,
            'currencyRateOverride' => true,
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
        ], 200),
    ]);

    $request = new SupplierGetBysupplierCdRequest(
        supplierCdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierGetBysupplierCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->internalId->toBe(42)
        ->number->toBe('Mock value')
        ->name->toBe('Mock value')
        ->status->toBe('Mock value')
        ->mainAddress->toBe('Mock value')
        ->mainContact->toBe('Mock value')
        ->accountReference->toBe('Mock value')
        ->parentRecord->toBe('Mock value')
        ->supplierClass->toBe('Mock value')
        ->creditTerms->toBe('Mock value')
        ->documentLanguage->toBe('Mock value')
        ->currencyId->toBe('mock-id-123')
        ->remitAddress->toBe('Mock value')
        ->remitContact->toBe('Mock value')
        ->paymentMethod->toBe('Mock value')
        ->cashAccount->toBe('Mock value')
        ->chargeBearer->toBe('Mock value')
        ->accountUsedForPayment->toBe('Mock value')
        ->paymentBy->toBe('Mock value')
        ->paymentLeadTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->paymentRefDisplayMask->toBe('Mock value')
        ->paySeparately->toBeTrue()
        ->supplierAddress->toBe('Mock value')
        ->supplierContact->toBe('Mock value')
        ->location->toBe('Mock value')
        ->vatRegistrationId->toBe('mock-id-123')
        ->corporateId->toBe('mock-id-123')
        ->vatZone->toBe('Mock value')
        ->glAccounts->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->retainageApply->toBeTrue()
        ->retainageCashAccountId->toBe('mock-id-123')
        ->retainagePct->toBe(3.14)
        ->note->toBe('Mock value')
        ->numberOfEmployees->toBe(42)
        ->naceCode->toBe('Mock value')
        ->landedCostSupplier->toBeTrue()
        ->currencyOverride->toBeTrue()
        ->currencyRateOverride->toBeTrue()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the supplierGetAllCollection method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'internalId' => 42,
                'number' => 'Mock value',
                'name' => 'Mock value',
                'status' => 'Mock value',
                'mainAddress' => 'Mock value',
                'mainContact' => 'Mock value',
                'accountReference' => 'Mock value',
                'parentRecord' => 'Mock value',
                'supplierClass' => 'Mock value',
                'creditTerms' => 'Mock value',
                'documentLanguage' => 'Mock value',
                'currencyId' => 'mock-id-123',
                'remitAddress' => 'Mock value',
                'remitContact' => 'Mock value',
                'paymentMethod' => 'Mock value',
                'cashAccount' => 'Mock value',
                'chargeBearer' => 'Mock value',
                'accountUsedForPayment' => 'Mock value',
                'paymentBy' => 'Mock value',
                'paymentLeadTime' => '2025-11-22T10:40:04.065Z',
                'paymentRefDisplayMask' => 'Mock value',
                'paySeparately' => true,
                'supplierAddress' => 'Mock value',
                'supplierContact' => 'Mock value',
                'location' => 'Mock value',
                'vatRegistrationId' => 'mock-id-123',
                'corporateId' => 'mock-id-123',
                'vatZone' => 'Mock value',
                'glAccounts' => 'Mock value',
                'attributes' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'supplierPaymentMethodDetails' => [],
                'retainageApply' => true,
                'retainageCashAccountId' => 'mock-id-123',
                'retainagePct' => 3.14,
                'note' => 'Mock value',
                'numberOfEmployees' => 42,
                'naceCode' => 'Mock value',
                'landedCostSupplier' => true,
                'currencyOverride' => true,
                'currencyRateOverride' => true,
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'internalId' => 42,
                'number' => 'Mock value',
                'name' => 'Mock value',
                'status' => 'Mock value',
                'mainAddress' => 'Mock value',
                'mainContact' => 'Mock value',
                'accountReference' => 'Mock value',
                'parentRecord' => 'Mock value',
                'supplierClass' => 'Mock value',
                'creditTerms' => 'Mock value',
                'documentLanguage' => 'Mock value',
                'currencyId' => 'mock-id-123',
                'remitAddress' => 'Mock value',
                'remitContact' => 'Mock value',
                'paymentMethod' => 'Mock value',
                'cashAccount' => 'Mock value',
                'chargeBearer' => 'Mock value',
                'accountUsedForPayment' => 'Mock value',
                'paymentBy' => 'Mock value',
                'paymentLeadTime' => '2025-11-22T10:40:04.065Z',
                'paymentRefDisplayMask' => 'Mock value',
                'paySeparately' => true,
                'supplierAddress' => 'Mock value',
                'supplierContact' => 'Mock value',
                'location' => 'Mock value',
                'vatRegistrationId' => 'mock-id-123',
                'corporateId' => 'mock-id-123',
                'vatZone' => 'Mock value',
                'glAccounts' => 'Mock value',
                'attributes' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'supplierPaymentMethodDetails' => [],
                'retainageApply' => true,
                'retainageCashAccountId' => 'mock-id-123',
                'retainagePct' => 3.14,
                'note' => 'Mock value',
                'numberOfEmployees' => 42,
                'naceCode' => 'Mock value',
                'landedCostSupplier' => true,
                'currencyOverride' => true,
                'currencyRateOverride' => true,
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new SupplierGetAllCollectionRequest(greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', name: 'test string', status: 'test string', vatRegistrationId: 'test string', corporateId: 'test string', attributes: 'test string', expandAccountInformation: true, expandNote: true, pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (SupplierGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->internalId->toBe(42)
        ->number->toBe('Mock value')
        ->name->toBe('Mock value')
        ->status->toBe('Mock value')
        ->mainAddress->toBe('Mock value')
        ->mainContact->toBe('Mock value')
        ->accountReference->toBe('Mock value')
        ->parentRecord->toBe('Mock value')
        ->supplierClass->toBe('Mock value')
        ->creditTerms->toBe('Mock value')
        ->documentLanguage->toBe('Mock value')
        ->currencyId->toBe('mock-id-123')
        ->remitAddress->toBe('Mock value')
        ->remitContact->toBe('Mock value')
        ->paymentMethod->toBe('Mock value')
        ->cashAccount->toBe('Mock value')
        ->chargeBearer->toBe('Mock value')
        ->accountUsedForPayment->toBe('Mock value')
        ->paymentBy->toBe('Mock value')
        ->paymentLeadTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->paymentRefDisplayMask->toBe('Mock value')
        ->paySeparately->toBeTrue()
        ->supplierAddress->toBe('Mock value')
        ->supplierContact->toBe('Mock value')
        ->location->toBe('Mock value')
        ->vatRegistrationId->toBe('mock-id-123')
        ->corporateId->toBe('mock-id-123')
        ->vatZone->toBe('Mock value')
        ->glAccounts->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->retainageApply->toBeTrue()
        ->retainageCashAccountId->toBe('mock-id-123')
        ->retainagePct->toBe(3.14)
        ->note->toBe('Mock value')
        ->numberOfEmployees->toBe(42)
        ->naceCode->toBe('Mock value')
        ->landedCostSupplier->toBeTrue()
        ->currencyOverride->toBeTrue()
        ->currencyRateOverride->toBeTrue()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the supplierGetAllInvoicesForSupplierBysupplierNumber method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetAllInvoicesForSupplierBysupplierNumberRequest::class => MockResponse::make([
            'taxDetailLines' => [],
            'attachments' => [],
            'approvalDetails' => 'Mock value',
            'invoiceLines' => [],
            'landedCosts' => [],
            'hold' => true,
            'exchangeRate' => 3.14,
            'paymentRefNo' => 'Mock value',
            'creditTerms' => 'Mock value',
            'retainageApply' => true,
            'cashDiscountDate' => '2025-11-22T10:40:04.065Z',
            'detailTotal' => 3.14,
            'detailTotalInCurrency' => 3.14,
            'discountTotal' => 3.14,
            'discountTotalInCurrency' => 3.14,
            'vatTaxableTotal' => 3.14,
            'vatTaxableTotalInCurrency' => 3.14,
            'vatExemptTotal' => 3.14,
            'vatExemptTotalInCurrency' => 3.14,
            'withholdingTax' => 3.14,
            'withholdingTaxInCurrency' => 3.14,
            'buyerReference' => 'Mock value',
            'roundingDiff' => 3.14,
            'roundingDiffInCurrency' => 3.14,
            'amount' => 3.14,
            'vatAmount' => 3.14,
            'taxCalculationMode' => 'Mock value',
            'supplierTaxZone' => 'Mock value',
            'paySelected' => true,
            'curyRetainageTotal' => 3.14,
            'curyRetainageUnreleasedAmt' => 3.14,
            'documentVersionNumber' => 42,
            'supplier' => 'Mock value',
            'documentType' => 'Mock value',
            'referenceNumber' => 'Mock value',
            'postPeriod' => 'Mock value',
            'financialPeriod' => 'Mock value',
            'date' => '2025-11-22T10:40:04.065Z',
            'origInvoiceDate' => '2025-11-22T10:40:04.065Z',
            'dueDate' => '2025-11-22T10:40:04.065Z',
            'approvalStatus' => 'Mock value',
            'status' => 'Mock value',
            'currencyId' => 'mock-id-123',
            'balance' => 3.14,
            'balanceInCurrency' => 3.14,
            'cashDiscount' => 3.14,
            'cashDiscountInCurrency' => 3.14,
            'paymentMethod' => 'Mock value',
            'supplierReference' => 'Mock value',
            'description' => 'Mock value',
            'createdDateTime' => '2025-11-22T10:40:04.065Z',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'note' => 'Mock value',
            'closedFinancialPeriod' => 'Mock value',
            'location' => 'Mock value',
            'vatTotal' => 3.14,
            'vatTotalInCurrency' => 3.14,
            'branchNumber' => 'Mock value',
            'payDate' => '2025-11-22T10:40:04.065Z',
            'paymentMessage' => 'Mock value',
            'cashAccount' => 'Mock value',
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
        ], 200),
    ]);

    $request = new SupplierGetAllInvoicesForSupplierBysupplierNumberRequest(
        supplierNumberId: 'test string',
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
        ->approvalDetails->toBe('Mock value')
        ->hold->toBeTrue()
        ->exchangeRate->toBe(3.14)
        ->paymentRefNo->toBe('Mock value')
        ->creditTerms->toBe('Mock value')
        ->retainageApply->toBeTrue()
        ->cashDiscountDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->detailTotal->toBe(3.14)
        ->detailTotalInCurrency->toBe(3.14)
        ->discountTotal->toBe(3.14)
        ->discountTotalInCurrency->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->vatTaxableTotalInCurrency->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->vatExemptTotalInCurrency->toBe(3.14)
        ->withholdingTax->toBe(3.14)
        ->withholdingTaxInCurrency->toBe(3.14)
        ->buyerReference->toBe('Mock value')
        ->roundingDiff->toBe(3.14)
        ->roundingDiffInCurrency->toBe(3.14)
        ->amount->toBe(3.14)
        ->vatAmount->toBe(3.14)
        ->taxCalculationMode->toBe('Mock value')
        ->supplierTaxZone->toBe('Mock value')
        ->paySelected->toBeTrue()
        ->curyRetainageTotal->toBe(3.14)
        ->curyRetainageUnreleasedAmt->toBe(3.14)
        ->documentVersionNumber->toBe(42)
        ->supplier->toBe('Mock value')
        ->documentType->toBe('Mock value')
        ->referenceNumber->toBe('Mock value')
        ->postPeriod->toBe('Mock value')
        ->financialPeriod->toBe('Mock value')
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->origInvoiceDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->dueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->approvalStatus->toBe('Mock value')
        ->status->toBe('Mock value')
        ->currencyId->toBe('mock-id-123')
        ->balance->toBe(3.14)
        ->balanceInCurrency->toBe(3.14)
        ->cashDiscount->toBe(3.14)
        ->cashDiscountInCurrency->toBe(3.14)
        ->paymentMethod->toBe('Mock value')
        ->supplierReference->toBe('Mock value')
        ->description->toBe('Mock value')
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('Mock value')
        ->closedFinancialPeriod->toBe('Mock value')
        ->location->toBe('Mock value')
        ->vatTotal->toBe(3.14)
        ->vatTotalInCurrency->toBe(3.14)
        ->branchNumber->toBe('Mock value')
        ->payDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->paymentMessage->toBe('Mock value')
        ->cashAccount->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the supplierGetAllDocumentsForSupplierBysupplierNumber method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetAllDocumentsForSupplierBysupplierNumberRequest::class => MockResponse::make([
            'account' => 'Mock value',
            'subaccount' => 'Mock value',
            'amount' => 3.14,
            'amountInCurrency' => 3.14,
            'branch' => 'Mock value',
            'supplier' => 'Mock value',
            'documentType' => 'Mock value',
            'referenceNumber' => 'Mock value',
            'postPeriod' => 'Mock value',
            'financialPeriod' => 'Mock value',
            'date' => '2025-11-22T10:40:04.065Z',
            'origInvoiceDate' => '2025-11-22T10:40:04.065Z',
            'dueDate' => '2025-11-22T10:40:04.065Z',
            'approvalStatus' => 'Mock value',
            'status' => 'Mock value',
            'currencyId' => 'mock-id-123',
            'balance' => 3.14,
            'balanceInCurrency' => 3.14,
            'cashDiscount' => 3.14,
            'cashDiscountInCurrency' => 3.14,
            'paymentMethod' => 'Mock value',
            'supplierReference' => 'Mock value',
            'description' => 'Mock value',
            'createdDateTime' => '2025-11-22T10:40:04.065Z',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'note' => 'Mock value',
            'closedFinancialPeriod' => 'Mock value',
            'location' => 'Mock value',
            'vatTotal' => 3.14,
            'vatTotalInCurrency' => 3.14,
            'branchNumber' => 'Mock value',
            'payDate' => '2025-11-22T10:40:04.065Z',
            'paymentMessage' => 'Mock value',
            'cashAccount' => 'Mock value',
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
        ], 200),
    ]);

    $request = new SupplierGetAllDocumentsForSupplierBysupplierNumberRequest(
        supplierNumberId: 'test string',
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
        ->account->toBe('Mock value')
        ->subaccount->toBe('Mock value')
        ->amount->toBe(3.14)
        ->amountInCurrency->toBe(3.14)
        ->branch->toBe('Mock value')
        ->supplier->toBe('Mock value')
        ->documentType->toBe('Mock value')
        ->referenceNumber->toBe('Mock value')
        ->postPeriod->toBe('Mock value')
        ->financialPeriod->toBe('Mock value')
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->origInvoiceDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->dueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->approvalStatus->toBe('Mock value')
        ->status->toBe('Mock value')
        ->currencyId->toBe('mock-id-123')
        ->balance->toBe(3.14)
        ->balanceInCurrency->toBe(3.14)
        ->cashDiscount->toBe(3.14)
        ->cashDiscountInCurrency->toBe(3.14)
        ->paymentMethod->toBe('Mock value')
        ->supplierReference->toBe('Mock value')
        ->description->toBe('Mock value')
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('Mock value')
        ->closedFinancialPeriod->toBe('Mock value')
        ->location->toBe('Mock value')
        ->vatTotal->toBe(3.14)
        ->vatTotalInCurrency->toBe(3.14)
        ->branchNumber->toBe('Mock value')
        ->payDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->paymentMessage->toBe('Mock value')
        ->cashAccount->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the supplierGetSupplierBalanceBysupplierCd method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetSupplierBalanceBysupplierCdRequest::class => MockResponse::make([
            'branchNumber' => 'Mock value',
            'supplier' => 'Mock value',
            'balance' => 3.14,
            'unreleasedPurchasesNotInApproval' => 'Mock value',
            'totalSentForApproval' => 'Mock value',
            'totalPurchaseInvoicePeriod' => 'Mock value',
            'totalPurchaseInvoiceYear' => 'Mock value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
        ], 200),
    ]);

    $request = new SupplierGetSupplierBalanceBysupplierCdRequest(
        supplierCdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierGetSupplierBalanceBysupplierCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->branchNumber->toBe('Mock value')
        ->supplier->toBe('Mock value')
        ->balance->toBe(3.14)
        ->unreleasedPurchasesNotInApproval->toBe('Mock value')
        ->totalSentForApproval->toBe('Mock value')
        ->totalPurchaseInvoicePeriod->toBe('Mock value')
        ->totalPurchaseInvoiceYear->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});

it('calls the supplierGetAllContactForSupplierBysupplierCd method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetAllContactForSupplierBysupplierCdRequest::class => MockResponse::make([
            'displayName' => 'Mock value',
            'active' => true,
            'title' => 'Mock value',
            'firstName' => 'Mock value',
            'lastName' => 'Mock value',
            'position' => 'Mock value',
            'businessAccount' => 'Mock value',
            'businessAccountType' => 'Mock value',
            'sameAsAccount' => true,
            'address' => 'Mock value',
            'email' => 'test@example.com',
            'web' => 'Mock value',
            'phone1' => 'Mock value',
            'phone2' => 'Mock value',
            'phone3' => 'Mock value',
            'fax' => 'Mock value',
            'contactMethod' => 'Mock value',
            'doNotCall' => true,
            'doNotFax' => true,
            'doNotEmail' => true,
            'doNotMail' => true,
            'noMassMail' => true,
            'noMarketing' => true,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'contactId' => 42,
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
        ], 200),
    ]);

    $request = new SupplierGetAllContactForSupplierBysupplierCdRequest(
        supplierCdId: 'test string',
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
        ->displayName->toBe('Mock value')
        ->active->toBeTrue()
        ->title->toBe('Mock value')
        ->firstName->toBe('Mock value')
        ->lastName->toBe('Mock value')
        ->position->toBe('Mock value')
        ->businessAccount->toBe('Mock value')
        ->businessAccountType->toBe('Mock value')
        ->sameAsAccount->toBeTrue()
        ->address->toBe('Mock value')
        ->email->toBe('test@example.com')
        ->web->toBe('Mock value')
        ->phone1->toBe('Mock value')
        ->phone2->toBe('Mock value')
        ->phone3->toBe('Mock value')
        ->fax->toBe('Mock value')
        ->contactMethod->toBe('Mock value')
        ->doNotCall->toBeTrue()
        ->doNotFax->toBeTrue()
        ->doNotEmail->toBeTrue()
        ->doNotMail->toBeTrue()
        ->noMassMail->toBeTrue()
        ->noMarketing->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->contactId->toBe(42)
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
