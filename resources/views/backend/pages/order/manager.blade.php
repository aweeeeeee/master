@extends('backend.layouts.main')

@section('content')
    <div class="search-container">
        <div class="content">
            @include('backend.pages.order.parts.search')
        </div>
    </div>
   
    <div class="content">
        <div class="row dashboard-form mb-5">
            <div class="col-sm-3 manager-form">
                <h3 class="top">Dashboard</h3>
                <div class="video-text my-3">Today’s Date</div>
                <select class="form-control" name="">
                    <option>Period</option>
                </select>
                <div class="video-text my-3">Set Date Range</div>
                <div class="d-flex justify-content-between date-picker">
                    <div>
                        <input type="text" name="" class="video-text" placeholder="From">
                    </div>
                    <div>
                        <input type="text" name="" class="video-text" placeholder="To">
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="row">
                    <div class="col-sm"><div class="video-text">New Orders</div></div>
                    <div class="col-sm"><div class="video-text">#</div></div>
                    <div class="col-sm"></div>
                </div>
                <div class="row my-3">
                    <div class="col-sm"><div class="video-text">Open Orders</div></div>
                    <div class="col-sm"><div class="video-text">#</div></div>
                    <div class="col-sm"><div class="video-text text-right">%</div></div>
                </div>
                <div class="row">
                    <div class="col-sm"><div class="video-text">Closed Orders</div></div>
                    <div class="col-sm"><div class="video-text">#</div></div>
                    <div class="col-sm"><div class="video-text text-right">%</div></div>
                </div>
                <div class="row my-3">
                    <div class="col-sm">
                        <div class="d-flex justify-content-between line-height20">
                            <div>Video <br>Types</div>
                            <div class="align-self-center">Auto</div>
                        </div>
                    </div>
                    <div class="col-sm"><div class="video-text">#</div></div>
                    <div class="col-sm"><div class="video-text text-right">%</div></div>
                </div>
                <div class="row">
                    <div class="col-sm text-right">Manual</div>
                    <div class="col-sm"><div class="video-text">#</div></div>
                    <div class="col-sm"><div class="video-text text-right">%</div></div>
                </div>
                <div class="row my-3">
                    <div class="col-sm text-right">Custom</div>
                    <div class="col-sm"><div class="video-text">#</div></div>
                    <div class="col-sm"><div class="video-text text-right">%</div></div>
                </div>

            </div>
            <div class="col-sm-3">
                <h3 class="top">Total Videos</h3>
                <div class="video-text my-3">#</div>
                <div class="row">
                    <div class="col-sm"><div class="video-text">#</div></div>
                    <div class="col-sm"><div class="video-text text-right">%</div></div>
                </div>
                <div class="row my-3">
                    <div class="col-sm"><div class="video-text">#</div></div>
                    <div class="col-sm"><div class="video-text text-right">%</div></div>
                </div>
                <div class="row">
                    <div class="col-sm"><div class="video-text">#</div></div>
                    <div class="col-sm"><div class="video-text text-right">%</div></div>
                </div>
                <h3 class="my-4">Total Users</h3>
                <div class="video-text">#</div>
            </div>
        </div>
        <ul class="nav nav-tabs-manager" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="open-tab" data-toggle="tab" href="#open-orders" role="tab" aria-controls="open-orders" aria-selected="true">OPEN ORDERS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="closed-tab" data-toggle="tab" href="#closed-orders" role="tab" aria-controls="closed-orders" aria-selected="false">CLOSED ORDERS</a>
              </li>
            </ul>
            <div class="tab-content mb-5" id="myTabContent">
              <div class="tab-pane fade active show user-btn" id="open-orders" role="tabpanel" aria-labelledby="open-tab">
                    <table class="tbl-list-order table-responsive">
                        <tr>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <div>Video #</div>
                                    <div><i class="arrow-down"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <div>Agent Name</div>
                                    <div><i class="arrow-down"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <div>Agency Name</div>
                                    <div><i class="arrow-down"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <div>Order Date</div>
                                    <div><i class="arrow-up"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <div>Due Date</div>
                                    <div><i class="arrow-up"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <div>Type</div>
                                    <div><i class="arrow-up"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <div>Compiler</div>
                                    <div><i class="arrow-up"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <div>Editor</div>
                                    <div><i class="arrow-up"></i></div>
                                </div>
                            </td>
                            <td>Action</td>
                        </tr>
                        <tr>
                            <td>123</td>
                            <td>Firstname Lastname Firstname</td>
                            <td></td>
                            <td>day</td>
                            <td>day</td>
                            <td>casual</td>
                            <td class="compiler-form">
                                <select class="form-control" name="">
                                    <option>Compiler 1</option>
                                    <option>Compiler 2</option>
                                    <option>Compiler 3</option>
                                    <option>Compiler 4</option>
                                    <option>Compiler 5</option>
                                    <option>Compiler 6</option>
                                </select>
                            </td>
                            <td class="compiler-form">
                                <select class="form-control" name="">
                                    <option>Editor 1</option>
                                    <option>Editor 2</option>
                                    <option>Editor 3</option>
                                    <option>Editor 4</option>
                                    <option>Editor 5</option>
                                    <option>Editor 6</option>
                                </select>
                            </td>
                            <td class="text-center"><a href="">Delete</a></td>
                        </tr>
                        <tr>
                            <td>123</td>
                            <td>Firstname Lastname</td>
                            <td></td>
                            <td>day</td>
                            <td>day</td>
                            <td>automatic</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td> &nbsp; </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td> &nbsp; </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
              </div>
              <div class="tab-pane fade user-btn" id="closed-orders" role="tabpanel" aria-labelledby="closed-tab">
                    <table class="tbl-list-order table-responsive">
                        <tr>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <div>Video #</div>
                                    <div><i class="arrow-down"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <div>Agent Name</div>
                                    <div><i class="arrow-down"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <div>Order Date</div>
                                    <div><i class="arrow-up"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <div>Due Date</div>
                                    <div><i class="arrow-up"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <div>Type</div>
                                    <div><i class="arrow-up"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <div>Compiler</div>
                                    <div><i class="arrow-up"></i></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <div>Editor</div>
                                    <div><i class="arrow-up"></i></div>
                                </div>
                            </td>
                            <td>Action</td>
                        </tr>
                        <tr>
                            <td colspan="8" width="975" class="no-border text-center">No Orders Available</td>
                        </tr>
                    </table>
              </div>
            </div>
    </div>
@endsection