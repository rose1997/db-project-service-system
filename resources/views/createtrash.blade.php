@extends("layout")

@section("content")

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-danger">
                <div class="panel-heading">新增垃圾處理需求
                </div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="{{url('storetrash')}}">
                        {{ csrf_field() }}
                                    
                    <div class="form-group">
                      <label class="col-md-6 control-label" for="leavMsgTitl">
                       輸入現在位置名稱：
                      </label>
                        <input class="form-control" id="leavMsgTitl" type="text" name="start_name" style="width:20%" placeholder="EX:女14舍">
                    </div>                 
                      <input class="form-control mustFill" id="leavMsgTitl" type="hidden" name="end_name" style="width:20%" value="">
                    <div class="form-group">
                      <label class="col-md-6 control-label" for="leavMsgCont">
                        輸入現在經度：
                      </label>
                      <input class="form-control mustFill" id="leavMsgTitl" type="text" name="start_lng" style="width:20%" placeholder="EX:121.193809">
                      <label class="col-md-6 control-label" for="leavMsgCont">
                        輸入現在緯度：
                      </label>
                      <input class="form-control mustFill" id="leavMsgTitl" type="text" name="start_lat" style="width:20%" placeholder="EX:24.971047">
                    </div>
                      <input class="form-control mustFill" id="leavMsgTitl" type="hidden" name="end_lng" style="width:20%" placeholder="EX:121.193809" value="">
                      <input class="form-control mustFill" id="leavMsgTitl" type="hidden" name="end_lat" style="width:20%" placeholder="EX:24.971047" value="">
                    <br>
                      <input type="hidden"  id="account" name="request_account" value="{{Auth::user()->account}}" />
                      <input type="hidden"  id="time" name="request_time" value = "" />
                      <input type="hidden"  id="time" name="trans_mode" value="trash" />
                      <input type="hidden"  id="time" name="trans_money" value="10" />

                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    確定
                                </button>
                            </div>
                        </div>
                   
                </form>                
                </div>
            </div>
        </div>
    </div>
</div>

@stop