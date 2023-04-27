<?php

namespace App\Models;

use App\Models\Base\PasswordReset as BasePasswordReset;

class PasswordReset extends BasePasswordReset
{
	protected $hidden = [
		self::TOKEN
	];
}
