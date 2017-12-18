<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Profile;

class NameValidationTest extends TestCase
{
    public function testShouldPassForValidName()
    {
    	$name = 'Tamires Ganzert Bespalhok';
        $this->assertTrue(Profile::validateName($name));
    }

	public function testShouldPassForComplexName()
    {
    	$name = 'João Péricles Tomás';
        $this->assertTrue(Profile::validateName($name));
    }

	public function testShouldFailForNumberInName()
    {
    	$name = '123Tamires Ganzert Bespalhok123';
        $this->assertFalse(Profile::validateName($name));
    }

    public function testShouldFailForInvalidCharactersName()
    {
    	$name = 'Tamires !##$!@%!@#$ Bespalhok';
        $this->assertFalse(Profile::validateName($name));
    }

    public function testShouldFailForEmptyName()
    {
    	$name = '       ';
        $this->assertFalse(Profile::validateName($name));
    }

    public function testShouldFailForNullName()
    {
    	$name = null;
        $this->assertFalse(Profile::validateName($name));
    }
}
