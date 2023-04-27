<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Flat;
use App\Models\FlatsOwner;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Owner
 * 
 * @property int $id
 * @property string $name
 * @property string $cf
 * 
 * @property Collection|Flat[] $flats
 *
 * @package App\Models\Base
 */
class Owner extends Model
{
	const ID = 'id';
	const NAME = 'name';
	const CF = 'cf';
	protected $table = 'owners';
	public $timestamps = false;

	protected $casts = [
		self::ID => 'int'
	];

	protected $fillable = [
		self::NAME,
		self::CF
	];

	public function flats(): BelongsToMany
	{
		return $this->belongsToMany(Flat::class, 'flats_owners')
					->withPivot(FlatsOwner::ID, FlatsOwner::ROLE)
					->withTimestamps();
	}
}
