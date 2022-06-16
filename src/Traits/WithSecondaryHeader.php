<?php

namespace Rappasoft\LaravelLivewireTables\Traits;

use Rappasoft\LaravelLivewireTables\Traits\Configuration\SecondaryHeaderConfiguration;
use Rappasoft\LaravelLivewireTables\Traits\Helpers\SecondaryHeaderHelpers;
use Rappasoft\LaravelLivewireTables\Views\Column;

trait WithSecondaryHeader
{
    use SecondaryHeaderConfiguration,
        SecondaryHeaderHelpers;

    protected bool $secondaryHeaderStatus = true;
    protected bool $columnsWithSecondaryHeader = false;
    protected $secondaryHeaderTrAttributesCallback;
    protected $secondaryHeaderTdAttributesCallback;

    public function setupSecondaryHeader(): void
    {
        foreach ($this->getColumns() as $column) {
            if ($column instanceof Column && $column->hasSecondaryHeader()) {
                $this->columnsWithSecondaryHeader = true;
            }
        }
    }
}
