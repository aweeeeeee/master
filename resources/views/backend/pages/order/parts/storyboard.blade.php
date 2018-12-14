<div class="row">
    <div class="col-sm">
        <div class="storyboard-title my-3"><b>Main Template</b></div>
        <img class="img-fluid w-100 p-0" src={{ asset('storage/blank-template.jpg') }} />
        <div class="row mt-3">
            <div class="col-sm align-self-center">
                <b>Colour Selector</b>
                <div class="d-flex flex-row colour-width">
                     <div class="circle-area bg-6600cc"></div>
                     <div>#6600cc</div>
                     <div class="circle-area bg-333"></div>
                     <div>#333333</div>
                </div>

            </div>
            <div class="col-sm-auto align-self-center">
                 <button type="submit" class="btn btn-primary b-radius-7 btn-no-border px-2 bg-0066ff">
                        <i class="standard-video sv-export"></i><b>EXPORT</b>
                 </button>
            </div>
        </div>
    </div>
    <div class="col-sm">
        <div class="storyboard-title my-3"><b>End Template</b></div>
        <img class="img-fluid w-100 p-0" src={{ asset('storage/blank-template.jpg') }} />
        <div class="row mt-3">
            <div class="col-sm align-self-center">
                <b>Colour Selector</b>
                <div class="d-flex flex-row colour-width">
                     <div class="circle-area bg-6600cc"></div>
                     <div>#6600cc</div>
                     <div class="circle-area bg-333"></div>
                     <div>#333333</div>
                </div>

            </div>
            <div class="col-sm-auto align-self-center">
                 <button type="submit" class="btn btn-primary b-radius-7 btn-no-border px-2 bg-0066ff">
                        <i class="standard-video sv-export"></i><b>EXPORT</b>
                 </button>
            </div>
        </div>
    </div>
</div>
<div class="board-upload mt-3">
                <div class="row board-row2">
                    <div class="col-md-3">
                        <b>Uploads</b>
                        <div>Property Description</div>
                        <div class="d-flex justify-content-start bg-eae p-2 mt-2 mb-3">
                            <div>
                                <i class="pdf-icon"></i>
                            </div>
                            <div class="align-self-center">
                                <h3>File</h3>
                                <h3>Name</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pt-3">
                        <div class="d-flex flex-row storyboard-form">
                            <div><input type="text" name="" class="form-control" placeholder="Template"></div>
                            <div>
                                <select class="form-control">
                                    <option value="">#18 &lt;default&gt;</option>
                                </select>
                            </div>
                            <div class="mx-2">
                                <button type="submit" class="btn btn-primary b-radius-7 bg-009900 btn-no-border px-3">
                                    <i class="standard-video sv-save"></i> <b>SAVE</b>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="row board-row mt-3">
                    <div class="col-md-3">
                        <div class="picture-uploader">
                            <h3>Picture</h3>
                            <h3>+</h3>
                            <h3>Uploader</h3>
                        </div>
                        <div class="bg-efefef p-2 color-333"><b>Picture 1</b></div>
                        <img src="{{ asset('storage/manual-video-sample.jpg') }}" >
                        
                        <div class="bg-efefef p-2 color-333"><b>Picture 2</b></div>
                        <img src="{{ asset('storage/manual-video-default.jpg') }}" >
                        
                        <div class="bg-efefef p-2 color-333"><b>Picture 3</b></div>
                        <img src="{{ asset('storage/manual-video-default.jpg') }}" >
                        
                        <div class="bg-efefef p-2 color-333"><b>Picture 4</b></div>
                        <img src="{{ asset('storage/manual-video-default.jpg') }}" >
                        
                        <div class="bg-efefef p-2 color-333"><b>Picture 5</b></div>
                        <img src="{{ asset('storage/manual-video-default.jpg') }}" >
                        
                        <div class="bg-efefef p-2 color-333"><b>Picture 6</b></div>
                        <img src="{{ asset('storage/manual-video-default.jpg') }}" >
                        
                        <div class="bg-efefef p-2 color-333"><b>Picture 7</b></div>
                        <img src="{{ asset('storage/manual-video-default.jpg') }}" >
                        
                        <div class="bg-efefef p-2 color-333"><b>Picture 8</b></div>
                        <img src="{{ asset('storage/manual-video-default.jpg') }}" >
                        
                        <div class="bg-efefef p-2 color-333"><b>Picture 9</b></div>
                        <img src="{{ asset('storage/manual-video-default.jpg') }}" >
                        
                        <div class="bg-efefef p-2 color-333"><b>Picture 10</b></div>
                        <img src="{{ asset('storage/manual-video-default.jpg') }}" >
                    </div>
                    <div class="col-md">
                        <div class="d-flex flex-column storyboard-list">
                            <div>
                                <div class="d-flex justify-content-start board-data">
                                    <div class="p-2"><b>VOICE Identification #</b></div>
                                    <div></div>
                                </div>
                                <div class="d-flex justify-content-start board-data my-2">
                                    <div class="p-2"><b>MUSIC Identification #</b></div>
                                    <div></div>
                                </div>
                                <div class="d-flex justify-content-start board-data">
                                    <div class="p-2"><b>VOICE Identification #</b></div>
                                    <div></div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex justify-content-start board-title">
                                    <div class="bg-efefef p-2 color-333"><b>Introductory Statement</b></div>
                                    <div class="border-data p-2">Audio.File Identification</div>
                                </div>

                                <div class="border-data my-3 px-3 height-62">here</div>
                                <select class="form-control">
                                    <option value="">No Statement</option>
                                </select>
                            </div>
                            <div>
                                <div class="d-flex justify-content-start board-title">
                                    <div class="bg-efefef p-2 color-333"><b>General Statement About Property</b></div>
                                    <div class="border-data d-flex justify-content-between">
                                        <div class="p-2">Audio.File Identification</div>
                                        <div class="border-data2"> &nbsp; </div>
                                    </div>
                                </div>

                                <div class="border-data my-3 px-3 height-62">here</div>
                                <select class="form-control">
                                    <option value="">No Statement</option>
                                </select>
                            </div>
                            <div>
                                <div class="d-flex justify-content-start board-title">
                                    <div class="bg-efefef p-2 color-333"><b>Linked General Statement About Property</b></div>
                                    <div class="border-data d-flex justify-content-between">
                                        <div class="p-2">Audio.File Identification</div>
                                        <div class="border-data2"> &nbsp; </div>
                                    </div>
                                </div>

                                <div class="border-data my-3 px-3 height-62">here</div>
                                <select class="form-control">
                                    <option value="">No Statement</option>
                                </select>
                            </div>
                            <div>
                                <div class="d-flex justify-content-start board-title">
                                    <div class="bg-efefef p-2 color-333"><b>Layout Property Style Statement</b></div>
                                    <div class="border-data d-flex justify-content-between">
                                        <div class="p-2">Audio.File Identification</div>
                                        <div class="border-data2"> &nbsp; </div>
                                    </div>
                                </div>

                                <div class="border-data my-3 px-3 height-62">here</div>
                                <select class="form-control">
                                    <option value="">No Statement</option>
                                </select>
                            </div>
                            <div>
                                <div class="d-flex justify-content-start board-title">
                                    <div class="bg-efefef p-2 color-333"><b>Key Feature Statement</b></div>
                                    <div class="border-data d-flex justify-content-between">
                                        <div class="p-2">Audio.File Identification</div>
                                        <div class="border-data2"> &nbsp; </div>
                                    </div>
                                </div>

                                <div class="border-data my-3 px-3 height-62">here</div>
                                <select class="form-control">
                                    <option value="">No Statement</option>
                                </select>
                            </div>
                            <div>
                                <div class="d-flex justify-content-start board-title">
                                    <div class="bg-efefef p-2 color-333"><b>Linked Key Feature Statement 1</b></div>
                                    <div class="border-data d-flex justify-content-between">
                                        <div class="p-2">Audio.File Identification</div>
                                        <div class="border-data2"> &nbsp; </div>
                                    </div>
                                </div>

                                <div class="border-data my-3 px-3 height-62">here</div>
                                <select class="form-control">
                                    <option value="">No Statement</option>
                                </select>
                            </div>
                            <div>
                                 <div class="d-flex justify-content-start board-title">
                                    <div class="bg-efefef p-2 color-333"><b>Linked Key Feature Statement 2</b></div>
                                    <div class="border-data d-flex justify-content-between">
                                        <div class="p-2">Audio.File Identification</div>
                                        <div class="border-data2"> &nbsp; </div>
                                    </div>
                                </div>

                                <div class="border-data my-3 px-3 height-62">here</div>
                                <select class="form-control">
                                    <option value="">No Statement</option>
                                </select>
                            </div>
                            <div>
                                <div class="d-flex justify-content-start board-title">
                                    <div class="bg-efefef p-2 color-333"><b>Uniqueness Statement</b></div>
                                    <div class="border-data d-flex justify-content-between">
                                        <div class="p-2">Audio.File Identification</div>
                                        <div class="border-data2"> &nbsp; </div>
                                    </div>
                                </div>

                                <div class="border-data my-3 px-3 height-62">here</div>
                                <select class="form-control">
                                    <option value="">No Statement</option>
                                </select>
                            </div>
                            <div>
                                <div class="d-flex justify-content-start board-title">
                                    <div class="bg-efefef p-2 color-333"><b>Linked Uniqueness Statement</b></div>
                                    <div class="border-data d-flex justify-content-between">
                                        <div class="p-2">Audio.File Identification</div>
                                        <div class="border-data2"> &nbsp; </div>
                                    </div>
                                </div>

                                <div class="border-data my-3 px-3 height-62">here</div>
                                <select class="form-control">
                                    <option value="">No Statement</option>
                                </select>
                            </div>
                            <div>
                                <div class="d-flex justify-content-start board-title">
                                    <div class="bg-efefef p-2 color-333"><b>Closing Statement with Call to Action</b></div>
                                    <div class="border-data d-flex justify-content-between">
                                        <div class="p-2">Audio.File Identification</div>
                                        <div class="border-data2"> &nbsp; </div>
                                    </div>
                                </div>

                                <div class="border-data my-3 px-3 height-62">here</div>
                                <select class="form-control">
                                    <option value="">No Statement</option>
                                </select>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="row board-row2">
                    <div class="col-md-3 py-3">
                        <div class="picture-uploader">
                            <h3 class="mt-3">CLOSING</h3>
                            <h3>ANIMATION</h3>
                        </div>
                    </div>
                    <div class="col-md py-3">
                        <div class="d-flex justify-content-start board-data">
                            <div class="p-2"><b>CLOSING Identification #</b></div>
                            <div></div>
                        </div>
                        <div class="d-flex flex-row-reverse align-items-end height-90">
                            <button type="submit" class="btn btn-primary b-radius-7 bg-009900 btn-no-border px-3">
                                        <i class="standard-video sv-save"></i> <b>SAVE</b>
                            </button>
                        </div>                                      
                    </div>
                </div>