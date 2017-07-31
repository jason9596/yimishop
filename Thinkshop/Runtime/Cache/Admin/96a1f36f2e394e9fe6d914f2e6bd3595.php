<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="/yimishop/Thinkshop/Admin/View/Public/css/main.css">
    <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script> -->
	<script type="text/javascript" src="/yimishop/Thinkshop/Admin/View/Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/yimishop/Thinkshop/Admin/View/Public/js/common.js"></script>
    <style type="text/css">
       a:link{color:white;}
       a:visited{color:white;}
    </style>
</head>
<body>
	<div class="left">
        <a class="a_list">商品管理</a>
        <div class="cate" style="display:block;">
            <a href="/yimishop/Admin/Goods" target="main-frame">商品列表</a>
            <a href="/yimishop/Admin/Goods/comm" target="main-frame">商品评论</a>
            <a href="/yimishop/Admin/Category/index" target="main-frame">商品分类</a>          
        </div>
        <a class="a_list">订单管理</a>
        <div class="cate">
            <a href="/yimishop/Admin/Order" target="main-frame">订单列表</a>
        </div>
        <a class="a_list">权限管理</a>
        <div class="cate">
            <a href="/yimishop/Admin/User/approve" target="main-frame">卖家认证</a>         
        </div>
        <a class="a_list">用户管理</a>
        <div class="cate">
            <a href="/yimishop/Admin/User" target="main-frame">用户列表</a>
            <a href="/yimishop/Admin/User/address" target="main-frame">收货地址</a>
        </div>
    </div>
</body>
</html>