<div class="alert alert-success" style="display:none;padding: 6px;" id="succmsg"></div>
<div class="outer-label-span">
    <?php 
        $timestamp = strtotime($proposal->created_at);
        $proposaldate = date($date_format, $timestamp);  
    ?>
    @if($proposal->period == '0')<label>Estimated Hours</label><span>{{$proposal->estimated_hours}}</span>@else <label>Proposal Cost</label><span>{{$proposal->calculated_cost}}</span> @endif
    <label>Currency</label><span >{{$proposal->currency}}</span>
    <label>Created Date</label><span>{{$proposaldate}}</span>
</div>
<div class="table-modal-outer">
    <table class="table table-manageuser-2 table-striped table-responsive">
        <thead>
            <tr>
                <th style="width: 26%">Proposal Title</th>
                <th style="width: 12%">Created By</th> 
                <th style="width: 13%">Total Cost</th>
                <th style="width: 13%">Received</th>
                <th style="width: 13%">Refund</th>
                <th style="width: 17%">Created on</th>                      
                <th>Save</th>                  
            </tr>
        </thead>
        <tbody>
            @if(!empty($logs))
                @foreach($logs as $log)         
                    <tr>
                        <td>{{json_decode($log->proposal->title)}}</td>
                        <td>{{$log->user->name}}</td>
                        @if($proposal->period == '0')
                            <td>@if($log->hours == '0')
                                $ <input type="text" name="cost" readonly="" value="0"><span style="display:block;text-align: center; display: block; text-align: center; font-size: 12px; font-weight: 800;">
                                    (${{$log->total_cost}}/Hr) 
                                @else 
                                    $ <input type="text" name="cost" readonly="" value="{{$log->calculated_cost ?? '0'}}"><span style="display:block;text-align: center; display: block; text-align: center; font-size: 12px; font-weight: 800;">
                                    @if($proposal->estimated_hours > 0) (${{$log->total_cost}}x{{$proposal->estimated_hours}}Hr) 
                                    @else 
                                    (${{$log->total_cost}}x{{$log->hours}}Hr) 
                                    @endif
                                @endif</span></td>
                            <td>$<input type="text" name="received_amount" value="{{$log->calculated_amount ?? '0'}}" readonly=""><span style="display:block;text-align: center; display: block; text-align: center; font-size: 10px; font-weight: 800;"><?php 
                            $timestamp = strtotime($log->amount_date); $receive_Date = date($date_format, $timestamp); 
                            echo ($log->calculated_amount > 0)?$receive_Date:'';    ?></span></td>
                        @else
                            <td>$<input type="text" name="cost" value="{{$log->calculated_cost ?? '0'}}"></td>
                            <td>$<input type="text" name="received_amount" value="{{$log->calculated_amount ?? '0'}}"><span style="display:block;text-align: center; display: block; text-align: center; font-size: 10px; font-weight: 800;"><?php 
                            $timestamp = strtotime($log->amount_date); $receive_Date = date($date_format, $timestamp); 
                            echo ($log->calculated_amount > 0)?$receive_Date:'';    ?></span></td>
                        @endif

                        <td>
                            $<input type="text" name="refund_amount" value="{{$log->refund_amount ?? '0'}}"><span style="display:block;text-align: center; display: block; text-align: center; font-size: 10px; font-weight: 800;"><?php 
                            $timestamp = strtotime($log->refund_date); $refund_Date = date($date_format, $timestamp); 
                            echo ($log->refund_amount>0)?$refund_Date:'';   ?></span></span><input type="hidden" name="proposal_id" class="proposal_id" value="{{$log->proposal_id ?? '0'}}">
                        </td>

                        <td>
                            <?php 
                                $timestamp = strtotime($log->created_at);
                                $newDate = date($date_format, $timestamp);  
                                echo $newDate;
                            ?> 
                        </td>
                        <td><button class="log-savebtn" data-id="{{$log->id}}">Save</button></button></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>