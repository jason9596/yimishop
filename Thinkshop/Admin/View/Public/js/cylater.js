/* 
    *email:abner_yc@foxmail.com
    *www.sucaijiayuan.com
*/
(function($) {
    $.cylater = {
        alert: function(options) {
            var defaults = {
                id: "cylater_alter",
                width: 500,
                heigth: "auto",
                msg: "",
                callbackfun: $.noop
            };
            var options = $.extend(defaults, options);
            var html = "<div class='cylater-wrap' id='" + options.id + "'>";
            html += "<div class='cylater-box' >";
            html += "<a href='javascript:void(0);' class='cylater-close' title='关闭'>×</a>";
            html += "<div class='cylater-msg'>";
            html += options.msg;
            html += "</div>";
            html += "<div class='cylater-btns'>";
            html += "	<a href='javascript:void(0);' class='cylater-ok' >确定</a>";
            html += "</div>";
            html += "</div>";
            html += returnMaskHtml();
            html += "</div>";
            $(document.body).append(html);
            var $wrap = $("#" + options.id);
            var $box = $wrap.find(".cylater-box");
            var $btn = $box.find(".cylater-btns");
            $box.css({
                width: options.width
            });
            $box.find(".cylater-close").click(function() {
                $wrap.remove();
                if (options.callbackfun) {
                    options.callbackfun(null, "close")
                }
            });
            $btn.find(".cylater-ok").click(function() {
                $wrap.remove();
                if (options.callbackfun) {
                    options.callbackfun(null, "ok")
                }
            });
            divCenter($(".cylater-wrap"))
        },
        confirm: function(options) {
            var defaults = {
                id: "cylater_confirm",
                width: 500,
                heigth: "auto",
                msg: "",
                callbackfun: $.noop
            };
            var options = $.extend(defaults, options);
            var html = "<div class='cylater-wrap' id='" + options.id + "'>";
            html += "<div class='cylater-box' >";
            html += "<a href='javascript:void(0);' class='cylater-close' title='关闭'>×</a>";
            html += "<div class='cylater-msg'>";
            html += options.msg;
            html += "</div>";
            html += "<div class='cylater-btns'>";
            html += "	<a href='javascript:void(0);' class='cylater-ok' >确定</a>";
            html += "	<a href='javascript:void(0);' class='cylater-cancel'>取消</a>";
            html += "</div>";
            html += "</div>";
            html += returnMaskHtml();
            html += "</div>";
            $(document.body).append(html);
            var $wrap = $("#" + options.id);
            var $box = $wrap.find(".cylater-box");
            var $btn = $box.find(".cylater-btns");
            $box.css({
                width: options.width
            });
            var btnwidth = (options.width / 2);
            $btn.find("a").css({
                "width": btnwidth,
                "float": "left"
            });
            $btn.find("a").first().css({
                width: btnwidth - 1,
                borderRight: "#f2f2f2 1px solid"
            });
            $box.find(".cylater-close").click(function() {
                $wrap.remove();
                if (options.callbackfun) {
                    options.callbackfun(null, "close")
                }
            });
            $btn.find(".cylater-ok").click(function() {
                $wrap.remove();
                if (options.callbackfun) {
                    options.callbackfun(null, "ok")
                }
            });
            $btn.find(".cylater-cancel").click(function() {
                $wrap.remove();
                if (options.callbackfun) {
                    options.callbackfun(null, "cancel")
                }
            });
            divCenter($(".cylater-wrap"))
        },
        prompt: function(options) {
            var defaults = {
                id: "cylater_prompt",
                width: 500,
                heigth: "auto",
                prompt: "请输入",
                callbackfun: $.noop
            };
            var options = $.extend(defaults, options);
            var html = "<div class='cylater-wrap' id='" + options.id + "'>";
            html += "<div class='cylater-box' >";
            html += "<a href='javascript:void(0);' class='cylater-close' title='关闭'>×</a>";
            html += "<div class='cylater-content'>";
            html += "<div class='cylater-label'>" + options.prompt + "</div>";
            html += "<div class='cylater-input'>";
            html += "<input type='text' />";
            html += "</div>";
            html += "</div>";
            html += "<div class='cylater-btns'>";
            html += "	<a href='javascript:void(0);' class='cylater-ok' >确定</a>";
            html += "	<a href='javascript:void(0);' class='cylater-cancel'>取消</a>";
            html += "</div>";
            html += "</div>";
            html += returnMaskHtml();
            html += "</div>";
            $(document.body).append(html);
            var $wrap = $("#" + options.id);
            var $box = $wrap.find(".cylater-box");
            var $btn = $box.find(".cylater-btns");
            var $input = $box.find(".cylater-input").find("input");
            $box.css({
                width: options.width
            });
            var btnwidth = (options.width / 2);
            $box.find(".cylater-label").css("width", 600 - 20);
            $btn.find("a").css({
                width: btnwidth
            });
            $btn.find("a").first().css({
                width: btnwidth - 1,
                borderRight: "#f2f2f2 1px solid"
            });
            $box.find(".cylater-close").click(function() {
                $wrap.remove();
                if (options.callbackfun) {
                    options.callbackfun(null, "close")
                }
            });
            $btn.find(".cylater-ok").click(function() {
                $wrap.remove();
                if (options.callbackfun) {
                    options.callbackfun($input.val(), "ok")
                }
            });
            $btn.find(".cylater-cancel").click(function() {
                $wrap.remove();
                if (options.callbackfun) {
                    options.callbackfun(null, "cancel")
                }
            });
            divCenter($(".cylater-wrap"))
        },
        message: function(options) {
            var defaults = {
                id: "cylater_message",
                width: 300,
                heigth: "auto",
                msg: "",
                timeout: 0,
                callbackfun: $.noop
            };
            var options = $.extend(defaults, options);
            var html = "<div class='cylater-wrap' id='" + options.id + "'>";
            html += "<div class='cylater-box' >";
            html += "<div class='cylater-msg'>";
            html += options.msg;
            html += "</div>";
            html += "</div>";
            html += returnMaskHtml();
            html += "</div>";
            $(document.body).append(html);
            var $wrap = $("#" + options.id);
            var $box = $wrap.find(".cylater-box");
            var $msg = $box.find(".cylater-msg");
            var $btn = $box.find(".cylater-btns");
            $msg.css({
                "margin-top": "10px",
                "padding-top": "10px"
            });
            $box.css({
                width: options.width
            });
            $box.find(".cylater-close").click(function() {
                $wrap.remove();
                if (options.callbackfun) {
                    options.callbackfun(null, "close")
                }
            });
            divCenter($(".cylater-wrap"));
            var time = options.timeout || parseInt(options.timeout);
            if (time > 0) {
                setTimeout(function() {
                    $wrap.remove();
                    if (options.callbackfun) {
                        options.callbackfun(null, "close")
                    }
                },time)
            }
        },
        loading: function(options) {
            var defaults = {
                id: "cylater_loading",
                width: 300,
                heigth: "auto",
                msg: "",
                timeout: 0,
                callbackfun: $.noop
            };
            var options = $.extend(defaults, options);
            var html = "<div class='cylater-wrap' id='" + options.id + "'>";
            html += "<div class='cylater-box' >";
            html += "<div class='cylater-msg'>";
            html += "<span class='cylater-load'></span><span>" + options.msg + "</span>";
            html += "</div>";
            html += "</div>";
            html += returnMaskHtml();
            html += "</div>";
            $(document.body).append(html);
            var $wrap = $("#" + options.id);
            var $box = $wrap.find(".cylater-box");
            var $msg = $box.find(".cylater-msg");
            var $btn = $box.find(".cylater-btns");
            $msg.css({
                "margin-top": "10px",
                "padding-top": "10px"
            });
            $box.css({
                width: options.width
            });
            $box.find(".cylater-close").click(function() {
                $wrap.remove();
                if (options.callbackfun) {
                    options.callbackfun(null, "close")
                }
            });
            divCenter($(".cylater-wrap"));
            var time = options.timeout || parseInt(options.timeout);
            if (time > 0) {
                setTimeout(function() {
                    $wrap.remove();
                    if (options.callbackfun) {
                        options.callbackfun(null, "close")
                    }
                },
                time)
            }
        },
        page: function(options) {
            var defaults = {
                id: "cylater_page",
                width: 800,
                height: 300,
                url: "",
                title: "",
                scroll: "auto",
                callbackfun: $.noop
            };
            var options = $.extend(defaults, options);
            var scroll = (options.scroll || options.scroll) == "true" ? "yes": (!options.scroll || options.scroll == "false") ? "no": "auto";
            var html = "<div class='cylater-wrap' id='" + options.id + "'>";
            html += "<div class='cylater-box' >";
            html += "<span class='cylater-title'>" + options.title + "</span>";
            html += "<a href='javascript:void(0);' class='cylater-close' title='关闭'>×</a>";
            html += "<div class='cylater-page'>";
            html += "<iframe id='" + options.id + "_frame' src='" + options.url + "' frameborder='0' scrolling='" + scroll + "' width='100%' height='" + options.height + "'></iframe>";
            html += "</div>";
            html += "</div>";
            html += returnMaskHtml();
            html += "</div>";
            $(document.body).append(html);
            var $wrap = $("#" + options.id);
            var $box = $wrap.find(".cylater-box");
            var $title = $box.find(".cylater-title");
            $box.css({
                width: options.width
            });
            $title.css({
                width: options.width - 60
            });
            $box.find(".cylater-close").click(function() {
                $wrap.remove();
                if (options.callbackfun) {
                    options.callbackfun(null, "close")
                }
            });
            divCenter($(".cylater-wrap"))
        },
        close: function(options) {
            var defaults = {
                id: "",
                callbackfun: $.noop
            };
            var options = $.extend(defaults, options);
            if (options.id.length > 0) {
                $("#" + options.id).remove();
                if (options.callbackfun) {
                    options.callbackfun(null, "close")
                }
            }
        }
    };
    function returnMaskHtml() {
        var html = "<div class='cylater-mask'></div>";
        return html
    }
    function divCenter(ele) {
        var hei = $(window).height();
        var wid = $(window).width();
        var oHei = ele.find(".cylater-box").outerHeight();
        var oWid = ele.find(".cylater-box").outerWidth();
        var t = (hei / 2) - (oHei / 2);
        var l = (wid / 2) - (oWid / 2);
        ele.find(".cylater-box").css({
            "top": t,
            "left": l
        });
        ele.find(".cylater-mask").css({
            height: hei,
            width: wid
        });
        setInterval(function() {
            var chei = $(window).height();
            var cwid = $(window).width();
            if (chei != hei || wid != cwid) {
                divCenter(ele)
            }
        },1)
    }
})(jQuery);