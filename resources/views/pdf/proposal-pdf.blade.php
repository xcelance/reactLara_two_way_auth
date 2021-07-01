<!DOCTYPE html>
<html>
<head>
  <title>Proposal</title>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <style type="text/css">    
    @page { margin: 0; padding: 0; }   
    header { margin: -20px 0 0 0; }
    footer { position: absolute; bottom: 0px; left: 0px; right: 0px; height: 50px; } 

    .outer-header h2 {
        background: {{$invoicecolor['value']}};
        /*background: #0089ab;*/
        padding: 10px;
        text-transform: uppercase;
        color: #fff;
        margin-bottom: 10px;
    }
    .inner-header {
        display: table;
        width: 100%;
        border-bottom: 2px solid {{$invoicecolor['value']}};
        padding-bottom: 10px;
    }
    .prop {
        display: table-cell;
        width: 33%;
    }
    .prop p {
        font-size: 15px;
        margin: 0;
    }
    .outer-header {
        text-align: center;
    }  
    .outer-header.footer {
        background: {{$invoicecolor['value']}};
    }
    .footer .inner-header {
        padding: 10px 0px;
    }
    .prop img {
        max-width: 18px;
        position: relative;
        top: 3px;
        margin-top: 3px;
        display: inline-block;
    }
    .footer p {
        color: #fff;
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
<body style="font-family: sans-serif !important;">
  <header>
    <div class="outer-header">
      <h2>{{$pdftitle['value']}}</h2>
      <div class="inner-header">
        <div class="prop" style=" width:20%">
          <p><strong>Price</strong></p>
          <p>{{$currency}} {{$price}} @if(!$period)/hr @endif</p>
        </div>
        <div class="prop"  style=" width:60%">
          <p><strong>Project name</strong></p>
          <p>{{$title}}</p>
        </div>
        <div class="prop" style=" width:20%">
          <?php 
            $timestamp = strtotime($date);
            $newDate = date('F d, Y', $timestamp); 
          ?>
          <p><strong>Date</strong></p>
          <p>{{$newDate}}</p>
        </div>
      </div>
    </div>
  </header>
 
  <div id="watermark">
      @if($watermark)
          <img src="{{ url($watermark) }}" height="100%" width="100%" />
      @endif
  </div>
  <main style=" position: relative;">
    
    <div class="Proposal-detail-wrapper" style="font-family: 'Lato', sans-serif;  margin:0 40px;"> 
        <!---inner wrapper---->  
         <div class="inner-content">      
            <div class="proposal-info-div" style="padding-top: 10px;">
              <p style="font-size: 16px; font-family: 'Lato', sans-serif; margin: 0; padding-top: 15px;">Hi {{ ucwords($client_name) }},</p>
            </div>
            <div class="thanks-info-div" style="padding-top: 16px;padding-bottom: 60px">              
              @if($is_invite)
              <p style="font-size: 16px; font-family: 'Lato', sans-serif; margin: 0; padding-top: 11px;">Thanks for the invitation</p><br />
              @endif
              <p style=" font-size: 16px; font-family: 'Lato', sans-serif !important; margin: 0; padding-top: 19px;">{!! $proposal !!}</p>
            </div>
          </div>
        <!---page wrapper end---->   
      </div>
  </main>  
  <!---footer----> 
<footer style="top: 1080px;">
 
  <div class="outer-header footer">
    <div class="inner-header">
      <div class="prop">
        <p><img src="{{url('public/assets/images/globe.png')}}"> {{$sitelink['value']}}</p>
      </div>
      <div class="prop">
        <p><img src="{{url('public/assets/images/mail.png')}}"> {{$contactmail['value']}}</p>
      </div>
      <div class="prop">
        <p><img src="{{url('public/assets/images/phone.png')}}">{{$whatsapp['value']}}</p>
      </div>
    </div>
  </div>
</footer>
  <!---footer---->   
</body>
</html>