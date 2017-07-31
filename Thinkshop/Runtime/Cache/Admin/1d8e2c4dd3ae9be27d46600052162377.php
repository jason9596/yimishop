<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title> 
    <style type="text/css">
      body {
        padding:0px;
        margin:0px;  
      }
       p {  
        height:49px;
        margin:0px;
        line-height:50px; 
        padding-left:10px; 
        border-bottom:1px solid #aaa;
        font-size:20px;   
       }
        table {
        position:absolute; 
        margin-left:16px;
        top:150px; 
        left:36%;
       }
       tr td {
        height:40px;
       }
    </style>
</head>
<body>
<p>当前位置-<span>首页</span></p>
<table>
    <tr>
        <td>用户名称:<?php echo ($name); ?></td>
    </tr>
    <tr>
        <td>用户属性:<?php echo ($utype); ?></td>
    </tr>
    <tr>
        <td>当前时间:<?php echo ($time); ?></td>
    </tr>
    <tr>
        <td>上次登录IP:<?php echo ($logip); ?></td>
    </tr>
    <tr>
        <td>上次登录时间:<?php echo ($logtime); ?></td>
    </tr>
</table> 
</body>
</html>