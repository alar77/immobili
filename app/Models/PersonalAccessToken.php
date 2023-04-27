<?php

namespace App\Models;

use App\Models\Base\PersonalAccessToken as BasePersonalAccessToken;

class PersonalAccessToken extends BasePersonalAccessToken
{
	protected $hidden = [
		self::TOKEN
	];
}
