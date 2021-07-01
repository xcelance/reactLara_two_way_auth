<!DOCTYPE html>

<html>

	<head>

		<title>Estimation PDF Sheet</title>

		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">

		<meta content="width=device-width, initial-scale=1" name="viewport">

		<meta content="IE=edge" http-equiv="X-UA-Compatible">

		<style type="text/css">    

	    @page { margin: 0; padding: 0; margin-top: 10px; }   

	    header { margin: -10px 0 0 0; padding: -10px 0 0 0; } 

	    footer { position: absolute; bottom: 0px; left: 0px; right: 0px; height: 40px; } 

		footer .footer-bottom {  height:40px; background: {{ $color }}; }

	    main{padding-bottom: 30px;}

		body {

		    position: relative;

		    margin: 0 auto;

		    color: #2b2a29;

		    font-family: 'Lato', sans-serif;

		    font-size: 16px;

		}

		.contract-detail-wrapper{

			page-break-after: always;

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

		p {

		    margin-top: 0;

		    margin-bottom: 8px;

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

		    background: #0089ab;

		}

		.footer .inner-header {

		    padding: 10px 0px;

		}

		.footer p {

		    color: #fff;

		}

		.footer-col{

		   	float: left;

		   	width: 33.3%;

		   	box-sizing: border-box;

		}

		footer img {

		    width: 15px;

		    margin-right: 5px;

		}

		/*main*/

		.blue-text{

			color: {{ $color }};

		}



		.main-heading-content h1{

		  font-size: 30px;

		  color: #333333;

		}

		.main-heading-content h2{

		  	font-size: 26px;

		    color: #333333;

		}



		.main-heading-content h3{

		  font-size: 26px;

		  color: {{ $color }};

		}

		.title-div h3 {

		    font-size: 16px;

		    padding: 6px 20px;

		    color: #fff;

		    margin-top: 0;

		    text-transform: uppercase;

		    font-weight: inherit;

		}

		.title-div h3 {

		    background: {{ $color }};

		}

		.content-div ul{

		  	padding-left: 15px;

		}

		.content-div p .numbering {

		    top: 0;

		    width: 3%;

		    display: inline-block;

		    vertical-align: top;

		    padding-right: 5px;

		    position: absolute;

		}

		.content-div p .text {

		    width: 96%;

		    display: inline-block;

		    padding-left: 21px;

		}

		.content-div p {

		    vertical-align: top;

		    position: relative;

		}

		/*circles-sec*/

		.circle-col .img-div {

		    width: 90px;

		    height: 90px;

		    border-radius: 15px;

		    text-align: center;

		    margin: 0 auto;

		    border: 6px solid {{ $color }};



		}



		.circle-col .img-div img {

		    width: auto;

		    height: 40px;

		    text-align: center;

		    vertical-align: middle;

		    margin-top: 27px;

		}

		.circle-content-div {

		    text-align: center;

		    margin-top: 15px;

		}

		.circle-content-div h4 {

		    margin: 0;

		    font-size: 18px;

		}

		/*breakdown-list*/

		.breakdown-list td {

		     border-bottom: 1px solid #d1d1d1;

            vertical-align: top;

		}

		.breakdown-list li {

		    width: 100%;

		    padding: 4px 0px;

		    text-align: center;

		    border-right: 1px solid #d1d1d1;

		    margin-bottom: 10px;

		    list-style-type: none;

		}

		/*.breakdown-list td:last-child li {

		    border-right: 0px solid #d1d1d1;

		}*/

		.breakdown-list h4 {

		    margin: 0;

		    font-size: 14px;

		}

		.breakdown-list p {

		    font-size: 14px;

		    margin-bottom: 0;

		}



		/*table*/

		table th, table td {

		    padding: 5px 7px;

		    text-align: left;

		    border-bottom: 0px solid #c3c1c1;

		    font-size: 14px;

		}

		table th {

		    white-space: nowrap;

		    font-size: 15px;

		    font-weight: 700;

		    color: {{ $color }};

		}

		tfoot td{

		    font-size: 14px;

		    padding: 7px;

		}

		table td {

		    /*background: #f5f5f5;*/

		}

		table .grey-tr td {

		    background: #f5f5f5;

		    border-bottom: 4px solid white;

		}

		table .id, table .items{

		    font-weight: 700;

		}

		table td.plus-inner {

		    padding-left: 38px;

		}

		tr td:nth-child(4), tr td:nth-child(3), tr th:nth-child(3), tr th:nth-child(4) {

		    text-align: center !important;

		}

		th.id {

		    width: 1%;

		}

		th.items {

		    width: 60%;

		}			

		.designing, .development{

		  	text-align: center;

		}

		/*signature sec*/

		.sign-detail-div, .sign-div{

		  	float: left;

		  	width: 50%;

		}

		.sign-div{

		  	float: right;

		  	width: 50%;

		}

		.signature-div-main p{

		    margin: 0;

		}

		.signature-div-main h6 {

		    font-size: 18px;

		    margin-bottom: 5px;

		    margin-top: 16px;

		}

		.signature-div-main .date{

		    margin-top: 5px;

		}

		.signature-div-main .sign-img {

		    margin-top: 2px;

		    margin-bottom: 2px;

		    width: 28%;

		    margin-left: auto;

		    margin-right: auto;

		}

		.signature-div-main .sign-img img {

		    width: 100%;

		}



		.footer-bottom .inner-header {

		    padding: 3px 0px;

		    background: #0089ab;

		}

		.footer-bottom p {

		    color: #fff;

		}

		.footer-col{

		   	float: left;

		   	width: 33.3%;

		   	box-sizing: border-box;

		}

		.footer-bottom img {

		    width: 15px;

		    margin-right: 5px;

		}



		#watermark {

            width: 700px;

            height: 670px;              

            margin-bottom: 20px;

            position: fixed; 

            top: 250px;

            left: 30px;

            right: 0px;  

            opacity: 0.5;            

        }	

 		</style>

	</head>

	<body style="font-family: 'Lato', sans-serif;">



		<div id="watermark">

            @if($watermark)

                <img src="{{ url($watermark) }}" height="100%" width="100%" />

            @endif

        </div>

		

	  	<main >

		   	<!---contract-detail-wrapper-->

		    <div class="contract-detail-wrapper" style="font-family: 'Lato', sans-serif;">

		     

		      	<div class="main-heading-content" style="padding:0 20px; text-align: center;">

			        <h1 class="main-title">{{ $main_heading }}</h1>

			        <h3>{{ $request['link'] }}</h3>

			        @if($request['subject'])

			        	<h2>{{ $request['subject'] }}</h2>

			        @endif

		      	</div>



		      	@if($request['description_heading'] || $request['description_content'])

			      	<div class="brief-div">

			      		@if($request['description_heading'])

			             	<div class="title-div" style="width: 100%; margin-top: 20px;">

			                  	<h3>{{ $request['description_heading'] }}</h3>

			             	</div>

		             	@endif

		             	@if($request['description_content'])     

			              	<div class="content-div" style="padding:6px 20px;">

			                	{!! htmlspecialchars_decode($request['description_content']) !!}

			              	</div>

		              	@endif

			      	</div>

			    @endif



			    @if(count($development) > 0 || $request['development_heading'])

				    <div class="development-div">

				    	@if($request['development_heading'])

				         	<div class="title-div" style="width: 100%; margin-top: 20px;">

				              	<h3>{{ $request['development_heading'] }}</h3>

				         	</div>  

				        @endif 

				        @if(count($development) > 0)    

				          	<div class="content-div" style="padding:6px 20px;">

				              	<table border="0" cellpadding="0" cellspacing="0" style="width: 100%">

				                  	<tbody>

				                    	<tr>

				                    		@foreach($development as $key => $develop)

				                    			@if($key !== "heading")

						                          	<td style="width:20%;">

							                            <div class="circles-wrap">

							                              	<div class="circle-col">

							                              		@if(!empty($develop['image']))

								                                 	<div class="img-div">

								                                   		<img src="{{ url($develop['image']) }}" alt=""> 

								                                 	</div>

								                                @endif

							                                 	<div class="circle-content-div">

							                                 		@if(!empty($develop['type']))

								                                   		<h4>{{ $develop['type'] }}</h4>

								                                   	@endif

								                                   	@if(!empty($develop['technology']))

								                                   		<p>{{ $develop['technology'] }}</p>

								                                   	@endif

							                                 	</div>

							                              	</div>

							                            </div>                            

						                          	</td>

						                        @endif

				                         	@endforeach                                                   

				                    	</tr>

				                  	</tbody>

				                </table>

				          	</div>

				        @endif

			      	</div>

			    @endif



		      	@if($request['feature_heading'] || $request['feature_content'])

			      	<div class="feature-div">

			      		@if($request['feature_heading'])

			             	<div class="title-div" style="width: 100%; margin-top: 20px;">

			                  	<h3>{{ $request['feature_heading'] }}</h3>

			             	</div> 

		             	@endif

		             	@if($request['feature_content'])    

			              	<div class="content-div" style="padding:6px 20px;">

			                	{!! htmlspecialchars_decode($request['feature_content']) !!}

			              	</div>

			            @endif

			      	</div>

			    @endif



			    @if($request['client_heading'] || $request['feature_content'])

			      	<div class="queries-div">

			      		@if($request['client_heading'])

			             	<div class="title-div" style="width: 100%; margin-top: 20px;">

			                  	<h3>{{ $request['client_heading'] }}</h3>

			             	</div>  

		             	@endif

		             	@if($request['client_content'])   

			              	<div class="content-div" style="padding:6px 20px;">

				                {!! htmlspecialchars_decode($request['client_content']) !!}    

			              	</div>

			            @endif

			      	</div> 

		      	@endif     

		      	

		      	@if($request['breakdown_heading'] || $request['start_date'] || $request['delivery_date'] || $request['billing_hours'] || $request['estimated_cost'])

			      	<div class="breakdown-list-div">

			      		@if($request['breakdown_heading'])

			             	<div class="title-div" style="width: 100%; ">

			                  	<h3 style="margin-bottom: 0;">{{ $request['breakdown_heading'] }}</h3>

			             	</div>  

		             	@endif  

		             	@if($request['start_date'] || $request['delivery_date']) 

			              	<div class="content-div" style="padding:6px 20px;">

			                  	<div class="breakdown-table-div" style="">

				                    <table border="0" cellpadding="0" cellspacing="0" style="width: 100%">

				                      	<tbody>

					                        <tr class="breakdown-list">

					                        	@if($request['start_date'])

					                        		<?php 

						                        		$timestamp = strtotime($request['start_date']);

						    							$datee = date($date_format, $timestamp); 

						                        	?>

					                          		<td><li><h4>Project Start Date</h4><p>{{ $datee }}</p></li></td>

					                          	@endif

					                          	@if($request['delivery_date'])

					                          		<?php 

						                        		$timestamp1 = strtotime($request['delivery_date']);

						    							$date1 = date($date_format, $timestamp1); 

						                        	?>

					                          		<td><li><h4>Project Delivery Date</h4><p>{{ $date1 }}</p></li></td>

					                          	@endif

					                          	

					                          	<?php $t_days = $total_hours / 8; ?>

					                          	<td><li style="border: 0"><h4>Total Billing Hours</h4><p>{{ $total_hours }}</p><p>({{ round($t_days) }} Working Days)</p></li></td>

					                          	

					                          	<td><li style="border-left: : 1px solid #d1d1d1; border-right: 0"><h4>Total Estimated Cost</h4><p>${{ bcdiv($total_amount, 1, 2) }}</p></li></td>

					                        </tr>

				                      	</tbody>

				                    </table>

			                  	</div>

			              	</div>

		              	@endif

			      	</div>

			    @endif







		      	<div class="deliverables-div">  

		            <div class="table-div" style="margin: 20px 20px 100px 20px;">

		              	<table border="0" cellpadding="0" cellspacing="0" style="width: 100%">

			                <thead>

			                  	<tr>

				                    <th class="id">ID</th>

				                    <th class="items">Items</th>

				                    <th class="designing">Designing(hrs)</th>

				                    <th class="development">Development(hrs)</th>

			                  	</tr>

			                </thead>

		                	<tbody>



		                		<?php $a = 1; $dev_price = 0; $des_price = 0; ?>

		                		@foreach($pricing as $price)

		                			<?php $b = 1; ?>

		                			<tr class="grey-tr">

					                    <td class="id">{{ $a }}.</td>

					                    <td class="items">{{ $price['description'] }}</td>

					                    <td class="designing">{{ $price['design'] }}</td>

					                    <td class="development">{{ $price['develop'] }}</td>

					                    <?php $des_price = $des_price + $price['design']; $dev_price = $dev_price + $price['develop']; ?>

				                  	</tr>

				                  	@if(isset($price['child']) && count($price['child']) > 0)

					                  	@foreach($price['child'] as $child1)

					                  		<?php $c = 1; ?>

					                  		<!------------inner td content---------------->

					                      	<tr>

						                        <td colspan="1"></td>

						                        <td class="id items"><span class="inner-id">{{ $a }}.{{ $b }}</span> {{ $child1['description'] }}</td>

						                        <td class="designing">{{ $child1['design'] }}</td>

						                        <td class="development">{{ $child1['develop'] }}</td>

						                        <?php $des_price = $des_price + $child1['design']; $dev_price = $dev_price + $child1['develop']; ?>

					                      	</tr>

					                      	@if(isset($child1['child']) && count($child1['child']) > 0)

							                  	@foreach($child1['child'] as $child2)

							                  		<?php $d = 1; ?>

							                  		<!---plus1 inner td content--->

					                                <tr class="plus-inner-tr">

					                                  	<td colspan="1"></td>

					                                  	<td class="plus-inner"><span class="plus-inner-id">{{ $a }}.{{ $b }}.{{ $c }}</span> {{ $child2['description'] }}</td>

					                                  	<td class="designing">{{ $child2['design'] }}</td>

					                                  	<td class="development">{{ $child2['develop'] }}</td>

					                                  	<?php $des_price = $des_price + $child2['design']; $dev_price = $dev_price + $child2['develop']; ?>

					                                </tr>

					                                @if(isset($child2['child']) && count($child2['child']) > 0)

									                  	@foreach($child2['child'] as $child3)

									                  		<!---plus1 inner td content--->

							                                <tr class="plus-inner-tr">

							                                  	<td colspan="1"></td>

							                                  	<td class="plus-inner"><span class="plus-inner-id">{{ $a }}.{{ $b }}.{{ $c }}.{{ $d }}</span> {{ $child3['description'] }}</td>

							                                  	<td class="designing">{{ $child3['design'] }}</td>

							                                  	<td class="development">{{ $child3['develop'] }}</td>

							                                  	<?php $des_price = $des_price + $child3['design']; $dev_price = $dev_price + $child3['develop']; ?>

							                                </tr>

									                      	<?php $d++; ?>

									                  	@endforeach

									                @endif

							                      	<?php $c++; ?>

							                  	@endforeach

							                @endif

					                      	<?php $b++; ?>

					                  	@endforeach

					                @endif

				                  	<?php $a++; ?>

		                		@endforeach

			                  	                

		                	</tbody>

		                	<tfoot>

		                		<?php 

		                			$tot_hours = $dev_price + $des_price; 

		                		?>

			                  	<tr>

				                    <td colspan="1"></td>

				                    <td colspan="1">Total Designing & Development Hours</td>

				                    <td><strong style="font-weight: 700">{{ $des_price }}</strong></td>

				                    <td style="text-align: center;"><strong style="font-weight: 700; ">{{ $dev_price }}</strong></td>

			                  	</tr>

			                  	<tr>

				                    <td colspan="1"></td>

				                    <td colspan="1">Total Billable Hours</td>

				                    <td colspan="1"></td>

				                    <td><strong style="font-weight: 700">{{ $tot_hours }}</strong></td>

			                  	</tr>

			                  	

			                  	<tr>

				                    <td colspan="1"></td>

				                    @if($request['estimated_price'])

				                    	<?php $cal_amt = $tot_hours * $request['estimated_price']; ?>

				                    	<td colspan="2" style="font-size: 16px; color: #fff; background: {{ $color }} !important; font-size: 16px;">Total Corresponding Cost ({{ $tot_hours }} x ${{ $request['estimated_price'] }})</td>

				                    	<td style=" font-size: 16px; color: #fff; background: {{ $color }} !important; padding: 9px 39px; font-size: 16px;">${{ bcdiv($cal_amt, 1, 2) }}</td>

				                    @else

				                    	<td colspan="2" style="font-size: 16px; color: #fff; background: {{ $color }} !important; font-size: 16px;">Total Corresponding Cost ({{ $tot_hours }})</td>

				                    	<td style=" font-size: 16px; color: #fff; background: {{ $color }} !important; padding: 9px 39px; font-size: 16px;">${{ $tot_hours }}</td>

				                    @endif  

			                  	</tr>

		                	</tfoot>

		              	</table>

		            </div>

		      	</div>      	

		    </div><!---contract-detail-wrapper end-->



		    @if($request['notes_heading'] || $request['notes_content'])

		      	<div class="feature-div" style="margin-top: -10px;">

		      		@if($request['notes_heading'])

		             	<div class="title-div" style="width: 100%; ">

		                  	<h3>{{ $request['notes_heading'] }}</h3>

		             	</div> 

	             	@endif

	             	@if($request['notes_content'])    

		              	<div class="content-div" style="padding:6px 20px;">

		                	{!! htmlspecialchars_decode( str_replace('UNIT_PRICE', $request['estimated_price'], $request['notes_content'])) !!}  

		              	</div>

	              	@endif

		      	</div>

		    @endif	 



		    <div class="signature-sec last-page" style="">

             	<div class="title-div" style="width: 100%; margin-top: 20px;">

                  	<h3>Authorization to Proceed</h3>

             	</div>        

		      	<div class="signature-div-main clearfix" style="margin:6px 20px;border-bottom: 2px solid #f0f0f0;    padding-bottom: 26px;height:72px;">

			        <h6 class="blue-text">CLIENT ({{ $request['link'] }})</h6>

			        <div class="sign-detail-div">

			          	<p><b>{{ ucwords($name) }}</b> </p>

			          	<p>(Authorized Representative)</p>

			          	<p class="date"><span style="padding-right: 6px;"><b>Date:</b></span>{{ date($date_format) }}</p>

			        </div>

			        <div class="sign-div" style="margin-top: 40px;color: #d7d7d7; text-align: center; margin-left: 60px;">

			          	<div class="sign-img">            

			          	</div>

			          	<p>SIGNATURE</p>

			        </div>  

		      	</div>

		      	<div class="signature-div-main clearfix" style="margin:6px 20px;border-bottom: 0px solid #f0f0f0;    padding-bottom: 26px;height:72px;">

			        <h6 class="blue-text">AGENCY ({{ $url }})</h6>

			        <div class="sign-detail-div">

			          	<p><b>{{ ucwords($agency_name) }}</b> </p>

			          	<p>({{ ucwords($agency_designation) }})</p>

			          	<p class="date"><span style="padding-right: 6px;"><b>Date:</b></span>{{ date($date_format) }}</p>

			        </div>

			        <div class="sign-div" style="margin-top: 10px;color: #d7d7d7; text-align: center; margin-left: 60px;">

			          	<div class="sign-img">

			            	@if($contract_signature)

			                    <img src="{{ url($contract_signature) }}" alt="signature">

			                @endif

			          	</div>          

			          	<p>SIGNATURE</p>

			        </div>  

		      	</div> 

		    </div>   

	  	</main>

	  	



	  	<!---footer----> 

	  	<footer style="">

	      	<div class="footer-bottom clearfix" width="100%">

		        <div class="footer-col web-col" style="padding-left:40px;">

		          	<p style="margin:12px"><img src="{{ url('public/assets/images/globe.png') }}"><span>{{ $url }}</span></p>

		        </div>

		        <div class="footer-col mail-col" style="">

		          	<p style="margin:12px"><img src="{{ url('public/assets/images/mail.png') }}"><span>{{ $email }}</span></p>

		        </div>

		        <div class="footer-col call-col" style="padding-right:40px;">

		          	<p style="margin:12px"><img src="{{ url('public/assets/images/phone.png') }}"><span>{{ $phone }}</span></p>

		        </div> 

	    	</div>

	  	</footer>

	  	<!---footer---->   

	</body>

</html>