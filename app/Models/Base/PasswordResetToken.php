<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PasswordResetToken
 * 
 * @property string $email
 * @property string $token
 * @property Carbon|null $created_at
 *
 * @package App\Models\Base
 */
class PasswordResetToken extends Model
{
	const EMAIL = 'email';
	const TOKEN = 'token';
	const CREATED_AT = 'created_at';
	protected $table = 'password_reset_tokens';
	protected $primaryKey = 'email';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		self::CREATED_AT => 'datetime'
	];

	protected $fillable = [
		self::TOKEN
	];
}
