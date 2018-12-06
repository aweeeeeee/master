@extends('backend.layouts.main')

@section('content')
    <div class="search-container">
        <div class="content">
            @include('backend.pages.order.parts.search')
        </div>
    </div>
   
    <div class="content">
        <div class="row">
            <div class="col-sm-3 manager-form">
                <h3>Dashboard</h3>
                <div class="video-text my-3">Today’s Date</div>
                <select class="form-control" name="">
                    <option>Period</option>
                </select>
                <div class="video-text my-3">Set Date Range</div>
                <div class="d-flex flex-row">
                    <div class="video-text">FROM</div>
                    <div class="video-text">TO</div>
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
                    <div class="col-sm">Video Types Auto</div>
                    <div class="col-sm"><div class="video-text">#</div></div>
                    <div class="col-sm"><div class="video-text text-right">%</div></div>
                </div>
                <div class="row">
                    <div class="col-sm">Manual</div>
                    <div class="col-sm"><div class="video-text">#</div></div>
                    <div class="col-sm"><div class="video-text text-right">%</div></div>
                </div>
                <div class="row my-3">
                    <div class="col-sm">Custom</div>
                    <div class="col-sm"><div class="video-text">#</div></div>
                    <div class="col-sm"><div class="video-text text-right">%</div></div>
                </div>

            </div>
            <div class="col-sm-3">
                <h3>Total Videos</h3>
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
                <h3>Total Users</h3>
                <div class="video-text">#</div>
            </div>
        </div>
        <ul class="nav nav-tabs-user" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="open-tab" data-toggle="tab" href="#open-orders" role="tab" aria-controls="open-orders" aria-selected="true">OPEN ORDERS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="closed-tab" data-toggle="tab" href="#closed-orders" role="tab" aria-controls="closed-orders" aria-selected="false">CLOSED ORDERS</a>
              </li>
            </ul>
            <div class="tab-content mb-5" id="myTabContent">
              <div class="tab-pane fade user-btn active show" id="open-orders" role="tabpanel" aria-labelledby="open-tab">
                    <table class="tbl-list-order">
                        <tr>
                            <td>Video #</td>
                            <td>Order Date</td>
                            <td>Due Date</td>
                            <td>Type</td>
                            <td>Compiler</td>
                            <td>Editor</td>
                        </tr>
                        <tr>
                            <td> &nbsp; </td>
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
                        </tr>
                    </table>
              </div>
              <div class="tab-pane fade active p-3 user-btn" id="closed-orders" role="tabpanel" aria-labelledby="closed-tab">
                    a
              </div>
            </div>
    </div>
@endsection