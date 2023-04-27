<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Flat;

class FlatTable extends DataTableComponent
{
    protected $model = Flat::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("ShortName", "shortName")
                ->sortable(),
            Column::make("Comune", "comune")
                ->sortable(),
            Column::make("Cap", "cap")
                ->sortable(),
            Column::make("Indirizzo", "indirizzo")
                ->sortable(),
            Column::make("Sezione", "sezione")
                ->sortable(),
            Column::make("Foglio", "foglio")
                ->sortable(),
            Column::make("Particalla", "particalla")
                ->sortable(),
            Column::make("Subalterno", "subalterno")
                ->sortable(),
            Column::make("Possesso", "possesso")
                ->sortable(),
            Column::make("Compromesso", "compromesso")
                ->sortable(),
            Column::make("Rogito", "rogito")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
