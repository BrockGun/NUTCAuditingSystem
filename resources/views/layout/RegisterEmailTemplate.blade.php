<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>會員註冊驗證信</title>
</head>
<body>
<h1>會員註冊驗證信</h1>
<p>{{$username}}使用者，您好</p>
<p>
    由於您註冊本系統成為會員，為了完成接下來的註冊程序，請您點擊以下連結以確認您的Email地址.
    <br />
    <a href="{{$ValidateUrl}}" target="_blank">{{$ValidateUrl}}</a>

</p>
<p>感謝您配合!</p>
</body>
</html>