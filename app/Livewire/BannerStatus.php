<?php

namespace App\Livewire;
use App\Models\MainBanner;
use Livewire\Component;

class BannerStatus extends Component
{
    public function status($id)
    {
        $banner = MainBanner::find($id);
        if($banner->status == '1'){
            $banner->status = '0';
        }else{
            $banner->status = '1';
        }
        $banner->update();
    }
    public function render()
    {
        $banners = MainBanner::all();
        return view('livewire.banner-status', compact('banners'));
    }
}
