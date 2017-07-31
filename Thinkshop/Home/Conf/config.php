<?php
return array(
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
    //模板界定符
    'TMPL_L_DELIM'=>'<{',
    'TMPL_R_DELIM'=>'}>',
    //模板引擎
    //'TMPL_ENGINE_TYPE' =>'smarty',
    //简化模板深目录
    //'TMPL_FILE_DEPR'=>'_', 
    'TMPL_PARSE_STRING'=>array(
        // '__Index__' =>__ROOT__,//前台主页面
        '__Cont__'=>__ROOT__.'/Admin',//后台主页面
        '__Uploads__'=>__ROOT__.'/Uploads',//图片地址
        '__Public__'=>__ROOT__.'/Public',//前台public文件地址
        '__Tzhuan__'=>__ROOT__.'/Home',
        '__APublic__'=>__ROOT__.'/'.APP_NAME.'/Admin/View/Public',//后台public地址
        ),
    'URL_HTML_SUFFIX'=>'html',
    'URL_MODEL' => '2',
);