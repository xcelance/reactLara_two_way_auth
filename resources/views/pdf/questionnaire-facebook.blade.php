<!DOCTYPE html>
<html>
  	<head>
      	<title>Facebook Ads Questionnaire</title>
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
		            <h1 class="main-title">Facebook Ads Questionnaire</h1>		 
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
                    	<h6>1. What is your preference for setting up Facebook Ads like: - Facebook Page Likes, Website Clicks, Dark Post, Page Post Engagement, Website Conversions, App Installs, App Engagement, Event Responses, Offer Claim, Sign up? Please suggest.</h6>
                  	</div>

                  	<div class="content-div" style="padding:6px 40px;">
                    	@if($answer1)
                    		{!! htmlspecialchars_decode($answer1) !!}
                    	@else
                    		No Answer	
                    	@endif
                  	</div>
          			<div class="subtitle" style="padding:6px 40px;">
                    	<h6>2. Is there any specific country you want to target in your campaign or will it be targeting all countries?</h6>
                  	</div>

                  	<div class="content-div" style="padding:6px 40px;">
                    	@if($answer2)
                    		{!! htmlspecialchars_decode($answer2) !!}
                    	@else
                    		No Answer	
                    	@endif
                  	</div>	
          			<div class="subtitle" style="padding:6px 40px;">
                    	<h6>3. Do you want your ad to be specific device friendly or want it to be functional on all devices including Mobiles, desktops, laptops?</h6>
                  	</div>

                  	<div class="content-div" style="padding:6px 40px;">
                    	@if($answer3)
                    		{!! htmlspecialchars_decode($answer3) !!}
                    	@else
                    		No Answer	
                    	@endif
                  	</div>

          			<div class="subtitle" style="padding:6px 40px;">
                    	<h6>4. Is there any kind of specific Interest, Relationship Status (Single, Married), Age group, Gender etc. you want to target for your ad?</h6>
                  	</div>

               
                  	<div class="content-div" style="padding:6px 40px;">
                    	@if($answer4)
                    		{!! htmlspecialchars_decode($answer4) !!}
                    	@else
                    		No Answer	
                    	@endif
                  	</div>
                   
          			<div class="subtitle" style="padding:6px 40px;">
                    	<h6>5. Will the images be provided by you keeping intact the Facebook guidelines or you want us to design that?</h6>
                  	</div>
                    
                  	<div class="content-div" style="padding:6px 40px;">
                  		@if($answer5)
                    		{!! htmlspecialchars_decode($answer5) !!}
                    	@else
                    		No Answer	
                    	@endif
                  	</div>
          			<div class="subtitle" style="padding:6px 40px;">
                    	<h6>6. Do you wish to get your ads displayed on particular timings on particular days?</h6>
                  	</div>
                    
                  	<div class="content-div" style="padding:6px 40px;">
                  		@if($answer6)
                    		{!! htmlspecialchars_decode($answer6) !!}
                    	@else
                    		No Answer	
                    	@endif
                  	</div>
          			<div class="subtitle" style="padding:6px 40px;">
                    	<h6>7. Please tell us how much you want to spend daily? Tell us your daily budget.</h6>
                  	</div>
                
                  	<div class="content-div" style="padding:6px 40px;">
                  		@if($answer7)
                    		{!! htmlspecialchars_decode($answer7) !!}
                    	@else
                    		No Answer	
                    	@endif
                  	</div>
                
          			<div class="subtitle" style="padding:6px 40px;">
                    	<h6>8. Are you running any Facebook campaign already? If yes please share the access with me to analysis your campaign and provide you the suggestions accordingly! If the answer is no then I will analysis your website and create a better work plan with suggestions to move further.</h6>
                  	</div>
                   
                  	<div class="content-div" style="padding:6px 40px;">
                  		@if($answer8)
                    		{!! htmlspecialchars_decode($answer8) !!}
                    	@else
                    		No Answer	
                    	@endif
                  	</div>
		        </div><!---contract-detail-wrapper end-->
		    </div>
	    </main>
  	</body>
</html>