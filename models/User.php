<?php

namespace Models;

use \Illuminate\Database\Eloquent\Model;
use Webmozart\Assert\Assert;

class User extends Model{

	protected $table = 'users';
	protected $fillable = ['name', 'document', 'email', 'password', 'country'];

	public function rulesName(string $input)
	{
		Assert::stringNotEmpty($input, 'No pueder ser vacio');
		Assert::minLength($input, 3, 'Debe tener minimo 3 caracteres');

		return $input;
	}

	public function rulesDocument(string $input)
	{
		Assert::stringNotEmpty($input, 'No pueder ser vacio');

		return $input;
	}

	public function rulesEmail(string $input)
	{
		Assert::stringNotEmpty($input, 'No pueder ser vacio');
		Assert::email($input, $message = 'Debe ser un email valido');

		return $input;
	}

	public function rulesCountry(string $input)
	{
		Assert::stringNotEmpty($input, 'No pueder ser vacio');

		return $input;
	}

	public function rulesPassword(string $input)
	{
		Assert::stringNotEmpty($input, 'No pueder ser vacio');
		Assert::minLength($input, 6, 'Debe tener minimo 6 caracteres');
		Assert::regex($input, '{^(?:.*\\d.*){1}$}', 'Debe tener almenos 1 digito');

		return $input;
	}
}