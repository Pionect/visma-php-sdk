<?php

// auto-generated

use Pionect\VismaSdk\Requests\Multilanguage\MultilanguageGetAllActiveLanguagesCollectionRequest;
use Pionect\VismaSdk\Requests\Multilanguage\MultilanguageGetInventoryTranslationsByinventoryNumberRequest;
use Pionect\VismaSdk\Requests\Multilanguage\MultilanguageGetSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the multilanguageGetSpecificInventoryDescrTranslationByinventoryNumberlanguageIso method in the Multilanguage resource', function () {
    Saloon::fake([
        MultilanguageGetSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest::class => MockResponse::make([
            'languageIso' => 'Mock value',
            'translation' => 'Mock value',
            'isTranslated' => true,
        ], 200),
    ]);

    $request = new MultilanguageGetSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest(
        inventoryNumberId: 'test string',
        languageIsoId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(MultilanguageGetSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->languageIso->toBe('Mock value')
        ->translation->toBe('Mock value')
        ->isTranslated->toBeTrue();
});

it('calls the multilanguageGetInventoryTranslationsByinventoryNumber method in the Multilanguage resource', function () {
    Saloon::fake([
        MultilanguageGetInventoryTranslationsByinventoryNumberRequest::class => MockResponse::make([
            'languageIso' => 'Mock value',
            'translation' => 'Mock value',
            'isTranslated' => true,
        ], 200),
    ]);

    $request = new MultilanguageGetInventoryTranslationsByinventoryNumberRequest(
        inventoryNumberId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(MultilanguageGetInventoryTranslationsByinventoryNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->languageIso->toBe('Mock value')
        ->translation->toBe('Mock value')
        ->isTranslated->toBeTrue();
});

it('calls the multilanguageGetAllActiveLanguagesCollection method in the Multilanguage resource', function () {
    Saloon::fake([
        MultilanguageGetAllActiveLanguagesCollectionRequest::class => MockResponse::make([
            0 => [
                'isDefault' => true,
                'languageIso' => 'Mock value',
                'nativeName' => 'Mock value',
                'isActive' => true,
            ],
            1 => [
                'isDefault' => true,
                'languageIso' => 'Mock value',
                'nativeName' => 'Mock value',
                'isActive' => true,
            ],
        ], 200),
    ]);

    $request = (new MultilanguageGetAllActiveLanguagesCollectionRequest);

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (MultilanguageGetAllActiveLanguagesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->isDefault->toBeTrue()
        ->languageIso->toBe('Mock value')
        ->nativeName->toBe('Mock value')
        ->isActive->toBeTrue();
});
