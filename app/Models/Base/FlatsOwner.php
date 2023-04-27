<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Flat;
use App\Models\Owner;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class FlatsOwner
 * 
 * @property int $id
 * @property int $owner_id
 * @property int $flat_id
 * @property string $role
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Flat $flat
 * @property Owner $owner
 *
 * @package App\Models\Base
 */
class FlatsOwner extends Model
{
	const ID = 'id';
	const OWNER_ID = 'owner_id';
	const FLAT_ID = 'flat_id';
	const ROLE = 'role';
	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
	protected $table = 'flats_owners';

	protected $casts = [
		self::ID => 'int',
		self::OWNER_ID => 'int',
		self::FLAT_ID => 'int',
		self::CREATED_AT => 'datetime',
		self::UPDATED_AT => 'datetime'
	];

	protected $fillable = [
		self::OWNER_ID,
		self::FLAT_ID,
		self::ROLE
	];

	public function flat(): BelongsTo
	{
		return $this->belongsTo(Flat::class);
	}

	public function owner(): BelongsTo
	{
		return $this->belongsTo(Owner::class);
	}
}
