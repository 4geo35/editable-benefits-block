<?php

namespace GIS\EditableBenefitsBlock;


use GIS\EditableBenefitsBlock\Livewire\Admin\Types\BenefitsWire;
use GIS\EditableBlocks\Traits\ExpandBlocksTrait;
use GIS\Fileable\Traits\ExpandTemplatesTrait;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class EditableBenefitsBlockServiceProvider extends ServiceProvider
{
    use ExpandBlocksTrait, ExpandTemplatesTrait;

    public function register(): void
    {
        // Config
        $this->mergeConfigFrom(__DIR__ . "/config/editable-benefits-block.php", "editable-benefits-block");
    }

    public function boot(): void
    {
        // Views
        $this->loadViewsFrom(__DIR__ . "/resources/views", "ebb");
        // Livewire
        $this->addLivewireComponents();
        // Config
        $this->expandConfiguration();
    }

    protected function addLivewireComponents(): void
    {
        $component = config("editable-benefits-block.customBenefitsComponent");
        Livewire::component(
            "ebb-benefits",
            $component ?? BenefitsWire::class
        );
    }

    protected function expandConfiguration(): void
    {
        $ebb = app()->config["editable-benefits-block"];
        $this->expandTemplates($ebb);
        $this->expandBlocks($ebb);
    }
}
