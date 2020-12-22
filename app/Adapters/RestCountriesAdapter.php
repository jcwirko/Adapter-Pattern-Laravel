<?php

namespace App\Adapters;

use App\Contracts\CountriesInterface;
use Illuminate\Support\Facades\Http;

class RestCountriesAdapter implements CountriesInterface
{
    private $endpoint;

    public function __construct()
    {
        $this->endpoint = 'https://restcountries.eu/rest/v2/';
    }

    public function getCountries()
    {
        $response = Http::get("{$this->endpoint}all");

        return $response->json();
    }

    public function getCountryByName(string $name)
    {
        $response = Http::get("{$this->endpoint}name/$name");

        return $response->json();
    }

    public function getCountryByCapital(string $capital)
    {
        $response = Http::get("{$this->endpoint}capital/$capital");

        return $response->json();
    }
}
