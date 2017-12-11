<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Profile;

class CepValidationTest extends TestCase
{
    public function testShouldReturnTrueWhenValidCep()
    {
        $this->assertTrue(Profile::validarCep('87020-410'));
        $this->assertTrue(Profile::validarCep('47850-000'));
    }

    public function testShouldFailWhenInvalidString()
    {
        $this->assertFalse(Profile::validarCep('INVALIDCEP'));
    }

    public function testShouldFailWhenArbitraryDigits()
    {
        $this->assertFalse(Profile::validarCep('2134092185045'));
    }

 	public function testShouldFailWhenHifenNotSent()
    {
        $this->assertFalse(Profile::validarCep('47850000'));
    }

	public function testShouldFailWhenEmptyString()
    {
        $this->assertFalse(Profile::validarCep(''));
    }

	public function testShouldFailWhenNullIsSent()
    {
        $this->assertFalse(Profile::validarCep(null));
    }

	public function testShouldFailWhenSpecialCharacters()
    {
        $this->assertFalse(Profile::validarCep('!@#$%*()_+'));
    }
}
