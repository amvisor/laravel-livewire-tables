<?php

namespace Rappasoft\LaravelLivewireTables\Views;

use Illuminate\Support\Collection;

class ColumnGroup
{
    public Collection $columns;

    public bool $visible = true;

    public function __construct(
        public string|null $title
        ) {
        }

    public static function make(string $title): static
    {
        return new static ($title);
    }

    public function columns(array $columns): self
    {
        $this->columns = collect($columns);

        return $this;
    }

    public function isVisible(): bool
    {
        return $this->visible;
    }

    public function isSelectable(): bool
    {
        return false;
    }

    public function isSelected(): bool
    {
        return false;
    }

}
