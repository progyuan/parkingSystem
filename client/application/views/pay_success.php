<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo site_url() ?>">
    <meta name="keywords" content="孟昊阳20134200"/>
    <meta name="description" content="孟昊阳20134200"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>支付成功</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/order.css">
    <script src="js/rem.js"></script>
</head>
<body>
<div class="container clearfix">

    <div class="pay-success">
        <h2 class="order-title">支付成功！</h2>
        <a href="welcome/order" class="user-center">点此处，跳转到我的订单</a>
    </div>

    <div class="hr"></div>

    <div class="order-info">
        <span>订单编号：<strong><?php echo $order->order_no?></strong></span>
    </div>

    <div class="hr"></div>

    <div class="order-name">
        <h2 class="order-title">预订人信息</h2>
        <div class="line clearfix">
            <span class="info-title fl">真实姓名：</span>
            <span class="info-content fr"><?php echo $order->invoice_person_name?></span>
        </div>
        <div class="line clearfix">
            <span class="info-title fl">手机号：</span>
            <span class="info-content fr"><?php echo $order->invoice_person_tel?></span>
        </div>
    </div>

    <div class="hr"></div>

    <div class="cost-info">
        <h2 class="order-title">订单费用信息</h2>
        <div class="line clearfix  bold">
            <span class="info-title fl">车位租价</span>
        </div>
        <div class="line clearfix">
            <span class="info-title fl">总价</span>
            <span class="info-content fr"><?php echo $order->price?>元</span>
        </div>
    </div>

    <div class="hr"></div>

    <div class="check-in-info">
        <h2 class="order-title">停车信息</h2>
        <div class="line clearfix">
            <span class="info-title fl">车位信息</span>
            <span class="info-content fr"><?php echo $order->city.$order->region.$order->street?></span>
        </div>
<!--        <div class="line clearfix">-->
<!--            <span class="info-title fl">停车信息</span>-->
<!--            <span class="info-content fr">--><?php //echo $order->start_time?><!--停车</span>-->
<!--        </div>-->
<!--        <div class="line clearfix">-->
<!--            <span class="info-content fr">--><?php //echo $order->end_time?><!--离开</span>-->
<!--        </div>-->
    </div>

    <div class="hr"></div>

</div>
<script>
    document.oncontextmenu = new Function("event.returnValue=false;");
    document.onselectstart = new Function("event.returnValue=false;");
</script>
</body>
</html>