<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>{{trans("front_lang.TITLE_ACTIVATE_ACCOUNT")}}</title>
</head>
<body>
    <p>{{trans("front_lang.BODY_TO_ACTIVATE_ACCOUNT_1",$sendInfo)}}</p>
    <p>{{trans("front_lang.BODY_TO_ACTIVATE_ACCOUNT_2")}}</p>    
    <p>{{trans("front_lang.BODY_TO_ACTIVATE_ACCOUNT_3")}}</p>
    <ul>
        <li>Link:</li>
        <li>
            <a target="_blank" href="{{route("login.activateAccount",base64_encode($sendInfo['mail']))}}">
                {{route("login.activateAccount")}}
            <a>
        </li>
    </ul>
</body>
</html>