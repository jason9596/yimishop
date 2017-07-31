<?php
return array(
    //'配置项'=>'配置值'    
    //数据库配置
    'DB_TYPE'  =>'mysql',
    'DB_HOST'  =>'localhost',
    'DB_PORT'  =>'3306',
    'DB_NAME'  =>'yimishop',
    'DB_USER'  =>'root',
    'DB_PWD'   =>'root',
    'DB_PREFIX'=>'er_',
    'DB_CHARSET'=>'utf8',
    //模板后缀
    'TMPL_TEMPLATE_SUFFIX'=>'.tpl',
    //简化模板深目录
    //'TMPL_FILE_DEPR'=>'_', 
    //
    'TMPL_PARSE_STRING'=>array(
        // '__Index__' =>__ROOT__,//前台主页面
        '__Cont__'=>__ROOT__.'/Admin',//后台主页面
        '__Uploads__'=>__ROOT__.'/Uploads',//图片地址
        '__Tzhuan__'=>__ROOT__.'/Home',//前台跳转页面
        '__Public__'=>__ROOT__.'/Public',//前台public文件地址
        '__APublic__'=>__ROOT__.'/'.APP_NAME.'/Admin/View/Public',//后台public地址
        ),
    'URL_HTML_SUFFIX'=>'html',
);