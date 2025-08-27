<?php

namespace App\Http\Controllers\Innerpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnValueMap;

class InnerController extends Controller
{
    public function biamp()
    {
        return view('frontend.brand-inner-page.biamp');
    }
    public function powersoft()
    {
        return view('frontend.brand-inner-page.powersoft');
    }
       public function audix()
    {
        return view('frontend.brand-inner-page.audix');
    }
    public function void(){
        return view('frontend.brand-inner-page.void');
    }
    public function cloud(){
        return view('frontend.brand-inner-page.cloud');
    }
    /*service page*/
    public function distribution()
    {
        return view('frontend.services-inner-page.distribution');
    }
    public function projectManagement()
    {
        return view('frontend.services-inner-page.project-management');
    }
    public function ease_simulation()
    {
        return view('frontend.services-inner-page.ease-simulation');
    }
    public function goldenear(){
        return view('frontend.brand-inner-page.goldenear');
    }
    public function JL_Audio(){
      return view('frontend.brand-inner-page.jl_audio');
    }
    public  function commercialLoudspeaker(){
        return view('frontend.productsInner.CommercialLoudspeakers');
    }
}
