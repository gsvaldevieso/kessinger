<?php

namespace Tests\Feature;

use Tests\TestCase;

class CpfValidationTest extends TestCase {

	public function test_CPF_Ideal() {
		$this->assertTrue(\App\Profile::validateCPF('09720002913'));
	}

	public function test_CPF_ComFormatacao_Ideal() {
		$this->assertTrue(\App\Profile::validateCPF('097.200.029-13'));
	}

	public function test_CPF_CaracteresEspeciais_Falha() {
		$this->assertFalse(\App\Profile::validateCPF('!@#$%ˆ&*()_)(*&ˆ%$#$%ˆ&'));
	}

	public function test_CPF_Vazio_Falha() {
		$this->assertFalse(\App\Profile::validateCPF(''));
	}

	public function test_CPF_Incorreto_Falha() {
		$this->assertFalse(\App\Profile::validateCPF('87394573838'));
	}

	public function test_CPF_CNPJ_Falha() {
		$this->assertFalse(\App\Profile::validateCPF('73.729.009/0001-01'));
	}

	public function test_CPF_Palavra_Falha() {
		$this->assertFalse(\App\Profile::validateCPF('TestandoCPF'));
	}

}
