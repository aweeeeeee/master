<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyVideoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function index()
    {
        return view('frontend.pages.my-videos');
    }
    
    public function VideoTracker()
    {
        return view('frontend.pages.my-videos.video-tracker');
    }
    
    
    public function VoiceOversMusic()
    {
        return view('frontend.pages.video-creator.voice-overs-music');
    }
    
    public function VoiceOversVoice()
    {
        return view('frontend.pages.video-creator.voice-overs-voice');
    }
    
    public function ExplorePicture()
    {
        return view('frontend.pages.video-creator.explore-picture');
    }
    
    public function AutomaticVideoOrder()
    {
        return view('frontend.pages.video-creator.automatic-video-order');
    }
    public function ManualVideoOrder()
    {
        return view('frontend.pages.video-creator.manual-video-order');
    }
    public function CustomVideoOrder()
    {
        return view('frontend.pages.video-creator.custom-video-order');
    }
    public function PremiumVideo()
    {
        return view('frontend.pages.video-creator.premium-video');
    }
    public function TaxInvoice()
    {
        return view('frontend.pages.video-creator.tax-invoice');
    }
    public function MakeVideo()
    {
        return view('frontend.pages.video-creator.make-video');
    }
    public function BillingHistory()
    {
        return view('frontend.pages.video-creator.billing-history');
    }
    public function Template()
    {
        return view('frontend.pages.preferences.template');
    }
    public function VideoSystemPictures()
    {
        return view('frontend.pages.preferences.video-system.manual-video-pictures');
    }
    public function VideoSystemScript()
    {
        return view('frontend.pages.preferences.video-system.manual-video-script');
    }
    public function VideoSystemTemplate()
    {
        return view('frontend.pages.preferences.video-system.manual-video-template');
    }
    public function VideoSystemVoice()
    {
        return view('frontend.pages.preferences.video-system.manual-video-voice-music');
    }
    public function VideoSystemFinish()
    {
        return view('frontend.pages.preferences.video-system.manual-video-finish');
    }
    public function Preferences()
    {
        return view('frontend.pages.preferences.preferences');
    }
    public function PremiumVideoScript()
    {
        return view('frontend.pages.preferences.premium-video-script');
    }
    public function PremiumVideoPicture()
    {
        return view('frontend.pages.preferences.premium-video-picture');
    }
    public function PremiumVideoUpdate()
    {
        return view('frontend.pages.preferences.premium-video-update');
    }
    public function PremiumVideoStoryboard()
    {
        return view('frontend.pages.preferences.premium-video-storyboard');
    }
    public function PremiumVideoVoiceMusic()
    {
        return view('frontend.pages.preferences.premium-video-voice-music');
    }
    public function Help()
    {
        return view('frontend.pages.my-account.help');
    }
    public function DirectUpload()
    {
        return view('frontend.pages.make-video.direct-upload');
    }
    public function Toolset()
    {
        return view('frontend.pages.toolset');
    }
}
