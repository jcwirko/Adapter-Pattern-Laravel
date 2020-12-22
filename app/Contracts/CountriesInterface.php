<?php

namespace App\Contracts;

interface CountriesInterface
{
    public function getCountries();
    public function getCountryByName(string $name);
    public function getCountryByCapital(string $capital);
}
