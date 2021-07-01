<!DOCTYPE html>
<html lang="en">
  	<head>
        <meta charset="utf-8">
        <title>INVOICE PDF</title>
        <link rel="stylesheet" href="style.css" media="all" />
        <style>
            @page { margin: 5px 5px 95px 5px !important; }   
            footer { position: absolute; bottom: 0px; left: 0px; right: 0px; height: 122px; width:100%;} 
            main {  margin-top: 120px;}
            .clearfix:after {
              	content: "";
              	display: table;
              	clear: both;
            }

            a {
              	color: #0087C3;
              	text-decoration: none;
            }

            body {
                position: relative;
                width: 100%;
                margin: 0 auto;
                color: #555555;
                font-family: Arial, sans-serif !important;
                font-size: 14px;
                background: #e5e5e7;
            }
            header {
            	width: 100%;
                padding: 10px 0 10px 0;
                margin-bottom: 20px;
                border-bottom: 1px solid #AAAAAA;
                background: #373737;
                 position: fixed; top: 0px;
                 left: 0px;
                 right: 0px;
                   
            }
            .logo {
                float: left;
                margin-top: 20px;
                width: 30%;
            }
            .logo img {
                height: 55px;
                padding: 0px 16px;
            }
            .company-address {
                float: right;
                text-align: right;
                width: 60%;
                margin-top: 10px;
            }
            .contact-col {
                width: 50%;
                float: left;
                color: #fff;
                text-align: left;
                font-size: 12px;
            }
            h2.name {
                font-size: 13px;
                margin: 0;
                margin-bottom: 1px;
            }
            .contact-col span {
                font-size: 12px;
                display: inline-block;
                margin-bottom: 4px;
            }
            .details {
                margin-bottom: 30px;
                padding: 0px 26px;
            }
            .client {
                float: left;
                width: 49%;
            }
            .client .to {
                color: #000000;
            }
            .client h2 {
                color: {{$invoicecolor}};
                text-transform: uppercase;
                font-size: 17px !important;
                margin: 0;
                margin-bottom: 1px;
            }
            .invoice {
                float: right;
                margin-top: 10px;
                text-align: right;
                width: 49%;
            }
            .invoice h1 {
                color: {{$invoicecolor}};
                font-size: 41px;
                line-height: 1em;
                font-weight: normal;
                margin: 0 0 3px 0;
            }
            .invoice .number {
                font-size: 1.1em;
                color: #777777;
                letter-spacing: 3.3px;
            }
            table {
              	width: 100%;
              	border-collapse: collapse;
              	border-spacing: 0;
              	margin-bottom: 20px;
            }				
            table tr:nth-child(2n-2) td {
                background: #dbdcde;
            }
            table th, table td {
                padding: 13px;
                background: #EEEEEE;
                text-align: center;
                border-bottom: 1px solid #c3c1c1;
            }						
            table th {
                white-space: nowrap;
                font-weight: normal;
                background: #515151;
                color: #fff;
                font-size: 14px;
            }
            table td {
              	text-align: right;
               	font-size: 12px;
            }
            table td h3 {
                color: #515050;
                font-size: 1.2em;
                margin: 0 0 0.2em 0;
            }
            table .desc {
              	text-align: left;
            }
            table td.qty {
                text-align: center;
            }			
            .total, .unit  {
                text-align: right;
            }		
            table td.unit, table td.qty, table td.total, table td.desc {
                font-size: 15px;
            }

            table tfoot td {
                padding: 7px 13px;
                background: transparent !important;
                border-bottom: none;
                font-size: 15px;
                white-space: nowrap;
                border-top: 0px solid #AAAAAA;
            }
            table tfoot tr:first-child td {
              	border-top: none; 
            }
            table tfoot tr:last-child td {
                color: #ffffff;
                font-size: 15px;
                border-top: 0px solid #57B223;
                background: #515151 !important;
            }
            table tfoot tr td:first-child {
                border: none;
                background: transparent !important;
            }
            /**/
            .terms-conditions {
                padding-left: 28px;
                padding-right: 28px;
                margin-top: 45px;
            }
            .terms-conditions h5, .terms-conditions p {
                margin: 0;
                font-size: 13px;
            }
            .payment-method {
                margin-top: 0px;
                padding-bottom: 15px;
                padding-top: 10px;
                padding-left: 28px;
                padding-right: 28px;
                background: #d9d9dc;
            }
            .by-bank, .by-online,  .signature-div{
              	float: left;
              	width: 33.3%;
            }
            .signature-div {
                text-align: center;
            }

            .payment-title{
                /*background: #d9d9dc;*/
                text-align: center;
            }

            .payment-title h5{
                color: #fff;
                padding:10px 0px;
                margin-bottom: 0px !important;
                background: {{$invoicecolor}};
            }

            .payment-method h5, footer h5 {
                color: {{$invoicecolor}};
                font-size: 17px;
                margin-bottom: 7px;
                margin-top: 0;
            }
            .payment-method h6 {
                margin: 0;
                font-size: 15px;
            }
            .payment-method p, .payment-method h6{
              	margin: 0;
            }
            .outer-header.footer {
                background: {{ $invoicecolor }};
            }
            .footer-bottom .inner-header {
                padding: 3px 0px;
                background: {{$invoicecolor}};
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
  	<body>
	    <header class="clearfix">
	        <div class="logo">
	          	<img src="{{ url($logo) }}" alt="" />
	        </div>
	        <div class="company-address">
	          	<div class="contact-col">                    
	          	</div>
	          	<div class="contact-col" style="float:right;">                    
                    <h2 class="name">Email</h2>
                    <div><span>{{ $email }}</span></div>
	              	<h2 class="name">Phone</h2>
	              	<div><span>{{ $phone }}</span></div>
	          	</div>	          	           
	        </div>
      	</header>

        <div id="watermark">
            @if($watermark)
                <img src="{{ url($watermark) }}" height="100%" width="100%" />
            @endif
        </div>   

    	<!---main start--->
	    <main>
	      	<div class="details clearfix">
		        <div class="client">
		          	<h2 class="full-name">To</h2>
                    <div class="to"><b>Company Name: </b>{{ $company }}</div>
                    <div class="to"><b>Person Name: </b>{{ $name }}</div>
                    <div class="to"><b>Project Name: </b>{{ $project }}</div>                                         
		        </div>
		        <div class="invoice">
		          	<h1>INVOICE</h1>
		          	<div class="number">
		            	NO: {{ $invoice }}
		          	</div>
		        </div>
	      	</div>

	      	<table border="0" cellpadding="0" cellspacing="0">
		        <thead>
		          	<tr>
			            <th class="desc" style="background: {{$invoicecolor}} !important;">ITEM DESCRIPTION</th>
			            <th class="qty" style="width:10%;">QTY.</th>
			            <th class="unit" style="width:20%;text-align:right">UNIT PRICE</th>
			            <th class="total" style="width:20%;">TOTAL</th>
		          	</tr>
		        </thead>
		        <tbody>
		        	<?php $total = 0; ?>
		        	@foreach($description as $desc)
			          	<tr>
				            <td class="desc">
				              	{{ $desc['description'] }}
				            </td>
				            <td class="qty">{{ $desc['hours'] }}</td>
				            <td class="unit">{{ $currency.' '.bcdiv($desc['price'], 1, 2) }}</td>
				            <td class="total">{{ $currency.' '.bcdiv($desc['sub_total'], 1, 2) }}</td>
				            <?php $total = $total + $desc['sub_total']; ?>
			          	</tr>
			        @endforeach         
		        </tbody>
		        <tfoot>
		          	<tr>
			            <td colspan="1"></td>
			            <td colspan="2">Subtotal</td>
			            <td>{{ $currency.' '.bcdiv($total, 1, 2) }}</td>
		          	</tr>
		          	<tr>
			          	<td colspan="1" style="text-align: left;padding-left: 27px;padding-bottom: 0;font-size: 12px;"></td>
			            <td colspan="2">Tax Vat {{ $tax }}%</td>
			            <td>
			            	<?php $tx = $total * $tax / 100; ?>
			            	{{ $currency.' '.bcdiv($tx, 1, 2) }}
			            </td>
		          	</tr>
		          	<tr>
			            <td colspan="1" style="text-align: left;padding-left: 27px;font-size: 18px;padding-top: 0;font-weight: 600;"></td>
			            <td colspan="2" style="color: {{ $invoicecolor }};">Discount</td>
                        <?php $disPrice = 0; if($discount) { $disPrice = $discount; } ?>
			            <td>{{ $currency.' '.bcdiv($disPrice, 1, 2) }}</td>
		          	</tr>        
		          	<tr>
			            <td colspan="1"></td>
			            <td colspan="2" style="border-bottom-left-radius: 5px;border-top-left-radius: 5px;padding: 9px 15px;font-size: 16px;text-align: right;">GRAND TOTAL</td>
			            <td style="background: {{$invoicecolor}} !important;padding: 9px 15px;font-size: 16px;text-align: right;">
			            	<?php $total = $total + $tx - $disPrice; ?>
			            	{{ $currency.' '.bcdiv($total, 1, 2) }}
			            </td>
		          	</tr>
		        </tfoot>
	      	</table>
            @if($notes)
    	    	<div class="terms-conditions">
    		        <h5>Notes:</h5>
    		        <p>{!! $notes !!}</p>
    		    </div>	
            @endif	      			      	
	    </main>

	    <footer>
            <div class="payment-title"><h5>PAYMENT METHOD</h5></div> 
	        <div class="footer payment-method clearfix">	            	
	            <div class="by-bank">
	              	<h6>Bank Transfer</h6>
	              	<p>Bank Name:<span> {{ $bank }}</span></p>
                    <p>Account Name:<span> {{ $company_name }}</span></p>
	              	<p>Swift Code:<span> {{ $swift }}</span></p>
	              	<p>Account No:<span> {{ $account_number }}</span></p>
	              	<p>IFSC Code:<span> {{ $ifsc }}</span></p>
	            </div>
                <div class="by-bank">
                    <h6>Beneficiary Address</h6>
                    <p><span> {!! $bank_address !!}</span></p>
                </div>
	            <div class="by-online">
	              	<h6>Paypal Account</h6>
	              	<p><span> {{ $paypal }}</span></p>
	            </div>
	            <!-- <div class="signature-div"></div> -->
	        </div>
	        <div class="footer-bottom clearfix" width="100%" style="background: {{ $invoicecolor }} !important; height: 40px !important;">
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
  	</body>
</html>