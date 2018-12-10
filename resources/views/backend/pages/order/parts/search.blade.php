<div class="row">
    <div class="col-sm-2 align-self-center">
        @if (Request::segment(1) == 'user-system')
            <b>User System</b>
        @else
            <b>Manager</b>
        @endif
    </div>
    <div class="col-sm"><input type="text" name="" class="form-control" placeholder="Search"></div>
    <div class="col-sm-auto">
        <button type="submit" class="btn btn-primar px-3">
            <b>SEARCH</b>
        </button>
    </div>
</div>