<!DOCTYPE html>
<html>
	<head>
	<title>Audit Reports PDF</title>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<style type="text/css">    
			@page { margin: 0; padding: 0; size:960px 1170px;}   
			header { margin: -10px 0 0 0; padding: -10px 0 0 0; }
			.thankyou-section {text-align: center;font-size: 50px; color: {{ $color }}} 
			footer { position:absolute; bottom: 0; left: 0px; right: 0px; height: 40px; line-height:32px; background: {{ $color }}; }
			main{padding-bottom: 0px; margin-bottom: 0;}
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
			  	text-decoration: none;
			  	color: {{ $color }};
			}
			h6{
			  	margin-bottom:0;
			}
			.logo {
			   	width: 300px;
			   	margin-top: 0px;
			   	margin-right: -45px;
			   	margin-bottom: 0px;
			}
			.title-div {
			    padding: 33px 0px 18px 0px;
			}
			.title-div h3 {
			    text-decoration: none;
			    font-size: 23px;
			    font-family: 'Lato', sans-serif;
			    margin: 0;
			}
			.title-div .left-title-div {
			    width: 100%;
			    float: left;
			}
			.title-div .right-logo-div {
			    width: 50%;
			    float: right;
			    text-align: right;
			}
			.red-text {
			    color: #db0000;
			}
			/*main*/
			.blue-text{
			  	color: {{ $color }};
			}
			.main-heading-content h1, .main-heading-content h2{
			  	font-size: 46px;
			}
			.main-heading-content h2, .main-heading-content h3{
			  	color: #262626;
			}  
			.main-heading-content h3{
			  	font-size: 36px;
			}
			.main-head-listing{
			  	/*margin-top: 10px;*/
			}
			.main-head-listing h5 {
			    font-size: 20px;
			    margin-bottom: 4px;
			    position: relative;
			    margin-top: 15.2px;
			}
			.main-head-listing h5 span{
			    color: {{ $color }};
			}
			.site-url {
			    position: absolute;
			    top: 500px !important;
			    margin-top: 200px;
			    width:100%;
			    left: 0;
			}
			/*table*/
			table th, table td {
			    padding: 7px;
			    font-size: 15px;
			    text-align: left;
			    border-bottom: 1px solid #fafafa;
			}
			table th {
			    white-space: nowrap;
			    font-weight: normal;
			    color: #ffffff;
			    font-size: 17px;
			    background: {{ $color }};
			}
			tfoot td{
			    color: #fff;
			    font-size: 17px;
			    padding: 7px;
			}
			.cust-padding {
				padding-top: 25px;
			}
			.screenshot-img-div {
			    margin-top: 0;
			}
			.screenshot {
			    width: 700px;
			    margin: 0 auto;
			    margin-top: 15px;
			}
			.screenshot_speed {
			    width: 700px;
			    margin: 0 auto;
			    margin-top: 15px;
			}
			.screenshot2 {	
				width: 800px;		   
			    margin: 0 auto;
			    margin-top: 15px;
			}
			.image-100 img {
			    max-width: 100%;
			    width: auto;
			}
			.table-image {
    			margin-bottom: 30px;
			}
			/*thankyou*/
			.thanks-div {
			    padding: 145px 0 40px 0;
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
			    margin:0;
			}
			.footer-col{
			   float: left;
			   width: 33.3%;
			   box-sizing: border-box;
			}
			.contract-detail-wrapper {
				page-break-after: always;
			}
			.next-page-content{
				page-break-before: always;
			}
			footer img {
			    width: 15px;
			    margin-right: 5px;
			}
			#watermark {
		        width: 850px;
    			height: 710px;         
		        margin-bottom: 20px;
		        position: fixed; 
		        top: 250px;
		        left: 50px;
		        right: 0px;              
		    }
		    /*.logo-div{
		    	background: #000;
		    	display: inline-block;
		    }*/
		</style>
	</head>
	<body style="font-family: 'Lato', sans-serif;">
		<div id="watermark">
            @if($watermark)
                <img src="{{ url($watermark) }}" height="100%" width="100%" />
            @endif
        </div>
		<main style="position: relative;">
			<!---contract-page-wrapper-->

			<?php 
				if($request['company'] == "2") {
					$backImage = url('assets/images/main-tq-back.jpg');
				} else {
					$backImage = url('assets/images/main-bg.png');
				}
			?>
			<div class="audit-page-wrapper" style="font-family: 'Lato', sans-serif; ">
				<div class="main-page-head-div clearfix" style="margin:0; padding:0 40px;text-align: right;position: relative;background: url({{ $backImage }});background-size: cover; background-repeat: no-repeat; padding-bottom: 350px; height: 797px; width: 100%; page-break-after: always; z-index: -1; padding-top: 22px">
					<div class="main-heading-content" style="margin-top: -22px;">
						@if($request['company'] == "2")							
							<img src="{{ url('assets/images/auditrepport_teqtop.png') }}" alt="" class="logo" style="" >
						@else
							<img src="{{ url('assets/images/auditrepport_xcelance.png') }}" alt="" class="logo" style="" >
						@endif
						<h1 class="main-title blue-text" style=" margin-top: -5px;">Website Analysis and Audit</h1>
						@if($request['link']) <h3>{{ $request['link'] }}</h3> @endif       
						<h2 style="margin:0;">{{ date($date_format) }}</h2>
					</div>
					@if(count($request['description']) > 0)
						<div class="main-head-listing" style="float: right;text-align: right;">
							@foreach($request['description'] as $description)
								<h5>
									<span class="line" style="color: {{ $color }};width: 18px;display: inline-block;height: 2px;margin-right: 7px;position: absolute;top: 17px;left: -30px;background: {{ $color }};"></span>
									<span style="display: inline-block;color: #000;margin-top:5px"> {{ $description }}</span>
								</h5>  
							@endforeach                                              
						</div>
					@endif
				</div>

				@if(count($status_task) > 0 && count($status_task['values']) > 0)
					<div class="status-report-div" style="padding: 10px 20px 3px 20px;">
						@if($status_task['heading'])
							<div class="title-div clearfix" style="width: 100%;">
								<div class="left-title-div">
									<h3 style="">
										<span style="background: #fff;display: inline-block;line-height: 33px;border-bottom: 2px solid {{ $color }};">{{ $status_task['heading'] }}</span>
									</h3>
								</div>
								<div class="right-logo-div">
									<!-- <img src="{{url('assets/images/logo.png')}}" alt="" class="logo"> -->
								</div>            
							</div>  
						@endif

						@if(count($status_task['values']) > 0)  
							<div class="table-div" >
								<table border="0" cellpadding="0" cellspacing="0" style="width: 100%">
									<thead>
										<tr>
											<th class="sno." style="">Sr. No</th>
											<th class="task">Task</th>
											<th class="status">Status</th>
											<th class="remark">Remarks</th>
											<th class="code">Verified Page or Code</th>                        
										</tr>
									</thead>
									<tbody>
										<?php $a = 1; ?>
										@foreach($status_task['values'] as $status)
											<tr>
												<td class="sno">{{ $a }}</td>
												<td class="task">{{ $status['task'] }}</td>
												<td class="status @if($status['status'] == 'Pending' || $status['status'] == 'Not Found' || $status['status'] == 'No') red-text @endif">{{ $status['status'] }}</td>
												<td class="remark @if($status['remarks'] == 'Pending' || $status['remarks'] == 'Unchecked') red-text @endif">{{ $status['remarks'] }}</td>
												<td class="code @if($status['code'] == 'Pending') red-text @endif">{{ $status['code'] }}</td>
											</tr> 
											<?php $a++; ?>
										@endforeach                                                                 
									</tbody>
								</table>                
							</div>
						@endif
					</div>
				@endif
				
				@if(count($mobile) > 0 && count($mobile['values']) > 0)
					<div class="mobile-friendly-div" style="padding: 10px 20px 3px 20px;">
						@if($mobile['heading'])
							<div class="title-div clearfix" style="width: 100%;">
								<div class="left-title-div">
									<h3 style="">
										<span style="background: #fff;display: inline-block;line-height: 33px;border-bottom: 2px solid {{ $color }};">{{ $mobile['heading'] }}</span>
									</h3>
								</div>
								<div class="right-logo-div">
									<!-- <img src="{{url('assets/images/logo.png')}}" alt="" class="logo"> -->
								</div>            
							</div> 
						@endif

						@if(count($mobile['values']) > 0)   
							<div class="table-div" >
								<table border="0" cellpadding="0" cellspacing="0" style="width: 100%">
									<thead>
										<tr>
											<th class="" style="">Sr. No</th>
											<th class="">Task</th>
											<th class="">Pixel Resolution</th>
											<th class="">Current View</th>
											<th class="">Remark</th>                        
										</tr>
									</thead>
									<tbody>
										<?php $b = 1; ?>
										@foreach($mobile['values'] as $mob)
										<?php $shorturi =  strlen($mob['view']) > 15 ? substr($mob['view'],0,15)."..." : $mob['view']; ?>
											<tr>
												<td class="">{{ $b }}</td>
												<td class="">{{ $mob['task'] }}</td>
												<td class="">{{ $mob['pixels'] }}</td>
												<td class="r"><a href="{{$mob['view']}}" target="_blank">{{$shorturi}}</a></td>
												<td class="">{{ $mob['remarks'] }}</td>
											</tr> 
											<?php $b++; ?>
										@endforeach  
									</tbody>
								</table>                
							</div>
						@endif
					</div>
				@endif

				@if(count($speed) > 0 && count($speed['values']) > 0)	
					<div class="next-page-content"></div>				
					<div class="speed-test-div" style="padding: 10px 20px 3px 20px;">
						@if($speed['heading'])
							<div class="title-div clearfix">
								<div class="left-title-div">
									<h3 style="">
										<span style="background: #fff;display: inline-block;line-height: 33px;border-bottom: 2px solid {{ $color }}">{{ $speed['heading'] }}</span>
									</h3>
								</div>
								<div class="right-logo-div">
									<!-- <img src="{{url('assets/images/logo.png')}}" alt="" class="logo"> -->
								</div>            
							</div>
						@endif

						@if(count($speed['values']) > 0)   
							<div class="table-div" >
								<?php $c = 1; ?>
								@foreach($speed['values'] as $sped)
									@if($c%2 != 0 && $c != 1)
										<div class="next-page-content"></div>
									@endif
									<table border="0" cellpadding="0" cellspacing="0" style="width: 100%">
										<thead>
											<tr>
												<th class="" style="">Sr. No</th>
												<th class="">Task</th>
												<th class="">Page Speed Score</th>
												<th class="">Best</th>
												<th class="">Remark</th>                        
											</tr>
										</thead>
										<tbody>
										
											<tr>
												<td class="cust-padding">{{ $c }}</td>
												<td class="cust-padding">{{ $sped['task'] }}</td>
												<td class="cust-padding">{{ $sped['score'] }}</td>
												<td class="cust-padding r">{{ $sped['best'] }}</td>
												<td class="cust-padding">{{ $sped['remarks'] }}</td>
												
											</tr> 
											<?php $c++; ?>
										</tbody>
									</table> 

									@if($sped['image'])
										<div class="screenshot-img-div table-image">
											<div class="screenshot_speed image-100"><img src="{{ url($sped['image']) }}"  alt="screenshot"></div>
										</div>		 
									@endif
								@endforeach               
							</div>
						@endif
					</div>
				@endif

				@if(count($broken_link) > 0)
					@if(array_key_exists('file', $broken_link) || array_key_exists('image', $broken_link))
						@if($broken_link['image'] || $broken_link['file'])
							<div class="next-page-content"></div>
							<div class="broken-links-div" style="padding: 0px 20px 0px 20px;">
								@if($request['broken_heading'])
									<div class="title-div clearfix" >
										<div class="left-title-div">
											<h3 style="">
												<span style="background: #fff;display: inline-block;line-height: 33px;border-bottom: 2px solid {{ $color }}">{{ $broken_link['heading'] }}</span>
											</h3>
										</div>
										<div class="right-logo-div">
											<!-- <img src="{{url('assets/images/logo.png')}}" alt="" class="logo"> -->
										</div>            
									</div> 
								@endif

								@if($broken_link['image'])
									<div class="screenshot-img-div">
										@if($broken_link['image'])
											<div class="screenshot2 image-100">
												<img src="{{ url($broken_link['image']) }}"  alt="screenshot">
											</div>
										@endif                                         
									</div> 
								@endif

								@if($broken_link['file'])
									<div class="table-div" style="margin-top: 30px;">
										@if($broken_link['file'])
											<a href="{{ url($broken_link['file']) }}">Click here to download broken links.</a>
										@endif
									</div>
								@else
									<p style="font-size: 16px; color: #15ab15;">Great! No broken link found in the Website.</p>
								@endif
							</div>
						@endif
					@endif
				@endif

				@if(count($compititor) > 0)
					@if(array_key_exists('values', $compititor))
						<div class="next-page-content"></div>
						<div class="competitor-div" style="padding: 10px 20px 3px 20px;">
							@if($compititor['heading'])
								<div class="title-div clearfix" style="width: 100%;">
									<div class="left-title-div">
										<h3 style="">
											<span style="background: #fff;display: inline-block;line-height: 33px;border-bottom: 2px solid {{ $color }}">{{ $compititor['heading'] }}</span>
										</h3>
									</div>
									<div class="right-logo-div">
										<!-- <img src="{{url('assets/images/logo.png')}}" alt="" class="logo"> -->
									</div>            
								</div> 
							@endif  

							@if(count($compititor['values']) > 0) 
								<div class="screenshot-img-div">
									<?php $c = 1; ?>
									@foreach($compititor['values'] as $compit)
										@if($compit['image'])
											@if($c%2 != 0 && $c != 1)
												<div class="next-page-content"></div>
											@endif
											<div class="screenshot2 image-100">
												<h3 style="margin-top: 0;">{{ $compit['title'] }}</h3>
												<img src="{{ url($compit['image']) }}"  alt="screenshot">
											</div>
											<?php $c++; ?>
										@endif
									@endforeach                                          
								</div> 
							@endif             
						</div>
					@endif
				@endif

				@if(count($current) > 0)
					@if(array_key_exists('values', $current))
						<div class="next-page-content"></div>
						<div class="current-div" style="padding: 10px 20px 3px 20px;">
							@if($current['heading'])
								<div class="title-div clearfix" style="width: 100%;">
									<div class="left-title-div">
										<h3 style="">
											<span style="background: #fff;display: inline-block;line-height: 33px;border-bottom: 2px solid {{ $color }}">{{ $current['heading'] }}</span>
										</h3>
									</div>								        
								</div>
							@endif

							@if(count($current['values']) > 0)   
								<div class="screenshot-img-div">
									<?php $c = 1; ?>
									@foreach($current['values'] as $curnt)
										@if($curnt['image'])
											@if($c%2 != 0 && $c != 1)
												<div class="next-page-content"></div>
											@endif
											<div class="screenshot2 image-100" >
												<h3 style="margin-top: 0;">{{ $curnt['task'] }}</h3>
												<img src="{{ url($curnt['image']) }}"  alt="screenshot" >
											</div>
											<?php $c++; ?>
										@endif
									@endforeach                                       
								</div> 
							@endif             
						</div>
					@endif
				@endif

				@if(count($suggestion) > 0)
					@if(array_key_exists('values', $suggestion))
						<div class="next-page-content"></div>
						<div class="suggestions-div" style="padding: 10px 20px 3px 20px; margin-top: 250px;">
							@if($suggestion['heading'])
								<div class="title-div clearfix" style="width: 100%;">
									<div class="left-title-div">
										<h3 style="">
											<span style="background: #fff;display: inline-block;line-height: 33px;border-bottom: 2px solid {{ $color }}">{{ $suggestion['heading'] }}</span>
										</h3>
									</div>
									<div class="right-logo-div">
										<!-- <img src="{{url('assets/images/logo.png')}}" alt="" class="logo"> -->
									</div>            
								</div>
							@endif 

							@if(count($suggestion['values']) > 0)  
								<div class="table-div" >
									<table border="0" cellpadding="0" cellspacing="0" style="width: 100%">
										<thead>
											<tr>
												<th class="" style="">Sr. No</th>
												<th class="">Task</th>
												<th class="">Remark</th>                       
											</tr>
										</thead>
										<tbody>
											<?php $x = 1; ?>
											@foreach($suggestion['values'] as $sugest)
												@if($sugest['task'] || $sugest['remarks'])
													<tr>
														<td class="">{{ $x }}</td>
														<td class="">{{ $sugest['task'] }}</td>
														<td class="">{{ $sugest['remarks'] }}</td>
													</tr>
													<?php $x++; ?>
												@endif
											@endforeach   
										</tbody>
									</table>                
								</div>
							@endif
						</div>
					@endif
				@endif

				@if(count($key_words) > 0)
					@if(array_key_exists('file', $key_words))
						<div class="next-page-content"></div>
						<div class="current-div" style="padding: 10px 20px 3px 20px;">
							@if($key_words['heading'])
								<div class="title-div clearfix" style="width: 100%;">
									<div class="left-title-div">
										<h3 style="">
											<span style="background: #fff;display: inline-block;line-height: 33px;border-bottom: 2px solid {{ $color }}">{{ $key_words['heading'] }}</span>
										</h3>
									</div>								        
								</div>
							@endif

							@if($key_words['file'])   
								<div class="screenshot-img-div">
									<div class="screenshot2 image-100" >
										<img src="{{ url($key_words['file']) }}"  alt="screenshot" >
									</div>	                                      
								</div> 
							@endif             
						</div>
					@endif
				@endif

				@if(count($we_can_do) > 0 && $we_can_do['content'])
					@if(array_key_exists('content', $we_can_do))
						<div class="next-page-content"></div>
						<div class="current-div" style="padding: 10px 20px 3px 20px;">
							@if($we_can_do['heading'])
								<div class="title-div clearfix" style="width: 100%;">
									<div class="left-title-div">
										<h3 style="">
											<span style="background: #fff;display: inline-block;line-height: 33px;border-bottom: 2px solid {{ $color }}">{{ $we_can_do['heading'] }}</span>
										</h3>
									</div>								        
								</div>
							@endif

							@if($we_can_do['content'])   
								<div class="screenshot-img-div">
									{!! htmlspecialchars_decode($we_can_do['content']) !!}                                   
								</div> 
							@endif             
						</div>
					@endif
				@endif

				@if(count($final_data) > 0)
					@if(array_key_exists('content', $final_data))
						<div class="next-page-content"></div>
						<div class="current-div" style="padding: 10px 20px 3px 20px;">
							@if($final_data['heading'])
								<div class="title-div clearfix" style="width: 100%;">
									<div class="left-title-div">
										<h3 style="">
											<span style="background: #fff;display: inline-block;line-height: 33px;border-bottom: 2px solid {{ $color }}">{{ $final_data['heading'] }}</span>
										</h3>
									</div>								        
								</div>
							@endif

							@if($final_data['content'])   
								<div class="screenshot-img-div">
									{!! htmlspecialchars_decode($final_data['content']) !!}                                   
								</div> 
							@endif             
						</div>
					@endif
				@endif

			</div><!---audit-page-wrapper end-->
		</main>
    <?php //die; ?> 
		<div class="thankyou-section">
		  	<div class="thanks-div">
		    	Thank You!
		  	</div>
		</div>

		<!---footer----> 
	    <footer style="">
	        <div class="footer clearfix" width="100%">
              	<div class="footer-col web-col" style="padding-left:40px;">
                  	<p><img src="{{ url('assets/images/globe.png') }}"><span>{{ $url }}</span></p>
              	</div>
              	<div class="footer-col mail-col" style="">
                  	<p><img src="{{ url('assets/images/mail.png') }}"><span>{{ $email }}</span></p>
              	</div>
              	<div class="footer-col call-col" style="padding-right:40px;">
                  	<p><img src="{{ url('assets/images/phone.png') }}"><span>{{ $phone }}</span></p>
              	</div>           
	        </div>
	    </footer>
      	<!---footer----> 
	</body>
</html>