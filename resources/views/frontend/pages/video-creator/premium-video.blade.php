@extends('frontend.layouts.main')

@section('content')
<div class="container">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 my-account-form pb-5">
            <h3 class="my-account-title">Custom Video System</h3>
            <table class="table-action" cellpadding="0" cellspacing="0" width="100%">
                <tr class="font-weight-bold bg-ccc">
                    <td width="170">Video #</td>
                    <td width="200">Address</td>
                    <td>Progress</td>
                </tr>
                <tr>
                    <td>#XXXX</td>
                    <td>63 North Rd Basserd...</td>
                    <td>
                        <div class="p-v-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"><b>30%</b></div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <table class="table-action mt-5" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td width="170">Account Manager</td>
                    <td>XXXXX XXXXX</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>xxxx@revid.com.au</td>
                </tr>
                <tr>
                    <td>Telephone</td>
                    <td>(08) XXXX XXXX</td>
                </tr>
                <tr>
                    <td>Skype</td>
                    <td>XXXXXXXXXXXX</td>
                </tr>
            </table>
            <div class="bg-ccc py-2 px-3"><b>Action Station</b></div>
            <table class="table-action" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td width="170"><i class="make-video-step v-pictures"></i><div class="d-inline-block align-top p-2">Pictures</div></td>
                    <td width="170">
                        <div class="d-flex justify-content-between">
                            <div>Done</div>
                            <div><i class="action-icon"></i></div>
                        </div>
                    </td>
                    <td>We will obtain your picutres either directly or through <a href="">Picture Tool</a>.</td>
                </tr>
                <tr>
                    <td><i class="make-video-step v-script"></i><div class="d-inline-block align-top p-2">Script</div></td>
                    <td>
                        <div class="d-flex justify-content-between">
                            <div>Done</div>
                            <div><i class="action-icon"></i></div>
                        </div>
                    </td>
                    <td>We will work with you to write your script <a href="">Template</a>.</td>
                </tr>
                <tr>
                    <td><i class="make-video-step v-template"></i><div class="d-inline-block align-top p-2">Template</div></td>
                    <td>
                        <div class="d-flex justify-content-between">
                            <div>Done</div>
                            <div><i class="action-icon"></i></div>
                        </div>
                    </td>
                    <td>We will apply your preferences or <a href="">Update Template</a>.</td>
                </tr>
                <tr>
                    <td><i class="make-video-step v-voice"></i><div class="d-inline-block align-top pl-2 py-2">Voice + Music</div></td>
                    <td>
                        <div class="d-flex justify-content-between">
                            <div>To Complete</div>
                            <div><i class="action-icon action-cross"></i></div>
                        </div>
                    </td>
                    <td>We will apply your preferences or <a href="">Update Voice + Music</a></td>
                </tr>
                <tr>
                    <td><i class="make-video-step v-finish"></i><div class="d-inline-block align-top p-2">Finish</div></td>
                    <td><div class="d-flex justify-content-between">
                            <div>To Complete</div>
                            <div><i class="action-icon action-cross"></i></div>
                        </div>
                    </td>
                    <td>You will need to approve storyboard before for production. <a href="">See Storyboard</a>.</td>
                </tr>
                <tr>
                    <td><b>XXX</b></td>
                    <td colspan="2" class="my-account-subcription">
                        <div class="row">
                            <div class="col-sm align-self-center"><b>63 North Rd Bassendean is</b></div>
                            <div class="col-md-auto">
                                <div class="custom-control checkbox-margin custom-checkbox standard">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </div>
                            <div class="col-md-auto">
                                <button type="submit" class="btn btn-primary btn-no-border px-3  b-radius-7 bg-009900 mt-1"><b>APPROVED</b></button>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            
        </div>
    </div>
</div>
@endsection
