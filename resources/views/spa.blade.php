<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="GwUbGgZkUVKD3HAZtKOkiBitzrtBK0xVBtTMczhof1o" />
    <title>Laravel Vue SPA</title>
</head>
<body>
<div id="app"></div>
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
