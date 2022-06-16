<?php

namespace Rappasoft\LaravelLivewireTables\Traits;

use Illuminate\Support\Collection;
use Rappasoft\LaravelLivewireTables\Traits\Helpers\ColumnHelpers;
use Rappasoft\LaravelLivewireTables\Views\ColumnGroup;

trait WithColumns
{
    use ColumnHelpers;

    protected Collection $columns;

    public function bootWithColumns(): void
    {
        $this->columns = collect();
    }
}
