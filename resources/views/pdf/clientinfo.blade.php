<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <title>Client Information</title>
	    <link rel="stylesheet" href="style.css" media="all" />
		<style>
			@page { margin: 5px 5px 5px 5px !important; }   
		    
			.outer-pdf {
			    width: 100%;
			}	
			.outer-pdf h2 {
			    text-align: center;
			    border-bottom: 1px solid #038bad;
			    color: #038bad;
			    text-transform: uppercase;
			}
			.inner-inputs {
			    display: table;
			    width: 100%;
			}

			.input-div {
			    width: 80%;
			    padding: 10px;
			    display: table;
			    padding-bottom: 0;
			    margin: 0 auto;
			}
			.label-outer-2 {
			    display: table-cell;
			}
			.label-outer {
			    display: table-cell;
			    width: 150px;
			}
			.label-outer p {
			    font-weight: 600;
			    margin: 0;
			}
			.input-div-full {
			    width: 100%;
			    text-align: center;
			    display: table-cell;
			}

			.strong-p{
				font-weight: 700;
				margin: 0;
				width: 100%;
			}
			.title-main{
				text-align: center;
				padding:10px;
				text-transform: uppercase;
				font-size: 25px;
			}
			.success {
				color: #127b12;
			}
			.error {
				color: #c52424;
			}
			/*footer*/
			.footer {
			    background: #038bad;
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
			.contract-detail-wrapper{
				page-break-after: always;
			}
			footer img {
			    width: 15px;
			    margin-right: 5px;
			}
			.label-outer-2 p{
				margin-top: 0;
			}
			@media print {
		        .input-div:nth-child(even) {
				  	background: #fefefe;
				}
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
  	<body style="font-family: 'Lato', sans-serif; background:#e5e5e7;">
  		<div id="watermark">
            <img src="{{ url('assets/images/teqtop_watermark.png') }}" height="100%" width="100%" />
        </div>
	    <header class="clearfix">
	        <h1 class="title-main" style="font-family: 'Lato', sans-serif; font-size: 30px">Client information</h1>	        
      	</header>      
    	<!---main start--->
	    <main style="font-family: 'Lato', sans-serif;">
		    <div class="outer-pdf">
				<h2 style="font-family: 'Lato', sans-serif;">Clients Personal Informaton</h2>
				<div class="inner-inputs">
					@if(isset($name))
						<div class="input-div">
							<div class="label-outer">
								<p>Name : </p>
							</div>
							<div class="label-outer-2">
								<p>{{ $name }}</p>
							</div>
						</div>
					@endif
				</div>
				<div class="inner-inputs">
					@if(isset($phone))
						<div class="input-div">
							<div class="label-outer">
								<p>Phone : </p>
							</div>
							<div class="label-outer-2">
								<p>{{ $phone }}</p>
							</div>
						</div>
					@endif
				</div>
				<div class="inner-inputs">
					@if(isset($email))
						<div class="input-div">
							<div class="label-outer">
								<p>Email : </p>
							</div>
							<div class="label-outer-2">
								<p>{{ $email }}</p>
							</div>
						</div>
					@endif
				</div>
				<div class="inner-inputs">
					@if(isset($web_url))
						<div class="input-div">
							<div class="label-outer">
								<p>Website/Project : </p>
							</div>
							<div class="label-outer-2">
								<p>{{ $web_url }}</p>
							</div>
						</div>
					@endif
				</div>
				<div class="inner-inputs">
					@if(isset($skype))
						<div class="input-div">
							<div class="label-outer">
								<p>Skype : </p>
							</div>
							<div class="label-outer-2">
								<p>{{ $skype }}</p>
							</div>
						</div>
					@endif
				</div>
				<div class="inner-inputs">
					@if(isset($country))
						<div class="input-div">
							<div class="label-outer">
								<p>Country : </p>
							</div>
							<div class="label-outer-2">
								<p>{{ $country }}</p>
							</div>
						</div>
					@endif
				</div>
			</div>

			<div class="outer-pdf border-top">
				<h2>PROJECT RELATED INFORMATION</h2>
				<div class="inner-inputs">
					@if(isset($business_name))
						<div class="input-div">
							<div class="label-outer">
								<p>Business Name : </p>
							</div>
							<div class="label-outer-2">
								<p>{{ $business_name }}</p>
							</div>
						</div>
					@endif
				</div>
				<div class="inner-inputs">
					@if(isset($web_cat))
						<div class="input-div">
							<div class="label-outer">
								<p>Website Category : </p>
							</div>
							<div class="label-outer-2">
								<p>{{ $web_cat }}</p>
							</div>
						</div>
					@endif
				</div>
				<div class="inner-inputs">
					@if(isset($brief_info_web))
						<div class="input-div">
							<div class="label-outer">
								<p>Brief Introduction about the Website : </p>
							</div>
							<div class="label-outer-2">
								<p>{{ $brief_info_web }}</p>
							</div>
						</div>
					@endif
				</div>
				<div class="inner-inputs">
					@if(isset($service_product_offering))
						<div class="input-div">
							<div class="label-outer">
								<p>Service/Product Offering : </p>
							</div>
							<div class="label-outer-2">
								<p>{{ $service_product_offering }}</p>
							</div>
						</div>
					@endif
				</div>
				<div class="inner-inputs">
					@if(isset($service_product_usage))
						<div class="input-div">
							<div class="label-outer">
								<p>Service/Product Usage : </p>
							</div>
							<div class="label-outer-2">
								<p>{{ $service_product_usage }}</p>
							</div>
						</div>
					@endif
				</div>
				<div class="inner-inputs">
					@if(isset($service_product_del_area))
						<div class="input-div">
							<div class="label-outer">
								<p>Service/Product Delievery Area : </p>
							</div>
							<div class="label-outer-2">
								<p>{{ $service_product_del_area }}</p>
							</div>
						</div>
					@endif
				</div>
				<div class="inner-inputs">
					@if(isset($major_comp_web))
						<div class="input-div">
							<div class="label-outer">
								<p>Major Competitor websites : </p>
							</div>
							<div class="label-outer-2">
								<p>{{ $major_comp_web }}</p>
							</div>
						</div>
					@endif
				</div>
			</div>

			<div class="outer-pdf border-top">
				<h2>BUSINESS CONTACT DETAILS FOR AUDIENCE</h2>
				<div class="inner-inputs">
					@if(isset($business_name))
						<div class="input-div">
							<div class="label-outer">
								<p>Business Contact Number : </p>
							</div>
							<div class="label-outer-2">
								<p>{{ $business_name }}</p>
							</div>
						</div>
					@endif
				</div>
				<div class="inner-inputs">
					@if(isset($business_email_address))
						<div class="input-div">
							<div class="label-outer">
								<p>Business Email : </p>
							</div>
							<div class="label-outer-2">
								<p>{{ $business_email_address }}</p>
							</div>
						</div>
					@endif
				</div>
				<div class="inner-inputs">
					@if(isset($business_address))
						<div class="input-div">
							<div class="label-outer">
								<p>Business Address : </p>
							</div>
							<div class="label-outer-2">
								<p>{{ $business_address }}</p>
							</div>
						</div>
					@endif
				</div>
				<div class="inner-inputs">
					@if(isset($keywords))
						<div class="input-div">
							<div class="label-outer">
								<p>Keywords : </p>
							</div>
							<div class="label-outer-2">
								<p>{{ $keywords }}</p>
							</div>
						</div>
					@endif
				</div>
				<div class="inner-inputs">
					@if(isset($target_search_engines))
						<div class="input-div">
							<div class="label-outer">
								<p>Target Search Engines : </p>
							</div>
							<div class="label-outer-2">
								<p>{{ $target_search_engines }}</p>
							</div>
						</div>
					@endif
				</div>
				<div class="inner-inputs">
					@if(isset($geographic_target_audience_state))
						<div class="input-div">
							<div class="label-outer">
								<p>Geographic Target Audience States : </p>
							</div>
							<div class="label-outer-2">
								<p>{{ $geographic_target_audience_state }}</p>
							</div>
						</div>
					@endif
				</div>
			</div>

			<div class="outer-pdf border-top">
				<h2>WEBSITE LOGIN DETAILS</h2>
				
				<div class="inner-inputs">
					@if(isset($web_admin_login_access))
						<div class="input-div">
							<div class="label-outer">
								<p>Website Admin Login Access : </p>
							</div>
							<div class="label-outer-2">
								<p>{{ $web_admin_login_access }}</p>
							</div>
						</div>
					@endif
				</div>
				<div class="inner-inputs">
					@if(isset($access_details))
						<div class="input-div">
							<div class="label-outer">
								<p>C-panel / FTP Login Detials : </p>
							</div>
							<div class="label-outer-2">
								<p>{{ $access_details }}</p>
							</div>
						</div>
					@endif
				</div>



				<div class="inner-inputs">
					@if(isset($google_webmaster))
						<div class="input-div">
							<div class="label-outer">
								<p>Google Webmaster : </p>
							</div>
							<div class="label-outer-2">
								@if($google_webmaster)
									<p class="success">Yes</p>
								@else
									<p class="error">No</p>
								@endif
							</div>
						</div>
					@endif
				</div>
				<div class="inner-inputs">
					@if(isset($google_analytic))
						<div class="input-div">
							<div class="label-outer">
								<p>Google Analytic : </p>
							</div>
							<div class="label-outer-2">
								@if($google_analytic)
									<p class="success">Yes</p>
								@else
									<p class="error">No</p>
								@endif
							</div>
						</div>
					@endif
				</div>
				<div class="inner-inputs">
					@if(isset($bing_webmaster))
						<div class="input-div">
							<div class="label-outer">
								<p>Bing Webmaster : </p>
							</div>
							<div class="label-outer-2">
								@if($bing_webmaster)
									<p class="success">Yes</p>
								@else
									<p class="error">No</p>
								@endif
							</div>
						</div>
					@endif
				</div>
				<div class="inner-inputs">
					@if(isset($facebook_login))
						<div class="input-div">
							<div class="label-outer">
								<p>Facebook.com : </p>
							</div>
							<div class="label-outer-2">
								@if($facebook_login)
									<p class="success">Yes</p>
								@else
									<p class="error">No</p>
								@endif
							</div>
						</div>
					@endif
				</div>
				<div class="inner-inputs">
					@if(isset($twitter_login))
						<div class="input-div">
							<div class="label-outer">
								<p>Twitter.com : </p>
							</div>
							<div class="label-outer-2">
								@if($twitter_login)
									<p class="success">Yes</p>
								@else
									<p class="error">No</p>
								@endif
							</div>
						</div>
					@endif
				</div>
				<div class="inner-inputs">
					@if(isset($instagram_login))
						<div class="input-div">
							<div class="label-outer">
								<p>Instagram.com : </p>
							</div>
							<div class="label-outer-2">
								@if($instagram_login)
									<p class="success">Yes</p>
								@else
									<p class="error">No</p>
								@endif
							</div>
						</div>
					@endif
				</div>
				<div class="inner-inputs">
					@if(isset($linkedin_login))
						<div class="input-div">
							<div class="label-outer">
								<p>Linkedin.com : </p>
							</div>
							<div class="label-outer-2">
								@if($linkedin_login)
									<p class="success">Yes</p>
								@else
									<p class="error">No</p>
								@endif
							</div>
						</div>
					@endif
				</div>
				<div class="inner-inputs">
					@if(isset($pinterest_login))
						<div class="input-div">
							<div class="label-outer">
								<p>Pinterest.com : </p>
							</div>
							<div class="label-outer-2">
								@if($pinterest_login)
									<p class="success">Yes</p>
								@else
									<p class="error">No</p>
								@endif
							</div>
						</div>
					@endif
				</div>

				<div class="inner-inputs">
					@if(isset($other_info))
						<div class="input-div">
							<div class="label-outer">
								<p>Other Information : </p>
							</div>
							<div class="label-outer-2">
								<p>{{ $other_info }}</p>
							</div>
						</div>
					@endif
				</div>
			</div>
		</main> 
  	</body>
</html>