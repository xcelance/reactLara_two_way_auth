<!DOCTYPE html>
<html>
  	<head>
      	<title>Contracts</title>
      	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
      	<meta content="width=device-width, initial-scale=1" name="viewport">
      	<meta content="IE=edge" http-equiv="X-UA-Compatible">
      	<style type="text/css">    
	      	@page { margin: 10px 0 0 0; padding: 0; }   
	        header { margin: 10px 0 0 0; padding: -10px 0 0 0; }
	        footer { position:absolute; bottom: 0; left: 0px; right: 0px; height: 40px; line-height:32px; background: {{ $color }}; } 
	        main{ background: transparent; }
	    	body {
			    position: relative;
			    margin: 0 auto;
			    color: #2b2a29;
			    font-family: 'Lato', sans-serif;
			    font-size: 16px;
			}
			.clearfix:after {
				content: "";
				display: table;
				clear: both;
			}
			a {
			  	color: #0087C3;
			  	text-decoration: none;
			}
			h6{
				margin-bottom:0;
			}
			/*header*/
			.inner-header {
			    display: table;
			    width: 100%;
			    padding-bottom: 10px;
			}
			.outer-header .logo-div {
			    background: #0089ab;
			    padding: 10px;
			    text-transform: uppercase;
			    color: #fff;
			    margin-bottom: 5px;
			    margin-top: 10px;
			}
			.outer-header {
			    text-align: left;
			}  
			/*footer*/
			.outer-header.footer {
			    background: {{ $color }};
			}
			.footer .inner-header {
			    padding: 10px 0px;
			}
			.footer p {
			    color: #fff;
			    margin: 0;
			}
			.footer-col{
			   float: left;
			   width: 33.3%;
			   box-sizing: border-box;
			}
			.contract-detail-wrapper{
				page-break-after: always;
			}
			footer img {
			    width: 15px;
			    margin-right: 5px;
			}
			/*main*/
			.blue-text{
				color: {{ $color }};
			}
			.title-div span {
			    color: {{ $color }};
			}
			.main-heading-content h1, .main-heading-content h2{
			  	font-size: 30px;
			  	color: #333333;
			}
			.main-heading-content h3{
			  	font-size: 26px;
			  	color: {{ $color }};
			}
			.title-div h3{
			    text-decoration: none;
			    font-size: 23px;
			    font-family: 'Lato', sans-serif;
			    margin: 0;    
			    height: 3px;
			    display: block;
			    line-height: 5px; 
			    background: {{ $color }}; 
			}
			.subtitle h6 {
			    font-size: 18px;
			    margin-top: 15px;
			    color: #2b2a29;
			}
			.content-div{
			  	font-size: 16px;
			}
			.numbering-title {
			    font-size: 18px;
			    margin-top: 23px;
			    margin-bottom: -6px;
			}
			.content-div ul{
			  	padding-left: 15px;
			}


			table th, table td {
			    padding: 7px;
			    font-size: 15px;
			    text-align: left;
			    border-bottom: 0px solid #c3c1c1;
			}
			table th {
			    white-space: nowrap;
			    font-weight: normal;    
			    font-size: 17px;
			    background: #EEEEEE;
			    color: {{ $color }};
			}
			tfoot td{
			  	color: #fff;
			    font-size: 17px;
			    padding: 7px;
			}

			
			.signature-div-main p{
			    margin: 0;
			}
			.signature-div-main h6{
			   	font-size: 18px;
			   	margin-bottom: 12px;
			}
			.signature-div-main .date{
			    margin-top: 5px;
			}
			.signature-div-main .sign-img {
			    margin-top: 2px;
			    margin-bottom: 2px;
			}
			.signature-div-main .sign-img img {
			    height: 32px;
			    object-fit: contain;
			}
			.cost td{
				text-align: right;
			}

			#watermark {
		        width: 770px;
		        height: 670px;          
		        margin-bottom: 20px;
		        position: fixed; 
		        top: 250px;
		        left: 0px;
		        right: 0px;              
		    }
      	</style>
  	</head>
  	<body style="font-family: 'Lato', sans-serif;"> 

  		<div id="watermark">
            @if($watermark)
                <img src="{{ url($watermark) }}" height="100%" width="100%" />
            @endif
        </div>   

      	<main style="position: relative;">
	      	<!---contract-detail-wrapper-->	      
	        <div class="contract-detail-wrapper" style="font-family: 'Lato', sans-serif;">	 
	        	<div  class="clearfix" style="text-align: right; width:100%; margin-top: -10px !important; color: #fff;">
	            	<span style=" font-size: 14px; display: inline-block; text-align: right;font-family: 'Lato', sans-serif;   background-color: {{ $color }}; padding: 6px; float: right;"> ID: {{ $contract_number }}</span>
	            </div>       	
	         
	            <div class="main-heading-content" style=" margin-top: 40px; padding:0 40px; text-align: center;width:100%;">	            		
	              	@if($contract_heading)
		                <h1 class="main-title">{{ $contract_heading }}</h1>
		                <h2>for</h2>
	              	@endif
	              	<h3>{{ $request['link'] }}</h3>
	            </div>
	            <div class="subject-div" style="padding:6px 40px; margin: 42px 0px 25px 0px;background: {{ $color }};color: #fff">
	              	<h3>To: <span class="name">{{ ucwords($name) }}</span></h3>
	              	@if($request['subject'])
	                	<h3>Subject: <span class="subject">{{ $request['subject'] }}</span></h3>
	              	@endif
	            </div>

	            
	            @if($request['overview_sub_heading'] || $request['overview_description'])
	              	<div class="overview-div">
	                	@if($request['overview_heading'])
		                    <div class="title-div" style="width: 100%; margin-top: 40px;">
		                        <h3 >
		                            <span style="padding-left: 30px; display: inline-block;"></span>
		                            <span style="position:relative; top:-19;margin-top: -7px; background: #fff; display: inline-block; padding: 3px 8px; padding-top: 0; line-height: 33px;">{{ $request['overview_heading'] }}</span> 
		                        </h3>
		                    </div> 
	                  	@endif

	                  	@if($request['overview_sub_heading'])    
	                      	<div class="subtitle" style="padding:6px 40px;">
	                        	<h6>{{ $request['overview_sub_heading'] }}</h6>
	                      	</div>
	                    @endif

	                    @if($request['overview_description'])
	                      	<div class="content-div" style="padding:6px 40px;">
	                        	{!! htmlspecialchars_decode($request['overview_description']) !!}
	                      	</div>
	                    @endif
	              	</div>
	          	@endif

	          	@if($request['scope_sub_heading'] || $request['scope_description'])
	              	<div class="scope-div">
		                @if($request['scope_heading'])
		                    <div class="title-div" style="width: 100%; margin-top: 40px;">
		                        <h3 >
		                            <span style="padding-left: 30px; display: inline-block;"></span>
		                            <span style="position:relative; top:-19;margin-top: -7px; background: #fff; display: inline-block; padding: 3px 8px; padding-top: 0; line-height: 33px;">{{ $request['scope_heading'] }}</span> 
		                        </h3>
		                    </div> 
		                @endif

	                  	@if($request['scope_sub_heading'])    
	                      	<div class="subtitle" style="padding:6px 40px;">
	                        	<h6>{{ $request['scope_sub_heading'] }}</h6>
	                      	</div>
	                    @endif

	                    @if($request['scope_description'])
	                      	<div class="content-div" style="padding:6px 40px;">
	                        	{!! htmlspecialchars_decode($request['scope_description']) !!}
	                      	</div>
	                    @endif
	              	</div>
	          	@endif

	          	@if($request['process_sub_heading'] || $request['process_description'])
	              	<div class="process-description-div">
		                @if($request['process_heading'])
		                    <div class="title-div" style="width: 100%; margin-top: 40px;">
		                        <h3 >
		                            <span style="padding-left: 30px; display: inline-block;"></span>
		                            <span style="position:relative; top:-19;margin-top: -7px; background: #fff; display: inline-block; padding: 3px 8px; padding-top: 0; line-height: 33px;">{{ $request['process_heading'] }}</span> 
		                        </h3>
		                    </div> 
		                @endif

	                    @if($request['process_sub_heading'])    
	                      <div class="subtitle" style="padding:6px 40px;">
	                        <h6>{{ $request['process_sub_heading'] }}</h6>
	                      </div>
	                    @endif

	                    @if($request['process_description'])
	                      <div class="content-div" style="padding:6px 40px;">
	                        {!! htmlspecialchars_decode($request['process_description']) !!}
	                      </div>
	                    @endif
	              	</div> 
	          	@endif     

	          	@if($request['delivery_sub_heading'] || $request['delivery_description'])
	              	<div class="deliverables-div">
		                @if($request['delivery_heading']) 
		                    <div class="title-div" style="width: 100%; margin-top: 40px;">
		                        <h3 >
		                            <span style="padding-left: 30px; display: inline-block;"></span>
		                            <span style="position:relative; top:-19;margin-top: -7px; background: #fff; display: inline-block; padding: 3px 8px; padding-top: 0; line-height: 33px;">{{ $request['delivery_heading'] }}</span> 
		                        </h3>
		                    </div> 
		                @endif    
	                    
	                    @if($request['delivery_sub_heading'])    
	                      	<div class="subtitle" style="padding:6px 40px;">
	                        	<h6>{{ $request['delivery_sub_heading'] }}</h6>
	                      	</div>
	                    @endif

	                    @if($request['delivery_description'])
	                      	<div class="content-div" style="padding:6px 40px;">
	                        	{!! htmlspecialchars_decode($request['delivery_description']) !!}
	                      	</div>
	                    @endif
	              	</div>
	            @endif

	            @if($request['price_sub_heading'] || $request['price_main_description'] || $description)
	              	<div class="deliverables-div">
		                @if($request['price_heading'])
		                    <div class="title-div" style="width: 100%; margin-top: 40px;">
		                        <h3 >
		                            <span style="padding-left: 30px; display: inline-block;"></span>
		                            <span style="position:relative; top:-19;margin-top: -7px; background: #fff; display: inline-block; padding: 3px 8px; padding-top: 0; line-height: 33px;">{{ $request['price_heading'] }}</span> 
		                        </h3>
		                    </div>
		                @endif 

	                  	@if($request['price_sub_heading'])    
	                      	<div class="subtitle" style="padding:6px 40px;">
	                        	<h6>{{ $request['price_sub_heading'] }}</h6>
	                      	</div>
	                  	@endif

	                  	@if($description)
	                      	<div class="table-div" style="padding:6px 20px;">
	                          	<table border="0" cellpadding="0" cellspacing="0" style="width: 100%">
		                            <thead>
		                                <tr>
		                                  	<th class="desc">Description</th>
		                                  	<th class="cost" width="15%" style="text-align: center;">Qty/Hours</th>
		                                  	<th class="cost" width="15%" style="text-align: center;">Unit Price</th>
		                                  	<th class="cost" width="15%" style="text-align: center;">Sub Total</th>
		                                </tr>
		                            </thead>
	                            	<?php $total = 0; ?>
	                            	<tbody>
		                              	@foreach($description as $value)
		                                  	<tr>
			                                    <?php $total = $total + $value['sub_total']; ?>
			                                    <td class="desc">{{ $value['description'] }}</td>
			                                    <td class="item"style="text-align: center;">{{ $value['items'] }}</td>
			                                    <td class="item"style="text-align: center;">{{ $value['price'] }}</td>
			                                    <td class="cost" style="text-align: right;">${{ bcdiv($value['sub_total'], 1, 2) }}</td>
		                                  	</tr>
		                              	@endforeach
	                            	</tbody>
	                            	<tfoot>
		                                <tr>
		                                  	<td colspan="3" style=" background: {{ $color }} !important;text-align: left">Total Price</td>
		                                  	<td style="background: {{ $color }} !important; text-align: right;">${{ bcdiv($total, 1, 2) }}</td>
		                                </tr>
	                            	</tfoot>
	                          	</table>                
	                      	</div>
	                  	@endif

	                    @if($request['price_main_description'])
	                      	<div class="content-div" style="padding:6px 40px;">
	                        	{!! htmlspecialchars_decode($request['price_main_description']) !!}
	                      	</div>
	                    @endif
	              </div>
	          	@endif

	          	@if($request['payment_sub_heading'] || $request['payment_description'])
	              	<div class="deliverables-div">
		                @if($request['payment_heading']) 
		                    <div class="title-div" style="width: 100%; margin-top: 40px;">
		                        <h3 >
		                            <span style="padding-left: 30px; display: inline-block;"></span>
		                            <span style="position:relative; top:-19;margin-top: -7px; background: #fff; display: inline-block; padding: 3px 8px; padding-top: 0; line-height: 33px;">{{ $request['payment_heading'] }}</span> 
		                        </h3>
		                    </div> 
		                @endif    

			            @if($request['payment_sub_heading'])    
		                  	<div class="subtitle" style="padding:6px 40px;">
		                    	<h6>{{ $request['payment_sub_heading'] }}</h6>
		                  	</div>
		                @endif
		                @if($request['payment_description'])
		                  	<div class="content-div" style="padding:6px 40px;">
		                    	{!! htmlspecialchars_decode($request['payment_description']) !!}
		                  	</div>
		                @endif
	              	</div>
	          	@endif

	          	@if($request['last_heading'] || $request['last_description'])
	              	<div class="lastly-div">
		                @if($request['last_heading'])
		                    <div class="title-div" style="width: 100%; margin-top: 40px;">
	                          	<h3 >
		                            <span style="padding-left: 30px; display: inline-block;"></span>
		                            <span style="position:relative; top:-19;margin-top: -7px; background: #fff; display: inline-block; padding: 3px 8px; padding-top: 0; line-height: 33px;">{{ $request['last_heading'] }}</span> 
	                          	</h3>
		                    </div>  
		                @endif   
	                    
	                    @if($request['last_sub_heading'])    
	                      	<div class="subtitle" style="padding:6px 40px;">
	                        	<h6>{{ $request['last_sub_heading'] }}</h6>
	                      	</div>
	                    @endif

	                    @if($request['last_description'])
	                      	<div class="content-div" style="padding:6px 40px;">
	                        	{!! htmlspecialchars_decode($request['last_description']) !!}
	                      	</div>
	                    @endif
	              	</div>
	          	@endif	          	

		        </div>
	        </div><!---contract-detail-wrapper end-->

	        @if($request['proceed_sub_heading'] || $request['proceed_description'])
              	<div class="lastly-div">
	                @if($request['proceed_heading'])
	                    <div class="title-div" style="width: 100%; margin-top: 40px;">
	                        <h3 >
	                            <span style="padding-left: 30px; display: inline-block;"></span>
	                            <span style="position:relative; top:-19;margin-top: -7px; background: #fff; display: inline-block; padding: 3px 8px; padding-top: 0; line-height: 33px;">{{ $request['proceed_heading'] }}</span> 
	                        </h3>
	                    </div>
	                @endif     
                    
                    @if($request['proceed_sub_heading'])    
                      	<div class="subtitle" style="padding:6px 40px;">
                        	<h6>{{ $request['proceed_sub_heading'] }}</h6>
                      	</div>
                    @endif

                    @if($request['proceed_description'])
                      	<div class="content-div" style="padding:6px 40px;">
                        	{!! htmlspecialchars_decode($request['proceed_description']) !!}
                      	</div>
                    @endif
              	</div>
          	@endif

	        <div class="signature-div-main clearfix" style="margin:6px 40px;border-bottom: 2px solid #f0f0f0; padding-bottom: 26px;">
				<h6 class="blue-text">CLIENT ({{ $request['link'] }})</h6>
				<table border="0" cellpadding="0" cellspacing="0" style="width: 100%">
					<tbody>
						<tr>
							<td class="" valign="bottom">
					            <div class="sign-detail-div">
					              	<p><b>{{ ucwords($name) }}</b> </p>
					              	<p>(Authorized Representative)</p>
					              	<p class="date"><span style="padding-right: 6px;"><b>Date: </b></span>{{ date($date_format) }}</p>
					            </div>
							</td>
							<td class="" valign="bottom">
					            <div class="sign-div" style="margin-top: 0px;color: #d7d7d7; text-align: right;">
					              	<div class="sign-img"></div>
					              	<p>SIGNATURE</p>
					            </div> 
							</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="signature-div-main clearfix" style="margin:6px 40px;border-bottom: 2px solid #f0f0f0; padding-bottom: 26px;">
				<h6 class="blue-text">AGENCY ({{ $url }})</h6>
				<table border="0" cellpadding="0" cellspacing="0" style="width: 100%">
					<tbody>
						<tr>
							<td class="" valign="bottom">
					            <div class="sign-detail-div">
					              	<p><b>{{ ucwords($agency_name) }}</b> </p>
					              	<p>({{ ucwords($agency_designation) }})</p>
					              	<p class="date"><span style="padding-right: 6px;"><b>Date: </b></span>{{ date($date_format) }}</p>
					            </div>
							</td>
							<td class="" valign="bottom">

					            <div class="sign-div" style="margin-top: 0px;color: #d7d7d7; text-align: right;">
					              	<div class="sign-img">
						                @if($contract_signature)
						                    <img src="{{ url($contract_signature) }}" alt="signature">
						                @endif
					              	</div>          
					              	<p>SIGNATURE</p>
					            </div> 
							</td>
						</tr>
					</tbody>
				</table>
			</div>
      	</main>

      	<!---footer----> 
	    <footer style="">
	        <div class="footer clearfix" width="100%">
              	<div class="footer-col web-col" style="padding-left:40px;">
                  	<p><img src="{{ url('public/assets/images/globe.png') }}"><span>{{ $url }}</span></p>
              	</div>
              	<div class="footer-col mail-col" style="">
                  	<p><img src="{{ url('public/assets/images/mail.png') }}"><span>{{ $email }}</span></p>
              	</div>
              	<div class="footer-col call-col" style="padding-right:40px;">
                  	<p><img src="{{ url('public/assets/images/phone.png') }}"><span>{{ $phone }}</span></p>
              	</div>           
	        </div>
	    </footer>
      	<!---footer----> 
  	</body>
</html>
<?php //die;?>