@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">

       <h2 class="header-border"><b>Direct Upload</b></h2>
       <form>
       <div class="row register-form">
            <div class="col-sm">
                <div class="d-flex flex-column">
                    <div><input type="text" class="form-control" name="" placeholder="Address 1" required></div>
                    <div class="my-3"><input type="text" class="form-control" name="" placeholder="Address 2" required></div>
                    <div>
                         <div class="row">
                             <div class="col-sm"><input type="text" class="form-control" name="" placeholder="Suburb" required></div>
                             <div class="col-sm"><input type="text" class="form-control" name="" placeholder="State" required></div>
                             <div class="col-sm-3"><input type="text" class="form-control" name="" placeholder="Post Code" required></div>
                         </div>
                    </div>
                </div>
            </div> 
            <div class="col-sm">
                <div class="d-flex flex-column">
                    <div>
                        <div class="row">
                            <div class="col-sm">
                                <div class="d-flex flex-row">
                                    <div class="bg-eae px-2 pt-2"><i class="d-u-icon"></i></div>
                                    <input type="text" name="" class="form-control b-radius-0 ml-2 w-100" placeholder="Bedroom">
                                </div>
                            </div>
                            <div class="col-sm">
                                 <div class="d-flex flex-row">
                                     <div class="bg-eae p-2"><i class="d-u-icon d-u-icon-bat"></i></div>
                                     <input type="text" name="" class="form-control b-radius-0 ml-2 w-100" placeholder="Bathrooms">
                                 </div>
                            </div>
                            <div class="col-sm">
                                 <div class="d-flex flex-row">
                                     <div class="bg-eae p-2"><i class="d-u-icon d-u-icon-car"></i></div>
                                     <input type="text" name="" class="form-control b-radius-0 ml-2 w-100" placeholder="Cars">
                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-3">
                         <select name="suburb" class="form-control">
                            <option disabled selected>Property Type</option>
                            <option>House</option>
                            <option>Unit</option>
                            <option>Townhouse</option>
                            <option>Villa</option>
                            <option>Duplex</option>
                            <option>Apartment</option>
                            <option>Rural</option>
                         </select>
                    </div>
                </div>
            </div>  
       </div>
       <h5 class="color-414142 my-3 font-t-ms"><b>Upload Property Description and Details</b></h5>
       <div class="direct-upload-2 d-flex flex-column p-4 mb-5">
            <div class="color-666">This information is used to assist our video compilers choose professional voice over statements that best suit your property listing. We need the
            property description and information that tells us all about the features and benefits.</div>
            <div class="pt-2">
                <div class="row">
                    <div class="col-sm">
                        <div class="row">
                            <div class="col-sm"><button class="btn btn-primary b-radius-0 w-100 py-2"><i class="standard-video sv-browse"></i> Browse</button></div>
                            <div class="col-sm align-self-center"><i class="standard-video sv-pdf"></i> Word or PDF Format</div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="story-board-block">
                             <div>
                                <input type="file" multiple>
                             </div>
                             <p class="color-666">Drag and Drop File Here <span class="c-6600cc"><b>+</b></span></p>
                        </div>
                    </div>
                </div>
                
            </div>
       </div>
       <h5 class="color-414142 my-3 font-t-ms"><b>Upload Your Pictures</b></h5>
       <div class="direct-upload">
            <div class="d-flex align-items-start mx-3 my-2">
              <div class="p-2 d-u-width"><button class="btn btn-primary b-radius-0 w-100 py-2"><i class="standard-video sv-browse"></i> Browse</button></div>
              <div class="p-2 mx-2 d-u-width color-666">PRESS Browse to <br>Load Files all at once</div>
              <div class="py-2 mx-2 d-u-width">
                    <div class="d-flex flex-row color-666">
                        <div>Minimum 10 <br>Maximum 25</div>
                        <div class="d-u-border">Estimated <br>Video Duration</div>
                    </div>
              </div>
              <div class="d-u-width align-self-center"><h2 class="color-6600cc m-0"><b>01m:15s</b></h2></div>
            </div>
            <div class="d-flex align-content-stretch flex-wrap px-3">
                <div class="mx-2 mb-2">
                    <div class="story-board-block">
                         <div>
                            <input type="file" multiple>
                         </div>
                         <p>Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 1</p>
                     </div>
                </div>
                <div class="mx-2 mb-2">
                     <div class="story-board-block">
                         <div>
                            <input type="file" multiple>
                         </div>
                         <p>Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 2</p>
                     </div>
                </div>
                 <div class="mx-2 mb-2">
                     <div class="story-board-block">
                         <div>
                            <input type="file" multiple>
                         </div>
                         <p>Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 3</p>
                        
                     </div>
                </div>
                <div class="mx-2 mb-2">
                     <div class="story-board-block">
                         <div>
                            <input type="file" multiple>
                         </div>
                         <p>Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 4</p>
                     </div>
                </div>
                <div class="mx-2 mb-2">
                    <div class="story-board-block">
                         <div>
                            <input type="file" multiple>
                         </div>
                         <p>Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 5</p>
                     </div>
                </div>
                <div class="mx-2 mb-2">
                     <div class="story-board-block">
                         <div>
                            <input type="file" multiple>
                         </div>
                         <p>Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 6</p>
                     </div>
                </div>
                <div class="mx-2 mb-2">
                     <div class="story-board-block">
                         <div>
                            <input type="file" multiple>
                         </div>
                         <p>Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 7</p>
                        
                     </div>
                </div>
                <div class="mx-2 mb-2">
                     <div class="story-board-block">
                         <div>
                            <input type="file" multiple>
                         </div>
                         <p>Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 8</p>
                     </div>
                </div>
                <div class="mx-2 mb-2">
                     <div class="story-board-block">
                         <div>
                            <input type="file" multiple>
                         </div>
                         <p>Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 9</p>
                     </div>
                </div>
                <div class="mx-2 mb-2">
                    <div class="story-board-block">
                         <div>
                            <input type="file" multiple>
                         </div>
                         <p>Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 10</p>
                     </div>
                </div>
                <div class="mx-2 mb-2">
                     <div class="story-board-block">
                         <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 11</p>
                     </div>
                </div>
                <div class="mx-2 mb-2">
                     <div class="story-board-block">
                         <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 12</p>
                     </div>
                </div>
                <div class="mx-2 mb-2">
                     <div class="story-board-block">
                         <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 13</p>
                     </div>
                </div>
                <div class="mx-2 mb-2">
                     <div class="story-board-block">
                         <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 14</p>
                     </div>
                </div>
                <div class="mx-2 mb-2">
                    <div class="story-board-block">
                         <div>
                            <input type="file" multiple>
                         </div>
                         <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 15</p>
                     </div>
                </div>
                <div class="mx-2 mb-2">
                     <div class="story-board-block">
                         <div>
                            <input type="file" multiple>
                         </div>
                         <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 16</p>
                     </div>
                </div>
                <div class="mx-2 mb-2">
                     <div class="story-board-block">
                         <div>
                            <input type="file" multiple>
                         </div>
                         <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 17</p>
                     </div>
                </div>
                <div class="mx-2 mb-2">
                     <div class="story-board-block">
                         <div>
                            <input type="file" multiple>
                         </div>
                         <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 18</p>
                     </div>
                </div>
                <div class="mx-2 mb-2">
                     <div class="story-board-block">
                         <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 19</p>
                     </div>
                </div>
                <div class="mx-2 mb-2">
                    <div class="story-board-block">
                         <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 20</p>
                     </div>
                </div>
                <div class="mx-2 mb-2">
                     <div class="story-board-block">
                         <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 21</p>
                     </div>
                </div>
                <div class="mx-2 mb-2">
                     <div class="story-board-block">
                         <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 22</p>
                     </div>
                </div>
                <div class="mx-2 mb-2">
                     <div class="story-board-block">
                         <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 23</p>
                     </div>
                </div>
                <div class="mx-2 mb-2">
                     <div class="story-board-block">
                         <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 24</p>
                     </div>
                </div>
                <div class="mx-2 mb-2">
                     <div class="story-board-block">
                         <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 25</p>
                     </div>
                </div>
            </div>
       </div>
       <div class="d-flex flex-row-reverse my-4">
            <div><button class="px-5 btn btn-primary bg-6600cc btn-no-border b-radius-7 w-100 py-2"><i class="standard-video sv-save"></i> <b>SAVE</b></button></div>
       </div>
       </form>
    </div>

    
    @include('frontend.pages.frontpage.footer')

@endsection
