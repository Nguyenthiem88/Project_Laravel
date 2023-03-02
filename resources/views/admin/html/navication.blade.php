<div class="fixed-bottom col-4" style="right: 10px ">
    @if(session()->has("error"))
<div class="alert alert-warning alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-exclamation-triangle"></i> Thông báo</h5>
    {{session("error")}}
</div>
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i> Alert!</h5>
    {{session("error")}}

</div>
@endif
