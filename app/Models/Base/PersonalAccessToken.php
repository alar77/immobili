<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PersonalAccessToken
 * 
 * @property int $id
 * @property string $tokenable_type
 * @property int $tokenable_id
 * @property string $name
 * @property string $token
 * @property string|null $abilities
 * @property Carbon|null $last_used_at
 * @property Carbon|null $expires_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models\Base
 */
class PersonalAccessToken extends Model
{
	const ID = 'id';
	const TOKENABLE_TYPE = 'tokenable_type';
	const TOKENABLE_ID = 'tokenable_id';
	const NAME = 'name';
	const TOKEN = 'token';
	const ABILITIES = 'abilities';
	const LAST_USED_AT = 'last_used_at';
	const EXPIRES_AT = 'expires_at';
	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
	protected $table = 'personal_access_tokens';

	protected $casts = [
		self::ID => 'int',
		self::TOKENABLE_ID => 'int',
		self::LAST_USED_AT => 'datetime',
		self::EXPIRES_AT => 'datetime',
		self::CREATED_AT => 'datetime',
		self::UPDATED_AT => 'datetime'
	];

	protected $fillable = [
		self::TOKENABLE_TYPE,
		self::TOKENABLE_ID,
		self::NAME,
		self::TOKEN,
		self::ABILITIES,
		self::LAST_USED_AT,
		self::EXPIRES_AT
	];
}
