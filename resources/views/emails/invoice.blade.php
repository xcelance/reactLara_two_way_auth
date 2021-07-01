<!DOCTYPE html>
<html>
  <head>
    <title>Invoice Email</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  </head>
<body style="background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;">
    <table bgcolor="#F4F4F4" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto" width="100%">
        <tbody>
            <tr style="">               
                <td align="center" style="background: #ffffff; padding: 0px 40px 0px 40px;border-radius: 4px 4px 0px 0px;color: #111111;font-family: 'Open Sans', sans-serif;letter-spacing: 2px;" valign="center">
                    <h1 style="font-size: 20px;font-weight: 500;margin: 0 ;color: #000;word-break: break-all;text-align: left; ">{{$title}}</h1>
                </td>
            </tr>
                        
            <tr>
                <td align="center" style="padding: 0px 10px 0px 10px;">
                    <table border="0" cellpadding="0" cellspacing="0" style="max-width: 100%;" width="100%">
                        <tbody>
                            <tr>
                                <td bgcolor="#FFFFFF" class="fluid-img img-center pb70" style="font-size:0pt;line-height:0pt;text-align:center;padding: 0px 30px 17px 30px;"><span style="display: block; border-bottom: 2px solid #000000; font-size: 0pt; padding: 3px 0;"></span></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td align="center" style="padding: 0px 10px 0px 10px;">
                    <table border="0" cellpadding="0" cellspacing="0" style="max-width: 100%;" width="100%">
                        <tbody>
                            <tr>
                                <td align="left" bgcolor="#FFFFFF" style="padding: 0px 35px 15px 30px;color: #666666;font-family: 'Open Sans', sans-serif;font-size: 15px;font-weight: 400;line-height: 25px;">
                                    {!! html_entity_decode($description) !!}
                                </td>
                            </tr>
                        </tbody>
                    </table>    

                </td>
            </tr>
            <tr>
                <td align="center" style="padding: 0px 10px 0px 10px; width:50%">                     
                    <table border="0" cellpadding="0" cellspacing="0" style="max-width: 100%;border-radius: 4px 4px 4px 4px;background: #373737;" width="100%">
                        <tbody>
                            <tr>
                                <td align="left" style="padding: 21px 6px 21px 29px;font-family: 'Open Sans', sans-serif;font-size: 14px;line-height: 0;font-weight: 400;color: #ffffff;margin: 0;text-align: left;width: 10%;" valign="center"><img src="{{url($logo)}}" style="display: inline-block;border: 0px;padding: 6px 3px; " width="130px"></td>
                                <td align="left" style="padding: 7px 7px 7px 7px;font-family: 'Open Sans', sans-serif;font-size: 13px;line-height: 25px;font-weight: 400;color: #fff;margin: 0;text-align: left; width:40%;" valign="center">
                                    <p style="margin: 0;line-height: 19px;display: block; float: right;"><span style="display: block;">{{ $address }}</span> <span style="display: block;">Website Url : <a href="{{ $link }}" target="_blank" style="color:#fff;" >{{ $link }}</a></span></p>
                                </td>
                                <td align="right" style="padding: 7px 28px 7px 7px;color: #ffffff;font-family: 'Open Sans', sans-serif;font-size: 14px;font-weight: 400;line-height: 0;width: 27%;" valign="center"><span><a href="{{$facebook}}" style="display: inline-block;padding: 4px 2px;line-height: 0;"><img width="30px" alt="" src="{{url('public/icons/facebook.png')}}" style="    background: #fff; border-radius: 35px;"></a></span> <span><a href="{{$twitter}}" style="display: inline-block;padding: 4px 2px;line-height: 0;"><img alt="" src="{{url('public/icons/twitter.png')}}" width="30px" style="background: #fff; border-radius: 35px;"></a></span> <span><a href="{{$linkedin}}" style="display: inline-block;padding: 4px 2px;line-height: 0;"><img alt="" src="{{url('public/icons/linkedin.png')}}" width="30px" style="background: #fff; border-radius: 35px;"></a></span><span><a href="{{$instagram}}" style="display: inline-block;padding: 4px 4px;line-height: 0;"><img alt="" src="{{url('public/icons/instagram.png')}}" width="30px" style="background: #fff; border-radius: 35px;"></a></span> </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>  
        </tbody>
    </table>
</body>
</html>