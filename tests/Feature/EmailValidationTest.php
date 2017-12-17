<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Profile;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EmailValidationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testShouldPassIfValidEmail()
    {
        $this->assertTrue(Profile::validaEmail('gustavo@gmail.com'));
    }

    public function testShouldFailIfInvalidEmail()
    {
    	$this->assertTrue(Profile::validaEmail('@gmail'));	
    }

    public function testShouldFailIfSimpleString()
    {
    	$this->assertTrue(Profile::validaEmail('teste'));	
    }

    public function testShouldFailIfOnlyAt()
    {
    	$this->assertTrue(Profile::validaEmail('@'));	
    }

    public function testShouldFailIfItLacksDotCom()
    {
    	$this->assertTrue(Profile::validaEmail('teste@gmail'));	
    }

    public function testShouldFailWhenEmptyString()
    {
    	$this->assertTrue(Profile::validaEmail(''));	
    }

    public function testShouldFailWhenSpecialCharacters()
    {
    	$this->assertTrue(Profile::validaEmail('$%^&##@'));	
    }
}
