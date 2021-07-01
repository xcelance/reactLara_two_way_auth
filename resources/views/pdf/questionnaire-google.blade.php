<!DOCTYPE html>
<html>
  	<head>
      	<title>Questionnaire Google</title>
      	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
      	<meta content="width=device-width, initial-scale=1" name="viewport">
      	<meta content="IE=edge" http-equiv="X-UA-Compatible">
      	<style type="text/css">    
	      	@page { margin: 10px 0 0 0; padding: 0; }   
	        header { margin: 10px 0 0 0; padding: -10px 0 0 0; }
	        footer { position:absolute; bottom: 0; left: 0px; right: 0px; height: 50px;background: #ff8c00; } 
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
			    background: #ff8c00;
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
				color: #ff8c00;
			}
			.title-div span {
			    color: #ff8c00;
			}
			.main-heading-content h1, .main-heading-content h2{
			  	font-size: 30px;
			  	color: #333333;
			}
			.main-heading-content h3{
			  	font-size: 26px;
			  	color: #ff8c00;
			}
			.title-div h3{
			    text-decoration: none;
			    font-size: 23px;
			    font-family: 'Lato', sans-serif;
			    margin: 0;    
			    height: 3px;
			    display: block;
			    line-height: 5px; 
			    background: #ff8c00; 
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
			    color: #ff8c00;
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
			#watermark {
		        width: 730px;
    			height: 670px;         
		        margin-bottom: 20px;
		        position: fixed; 
		        top: 250px;
		        left: 50px;
		        right: 0px;              
		    }
      	</style>
  	</head>
  	<body style="font-family: 'Lato', sans-serif;"> 
  		<div id="watermark">
            <img src="{{ url('assets/images/teqtop_watermark.png') }}" height="100%" width="100%" />
        </div>
      	<main style="position: relative;">
	      	<!---contract-detail-wrapper-->
	        <div class="contract-detail-wrapper" style="font-family: 'Lato', sans-serif;">
	         
	            <div class="main-heading-content" style="padding:0 40px; text-align: center;">	              	
		                <h1 class="main-title">Google Ads Questionnaire</h1>		                
	              		<h3 style="word-break: break-all;font-size: 20px;">{{ $website }}</h3>
	            </div>
	            <div class="subject-div" style="padding:6px 40px; margin: 42px 0px 25px 0px;background: #ff8c00;color: #fff">
	              	<h3>Client Name: <span class="name">{{ ucwords($client_name) }}</span></h3>	              	
	                <h3>Country: <span class="subject">{{ $country }}</span></h3>
	              	
	            </div>

	              	<div class="overview-div">
		                    <div class="title-div" style="width: 100%; margin-top: 40px;">
		                        <h3 >
		                            <span style="padding-left: 30px; display: inline-block;"></span>
		                            <span style="position:relative; top:-19;margin-top: -7px; background: #fff; display: inline-block; padding: 3px 8px; padding-top: 0; line-height: 33px;">Questionnaires</span> 
		                        </h3>
		                    </div>  
	                      	<div class="subtitle" style="padding:6px 40px;">
	                        	<h6>1. Is there any specific area you want to target in your campaign? Or this website for all countries?</h6>
	                      	</div>
		                    
	                      	<div class="content-div" style="padding:6px 40px;">
	                      		@if($answer1)
	                        		{!! htmlspecialchars_decode($answer1) !!}
	                        	@else
	                        		No answer
	                        	@endif
	                      	</div>
		                    
	              			<div class="subtitle" style="padding:6px 40px;">
	                        	<h6>2. Is there any kind of specific devices you want to show your ad or for all of the devices including: Mobiles, desktops, laptops, (We suggest to select all the devices.)</h6>
	                      	</div>

		                    
	                      	<div class="content-div" style="padding:6px 40px;">
	                      		@if($answer2)
	                        		{!! htmlspecialchars_decode($answer2) !!}
	                        	@else
	                        		No answer
	                        	@endif
	                      	</div>

	              			<div class="subtitle" style="padding:6px 40px;">
	                        	<h6>3. Is there any kind of network you want to display your advertisement? Like display Network, Video Network or Search Network?</h6>
	                      	</div>

		                    
	                      	<div class="content-div" style="padding:6px 40px;">
	                      		@if($answer3)
	                        		{!! htmlspecialchars_decode($answer3) !!}
	                        	@else
	                        		No answer
	                        	@endif
	                      	</div>

	              			<div class="subtitle" style="padding:6px 40px;">
	                        	<h6>4. We have selected manual bidding for the project so we will have to select the daily budget for the advertisements. Please tell us how much you want to spend daily? Tell us your daily budget, The ads will not run byond this budget.</h6>
	                      	</div>

		                   
	                      	<div class="content-div" style="padding:6px 40px;">
	                      		@if($answer4)
	                        		{!! htmlspecialchars_decode($answer4) !!}
	                        	@else
	                        		No answer
	                        	@endif
	                      	</div>
	              			<div class="subtitle" style="padding:6px 40px;">
	                        	<h6>5. Do you want to set any End date to your campaign?</h6>
	                      	</div>

		                   
	                      	<div class="content-div" style="padding:6px 40px;">
	                      		@if($answer5)
	                        		{!! htmlspecialchars_decode($answer5) !!}
	                        	@else
	                        		No answer
	                        	@endif
	                      	</div>

	              			<div class="subtitle" style="padding:6px 40px;">
	                        	<h6>6. Do you want some specific timings for Specific days for your ads to be shown? We can select particular time periods for our advertisements.</h6>
	                      	</div>

		                    
	                      	<div class="content-div" style="padding:6px 40px;">
	                      		@if($answer6)
	                        		{!! htmlspecialchars_decode($answer6) !!}
	                        	@else
	                        		No answer
	                        	@endif
	                      	</div>

	              			<div class="subtitle" style="padding:6px 40px;">
	                        	<h6>7. Any age specific people you want to target then please specify.</h6>
	                      	</div>

		                    
	                      	<div class="content-div" style="padding:6px 40px;">
	                      		@if($answer7)
	                        		{!! htmlspecialchars_decode($answer7) !!}
	                        	@else
	                        		No answer
	                        	@endif
	                      	</div>

	              			<div class="subtitle" style="padding:6px 40px;">
	                        	<h6>8. What should be the default bid for your keywords? (We suggest you to have $0.10 as default Bid) Note: This bid is just an estimate can be more also.</h6>
	                      	</div>

		                    
	                      	<div class="content-div" style="padding:6px 40px;">
	                      		@if($answer8)
	                        		{!! htmlspecialchars_decode($answer8) !!}
	                        	@else
	                        		No answer
	                        	@endif
	                      	</div>
	              			
	              			<div class="subtitle" style="padding:6px 40px;">
	                        	<h6>9. Do you want to target your business Phone number with your ads? Please share if Yes, I'll target it through Call Extesion.</h6>
	                      	</div>

		                    
	                      	<div class="content-div" style="padding:6px 40px;">
	                      		@if($answer9)
	                        		{!! htmlspecialchars_decode($answer9) !!}
	                        	@else
	                        		No answer
	                        	@endif
	                      	</div>
	              			<div class="subtitle" style="padding:6px 40px;">
	                        	<h6>10. Are you running any Google campaign already? If yes please share the access with me to analysis your campaign and provide you the suggestions accordingly! If the answer is no then I will analysis your website and create a better work plan with suggestions to move further.</h6>
	                      	</div>

		                    
	                      	<div class="content-div" style="padding:6px 40px;">
	                      		@if($answer10)
	                        		{!! htmlspecialchars_decode($answer10) !!}
	                        	@else
	                        		No answer
	                        	@endif
	                      	</div>
	              			
	              			<div class="subtitle" style="padding:6px 40px;">
	                        	<h6>Competitor site OR Keywords:</h6>
	                      	</div>

	                      	<div class="content-div" style="padding:6px 40px;">
		                    	@if($sitekeywords)		                      	
		                        	{!! htmlspecialchars_decode($sitekeywords) !!}
		                        @else
	                        		No answer		                      	
		                    	@endif
		                    </div>	              	
			        </div>
		        </div><!---contract-detail-wrapper end-->
	      	</main>
      
  	</body>
</html>