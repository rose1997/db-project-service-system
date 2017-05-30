@extends('layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-danger">
                <div class="panel-heading">{{ Auth::user()->name }}，你的交易紀錄</div>
                <div class="panel-body">
                	<p>包含你在內的交易資料皆會顯示在下面，點進去看更多</p>
                
					<table class="table table-hover table-condensed" style="word-break:break-all;">
					  <tbody>
					  	<tr>
					  		<th><center>#</center></th>
					  		<th><center>交易對象</center></th>
					  		<th><center>交易種類</center></th>
					  		<th><center>交易金額</center></th>
					  		<th style="width:18%"></th>
					  	</tr>
					  	@foreach($services as $key => $value)
					  	@foreach($users as $user)
					  			@if($value->request_account == Auth::user()->account)
					  			@if($user->account == $value->receive_account)
					  	<tr>
					  		<td>{{ $key+1 }}</td>
					  		<td>{{ $user->name}}</td>
					  		<td>{{ $value->trans_mode}}</td>
					  		<td>{{ $value->trans_money}}</td>
					  		<td style="width:18%">
					  			<button type="submit" class="btn btn-xs btn-info" data-toggle="modal" data-target="#service{{ $value->id }}">查看更多</button>
					  		</td>
					  	</tr>
					  			@endif
					  			@elseif($value->receive_account == Auth::user()->account)
					  			@if($user->account == $value->request_account)
					  	<tr>
					  		<td>{{ $key+1 }}</td>
					  		<td>{{ $user->name}}</td>
					  		<td>{{ $value->trans_mode}}</td>
					  		<td>{{ $value->trans_money}}</td>
					  		<td style="width:18%">
					  			<button type="submit" class="btn btn-xs btn-info" data-toggle="modal" data-target="#service{{ $value->id }}">查看更多</button>
					  		</td>
					  	</tr>
					  			@endif					  			
					  			@endif
					  		<!--  model  -->
					  		@foreach($trashes as $trash)
					  		@foreach($umbrella as $rain)
					  		@if($trash->service_id == $value->id)
					<div class="modal fade" id="service{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="details" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h4 class="modal-title" id="details">第{{$key+1}}筆交易紀錄</h4>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					      	@if($trash->is_done == 'yes')
					        需求方：{{$trash->request_account}}</br>
					        供給方：{{$trash->receive_account}}</br>
					        服務項目：垃圾處理</br>
					        送出需求時間：{{$trash->request_time}}</br>
					        接受需求時間：{{$trash->receive_time}}</br>
					        任務完成時間：{{$trash->finish_time}}</br>
					        @elseif($trash->is_done == 'no')
					        此項服務沒有完成					        
					        @endif					        
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>
							@elseif($rain->service_id == $value->id)
					<div class="modal fade" id="service{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="details" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h4 class="modal-title" id="details">第{{$key+1}}筆交易紀錄</h4>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
							@if($rain->is_done == 'yes')
					        需求方：{{$rain->request_account}}</br>
					        供給方：{{$rain->receive_account}}</br>
					        服務項目：共傘服務</br>
					        送出需求時間：{{$rain->request_time}}</br>
					        接受需求時間：{{$rain->receive_time}}</br>
					        任務完成時間：{{$rain->finish_time}}</br>
					        @elseif($rain->is_done == 'no')
					        此項服務沒有完成
					        @endif						        					        
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>
							@endif
							@endforeach
							@endforeach
					  	@endforeach
					  	@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@stop