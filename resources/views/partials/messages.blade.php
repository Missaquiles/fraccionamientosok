@if(session('success'))
<div class = "alertLogin">
    <div class="col md-2 mx-auto">
        <div class="alert alert-success alert-dismissible fade show alert-link" role = "alert">
            {{session('success')}}
            <button type = "button" class = "close" data-dismiss="alert" aria-label="Close">
                <i class="fa fa-window-close" aria-hidden="true"></i>
            </button>
        </div>
    </div>
</div>
@endif
@if(session('failure'))
<div class = "alertLogin">
    <div class="col md-2 mx-auto">
        <div class="alert alert-danger alert-dismissible fade show alert-link" role = "alert">
            {{session('failure')}}
            <button type = "button" class = "close" data-dismiss="alert" aria-label="Close">
                <i class="fa fa-window-close" aria-hidden="true"></i>
            </button>
        </div>
    </div>
</div>
@endif