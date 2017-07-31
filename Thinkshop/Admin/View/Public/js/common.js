$(function() {
    $('a.a_list').bind('click',function() {
        var len = $('a.a_list').length;
        var index = $("a.a_list").index(this);
        for(var i=0;i<len;i++){
            if(i == index){
                $('div.cate').eq(i).slideToggle(300);
                }else{
                    $('div.cate').eq(i).slideUp(300);
                }
            }
    });
});