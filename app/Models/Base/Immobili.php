<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Immobili
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
 * @property string $proprietario
 * @property string|null $usufruttuario
 * @property Carbon $possesso
 * @property Carbon $compromesso
 * @property Carbon $rogito
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models\Base
 */
class Immobili extends Model
{
	const ID = 'id';
	const SHORT_NAME = 'shortName';
	const COMUNE = 'comune';
	const CAP = 'cap';
	const INDIRIZZO = 'indirizzo';
	const SEZIONE = 'sezione';
	const FOGLIO = 'foglio';
	const PARTICALLA = 'particalla';
	const SUBALTERNO = 'subalterno';
	const PROPRIETARIO = 'proprietario';
	const USUFRUTTUARIO = 'usufruttuario';
	const POSSESSO = 'possesso';
	const COMPROMESSO = 'compromesso';
	const ROGITO = 'rogito';
	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
	protected $table = 'immobili';

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
		self::PROPRIETARIO,
		self::USUFRUTTUARIO,
		self::POSSESSO,
		self::COMPROMESSO,
		self::ROGITO
	];
}
