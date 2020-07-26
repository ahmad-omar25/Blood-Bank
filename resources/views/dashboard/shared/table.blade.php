<div class="col-xs-12">
    <div class="box box-primary">
        <div class="box-header with-border">
            <form action="{{route($routeName.'.index')}}" method="get">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" name="search" class="form-control" placeholder="{{__('control.search')}}" value="{{request()->search}}">
                    </div>
                    <div class="col-md-4 col-md-offset-4">
                        <div class="box-title">
                            <a href="">
                                <button type="button" class="btn btn-block btn-primary">
                                    {{__('control.search')}}
                                    <i class="fa fa-search" style="margin:0 5px"></i>
                                </button>
                            </a>
                        </div>
                        {{$addButton}}
                    </div>
                </div>
            </form>
        </div>
        {{$slot}}
    </div>
</div>
