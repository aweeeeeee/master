<?php

Route::get('/', function () {
    return view('frontend.pages.frontpage');
});

Route::get('/use-revid/help-sell', function () {
    return view('frontend.pages.use-revid.use-revid-sell');
});

Route::get('/use-revid/social-media', function () {
    return view('frontend.pages.use-revid.use-revid-social');
});

Route::get('/use-revid/marketing', function () {
    return view('frontend.pages.use-revid.use-revid-marketing');
});

Route::get('/use-revid/email', function () {
    return view('frontend.pages.use-revid.use-revid-email');
});

Route::get('/use-revid/website', function () {
    return view('frontend.pages.use-revid.use-revid-website');
});

Route::get('/use-revid/corporate', function () {
    return view('frontend.pages.use-revid.use-revid-corporate');
});

Route::get('/use-revid/affordable', function () {
    return view('frontend.pages.use-revid.use-revid-affordable');
});

Route::get('/use-revid/easy', function () {
    return view('frontend.pages.use-revid.use-revid-easy');
});

Route::get('/use-revid/buyers', function () {
    return view('frontend.pages.use-revid.use-revid-buyers');
});

Route::get('/use-revid/fast', function () {
    return view('frontend.pages.use-revid.use-revid-fast');
});

Route::get('/latest-videos', function () {
    return view('frontend.pages.latest-videos');
});

Route::get('/revid-video', function () {
    return view('frontend.pages.revid-video');
});

Route::get('/how-to-join', function () {
    return view('frontend.pages.join');
});

Route::get('/contact', function () {
    return view('frontend.pages.contact');
});

Route::get('/about', function () {
    return view('frontend.pages.about');
});

Route::get('/driveby-video', function () {
    return view('frontend.pages.driveby-video');
});

Route::get('/what-is-driveby', function () {
    return view('frontend.pages.what-is-driveby');
});

Route::get('/look-first', function () {
    return view('frontend.pages.look-first');
});

Route::get('/look-first-video', function () {
    return view('frontend.pages.look-first-video');
});

Route::get('/get-started', function () {
    return view('frontend.pages.get-started');
});

Route::get('/how-system-works-video', function () {
    return view('frontend.pages.system-works-video');
});

Route::get('/how-system-works', function () {
    return view('frontend.pages.system-works');
});

Route::get('/help', function () {
    return view('frontend.pages.help');
});

Route::get('/make-video-custom', function () {
    return view('frontend.pages.make-video.make-video-custom');
});

Route::get('/make-video-manual', function () {
    return view('frontend.pages.make-video.make-video-manual');
});

Route::get('/make-video-automatic', function () {
    return view('frontend.pages.make-video.make-video-automatic');
});

Route::get('/pricing', function () {
    return view('frontend.pages.pricing');
});

Route::get('/terms-condition', function () {
    return view('frontend.pages.terms-condition');
});

Route::get('/copyright', function () {
    return view('frontend.pages.copyright');
});

Route::get('/privacy-terms', function () {
    return view('frontend.pages.privacy-terms');
});

Route::get('/lets-get-started/1', function () {
    return view('frontend.register.register-step-one');
});

Route::get('/lets-get-started/2', function () {
    return view('frontend.register.register-step-two');
});

Route::get('/lets-get-started/3', function () {
    return view('frontend.register.register-step-three');
});

Route::get('/lets-get-started/4', function () {
    return view('frontend.register.register-step-four');
});

Route::get('/what-is-revid', function () {
    return view('frontend.pages.revid');
});

Route::get('/direct-upload', function () {
    return view('frontend.pages.direct-upload');
});

Route::get('/account/home','MyAccountController@index');

Route::get('/account/videos','MyVideoController@index');

Route::get('/account/video-creator/help','MyHelpController@index');

Route::get('/account/video-creator/billing-history','MyVideoController@BillingHistory');
    
Route::get('/account/video-creator/make-video','MyVideoController@MakeVideo');
    
Route::get('/account/video-tracker','MyVideoController@VideoTracker');

Route::get('/account/settings/voice-overs-music','MyVideoController@VoiceOversMusic');

Route::get('/account/settings/voice-overs-voice','MyVideoController@VoiceOversVoice');

Route::get('/account/settings/explore-pictures','MyVideoController@ExplorePicture');

Route::get('/account/video-creator/automatic-video-order','MyVideoController@AutomaticVideoOrder');

Route::get('/account/video-creator/manual-video-order','MyVideoController@ManualVideoOrder');

Route::get('/account/video-creator/custom-video-order','MyVideoController@CustomVideoOrder');

Route::get('/account/video-creator/premium-video-system','MyVideoController@PremiumVideo');

Route::get('/account/video-creator/tax-invoice-query','MyVideoController@TaxInvoice');

Route::get('/account/settings/template','MyVideoController@Template');

Route::get('/account/preferences/video-system/1','MyVideoController@VideoSystemPictures');

Route::get('/account/preferences/video-system/2','MyVideoController@VideoSystemScript');

Route::get('/account/preferences/video-system/3','MyVideoController@VideoSystemTemplate');

Route::get('/account/preferences/video-system/4','MyVideoController@VideoSystemVoice');

Route::get('/account/preferences/video-system/5','MyVideoController@VideoSystemFinish');

Route::get('/account/preferences/premium-video-script','MyVideoController@PremiumVideoScript');

Route::get('/account/preferences/premium-video-picture','MyVideoController@PremiumVideoPicture');

Route::get('/account/preferences/premium-video-update','MyVideoController@PremiumVideoUpdate');

Route::get('/account/preferences/premium-video-storyboard','MyVideoController@PremiumVideoStoryboard');

Route::get('/account/preferences/premium-video-voice-music','MyVideoController@PremiumVideoVoiceMusic');

Route::get('/account/preferences/','MyVideoController@Preferences');

Route::get('/account/help/','MyVideoController@Help');

Route::get('/account/direct-upload/','MyVideoController@DirectUpload');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/video-action-order','OrderController@Home');

Route::get('/video-action-manual','OrderController@Manual');

