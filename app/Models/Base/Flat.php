<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\FlatsOwner;
use App\Models\Owner;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Flat
 * 
 * @property int $id
 * @property string $shortName
 * @property string $comune
 * @property string $cap
 * @property string $indirizzo
 * @property string|null $sezione
 * @property int|null $foglio
 * @property int|null $particalla
 * @property int|null $subalterno
 * @property Carbon|null $possesso
 * @property Carbon|null $compromesso
 * @property Carbon|null $rogito
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Owner[] $owners
 *
 * @package App\Models\Base
 */
class Flat extends Model
{
	const ID = 'id';
	const SHORTNAME = 'shortName';
	const COMUNE = 'comune';
	const CAP = 'cap';
	const INDIRIZZO = 'indirizzo';
	const SEZIONE = 'sezione';
	const FOGLIO = 'foglio';
	const PARTICALLA = 'particalla';
	const SUBALTERNO = 'subalterno';
	const POSSESSO = 'possesso';
	const COMPROMESSO = 'compromesso';
	const ROGITO = 'rogito';
	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
	protected $table = 'flats';

	protected $casts = [
		self::ID => 'int',
		self::FOGLIO => 'int',
		self::PARTICALLA => 'int',
		self::SUBALTERNO => 'int',
		self::POSSESSO => 'datetime',
		self::COMPROMESSO => 'datetime',
		self::ROGITO => 'datetime',
		self::CREATED_AT => 'datetime',
		self::UPDATED_AT => 'datetime'
	];

	protected $fillable = [
		self::SHORTNAME,
		self::COMUNE,
		self::CAP,
		self::INDIRIZZO,
		self::SEZIONE,
		self::FOGLIO,
		self::PARTICALLA,
		self::SUBALTERNO,
		self::POSSESSO,
		self::COMPROMESSO,
		self::ROGITO
	];

	public function owners(): BelongsToMany
	{
		return $this->belongsToMany(Owner::class, 'flats_owners')
					->withPivot(FlatsOwner::ID, FlatsOwner::ROLE)
					->withTimestamps();
	}
}
