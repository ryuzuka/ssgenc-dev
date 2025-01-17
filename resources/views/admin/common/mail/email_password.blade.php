<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <title>@if($lang=='ko') 이메일 @else email @endif</title>
</head>

<body style="margin:0;padding:0;background-color:#fdfdfd;">
<table cellpadding="0" cellspacing="0" align="center" width="696" style="max-width:696px;width:100%;margin:0 auto;font-family:'Malgun Gothic', Dotum,'돋움',Helvetica,'Apple SD Gothic Neo',sans-serif;color:#000;border:1px solid #000;">
  <!--header-->
  <thead>
  <tr>
    <th style="padding:15px 0 15px 20px;background:#202020;font-size:18px;font-weight:normal;color:#fff;line-height:30px;letter-spacing:-.18px;text-align:left;">
        @if($lang=='ko') 비밀번호 재설정 @else Password reset @endif
    </th>
  </tr>
  </thead>
  <!--//header-->
  <tbody>
  <tr>
    <td style="padding:40px 20px 16px;">
      <table cellpadding="0" cellspacing="0" style="width:100%;font-family:'Malgun Gothic', Dotum,'돋움',Helvetica,'Apple SD Gothic Neo',sans-serif">
        <tbody>
        <!-- title -->
        <tr>
          <td style="font-size:16px;color:#000;line-height:27px;">
              @if($lang=='ko') 고객님의 비밀번호가 재설정 되었습니다. @else Your password has been reset. @endif
          </td>
        </tr>
        <tr>
          <td style="padding-top:45px;padding-bottom:12px;font-size:16px;color:#787878;line-height:27px;">
            @if($lang=='ko') 재설정된 비밀번호는 [{{$password}}] 입니다. @else The reset password is [{{$password}}]. @endif
          </td>
        </tr>
        <tr>
          <td style="padding:16px 0 0 8px;font-size:14px;color:#787878;line-height:23px;letter-spacing:-.7px;">
            @if($lang=='ko')
              의견 감사드립니다. 보다 신속하고 정확하게 해결해드리겠습니다.<br>
              @if ($type=='01')
                상담결과는 [고객상담 > 상담결과 조회] 메뉴에서 확인하실 수 있습니다.
              @else
                제보결과는 [제보 > 제보 조회] 메뉴에서 확인하실 수 있습니다.
              @endif
            @else
              Thank you for submitting your comments. We will address them shortly in an accurate manner.<br>
              @if ($type=='01')
                Our reply to your inquiry can be found in the following menu [Customer Service Center > Search inquery]
              @else
                Our reply to your report can be found in the following menu [Reporting > Search report ]
              @endif
            @endif
          </td>
        </tr>
        <tr>
          <td style="padding-top:100px;text-align:center;">
            <a href="{{ $url_result }}" style="display:inline-block;margin:10px 3px 0 0;padding:10px 34px;background:#202020;border-radius:100px;font-size:18px;font-weight:bold;color:#fff;letter-spacing:-.18px;text-decoration:none;"
            >
            @if ($type=='01')
              @if($lang=='ko') 상담결과 조회 바로가기 @else Search inquiry @endif
            @else
              @if($lang=='ko') 제보조회 바로가기 @else Search report @endif
            @endif
          </a>
            <a href="{{ $url_main }}" style="display:inline-block;margin:10px 0 0 3px;padding:10px 67px;background:#202020;border-radius:100px;font-size:18px;font-weight:bold;color:#fff;letter-spacing:-.18px;text-decoration:none;"
            >
            @if($lang=='ko') 메인 바로가기 @else Back to Main Menu @endif
          </a>
          </td>
        </tr>
        <tr>
          <td style="padding-top:94px;font-size:12px;color:#787878;line-height:23px;letter-spacing:-.6px;">본 메일은 발신전용 메일입니다.<br>
            ⓒSINSEGAE E&C ALL RIGHTS RESERVED.</td>
        </tr>
        </tbody>
      </table>
    </td>
  </tr>
  </tbody>
</table>
</body>
</html>
