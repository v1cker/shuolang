<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="免费在线客服系统,免费网站客服系统,免费网上客服系统,网页对话,网页聊天">
<meta name="description" content="免费在线客服系统,免费网站客服系统,免费网上客服系统,网页对话,网页聊天">
<link href="style/chat/minichat2/css/base.css?20070202" rel="stylesheet" type="text/css" />
<link href="style/chat/minichat2/css/minichat.css?20150127" rel="stylesheet" type="text/css" />
<script>
var company_id = "70831548";
var obj_id = 0; // 客服ID
var myid = "-1"; // 访客id
var system_version = 'zuyong'; // gongsi:公司内测版 zuyong:外网租用版
var enable_debug = '0'; // 系统调试   1:开 0:关
var enable_js_error = '0'; // JS报错提示 1:开 0:关
var enable_talk_collection = "1";  // 通讯采集开关 1:开启 0:关闭
// 改进版插入错误信息
function insertErrorInfos2(err_from, err_type, err_detail)
{
	if (enable_debug == 0) return;
	var httprequest;
	if (window.XMLHttpRequest)
	{
		httprequest = new XMLHttpRequest();
	}
	else
	{
		httprequest = new ActiveXObject("Microsoft.XMLHTTP");
	}

  try
  {
    if(httprequest!=null)
    {
      err_from = window.encodeURIComponent(err_from);
      err_type = window.encodeURIComponent(err_type);
      err_detail = window.encodeURIComponent(err_detail);
      var senddata = "err_from="+err_from+"&err_type="+err_type+"&err_detail="+err_detail+"&company_id="+company_id+"&id6d="+obj_id;
      var url = "err_infos.php";
      httprequest.open("POST", url, true);
      httprequest.setRequestHeader("Content-Length", senddata.length);
      httprequest.setRequestHeader("CONTENT-TYPE", "application/x-www-form-urlencoded");
      httprequest.send(senddata);

      httprequest.onreadystatechange = function()
      {
        if(4==httprequest.readyState)
        {
          if(200==httprequest.status)
          {
            //alert(httprequest.responseText);
            //var dom = httprequest.responseXML;
          }
        }
      }
    }
  }
  catch(e){}
}

//页面脚本错误捕捉
window.onerror = function(msg,url,line) {
	//insertErrorInfos2('2','windowError','{msg:"' + msg + '",url:"'+ url + '",line:"' + line + '",browser:"' + navigator.userAgent + '","time:"' + (new Date().getTime()) + '",guest_id:"' + myid + '"}');
	if (enable_js_error == 0) return true;
}
//运维监控平台相关
var client_IP = '180.102.117.53';
var timeStamp = 1495676091034; // 开始时间 毫秒
if (timeStamp <= 0 || Math.abs(timeStamp - new Date().getTime()) > 100000) timeStamp = new Date().getTime();
var monitor_url = 'http://mon.53rj.com.cn/sendmon.jsp';
</script>
<div style="z-index:-100;height:0px;visibility: hidden;">
  <span id="plugin_snapshot" style="display: none;"></span>
  <iframe id="kh_gid" name="kh_gid" src="" width="1" height="1" frameborder="0"></iframe>
  <iframe id="scan_speed" name="scan_speed" src="" width="1" height="1" frameborder="0"></iframe>
</div>
<iframe id="iframe_fav" src="iframe_fav.php" style="display:none"></iframe>
<div id="iefav" class="hslice" style="display:none"><div class="entry-title">[生活家装饰]</div></div><input type="hidden" id="kh_has_import" name="kh_has_import" value="-1">
</head>
<body onbeforeunload="" onload="initial('minchat')" onunload="window_unload();" oncontextmenu=self.event.returnValue=false>
<DIV id="body">
  <div id="div_vote" style="display:none;border:1px #999999 solid ; z-index: 200; width: 380px; height: 240px; position: absolute; left: 200px; top: 100px;font-size:12px; background-color:#fff;">
  <table width="380" border="0"  align="left" cellpadding="0" cellspacing="0" style="font-size:12px;padding-left:10px;">
    <tbody>
      <tr> <td width="378" height="30" align="center" bgcolor="#F5F5F5"  style="font-size:14px;font-weight:bold;border-bottom:1px #CCCCCC solid;"> </td> 
      </tr>
      <tr><td height="30" style="font-weight:bold;"></td> 
      </tr>
      <tr>
        <td height="30">
          <input id="pf1" name="pf" value="1" type="radio">满意  
          <input id="pf2" name="pf" value="2" type="radio">较好  
          <input id="pf3" name="pf" value="3" type="radio">一般  
          <input id="pf4" name="pf" value="4" type="radio">较差  
          <input id="pf5" name="pf" value="5" type="radio">恶劣  
        </td>
      </tr>
      <tr> <td valign="middle" height="30" style="font-weight:bold;"></td> 
      </tr>
      <tr>
        <td>
          <textarea rows="8" cols="42" name="note" id="note" style="border: 1px solid #CCCCCC; font-size: 12pt; width: 360px; height: 85px;"></textarea>
        </td>
      </tr>
      <tr> <td height="5"> </td> </tr>
      <tr>
        <td id="td_19" align="center">
          <a style="" onclick="return save_vote()" href="#"></a>
          <a style="margin-left: 20px;" onclick="return hidden_vote();" href="#">
          
         </a>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<Div id="flashbox" style="width:1px;height:1px;">


  <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="1" height="1" align="middle" id="im">
    <param name="allowScriptAccess" value="always" />
    <param name="movie" value="53kf/guest.swf" />
    <param name="quality" value="high" />
    <param name="bgcolor" value="#ffffff" />
    <embed name="im" src="53kf/guest.swf" quality="high" bgcolor="#ffffff" width="1" height="1" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" swLiveConnect="true"/>
  </object>

</Div>
<script type="text/javascript">
function thisMovie(movieName){
  if(navigator.appName.indexOf("Microsoft")!=-1){
	if(navigator.appVersion.match(/10./i)=='10.' || navigator.appVersion.match(/9./i)=='9.')
	{
	return document[movieName];
	}else{ 
    return window[movieName];}
  }else{
    return document[movieName];
  }
}
</script>  <DIV id="table" style="background:#fff;">
    <Div id="ornament_2" class="ornament_2"></Div>
    <DIV id="part_main">
      <Div id="part_leaveword" class="part_leaveword" style="z-index:2; display:none">
        <div class="leaveword_clue"><span id="infos_11">&nbsp;</span></div>
        <div class="leaveword_content">
          <div class="leaveword_msg">
            
          </div>
          <div id="ly_items"></div>
        </div>
      </Div>
      <Div id="res_leaveword" class="part_leaveword" style="background-color:#fff; display:none; z-index:2;">
        <table width="100%" height="100%">
          <tr>
            <td valign="middle" align="center" id="res_tip" style="font-size:14px;"><!--显示留言结果--></td>
          </tr>
        </table>
      </Div>
      <Div class="part_dialog">
        <div id="dialog_clue" class="dialog_clue">
        <span id="l-ts-wd" class="">&nbsp;</span>
        <span id="l-ts-close">&nbsp;</span></div>
        <div id="dialog_clue2" class="dialog_clue2">&nbsp;</div>
        <div id="dialog_content_bg" class="dialog_content_bg"><div class="dialog_content_bg2"></div></div>
        <div class="dialog_content" id="box-main-l-disp"></div>
      </Div>
      <Div id="part_buttons" class="part_buttons" style="z-index:1;">
        <div class="wkbutton_1" onclick="toinsertsmile()" title="表情"></div>        <div class="wkbutton_2" onclick="toinsertlink()" title="链接"></div>
        <div class="wkbutton_3" onclick="toinsertimg()" title="图片"></div>
        <div class="wkbutton_4" onclick='insert_snapshot3("www6.53kf.com","4848811")' title="截图"></div>        <div class="wkbutton_5" onclick="show_file()" title="传送文件"></div>        <div class="wkbutton_6" onclick="to_vote_open()" title="请给我们的服务打分"></div>        <div class="wkbutton_7" onclick="saveas()" title="保存聊天记录"></div>        <div id="quickQA" class="wkbutton_8" onclick="quickQA(this)" title="快速提问" style="display:none"></div>
        <div style="margin-top:5px;margin-right:10px;text-align:right"><span style="font-family:'宋体'"><a href="http://www.53kf.com/?controller=phone_download&action=download&file=53KF-tousushenqing.xlsx" title="如果您认为权益受到侵害，请点击此处" target="_blank">
          侵权投诉</a></span></div>
        <div style="clear:both;"></div>
      </Div>
      <Div class="part_input" style="z-index:1">
        <Div class="part_input_content" id="part_input_content">
          <textarea name="textarea" id="input1" onpropertychange="try{textCounter(this,1000)}catch(e){}" onkeypress="return keypress(event);" onkeydown="return keydown(event)"></textarea>
          <div id="clue" style="display:none"></div>
          <div id="send" class="chatmini_btns"><span id="chatmini_btns_s" class="chatmini_btns_s" onclick="sendmsg()">发送</span><span class="chatmini_btns_p" title="设置快捷键" onclick="showpkset()">&nbsp;</span></div>
        </Div>
      </Div>
      
      <!-- send tips  -->
      <div id="send_tips" style="display:none"></div>
    </DIV>
    <div class="press_top" id="press_top" style="z-index:1">
      <Div id="pressdiv" style="display:none">
        <div id="line1" class="pressdiv-line" onclick="setpostkey(1)" onmousemove="changeclass('over','line1')" onmouseout="changeclass('out','line1')">
          <div id="line1-left" class="pressdiv-line-left pkselect"></div>
          <div class="pressdiv-line-right text-l" id="infos_20">&nbsp;</div>
        </div>
        <div id="line2" class="pressdiv-line" onclick="setpostkey(2)" onmousemove="changeclass('over','line2')" onmouseout="changeclass('out','line2')">
          <div id="line2-left" class="pressdiv-line-left"></div>
          <div class="pressdiv-line-right text-l" id="infos_21">&nbsp;</div>
        </div>
      </Div>
    </Div>
    <Div id="uploaddiv" style="display:none">
      <iframe id="upload_iframe" src="" style="width:360px;" marginwidth='0' marginheight='0' height='80' scrolling='no' hspace='0'  vspace='0' frameborder="0"></iframe>
    </Div>
    <Div id="face_div" style="display:none">
      <iframe id="face_src" src="" style="width:302px;height:214px;" frameborder=0></iframe>
    </Div>
  </DIV>
</DIV>
</body>
<script>
    var inter_color = 3;
    var inter_theme = 1;
</script>
<style>
.me{text-align:right; margin-bottom:20px; margin-left:60px;margin-right: 5px;overflow: hidden;}
.me .chat_word{ background:#56aee2; line-height:1.2; margin:0; text-align:left; padding:5px 10px; color:#fff;border-radius:5px;float: right;}
.me .g-arrows{ margin:0; padding:0;display: block;}
.me .g-arrows img{ margin-right:8px;}
.me p,.td_macth .kefu p{ color:#666;}

.kefu{text-align:left; margin-bottom:20px; margin-right:60px;overflow: hidden;}
.kefu p{padding-left:0px;}
.kefu .chat_word{ background:#F1F8F9;  line-height:1.2; margin:0; text-align:left; padding:5px 10px;border-radius:5px;float: left;}
.kefu .g-arrows{ margin:0; padding:0;display: block;}
.kefu .g-arrows img{ margin-left:8px;}
.span-link {
  text-decoration:none;
}
</style>
<script type="text/javascript">
try{
  var http_pro = (document.location.protocol == 'https:')?'https://':'http://';//区分HTTP和HTTPS
  var infos = new Array();
      infos.push("网络故障，无法连接服务器");
      infos.push("连接失败");
      infos.push("连接已断开，无法发送消息");
      infos.push("连接已断开");
      infos.push("的客服助手");
      infos.push("客服不在线，请留言");
      infos.push("占线请稍候");
      infos.push("对不起！线路忙，请稍候。您也可以给我们留言。");
      infos.push("说");
      infos.push("与...交谈中");
      infos.push("客服已离线，请留言<br>为便于我们与您联系，请注明您的姓名和联系方式。谢谢！");
      infos.push("客服不在线");
      infos.push("对话结束");
      infos.push("我");
      infos.push("链接地址");
      infos.push("链接文字");
      infos.push("请输入图片地址:");
      infos.push("公告建议");
      infos.push("连接中请稍候");
      infos.push("连接中，无法发送消息");
      infos.push("按Enter键发送");
      infos.push("按Ctrl+Enter键发送");
      infos.push("您已经打开了一个窗口咨询，不允许同时开两个窗口");
      infos.push("不在线，以下是客服助手的自动应答");
      infos.push("无此客服");
      infos.push("离线");
      infos.push("正在输入消息");
      infos.push("如果离开，您将无法继续接收客服的消息！");
      infos.push("如果没有留下联系方式，客服将无法联系您！");
      infos.push("系统提示");
      infos.push("等待您选择客服人员");
      infos.push("在线");
      infos.push("留言");
      infos.push("无法连接客服，您已被阻止");
      infos.push("网页对话");
      infos.push("请输入HTML代码:");
      infos.push("感谢您的咨询！请点击“取消”给客服评分");
      infos.push("评分");
      infos.push("感谢您的评分");
      infos.push("您已经评过分！");
      infos.push("没有建立对话，不能发送文件");
      infos.push("文件正在传送中");
      infos.push("正在传送文件");
      infos.push("传送成功");
      infos.push("发送文件给您");
      infos.push("点击接收保存");
      infos.push("您指定的客服不在线！<br>您可以给客服<span class='span-link' onclick='to_rec();' title='请在信息输入框中发送留言'> 留言 </span>或者选择<span class='span-link' onclick='showauto()'> 客服助手 </span>的帮助！<br>如果您要选择其他客服人员进行对话，请<span class='span-link' onclick='to_main_kf()'> 返回 </span>。");
      infos.push("您也可以选择<span class='span-link' onclick='showauto()'> 客服助手 </span>的帮助。");
      infos.push("请在此发送留言！");
      infos.push("感谢您的评分，我将继续为您服务！");
      infos.push("尚未与客服建立对话，不能评分!");
      infos.push("请填写你的姓名！");
      infos.push("请填写你的电子信箱！");
      infos.push("请填写你的电话号码或手机号码！（固定电话必须填写区号，中间不可有“－”如：0571－87858665 应该填写为 057187858665）");
      infos.push("请填写你的电话号码或手机号码！");
      infos.push("请填写你的qq！");
      infos.push("请填写留言内容！");
      infos.push("自助答疑助手");
      infos.push("系统自动回复");
      infos.push("秒后自动为您分配客服接待...");
      infos.push("空闲");
      infos.push("正常");
      infos.push("繁忙");
      infos.push("占线");
      infos.push("未分配部门");
      infos.push("您选择的客服不在线！\r\n点“确定”进入留言，“取消”重新选择其他客服");
      infos.push("您正排在队列的第");
      infos.push("位，请稍候...");
      infos.push("如果您不想继续等待，也可以<span class='span-link' onclick='talkWithOthers()'><b>咨询其他客服</b></span>或<span class='span-link' onclick='getWlist(1)'><b>给客服人员留言</b></span>");
      infos.push("<img src='style/chat/crystal_blue/img/machine.gif' style='float:left;'><span style='position:relative; left:2px; top:8px;'>您好，我是智能机器人小Q<br/><br/>如果不是太复杂的问题，我也可以为您<span class='span-link' onclick='showzsk()'><b>立刻解答</b></span></span><br/>");
      infos.push("文件传送成功！");
      infos.push("给客服评分");
      infos.push("<img src='style/chat/crystal_blue/img/machine.gif' style='float:left;'><span style='position:relative; left:2px; top:8px;'>您好，我是智能机器人小Q<br/><br/>管理中心设置问候语</span><br/><br/>");
      infos.push("&nbsp;&nbsp;&nbsp;请选择您想咨询的问题分类");
      infos.push("有如下热门问题:");
      infos.push("小Q 说:");
      infos.push("所有分类");
      infos.push("&nbsp;&nbsp;&nbsp;您是不是想咨询这些问题:");
      infos.push("<tr><td align='left'>&nbsp;&nbsp;&nbsp;其他分类中还有");
      infos.push("个类似问题 >> <span class='span-link' onclick='lookOver()'>点击查看</span></td></tr>");
      infos.push("如果您没有得到满意的解答，可以 <span class='span-link' onclick='getWlist(1)'>给客服人员留言</span> 或 <span class='span-link' onclick='history.go(0)'>在线咨询</span>");
      infos.push("<div style='float:left; margin-top:5px; margin-left:3px;'>>> 您正在咨询有关");
      infos.push("的问题</div><span class='span-link' onclick='sendtext(\"GetTypeList\")' style='float:right; margin-top:5px; margin-right:10px; text-decoration:none'>选择问题分类</span>");
      infos.push("所有分类");
      infos.push("&nbsp;&nbsp;&nbsp;&nbsp;抱歉，该类没有找到与您输入相关的问题");
      infos.push("请填写你的SKYPE！");
      infos.push("请填写你的单位！");
      infos.push("• 客服人员将您转接至自助答疑<br>");
      infos.push("未建立对话，不能发送消息。");
      infos.push("对话已结束，不能发送消息。");
      infos.push("发送内容不能为空，请重新输入。");
      infos.push("智能机器人");
      infos.push("自助答疑");
      infos.push("您好，我是");
      infos.push("提交留言");
      infos.push("继续留言");
      infos.push("结束对话");
      infos.push("留言成功！");
      infos.push("是否继续留言");
      infos.push("链接不能为空！");
      infos.push("建立对话失败，请检查网络环境后重试");
      infos.push("您的消息");
      infos.push("发送失败，请检查网络环境后重试");
      infos.push("文件发送失败，请检查网络环境后重试");
      infos.push("网络连接已修复，您可以继续发送对话");
      infos.push("由于网络原因，提交评分失败");
      infos.push("");
      infos.push("取消");
      infos.push("您已经很长时间没有发送信息了，再过3分钟，系统将会自动断开对话");
      infos.push("请正确填写你的电子信箱！");
      infos.push("请正确填写你的SKYPE！");
      infos.push("您太久没有操作，页面已过期，请在刷新后重新操作！");
      infos.push("请填写你的联系地址！");
      infos.push("对话已接通，");
      infos.push("正在为您服务!");
      infos.push("*如果链接文字为空，则直接显示链接");
      infos.push("确定");
      infos.push("您有新消息..");
      infos.push("系统提示");
      infos.push("建议");
      infos.push("*字数控制在150字以内");
      infos.push("输入字数超过150字，请重新输入！");
      infos.push("无热门问题");
      infos.push("回复方式");
      infos.push("短信");
      infos.push("邮件");
      infos.push("网站");
      infos.push("留言对象");
      infos.push("公司");
      infos.push("部门(人员)");
      infos.push("不能选择未分组");
      infos.push("回复");
      infos.push("客服咨询");
      infos.push("留言回复");
      infos.push("访客防火墙");
      infos.push("验证码");
      infos.push("跳过");
      infos.push("请输入验证码");
      infos.push("验证码错误");
      infos.push("是否接受");
      infos.push("的评分请求？");
      infos.push("如果您没有得到满意的解答，可以 <span class='span-link' onclick='history.go(0)'>在线咨询</span>");
      infos.push("来自手机客服端：<a href='http://www.53kf.com' target='_blank'>http://www.53kf.com</a>");
      infos.push("请输入相关信息");
      infos.push("如果您没有得到满意的解答，可以 <span class='span-link' onclick='getWlist(1,1)'>给客服人员留言</span> 或 <span class='span-link' onclick='history.go(0)'>在线咨询</span>");
      infos.push("很抱歉，由于您长时间未咨询，系统结束了本次服务，请对本次服务评价。若您仍需其他服务，请再次联系客服。");
      infos.push("感谢您的咨询，请对本次服务评价。");
      infos.push("位客服在线");
      infos.push("图片设置");
      infos.push("请输入网络地址或点击浏览上传");
      infos.push("浏 览");
      infos.push("仅支持JPG、JPEG、GIF、PNG，大小2M以内");
      infos.push("发&nbsp;送");
      infos.push("取&nbsp;消");
      infos.push("文件设置");
      infos.push("请点击浏览上传文件");
      infos.push("文件发送支持常用文档、影音、图片、压缩文件的发送，请控制您的发送文件大小不超过4M。");
      infos.push("未分组");
    var check_num_status = 0; //验证码是否检测通过
  var minchat_style = 1;
  var khchat_style = "0";//定制版标示，0为默认，1为华为定制
  var huawei_fz_name = ""; //华为定制，记录选择分组名
  var locate = "cn";
  var lytype = "0";
  var lyurl = "";
  var company_tpl = 'minichat2';
  var enable_talk_collection = "1";  // 通讯采集开关 1:开启 0:关闭
  var host = "www6.53kf.com";
  var master_host = "tb.53kf.com";
	var market_host = "www.53kf.com";
  var commond_version = "123456"; //webClient.js的版本号，上发到服务端

  var copartner = "";
  var username = unescape("");
  var userinfo = unescape("");
  var contact = unescape("");
  var question = unescape("");
  var talkpage = "http://www.shjhome.com/15";
  var frompage = "";
  var talktitle = getCookie3("talktitle_70831548");
  var land_page = "http://www.shjhome.com/15";
  var guest_ip_info = "江苏省南京市[电信]";
  var talk_type = 0;//会话类型
  var origin_type = 0;//流失标记
  var origin_time = 0;//流失时间
  var search_engine = "";
  var keyword = "";
  //提示信息
  var prompt137= "请输入验证码";
  var prompt138= "验证码错误";
  //设置相关
  var kfpf = "1";
  var vote_true = false;
  var vote_value = "1";//默认评分
  var vote_bt = infos[71];
  var postkey = 1; //发送消息的热键  1：ENTER 2：CTRL+ENTER
  var cname = "生活家装饰";
//var company_id = "70831548";
  var isold = 0;
  var mytempid = "0";
  var myfirst_tempid = "0";
  var conn_prompt = "您好，欢迎您的咨询，请问有什么需要帮助的吗？";
  var m_conn_prompt_list = new Array(); // 所有客服接通提示
          
    var re2 = new Object();
    re2.id6d = "5533758";
	re2.prompt = "<p>???</p><div style=\"top: 0px;\">??</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540327";
	re2.prompt = "<span style=\"font-size:18px;\"></span><div><span style=\"font-size:16px;\"></span><div><span style=\"color:#ff0000;\"><span style=\"font-size:16px;\"><span style=\"color:#000000;\">您好！欢迎光临全国品牌</span>【<strong>生活家家居-成都站</strong>】</span></span></div><div><span style=\"font-size:16px;\">1.现在即可咨询</span><span style=\"font-size:18px;color:#ff00;\">【最新优惠】</span><span style=\"font-size:16px;\">活动详情</span></div><div><span style=\"color:#ff0000;\"><span style=\"font-size:16px;\"><span style=\"color:#000000;\">2.&nbsp;现在即可咨询</span>【<strong>报价、材料、设计等装修问题</strong>】<br /><span style=\"color:#000000;\">3.&nbsp;现在即可提前预约您喜欢的设计师 </span></span></span></div></div><div><span style=\"font-size:16px;\">我是您的专属服务顾问：<span style=\"color:#ff0000;\"><strong>任露莹</strong></span>，电话：<span style=\"color:#ff0000;\"><strong>13908040991</strong></span><span style=\"color:#ff0000;\"><span style=\"color:#000000;\">QQ</span>:<strong>207190667</strong></span></span></div><p><span style=\"font-size:16px;\">&nbsp;</span></p><div style=\"TOP: 0px\">??</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540328";
	re2.prompt = "<div><span style=\"FONT-FAMILY: Arial\"><span style=\"FONT-SIZE: 16px\"><span style=\"FONT-FAMILY: 'Microsoft YaHei'\"><span style=\"FONT-FAMILY: Arial\"><span style=\"BACKGROUND-COLOR: rgb(255,255,255)\"><span style=\"font-family:'Microsoft YaHei';\"><span style=\"font-size:13px;color:#000000;\">欢迎光临-中央电视台合作品牌-生活家装饰<br />好设计，好家装，就选生活家 ！<br />您好，我是您的网络专属客户经理【陈静雯】，可以直接给我来电：13558706645（微信同号）QQ：781166106 很高兴为您服务！</span></span></span></span></span></span></span></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540334";
	re2.prompt = "<span style=\"font-family:SimSun;font-size:16px;\"></span><div><strong>欢迎进入健康整装生活家装饰—“品质生活服务商”官网--<span style=\"color:#006600;\">生活家成都站</span></strong>，<br />1.现在即可咨询【家装优惠】<br />2.现在即可咨询【报价、材料、设计、活动内容等装修问题】<br />3.现在即可提前预约您喜欢的设计师<br />我是您的专属服务顾问：<span style=\"color:#006600;\"><strong>诺顿（钟雨晴），TLE：13551099842&nbsp;QQ：1249658372</strong></span></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540335";
	re2.prompt = "<p><span style=\"font-family:Microsoft YaHei;\"><strong>欢迎光临生活家家居-南充分公司</strong></span></p><p><span style=\"font-family:Microsoft YaHei;\"><strong>有任何装修疑问都可以在<span style=\"color:#cc33cc;\">【对话框】</span>留言，</strong></span><span style=\"font-family:'Microsoft YaHei';\"><strong>比如：</strong></span></p><p><span style=\"font-family:'Microsoft YaHei';\"><strong><span style=\"WHITE-SPACE: pre\"></span>1、我想咨询<u>装修报价</u></strong></span></p><p><span style=\"font-family:Microsoft YaHei;\"><strong><span style=\"WHITE-SPACE: pre\"></span>2、我想咨询<u>装修效果图</u></strong></span></p><p><span style=\"font-family:Microsoft YaHei;\"><strong><span style=\"WHITE-SPACE: pre\"></span>3、我想咨询<u>装修材料</u>等</strong></span></p><p><span style=\"font-family:Microsoft YaHei;color:#ff0000;\"><strong>或者拨打装修热线：0817-3869620</strong></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540336";
	re2.prompt = "<p></p><div><strong><span style=\"color:#ff0000;\"><span style=\"font-size:18px;\"></span></span></strong></div><p></p><p>您好，欢迎光临生活家装饰南充分公司，我是专业客服敬小艳，简述您的装修疑问，我会尽快回复您</p><p><br /></p><p></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540337";
	re2.prompt = "<p>欢迎进入生活家装饰官网-<strong>南充站</strong></p><p>我是你的的专属服务顾问：<strong><span style=\"color:#ff0000;\">田华</span></strong></p><p>一.咨询【活动】拨打：<strong><span style=\"color:#ff0000;\">18681786409</span></strong></p>&nbsp;二.咨询【材料】【报价】【设计】<br />拨打：<strong>13320775657</strong><br />三.咨询【效果图】QQ：<strong>2726601273</strong>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540338";
	re2.prompt = "<div><span style=\"font-size: 16px;\"><span style=\"font-family: Microsoft YaHei;\">免费预约设计师请回复“<span style=\"color: rgb(255, 0, 0);\">1</span>”或拨打预约电话：<span style=\"color: rgb(255, 0, 0);\">150-8598-3248</span>（仅限网络报名业主）</span></span></div><div><span style=\"font-family: Microsoft YaHei;\"></span></div><div><span style=\"font-family: Microsoft YaHei;\">您好！欢迎光临CCTV合作品牌<span style=\"color: rgb(153, 0, 0);\"><strong>【生活家装饰-贵阳站】</strong></span><br />现在即可咨询<span style=\"color: rgb(153, 0, 0);\">【当前活动】</span>详情<br />现在即可咨询<span style=\"color: rgb(153, 0, 0);\">【材料、报价、设计】</span>等装修问题<br />现在即可预约您喜欢的设计师</span></div><div><span style=\"font-family: Microsoft YaHei;\"><br />我是您的专属服务顾问：<strong><span style=\"color: rgb(153, 0, 0);\"><span style=\"font-size:16px;\">张瑞</span></span></strong><br />电话<span style=\"background-color: rgb(255, 255, 255);\">：<span style=\"color: rgb(153, 0, 0);\"><strong>150-8598-3248</strong></span></span></span></div><div><span style=\"background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(153, 0, 0);\"><strong><span style=\"font-family: Microsoft YaHei;\"><br /></span></strong></span></span></div><div><span style=\"font-family: Microsoft YaHei;\"><span style=\"font-size: 16px;\">海量</span><strong>效果图实景图</strong><span style=\"font-size: 16px;\">微信：</span><strong>150-8598-3248</strong></span></div><p></p><p>&nbsp;</p><p></p><div class=\"lmsg_color\"><br /></div><div style=\"top: 0px;\">﻿﻿</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540339";
	re2.prompt = "您好！欢迎进入CCTV合作品牌全国连锁公司【<strong>生活家家居-贵阳站</strong>】我是客服经理胡高琼。业主到店咨询即可享受<strong><span style=\"font-size:18px;color:#cc0000;\">百万豪车特斯拉免费迎接到店！</span></strong><br />免费预约豪车请回复“1”或拨打预约电话：18798031894小胡（仅限网络报名业主）<br />如有不在或者打字不方便可以电话咨询：18798031894胡高琼QQ：1332797434";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540340";
	re2.prompt = "<h3><p>您好，欢迎进入生活家装饰官方网站，我是您的专属客服经理白娅！很高兴为您服务，请问有什么可以帮您？健康拎包装，零增项，套内面积计算公平合理；全国连锁公司，集团统一进货，品牌材料不限量 有多少装多少！若未及时回复，可拨打咨询热线：18286136718白娅 QQ：2235367455</p></h3>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540341";
	re2.prompt = "<p><span style=\"font-family:tahoma;line-height: 14.4px; background-color: rgb(241, 248, 249);\">欢迎进入生活家装饰，一站式建康整装，让装修像买包包一样简单。</span><br style=\"line-height: 14.4px; font-family: tahoma;\" /><span style=\"font-family:tahoma;line-height: 14.4px; background-color: rgb(255, 255, 255);\">我是您专属客户经理：小雪，咨询电话：【<strong>15808759867</strong>】</span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540342";
	re2.prompt = "<div>您好，我是您的家装顾问小杨。您有任何装修方面的问题都可以向我咨询！<span style=\"font-size:18px;color:#ff0000;\">15198711815</span> <span style=\"color:#ff0000;\"><span style=\"font-size:18px;\">QQ：5847<span style=\"font-family:微软雅黑;\">48342 </span><span style=\"font-family:SimHei;font-size:16px;color:#993399;\"><u>如果您不想打字可留下您的联系方式这边会尽快给你回电。</u></span></span></span></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540343";
	re2.prompt = "<p>{53b#28#}您好，我是昆明生活家装饰的客服经理宋语（电话：18288985956，QQ：601439386），很高兴为您服务！！</p><p><span style=\"color:#ff0000;\">如果您不方便打字，可以留个您的联系方式，我们会及时给您回电，或者加您QQ！谢谢。。。</span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540346";
	re2.prompt = "<p style=\"TEXT-ALIGN: left; LINE-HEIGHT: 21px; TEXT-TRANSFORM: none; FONT-VARIANT: normal; FONT-STYLE: normal; TEXT-INDENT: 0px; MARGIN: 1px 0px 0px; PADDING-LEFT: 0px; LETTER-SPACING: normal; FONT-FAMILY: arial, 宋体; WHITE-SPACE: normal; FONT-SIZE: 12px; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px; font-stretch: normal\"><span style=\"font-size:16px;color:#000000;FONT-WEIGHT: normal\">您好！欢迎光临全国品牌</span><span style=\"font-size:16px;color:#000000;FONT-WEIGHT: normal\"><strong><span style=\"color:#000000;\">【生活家家居-西安站】<br /></span></strong>1. 现在即可咨询<span style=\"color:#ff00;\"><strong>【当前优惠详情</strong></span></span><span style=\"font-size:16px;color:#000000;FONT-WEIGHT: normal\"><span style=\"color:#ff00;\"><strong>】<br /></strong></span>2. 现在即可咨询</span><span style=\"font-size:16px;\"><span style=\"color:#000000;FONT-WEIGHT: normal\">【<strong>报价、材料、设计等装修问题</strong>】<br /></span>3. 现在即可提前预约您喜欢的设计师<br />我是您的VIP专属家装顾问：<span style=\"color:#ff0000;\"><strong>张颖</strong></span>，您可以直接给我来18829358556（可加微信）</span><strong>，QQ:1347379551</strong></p><p>&nbsp;</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540347";
	re2.prompt = "<div><p></p><p></p><p>您好，欢迎光临西安最大的整装公司【生活家家居-西安站】</p><p>1、现在即可咨询【当前优惠详情】</p><p>2、现在即可咨询【预算报价、材料、设计等装修问题】</p><p>3、现在即可提前预约您喜欢的设计师</p></div><div><strong>我是您的专属家装顾问：</strong></div><div><span style=\"FONT-SIZE: 13px\"><span style=\"COLOR: #ff0000\"><strong><span style=\"font-size:18px;\"><span style=\"font-size:16px;\"><span style=\"color:#000000;\">苏瑶丽</span><u>Tel</u></span><u> </u></span><u>:<span style=\"color:#ff0000;\">17792394812</span></u></strong></span>，<strong><span style=\"color:#ff0000;\">QQ：3258233387</span></strong></span></div><div></div><div>如果您打字不方便，请留下联系方式，我们会尽快跟您联系！<br /></div><p>&nbsp;</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540348";
	re2.prompt = "<p style=\"font-family: 宋体; font-size: 14px;\"><span style=\"background-color: rgb(255, 255, 255);\"><span style=\"font-size: 18px;\"><strong><span style=\"color: rgb(0, 0, 0); font-family: FangSong_GB2312;\"></span>您好，生活家装饰-集团化采购国际、国内一线主材！您是想了解材料、施工、设计还是价格呢？若不方便打字可致电<span style=\"color:#cc0000;\">【小方】18702963645（同微信）</span>或留个您的联系方式，我立刻联系您！<span style=\"font-family: FangSong_GB2312;\"></span></strong></span></span></p><span style=\"color:#000000;background-color: rgb(255, 255, 255);\"></span>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5564281";
	re2.prompt = "<div><span style=\"color:#ff0000;\"><span style=\"color:#000000;\"></span></span><div><span style=\"COLOR: rgb(255,0,0)\"><span style=\"font-size:18px;\"><strong><span style=\"color:#000000;\">您好，欢迎访问“健康生活服务商”生活家装饰<span>[贵阳站]，</span>我是您的专属客户经理小周</span>，<span style=\"color:#000000;\">很高兴为您服务！如果您不方便打字可以直接电话咨询</span><span style=\"color:#ff0000;\">小周</span></strong></span></span></div><div><span style=\"color:#ff00;\"><span style=\"font-size:18px;\"></span></span><span style=\"font-size:16px;color:#ff0000;\"><strong>电话：13608554560 小周</strong></span></div></div><div><span style=\"font-size:16px;color:#ff0000;\"><strong>微信号：13608554560</strong></span></div><p>&nbsp;</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5564308";
	re2.prompt = "<div><div><div>您好，北京生活家装饰贵阳分公司欢迎您！很高兴为您服务！若未及时回复，请拨打</div><div><div><div>报名电话：<span style=\"color:#ff0000;\">0851-88203764</span></div></div></div></div></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5570336";
	re2.prompt = "<p>您好！欢迎光临全国品牌【生活家家居-西安站】<br />1. 现在即可咨询【当前优惠详情】<br />2. 现在即可咨询【报价、材料、设计等装修问题】<br />3. 现在即可【提前预约您喜欢的设计师】<br />我是您的专属服务顾问：<strong><span style=\"font-size:18px;color:#ff0000;\">小裴</span></strong>，可以直接给我来电：</p><p><span style=\"color:#ff0000;\"><strong><span style=\"color: rgb(10, 75, 34); font-weight: bold; text-decoration: underline; cursor: pointer;\" class=\"send_sms_from_msg callsoft_from_msg\" data=\"15129046616\">15129046616</span></strong>，<span style=\"color:#000000;\">QQ：</span>383217709</span></p><p>&nbsp;</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5570351";
	re2.prompt = "<div style=\"PADDING-BOTTOM: 2px; WORD-WRAP: break-word; WORD-BREAK: break-all; PADDING-TOP: 2px\" class=\"msg-div2 float-l1\"><span style=\"color:black;\"></span>&nbsp;</div><p>&nbsp;</p><p>您好！欢迎光临全国品牌【生活家家居-西安站】<br />1. 现在即可咨询【当前优惠详情】<br />2. 现在即可咨询【报价、材料、设计等装修问题】<br />3. 现在即可提前预约您喜欢的设计师<br />我是您的专属服务顾问：侯璐璐，可以直接给我来电：</p><p><span style=\"color:#ff0000;\">18729377574，<span style=\"color:#000000;\">QQ</span>:2836058108</span></p><p>&nbsp;</p><p>&nbsp;</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5588224";
	re2.prompt = "<p></p><p></p><p></p><div><p></p><p>欢迎进入生活家家居官网-<strong>南充站</strong></p><p>我是你的专属服务顾问：蒲清会</p><p>一.咨询【活动】拨打：<strong><span style=\"color: rgb(10, 75, 34); cursor: pointer; text-decoration: underline;\" class=\"send_sms_from_msg callsoft_from_msg\" data=\"18681786409\">18086912170</span></strong></p>二.咨询【材料】【报价】【设计】<br />拨打：<strong><span style=\"color: rgb(10, 75, 34); cursor: pointer; text-decoration: underline;\" class=\"send_sms_from_msg callsoft_from_msg\" data=\"13320775657\">18086912170</span></strong><br />三.咨询【效果图】QQ：<strong>1366019141</strong><br /><p><br /></p><p>如果您很忙可以留下您的联系方式我们给您回电！</p><br /></div><p></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5614794";
	re2.prompt = "<p align=\"left\"><span style=\"color: rgb(22, 30, 38); font-family: ;\" 243=\"\" 241=\"\" 240=\"\" rgb=\"\" 22px=\"\" 13px=\"\" sans-serif=\"\" gb=\"\" sans=\"\" hiragino=\"\" arial=\"\" neue=\"\" helvetica=\"\" yahei=\"\" microsoft=\"\"></span></p><div>&nbsp;欢迎光临中央电视台合作品牌生活家装饰<br />好设计，好家装，就选生活家&nbsp;<br />您好，我是您的网络专属客户经理【高佳凤】，可以直接给我来电：17313145230（微信同号）QQ：1297115170 很高兴为您服务！&nbsp;</div><span style=\"color: rgb(22, 30, 38);\" 243=\"\" 241=\"\" 240=\"\" rgb=\"\" 22px=\"\" 13px=\"\" sans-serif=\"\" gb=\"\" sans=\"\" hiragino=\"\" arial=\"\" neue=\"\" helvetica=\"\" yahei=\"\" microsoft=\"\"></span><p></p><p></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5615246";
	re2.prompt = "&nbsp;您好，欢迎光临全国连锁品牌【生活家家居-长沙站】<br />1.新产品全面上线【悦享家，一键整体家装，更多惊喜优惠】<br /><p>2.现在即可咨询【报价、材料、设计等装修问题】</p><p>3.现在即可提前预约您喜欢的设计请加<strong>QQ：571593302</strong>、或者拨打咨询热线：18684858109 金琳</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5621251";
	re2.prompt = "<p><strong><span style=\"color:#3333ff;\"><span style=\"font-size:16px;\"><span style=\"color:#000000;\">您好，您是旧房改造还是新房装修呢？如果您不方便打字可以直接来电或者留个您的联系方式，我会立刻联系您。</span>我叫【惠银银】 ， 电话：13609234557 QQ：630555475</span></span></strong></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5627088";
	re2.prompt = "<p></p><span style=\"color: rgb(255, 95, 83); line-height: 20px; font-family: 微软雅黑, 宋体, Arial; font-size: 18px;\">您好，感谢关注【生活家家居-武汉站】,请问您家是哪个小区的房子咨询装修呢?#</span><span style=\"color: rgb(255, 95, 83); line-height: 20px; font-family: 微软雅黑, 宋体, Arial; font-size: 18px;\">全国连锁公司，集团全球采购</span><span style=\"color: rgb(255, 95, 83); line-height: 20px; font-family: 微软雅黑, 宋体, Arial; font-size: 18px;\">，详情咨询，马琳，</span><span style=\"line-height: 20px;\"><span style=\"font-family:FangSong_GB2312;font-size:18px;color:#009900;\"><u><strong>13517261642</strong></u></span></span><span style=\"color: rgb(255, 95, 83); line-height: 20px; font-family: 微软雅黑, 宋体, Arial; font-size: 18px;\">#</span> <div style=\"top: 0px;\"></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5627090";
	re2.prompt = "<p><span style=\"FONT-SIZE: 18px\"><span style=\"font-family:SimHei;\"><strong>您好！欢迎光临全国品牌【生活家家居-武汉站】1. 生活家家居健康整装【拎包装预售会】马上咨询享0元定制专属设计VR效果图2张 &nbsp; 2.在线咨询即可预约2016年度客户满意度优秀设计师，我是您的专属服务顾问：倪波燕，可以直接给我来电：<br />TEL<span style=\"font-size:32px;\">:<span style=\"color:#993399;\">13419559219 </span>QQ</span>:646653136</strong></span><br /></span></p><span style=\"font-size:18px;\"></span>";
            re2.carousel = "1";
        re2.carousel_interval = "15";
    	re2.carousel_num = "1";
        re2.carousel_prompt1 = "我是武汉站汪亚娟，以接待13769位业主装修咨询，客户满意度98%。很高兴为您服务！<p><span style=\"color:#ff0000;\"><strong>QQ：470451625</strong></span> 电话：<span style=\"color:#ff0000;\"><strong>15697280129</strong></span></p><p>&nbsp;</p><p>如果不方便打字，可以留下您的联系方式，我们尽快与您联系！</p>";
        re2.carousel_prompt2 = "<p>独有VR系统：8大空间实景呈现，让家更确定，所见及所得。现在报名即可免费定制2张专属VR效果图。</p><p>预约热线:15697280129</p><p><br /></p>";
        re2.carousel_prompt3 = "<p>独有APP系统：整装造价、施工验收、材料进场验收、服务评价、在线沟通、服务人员名单等让您随时随地掌控最新动态。</p><p>在线客服可以为您解答更多家装困扰</p><p>也可以拨打<strong><span style=\"color:#ff0000;\">咨询热线:15697280129</span></strong></p>";
        re2.carousel_prompt4 = "<p>&nbsp;ERP系统：施工、材料订单管理及调度自有产业工人、有效控制工期，全程信息化管理。</p><p>在线客服可以为您解答更多家装困扰</p><p>也可以拨打<strong><span style=\"color:#ff0000;\">咨询热线:15697280129</span></strong></p>";
        re2.carousel_prompt5 = "";
        re2.carousel_prompt6 = "";
        re2.carousel_prompt7 = "";
        re2.carousel_prompt8 = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5627091";
	re2.prompt = "【生活家家居】中国健康整装服务商。24小时咨询热线：13545880371&nbsp;&nbsp;陈经理。活动报名热线：027-65384330 ";
            re2.carousel = "1";
        re2.carousel_interval = "10";
    	re2.carousel_num = "2";
        re2.carousel_prompt1 = "您好！我是武汉站客服，生活家武汉公司成立至今接待23769位业主装修咨询，客户满意度98%。很高兴为您服务！<p>预约热线:4008-122-100</p><p>如果不方便打字，可以留下您的联系方式，我们尽快与您联系！</p>";
        re2.carousel_prompt2 = "";
        re2.carousel_prompt3 = "";
        re2.carousel_prompt4 = "";
        re2.carousel_prompt5 = "";
        re2.carousel_prompt6 = "";
        re2.carousel_prompt7 = "";
        re2.carousel_prompt8 = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5635450";
	re2.prompt = "<span style=\"font-size:13px;\">您好</span>，欢迎访问中国健康生活服务商---生活家装饰长沙分公司，全新161项全包-拎包装，德系工艺，健康环保，<strong><span style=\"font-size:16px;color:#ff0000;\">5000</span></strong>平米国家家居体验馆，恭迎光临。我是您的专属网络客服，您有什么装修方面的疑问询？或者也可拨打全国免费整装热线：<span style=\"font-size:16px;color:#ff0000;\"><strong>400-8122-100</strong></span>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5635451";
	re2.prompt = "<p><span style=\"font-size:13px;\">&nbsp;<strong>您好，欢迎光临全国连锁品牌<span style=\"color:#000000;\">【生活家家居-长沙站】</span></strong></span></p><p><span style=\"font-size:13px;\">1.新产品全面上线<span style=\"color:#cc0000;\">【悦享家，一键整体家装，更多惊喜优惠】</span></span></p><p><span style=\"font-size:13px;\">2.现在即可咨询<span style=\"color:#cc0000;\">【报价、材料、设计等装修问题】</span></span></p><p><span style=\"color:#000000;\"><span style=\"font-size:13px;\">3.现在即可提前预约您喜欢的设计师</span></span></p><p><strong>或可直接联系 &nbsp;刘翼 &nbsp;电话(微信）：15111185064 &nbsp;QQ:564805859</strong></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5636778";
	re2.prompt = "您好，欢迎访问“中国健康生活服务商”生活家家居[成都站]，我是您的专属客服经理，装修方面的问题我将为您提供专业的解答，如果打字不方便，可以直接来电：028-67636663 ";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5639923";
	re2.prompt = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5639924";
	re2.prompt = "<p>您好！欢迎光临全国品牌【生活家家居-合肥站】<br />1.现在即可咨询【新店开业优惠】<br />2.现在即可咨询【报价、材料、设计等装修问题】<br />3.现在即可提前预约您喜欢的设计师<br />我是值班客服侯瑞：可以直接</p><p>电话咨询：</p><p><br /></p><p>150056051512</p><div style=\"top: 1px;\">??</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5641351";
	re2.prompt = "<p><span style=\"font-size:18px;color:#000000;\">您好！欢迎光临生活家装饰公司！在装修上有任何问题都可以咨询我们！我是官网客服：张驰。</span></p><p><span style=\"font-size:18px;color:#000000;\">  &nbsp;电话：15375048004</span></p><p><span style=\"font-size:18px;color:#000000;\">&nbsp;Q Q &nbsp;:&nbsp; 488055423</span></p><p><span style=\"font-size:18px;color:#000000;\">&nbsp;微信：15375048004</span></p><br /><div style=\"top: 0px;\">??</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10075777";
	re2.prompt = "您好，欢迎您的咨询，请问有什么需要帮助的吗？";
            re2.carousel = "1";
        re2.carousel_interval = "30";
    	re2.carousel_num = "1";
        re2.carousel_prompt1 = "";
        re2.carousel_prompt2 = "";
        re2.carousel_prompt3 = "";
        re2.carousel_prompt4 = "";
        re2.carousel_prompt5 = "";
        re2.carousel_prompt6 = "";
        re2.carousel_prompt7 = "";
        re2.carousel_prompt8 = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10075803";
	re2.prompt = "<div><span style=\"font-family:SimHei;font-size:13px;\">欢迎光临全国装修品牌【生活家家居】-合肥站<br />1.场馆全面升级【拎包装、一键整体家装，让装修像买包包一样简单】<br />2.现在即可咨询【报价、材料、设计等装修问题】<br />3.现在即可提前预约您喜欢的设计师<br />我您的专属顾问：吕超，可以直接<br />&nbsp;电话咨询：<strong><span style=\"color:#ff0000;\">15385312848</span></strong><br />QQ：1398777387</span></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10095802";
	re2.prompt = "<p>您好！欢迎光临全国品牌【生活家家居-成都站】<br />1. 现在即可咨询【<strong><span style=\"color:#ff0000;\">秋季家装节</span></strong>】<br />2. 现在即可咨询【<strong><span style=\"color:#ff0000;\">报价、材料、设计等装修问题</span></strong>】<br />3. 现在即可提前预约您喜欢的设计师<br />我是您的专属服务顾问：<strong><span style=\"color:#ff0000;\">郭丽琴</span></strong>，可以直接给我来电：</p><p>&nbsp;<strong><span style=\"color:#ff0000;\">TEL:18161298378</span><span style=\"color:#ff0000;\">， QQ:2232984991</span></strong></p><div style=\"top: 0px;\">??</div><div style=\"top: 0px;\">??</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10098948";
	re2.prompt = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10104415";
	re2.prompt = "<div><div><strong></strong><span style=\"font-size:16px;\">&nbsp;</span></div><!--StartFragment --><div><span style=\"font-size:16px;\">您好！欢迎光临全国品牌【生活家家居-成都站】<br />1.&nbsp;现在即可咨询【<span style=\"color:#ff6666;\">818全民家装狂欢节</span>】活动详情<br />2.&nbsp;现在即可咨询【报价、材料、设计等装修问题】<br />3.&nbsp;现在即可提前预约您喜欢的设计师<br />我是您的专属服务顾问：魏丹，可以直接给我来电：<br /><br />TEL:<span style=\"color:#ff0000;\">18782906045，&nbsp;QQ:2421107524</span></span></div></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10104416";
	re2.prompt = "<div><strong><span style=\"font-size:16px;\">&nbsp; </span><span style=\"font-size:18px;\"></span></strong><div><span style=\"font-size:16px;\">您好！欢迎光临全国品牌【<span style=\"color:#ff0000;\">生活家家居-成都站</span>】<br /></span></div><span style=\"font-size:16px;\">1.现在即可咨询【<span style=\"color:#ff0000;\"><span style=\"color:#ff0000;\">双十一优惠活动</span></span><span style=\"color:#000000;\">】</span></span><span style=\"font-size:16px;\"><span style=\"background-color: rgb(255, 255, 255);\"><br /></span>2.现在即可咨询【<span style=\"color:#ff0000;\">报价、材料、设计等装修问题</span>】<br />3.现在即可【<span style=\"color:#ff0000;\">提前预约设计师</span>】</span></div><div><span style=\"font-size:16px;\">我是您的专属家装顾问<span style=\"color:#ff0000;\">何芳芳：18282510973，QQ：1575535453.</span></span><br /></div><div><span style=\"font-size:16px;\"></span>&nbsp;</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10112944";
	re2.prompt = "<div style=\"top: 0px;\"><strong><span style=\"font-size:16px;color:#ff0000;background-color: rgb(255, 255, 255);\">??</span></strong></div><div style=\"top: 41px;\"><span style=\"font-size:16px;color:#000000;background-color: rgb(255, 255, 255);\"><strong>您好，欢迎访问</strong></span><span style=\"color: rgb(0, 0, 0);\"><span style=\"font-size:16px;color:#000000;background-color: rgb(255, 255, 255);\"><strong>[<span style=\"color:#ff0000;background-color: rgb(255, 255, 255);\">昆明生活家家居</span></strong></span><span style=\"font-size:16px;color:#000000;background-color: rgb(255, 255, 255);\"><strong><span style=\"color:#33ff33;\"><span style=\"color:#000000;\">】</span></span></strong></span></span><span style=\"font-size:16px;color:#000000;background-color: rgb(255, 255, 255);\"><strong>“健康生活服务商”<span style=\"color:#ff0000;background-color: rgb(255, 255, 255);\"><u>拎包装震撼上市</u></span>让装修像买包包一样简单—— 一站式购齐<br />我是您的专属客服（陈若兮），若不方打字，请拨打：<span style=\"color:#ff0000;\">13700678097&nbsp;&nbsp;QQ（547597283）</span></strong></span></div><div style=\"top: 0px;\">??</div><div style=\"top: 24px;\">??</div><div style=\"top: 24px;\">??</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10113531";
	re2.prompt = "<strong><span style=\"color:#cc00;\"><span style=\"font-size:24px;\"></span></span></strong><p class=\"lmsg_color\" style=\"TOP: 0px\"><span style=\"color:#333333;\"><strong><span style=\"font-size:13px;\">您好！欢迎光临全国品牌<span style=\"color:#333333;\">【生活家家居-成都站】</span><br />1.新产品全面上线</span><span style=\"font-size:13px;\"><span style=\"color:#ff0000;\">【拎包装，一键整体家装，让装修像买包包一样简单】<br /></span>2.现在即可咨询<span style=\"color:#ff0000;\">【报价、材料、设计等装修问题】</span><br />3.现在即可提前预约您喜欢的设计师<br />我是您的专属服务顾问：<span style=\"color:#ff0000;\">林兰</span>，可以直接</span></strong></span></p><div style=\"TOP: 0px\"><span style=\"font-size:16px;\"><span style=\"color:#333333;\"><strong>电话</strong></span><strong><span style=\"color:#333333;\">咨询</span><span style=\"color:#cc00;\">：</span></strong></span><span style=\"color:#ff0000;CURSOR: pointer; TEXT-DECORATION: underline; FONT-WEIGHT: bold\">13880281029</span></div><div style=\"TOP: 0px\"><span style=\"CURSOR: pointer; TEXT-DECORATION: underline; FONT-WEIGHT: bold\"></span><span style=\"font-size:16px;color:#ff0000;\">QQ520067297</span></div><p class=\"lmsg_color\" style=\"TOP: 0px\">&nbsp;</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10113969";
	re2.prompt = "请问您是要咨询装修吗？若不方便打字可留下电话我们与您联系或拨打电话18872245794越芳芳咨询";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10113970";
	re2.prompt = "";
            re2.carousel = "1";
        re2.carousel_interval = "15";
    	re2.carousel_num = "1";
        re2.carousel_prompt1 = "<p>您好！我是生活家家居汉武汉站吴萍，以接待1769位业主装修咨询，客户满意度98%。很高兴为您服务！</p><span style=\"color: rgb(255, 0, 0);\"><strong>QQ：263618167 电话：15926265882</strong></span>";
        re2.carousel_prompt2 = "如果不方便打字，可以留下您的联系方式，我们尽快与您联系！";
        re2.carousel_prompt3 = "<strong><span style=\"font-size:16px;\">独有VR系统：8大空间实景呈现，让家更确定，所见及所得。现在报名即可免费定制2张专属VR效果图。<br />预约热线:4008-122-100</span></strong>";
        re2.carousel_prompt4 = "独有APP系统：整装造价、施工验收、材料进场验收、服务评价、在线沟通、服务人员名单等让您随时随地掌控最新动态。";
        re2.carousel_prompt5 = "【生活家家居】健康整装服务商<br /><br /><br />&nbsp; &nbsp; &nbsp; <strong>&nbsp; &nbsp; 免费热线：4008-122-100</strong>";
        re2.carousel_prompt6 = "<span style=\"font-size:13px;\">ERP系统：施工、材料订单管理及调度自有产业工人、有效控制工期，全程信息化管理。</span>";
        re2.carousel_prompt7 = "";
        re2.carousel_prompt8 = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115919";
	re2.prompt = "<p><span style=\"font-size:13px;\">您好，这里是南京生活家装饰，中国健康整装领导者。<span style=\"color:#ff0000;\"><strong>我是生活家罗宾</strong></span></span></p><p><span style=\"font-size:13px;\">电话：<span style=\"color:#009900;\"><strong>18861606985</strong></span></span></p><p><span style=\"font-size:13px;\">QQ：<span style=\"color:#009900;\"><strong>339634404</strong></span></span></p><p><strong><span style=\"font-size:13px;color:#ff0000;\"><u>如果您打字不方便，可以留下联系方式，我们会尽快与您取得联系的。</u></span></strong></p><p><strong><span style=\"font-size:13px;color:#ff0000;\">生活家首推健康整装一站式服务，10000平方米展厅，国内外一线品牌实景展现，集团采购，高性价比，德标工艺，品质环保保证，品质家居，健康生活</span></strong></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115920";
	re2.prompt = "<p><span style=\"font-family:Microsoft YaHei;font-size:16px;\"><span style=\"color:#3366ff;\"><strong style=\"background-color: rgb(255, 255, 255);\">您好，您是旧房改造还是新房装修呢？如果您不方便打字可以直接来电，我是南京生活家刘志洋，电话：</strong></span><span style=\"color:#ff0000;\"><strong>18661250812</strong></span><span style=\"color:#3366ff;\"><strong>QQ：</strong></span><span style=\"color:#ff0000;\"><strong>3141746001</strong></span></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115921";
	re2.prompt = "<p><span style=\"font-size:18px;\"><span style=\"color:#ff6666;\">亲爱哒</span>：欢迎来到南京生活家装饰</span><span style=\"font-size:18px;\">，我是生活家—</span><span style=\"color:#ff0000;\"><span style=\"font-size:24px;color:#009900;\"><strong>艾文</strong></span></span>，<span style=\"font-size:18px;color:#009900;\"><strong>手机/微信/QQ：152-6188-4875，</strong></span></p><p><span style=\"font-size:16px;color:#ff0000;\"><strong>如果您打字不方便，可以留下联系方式，我会立即与您联系哒！</strong></span></p><div style=\"top: 0px;\">??</div><div style=\"top: 0px;\">??</div><div style=\"top: 0px;\">??</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115923";
	re2.prompt = "<p>您好，这里是南京生活家装饰——健康生活服务商，<span style=\"font-size:16px;color:#ff0000;\"><strong>我是生活家陈杰（贝塔）</strong></span>，QQ：1652406502，手机：<span style=\"color:#009900;\"><strong>15295564190。</strong></span></p><p><strong><span style=\"color:#ff0000;\"><u>如果您不方便打字，可以留下联系方式，我们会尽快跟你联系的。</u></span></strong></p><div style=\"TOP: 0px\">??</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115924";
	re2.prompt = "<p><span style=\"font-size:13px;\">您好，这里是南京生活家家居，健康生活服务商。</span></p><p><span style=\"font-size:13px;\"><span style=\"color:#006600;\"><strong>我是生活家小匡</strong></span>，很高兴为您服务！</span></p><p><span style=\"font-size:13px;\">QQ<span style=\"font-family:宋体;\">：</span><strong><span style=\"color:#006600;\">2084634653</span></strong>，电话：<span style=\"color:#006600;\"><strong>18205096379</strong></span>。</span></p><p><span style=\"font-size:13px;color:#006600;\"><strong>如果您不方便打字，可以留下联系方式，我会尽快与您联系。</strong></span></p><p><span style=\"font-size:13px;\"></span>&nbsp;</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115925";
	re2.prompt = "<p class=\"lmsg_color\"><span style=\"font-size: 18px;\">您好，这里是南京生活家装饰-品质生活服务商 ，我是客户经理卓雨婷。</span></p><p class=\"lmsg_color\"><span style=\"font-size:18px;\"><span style=\"font-size:16px;color:#ff0000;\">QQ：565875673</span><span style=\"background-color: rgb(255, 255, 255);\"></span></span></p><p class=\"lmsg_color\"><span style=\"font-size:16px;color:#000099;\">手机：13951760677（同微信号）</span></p><span style=\"font-size:16px;color:#000099;\"></span><div class=\"kf_words_wk\"><strong><span style=\"color:#ff00;\">如果您打字不方便，可以留下联系方式，我会立即与您联系</span></strong></div><p class=\"lmsg_color\"><br /></p><p class=\"lmsg_color\"><br /></p><div style=\"top: 27px;\">﻿﻿</div><div style=\"top: 0px;\">﻿﻿</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115926";
	re2.prompt = "<span style=\"font-size:10px;\"></span><p><span style=\"font-size:16px;\"><span style=\"font-size:18px;\">您好，这里是南京生活家装饰，中国健康整装领导者。<span style=\"color:#ff0000;\"><strong>我是生活家王家俊</strong></span>，电话：</span><span style=\"color:#ff0000;\"><strong>15371646866</strong>，</span>QQ：<strong><span style=\"color:#ff0000;\">2788425221</span></strong></span></p><p><br /></p><p><strong><span style=\"color:#ff0000;\"><u>如果你打字不方便，你可以留个联系方式，我会尽快跟你联系</u></span></strong></p><p><span style=\"font-size:10px;\"></span>&nbsp;</p><div style=\"TOP: 0px\">??</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115928";
	re2.prompt = "<span style=\"font-size:13px;\"><strong>您好，我是今天的值班经理，很高兴为您服务。您可以直接电话咨询：18351445237，也可以留下您的联系方式，我会尽快给您回电的!</strong></span>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115937";
	re2.prompt = "<p style=\"WHITE-SPACE: normal; WORD-SPACING: 0px; TEXT-TRANSFORM: none; COLOR: rgb(0,0,0); TEXT-ALIGN: left; FONT: 12px/21px arial, 宋体; PADDING-LEFT: 0px; MARGIN: 1px 0px 0px; LETTER-SPACING: normal; TEXT-INDENT: 0px; -webkit-text-stroke-width: 0px\"><span style=\"font-size:16px;\">您好！欢迎光临全国品牌</span><span style=\"font-size:16px;\"><strong><span style=\"color:#000000;\">【生活家家居-南京站】</span></strong></span></p><p style=\"WHITE-SPACE: normal; WORD-SPACING: 0px; TEXT-TRANSFORM: none; COLOR: rgb(0,0,0); TEXT-ALIGN: left; FONT: 12px/21px arial, 宋体; PADDING-LEFT: 0px; MARGIN: 1px 0px 0px; LETTER-SPACING: normal; TEXT-INDENT: 0px; -webkit-text-stroke-width: 0px\"><span style=\"font-size:16px;\">1. 现在即可咨询<span><strong>【</strong></span><span><strong>12周年庆典促销优惠详情<span><strong>】</strong></span></strong></span></span></p><p style=\"WHITE-SPACE: normal; WORD-SPACING: 0px; TEXT-TRANSFORM: none; COLOR: rgb(0,0,0); TEXT-ALIGN: left; FONT: 12px/21px arial, 宋体; PADDING-LEFT: 0px; MARGIN: 1px 0px 0px; LETTER-SPACING: normal; TEXT-INDENT: 0px; -webkit-text-stroke-width: 0px\"><span style=\"font-size:16px;\">2. 现在即可咨询<span>【<strong>报价、材料、设计等装修问题</strong>】</span></span></p><p style=\"WHITE-SPACE: normal; WORD-SPACING: 0px; TEXT-TRANSFORM: none; COLOR: rgb(0,0,0); TEXT-ALIGN: left; FONT: 12px/21px arial, 宋体; PADDING-LEFT: 0px; MARGIN: 1px 0px 0px; LETTER-SPACING: normal; TEXT-INDENT: 0px; -webkit-text-stroke-width: 0px\"><span><span style=\"font-size:18px;color:#000000;\">3. 现在即可提前预约您喜欢的设计师</span></span></p><p style=\"WHITE-SPACE: normal; WORD-SPACING: 0px; TEXT-TRANSFORM: none; COLOR: rgb(0,0,0); TEXT-ALIGN: left; FONT: 12px/21px arial, 宋体; PADDING-LEFT: 0px; MARGIN: 1px 0px 0px; LETTER-SPACING: normal; TEXT-INDENT: 0px; -webkit-text-stroke-width: 0px\"><span style=\"FONT-SIZE: 16px\"><span><span style=\"color:#000000;BACKGROUND-COLOR: rgb(255,255,255)\">我是您的专属服务顾问</span><span style=\"color:#000000;\">：</span><strong>陈志远,<span style=\"color:#000000;\">电话</span>：</strong><span style=\"color:#000000;\"><u><strong><span style=\"color:#ff0000;\">18013318273</span></strong></u>，<strong>QQ</strong>：</span><strong><u><span style=\"color:#ff0000;\">644489042</span></u></strong></span></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115938";
	re2.prompt = "<div><span style=\"color: rgb(0, 0, 0);\"><span style=\"font-family: Microsoft YaHei;\"><span style=\"font-weight: bold;\"><span style=\"font-size:16px;\"><span style=\"color:#000000;\">欢迎进入</span>健康整装生活家装饰</span>—<span style=\"color:#000000;background-color: rgb(255, 255, 255);\">“</span><span style=\"font-size:18px;color:#ff0000;\"><span style=\"background-color: rgb(255, 255, 255);\"><span style=\"color:#000000;\">中国健康整装领导者”</span></span>官网--生活家石家庄站</span>，</span></span></span></div><div><span style=\"font-size:16px;\"></span><div><span><span style=\"font-size:16px;\"><span style=\"color:#000000;\"><strong>1.现在即可咨询<span style=\"color:#ff0000;\">【活动优惠】</span></strong></span></span></span></div><div><span style=\"color:#ff00;\"><span style=\"font-size:16px;\"><strong><span style=\"color:#000000;\">2.现在即可咨询</span><span style=\"color:#ff0000;\">【报价、材料、设计、工程等装修问题】</span></strong><br /><span style=\"color:#000000;\"><strong>3.现在即可提前预约您喜欢的设计师 </strong></span></span></span></div></div><div><span style=\"font-size:16px;\"><strong>我是您的专属服务顾问：张伟，可以直接给我来电</strong>：<span style=\"color:#ff00;\"><strong><span style=\"color:#ff0000;\">15633800617</span> </strong></span><span style=\"color:#ff00;\"><span style=\"color:#000000;\">QQ</span>:</span></span></div><div><div><span style=\"font-size:16px;color:#ff0000;\"><u>769025109</u></span></div></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115939";
	re2.prompt = "<span style=\"color:#ff0000;\"><!--StartFragment --></span><div><span style=\"color:#000000;\"></span><p><span style=\"font-size:18px;color:#33ff33;\"><strong></strong></span></p></div><!--StartFragment --><div><span style=\"color:#ff0000;\"><span style=\"color:#ff0080;\"><strong></strong></span></span></div><!--StartFragment --><div><span style=\"font-family:arial, 宋体;color:#000000;line-height: 19px; font-size: 14px; float: none; display: inline !important; background-color: rgb(241, 248, 249);\"></span><span style=\"font-family:arial, 宋体;line-height: 19px; font-size: 14px; background-color: rgb(241, 248, 249);\"></span><span style=\"color:#ff0000;\"><!--StartFragment --></span><div><span style=\"color:#000000;\"><strong></strong></span></div></div><p><span style=\"color:#ff0000;\"><strong></strong></span></p><p><strong></strong></p><p><span style=\"font-size:16px;color:#cc0000;background-color: rgb(204, 204, 204);\"><strong>欢迎进入健康“健康生活服务商”生活家装饰官方网站，我是客户经理朱云，生活家拎包装时代已经全面开启，真正做到拎包入住，省时省事省心省钱！如果您不方便打字，可以留下您的联系方式，我会在第一时间联系您的。</strong></span></p><p><strong><span style=\"font-size:16px;color:#cc0000;\">【立即咨询】15233640926（朱云）QQ：884072996</span></strong></p><p><strong><span style=\"font-size:13px;color:#339999;\">(如果您打字不方便的话，可以留下您的联系方式，我会尽快联系您的！）</span></strong>??</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115940";
	re2.prompt = "<!--StartFragment --><div><strong></strong></div><!--StartFragment --><div><span style=\"font-family:arial, 宋体;color:#000000;line-height: 19px; font-size: 14px; font-weight: normal; float: none; display: inline !important; background-color: rgb(241, 248, 249);\"></span><!--StartFragment --><div><span style=\"color: rgb(255, 0, 0);\"><span style=\"font-weight: bold;\"><span style=\"color:#ff0080;\"><span style=\"font-family:arial, 宋体;color:#000000;line-height: 19px; font-size: 14px; font-weight: normal; float: none; display: inline !important; background-color: rgb(241, 248, 249);\"></span></span></span></span><p><span style=\"color:#ff0000;\"><strong></strong></span></p><strong><span style=\"color:#ff0000;\"></span></strong></div><strong><span style=\"color:#ff0000;\"></span></strong></div><div style=\"top: 48px;\"></div><div style=\"top: 0px;\"><span style=\"color:#ff00;\"></span><span style=\"font-family:KaiTi_GB2312;font-size:16px;color:#000000;\"></span><p style=\"margin: 1px 0px 0px; text-align: left; text-transform: none; line-height: 19px; text-indent: 0px; letter-spacing: normal; padding-left: 0px; font-family: arial, 宋体; font-style: normal; font-variant: normal; font-weight: normal; word-spacing: 0px; white-space: normal; -webkit-text-stroke-width: 0px;\"></p><p><span style=\"color: rgb(204, 0, 0); font-size: 16px; background-color: rgb(204, 204, 204);\"><strong>欢迎进入健康“健康生活服务商”生活家装饰官方网站，我是客户经理李宁，生活家拎包装时代已经全面开启，真正做到拎包入住，省时省事省心省钱！如果您不方便打字，可以留下您的联系方式，我会在第一时间联系您的。</strong></span></p><p><strong><span style=\"color: rgb(204, 0, 0); font-size: 16px;\">【立即咨询】</span><span style=\"font-size: 16px;\"><span style=\"color:#0a4b22;\"><u>15731170119</u></span><span style=\"color:#cc0000;\">（李宁）QQ：3388729269</span></span></strong></p><p><strong><span style=\"color: rgb(51, 153, 153); font-size: 13px;\">(如果您打字不方便的话，可以留下您的联系方式，我会尽快联系您的！）</span></strong></p><br /><p><br /></p><span style=\"color:#ff00;\"></span><span style=\"color:#ff00;\"></span></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115941";
	re2.prompt = "<p><span style=\"font-size:18px;color:#33ff33;\"><strong><span style=\"font-family:KaiTi_GB2312;font-size:16px;color:#3366ff;\">欢迎进入健康&quot;健康生活服务商&quot;生活家装饰官方网站，请问您要咨询哪方面问题呢？</span></strong></span></p><span style=\"color:#ff00;\"><strong></strong></span><strong><span style=\"color:#ff00;\"></span></strong>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115943";
	re2.prompt = "<p><strong>欢迎进入健康“健康生活服务商”生活家装饰官方网站，我是客户经理小刘，生活家拎包装时代已经全面开启，真正做到拎包入住，省时省事省心省钱！如果您不方便打字，可以留下您的联系方式，我会在第一时间联系您的。<br />【立即咨询】17736901156（小刘）QQ：805999131<br />(如果您打字不方便的话，可以留下您的联系方式，我会尽快联系您的！）??<br /></strong></p><strong><span style=\"color:#ff00;\"></span></strong>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10116149";
	re2.prompt = "<p><span style=\"font-size:16px;\"><span style=\"font-family:SimSun;\"><span style=\"font-size:13px;color:#000000;\"><strong></strong></span></span></span></p><p><span style=\"font-size:13px;\"></span></p>您好！欢迎光临<strong><span style=\"color:#ff0000;\">CCTV央视合作</span></strong>品牌【<span style=\"color:#ff0000;\">生活家装饰集团-合肥站</span>】<br /><p>1.现在即可咨询【<span style=\"font-family:Microsoft YaHei;color:#ff0000;\"><strong><span style=\"font-size:16px;\">当前活动</span></strong></span>】详情</p><p>2.现在即可咨询【<span style=\"color: rgb(255, 0, 0);\">材料、报价、设计</span>】等装修问题</p><p>3.现在即可提前预约您喜欢的设计师</p><p>我是今天的值班经理：许欣。</p><p>手机/微信：<strong><span style=\"font-size:16px;color:#ff0000;\">18297996653</span><span style=\"font-size:16px;color:#ff0000;\"> QQ:347438715</span></strong></p><p></p><p><span style=\"font-size: 13px; color: rgb(255, 0, 0);\"><strong></strong></span></p><p><strong><span style=\"font-family:SimSun;font-size:16px;color:#000000;\"><span style=\"color:#ff0000;\"></span></span></strong></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10118476";
	re2.prompt = "<span style=\"color: rgb(51, 102, 255); font-family: KaiTi_GB2312; font-size: 16px;\">您好，您是旧房翻新还是新房装修呢？如果您不方便打字可以直接来电，我叫马佳兴，电话</span><span style=\"font-family: KaiTi_GB2312; font-size: 16px;\"><span style=\"color: rgb(255, 0, 0);\">17710178625</span></span><span style=\"color: rgb(51, 102, 255); font-family: KaiTi_GB2312; font-size: 16px;\">&nbsp; QQ：mjxooo</span>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10118477";
	re2.prompt = "<p><span style=\"font-size: 16px;\">您好，欢迎您<span style=\"font-size: 16px;\">咨询</span>生活家(北京)家居装饰有限公司 ！您只需提供小区名称、建筑面积、<span style=\"font-size: 16px;\">几室几厅、</span>装修风格、留下您的联系方式，（5分钟内即可得到装修报价）</span><br /><span style=\"font-size:16px;color:#6633ff;\">我是您的专属服务顾问樱桃，可以直接给我来电：<strong>13321172091</strong>（可添加微信）；QQ:931823975</span><br /></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10118478";
	re2.prompt = "留下您的【姓名+联系方式+小区名称】即可获取方案和报价!,欢迎您的咨询！咨询热线：15801132347（可加微信）陈刚<br />";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10118903";
	re2.prompt = "<p></p><p><u><span style=\"font-size:18px;color:#ff660;\"><strong><span style=\"color:#ff0000;\"></span></strong></span></u></p>&nbsp;您好！欢迎光临全国品牌【生活家家居-成都站】<br />1. 现在即可咨询<span style=\"color:#ff0000;\">【<strong>冲A2 年中大促销优惠详情</strong>】<br /></span>2. 现在即可咨询<span style=\"color:#ff0000;\">【<strong>报价、材料、设计等装修问题</strong>】<br /></span>3. 现在即可提前预约您喜欢的设计师<br />我是您的专属服务顾问：<strong><span style=\"color:#ff0000;\">王瑶</span></strong>，可以直接给我来电： <strong><span style=\"color:#ff00;\">15183308441</span></strong> ";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10121866";
	re2.prompt = "<p style=\"FONT-FAMILY: 宋体; COLOR: rgb(0,0,0); FONT-SIZE: 14px\"><span style=\"font-family:Microsoft YaHei;\"><span style=\"color:#ff00;\"><strong></strong></span></span></p><span style=\"font-weight: bold;\"><span style=\"color:#ff0000;\"><span style=\"font-size:16px;\">Hello！亲您好 欢迎参观【生活家家居装饰有限公司-北京站】<br />我是您的家装顾问：郝硕（花名：爱德华）<br />咨询方式：<span class=\"send_sms_from_msg callsoft_from_msg\" style=\"color: rgb(10, 75, 34); font-weight: bold; text-decoration: underline; cursor: pointer;\" data=\"15811360206\">15811360206</span>（可加微信））<span style=\"color:#ff0000;\"><strong><u></u></strong></span></span></span></span><p><br /></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10121867";
	re2.prompt = "争抢报名312活动前28席！报名即可享受新房水电包全免！老房水电包半价！增送金条！抢定精品设计师名额！报名截止时间3月12日！报名方式可以拨打客服电话：<br /><strong><u>13693180530（微信同步 马克），不方便打字可以直接给我打电话！</u></strong>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10121868";
	re2.prompt = "<p><strong></strong></p><p><span style=\"font-family:SimSun;\"><strong><span style=\"font-family:Arial;\"><span style=\"font-size:18px;\"></span></span></strong></span></p><span style=\"font-size:16px;\"><strong>您好，欢迎进入生活家（北京）家居装饰有限公司，我是您的专属客服 马克，如不方便可拨打<span class=\"send_sms_from_msg callsoft_from_msg\" style=\"color: rgb(10, 75, 34); text-decoration: underline; cursor: pointer;\" data=\"15010958815\">13693180530（可加微信）qq:121055574</span>为您装修提供咨询 。</strong></span><p><span style=\"font-family:SimSun;\"><strong><span style=\"font-family:Arial;\"><span style=\"font-size:18px;\"><br /></span></span></strong></span></p><div style=\"TOP: 0px\"><br /></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10122777";
	re2.prompt = "<h4><span style=\"font-size:13px;\"></span></h4><h4><strong>您<span style=\"font-family:宋体;\">好！欢迎光临全国品牌【生活家（北京）家居装饰有限公司</span><span style=\"font-family:宋体;\">】 &nbsp;</span><span style=\"font-family:黑体;\">我们的设计以客户为导向，根据不同业主的需求、喜好、文化背景等，打造适合于个人的专属定制方案。如果你也是爱家、懂生活的人，欢迎前来咨询预约，寻找属于自己的新家。速算报价：<span style=\"color:#ff0000;\">留下</span><span style=\"font-size:13px;color:#ff0000;\">【姓名</span></span><span style=\"font-size:13px;color:#ff0000;\">+联系方式+小区+风格需求】</span>即可。<span style=\"color:#ff0000;\">咨询电话：15010095305(微信同号）</span>QQ；774358724</strong></h4><span style=\"color: rgb(255, 0, 0);\"><span style=\"font-size:13px;\"></span></span>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10123832";
	re2.prompt = "<p><span style=\"font-size:18px;\"><span style=\"color:#000099;\"></span></span></p><strong><span style=\"font-size:18px;color:#00cccc;\">您好，您是旧房改造还是新房装修呢？如果您不方便打字可以直接来电，我叫王永，电话</span><span style=\"font-size:18px;\"><span style=\"color: rgb(255, 0, 0);\">18513580803</span>&nbsp;<span style=\"color:#00cccc;\">QQ：</span><span style=\"color: rgb(255, 0, 0);\">123830049</span></span></strong><p>更多案例可点击：http://blog.sina.com.cn/u/2118633193</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10123834";
	re2.prompt = "<div><span style=\"FONT-WEIGHT: bold\"><span style=\"font-size:18px;\"><span style=\"color:#000000;TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(238,238,238); TEXT-INDENT: 0px; DISPLAY: inline !important; FONT: 12px/14px tahoma; WHITE-SPACE: normal; FLOAT: none; LETTER-SPACING: normal; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\">您好！欢迎光临全国品牌【生活家家居-北京站】</span></span></span><span style=\"font-family:Tahoma;BACKGROUND-COLOR: #eeeeee\"></span><br style=\"TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(238,238,238); TEXT-INDENT: 0px; FONT: 12px/14px tahoma; WHITE-SPACE: normal; LETTER-SPACING: normal; COLOR: rgb(0,0,0); WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\" />&nbsp;<span style=\"FONT-WEIGHT: bold\"><span style=\"font-size:18px;\"><span style=\"color:#000000;TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(238,238,238); TEXT-INDENT: 0px; DISPLAY: inline !important; FONT: 12px/14px tahoma; WHITE-SPACE: normal; FLOAT: none; LETTER-SPACING: normal; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\">1.现在即可咨询【</span><span style=\"color:#ff0000;\"><span style=\"TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(238,238,238); TEXT-INDENT: 0px; FONT: 12px/14px tahoma; WHITE-SPACE: normal; LETTER-SPACING: normal; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\">报</span><span style=\"TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(238,238,238); TEXT-INDENT: 0px; FONT: 12px/14px tahoma; WHITE-SPACE: normal; LETTER-SPACING: normal; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\">价、材料、设计等装修</span><span style=\"TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(238,238,238); TEXT-INDENT: 0px; FONT: 12px/14px tahoma; WHITE-SPACE: normal; LETTER-SPACING: normal; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\">问题</span></span><span style=\"color:#000000;TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(238,238,238); TEXT-INDENT: 0px; DISPLAY: inline !important; FONT: 12px/14px tahoma; WHITE-SPACE: normal; FLOAT: none; LETTER-SPACING: normal; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\">】</span><br style=\"TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(238,238,238); TEXT-INDENT: 0px; FONT: 12px/14px tahoma; WHITE-SPACE: normal; LETTER-SPACING: normal; COLOR: rgb(0,0,0); WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\" /><span style=\"color:#000000;TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(238,238,238); TEXT-INDENT: 0px; DISPLAY: inline !important; FONT: 12px/14px tahoma; WHITE-SPACE: normal; FLOAT: none; LETTER-SPACING: normal; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\">2.现在即可</span></span><span style=\"FONT-SIZE: 18px\"><span style=\"color:#ff0000;TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: #ffffff; TEXT-INDENT: 0px; FONT: 12px/14px tahoma; WHITE-SPACE: normal; LETTER-SPACING: normal; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\">提前预约您喜欢的设计师<br /></span><span style=\"color:#000000;TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(238,238,238); TEXT-INDENT: 0px; DISPLAY: inline !important; FONT: 12px/14px tahoma; WHITE-SPACE: normal; FLOAT: none; LETTER-SPACING: normal; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\">我是您的</span><span style=\"color:#000000;\"><span style=\"TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(238,238,238); TEXT-INDENT: 0px; FONT: 12px/14px tahoma; WHITE-SPACE: normal; LETTER-SPACING: normal; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\">专</span><span style=\"TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(238,238,238); TEXT-INDENT: 0px; FONT: 12px/14px tahoma; WHITE-SPACE: normal; LETTER-SPACING: normal; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\">属</span><span style=\"TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(238,238,238); TEXT-INDENT: 0px; FONT: 12px/14px tahoma; WHITE-SPACE: normal; LETTER-SPACING: normal; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\">服</span><span style=\"TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(238,238,238); TEXT-INDENT: 0px; FONT: 12px/14px tahoma; WHITE-SPACE: normal; LETTER-SPACING: normal; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\">务</span><span style=\"TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(238,238,238); TEXT-INDENT: 0px; FONT: 12px/14px tahoma; WHITE-SPACE: normal; LETTER-SPACING: normal; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\">顾</span><span style=\"TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(238,238,238); TEXT-INDENT: 0px; FONT: 12px/14px tahoma; WHITE-SPACE: normal; LETTER-SPACING: normal; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\">问</span></span><span style=\"color:#000000;TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(238,238,238); TEXT-INDENT: 0px; DISPLAY: inline !important; FONT: 12px/14px tahoma; WHITE-SPACE: normal; FLOAT: none; LETTER-SPACING: normal; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\">：<strong><span style=\"color:#ff0000;\">小孙</span></strong>，可以直接给我来电：</span><span style=\"text-align: left; text-transform: none; text-indent: 0px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: 14px; font-family: tahoma; white-space: normal; float: none; letter-spacing: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; background-color: rgb(238, 238, 238);\"><span style=\"color:#ff0000;\">17710882702</span></span><span style=\"text-align: left; text-transform: none; text-indent: 0px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: 14px; font-family: tahoma; white-space: normal; float: none; letter-spacing: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; background-color: rgb(238, 238, 238);\"><strong><strong><span style=\"color:#000000;\">，</span></strong></strong><span style=\"color: rgb(0, 0, 0);\">或者加我</span><span style=\"color: rgb(0, 0, 0);\">QQ</span><strong><span style=\"color: rgb(0, 0, 0);\">：</span><span style=\"color:#003300;\">1062967850</span></strong></span></span></span></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10126170";
	re2.prompt = "<span style=\"font-family: Arial;\"><span style=\"font-size:13px;\"><span style=\"font-family:Microsoft YaHei;\"><span></span></span></span></span><p class=\"lmsg_color\">您好，您是要咨询装修么？欢迎电话沟通，索隆：18500378583,微信：397471653</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10127038";
	re2.prompt = "<span style=\"font-size:13px;\">您好，欢迎进入生活家家居官方网站，很高兴为您服务，健康整装6.0拎包入住，套内面积计算合理；全国连锁公司，集团统一进货，增项全免费，品牌材料不限量，损耗包干！</span>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10127827";
	re2.prompt = "<span style=\"font-size:18px;\"><strong><span style=\"color:#ffffff;background-color: rgb(0, 0, 0);\"></span></strong></span><strong></strong><p style=\"font-family: 宋体;\"></p><p></p><span style=\"font-size: 16px;\">您好，欢迎您咨询生活家(北京)家居装饰有限公司！您只需提供小区名称、建筑面积、几室几厅、装修风格、留下您的联系方式，（5分钟内即可得到装修报价）</span><br /><span style=\"font-size: 16px; color: rgb(102, 51, 255);\">我是您的专属服务顾问樱桃，可以直接给我来电：<strong>15801132347</strong>（可添加微信）；QQ:852934777</span><p class=\"lmsg_color\" style=\"margin: 1px 0px 0px; top: 0px; text-align: left; text-transform: none; line-height: 21px; text-indent: 0px; letter-spacing: normal; padding-left: 0px; font-family: arial, 宋体; font-style: normal; font-variant: normal; word-spacing: 0px; white-space: normal; font-stretch: normal; -webkit-text-stroke-width: 0px;\">&nbsp;</p><p class=\"lmsg_color\" style=\"margin: 1px 0px 0px; top: 0px; text-align: left; text-transform: none; line-height: 21px; text-indent: 0px; letter-spacing: normal; padding-left: 0px; font-family: arial, 宋体; font-style: normal; font-variant: normal; word-spacing: 0px; white-space: normal; font-stretch: normal; -webkit-text-stroke-width: 0px;\">&nbsp;</p><div style=\"top: 0px; text-align: left; color: rgb(0, 0, 0); text-transform: none; line-height: 14px; text-indent: 0px; letter-spacing: normal; font-family: tahoma; font-style: normal; font-variant: normal; font-weight: normal; word-spacing: 0px; white-space: normal; font-stretch: normal; -webkit-text-stroke-width: 0px;\"><br /></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10127828";
	re2.prompt = "<p></p><p><span style=\"font-family:'Microsoft YaHei';color:#ff00;LINE-HEIGHT: 21px; FONT-SIZE: 14px\"><span style=\"color:#000000;\"></span></span></p><strong><span style=\"font-weight: normal; font-stretch: normal; line-height: 14px; background-color: rgb(238, 238, 238);\"></span></strong><span style=\"font-size:16px;\"></span><span style=\"line-height: 14px; font-family: tahoma; background-color: rgb(238, 238, 238);\"></span><span style=\"font-family: tahoma; font-size: 13px;\"></span><span style=\"font-family: tahoma; line-height: 14.4px; background-color: rgb(241, 248, 249);\"></span><p><span style=\"font-weight: bold;\"></span></p><p style=\"font-weight: bold; margin: 1px 0px 0px; line-height: 21px; padding-left: 0px; font-family: arial, 宋体;\"><span style=\"font-size: 18px;\"></span></p><p style=\"margin: 1px 0px 0px; line-height: 21px; padding-left: 0px; font-family: arial, 宋体;\"><span style=\"font-size: 18px;\"></span></p><span style=\"color: rgb(51, 102, 255); font-family: KaiTi_GB2312; font-size: 16px;\">您好，您是旧房翻新还是新房装修呢？如果您不方便打字可以直接来电，我叫马佳兴，电话</span><span style=\"font-family: KaiTi_GB2312; font-size: 16px;\"><span style=\"color: rgb(255, 0, 0);\">17710178625</span></span><span style=\"color: rgb(51, 102, 255); font-family: KaiTi_GB2312; font-size: 16px;\">&nbsp; QQ：mjxooo</span><div><span style=\"line-height: 14px; font-family: tahoma; background-color: rgb(238, 238, 238);\"><br /></span></div><span style=\"font-family: tahoma; font-size: 18px; background-color: rgb(241, 248, 249);\"><span style=\"font-stretch: normal; font-size: 12px; line-height: 14px; background-color: rgb(238, 238, 238);\"><span style=\"font-weight: normal; color: rgb(255, 0, 0);\"><strong></strong></span></span></span><p><span style=\"font-family:'Microsoft YaHei';color:#ff00;LINE-HEIGHT: 21px; FONT-SIZE: 14px\"></span></p><span style=\"color:#ff0000;\"></span>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10127834";
	re2.prompt = "<div></div><div><div>&nbsp;欢迎光临全国装修品牌【生活家家居】-合肥站<br />1.场馆全面升级【拎包装、一键整体家装，让装修像买包包一样简单】<br />2.现在即可咨询【报价、材料、设计等装修问题】<br />3.现在即可提前预约您喜欢的设计师<br />我您的专属顾问：冯传莉可以直接<br />&nbsp;<strong><span style=\"color:#ff0000;\">电话咨询：15956936801<br />QQ：2055877809</span></strong><br /></div><strong><span style=\"color:#ff0000;\"></span></strong><br /></div><div><p><strong><span style=\"color:#ff0000;\"></span></strong></p></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10128229";
	re2.prompt = "<div><div><strong><span style=\"FONT-SIZE: 18px\"><span style=\"BACKGROUND-COLOR: rgb(255,255,255)\"><span style=\"BACKGROUND-COLOR: rgb(255,255,255)\"><span style=\"BACKGROUND-COLOR: rgb(255,255,255)\"><span style=\"BACKGROUND-COLOR: #ffffff\"><span style=\"font-size:18px;\"><span style=\"color:#000000;TEXT-ALIGN: left; TEXT-TRANSFORM: none; TEXT-INDENT: 0px; DISPLAY: inline !important; FONT: 12px/14px tahoma; WHITE-SPACE: normal; FLOAT: none; LETTER-SPACING: normal; WORD-SPACING: 0px; font-size-adjust: none; font-stretch: normal; -webkit-text-stroke-width: 0px\"></span></span></span></span></span></span></span></strong><p>您好！欢迎光临全国品牌【生活家家居-成都站】<br />1. 现在即可咨询【<span style=\"color:#ff6666;\"><strong>拎包装一键整体家装详细活动】<br /></strong></span>2. 现在即可咨询【<strong><span style=\"color:#ff0000;\">报价、材料、设计等装修问题</span></strong>】<br />3. 现在即可提前预约您喜欢的设计师<br />我是您的专属服务顾问：<strong><span style=\"font-size:24px;color:#ff0000;\">邓希</span></strong>，可以直接给我来电： <strong><span style=\"COLOR: #ff0000\"><span style=\"font-size:18px;color:#0a4b22;CURSOR: pointer; FONT-WEIGHT: bold; TEXT-DECORATION: underline\"><span style=\"color:#0a4b22;CURSOR: pointer; FONT-WEIGHT: bold; TEXT-DECORATION: underline\"><span style=\"font-size:24px;color:#ff0000;\">13908204448</span></span>，QQ:2063771259</span></span></strong></p></div></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10128657";
	re2.prompt = "<span style=\"color:#000000;TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(220,242,253); TEXT-INDENT: 0px; LETTER-SPACING: normal; DISPLAY: inline !important; FONT: 12px/18px Tahoma; WHITE-SPACE: normal; FLOAT: none; WORD-SPACING: 0px; font-size-adjust: none; font-stretch: normal; -webkit-text-stroke-width: 0px\"></span><div><span style=\"font-size:18px;color:#ff0000;\"><strong>您好，高品质“拎包装”领导者——生活家家居（昆明站）一站式的服务，设计，人工，辅料，损耗，主材，衣柜，家具，售后维修等，</strong>我是您的专属客户经理李雪琴<strong>（</strong><span style=\"font-size:16px;color:#000000;\">电话：15808759867 QQ：3361357957</span><strong>）。{53b#35#}</strong></span><span style=\"font-size:16px;color:#ff0000;BACKGROUND-COLOR: rgb(255,255,255)\"><strong>??</strong></span><span style=\"color:blue;\"><span style=\"color:fuchsia;\"><u><strong>如果您不想打字可以留下您的联系方式，我们会立即给您回电！<br /><br /></strong></u></span></span></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10128658";
	re2.prompt = "<p><span style=\"font-family: SimSun; font-size: 16px;\">欢迎访问<span style=\"color:#ff0000;\">【生活家家居】</span>昆明站，全国25城连锁，大品牌值得信赖！按套内净面积计价，不再为公摊买单！一站式健康整装，省心又放心！</span></p><p><span style=\"font-size: 13px;\"><span style=\"font-family: SimSun;\"><span style=\"font-size: 16px;\">我是你的专属客户经理<span style=\"color:#ff0000;\">小朱</span>，如果我没有及时回复，请留下您的电话或拨打<span style=\"color:#ff0000;\">15288285182</span>，小朱将竭诚为你服务！</span></span><span style=\"font-family:SimSun;color:#000000;\">{53b#35#}</span></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10128659";
	re2.prompt = "<div><span style=\"FONT-SIZE: 12px; FONT-VARIANT: normal; WHITE-SPACE: normal; WORD-SPACING: 0px; TEXT-TRANSFORM: none; FLOAT: none; FONT-STYLE: normal; DISPLAY: inline !important; LETTER-SPACING: normal; BACKGROUND-COLOR: rgb(220,242,253); TEXT-INDENT: 0px; -webkit-text-stroke-width: 0px\"><span style=\"FONT-SIZE: 12px; FONT-VARIANT: normal; WHITE-SPACE: normal; WORD-SPACING: 0px; TEXT-TRANSFORM: none; FLOAT: none; FONT-STYLE: normal; TEXT-ALIGN: left; DISPLAY: inline !important; LETTER-SPACING: normal; BACKGROUND-COLOR: rgb(238,238,238); TEXT-INDENT: 0px; -webkit-text-stroke-width: 0px\"><strong><span style=\"font-family:Arial;color:#000000;FONT-SIZE: 12px; FONT-VARIANT: normal; WHITE-SPACE: normal; WORD-SPACING: 0px; TEXT-TRANSFORM: none; FONT-STYLE: normal; TEXT-ALIGN: left; LETTER-SPACING: normal; LINE-HEIGHT: 14px; BACKGROUND-COLOR: rgb(238,238,238); TEXT-INDENT: 0px; -webkit-text-stroke-width: 0px\"></span></strong></span></span><div><p class=\"recv-msg-content\" style=\"FONT-SIZE: 12px; FONT-VARIANT: normal; WHITE-SPACE: normal; WORD-SPACING: 0px; TEXT-TRANSFORM: none; FONT-STYLE: normal; TEXT-ALIGN: left; PADDING-LEFT: 10px; MARGIN: 1px 0px 0px; LETTER-SPACING: normal; BACKGROUND-COLOR: rgb(255,255,255); TEXT-INDENT: 0px; -webkit-text-stroke-width: 0px\"><span style=\"BACKGROUND-COLOR: rgb(255,255,255)\"><span style=\"FONT-SIZE: 12px; FONT-VARIANT: normal; WHITE-SPACE: normal; WORD-SPACING: 0px; TEXT-TRANSFORM: none; FLOAT: none; FONT-STYLE: normal; DISPLAY: inline !important; LETTER-SPACING: normal; BACKGROUND-COLOR: rgb(220,242,253); TEXT-INDENT: 0px; -webkit-text-stroke-width: 0px\"><span style=\"FONT-SIZE: 12px; FONT-VARIANT: normal; WHITE-SPACE: normal; WORD-SPACING: 0px; TEXT-TRANSFORM: none; FLOAT: none; FONT-STYLE: normal; TEXT-ALIGN: left; DISPLAY: inline !important; LETTER-SPACING: normal; BACKGROUND-COLOR: rgb(238,238,238); TEXT-INDENT: 0px; -webkit-text-stroke-width: 0px\"><strong><span style=\"font-family:Arial;color:#000000;FONT-SIZE: 12px; FONT-VARIANT: normal; WHITE-SPACE: normal; WORD-SPACING: 0px; TEXT-TRANSFORM: none; FONT-STYLE: normal; TEXT-ALIGN: left; LETTER-SPACING: normal; LINE-HEIGHT: 14px; BACKGROUND-COLOR: rgb(238,238,238); TEXT-INDENT: 0px; -webkit-text-stroke-width: 0px\">欢迎</span><span style=\"font-family:Arial;color:#000000;FONT-SIZE: 12px; FONT-VARIANT: normal; WHITE-SPACE: normal; WORD-SPACING: 0px; TEXT-TRANSFORM: none; FONT-STYLE: normal; TEXT-ALIGN: left; LETTER-SPACING: normal; LINE-HEIGHT: 14px; TEXT-INDENT: 0px; -webkit-text-stroke-width: 0px\">进入昆明生活家家居</span></strong><span style=\"FONT-SIZE: 12px; FONT-VARIANT: normal; WHITE-SPACE: normal; WORD-SPACING: 0px; TEXT-TRANSFORM: none; FONT-STYLE: normal; TEXT-ALIGN: left; LETTER-SPACING: normal; TEXT-INDENT: 0px; -webkit-text-stroke-width: 0px\"><span style=\"font-family:Arial;color:#666666;FONT-WEIGHT: normal\"><span style=\"LINE-HEIGHT: 14px\">—</span></span><span style=\"color:#33cc00;\"><strong><span style=\"font-family:Arial;\"><span style=\"LINE-HEIGHT: 14px\">&quot;</span></span><span style=\"font-family:tahoma;\"><span style=\"LINE-HEIGHT: 20px\">健康生活服务商</span></span></strong></span></span><span style=\"FONT-FAMILY: tahoma; FONT-WEIGHT: normal; LINE-HEIGHT: 20px\"><span style=\"color:#000000;\"><strong>，</strong></span><span style=\"color:#ff0000;\"><strong><span style=\"color:#000000;\">生活家“无实力不整装，定义整装新标准，真正实现</span><span style=\"color:#000000;\"><span style=\"color:#000000;\">一站式拎包入住</span>！</span><span style=\"color:#ff0000;\">爱在</span><span style=\"color:#ff0000;\">5.20为爱筑家</span><span style=\"color:#ff0000;\">带引你为他圆一个家的梦想</span>。</strong></span></span></span></span><strong><span style=\"FONT-SIZE: 12px; FONT-VARIANT: normal; WHITE-SPACE: normal; WORD-SPACING: 0px; TEXT-TRANSFORM: none; FLOAT: none; FONT-STYLE: normal; DISPLAY: inline !important; LETTER-SPACING: normal; TEXT-INDENT: 0px; -webkit-text-stroke-width: 0px\"><span style=\"FONT-SIZE: 12px; FONT-VARIANT: normal; WHITE-SPACE: normal; WORD-SPACING: 0px; TEXT-TRANSFORM: none; FLOAT: none; FONT-STYLE: normal; TEXT-ALIGN: left; DISPLAY: inline !important; LETTER-SPACING: normal; TEXT-INDENT: 0px; -webkit-text-stroke-width: 0px\"><span style=\"font-family:tahoma;LINE-HEIGHT: 20px\">报名热线</span></span></span><span style=\"color:red;\">手机/微信：15877969676<span style=\"color:#000000;\">&nbsp;我是你的专属客服杨洋，</span>&nbsp;</span><span style=\"color:red;\">QQ：3405308091</span><span style=\"color:#000000;\">很高兴为你服务。</span></strong></span></p></div></div><div style=\"TOP: 14px\">﻿﻿</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10129655";
	re2.prompt = "<p style=\"TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(241,248,249); TEXT-INDENT: 0px; MARGIN: 1px 0px 0px; PADDING-LEFT: 0px; FONT: 12px/21px arial, 宋体; WHITE-SPACE: normal; LETTER-SPACING: normal; WORD-SPACING: 0px; font-stretch: normal; -webkit-text-stroke-width: 0px\"><span style=\"FONT-SIZE: 16px\"><span style=\"color:#000000;\">您好！欢迎光临全国品牌</span><span style=\"color:#000000;BACKGROUND-COLOR: rgb(255,255,255)\"><span style=\"color:#ff0000;\">【生活家家居-长沙站】</span><br /></span>1. 现在即可咨询<strong><span style=\"color:#ff0000;\">【当前优惠详情</span></strong><span style=\"font-size:16px;color:#000000;\"><strong><span style=\"color:#ff0000;\">】<br /></span></strong>2. 现在即可咨询</span><span style=\"font-size:16px;color:#000000;\"><span style=\"color:#0;\"><span style=\"color:#ff0000;\">【<strong>报价、材料、设计等装修问题</strong>】</span><br /></span>3. 现在即可提前<span style=\"color:#ff0000;\">【</span><strong><span style=\"color:#ff0000;\">预约您喜欢的设计师】<br /></span></strong></span><br /><strong><span style=\"color:#000000;\">我是您的专属服务顾问：</span><span style=\"color:#ff0000;\">小丹</span>，可以直接给我来电：<br /><span style=\"color:#ff0000;\"><u>13054188584或者加我QQ2872052595</u></span></strong></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10129656";
	re2.prompt = "<div><strong>品质生活服务商——长沙生活家家居，</strong><u><span style=\"font-size:16px;\"><strong><span style=\"color: rgb(0, 0, 0);\">欢迎您的访问！提供：设计+主材+辅材+人工+施工+损耗+售后一站式服务</span><span style=\"color: rgb(255, 102, 102);\">,</span><span style=\"color: rgb(0, 0, 0);\">套内净使用面积计费，大品牌主材，全德系辅材</span><span style=\"color: rgb(0, 0, 0);\">，给您健康品质家</span>。</strong></span></u>详情请咨询<span style=\"BACKGROUND-COLOR: #ffffff\"><span style=\"font-size:16px;color:#cc0000;\"><strong>【生活家向颖】 <span style=\"background-color: rgb(204, 204, 204);\">tel：18086012343，qq：649491781.</span></strong></span></span></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10130936";
	re2.prompt = "<h4><p><span style=\"font-family:'Microsoft YaHei';color:#ff00;LINE-HEIGHT: 21px; FONT-SIZE: 14px\"><span style=\"color:#000000;\"></span></span></p><div>&nbsp;你好！欢迎光临全国品牌【生活家家居-北京站】<br />1、现在即可咨询【当期促销优惠详细】<br />2、现在即可咨询【报价、材料、设计等装修问题】<br />3、现在即可提前预约您喜欢的设计师；<br />4、生活家首推“德标工程”和“健康环保协议书”<br />为您家装保驾护航！<br />我是您的专属服务顾问赵经理，可以直接给我来电：&nbsp;<span style=\"color: rgb(255, 0, 0);\"><span style=\"font-size:13px;\">15801038452（可添加微信）&nbsp;</span></span></div><p></p><p><span style=\"font-family: 'Microsoft YaHei'; line-height: 21px;\"><span style=\"color: rgb(255, 0, 0);\"><span style=\"font-size:13px;\">QQ:117088708</span></span></span></p></h4>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10130937";
	re2.prompt = "<p></p><p></p><p><strong><span style=\"color:#3366ff;\"></span></strong></p><p>你好！欢迎光临全国品牌【生活家家居-北京站】<br />1、现在即可咨询【当期促销优惠详细】<br />2、现在即可咨询【报价、材料、设计等装修问题】<br />3、现在即可提前预约您喜欢的设计师；<br />4、生活家首推“德标工程”和“健康环保协议书”<br />为您家装保驾护航！<br />我是您的专属服务顾问-袁世林，可以直接给我来电：13716435009（可添加微信）；<span style=\"background-color: rgb(51, 204, 0);\">QQ:497058904</span></p><p><span style=\"font-family:'Microsoft YaHei';color:#ff00;line-height: 21px; font-size: 14px;\"></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10131845";
	re2.prompt = "<span style=\"font-size:16px;color:#000000;\"></span><div><span style=\"font-family: Microsoft YaHei;\"><strong></strong></span></div>欢迎光临中央电视台合作品牌生活家装饰<br />好设计，好家装，就选生活家&nbsp;<br />您好，我是您的网络专属客户经理【张菊菲】，可以直接给我来电：15982044153（微信同号）QQ：1287497617 很高兴为您服务！<div><span style=\"font-size: 16px;\"><br /></span></div> ";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10133077";
	re2.prompt = "<div class=\"kefu\" sizset=\"0\" sizcache=\"41\"><div class=\"chat_word\"><span style=\"font-size:16px;\"></span><div><span style=\"font-weight: bold;\"><span style=\"font-size:16px;color:#000000;\">您好！欢迎光临全国品牌【<span style=\"font-size:18px;color:#cc0000;\"><span style=\"font-family:SimHei;\">生活家家居-成都站</span><span style=\"font-size:16px;color:#000000;\">】</span></span></span></span><br /><span style=\"font-family:SimHei;font-size:16px;\">1</span>.&nbsp;<span style=\"font-weight: bold;\"><span style=\"font-size: 16px;\"><span style=\"font-family: SimHei;\">生活家【<span style=\"font-size:18px;color:#cc0000;\">拎包装-高确定性，为您提供完整的家装方案<span style=\"font-size:16px;color:#000000;\">】</span></span></span></span></span><br /><span style=\"font-family:Microsoft Yahei;font-size:16px;\">2</span>.&nbsp;<strong>现在即可咨询</strong><span style=\"color: rgb(255, 0, 0);\"><span style=\"font-size: 16px;\">【<strong>春季健康家装节—欧洲寻“材”之旅之德标样板间征集</strong></span><span style=\"font-size: 16px;\">】</span></span><strong>活动详情</strong><br /><span style=\"font-family:Microsoft Yahei;font-size:16px;\">3</span>.<strong><span style=\"font-size:16px;\">现在即可提前预约您喜欢的设计师</span></strong>&nbsp;</div><div><br /></div><div>我是您的专属服务顾问<span style=\"font-size:18px;\"><span style=\"font-family:SimHei;color:#cc0000;\">：</span><span style=\"color: rgb(204, 0, 0);\"><span style=\"font-family:SimHei;\">严文婷</span></span><span style=\"font-family:SimHei;color:#cc0000;\">，</span></span>可以直接给我来电：</div><div><span style=\"font-size:18px;\"><strong><u><span style=\"color:#3366ff;\">15982184561</span>或者<span style=\"color:#3366ff;\">QQ:3110423952</span></u></strong></span></div></div></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10133154";
	re2.prompt = "<p><span style=\"COLOR: #33ff33; FONT-SIZE: 18px\"><span style=\"font-family:KaiTi_GB2312;font-size:16px;color:#3366ff;\"><span style=\"font-family:Arial;color:#000000;\"><strong><span style=\"color:#ff0000;\">拎包装！！！！省心、省力、更省钱！！！！！</span></strong><span style=\"color:#ff9966;\"> </span></span><strong><span style=\"color:#3366ff;\">欢迎进入健康&quot;健康生活服务商&quot;生活家装饰官方网站，请问您要咨询哪方面问题呢？</span></strong></span></span></p><strong></strong>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10133155";
	re2.prompt = "<p><span style=\"font-size:24px;color:#33ff33;\"><strong><br /></strong></span></p><p><span style=\"font-size:18px;color:#33ff33;\"><strong><span style=\"font-family:KaiTi_GB2312;font-size:16px;color:#000000;\">欢迎进入健康&quot;健康生活服务商&quot;生活家装饰官方网站，我是客户经理<span style=\"color:#ff0000;\">文月</span>，生活家拎包装时代已经全面开启，真正做到拎包入住，省时省事省心省钱！如果您不方便打字，可以留下您的联系方式，我会在第一时间联系您的。</span></strong></span></p><p><span style=\"font-family:KaiTi_GB2312;font-size:16px;color:#ff0000;\"><strong>[立即咨询]&nbsp; 18730191901（文月）qq：2518474344</strong></span></p><p><strong><span style=\"font-family:KaiTi_GB2312;font-size:16px;color:#006600;\"><br /></span></strong></p><p><br /></p><span style=\"color:#ff00;\"><strong></strong></span><strong><span style=\"color:#ff00;\"></span></strong><br /><div style=\"top: 134px;\">??</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10135878";
	re2.prompt = "<strong><span style=\"font-family:Microsoft YaHei;\"></span></strong><div><span style=\"font-size:13px;\">您好！欢迎光临全国品牌【生活家家居-成都站】<br /></span></div><div><span style=\"font-size:13px;\"><span style=\"font-family: SimHei;\">1.</span>现在即可咨询【<strong>第二季秋季家装节</strong>】活动详情<span style=\"color: rgb(255, 0, 0);\"></span></span></div><p><span style=\"font-size:13px;\">2现在即可咨询【<strong>报价、材料、设计、活动内容等装修问题</strong>】</span></p><p><span style=\"font-size:13px;\">3【<strong>拎包装S震撼上线-30分钟家装实景效果呈现</strong>】欢迎咨询</span></p><span style=\"font-family: SimHei;\"><span style=\"font-size:13px;\">4.现在即可提前预约您喜欢的设计师</span></span><div><span style=\"font-size:18px;\"></span><br />我是您的专属服务顾问：<span style=\"font-size:24px;color:#ff00;\"><strong>曾炯</strong></span>，可以直接给我来电：</div><div><span style=\"font-size:24px;color:#ff0000;\">18584050815 QQ：562507416</span></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10135879";
	re2.prompt = "<span style=\"color:#ff0000;\"></span><div><span style=\"COLOR: #000000\"><span style=\"FONT-FAMILY: Microsoft YaHei\"><span style=\"FONT-WEIGHT: bold\"><span style=\"font-size:16px;\"><span style=\"color:#000000;\"></span></span></span></span></span></div><p>欢迎光临CCTV中央电视台合作品牌生活家装饰</p><p>好设计，好家装，就选生活家&nbsp;</p>您好，我是您的网络专属客户经理【魏婷】，可以直接给我来电：15182969932（微信同号）QQ：976324984 很高兴为您服务！<br /><div><div><span style=\"font-size: 16px; color: rgb(255, 0, 0);\"><u></u></span></div></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10136735";
	re2.prompt = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10136736";
	re2.prompt = "<p></p><p><br /></p><div></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10136738";
	re2.prompt = "<p></p><p>您好，欢迎进入生活家家居健康整体家装，很高兴为您服务，</p><p>您可以向我们咨询关于装修的一切疑问，同时欢迎网络预约设计师，享受更多优惠。&nbsp;</p><p>友情提示：如果您不方便打字，可以留您联系方式马上给您回电话！</p><p></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10136739";
	re2.prompt = "<span style=\"font-size:16px;\">亲，您好，我是您的私人家装顾问-依娜很高兴为您服务 （微信：<span style=\"background-color: rgb(51, 204, 0);\"><strong>18722682781</strong></span>咨询：QQ：<span style=\"background-color: rgb(0, 153, 0);\"><strong>1738631881</strong></span>）（您还可以编辑短信【小区名+套内面积+装修风格】发送到<strong>18722682781</strong>三分钟即可得到报价）</span>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10136740";
	re2.prompt = "<p><span style=\"font-size:13px;\"></span><span style=\"font-size:13px;\"></span></p><p>???您好，欢迎进入生活家家居装饰设计全国官方网站-网络客户经理丹丹</p><p>（电话&amp;微信：<strong><span style=\"color:#ff00;\">15922296525</span></strong>，QQ号：<span style=\"color:#ff00;\"><strong>2966074922</strong></span>），很高兴为您服务！<br />1.【<span style=\"color:#ff00;\"><strong>楼盘+电话+面积+新房旧房</strong></span>】立即免费获取报价以及方案，<br /></p><p>2.您如果不方便打字可以留您联系方式，稍后马上给您回电话！</p><p>3.您也可以扫描二维码添加微信随时随地咨询装修(<strong><span style=\"color:#ff00;\">设计，施工，主材，家具，配饰，灯具</span></strong>）????</p><p>??</p><p></p><p style=\"TEXT-ALIGN: center\"><span style=\"font-size:13px;\"><img alt=\"\" src=\"http://www17.53kf.com/upload/xheditor/9006234/cyy/201605181434531931.jpg\" /></span></p><br />";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10137012";
	re2.prompt = "<div style=\"TOP: 0px\"><p style=\"TOP: 0px\"><span style=\"BACKGROUND-COLOR: rgb(51,255,51)\"><br /></span><span style=\"background-color: rgb(51, 255, 51);\">您好，欢迎进入生活家家居集团网站，很高兴为您服务，您是想要咨询了解装修方面的问题吗？如果不方便打字请拨打咨询电话：13082631111</span></p></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10137013";
	re2.prompt = "<p>中国健康整装领导者——<strong><span style=\"color:#33cc00;\">【济宁生活家家居】</span></strong>欢迎您的咨询！<strong><span style=\"color:#ff0000;\">健康整装5.0</span></strong> 真正<strong><span style=\"color:#ff0000;\">一房一口价</span></strong>！首推<strong><span style=\"color:#ff0000;\">套内净面积计价模式</span></strong>，7000平实体家居体验馆，真正做到让您省钱省心！ &nbsp; <span style=\"color:#3333ff;\">&nbsp;（我是您的专属VIP客户经理，请问有什么可以你帮您的。咨询电话:15163743373&nbsp;&nbsp;QQ:654695350）</span>如果您不方便打字，留下电话，我们随后立即联系您！ </p><div style=\"top: 0px;\">??</div>";
            re2.carousel = "1";
        re2.carousel_interval = "15";
    	re2.carousel_num = "1";
        re2.carousel_prompt1 = "<div><br />您好，欢迎进入生活家装饰官方网站，我是您的家装顾问马新森，很高兴为您服务！如果您不方便打字可以拨打咨询电话：17865215124(微信)</div>";
        re2.carousel_prompt2 = "";
        re2.carousel_prompt3 = "";
        re2.carousel_prompt4 = "";
        re2.carousel_prompt5 = "<div><div>您好，欢迎进入生活家装饰官方网站，我是您的家装顾问马新森，很高兴为您服务！如果您不方便打字可以拨打咨询电话：17865215124(微信)<br /></div></div><div style=\"top: 0px;\">﻿﻿</div>";
        re2.carousel_prompt6 = "";
        re2.carousel_prompt7 = "";
        re2.carousel_prompt8 = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10137015";
	re2.prompt = "<!--StartFragment --><div>您好，欢迎进入生活家装饰官方网站，我是您的家装顾问 徐鑫 ，很高兴为您服务！如果您不方便打字可以拨打咨询电话：15106772547 QQ：1445196264。或者留下您的联系方式，我会及时给你回电。</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10137060";
	re2.prompt = "<span style=\"font-size:18px;\"><span style=\"color:#000099;\">您好，欢迎浏览生活家官网，有什么能帮助您呢？</span></span>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10137381";
	re2.prompt = "<p><span style=\"font-size: 16px;\">欢迎进入生活家家居昆明分公司网站，<span style=\"color:#ff0000;\"><strong>爱在520，为爱筑家，生活家为你圆一个家的梦想</strong></span></span><span style=\"font-size: 16px;\"><strong>，</strong>全场家具、电器五折抢购中</span><span style=\"font-size: 16px;\">（更多优惠</span><span style=\"font-size:16px;\">咨询：</span><span style=\"font-size:18px;color:#ff0000;\"><strong>13330538763</strong></span><strong><span style=\"font-size: 18px;\">沈关爱，</span><span style=\"font-size: 16px;\"><span style=\"font-size: 18px;\">QQ：1459658532</span>）</span></strong><span style=\"font-size:16px;\">很高兴为您服务</span></p><p><span style=\"font-size:16px;\">如果不方便打字，可以留下您的联系方式，我这边会尽快给您来电</span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10137382";
	re2.prompt = "<p><span style=\"font-size:16px;\"><strong><span style=\"color:#009900;\">亲：生活家已进入拎包装时代啦！ 一站式主材，辅料，人工，厨电，家具，软装，设计，售后全了解。 欢迎您的来电和预约！</span><br /></strong></span></p><p><span style=\"font-size:16px;\"><strong><span style=\"color:#ff0000;\">杨丰-15025125065，</span><span style=\"color:#009900;\">添加微信好友，享受更多个性化服务！</span></strong></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10137403";
	re2.prompt = "<strong><strong></strong></strong><p></p><span style=\"font-family:arial, 宋体;line-height: 19px; font-size: 14px; background-color: rgb(241, 248, 249);\"></span><span style=\"font-family: arial, 宋体; font-size: 14px; line-height: 19px; background-color: rgb(241, 248, 249);\"></span><p><span style=\"color:#ff0000;\"><strong></strong></span></p><div><strong></strong><span style=\"color: rgb(255, 0, 0);\"><strong></strong></span><strong></strong><p><span style=\"font-size:24px;color:#33ff33;\"><strong>省钱装修，双11“嗨款”为您省到底！！！</strong></span></p><p><span style=\"font-size:18px;color:#33ff33;\"><strong><span style=\"font-family:KaiTi_GB2312;font-size:16px;color:#3366ff;\">欢迎进入健康&quot;健康生活服务商&quot;生活家装饰官方网站，请问您要咨询哪方面问题呢？</span></strong></span></p><span style=\"color: rgb(255, 0, 0);\"><strong></strong></span><strong><span style=\"color: rgb(255, 0, 0);\"></span></strong><span style=\"color:#ff0000;\"><strong></strong></span></div><p></p><strong><span style=\"color: rgb(255, 0, 0);\"></span></strong><span style=\"color:#ff00;\"><span style=\"font-family:arial, 宋体;line-height: 19px; font-size: 14px; background-color: rgb(241, 248, 249);\"><span style=\"font-size:24px;color:#ff0000;background-color: rgb(255, 255, 255);\"><strong></strong></span></span><strong><span style=\"font-size:18px;\"></span></strong></span><p></p><p></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10138350";
	re2.prompt = "<div sizcache=\"96004\" sizset=\"0\"><span style=\"color:#ff0000;\"><span style=\"font-size:13px;\"><span style=\"color:#000000;\"></span></span></span><div><span style=\"font-size:13px;\"><span style=\"color: rgb(0, 0, 0);\">您好，欢迎访问“健康生活服务商”生活家装饰[贵阳站]，我是您的专属客户经理</span><span style=\"color: rgb(255, 0, 0);\">李娟</span><span style=\"color: rgb(0, 0, 0);\">很高兴为您服务！如果您不方便打字可以直接电话咨询小李。</span></span></div><div><span style=\"font-size:13px;\"><span style=\"COLOR: rgb(255,0,0)\"></span><span style=\"color:#ff00;\">咨询电话：18785088991</span></span></div><div><span style=\"color:#ff00;\"><span style=\"font-size:13px;\">QQ：542401385</span></span></div><div><span style=\"font-size:13px;\">&nbsp;</span></div></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10141303";
	re2.prompt = "<p><span style=\"font-style: normal; font-variant: normal; font-size: 12px; line-height: 14px; font-family: tahoma; text-align: left; text-transform: none; text-indent: 0px; letter-spacing: normal; word-spacing: 0px; white-space: normal; font-stretch: normal; -webkit-text-stroke-width: 0px; background-color: rgb(238, 238, 238);\"><span style=\"text-align: left; text-transform: none; line-height: 14px; text-indent: 0px; letter-spacing: normal; font-family: tahoma; font-size: 12px; font-style: normal; font-variant: normal; word-spacing: 0px; white-space: normal; -webkit-text-stroke-width: 0px; background-color: rgb(238, 238, 238);\"><span style=\"color: rgb(0, 0, 0); font-size: 18px;\"><span style=\"font-weight: normal; color: rgb(0, 0, 0); font-style: normal; font-variant: normal; font-size: 12px; line-height: 14px; font-family: tahoma; text-align: left; text-transform: none; text-indent: 0px; letter-spacing: normal; word-spacing: 0px; float: none; white-space: normal; font-stretch: normal; -webkit-text-stroke-width: 0px; display: inline !important; background-color: rgb(238, 238, 238);\">您好！我是您的</span><span style=\"font-weight: normal; color: rgb(0, 0, 0);\"><span style=\"font: 12px/14px tahoma; text-align: left; text-transform: none; text-indent: 0px; letter-spacing: normal; word-spacing: 0px; white-space: normal; font-size-adjust: none; font-stretch: normal; background-color: rgb(238, 238, 238); -webkit-text-stroke-width: 0px;\">专</span><span style=\"font: 12px/14px tahoma; text-align: left; text-transform: none; text-indent: 0px; letter-spacing: normal; word-spacing: 0px; white-space: normal; font-size-adjust: none; font-stretch: normal; background-color: rgb(238, 238, 238); -webkit-text-stroke-width: 0px;\">属</span><span style=\"font: 12px/14px tahoma; text-align: left; text-transform: none; text-indent: 0px; letter-spacing: normal; word-spacing: 0px; white-space: normal; font-size-adjust: none; font-stretch: normal; background-color: rgb(238, 238, 238); -webkit-text-stroke-width: 0px;\">服</span><span style=\"font: 12px/14px tahoma; text-align: left; text-transform: none; text-indent: 0px; letter-spacing: normal; word-spacing: 0px; white-space: normal; font-size-adjust: none; font-stretch: normal; background-color: rgb(238, 238, 238); -webkit-text-stroke-width: 0px;\">务</span><span style=\"font: 12px/14px tahoma; text-align: left; text-transform: none; text-indent: 0px; letter-spacing: normal; word-spacing: 0px; white-space: normal; font-size-adjust: none; font-stretch: normal; background-color: rgb(238, 238, 238); -webkit-text-stroke-width: 0px;\">顾</span><span style=\"font: 12px/14px tahoma; text-align: left; text-transform: none; text-indent: 0px; letter-spacing: normal; word-spacing: 0px; white-space: normal; font-size-adjust: none; font-stretch: normal; background-color: rgb(238, 238, 238); -webkit-text-stroke-width: 0px;\">问</span></span><span style=\"color: rgb(0, 0, 0); font-style: normal; font-variant: normal; font-size: 12px; line-height: 14px; font-family: tahoma; text-align: left; text-transform: none; text-indent: 0px; letter-spacing: normal; word-spacing: 0px; float: none; white-space: normal; font-stretch: normal; -webkit-text-stroke-width: 0px; display: inline !important; background-color: rgb(238, 238, 238);\">：<span style=\"font-weight: normal; color: rgb(255, 0, 0);\">宋雪</span>【15902921657】<strong>，微信号：【15902921657】</strong><span style=\"font-weight: normal; color: rgb(0, 0, 0);\">或者加我</span><span style=\"font-weight: normal; color: rgb(0, 0, 0);\">QQ</span><strong>：【3076446521】，</strong>您也可以在此对话框留下您的联系方式，我会马上和您取得联系。<strong>祝您生活愉快！</strong></span></span></span></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10141305";
	re2.prompt = "<div><strong><span style=\"font-family:FangSong_GB2312;\"><span style=\"font-size: 18px; color: rgb(0, 0, 0);\">您好，欢迎进入生活家装饰长沙分公司，</span><span style=\"font-size:16px;\">我是您的专属客户经理小宋，欢迎来电咨询哦！</span></span></strong></div><div><strong>Tel:<span style=\"background-color: rgb(255, 153, 255);\">18670339892</span></strong></div><div><span style=\"font-family: FangSong_GB2312; font-size: 18px;\"><strong>qq:<span style=\"color:#ff6666;\">508669851</span><br /><br /></strong></span></div><p><strong><span style=\"font-family:SimHei;color:#cc0000;\">&nbsp;</span></strong></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10141306";
	re2.prompt = "<p><span style=\"font-weight: bold;\"><span style=\"color: rgb(255, 102, 102);\"><span style=\"color: rgb(0, 0, 0);\"><span style=\"background-color: rgb(51, 255, 51);\"><span style=\"background-color: rgb(255, 255, 255);\">您好，欢迎进入央视合作品牌生活家装饰长沙分公司官方网站。 我是您的<span style=\"font-size:18px;color:#ff0000;\">专属客户经理蘑菇</span>。家装案例有<u><span style=\"background-color: rgb(255, 102, 102);\"><span style=\"background-color: rgb(51, 255, 51);\">北辰三角洲、碧桂园、八方小区，荣悦台，梅溪湖</span></span><span style=\"background-color: rgb(51, 255, 51);\">等</span></u>，装修方面的疑问欢迎来电咨询。马上来电咨询哟：如未及时回复，可以留下您的联系方式，我们看到第一时间与您联系</span></span></span></span></span></p><p><span style=\"font-weight: bold;\"><span style=\"color: rgb(255, 102, 102);\"><span style=\"color:#000000;\"><span style=\"background-color: rgb(51, 255, 51);\"><span style=\"background-color: rgb(255, 255, 255);\">&nbsp;Tel : 15675285280</span></span></span></span></span></p><p><strong>微信：XYH1314369</strong></p><pre id=\"best-content-206466730\" accuse=\"aContent\" class=\"best-text mb-10\" style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; font-family: 'Microsoft YaHei', arial, 'courier new', courier, 宋体, monospace; white-space: pre-wrap; word-wrap: break-word; font-size: 16px; line-height: 29px; color: rgb(51, 51, 51); min-height: 55px;\">  </pre>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<p></p><p align=\"left\"><span style=\"color:#ff6666;\"></span>&nbsp;</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10141354";
	re2.prompt = "您好！欢迎访问<strong><span style=\"color:#ff0000;\">贵阳</span><span style=\"color:#ff0000;\">生活家家居</span></strong>“健康生活服务商”我是您的专属客户经理小胡，很高兴为您服务！ 如有不在或者打字不方便可以电话咨询：<strong><span style=\"color:#ff0000;\">18798031894</span></strong>胡高琼QQ：<strong><span style=\"color:#ff0000;\">1332797434 </span></strong>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10141355";
	re2.prompt = "<p></p><p><span style=\"color:#ff0000;\"></span></p><p><span style=\"font-size:13px;\">您好！欢迎光临全国直营连锁</span><font size=\"3\"><span style=\"color:#ff0000;\"><strong>央视独家合作装修品牌</strong><span style=\"font-size:13px;\"><span style=\"color:#000000;\">【</span><span style=\"color:#000000;\">生活家家居-贵阳站</span><span style=\"color:#000000;\">】</span><span style=\"font-size:16px;color:#000000;\">！</span></span></span></font></p><p><strong><span style=\"font-size:13px;\">纯进口<span style=\"color:#ff0000;\"><u>德系</u></span>材料，时尚潮流领先，全球<span style=\"color:#ff0000;\"><u>顶级</u></span>配置。</span></strong></p><p><strong>网上咨询报名到店的业主专享<span style=\"font-size:16px;color:#ff00;\"><u>2000元</u></span><span style=\"color:#ff0000;\">现金减免！！！</span></strong>现在赶紧回复“1”报名参与，或拨打电话<span style=\"color:#ff0000;\">189-8438-5132</span><strong><span style=\"color:#ff0000;\">（小</span><span style=\"color:#ff0000;\">谢）</span></strong><span style=\"color:#ff0000;\"></span>，共同开始一段“不将就”的家装品质之旅<strong><span style=\"color:#ff0000;\">【生活家家居】</span></strong><span style=\"color:#ff0000;\"></span></p><div style=\"top: 1px;\">﻿﻿</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10141356";
	re2.prompt = "您好，欢迎您的咨询&nbsp;！&nbsp;我是客服经理张小平&nbsp;&nbsp;如果您不方便打字的话&nbsp;您可以电话咨询15585135674";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10141357";
	re2.prompt = "";
            re2.carousel = "1";
        re2.carousel_interval = "15";
    	re2.carousel_num = "1";
        re2.carousel_prompt1 = "";
        re2.carousel_prompt2 = "";
        re2.carousel_prompt3 = "";
        re2.carousel_prompt4 = "";
        re2.carousel_prompt5 = "<p><strong>您好！欢迎光临CCTV合作品牌【<span style=\"font-weight: bold;\">生活家装饰-武汉站</span>】。全国连锁公司，材料全球集采，详情咨询：张婷<span style=\"font-size:16px;color:#ff0000;\">15927528258</span></strong></p>";
        re2.carousel_prompt6 = "";
        re2.carousel_prompt7 = "";
        re2.carousel_prompt8 = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10141358";
	re2.prompt = "<div class=\"kf_words_wk\"><strong>您好，生活家家居--健康生活服务商。</strong></div><div class=\"kf_words_wk\">&nbsp;</div><div class=\"kf_words_wk\"><p><strong>如果您不想打字可以留下您的联系方式，我们会立即给您回电！</strong></p><p><strong>家居顾问：<span style=\"color:#ff0000;\">13545880371</span> 陈才</strong></p><p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Qq：7422878</strong></p></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10143196";
	re2.prompt = "<h3><span style=\"font-size:24px;color:#999900;\">【</span><span style=\"font-size:24px;color:#ff0000;\">欢迎光临生活家家居</span><span style=\"font-size:24px;color:#999900;\">】生活家家居集团全新推出“</span><span style=\"color:#ff0000;\"><span style=\"font-size:24px;\">增项全免费”“工期延一天赔</span><span style=\"font-size:24px;\">1000</span><span style=\"font-size:24px;\">”</span></span><span style=\"font-size:24px;color:#999900;\">两大工程服务条款，杜绝家装黑幕，泉城限量征集18套样板间。</span></h3><div><strong>欢迎咨询： &nbsp;Tell&nbsp; 18354278529 &nbsp;QQ&nbsp; 1581492454</strong></div><div style=\"top: 0px;\">??</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10143197";
	re2.prompt = "<p><span><span style=\"font-size:13px;color:#000000;\">【生活家家居】<span style=\"color:#ff0000;\">盛大开业</span><span style=\"color:#ff0000;\">，惊喜不断，6000平超大材料展厅八大风格样板间就等您来参观</span>，全新健康6.0整装模式只属于您。<span style=\"color:#33ff33;\">一站式选材、整体设计、整体预算、整体施工、整体善后、闭口式合同、更环保、知名品牌、超低价位。<br /></span>~如果时间忙可以直接来电：<span style=\"color:#ff0000;\">&nbsp;&nbsp;13854163887{王二小}&nbsp;QQ：565059752 </span></span></span></p><p><span style=\"font-size:13px;color:#000000;\"></span></p><p>&nbsp;</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10143198";
	re2.prompt = "<p style=\"margin: 0pt; padding: 0pt; text-align: left; mso-pagination: widow-orphan;\"></p><div><span style=\"font-size:18px;\">&nbsp;<span style=\"color:#ff0000;\"><strong>生活家</strong></span></span>是济南首家做健康拎包装模式的装修公司，包含咱家的<strong>设计</strong>、<strong>基础施工</strong>、<strong>主材</strong>、<strong>辅材</strong>、<strong>人工</strong>、<strong>损耗</strong>、<strong>灯具</strong>、<strong>配饰</strong>、<strong>售后</strong>于一体的新型装修模式&nbsp;。<br /><strong>预约设计师</strong>&nbsp;回复1&nbsp;<br /><strong>咨询报价</strong>&nbsp;回复2&nbsp;<br /><strong>参观样板间</strong>&nbsp;回复&nbsp;3&nbsp;<br /><strong>风格案例</strong>&nbsp;回复4&nbsp;<br /><strong>优惠活动</strong>&nbsp;回复&nbsp;5&nbsp;<br /><strong>其他问题</strong>&nbsp;回复&nbsp;6 &nbsp;</div><br /><p></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10143327";
	re2.prompt = "<div><strong><span style=\"font-size:13px;\">您好！欢迎光临全国品牌【生活家家居-西安站】</span></strong></div><div><strong><span style=\"color:#3366ff;\"><span style=\"font-size:13px;\">很高兴为您服务！我是您的专属VIP服务顾问：李敏</span></span></strong></div><div><strong><span style=\"font-size:13px;\"><span style=\"color:#3366ff;\">如果您不方便打字可以直接来电或者留个您的联系方式，我会立刻联系您。</span><span style=\"color:#cc0000;\">我叫李敏:&nbsp;<u>18629061427</u>（电话可以加微信，随时分享案例）</span></span></strong></div><div><strong><span style=\"color: rgb(51, 102, 255);\"><span style=\"font-size:13px;\">或者您加QQ：2505421776</span></span></strong></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10143328";
	re2.prompt = "<div><p><span style=\"line-height: 14px; background-color: rgb(243, 243, 243);\"><strong><span style=\"color:#006600;font-family: Arial;\">您好，请问您是西安的房子要装修吗？我是您的专属家装顾问李敏，很高兴为您服务！</span></strong></span><strong>&nbsp;如果您不方便打字，您可以直接拨打我的电话</strong><span style=\"color: rgb(204, 0, 0);\"><span style=\"font-size: 13px;\"><strong>18629061427</strong></span></span><strong><span style=\"font-size:13px;\">&nbsp;</span>联系我~</strong></p></div><div><strong>&nbsp;</strong></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10143528";
	re2.prompt = "您好，欢迎您的咨询，请问有什么需要帮助的吗？";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10143920";
	re2.prompt = "您好，<strong><span style=\"color: rgb(0, 153, 0);\">生活家装饰</span></strong>——中国健康整装领导者，全国首推按套内净面积收费，让您不再为公摊买单。主材不限量使用，有效杜绝后期增项增量，水电是根据您家的设计需求点位包干，真正做到水电无增项，从而有效控制预算。健康整装热线：<span style=\"color:#cc0000;\">18071027570家居顾问：张家龙<br /></span>如果不方便打字，您也可以留下联系方式，设计师会尽快跟您联系！<br /><span><strong>聊天中请勿关闭对话窗口！！</strong></span><div style=\"top: 0px;\">??</div><div style=\"top: 0px;\">??</div><div style=\"top: 0px;\">??</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10143922";
	re2.prompt = "<p>请问您是新房装修还是老房装修呢？</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10143923";
	re2.prompt = "请问您是要咨询一下装修吗？若不方便打字，可留下电话我们与您联系或拨打咨询电话<span style=\"text-decoration: underline; cursor: pointer;\" class=\"send_sms_from_msg callsoft_from_msg\" data=\"15927528258\"><span style=\"font-size:18px;color:#ff0000;\"><strong>15927528258</strong></span></span>张婷咨询。";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10143925";
	re2.prompt = "<span style=\"font-size:16px;\"></span><div>欢迎进入生活家家居武汉分公司网站，有没有一种家装就像买包包一样简单，生活家正式为你推出整装（拎包装)，装修完您直接拎包入住即可。我是您的专属客服张家龙（电话:18071027570,QQ：402274273）很高兴为您服务<br />如果不方便打字，可以留下您的联系方式，我这边会尽快给您来电！</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10144339";
	re2.prompt = "<p><strong><span style=\"font-size:16px;\">我是您的居家顾问：圆圆，TEL：<span style=\"color:#ff0000;\">18951810031</span>（微信同号）QQ：<span style=\"color:#ff0000;\">1317816569 &nbsp;</span> &nbsp; </span></strong>&nbsp;</p><p><span style=\"font-size:13px;\">请问现在是想了解装修风格；工艺；材料；效果图；还是活动呢？</span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10144340";
	re2.prompt = "<p style=\"WHITE-SPACE: normal; WORD-SPACING: 0px; TEXT-TRANSFORM: none; COLOR: rgb(0,0,0); TEXT-ALIGN: left; FONT: 14px/19px arial, 宋体; PADDING-LEFT: 0px; MARGIN: 1px 0px 0px; LETTER-SPACING: normal; TEXT-INDENT: 0px; -webkit-text-stroke-width: 0px\">您好，这里是南京生活家装饰，健康生活服务商，<span style=\"font-size:16px;color:#ff00;\"><strong>我是生活家仝娇</strong></span>，QQ：<strong><span style=\"color:#099000;\">1719119372</span></strong>，手机：<strong><span style=\"color:#099000;\">18305149052。</span></strong></p><p style=\"WHITE-SPACE: normal; WORD-SPACING: 0px; TEXT-TRANSFORM: none; COLOR: rgb(0,0,0); TEXT-ALIGN: left; FONT: 14px/19px arial, 宋体; PADDING-LEFT: 0px; MARGIN: 1px 0px 0px; LETTER-SPACING: normal; TEXT-INDENT: 0px; -webkit-text-stroke-width: 0px\"><strong><span style=\"color:#ff00;\"><u>如果您不方便打字，可以留下联系方式，我们会尽快跟您联系的。</u></span></strong></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10144341";
	re2.prompt = "<p><span style=\"font-size:16px;color:#990000;\">您好，这里是南京生活家装饰。很高兴为您服务！请问您是咨询设计还是报价的呢？我这边为您解答。<br />我是您的专属顾问--小琳<br />手机/微信/QQ：187-5191-6564</span></p><div id=\"space_div\"><span style=\"color:#990000;\"><br /><span style=\"font-size:16px;\"></span></span></div><br />";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10147317";
	re2.prompt = "<p><span style=\"font-size:13px;\">欢迎光临全国装修品牌【生活家家居】-合肥站<br />1.新品全新上线</span><span style=\"font-size:13px;\"><span style=\"color:#cc0000;\">【拎包装、一键整体家装，让装修像买包包一样简单】<br /></span>2.现在即可咨询</span><span style=\"font-size:13px;\"><span style=\"color:#ff0000;\">【报价、材料、设计等装修问题】<br /></span>3.现在即可提前预约您喜欢的设计师<br />我您的专属顾问：方园，可以直接<br /></span><strong><span style=\"font-size:13px;\">&nbsp;电话咨询：18556573895<br />QQ：2586956581</span></strong></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10148213";
	re2.prompt = "<div><span style=\"font-family:KaiTi_GB2312;font-size:16px;color:#000000;\"></span></div><span style=\"font-family: KaiTi_GB2312; font-size: 16px;\"><span style=\"font-size:18px;color:#0990;\"><span style=\"font-size:16px;color:#000000;\"><span style=\"font-family:KaiTi_GB2312;color:#000000;\"></span></span></span></span><div><div><span style=\"font-family:SimHei;font-size:13px;\">欢迎光临CCTV央视合作品牌【生活家装饰】官网，我是您的专属顾问—小苗（电话/微信：18826128032）</span></div><div><span style=\"font-family:SimHei;font-size:13px;\"><a target=\"_blank\" href=\"http://wpa.qq.com/msgrd?v=3&amp;uin=937398561&amp;site=qq&amp;menu=yes\" style=\"font-family: SimHei; font-size: 13px;\"><img border=\"0\" src=\"http://wpa.qq.com/pa?p=2:937398561:51\" alt=\"咨询小苗\" title=\"咨询小苗\" /></a><br /></span></div><div><span style=\"font-family:SimHei;font-size:13px;\">【咨询报价】请回复1</span></div><div><span style=\"font-family:SimHei;font-size:13px;\">【预约设计】请回复2</span></div><div><span style=\"font-family:SimHei;font-size:13px;\">【活动优惠】请回复3</span></div><div><span style=\"font-family:SimHei;font-size:13px;\"><br /></span></div><div><span style=\"font-family:SimHei;font-size:13px;\"><strong>编辑【姓名+楼盘+面积】发送，即可免费预约量尺</strong></span></div><div><span style=\"font-family:SimHei;font-size:13px;\"><strong><br /></strong></span></div><div><span style=\"font-family:SimHei;font-size:13px;\">人工服务请直接留下联系方式，我们会尽快给您回电哈！</span></div></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10148214";
	re2.prompt = "<p><span style=\"color:#333333;\">您好，欢迎进入“中国健康整装领导者”--</span><strong><span style=\"font-size:18px;color:#009900;\">生活家家居</span></strong>广州分站，<span style=\"font-size:18px;color:#cc0000;\"><strong>全国首推按室内净面积计价</strong></span>，让您无需再为公摊面积买单！<span style=\"font-size:18px;color:#cc0000;\"><strong>主材不限量使用，</strong><span style=\"font-size:13px;color:#333333;\">有效杜绝后期增项增量，</span><strong>水电是根据您家的设计需求点位包干，</strong><span style=\"font-size:13px;color:#000000;\">真正做到水电无增项，</span><strong>从而最有效控制您的装修预算，<span style=\"font-size:13px;color:#000000;\">您的专属健康整装热线13450434083，咨询QQ:673435950！</span></strong></span></p><p>&nbsp;</p><p><strong><span style=\"font-size:18px;color:#cc0000;\"></span></strong>&nbsp;</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10148215";
	re2.prompt = "<p><span style=\"font-family:KaiTi_GB2312;font-size:16px;\"><span style=\"color:#000000;\"></span></span></p><p><span style=\"font-size:16px;\"></span></p><span style=\"font-size: 13px;\"><span style=\"font-family: 微软雅黑, \" ms=\"\" sans=\"\" serif=\"\" sans-serif=\"\"></span></span><div></div>欢迎光临【生活家装饰】集团<br />【团购装修】回复 1<br />【设计】回复 2<br />【报价】回复 3<br />【看样板间工地】回复4<br />或者电话/微信18588688119联系，可尽快为您解答装修详情！<div><pre></pre></div><p></p><p><span style=\"font-family: KaiTi_GB2312; font-size: 16px;\"><span style=\"color:#009900;\"></span></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10148216";
	re2.prompt = "<p>您好！我是您的专属家居顾问小谢。<span style=\"color:#3366ff;\">电话：15920433976 QQ:481620904）。我们</span>生活家是集家装设计、施工、家具、软装一站式服务的整装家居企业。您需要了解的是装修哪方面的问题呢？ </p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10150125";
	re2.prompt = "<p></p><p><span style=\"background-color: rgb(255, 255, 255);\"><strong><span style=\"font-family:Microsoft YaHei;font-size:16px;color:#ff0000;\"></span></strong></span></p><div><span style=\"font-family: SimSun;\"><span style=\"font-size:18px;\"><strong><span style=\"color:#ff0000;\">Hello! 这里是南京生活家装饰，我是您的家居顾问：小郭，TEL:</span>15880689529<span style=\"color:#ff0000;\">（微信同号）QQ：</span>273138829<span style=\"color:#ff0000;\">&nbsp;&nbsp;</span></strong></span></span></div><div><span style=\"font-family: SimSun;\"><span style=\"font-size:18px;color:#ff0000;\"><strong><br /></strong></span></span></div><div><span style=\"font-family: SimSun;\"><span style=\"font-size:18px;color:#ff0000;\"><strong>请问现在是想了解装修风格；工艺；材料；效果图；还是活动呢？</strong></span></span>&nbsp;</div><p><span style=\"font-weight: bold;\"><span style=\"background-color: rgb(255, 255, 255);\"><span style=\"font-family:Microsoft YaHei;font-size:16px;color:#ff0000;\"><u><span style=\"cursor: pointer;\"></span></u></span></span></span></p><br />";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10150126";
	re2.prompt = "<p style=\"TEXT-ALIGN: left; TEXT-TRANSFORM: none; TEXT-INDENT: 0px; MARGIN: 1px 0px 0px; PADDING-LEFT: 0px; FONT: 12px/21px arial, 宋体; WHITE-SPACE: normal; LETTER-SPACING: normal; COLOR: rgb(0,0,0); WORD-SPACING: 0px; font-size-adjust: none; font-stretch: normal; -webkit-text-stroke-width: 0px\"></p><p style=\"LINE-HEIGHT: normal; MARGIN: 0px; FONT-FAMILY: Times; FONT-SIZE: 10px; -webkit-text-stroke-width: initial; -webkit-text-stroke-color: rgb(0, 0, 0)\"><span style=\"TEXT-DECORATION: underline; font-kerning: none\"></span></p><p class=\"lmsg_color\"></p><div>&nbsp;我是您的居家顾问：莉雅</div><div>&nbsp; TEL：15005156502（微信同号）QQ： &nbsp;1156409626 &nbsp;&nbsp;<br />请问现在是想了解装修风格；工艺；材料；效果图；还有活动呢？<br /></div><br /><p></p><div><span style=\"TEXT-DECORATION: underline; font-kerning: none\"><strong><br /></strong></span></div><p style=\"TEXT-ALIGN: left; TEXT-TRANSFORM: none; TEXT-INDENT: 0px; MARGIN: 1px 0px 0px; PADDING-LEFT: 0px; FONT: 12px/21px arial, 宋体; WHITE-SPACE: normal; LETTER-SPACING: normal; COLOR: rgb(0,0,0); WORD-SPACING: 0px; font-size-adjust: none; font-stretch: normal; -webkit-text-stroke-width: 0px\"><span style=\"font-size:13px;\"></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10151040";
	re2.prompt = "<p></p><p><strong></strong></p><div></div>生活家家居装饰感谢您的咨询，可以直接回复数字咨询：<br /><div><strong><span style=\"color:#ff0000;\">1 整装报价&nbsp;&nbsp; </span><span style=\"color:#ff0000;\">2 预约设计师</span></strong></div><div><strong><span style=\"color:#ff0000;\">3 参观样板间                            </span><span style=\"color:#ff0000;\">4 优惠活动</span></strong></div><div><strong><span style=\"color:#ff0000;\">5 人工电话咨询</span></strong>，如您不方便打字可以留下联系方式，客服马上给您回电<br /></div><p></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10151041";
	re2.prompt = "<p><strong><span style=\"font-size:16px;\">欢迎进入“健康生活服务商”生活家装饰官方网站，我是客户经理董鲁迪，生活家拎包装时代已经全面开启，真正做到拎包入住，省时省事省心省钱!如果您不方便打字，可以留下您的联系方式，我会在第一时间联系您的。</span></strong></p><p><span style=\"font-size: 16px;\"><span style=\"color:#ff0000;\"><strong>【立即咨询】13642088942（董鲁迪）QQ：878580340</strong></span></span></p><strong>&nbsp;</strong><br />";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10151042";
	re2.prompt = "<div>&nbsp;生活家是天津首家做拎包装模式的装饰公司，包含咱家的基础施工，主材，辅材，人工，损耗，家具，软装，配饰，售后于一体的新型装修模式。<br /><br />预约设计师&nbsp;回复1<br /><br />咨询报价&nbsp;回复2<br /><br />参观工地&nbsp;回复3<br /><br />咨询主材品牌&nbsp;回复4<br /><br />浏览风格案例&nbsp;回复5<br /><br />咨询优惠活动&nbsp;回复6<br /><br />其他问题咨询&nbsp;回复7<br /><br />看样板间&nbsp;回复8<br /><br />（网络客服微信&amp;电话：<strong><span style=\"color:#009900;\">15022121094</span></strong>如果不方便打字，可以留下联系方式，马上给您回电，会介绍的更清晰）<br /></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10151044";
	re2.prompt = "您好，欢迎您的咨询，请问有什么需要帮助的吗？ ";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10152552";
	re2.prompt = "<div><span style=\"FONT-FAMILY: Arial\"><span style=\"FONT-SIZE: 16px\"><span style=\"FONT-FAMILY: \" yahei=\"\" microsoft=\"\"><span style=\"FONT-FAMILY: Arial\"><span style=\"BACKGROUND-COLOR: rgb(255,255,255)\"><span style=\"FONT-SIZE: 32px\"><span style=\"font-family:'Microsoft YaHei';\"><span style=\"font-size:18px;\"><img border=\"0\" alt=\"\" src=\"http://www17.53kf.com/img/face/53b/53b_35.gif\" />您好：欢迎光临<strong><span style=\"color:#ff0000;\">中央电视台</span></strong></span></span></span></span></span></span></span></span></div><div><span style=\"font-family:'Microsoft YaHei';font-size:18px;\"><span style=\"color:#ff0000;\"><strong>合作品牌</strong></span>【生活家装饰-青岛站】我是值班经理：<span style=\"color:#ff0000;\"><strong>贾伟</strong></span></span><p><span style=\"font-family:宋体;font-size:18px;\"></span></p><span style=\"font-size:16px;\"><strong>生活家装饰<u>央视品牌月&nbsp;</u></strong></span><span style=\"font-size:16px;\"><strong><u>钜惠岛城&nbsp;&nbsp;&nbsp;匠心筑家</u></strong></span></div><div><p><span style=\"font-family:SimHei;color:#ff00;\"><strong><span style=\"font-size:18px;\">四大主材&nbsp;任选一项免费送。</span></strong></span></p><p><span style=\"LINE-HEIGHT: 26pt; FONT-WEIGHT: bold\"><span style=\"font-size:18px;\"><span style=\"font-family:微软雅黑;\"><span style=\"color:#ff0000;\">橱柜、</span></span></span></span><span style=\"LINE-HEIGHT: 26pt; FONT-WEIGHT: bold\"><span style=\"font-size:18px;\"><span style=\"font-family:微软雅黑;\"><span style=\"color:#ff0000;\">木门、</span></span></span></span><strong>地板、洁具</strong></p><p style=\"MARGIN-TOP: 0pt; MARGIN-BOTTOM: 0pt\" class=\"p0\"><strong>签单即送一套</strong><span style=\"font-size:16px;\"><strong>VR全景</strong></span><strong>效果图。</strong></p><span style=\"FONT-FAMILY: Arial\"><span style=\"FONT-SIZE: 16px\"><span style=\"FONT-FAMILY: \" yahei=\"\" microsoft=\"\"><span style=\"FONT-FAMILY: Arial\"><span style=\"FONT-SIZE: 32px\"><span style=\"font-family:'Microsoft YaHei';\"><span style=\"font-size:18px;\">客户经理：<span style=\"color:#ff0000;\"><strong>贾伟</strong></span></span></span></span></span></span></span></span><span style=\"FONT-FAMILY: Arial\"><span style=\"FONT-SIZE: 16px\"><span style=\"FONT-FAMILY: \" yahei=\"\" microsoft=\"\"><span style=\"FONT-FAMILY: Arial\"><span style=\"COLOR: rgb(255,0,0); FONT-SIZE: 32px\"><span style=\"font-family:Microsoft YaHei;\"><span style=\"font-size:18px;\"><span style=\"color:#000000;\">电话：<strong>18563946624</strong></span><u><strong>（微信）</strong></u></span></span></span></span></span></span></span></div><div><span style=\"FONT-FAMILY: Arial\"><span yahei=\"\" microsoft=\"\"><span style=\"FONT-FAMILY: Arial\"><span style=\"COLOR: rgb(255,0,0)\"><span style=\"font-family:'Microsoft YaHei';\"><strong><span style=\"color:#000000;\"><span style=\"font-size:18px;\">QQ</span></span><span style=\"font-size:18px;\">：1356855376</span></strong></span></span></span></span></span></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10152554";
	re2.prompt = "<div><strong><span style=\"font-size:16px;\">您好，欢迎光临<span style=\"color:#ff0000;\">央视合作品牌</span><span style=\"color:#006600;\">青岛生活家装饰官网</span>{53b#35#}&nbsp; 我是今天的值班经理：卢博臣：18366285417（微信号）</span></strong></div><div><strong><span style=\"font-size:16px;color:#ff0000;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 钜惠岛城&nbsp; 匠心筑家</span></strong></div><div><p><strong><span style=\"font-family:微软雅黑;color:#ff0000;\">1：四大主材任选其一免费送！</span></strong></p><p><strong><span style=\"font-family:微软雅黑;color:#ff0000;\">2：价值500元验房量房卡每日仅限送10户！</span></strong></p><p><strong><span style=\"font-family:微软雅黑;color:#ff0000;\">3：设计费折扣享不停，设计大咖等你来！</span></strong></p><p><strong><span style=\"font-family:微软雅黑;color:#ff0000;\">4：凡签单客户即送22项产品免费升级礼包！</span></strong></p></div><div><strong><span style=\"font-size:16px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></strong></div><p>&nbsp;</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10152947";
	re2.prompt = "<span style=\"font-size:18px;\"></span><div><span style=\"font-size:18px;\"></span><div><span style=\"font-size:18px;\"></span><div><div><div>&nbsp;您好！欢迎光临央视上榜品牌【生活家装饰-济南】<br />“5.20，爱家日”征集央视上榜样板间，一线品牌建材，纯正徳标工艺，铸造品质家装。现在咨询即可抢占样板间名额，名额有限，还在等什么？马上点击右下角进行咨询~~~<br />我是您的网络<span style=\"color:#ff0000;\">客户经理--三丰</span><br />如不方便打字，可留下您电话，我立即给您回电！或可以直接来电！<br /></div><br /><strong>TEL:<span style=\"color:#ff0000;\">15628882021 QQ:1144900439</span></strong><br /></div></div></div></div><span style=\"color:#ff0000;BACKGROUND-COLOR: rgb(255,255,255)\"></span>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10152986";
	re2.prompt = "<div sizset=\"0\" sizcache=\"35263\"><span style=\"font-size:18px;\"></span><div sizset=\"0\" sizcache=\"35260\"><span style=\"font-size:18px;\"></span><div sizset=\"0\" sizcache=\"35257\"><div></div><div>&nbsp;您好！欢迎光临央视上榜品牌【生活家装饰-济南】<br />“<span style=\"background-color: rgb(255, 255, 102);\">5.20，爱家日</span>”征集央视上榜样板间，一线品牌建材，纯正徳标工艺，铸造品质家装。现在咨询即可抢占样板间名额，名额有限，还在等什么？马上点击右下角进行咨询~~~<br />我是您的专属客户经理<span style=\"background-color: rgb(255, 255, 51);\">小凡。</span><br />如不方便打字，可留下您电话，我立即给您回电！或可以直接来电！<br />TEL：<span style=\"background-color: rgb(255, 255, 51);\">18560789897</span>&nbsp;&nbsp;&nbsp;&nbsp;QQ：<span style=\"background-color: rgb(255, 255, 51);\">960202164</span><br /></div><br /></div></div></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10152989";
	re2.prompt = "<p></p><div><p style=\"margin: 1px 0px 0px; padding-left: 10px;\" class=\"recv-msg-content\"></p><div><div><div>您好！欢迎光临<span style=\"background-color: rgb(153, 153, 255);\">央视上榜</span>品牌<span style=\"font-size:16px;color:#ff0000;\">【生活家装饰-济南】</span><div><span style=\"background-color: rgb(51, 204, 255);\"><span style=\"font-size:16px;\">“5.20，爱家日</span>”</span><span style=\"color:#6600cc;\">征集央视上榜样板间，<span style=\"font-size:16px;\">一线品牌建材</span>，纯正</span><span style=\"background-color: rgb(255, 0, 0);\">徳标工艺</span><span style=\"color:#6600cc;\">，铸造品质家装。</span>现在咨询即可抢占样板间名额，名额有限，还在等什么？马上点击右下角进行咨询~~~<br /></div></div>现在即可点击右下角咨询！我是您的专属客户经理<span style=\"font-size:16px;color:#ff0000;\"><strong>赵梦</strong></span>。<br />如不方便打字，可留下您电话，我立即给您回电！或可以直接来电！<br /><span style=\"font-size:16px;color:#6600cc;\"><strong>TEL:18396811201 QQ:981094346</strong></span><br /></div><br /></div><p></p></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10152995";
	re2.prompt = "<p><span style=\"font-family:KaiTi_GB2312;\"><span style=\"font-size:16px;\"><span style=\"color:#ff0000;\">生活家拎包装震撼上市，让装修像买包包一样简单</span><span style=\"color:#cc0000;\">...网络报名省更多！！</span></span></span><span style=\"FONT-FAMILY: KaiTi_GB2312\"><span style=\"FONT-SIZE: 16px\"><span style=\"color:#006600;\"><span style=\"font-size:18px;\">我是您的专属客服经理李丽琼（电话：<span style=\"color:#cc0000;\"><strong>14787853145</strong>、QQ：496228606</span>）欢迎致电详询</span><img style=\"BORDER-TOP: 0px; BORDER-RIGHT: 0px; BORDER-BOTTOM: 0px; BORDER-LEFT: 0px\" border=\"0\" alt=\"\" src=\"http://www17.53kf.com/img/face/53b/53b_35.gif\" /></span></span></span> <span style=\"font-family:KaiTi_GB2312;font-size:16px;BACKGROUND-COLOR: #6600cc\">??<span style=\"color:#6600cc;BACKGROUND-COLOR: #ffffff\">如果您不想打字可以留下您的联系方式，我们会立即给您回电！</span></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10153062";
	re2.prompt = "<p><strong><span style=\"color:#000000;\">您好，欢迎进入苏州生活家官网，主材不限量，有效杜绝后期增项费用，从而有效控制预算，更有11800㎡实景体验馆，VIP预约专</span><span style=\"color:#000000;\">线：</span></strong><span style=\"color:#ff0000;\"><strong>13656215171</strong>&nbsp;</span>&nbsp;<strong>QQ</strong>：<span style=\"color:#ff0000;\"><strong>3233189 488</strong></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10153063";
	re2.prompt = "<div><strong>亲，您好，我是您的专属家装顾问-<span style=\"color:#3333ff;\">大白</span><span style=\"color:#ff0000;\">电话/微信：</span><span style=\"color:#ff0000;\">15850187842 QQ：987700422 &nbsp;</span>如果您不喜欢打字，可以留下您的联系方式，我会立即给您解决装修问题喔！</strong><br /></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10153064";
	re2.prompt = "您好，欢迎您的咨询，请问有什么需要帮助的吗？ ";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10153065";
	re2.prompt = "您好，欢迎您的咨询，请问有什么需要帮助的吗？ ";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10153066";
	re2.prompt = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10153067";
	re2.prompt = "<p><span style=\"font-size:16px;\">您好，欢迎光临<strong>央视合作品牌——生活家装饰</strong>！生活家装饰集团，全国25家分公司，集团化全球集采，率先推出拎包整装服务，详询：18001541094&nbsp; QQ：1337951252</span> </p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10153068";
	re2.prompt = "<span style=\"font-size:18px;\"></span><p align=\"justify\"><span style=\"font-family:KaiTi_GB2312;font-size:18px;\"></span></p><p><span style=\"font-family:KaiTi_GB2312;\"><strong><span style=\"font-size:16px;color:#3333ff;\"></span></strong></span></p><div><span style=\"font-size:18px;\">&nbsp;5月开启<strong><span style=\"color:#006600;\">德标样板间参观季</span></strong>，在线预约参观样板间工地，<strong><span style=\"color:#009900;background-color: rgb(255, 255, 255);\">免费赠送</span></strong>验房工具一套，数量有限，赶紧预约吧！<strong></strong></span><div><strong></strong><span style=\"FONT-FAMILY: SimHei\"><span style=\"FONT-SIZE: 16px\"><span style=\"font-family:SimSun;font-size:18px;\">详询</span>：<strong><strong>13862208534</strong></strong>（客户经理：王诚）<br /></span></span></div></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10153069";
	re2.prompt = "新春闹元宵，礼多好享购！<br />进店客户即可享受：<br />1.<span style=\"font-size:24px;color:#ff0000;\">免费</span>量房<br />2.<span style=\"font-size:24px;color:#ff0000;\">免费</span>验房<br />3.<span style=\"font-size:24px;color:#ff0000;\">免费</span>做VR实景效果图<br />三重<span style=\"color: rgb(255, 0, 0);\"><span style=\"font-size:24px;\">免费</span></span>外，还可参与元宵灯谜会，猜灯谜、送豪礼，更多详情可联系专属家居顾问：云不器 电话：18551201101（可加微信）<br />";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10153461";
	re2.prompt = "<p><span style=\"color:#ff080;TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(255,237,196); TEXT-INDENT: 0px; LETTER-SPACING: normal; DISPLAY: inline !important; FONT: 16px Segoe UI Symbol, 'MS Sans Serif', sans-serif; WHITE-SPACE: normal; FLOAT: none; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\">您好，欢迎来到生活家(北京）家居装饰有限公司[长沙分公司]我是您的专属客户经理：周乾，家装案例有：万国城、华润橡树湾、润和紫郡、北辰三角洲。湘江世纪城和晟通城等。如果您有什么疑问，也可以拨打小周的电话：13508499902&nbsp;或者加小周的QQ：860142604&nbsp;</span><br style=\"TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(255,237,196); TEXT-INDENT: 0px; LETTER-SPACING: normal; FONT: 16px Segoe UI Symbol, 'MS Sans Serif', sans-serif; WHITE-SPACE: normal; COLOR: rgb(255,0,128); WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\" /></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10153462";
	re2.prompt = "<p><span style=\"font-size:13px;\"><span style=\"color: rgb(255, 102, 102);\">品质生活服务商——央视合作品牌生活家装饰，欢迎您的访问！提供：设计+主材+辅材+人工+施工+损耗+售后一站式服务,套内净使用面积计费，大品牌主材，全德系辅材，给您健康品质家。</span><span style=\"color: rgb(255, 102, 102);\">详情请咨询【生活家李浩宏】</span></span>咨询电话<u><strong>18570381547</strong></u>，<strong>QQ/微信 ：</strong><u><span style=\"color:#333333;\"><strong>569978092</strong></span></u></p><p></p><p><br /></p><span style=\"color:#ff0000;\"><strong></strong></span>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10154010";
	re2.prompt = "<p>您好！欢迎咨询全国品牌｛生活家家居-昆明站} 我是您的专属客服经理段翠，现在可咨询家装设计，材料，优惠等！QQ：3225781152&nbsp; 电话：15288207462&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</p><p>&nbsp; <span style=\"color:#cc33cc;\"><strong>聊天中请勿关闭对话窗口！</strong></span>&nbsp;</p><pre style=\"TOP: 0px\">&nbsp;</pre>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10154381";
	re2.prompt = "<div style=\"TOP: 0px\"><!--StartFragment --><div style=\"text-align: center;\"><span style=\"font-family:Arial;\"><span style=\"line-height: 24px; white-space: nowrap; background-color: rgb(255, 243, 225);\">欢迎进入【生活家家居】昆明分公司，全国25城连锁，大品牌值得信赖！按套内面积计价，不再为公摊买单！一站式健康家装，省心又放心。我是您的专属客户经理小阳（阳贞梅），如果我没有及时回复您的，请留下您的联系方式或拨打13577104480，小阳将竭诚为您服务！</span></span></div></div><div style=\"TOP: 23px\"><strong><span style=\"font-size:16px;color:#000099;\">聊天过程中请勿关闭窗口</span></strong></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10154382";
	re2.prompt = "<div class=\"chat_word\"><p>您好，欢迎光临央视合作品牌——生活家装饰集团。</p><p><span style=\"COLOR: #003300\"><span style=\"FONT-SIZE: 16px\"><span style=\"font-size:13px;color:#006600;\"><strong>我是您的客户经理-匡匡</strong><span style=\"color:#000000;\"><strong>，</strong><span style=\"font-size:13px;\">很高兴为您服务！</span></span></span></span></span></p><p><span style=\"color:#003300;\"><span style=\"font-size:13px;\"><strong><span style=\"color:#006600;\">QQ：2084634653,</span></strong></span></span><span style=\"color:#003300;\"><span style=\"font-size:13px;\"><strong><span style=\"color:#006600;\">电话/微信：18205096379.</span></strong></span></span></p><p><span style=\"font-size:13px;color:#006600;\"><strong>如果不方便打字，您可以留个联系方式，我会尽快与您联系！</strong></span></p></div><p>&nbsp;</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10155388";
	re2.prompt = "<p style=\"color: rgb(0, 0, 0); font-family: 宋体; font-size: 14px;\">您好，欢迎进入中国健康整装领导者-生活家家居昆明分公司网站，，行业首推按室内净面积计价模式，无需为公摊买单。主材不限量使用，杜绝后期增项增量，最有效控制您家庭预算，杜绝装修猫腻！<br /><strong><span style=\"color:#cc33cc;\">您的专属家居顾问张潇雯</span><span style=\"color:#ff0000;\">QQ:2296807385，联系热线：<span style=\"font-weight: bold; text-decoration: underline; cursor: pointer;\">15887095811</span></span></strong></p><p>&nbsp;</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10155556";
	re2.prompt = "<p><strong>生活家家居装饰感谢您的咨询：生活家是天津首家做拎包装模式的装饰公司<br />您可以直接回复数字进行咨询：<br />预约设计师&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;回复1<br />咨询整装报价&nbsp;回复2<br />参观样板工地&nbsp;回复3<br />咨询主材品牌&nbsp;回复4<br />咨询优惠活动&nbsp;回复5<br />人工服务请直接留您联系方式！马上给您回电话<br />（如果您不方便打字，可以留下联系方式，马上给您回电电话，或者拨打我们的热线电话：<span style=\"color:#a4b22;font-weight: bold; text-decoration: underline; cursor: pointer;\">15760710207</span>）&nbsp;<br /></strong></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10156010";
	re2.prompt = "<h4 style=\"text-align: left; text-transform: none; line-height: 16px; text-indent: 0px; letter-spacing: normal; font-family: tahoma; font-style: normal; font-variant: normal; word-spacing: 0px; white-space: normal; -webkit-text-stroke-width: 0px;\"><p><span style=\"font-size:18px;\"><span style=\"color:#3366ff;\">您好,您是旧房改造还是</span></span><span style=\"font-size:18px;\"><span style=\"color:#3366ff;\">新房装修呢？如果您不</span></span><span style=\"font-size:18px;\"><span style=\"color:#3366ff;\">方便打字可直接来电，我叫刘彦彦</span><span style=\"color:#ff0000;\">。</span></span></p><p><span style=\"font-size:18px;\"><span style=\"color:#3366ff;\">电话</span>：<span style=\"color:#ff0000;\"><strong>18660207702</strong></span></span></p><p><span style=\"font-size:18px;\"><span style=\"color:#3366ff;\">QQ</span>：<span style=\"color:#ff0000;\">2820225518</span></span></p></h4>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10156034";
	re2.prompt = "<span style=\"font-weight: bold;\"><span style=\"color:#ff6666;\">我是您的专属家装顾问：左璐璐</span></span><p style=\"font: 12px/normal Arial, Verdana, sans-serif; text-transform: none; text-indent: 0px; letter-spacing: normal; word-spacing: 0px; white-space: normal; font-size-adjust: none; font-stretch: normal; -webkit-text-stroke-width: 0px;\"><span style=\"font-weight: bold;\"></span><span style=\"font-weight: bold;\"><span style=\"font-size:18px;\">生活家家居中国健康整装家居倡导者——青岛站，欢迎您的访问！<span style=\"color:#ff0000;\">提供：设计，主材，辅材，人工等售后一站式服务，套内净使用面积计费，品牌主材，德系辅材。</span>详情请咨询【生活家家居左璐璐】 tel：15668078957QQ：673998428</span></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10156083";
	re2.prompt = "<div>&nbsp;春节不打烊&nbsp;<br />争抢报名315活动前28席<br />28元低值1000元&nbsp;并与315活动同享&nbsp;定金可退哦&nbsp;亲&nbsp;速来报名吧&nbsp;报名即送设计师专为您家设计的VR效果图3套。欧式风格、现代风格、美式风格随意选择！<br />报名时间截止时间&nbsp;3月10日<br />请咨询客服报名方式！&nbsp;</div><div>电话报名：4008-122-100</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10156085";
	re2.prompt = "<p>大连生活家给您高品质的装修服务。</p><p>欢迎咨询：13624269040 张寒月</p><p>聊天过程中，不要关闭页面，以免聊天中断。</p><p><span style=\"word-wrap: break-word; background-color: rgb(255, 255, 255); -webkit-line-break: after-white-space;\"><span style=\"color:#ff0000;\"></span></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10156086";
	re2.prompt = "您好，我是今天您的专属家居规划师寇鹏，有什么可以帮助您的？您是要选择装修吗？<br />通话中切记不要关闭窗口哦 ！ ";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10156087";
	re2.prompt = "<p>高品质享受尽在生活家6000㎡家居体验馆。<br />现在即可提前预约您喜欢的设计师<br /><span style=\"BACKGROUND-COLOR: #ff9900\"><strong><span style=\"BACKGROUND-COLOR: #ffffff\"><span style=\"BACKGROUND-COLOR: #ff9900\">详情咨询：</span><span style=\"color:#006600;\"><span style=\"font-size:13px;color:#000000;BACKGROUND-COLOR: #ff9900\">李松烨</span>&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;</span></strong></span></p><p><span style=\"BACKGROUND-COLOR: #ff9900\"><strong><span style=\"color:#000000;BACKGROUND-COLOR: #ff9900\">&nbsp;电话&amp;微信：18941199752 QQ：331654932</span></strong></span></p><p><span style=\"BACKGROUND-COLOR: #ff9900\"><strong><span style=\"color:#cc33cc;BACKGROUND-COLOR: #ffffff\">不方便打字可直接来电。</span></strong></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10156088";
	re2.prompt = "<p><strong><span style=\"color:#ff0000;\">6000平</span></strong><span style=\"font-size: 13px;\">实体展厅<strong>，VR设计</strong>百分百还原，国际国内<strong>一线品牌</strong>样品展示</span></p><p><span style=\"font-size: 13px;\">现在可预约您喜欢的效果图的设计老师</span></p><p><span style=\"background-color: rgb(255, 0, 0);\"><strong><span style=\"font-size:13px;\">5.20新产品</span></strong></span>大力度优惠放送</p><p><strong>详情咨询：</strong><span style=\"color: rgb(0, 102, 0);\"><span style=\"color: rgb(0, 0, 0);\"><strong><span style=\"font-family:KaiTi_GB2312;font-size:16px;\">孙露</span></strong></span><strong>&nbsp;&nbsp;</strong></span><strong>&nbsp;&nbsp;&nbsp;</strong></p><p><strong><span style=\"color: rgb(0, 0, 0); background-color: rgb(255, 204, 204);\">&nbsp;电话&amp;微信：15842617190、<span style=\"font-size: 13px;\">QQ</span>：2267765198</span></strong></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10156091";
	re2.prompt = "<p><strong><span style=\"color:#000000;\"></span></strong></p><p><strong>你好，中国健康整装领导者——生活家家居</strong>。</p><p><span style=\"font-size: 13px; background-color: rgb(255, 255, 255);\"><strong><br /></strong></span></p><p><span style=\"font-size: 13px; background-color: rgb(255, 255, 255);\"><strong>6000平</strong></span><strong>实体体验馆，</strong><span style=\"font-size: 13px;\">设计、施工材料、家居产品一站式搞定</span><strong>！！</strong></p><p>现在即可提前预约您喜欢的设计老师</p><p>现在即可咨询<strong><span style=\"color:#ff6666;\">【报价、材料、设计等装修问题】</span></strong></p><p>我是您的专属服务顾问：<span style=\"color:#9999ff;\"><strong>孙超</strong></span>，可以直接给我来电：<strong>TEL： 15142433005，QQ：3184169522，很高兴为您服务！</strong></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10156093";
	re2.prompt = "<p>您好，欢迎进入生活家装饰大连分公司，我是您的家装顾问马金梅</p><p>欢迎咨询；15942430873</p><p>QQ：1134032511</p><p><br /></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10156094";
	re2.prompt = "<span style=\"color:#000000;\"></span><div>您好！欢迎进入<strong><span style=\"color:#ff0000;\"><span style=\"font-size:24px;\">【生活家家居-大连站】</span><br /></span></strong>1.<span style=\"font-size:13px;\"><strong>真健康、真整装，！！！</strong></span></div><div>2.现在即可提前预约您喜欢的设计师<br />我是您的专属客户经理：<span style=\"font-size:24px;color:#333333;\"><span style=\"background-color: rgb(51, 204, 0);\">金明</span></span>，还可以直接给我来电&amp;加微信：&nbsp;<span style=\"background-color: rgb(0, 153, 0);\"><span style=\"font-size:24px;\">15222927388</span></span>。QQ：<span style=\"background-color: rgb(0, 153, 0);\"><span style=\"font-size:24px;\">1078358229</span></span><span style=\"BACKGROUND-COLOR: #ff99ff\"><br /></span></div><p>&nbsp;</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10157035";
	re2.prompt = "<div><span style=\"font-family:SimHei;font-size:16px;\">您好！欢迎光临全国品牌<strong><span style=\"font-size:24px;color:#ff0000;\">[生活家家居]</span></strong></span><span style=\"font-size:16px;\"><span style=\"font-family:SimHei;\">-成都站</span></span></div><div><div><span style=\"font-family:SimHei;font-size:16px;\">现在即可咨询：<br />1、【预约设计师量尺】<br />2、【8000方展厅体验预约】<br />3、【欧洲品质主材任你选】</span></div><span style=\"font-family:SimHei;font-size:16px;\"></span><div><br />4、【五分钟短信报价】编辑小区名称户型面积装修风格老房/新房【到】15184470573</div><div>我是您的专属客户经理【晏梅】， QQ:1938864774，微信：15184470573<br /></div></div><p>&nbsp;</p><div style=\"top: 23px;\">??</div><div style=\"top: 45px;\">??</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10157042";
	re2.prompt = "<div><span style=\"font-size:18px;\">您好！我是昆明生活家客服<strong style=\"background-color: rgb(255, 255, 255);\"><span style=\"color:#990000;\">杜虹</span></strong>，有任何装修问题欢迎致电：<span style=\"color: rgb(255, 0, 0);\"><strong>18314105498</strong></span>或加<span style=\"background-color: rgb(255, 255, 255);\">QQ</span>:<span style=\"color: rgb(255, 0, 0);\"><strong>957710159</strong></span></span></div><p><span style=\"font-size:18px;color:#ff0000;\"><strong>&nbsp;</strong></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10157909";
	re2.prompt = "您好，欢迎登陆合肥生活家——拎包装：一站式服务。客服王逍遥为您服务。咨询热线：15371646866 &nbsp;QQ：2788425221。";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10157910";
	re2.prompt = "您好，欢迎您的咨询，请问有什么需要帮助的吗？ ";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10157911";
	re2.prompt = "<p>欢迎进入生活家合肥分公司，我是今天的值班经理大鹏，欢迎您的咨询！18555502357（微信/QQ：3106629295）</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10157912";
	re2.prompt = "您好！欢迎光临全国连锁品牌【生活家装饰-合肥站】<br />双十一嗨购狂欢节，品质整装，惊喜特惠四重奏，欢迎咨询！（可以直接电话咨询苗苗18156000582，或者留下您的联系方式，我给您电话沟通。）";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10157913";
	re2.prompt = "&nbsp;<div>您好！欢迎光临全国连锁品牌【生活家装饰-合肥站】<br />1.现在即可咨询【当前活动】详情<br /><br />2.现在即可咨询【材料、报价、设计】等装修问题<br /><br />3.现在即可提前预约您喜欢的设计师我是今天的值班经理——苗苗。<br /><br />手机/微信：18156000582 QQ:813414918</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10157914";
	re2.prompt = "您好，欢迎您的咨询，请问有什么需要帮助的吗？ ";
            re2.carousel = "1";
        re2.carousel_interval = "15";
    	re2.carousel_num = "1";
        re2.carousel_prompt1 = "";
        re2.carousel_prompt2 = "";
        re2.carousel_prompt3 = "";
        re2.carousel_prompt4 = "";
        re2.carousel_prompt5 = "";
        re2.carousel_prompt6 = "";
        re2.carousel_prompt7 = "";
        re2.carousel_prompt8 = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10158191";
	re2.prompt = "<div><div><span style=\"font-size:18px;\"><!--StartFragment --></span><div><div><div><div><span style=\"font-family: Arial;\"><span style=\"font-family: 'Microsoft YaHei';\"><span style=\"font-family: Arial;\"><span style=\"font-family: 'Microsoft YaHei';\"><span style=\"font-size:16px;\">欢迎光临-中央电视台合作品牌-生活家装饰济南直营店！<br />好设计，好家装，就选生活家 ！<br />您好，我是您的网络专属客户经理</span><span style=\"font-size:18px;color:#ff6666;\"><u>【苏丽君】</u></span><span style=\"font-size:16px;\">，可以直接给我来电：</span><span style=\"font-size:18px;color:#333300;\"><u>13656408375</u></span><span style=\"font-size:16px;\">（微信同号）</span><span style=\"font-size:18px;\"><u>QQ：2270959719</u></span><span style=\"font-size:16px;\"> 很高兴为您服务！</span></span></span></span></span></div><span style=\"font-size: 18px;\">&nbsp;&nbsp;</span><br /><span style=\"font-size: 18px; background-color: rgb(102, 255, 153);\"><em><strong></strong></em></span></div><span style=\"BACKGROUND-COLOR: #99ff99\"> </span></div></div></div></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10158192";
	re2.prompt = "<p><span style=\"color: rgb(0, 0, 255); font-family: Simsun; line-height: 20px;\">您好呀！我是济南生活家客服三丰。欢迎您前来咨询。您是想装修房子么？如果您不方便打字可以拨打我的电话<span style=\"background-color: rgb(102, 255, 255);\">【<strong>15753145025</strong>】</span>咨询我！希望您能够挑选到自己满意的产品。祝您生活愉快！</span></p><p><span style=\"color: rgb(0, 0, 255); font-family: Simsun; line-height: 20px;\">QQ：<span style=\"background-color: rgb(102, 255, 255);\">3061984428</span></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10158332";
	re2.prompt = "<p style=\"WHITE-SPACE: normal; TEXT-TRANSFORM: none; WORD-SPACING: 0px; COLOR: rgb(0,0,0); FONT: 12px Arial, Verdana, sans-serif; LETTER-SPACING: normal; TEXT-INDENT: 0px; font-size-adjust: none; font-stretch: normal; -webkit-text-stroke-width: 0px\"><span style=\"font-size:16px;color:#333333;\"><strong>您好，我是您的专属家装顾问：李倩</strong></span></p><p style=\"WHITE-SPACE: normal; TEXT-TRANSFORM: none; WORD-SPACING: 0px; COLOR: rgb(0,0,0); FONT: 12px Arial, Verdana, sans-serif; LETTER-SPACING: normal; TEXT-INDENT: 0px; font-size-adjust: none; font-stretch: normal; -webkit-text-stroke-width: 0px\"><strong><span style=\"font-size:16px;color:#33cc00;\">欢迎进入生活家家居【<span style=\"color:#ff6666;\">青岛站</span><span style=\"color:#33cc00;\">】，</span><span style=\"font-size:18px;color:#333333;\">生活家家居致力于健康整装，一站式服务，水电全含，0增项0增量，集团采购整合国际国内一线品牌，<span style=\"color:#33cc00;\">详情</span><span style=\"color:#33cc00;\">咨询：李倩18765933040</span></span></span></strong></p><p style=\"WHITE-SPACE: normal; TEXT-TRANSFORM: none; WORD-SPACING: 0px; COLOR: rgb(0,0,0); FONT: 12px Arial, Verdana, sans-serif; LETTER-SPACING: normal; TEXT-INDENT: 0px; font-size-adjust: none; font-stretch: normal; -webkit-text-stroke-width: 0px\"><strong><span style=\"font-size:16px;color:#333333;\">如果您打字不方便欢迎来电详询</span></strong></p><p style=\"WHITE-SPACE: normal; TEXT-TRANSFORM: none; WORD-SPACING: 0px; COLOR: rgb(0,0,0); FONT: 12px Arial, Verdana, sans-serif; LETTER-SPACING: normal; TEXT-INDENT: 0px; font-size-adjust: none; font-stretch: normal; -webkit-text-stroke-width: 0px\"><strong><span style=\"font-size:16px;color:#333333;\"></span></strong>&nbsp;</p><div style=\"TOP: 0px\"><span style=\"color:#ff0000;\">??</span></div><span style=\"color:#ff0000;\"></span>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10158826";
	re2.prompt = "<p style=\"TEXT-ALIGN: left; TEXT-TRANSFORM: none; TEXT-INDENT: 0px; MARGIN: 1px 0px 0px; PADDING-LEFT: 0px; FONT: 12px Arial, Verdana, sans-serif; WHITE-SPACE: normal; LETTER-SPACING: normal; COLOR: rgb(0,0,0); WORD-SPACING: 0px; font-size-adjust: none; font-stretch: normal; -webkit-text-stroke-width: 0px\">欢迎光临高品质健康整装领导者—生活家家居（青岛站），<span style=\"FONT-WEIGHT: bold\"><span style=\"color:#000099;\">我是您的专属家装顾问：李长亮</span></span><span style=\"FONT-WEIGHT: bold\"><span style=\"font-size:24px;color:#000000;TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(243,243,243); TEXT-INDENT: 0px; DISPLAY: inline !important; FONT: 12px/14px Arial; WHITE-SPACE: normal; FLOAT: none; LETTER-SPACING: normal; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\">提供：设计，主材，辅材，人工等售后一站式服务，套内净使用面积计费，大品牌主材，全德系辅材。</span></span></p><p style=\"TEXT-ALIGN: left; TEXT-TRANSFORM: none; TEXT-INDENT: 0px; MARGIN: 1px 0px 0px; PADDING-LEFT: 0px; FONT: 12px Arial, Verdana, sans-serif; WHITE-SPACE: normal; LETTER-SPACING: normal; COLOR: rgb(0,0,0); WORD-SPACING: 0px; font-size-adjust: none; font-stretch: normal; -webkit-text-stroke-width: 0px\"><span style=\"FONT-WEIGHT: bold\"></span><span style=\"FONT-WEIGHT: bold\">详情咨询：电话18866265686&nbsp; QQ2283960279</span><span style=\"FONT-WEIGHT: bold\">如果您打字不方便可以直接来电咨询或者留下您的电话号码我即刻给您打过去。</span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10159459";
	re2.prompt = "<p><span style=\"font-size:18px;color:#3366ff;\">您<strong>好，您是旧房改造还是新房装修呢？如果您不方便打字可以直接来电或者留个您的联系方式，我会立刻联系您。我叫【李嫕Yi】</strong></span><span style=\"font-size: 18px; color: rgb(51, 102, 255);\"><strong>电话：</strong></span><span style=\"font-size: 18px; color: rgb(255, 0, 0);\"><strong>18192703060</strong></span> &nbsp;<span style=\"font-size: 18px; color: rgb(51, 102, 255);\">QQ</span>：<span style=\"font-size: 18px; color: rgb(255, 0, 0);\"><strong>1363413140</strong></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10159643";
	re2.prompt = "<p>您好！欢迎进入贵阳生活家官网！我是<span style=\"color:#000000;TEXT-TRANSFORM: none; TEXT-INDENT: 0px; LETTER-SPACING: normal; DISPLAY: inline !important; FONT: 13px 微软雅黑, 'MS Sans Serif', sans-serif; WHITE-SPACE: normal; FLOAT: none; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\">健康生活服务商</span>客服经理小蒋，请问有什么可以帮助您的吗？若未及时回复您，您也可以来电咨询：<strong><u>15685162236</u></strong>小蒋</p><p><span style=\"font-family:SimSun;\"><span style=\"font-size:13px;\"></span><span style=\"font-size:10px;color:#000000;\"><strong><span style=\"font-size:13px;\">如果你很忙或者不方便打字，可以留下你的联系方式，我会尽快与您联系</span>。</strong></span></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10159644";
	re2.prompt = "您好，欢迎咨询生活家官网【贵阳站】，我是您的客服经理小蝶：15329008712 QQ：358456587&nbsp; ";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10160578";
	re2.prompt = "<p style=\"color: rgb(0, 0, 0); font-family: 宋体; font-size: 14px;\">【欢迎光临生活家家居】生活家家居集团全新推出“增项全免费”“工期延一天赔1000”两大工程服务条款，杜绝家装黑幕，8000平米实景家居体验馆展示于天河区黄埔大道中路282号。如果时间忙可以直接来电：<span style=\"font-size:18px;\"><span style=\"color:#009900;\"><strong>电话：<span style=\"font-weight: bold; text-decoration: underline; cursor: pointer;\">18588891896</span></strong></span></span> 或者您可以留下联系方式，我待会给您回过来。</p><p>&nbsp;</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10160579";
	re2.prompt = "<span style=\"font-size:13px;\">您好，这里是<span style=\"color:#33cc00;\"><strong><span style=\"font-size:16px;\">生活家广州分公司</span></strong>，</span>我是您的私人顾问<strong><span style=\"font-size:16px;\">小何</span></strong>，电话：<strong><span style=\"font-size:18px;BACKGROUND-COLOR: rgb(255,255,255)\">15989280759;&nbsp;</span><span style=\"font-size:16px;\">QQ<span style=\"color:#000099;\">: </span><span style=\"color:#3366ff;\">842292078</span></span></strong> ;&nbsp;<span style=\"font-family:Microsoft YaHei;\"> <strong>首推按室内净面积计价模式，无需为公摊买单，主材不限量使用，杜绝后期增项增量</strong>。</span>请问您是要咨询装修方面的问题吗？</span> ";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10160581";
	re2.prompt = "<div class=\"lmsg_color\"><span style=\"font-size:10px;\"><strong><span style=\"font-family:Arial Black;\">欢迎光临CCTV央视合作品牌</span><span style=\"font-family: SimHei; color: rgb(0, 0, 153);\">【</span><span style=\"font-family: SimHei; color: rgb(0, 0, 153);\">生活家装饰</span><span style=\"font-family: SimHei; color: rgb(0, 0, 153);\">】</span><span style=\"font-family:Arial Black;\">集团官网，我是您的专属客户经理琳达，很高兴为您服务！<span style=\"background-color: rgb(255, 255, 255);\">（</span>客服热线：<span style=\"color: rgb(255, 0, 0);\">18620767056</span>）</span><a href=\"http://wpa.qq.com/msgrd?v=3&amp;uin=598077488&amp;site=qq&amp;menu=yes\" target=\"_blank\" style=\"font-family: SimHei;\"><img title=\"生活家琳达\" alt=\"生活家琳达\" src=\"http://wpa.qq.com/pa?p=2:598077488:41\" border=\"0\" /></a></strong></span></div><div class=\"lmsg_color\"><span style=\"font-size:10px;\"><strong><span style=\"font-family:Arial Black;\"><span style=\"color: rgb(0, 0, 153);\">【</span>团购装修</span><span style=\"color:#000099;\"><span style=\"font-family:Arial Black;\">】</span>回复 1</span><br /></strong></span></div><div class=\"lmsg_color\"><div><span style=\"font-size:10px;\"><strong><span style=\"font-family:Arial Black;\">【咨询最新活动】</span>&nbsp;<span style=\"color: rgb(0, 0, 153);\">回复 2</span></strong></span></div><div><span style=\"font-size:10px;\"><strong><span style=\"font-family:Arial Black;\">【预约专属设计师】</span>&nbsp;<span style=\"color: rgb(0, 0, 153);\">回复 3</span></strong></span></div></div><div><div><span style=\"font-size:10px;\"><strong><span style=\"font-family:Arial Black;\">【预约8000平米家装体验馆】</span><span style=\"color: rgb(0, 0, 153);\">回复4</span></strong></span></div><div><span style=\"font-size:10px;\"><strong><span style=\"font-family:Arial Black;\">【五分钟短信报价】 &nbsp;编辑短信：小区名称、户型面积、装修风格、毛坯或二次翻新【到】18620767056尽快为您回复</span></strong></span></div><div><span style=\"color: rgb(255, 0, 0);\"><span style=\"font-size:10px;\"><strong>如果您不方便打字，需要人工服务可以留下联系方式以及姓名，琳达会尽快与您联系！</strong></span></span></div></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10160582";
	re2.prompt = "<!--StartFragment --><div>终于等到您~这里是【生活家装饰】集团官网，我是您的专属客户经理小萍（客服热线：13922329660）<a href=\"http://wpa.qq.com/msgrd?v=3&amp;uin=939130943&amp;site=qq&amp;menu=yes\" target=\"_blank\"><img title=\"咨询报价\" alt=\"咨询报价\" src=\"http://wpa.qq.com/pa?p=2:939130943:51\" border=\"0\" /></a>即日起，预约量房，成功即送100元京东购物卡，只限100个名额哦!<br />【咨询报价】回复&nbsp;1<br />【设计案例】回复&nbsp;2<br />【预约量房】回复&nbsp;3<br />【活动优惠】回复 4</div><div>【材料品牌】回复 5<br />【三分钟短信报价】&nbsp;&nbsp;编辑短信：楼盘+面积+姓名 到13922329660<br /><br />人工服务请直接留下联系方式，小萍会尽快给您回电哈！<br /><br /><br /><br /></div><div style=\"top: 0px;\">﻿﻿</div><div style=\"top: 86px;\">﻿﻿</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10161218";
	re2.prompt = "<p style=\"font-family: 宋体;\">您好！欢迎光临生活家（北京）家居装饰有限公司。我是<span style=\"color:#ff0000;background-color: rgb(255, 255, 255);\">【贾晨阳】</span><br />夏季装修<span style=\"font-size:16px;color:#ff0000;\"><strong>礼</strong></span>不停，<span style=\"font-size:16px;color:#ff0000;\"><strong>【央视团购50套】</strong></span>正式开启，<span style=\"font-size:16px;color:#ff0000;\"><strong>优惠史无前例，</strong></span>欢迎您的咨询。</p><p><span style=\"color:#ff0000;\"><span style=\"font-size:16px;\"><strong>热线：18311168463</strong></span></span></p><p><strong><span style=\"font-size:16px;\"><span style=\"color:#ff00;\">QQ:844655673</span></span></strong></p><br />";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10161219";
	re2.prompt = "您好，欢迎您的咨询，请问有什么需要帮助的吗？";
            re2.carousel = "1";
        re2.carousel_interval = "15";
    	re2.carousel_num = "2";
        re2.carousel_prompt1 = "<span style=\"BACKGROUND-COLOR: #b8d100; FONT-SIZE: 24px\">你好！欢迎光临全国品牌<span style=\"BACKGROUND-COLOR: #ffe500\">【生活家家居-北京站】</span></span><br /><span style=\"BACKGROUND-COLOR: #b8d100; FONT-SIZE: 24px\">1、现在即可咨询【当期促销优惠详细】</span><br /><span style=\"BACKGROUND-COLOR: #b8d100; FONT-SIZE: 24px\">2、现在即可咨询【报价、材料、设计等装修问题】</span><br /><span style=\"BACKGROUND-COLOR: #b8d100; FONT-SIZE: 24px\">3、现在即可提前预约您喜欢的设计师；</span><br /><span style=\"BACKGROUND-COLOR: #b8d100; FONT-SIZE: 24px\">4、生活家首推“德标工程”和“健康环保协议书”</span><br /><span style=\"BACKGROUND-COLOR: #b8d100; FONT-SIZE: 24px\">为您家装保驾护航！</span><br /><span style=\"BACKGROUND-COLOR: #b8d100; FONT-SIZE: 24px\">我是您的专属服务顾问<span style=\"BACKGROUND-COLOR: #ffe500\">苟丹</span>，可以直接给我来电：<span style=\"BACKGROUND-COLOR: #ffe500\">15810613317</span>（可添加微信）QQ:<span style=\"BACKGROUND-COLOR: #ffe500\">3028025350</span></span> <p><span style=\"BACKGROUND-COLOR: #b8d100; FONT-SIZE: 24px\"></span></p>";
        re2.carousel_prompt2 = "<span style=\"BACKGROUND-COLOR: #99bb00; FONT-SIZE: 24px\">您家是新房装修还是老房翻新呢？</span>";
        re2.carousel_prompt3 = "<span style=\"BACKGROUND-COLOR: #99bb00; FONT-SIZE: 24px\">您家是多大面积呢？</span><span style=\"FONT-SIZE: 24px\"></span>";
        re2.carousel_prompt4 = "<span style=\"BACKGROUND-COLOR: #99bb00; FONT-SIZE: 24px\">如果您打字不方便您可以加我微信<span style=\"BACKGROUND-COLOR: #b8d100\">3028025350</span></span>";
        re2.carousel_prompt5 = "<span style=\"FONT-SIZE: 24px\"><span style=\"BACKGROUND-COLOR: #b8d100\">在么？</span><span style=\"BACKGROUND-COLOR: #b8d100\"></span></span>";
        re2.carousel_prompt6 = "";
        re2.carousel_prompt7 = "";
        re2.carousel_prompt8 = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10161220";
	re2.prompt = "<p class=\"lmsg_color\"><span style=\"font-size:13px;\">您好，您家是老房新房呢？装修这块儿考察的怎么样呢？如果不愿意打字，可以给我打电话<span style=\"color:#0a4b22;CURSOR: pointer; FONT-WEIGHT: bold; TEXT-DECORATION: underline\">18514280230</span>（微信），QQ：1800683</span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10161221";
	re2.prompt = "<span style=\"font-size:16px;\"></span><p style=\"FONT-FAMILY: 宋体; COLOR: rgb(0,0,0)\"><span style=\"FONT-SIZE: 14px\">生活家装饰客户经理多多，您可以向我咨询关于装修的一切疑问，同时欢迎网络预约设计师，享受更多优惠。 友情提示：如果您不方便打字，您可以拨打</span><strong><span style=\"font-size:16px;\">24小时热线：</span><strong><span style=\"color:#ff00;\"><span style=\"font-size:18px;\">13511060478手机号也是微信号</span></span><span style=\"font-size:18px;\">;在线</span><span style=\"font-size:16px;color:#000000;\">QQ:</span><span style=\"font-size:18px;\">631523665</span></strong></strong></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10161537";
	re2.prompt = "<span style=\"color:#ff0000;\"><span style=\"BACKGROUND-COLOR: #000000\"><!--StartFragment --><!--StartFragment --></span></span><h5><u><span style=\"font-size:18px;color:#ff0000;\"></span></u><div><div><span style=\"font-size:18px;\"></span><!--StartFragment --></div></div><div><h2></h2><h2></h2><h2></h2><h3><h3>您好，欢迎您的咨询，请问有什么需要帮助的吗？</h3></h3></div></h5>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10161538";
	re2.prompt = "<div><span style=\"font-family:SimSun;\"></span><div><div><div><div><div>&nbsp;您好！欢迎光临<strong><span style=\"font-size:13px;color:#ff0000;background-color: rgb(255, 255, 255);\">央视上榜品牌【生活家装饰-济南】</span></strong><br /><span style=\"background-color: rgb(153, 255, 153);\"><span style=\"font-size:13px;color:#ff0000;\"><strong>“5.20，爱家日”征集央视上榜样板间</strong></span></span>，一线品牌建材，纯正徳标工艺，铸造品质家装。<strong>现在咨询即可抢占样板间名额，名额有限</strong>，还在等什么？马上点击右下角进行咨询~~~<br />我是您的专属<strong>客户经理米乐</strong>。<br />如不方便打字，可留下您电话，我立即给您回电！或可以直接来电！<br /></div></div><strong><span style=\"font-size:13px;color:#ff0000;\">TEL:15726152337&nbsp;<br />QQ:1514697307&nbsp;</span></strong></div><strong><span style=\"font-size:16px;color:#ff0000;\"></span></strong></div></div></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10161539";
	re2.prompt = "<span style=\"font-size:16px;\"></span><div><span style=\"font-size:16px;\"><span style=\"font-family:Microsoft YaHei;\"></span></span><div><div></div><div><div><span style=\"font-size:13px;\"><span style=\"font-family:Microsoft YaHei;\"></span></span><div><span style=\"font-family:Microsoft YaHei;\"></span><div><div><strong><span style=\"font-size:18px;color:#ff0000;\"></span></strong><div><strong><span style=\"font-size:18px;color:#ff0000;\"></span></strong><div><strong><span style=\"font-size:18px;color:#ff0000;\">&nbsp;您好！欢迎光临央视上榜品牌【生活家装饰-济南】</span></strong><br /><span style=\"font-size:16px;color:#ff6600;\"><span style=\"background-color: rgb(255, 255, 0);\"></span></span></div><div>&nbsp;<br /><span style=\"font-size:16px;color:#ff0000;\"><strong>“5.20，爱家日</strong></span>”征集央视上榜样板间，一线品牌建材，纯正徳标工艺，铸造品质家装。现在咨询即可抢占样板间名额，名额有限，还在等什么？马上点击右下角进行咨询~~~<br /></div><span style=\"font-size:13px;color:#ff0000;\"><strong></strong></span><br /></div><span style=\"font-size:16px;\"></span></div><div>现在即可点击右下角咨询！我是您的网络客户经理<span style=\"font-size:16px;color:#ff0000;\"><span style=\"background-color: rgb(255, 255, 0);\">孙程</span></span>。<br />如不方便打字，可留下您电话，我立即给您回电！或可以直接来电！<br /></div><span style=\"font-size: 18px; color: rgb(255, 0, 0);\"><strong></strong></span></div></div><span style=\"font-size:18px;color:#ff6666;background-color: rgb(255, 255, 0);\"><strong><span style=\"font-family:Microsoft YaHei;\">TEL:<u>13153115421</u></span></strong></span></div><div><span style=\"font-size:18px;color:#ff6666;background-color: rgb(255, 255, 0);\"><strong><span style=\"font-family:Microsoft YaHei;\">QQ:<u>2243248259</u></span></strong></span></div><br /></div></div></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10162395";
	re2.prompt = "<p></p><div><span style=\"font-family:Microsoft YaHei;\"><span style=\"font-size:18px;color:#ff0000;\"><strong></strong></span></span></div><div><span style=\"font-family:Microsoft YaHei;font-size:32px;\"><strong>盛装起航，悦享未来</strong></span></div><div><span style=\"font-family:Microsoft YaHei;font-size:32px;\"><strong>生活家全新家居体验馆，15000㎡超大展馆 3月11日隆重开业</strong></span></div><div><span style=\"font-size:16px;\"><span style=\"font-family:Microsoft YaHei;\">免费预约设计师请回复“<span style=\"color:#ff0000;\">1</span>”或拨打预约电话：<span style=\"color:#ff0000;\">155-9918-3990</span>（仅限网络报名业主）</span></span></div><div><span style=\"font-family:Microsoft YaHei;\">&nbsp;</span></div><div><span style=\"font-family:Microsoft YaHei;\">您好！欢迎光临全国连锁<span style=\"color:#990000;\"><strong>【生活家装饰-贵阳站】</strong></span><br />现在即可咨询<span style=\"color:#990000;\">【当前活动】</span>详情<br />现在即可咨询<span style=\"color:#990000;\">【材料、报价、设计】</span>等装修问题<br />现在即可预约您喜欢的设计师</span></div><div><span style=\"font-family:Microsoft YaHei;\"><br />我是您的专属服务顾问：<span style=\"color:#990000;\"><strong><span style=\"font-size:24px;\">夏琳</span></strong></span><br />电话<span style=\"background-color: rgb(255, 255, 255);\">：<span style=\"color:#990000;\"><strong>155-9918-3990</strong></span></span></span></div><div><span style=\"background-color: rgb(255, 255, 255);\"><span style=\"color:#990000;\"><strong><span style=\"font-family:Microsoft YaHei;\"><br /></span></strong></span></span></div><div><span style=\"font-family:Microsoft YaHei;\"><span style=\"font-size: 16px;\">海量</span><strong>效果图实景图</strong><span style=\"font-size: 16px;\">微信：</span><strong>155-9918-3990</strong></span></div><p></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10162396";
	re2.prompt = "<p>欢迎光临北京生活家家居青岛分公司，我是您的家居顾问<strong><span style=\"font-size:24px;color:#3366ff;\">张文静</span></strong><span style=\"font-size:18px;\"><span style=\"color:#6633ff;\">，</span></span><span style=\"font-size:24px;color:#ff0000;BACKGROUND-COLOR: rgb(51,255,51)\">整装全包0增量，带你一起“耍大牌”</span>国际国内一线品牌强势助攻，大牌全球购·高品质 ,全线德标工程，比肩国际环保标准，增项全免费！让您花同样的钱享受更高品质的健康生活！</p><div class=\"msg worker\"><div class=\"msg_content\"><h4><span style=\"font-size:16px;BACKGROUND-COLOR: rgb(255,0,0)\"><strong>报名热线：15668078957</strong></span></h4><h4><span style=\"font-size:16px;BACKGROUND-COLOR: rgb(255,0,0)\">QQ微信：673998428</span></h4><h4>如果您不方便打字以直接来电咨询或者留下您的电话号码我即刻给您打过去。</h4></div></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10162704";
	re2.prompt = "<span style=\"font-family:宋体;\"><span style=\"font-size:16px;color:#003333;\"></span></span><p>欢迎进入健康整装生活家装饰—“中国品质生活服务商”官网--生活家福州站，我是您的专属客户经理孙颖，可以直接给我来电：15859088572<br />想咨询价格 回复 1&nbsp;<br />想知道地址 回复 2&nbsp;<br />参观样板间 回复 3&nbsp;<br />看风格案例 回复 4&nbsp;<br />优惠活动 &nbsp; 回复 5<br />预约喜欢的设计师 回复 6<br /></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10162705";
	re2.prompt = "<p style=\"text-align: left; text-transform: none; text-indent: 0px; margin: 1px 0px 0px; padding-left: 0px; letter-spacing: normal; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: 21px; font-family: arial, 宋体; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px;\"><span style=\"font-size: 12px;\"></span></p><span style=\"font-family:SimSun;font-size:10px;\">您好！<span style=\"color:#cc0000;\">央视</span>合作品牌<span style=\"color:#cc0000;\">生活家装饰</span>，欢迎您咨询<br />预约优秀设计师请回复“1”（<span style=\"color:#cc0000;\">仅限网络</span>）<br />马上咨询<span style=\"color:#cc0000;\">最新活动资讯</span>，了解活动内容<br />马上咨询<span style=\"color:#cc0000;\">材料、报价、设计</span>等装修问题<br />我是您的专属家装顾问：<span style=\"background-color: rgb(255, 255, 255);\"><span style=\"color:#cc0000;\">张云弟（一休）</span></span><br />如您不方便打字，请致电：<span style=\"color:#cc0000;\">150 0594 8703</span><br />海量装修图库加微信：150 0594 8703</span>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10162706";
	re2.prompt = "<p></p><div>&nbsp;</div><span style=\"font-family:Arial;TEXT-ALIGN: center; LINE-HEIGHT: 24px; BACKGROUND-COLOR: rgb(255,243,225); WHITE-SPACE: nowrap\"></span><p>您好，欢迎光临<span style=\"FONT-FAMILY: SimSun; COLOR: #ff0000; FONT-SIZE: 13px\"><strong>CCTV央视合作品牌【生活家装饰集团-福州站】</strong></span><span style=\"color:#ff0000;\"><strong></strong></span>，<span style=\"font-size: 10px;\">我是您的专属客户经理杨婷婷，很高兴为您服务！</span><br />电话咨询 婷婷电话：<span style=\"color: rgb(255, 0, 0);\">18850236922</span> QQ：<span style=\"color:#ff0000;\">927636003</span></p><p></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10162707";
	re2.prompt = "<p>您好，我是李阳（电话：13960829853 微信：13960829853 QQ 3339574486） 是您的专属VIP网络客服很高兴为您服务!这个是临时对话窗口,系统不太稳定~您留下您的QQ号码吧?我加您为好友,第一时间联系您！如果您现在不方便打字，可以留下您的联系方式，我将马上给您回复！</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10162708";
	re2.prompt = "<p>您好，我是生活家的客服双儿（电话13055413684 微信nnbb8858）<br />是您的专属vip网络客服，很高兴为您服务！这个是临时对话窗口，系统不太稳定，您留下您的微信号吧，我加您好友，第一时间联系您。如果您现在不方便打字，可以留下您的电话联系方式，双儿将马上给您回复!</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10162709";
	re2.prompt = "<p></p><p align=\"center\"><strong><span style=\"font-size:13px;\"><span style=\"font-family:微软雅黑;\"></span></span></strong></p><p></p><p><span style=\"font-family:Microsoft YaHei;font-size:13px;\"></span></p><p><span style=\"font-family:'Microsoft YaHei';\"><span style=\"font-size:10px;\"></span></span></p><p class=\"p\" style=\"margin: 0pt; line-height: 15pt; text-indent: 0pt;\"><span style=\"font-family:微软雅黑;letter-spacing: 0pt; font-size: 7.5pt;\"></span></p><p class=\"p\" style=\"margin: 0pt; line-height: 15pt; text-indent: 0pt;\"><span style=\"font-family:宋体;letter-spacing: 0pt; font-size: 7.5pt;\"></span></p><p class=\"p\" style=\"margin: 0pt; line-height: 15pt; text-indent: 0pt;\"><span style=\"font-family:宋体;letter-spacing: 0pt; font-size: 7.5pt;\"></span></p><p class=\"p\" style=\"margin: 0pt; line-height: 15pt; text-indent: 0pt;\"><span style=\"font-family:宋体;letter-spacing: 0pt; font-size: 7.5pt;\"></span></p><p class=\"p\" style=\"margin: 0pt; line-height: 15pt; text-indent: 0pt;\"><span style=\"font-size:13px;\"><span style=\"font-family:宋体;letter-spacing: 0pt;\"></span></span></p><p class=\"p\" style=\"margin: 0pt; text-indent: 0pt; line-height: 15pt;\"><span style=\"font-family:SimSun;font-size:10px;\"><span style=\"letter-spacing: 0pt;\"></span></span></p><p></p><p></p><p><span style=\"font-size:10px;\">欢迎光临</span><span style=\"font-family:SimSun;font-size:13px;color:#ff0000;\"><strong>CCTV央视合作品牌【生活家装饰集团-福州站】</strong></span><span style=\"font-size:10px;\">我是您的专属客户经理邓昌美，很高兴为您服务！</span></p><p><span style=\"font-size:10px; font-family: 宋体;\"><strong><span style=\"color:#ff0000;\">友情提示：</span></strong>若您较忙可留下联系方式</span><span style=\"font-size:10px;\">，小邓</span><span style=\"font-size:10px; font-family: 宋体;\">会尽快给您回电！也可以直接电话咨询</span> <strong style=\"font-size:10px;\"><span style=\"color:#ff0000;\"><span style=\"font-family: 宋体;\">（客服热线</span>&amp;微信：15159638820）</span></strong></p><p class=\"p\" style=\"margin: 0pt; text-indent: 0pt; line-height: 15pt;\"><span style=\"letter-spacing: 0pt;\"><span style=\"font-family:SimSun;font-size:10px;\"></span></span><span style=\"font-family: 微软雅黑; letter-spacing: 0pt; font-size: 10.5pt;\"><o:p></o:p></span></p><p class=\"p\" style=\"margin: 0pt; line-height: 15pt; text-indent: 0pt;\"><span style=\"font-size:10px;\"><span style=\"font-size:13px;\"><span style=\"font-size:10px;\"><span style=\"font-size:13px;\"><span style=\"font-size:10px;\"><span style=\"font-size:13px;\"><span style=\"font-family:宋体;line-height: 15pt; text-indent: 0pt; letter-spacing: 0pt;\"></span></span></span></span></span></span></span></p><p class=\"p\" style=\"margin: 0pt; line-height: 15pt; text-indent: 0pt;\"><span style=\"font-family:宋体;letter-spacing: 0pt; font-size: 6.5pt;\"><o:p></o:p></span></p><p class=\"p\" style=\"margin: 0pt; line-height: 15pt; text-indent: 0pt;\"><span style=\"font-family:宋体;letter-spacing: 0pt; font-size: 6.5pt;\"></span><span style=\"font-family:宋体;letter-spacing: 0pt; font-size: 6.5pt;\"><o:p></o:p></span></p><p class=\"p\" style=\"margin: 0pt; line-height: 15pt; text-indent: 0pt;\"><span style=\"font-family:宋体;letter-spacing: 0pt; font-size: 6.5pt;\"></span><span style=\"font-family:宋体;letter-spacing: 0pt; font-size: 6.5pt;\"><o:p></o:p></span></p><p class=\"p\" style=\"margin: 0pt; line-height: 15pt; text-indent: 0pt;\"><span style=\"font-family:微软雅黑;letter-spacing: 0pt;\"><span style=\"font-size:10px;\"></span></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10162710";
	re2.prompt = "<p><span style=\"font-family:arial, 宋体;\"><span style=\"LINE-HEIGHT: 21px; BACKGROUND-COLOR: rgb(241,248,249)\"></span></span></p><p><strong></strong></p><div><strong><span style=\"font-size:13px;\"></span></strong></div><p></p><div><strong><span style=\"font-size:13px;\">您好，福州生活家家居欢迎您！我是您的专属家装顾问琪琪,很高兴为您服务！</span></strong></div><div><strong><span style=\"font-family:Microsoft YaHei;font-size:13px;color:#3333ff;\">友情提示：若您较忙可留下联系方式，琪琪会尽快给您回电！也 可以直接电话咨询 手机号即微信号：<span style=\"font-size:16px;\"><span style=\"CURSOR: pointer; TEXT-DECORATION: underline\">15060089037</span> QQ：3116880353</span></span></strong></div><p></p><div><strong><span style=\"font-family:Microsoft YaHei;font-size:16px;color:#3333ff;\"></span></strong></div><p><strong></strong></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10163136";
	re2.prompt = "<p class=\"lmsg_color\"><span style=\"background-color: rgb(255, 255, 255);\">您好！欢迎进入北京<span style=\"color:#ff0000;\">生活家装饰-南充分公司</span></span></p><p class=\"lmsg_color\">我是今天的专业值班客服：<span style=\"color:#ff0000;\">蒋玲</span></p><div><span style=\"font-family: Arial;\"><span style=\"font-size:13px;\">咨询【报价】拨打：</span><span style=\"color: rgb(255, 0, 0);\"><span style=\"font-size:13px;\">15828691913</span></span></span></div><div><span style=\"font-family: Arial;\"><span style=\"font-size:16px;\"><span style=\"color: rgb(255, 0, 0);\"><br /></span></span></span></div><div>网上报名业主即可<span style=\"color:#ff0000;\">专享大礼，</span>免费接送服务! !</div><div><br /></div><div><span style=\"font-size: 13px;\">更多疑问请直接拨打</span><span style=\"font-size: 13px; color: rgb(255, 0, 0);\">18113932787</span><span style=\"font-size: 13px;\">专业人员为你解答。</span><br /></div><p><br /></p><div><br /></div><div><br /></div><br />";
            re2.carousel = "1";
        re2.carousel_interval = "5";
    	re2.carousel_num = "1";
        re2.carousel_prompt1 = "";
        re2.carousel_prompt2 = "";
        re2.carousel_prompt3 = "";
        re2.carousel_prompt4 = "";
        re2.carousel_prompt5 = "";
        re2.carousel_prompt6 = "";
        re2.carousel_prompt7 = "";
        re2.carousel_prompt8 = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10163137";
	re2.prompt = "<p>您好！欢迎光临全国连锁公司【<strong><span style=\"color:#ff0000;\">生活家装饰--南充分公司</span></strong>】我是您的专属客服：<strong>欧胜兰</strong></p><p><span style=\"font-weight: bold;\">欢迎在对话框留言或致电：18284145108</span></p><p><span style=\"font-weight: bold;\">简述您的问题，小欧会更快回复！</span></p><p></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10164805";
	re2.prompt = "<p><span style=\"font-size:18px;\"></span></p><div>&nbsp;您好！欢迎光临全国品牌【生活家家居-北京站】我是客服经理向前，欢迎您的咨询。<br /></div><div><br /></div><div><strong>拎包装包含：设计+基础施工+主材+辅料+损耗+软装配饰一站式服务！同品质价格低，同价格品质高，无行业潜规则，无回扣，材料全球集采，签署环保协议，一口价零增项。<br /></strong><br />留下您的【姓名+联系方式+小区名称】即可<br />获取报价，设计方案以及当期优惠内容。<br />咨询热线：15001266722&nbsp; 向前 （可加微信）<br />报名QQ：591549296<br /><br /><br /></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10164806";
	re2.prompt = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10165094";
	re2.prompt = "<div><span style=\"font-family:Arial;font-size:16px;text-align: center; line-height: 24px; white-space: nowrap; background-color: rgb(255, 243, 225);\"></span></div><p style=\"text-align: center;\"></p><span style=\"font-family:tahoma;line-height: 13.09px; background-color: rgb(241, 248, 249);\">新年装新家，跨年抢大礼。即日起所有在线咨询预约报名业主，</span><span style=\"font-family:tahoma;font-size:18px;color:#ff00;\">到店即送</span><span style=\"font-family:tahoma;line-height: 13.09px; background-color: rgb(241, 248, 249);\">金逸影城</span><span style=\"font-family:tahoma;font-size:18px;color:#ff00;\">电影票2张</span><span style=\"font-family:tahoma;line-height: 13.09px; background-color: rgb(241, 248, 249);\">，名额有限，先到先得，详情请咨询185 0512 5540 葛牧云（微信同号）。</span><div><span style=\"font-family:Arial;font-size:16px;line-height: 24px; white-space: nowrap; background-color: rgb(255, 243, 225);\"><span style=\"font-size:16px;\"></span><br /></span></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10165674";
	re2.prompt = "<span style=\"BACKGROUND-COLOR: #ffffff\"></span><p><span style=\"color:#3366ff;BACKGROUND-COLOR: #ffffff\">欢迎光临南充生活家官方网站！</span></p><p><span style=\"color:#3366ff;BACKGROUND-COLOR: #ffffff\">生活家装饰是南充最大的装修公司，拥有6000多平米的实景体验馆，展示所有主材辅料，任您选择。一站式装修，非常省心省力。</span></p><p><span style=\"color:#3366ff;BACKGROUND-COLOR: #ffffff\">我是您的客服经理依依~</span></p><p><span style=\"color:#3366ff;BACKGROUND-COLOR: #ffffff\">电话：17780739870 </span></p><p><span style=\"color:#3366ff;BACKGROUND-COLOR: #ffffff\">QQ：475189740</span></p><p><span style=\"color:#3366ff;BACKGROUND-COLOR: #ffffff\">请问有什么可以帮助您的呢？</span><span style=\"font-family:Microsoft YaHei;\"><span style=\"font-size:13px;\"><u><br /></u></span></span></p><p>&nbsp;</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10165692";
	re2.prompt = "<span style=\"font-family: FangSong_GB2312;\"><strong><span style=\"font-size:16px;\"><span style=\"color: rgb(0, 153, 0);\">苏州生活家官网欢迎您！<strong>{53b#35#}</strong></span><br /></span><br /><span style=\"font-size: 16px;\">我是您的专属家装顾问-莎莎（电话/微信：137 3263 8135，QQ：3074 604980），如果您不喜欢打字，可以留下您的联系方式，我会立即给您解决问题哦~</span></strong></span><br />";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10165693";
	re2.prompt = "<!--StartFragment --><div>苏州生活家官网欢迎您！{53b#35#}<br /><br />我是金牌家装顾问-夏天（电话/微信：150 5085 3037，QQ：1917 860647），如果您不喜欢打字，可以留下您的联系方式，我会立即给您解决问题哦~ </div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10166149";
	re2.prompt = "欢迎咨询中国健康整装领导者--生活家装饰，您可以向我们咨询关于装修的一切疑问，同时欢迎网络预约设计师，享受更多优惠。 友情提示：如果您不方便打字，您可以拨打电话13332426490，你的专属顾问朱蒂。";
            re2.carousel = "1";
        re2.carousel_interval = "15";
    	re2.carousel_num = "1";
        re2.carousel_prompt1 = "";
        re2.carousel_prompt2 = "";
        re2.carousel_prompt3 = "";
        re2.carousel_prompt4 = "";
        re2.carousel_prompt5 = "您好，请问您是新房装修还是旧房改造？";
        re2.carousel_prompt6 = "";
        re2.carousel_prompt7 = "";
        re2.carousel_prompt8 = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10166151";
	re2.prompt = "<p><span style=\"line-height: 14px; background-color: rgb(241, 248, 249);\"><span style=\"font-family:tahoma;\">欢迎咨询生活家装饰，我是客户经理蝈蝈，很高兴为您服务！TEL:</span><span style=\"color: rgb(0, 153, 0); font-family: tahoma; background-color: rgb(255, 255, 255);\"><span style=\"color:#660000;\"><strong>18302495067</strong></span>。</span></span><span style=\"font-stretch: normal; line-height: 14px; font-family: tahoma; background-color: rgb(241, 248, 249);\">QQ: 1608853988</span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10166719";
	re2.prompt = "<p><span style=\"font-family:SimSun;font-size:24px;color:#ff0000;\"><strong>德</strong></span><span style=\"font-family:SimSun;font-size:18px;\">标样板工地参观季~ &nbsp;即日起网络报名，到店即可<strong><span style=\"color: rgb(255, 255, 0); background-color: rgb(255, 0, 0);\">免费</span></strong>领取<strong><span style=\"background-color: rgb(255, 0, 0);\"><span style=\"color:#ffff00;\">实用工具箱</span></span></strong>一套！5月品质家装，免费专车接送，带你参观不一样的德标工地，咨询热线：<strong>18351085320</strong>（可加微信）</span><br /></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10167088";
	re2.prompt = "<p><span style=\"font-size:16px;\"><strong><span style=\"color: rgb(0, 102, 0); font-family: tahoma; background-color: rgb(241, 248, 249);\">您好。我是今天的值班经理【张帅】，如果不方便打字可以直接给我打电话：</span><span style=\"color: rgb(255, 0, 0); font-family: tahoma;\">15011587429</span><span style=\"color: rgb(0, 102, 0); font-family: tahoma; background-color: rgb(241, 248, 249);\">&nbsp;&nbsp;微信：</span><span style=\"color: rgb(255, 0, 0); font-family: tahoma;\">15101001784</span><span style=\"font-family: tahoma; background-color: rgb(241, 248, 249);\"><span style=\"color:#006600;\">&nbsp;&nbsp;QQ:</span><span style=\"color:#ff0000;\">1825348296</span></span></strong></span></p><p><span style=\"font-size:16px;\"><strong><span style=\"font-family: tahoma; background-color: rgb(241, 248, 249);\"><span style=\"color:#006600;\">请问您家是多大面积呢？<br /></span><br /></span></strong></span></p><span style=\"font-size:16px;\"><strong><span style=\"font-family: tahoma; background-color: rgb(241, 248, 249);\"><span style=\"color:#ff0000;\"><br /></span></span><span style=\"color:#006600;\"><span style=\"white-space:pre\"></span></span></strong></span>";
            re2.carousel = "1";
        re2.carousel_interval = "5";
    	re2.carousel_num = "1";
        re2.carousel_prompt1 = "<strong>您好。我是今天的值班经理【张帅】，如果不方便打字可以直接给我打电话：15011587429&nbsp;&nbsp;微信：15101001784<span style=\"color:#006600;\">&nbsp;&nbsp;QQ:</span><span style=\"color:#ff0000;\">1825348296</span></strong>";
        re2.carousel_prompt2 = "<strong>请问您家是多大面积呢？</strong>";
        re2.carousel_prompt3 = "";
        re2.carousel_prompt4 = "";
        re2.carousel_prompt5 = "";
        re2.carousel_prompt6 = "";
        re2.carousel_prompt7 = "";
        re2.carousel_prompt8 = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10167451";
	re2.prompt = "";
            re2.carousel = "1";
        re2.carousel_interval = "15";
    	re2.carousel_num = "3";
        re2.carousel_prompt1 = "";
        re2.carousel_prompt2 = "";
        re2.carousel_prompt3 = "";
        re2.carousel_prompt4 = "";
        re2.carousel_prompt5 = "";
        re2.carousel_prompt6 = "";
        re2.carousel_prompt7 = "";
        re2.carousel_prompt8 = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10169564";
	re2.prompt = "<p style=\"margin: 1px 0px 0px; line-height: 21px; padding-left: 0px; font-family: arial, 宋体; font-size: 12px;\"><span style=\"font-size:18px;\">您好，欢迎您的咨询！我是今天的值班经理格格</span></p><p style=\"margin: 1px 0px 0px; line-height: 21px; padding-left: 0px; font-family: arial, 宋体; font-size: 12px;\"><span style=\"font-size: 24px;\"><span style=\"font-size:18px;\"><span style=\"color:#ff0000;\"><span style=\"font-weight: bold;\">生活家装饰高品质家装新体验，国际国内一线品牌随意选，德标工程一站式服务，专门做健康、品质拎包装！</span></span></span></span></p><p style=\"margin: 1px 0px 0px; line-height: 21px; padding-left: 0px; font-family: arial, 宋体; font-size: 12px;\"><span style=\"font-size:24px;\"><strong>目前公司样板间征集，抽奖优惠礼不停，欢迎您的咨询,预约电话：13693363610（微信）格格</strong></span></p><div style=\"top: 190px;\">﻿﻿</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10169565";
	re2.prompt = "<h1><span style=\"font-family: 'Microsoft YaHei';\"><span style=\"font-size: 16px;\"><span style=\"font-weight: normal;\">您好，生活家(北京)家居装饰有限公司&nbsp;为您提供健康生活！我是</span><span style=\"color:#ff0000;\">可可</span><span style=\"font-weight: normal;\">（电话 &nbsp;18519302278可加微信 ）您也可以留下联系方式，我们会尽快跟您联系！</span></span></span></h1>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10169705";
	re2.prompt = "<div></div><div class=\"lmsg_color\"><span style=\"font-size:16px;\"><span style=\"font-family:SimHei;\">欢迎光临<span style=\"color:#0099;\">【</span><strong><span style=\"color:#0099;\">生活家家居</span></strong><span style=\"color:#0099;\">】</span>集团官网，我是您的专属客户经理王经理，很高兴为您服务！</span><span style=\"font-family:SimHei;\">（客服热线：<span style=\"color:#ff00;\"><strong>18602070863</strong></span>）</span><a style=\"font-family: SimHei; font-weight: bold;\" href=\"http://wpa.qq.com/msgrd?v=3&amp;uin=598077488&amp;site=qq&amp;menu=yes\" target=\"_blank\"><img title=\"生活家琳达\" alt=\"生活家琳达\" src=\"http://wpa.qq.com/pa?p=2:598077488:41\" border=\"0\" /></a></span></div><div class=\"lmsg_color\"><span style=\"color:#0099;\">【</span>团购装修<span style=\"color:#0099;\">】回复 1</span><br /></div><div class=\"lmsg_color\"><div>【咨询最新活动】&nbsp;<span style=\"color:#0099;\">回复 2</span></div><div>【预约专属设计师】&nbsp;<span style=\"color:#0099;\">回复 3</span></div></div><div><div>【预约8000平米家装体验馆】<span style=\"color:#0099;\">回复4</span></div><div>【五分钟短信报价】 &nbsp;编辑短信：小区名称、户型面积、装修风格、毛坯或二次翻新【到】<strong>18602070863尽快为您回复</strong></div><div><strong><span style=\"font-size:16px;color:#ff00;\">如果您不方便打字，需要人工服务可以留下联系方式以及姓名，会尽快与您联系！</span></strong></div></div><br />";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10169706";
	re2.prompt = "<address style=\"top: 0px;\"><p style=\"line-height: 14.4px;\"><span style=\"color:#3300;background-color: rgb(255, 255, 255);\"><strong><span style=\"font-family:FangSong_GB2312;font-size:16px;\"></span></strong></span></p></address><span style=\"font-family:Microsoft YaHei;\"><span style=\"font-size:16px;\"></span></span><div><span style=\"font-family:SimHei;font-size:13px;\"></span></div><div class=\"lmsg_color\"><span style=\"font-size:10px;\"><strong><span style=\"font-family: SimHei;\">欢迎光临CCTV央视合作品牌<span style=\"color: rgb(0, 0, 153);\">【</span><span style=\"color: rgb(0, 0, 153);\">生活家家居</span><span style=\"color: rgb(0, 0, 153);\">】</span>集团官网，我是您的专属客户经理，很高兴为您服务！</span><a href=\"http://wpa.qq.com/msgrd?v=3&amp;uin=598077488&amp;site=qq&amp;menu=yes\" target=\"_blank\" style=\"font-family: SimHei;\"><img title=\"生活家琳达\" alt=\"生活家琳达\" src=\"http://wpa.qq.com/pa?p=2:598077488:41\" border=\"0\" /></a></strong></span></div><div class=\"lmsg_color\"><span style=\"font-size:10px;\"><strong><span style=\"color: rgb(0, 0, 153);\">【</span>团购装修<span style=\"color: rgb(0, 0, 153);\">】回复 1</span><br /></strong></span></div><div class=\"lmsg_color\"><div><span style=\"font-size:10px;\"><strong>【咨询最新活动】&nbsp;<span style=\"color: rgb(0, 0, 153);\">回复 2</span></strong></span></div><div><span style=\"font-size:10px;\"><strong>【预约专属设计师】&nbsp;<span style=\"color: rgb(0, 0, 153);\">回复 3</span></strong></span></div></div><div><div><span style=\"font-size:10px;\"><strong>【预约8000平米家装体验馆】<span style=\"color: rgb(0, 0, 153);\">回复4</span></strong></span></div><div><span style=\"font-size:10px;\"><strong>【五分钟短信报价】 &nbsp;编辑短信：小区名称、户型面积、装修风格、毛坯或二次翻新【到】18620767056、18602070863尽快为您回复</strong></span></div><div><span style=\"color: rgb(255, 0, 0);\"><span style=\"font-size:10px;\"><strong>如果您不方便打字，需要人工服务可以留下联系方式以及姓名，琳达会尽快与您联系！</strong></span></span></div></div><div style=\"top: 271px;\"></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10170117";
	re2.prompt = "<h4><strong><span style=\"font-size:13px;\"></span></strong>&nbsp;</h4><h4><span style=\"FONT-SIZE: 13px\"><span style=\"color:#000000;FONT-SIZE: 12px\">您好，欢迎进入生活家家居【</span><span style=\"color:#0990;FONT-SIZE: 12px\">青岛站</span><span style=\"color:#000000;\">】，</span><span style=\"font-size:24px;\"><span style=\"color:#ff0000;\">生活家五周年庆+双十二</span><span style=\"color:#ff00;\">,等待您的到来。</span></span>生活家家居致力于健康整装，<span style=\"color:#ff00;FONT-SIZE: 12px\">一站式服务，水电全含，0增项0增量，集团采购采购整合国际国内一线品牌，</span>让您花同样的钱享受更高品质的健康生活，详情咨询<span style=\"font-size:18px;\"><span style=\"color:#ff0000;\">：15953257465<span style=\"color:#3333ff;\">QQ</span>：</span><span style=\"color:#3366ff;\">981653212</span></span><span style=\"FONT-WEIGHT: bold\">如果您打字不方便可以直接来电咨询或者留下您的电话号码我即刻给您打过去。</span></span></h4><br />";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10170118";
	re2.prompt = "<h4><span style=\"FONT-SIZE: 13px\"><span style=\"COLOR: #000000; FONT-SIZE: 12px\">欢迎光临生活家家居青岛分公司，我是您的家居顾问<span style=\"font-size:18px;color:#6633ff;\">刘彦彦</span>，<span style=\"color:#ff0000;\"><u><span style=\"BACKGROUND-COLOR: #66ff99\"><span style=\"font-size:18px;\">双十二火热促销中</span>！</span></u></span><span style=\"color:#000000;\">国际国内一线品牌强势助攻</span>，大牌全球购·高品质,全线德标工程，比肩国际环保标准，工期延一天赔一千，增项全免费！让您花同样的钱享受更高品质的健康生活！</span></span></h4><h4><h4><strong>报名热线：</strong><u><span style=\"color:#ff0000;\">18660207702</span></u><strong><span style=\"color:#3366ff;\">QQ：2820225518</span></strong></h4><h4><span style=\"FONT-WEIGHT: bold\"></span>&nbsp;<span style=\"FONT-WEIGHT: bold\">如果您打字不方便可以直接来电咨询或者留下您的电话号码我即刻给您打过去。</span></h4><br /></h4>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10170248";
	re2.prompt = "<p>您好，欢迎进入生活家家居<span style=\"font-size:16px;color:#009900;\"><strong>【青岛站】，</strong></span>我是您的专属客服<span style=\"font-size:18px;color:#cc0000;\"><strong>【左璐璐】15668078957，<span style=\"color:#000000;\">生活家家居6000平体验式展馆，按照使用面积计费，0增项0增量，国内外知名品牌集团一站式采购，省心省力。欢迎咨询，如果您不方便打字，请致电15668078957</span></strong></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10170249";
	re2.prompt = "<p><strong><span style=\"font-size:13px;\">欢迎光临生活家家居青岛分公司，我是您的家居顾问<span style=\"font-size:18px;color:#cc33cc;\">张云.</span>国际国内一线品牌强势助攻，工期延一天赔一千，增项全免费!</span></strong></p><p><strong><span style=\"font-size:13px;\">预约热线：<span style=\"font-family:Arial;font-size:18px;color:#ff0000;\">13455268710</span></span></strong></p><p><strong><span style=\"FONT-SIZE: 13px\"><span style=\"FONT-SIZE: 13px\"><span style=\"FONT-WEIGHT: bold\"><span style=\"FONT-WEIGHT: bold\"><span style=\"font-size:13px;color:#000000;BACKGROUND-COLOR: rgb(255,255,255)\"><span style=\"font-size:18px;color:#cc33cc;\">QQ：976537035</span><span style=\"color:#006600;\"> </span></span></span></span><span style=\"FONT-WEIGHT: bold\"><span style=\"FONT-WEIGHT: bold\"><span style=\"font-size:13px;color:#006600;\">如果您不方便打字，您可以留个联系方式，我会尽快与您联系</span></span></span></span></span></strong></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171033";
	re2.prompt = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171035";
	re2.prompt = "<span style=\"font-size:16px;\">您好，生活家家居上海分公司欢迎您的咨询，请问有什么需要帮助的吗？</span><strong><span style=\"color:#ff0000;\">如果您不想打字，请留下您的联系方式，我们马上与您联系！</span></strong>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171804";
	re2.prompt = "您好，欢迎您的咨询，请问有什么需要帮助的吗？ ";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171806";
	re2.prompt = "<span style=\"font-size:16px;color:#330000;\">您好，欢迎访问重庆生活家装饰公司，我叫唐果，电话是<span style=\"color:#ff0000;\"><strong>185-233-91830</strong></span>，请问有什么可以帮您的呢？</span> ";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171814";
	re2.prompt = "<p></p><p><strong>您好！欢迎光临全国连锁<span style=\"background-color: rgb(255, 255, 255);\"><span style=\"color:#009900;\">【生活家装饰-重庆站】</span></span></strong></p><div><strong>1.现在即可咨询<span style=\"color:#009900;\">【当前活动】</span>详情<br />2.现在即可咨询<span style=\"color:#009900;\">【材料、报价、设计】</span>等装修问题<br />3.现在即可提前预约您喜欢的设计师<br />我是您的专属服务顾问：<span style=\"color:#ff0000;\">金丹</span></strong></div><div><strong>电话：<span style=\"color:#ff0000;\">177-8317-9721</span> &nbsp; &nbsp; QQ：<span style=\"color:#ff0000;\">1549465515 &nbsp; &nbsp; 很高兴为您服务！</span></strong></div><br />";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171816";
	re2.prompt = "欢迎咨询中国健康整装领导者——生活家装饰客服桃桃，您可以向我们咨询关于装修的一切疑问，同时欢迎网络预约设计师，享受更多优惠。 友情提示：如果您不方便打字，您可以拨打电话：138-8308-6340";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171817";
	re2.prompt = "<p><span style=\"font-size:16px;\">&nbsp;您好，我是重庆生活家装饰的<span style=\"color:#ff00;\">客户经理王明梅</span>。很高兴为您服务！<span style=\"color:#ff0000;\">生活家“拎包装6.0预售会”</span><span style=\"color:#ff00;\">&nbsp;抢定开始，&nbsp;品牌升级\\&nbsp;品质升级&nbsp;,与您同贺品质家装全球盛宴！详情咨询：13637906821（王明梅） QQ：1687821252</span></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171818";
	re2.prompt = "<p><span style=\"font-family:SimHei;font-size:16px;\">您好！生活家装饰谢林利</span><span style=\"FONT-SIZE: 18px; COLOR: #ff0000\"><span style=\"font-family:SimHei;color:#ff0000;\">（电话：13594327125，QQ:773265949）</span><span style=\"color:#ffff00;\"><span style=\"WHITE-SPACE: normal; WORD-SPACING: 0px; TEXT-TRANSFORM: none; FONT: 14px/22px 微软雅黑; LETTER-SPACING: normal; TEXT-INDENT: 0px; -webkit-text-stroke-width: 0px\"><span style=\"font-family:SimHei;font-size:16px;color:#6666cc;\"><strong>“年终</strong></span><span style=\"font-family:SimHei;font-size:16px;color:#6600cc;\"><strong>巨献，跨年狂抢~~<br /></strong></span></span></span><span style=\"FONT-SIZE: 16px\"><span style=\"font-family:SimHei;\"><span style=\"color:#3333ff;WHITE-SPACE: normal; WORD-SPACING: 0px; TEXT-TRANSFORM: none; FONT: 14px/22px 微软雅黑; LETTER-SPACING: normal; TEXT-INDENT: 0px; -webkit-text-stroke-width: 0px\"><span style=\"color:#ffff00;\">”</span><span style=\"font-size:16px;\">活动期间钜惠不断，生活家推出材料免费升级、签约送好礼等活动优惠，合同附签材料保真、环保协议：材料偷梁换柱，10倍赔偿；15个月内材料人工费用上涨，生活家全负责！</span></span><span style=\"color:#333333;\">很高兴为您服务，您是想要咨询了解装修方面的问题吗？</span></span></span></span></p><p><span style=\"font-family:SimHei;font-size:13px;color:#ff0000;\">如果您不方便打字，留下电话我们会尽快回电！</span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171819";
	re2.prompt = "<div><span style=\"FONT-FAMILY: Arial\"><span style=\"FONT-SIZE: 16px\"><span style=\"FONT-FAMILY: Microsoft YaHei; COLOR: rgb(0,0,0)\"><span style=\"FONT-FAMILY: Arial\"><span style=\"BACKGROUND-COLOR: rgb(255,255,255)\"><span style=\"COLOR: rgb(255,0,0); FONT-SIZE: 32px\"><span style=\"FONT-FAMILY: Microsoft YaHei\"><span style=\"font-size:18px;\"><span style=\"color:#000000;\"><img border=\"0\" alt=\"\" src=\"http://www17.53kf.com/img/face/53b/53b_35.gif\" />生活家装饰健康整装6.0新品荣耀上市！重庆首推按<strong><span style=\"color:#ff0000;BACKGROUND-COLOR: #ffff00\">套内净面积计价</span></strong>。主材用量<strong><span style=\"color:#ff0000;\">“十不限”、“0增项、0增量</span></strong>”，真正做到省钱省心。元旦活动全程征集<span style=\"color:#ff0000;BACKGROUND-COLOR: #ffff00\"><strong>28套样板房</strong></span>放心工程！</span></span></span></span></span></span></span></span></span><span style=\"FONT-FAMILY: Arial\"><span style=\"FONT-SIZE: 16px\"><span style=\"FONT-FAMILY: Microsoft YaHei; COLOR: rgb(0,0,0)\"><span style=\"FONT-FAMILY: Arial\"><span style=\"BACKGROUND-COLOR: rgb(255,255,255)\"><span style=\"COLOR: rgb(255,0,0); FONT-SIZE: 32px\"><span style=\"FONT-FAMILY: Microsoft YaHei\"><span style=\"font-size:18px;\"><span style=\"color:#000000;\">预约热线：<span style=\"color:#ff0000;\"><strong>15923942957&nbsp;（生活家装饰-姚芳） QQ：3201237240</strong></span></span></span></span></span></span></span></span></span></span></div><div><span style=\"FONT-FAMILY: Arial\"><span style=\"FONT-SIZE: 16px\"><span style=\"FONT-FAMILY: Microsoft YaHei; COLOR: rgb(0,0,0)\"><span style=\"FONT-FAMILY: Arial\"><span style=\"BACKGROUND-COLOR: rgb(255,255,255)\"><span style=\"COLOR: rgb(255,0,0); FONT-SIZE: 32px\"><span style=\"FONT-FAMILY: Microsoft YaHei\"><span style=\"font-size:18px;\"><span style=\"color:#000000;\"><span style=\"color:#ff0000;\"><strong><br /></strong></span>如果您不想打字可以留下您的联系方式，我们会立即给您回电！&nbsp;&nbsp; <br />&gt;&gt;&gt;对话已接通，欢迎咨询&gt;&gt;&gt;<br />（交谈中请勿关闭此窗口）</span></span></span></span></span></span></span></span></span></div><pre style=\"TOP: 349px\">&gt;&gt;&gt;对话已接通，欢迎咨询&gt;&gt;&gt;</pre><pre style=\"TOP: 349px\">（交谈中请勿关闭此窗口）</pre>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171821";
	re2.prompt = "<p><span style=\"font-size:24px;color:#000000;WHITE-SPACE: normal; WORD-SPACING: 0px; TEXT-TRANSFORM: none; FLOAT: none; FONT: 12px 微软雅黑, 'MS Sans Serif', sans-serif; DISPLAY: inline !important; LETTER-SPACING: normal; TEXT-INDENT: 0px; -webkit-text-stroke-width: 0px\"><span style=\"font-size:13px;\">您好！生活家装饰是重庆最大的整装公司！</span><span style=\"color:#ff0000;\"><span style=\"font-size:16px;\">首推按套面净面积收费，十项材料包干，有效杜绝后期增项增量</span>！</span><span style=\"font-size:13px;\">从而有效控制装修预算,全方位呵护您及家人的健康,</span></span></p><p><span style=\"WHITE-SPACE: normal; WORD-SPACING: 0px; TEXT-TRANSFORM: none; FLOAT: none; COLOR: #000000; FONT: 12px 微软雅黑, 'MS Sans Serif', sans-serif; DISPLAY: inline !important; LETTER-SPACING: normal; TEXT-INDENT: 0px; -webkit-text-stroke-width: 0px\"><span style=\"BACKGROUND-COLOR: #ffffff\"><span style=\"FONT-SIZE: 24px\"><span style=\"font-size:13px;\"><span style=\"color:#000000;WHITE-SPACE: normal; WORD-SPACING: 0px; TEXT-TRANSFORM: none; FLOAT: none; FONT: 12px 微软雅黑, 'MS Sans Serif', sans-serif; DISPLAY: inline !important; LETTER-SPACING: normal; TEXT-INDENT: 0px; -webkit-text-stroke-width: 0px\">我是</span><span style=\"color:#000000;WHITE-SPACE: normal; WORD-SPACING: 0px; TEXT-TRANSFORM: none; FONT: 12px 微软雅黑, 'MS Sans Serif', sans-serif; LETTER-SPACING: normal; TEXT-INDENT: 0px; -webkit-text-stroke-width: 0px\"><span style=\"BACKGROUND-COLOR: rgb(255,255,0)\"><strong>重庆生活家</strong></span></span></span><span style=\"color:#000000;WHITE-SPACE: normal; WORD-SPACING: 0px; TEXT-TRANSFORM: none; FLOAT: none; FONT: 12px 微软雅黑, 'MS Sans Serif', sans-serif; DISPLAY: inline !important; LETTER-SPACING: normal; TEXT-INDENT: 0px; -webkit-text-stroke-width: 0px\"><span style=\"font-size:13px;\">装饰的客户经理王小会（</span><span style=\"font-size:16px;color:#ff0000;\">电话：183-2414-2312，QQ：1151484668)，</span>很高兴为您服务!</span><br style=\"WHITE-SPACE: normal; WORD-SPACING: 0px; TEXT-TRANSFORM: none; COLOR: rgb(0,0,0); FONT: 12px 微软雅黑, 'MS Sans Serif', sans-serif; LETTER-SPACING: normal; BACKGROUND-COLOR: rgb(255,237,196); TEXT-INDENT: 0px; -webkit-text-stroke-width: 0px\" /><span style=\"color:#000000;WHITE-SPACE: normal; WORD-SPACING: 0px; TEXT-TRANSFORM: none; FLOAT: none; FONT: 12px 微软雅黑, 'MS Sans Serif', sans-serif; DISPLAY: inline !important; LETTER-SPACING: normal; TEXT-INDENT: 0px; -webkit-text-stroke-width: 0px\">如果您不方便打字，可以留一个您的联系方式。我稍后将于您取得联系为您详细介绍<span style=\"font-size:16px;\">。&lt;&lt;交谈中请勿关闭对话窗口&gt;&gt;</span></span></span></span></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171822";
	re2.prompt = "<span style=\"font-size:13px;\">您好！欢迎光临全国连锁【生活家装饰-重庆站】<br />1.现在即可咨询【当前活动】详情<br />2.现在即可咨询【材料、报价、设计】等装修问题<br />3.现在即可提前预约您喜欢的设计师<br />我是您的专属服务顾问：<strong>唐利赠</strong><br />电话：<span style=\"color:#ff0000;\"><strong>136-6805-0221</strong> &nbsp;</span> QQ：<span style=\"color:#ff0000;\"><strong>1366300363</strong></span> &nbsp; 很高兴为您服务！</span>&nbsp;";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171826";
	re2.prompt = "<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 您好！我是重庆生活家装饰的客户经理<span style=\"color:#000000;\">王亮（电话：13512367392，QQ：1270049696</span>），请问有什么可以帮您的吗？</strong></p><p><strong><span style=\"color:#ff0000;\"><u>如果您这会不方便打字，也可以留一个您的联系方式，我们会尽快给您回复，谢谢！&nbsp;</u></span></strong></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171827";
	re2.prompt = "<span style=\"color:#000000;TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(241,248,249); TEXT-INDENT: 0px; DISPLAY: inline !important; FONT: 12px/14px tahoma; WHITE-SPACE: normal; FLOAT: none; LETTER-SPACING: normal; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\"></span><div>您好！欢迎光临全国品牌<span style=\"color:#33cc00;\"><strong>【生活家家居-重庆站】</strong></span>我是客服经理小张，欢迎您的咨询。<br /></div><div><br /></div><div><strong>整装包含：设计+基础施工+主材+辅料+损耗一站式服务！同品质价格低，同价格品质高，无行业潜规则，无回扣，材料全球集采，签署环保协议，一口价零增项。<br /></strong><br />留下您的【姓名+联系方式+小区名称】即可获取报价，设计方案以及当期优惠内容。<br />咨询热线：<span style=\"color:#33cc00;CURSOR: pointer; FONT-WEIGHT: bold; TEXT-DECORATION: underline\">13640520003</span>&nbsp;张弟均 （可加微信）<br />报名QQ：<strong><span style=\"color:#33cc00;\">2386562323<br /></span><br /></strong></div><p>&nbsp;</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171829";
	re2.prompt = "<p><span style=\"font-size:13px;\"></span></p><p><span class=\"txt\"></span>您好，欢迎光临全国连锁装企品牌【生活家家居-重庆站】<br />1，本窗口可咨询<span style=\"BACKGROUND-COLOR: rgb(255,255,255)\"><span style=\"color:#990000;\"><strong>【当前优惠活动】</strong></span></span><br />2，本窗口可咨询<strong><span style=\"color:#990000;\">【材料，报价，施工，设计】</span></strong>等装修问题<br />3，本窗口可预约您喜欢的设计师</p><p>如网络不稳定请加<strong><span style=\"color:#330099;\">QQ：3245194355</span></strong>或拨打<strong><span style=\"color:#330099;\">免费咨询电话：18983097138（龙莉）</span></strong>进行咨询！</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10172100";
	re2.prompt = "<div>&nbsp;<strong>您好！欢迎光临全国连锁<span style=\"color:#33cc00;\">【生活家装饰-重庆站】</span><br />1.现在即可咨询<span style=\"color:#33ff33;\">【当前活动】</span>详情<br />2.现在即可咨询<span style=\"color:#33ff33;\">【材料、报价、设计】等装修问题</span><br />3.现在即可提前预约您喜欢的设计师<br />我是您的专属服务顾问：<span style=\"color:#009900;\">汤明娟 &nbsp;</span> 电话：<span style=\"color:#ff00;\"><span style=\"font-size:16px;\">136-0834-6129 </span><span style=\"font-size:16px;\">（微信同号）</span><span style=\"font-size:16px;\">QQ：3085722458</span></span></strong><br /></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10172243";
	re2.prompt = "<p><span style=\"font-size: 13px;\">&nbsp;您好！请问有什么可以帮助你的吗？</span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10172248";
	re2.prompt = "<p><span style=\"font-size:16px;\">您好！欢迎光临全国品牌【生活家（北京）家居装饰有限公司】</span> &nbsp;我们的设计以客户为导向，根据不同业主的需求、喜好、文化背景等，打造适合于个人的专属定制方案。如果你也是爱家、懂生活的人，欢迎前来咨询预约，寻找属于自己的新家。速算报价：留下【<span style=\"color:#cc0000;\">姓名+联系方式+小区+风格需求</span>】即可。咨询电话：15911076838(微信同号）QQ；1833395996<br /></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10172466";
	re2.prompt = "您好，欢迎您的咨询，请问有什么可以帮助您的吗？";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10172534";
	re2.prompt = "<p>欢迎光临全国装修品牌【生活家家居】-合肥站<br /><br /><br />1.新品全新上线【拎包装、一键整体家装，让装修像买包包一样简单】<br /><br /><br />2.现在即可咨询【报价、材料、设计等装修问题】<br /><br /><br />3.现在即可提前预约您喜欢的设计师<br /><br /><br />我您的专属顾问：吴兵，可以直接<br /><br /><br />电话咨询：15255159260<br /><br /><br />QQ：409623704<br /></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10172563";
	re2.prompt = "<span style=\"font-size:13px;\">您好，我是重庆生活家装饰您的专属客户经理何丽娜。</span>很高兴为您服务！&nbsp;生活家“<strong><span style=\"font-size:18px;color:#ff0000;\">年终巨献 跨年狂抢</span></strong>” 特推出家装珍藏版 品牌升级 品质升级 升级不加价 超级豪礼等您领。 与您同贺品质家装全球盛宴！更多优惠详情咨询：<strong><span style=\"font-size:18px;color:#ff0000;\">15111880113qq</span>：<span style=\"font-size:16px;color:#ff0000;\">1935322081</span></strong>《交谈中请勿关闭窗口》 ";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10174144";
	re2.prompt = "<div><img alt=\"\" src=\"file:///C:/Users/asdfgh/Documents/Tencent%20Files/2103370582/Image/Group/%25$_(7EX%7B1DFZQD$4(O)79[T.gif\" />生活家装饰健康整装6.0新品荣耀上市！重庆首推按套内净面积计价。主材用量“十不限”、“0增项、0增量”，真正做到省钱省心。元旦活动全程征集28套样板房放心工程！预约热线：<strong><span style=\"font-size:16px;\"><span style=\"color:#33ccff;\">189-8317-3269</span>（生活家装饰-<span style=\"color:#00cccc;\">文驷尧</span>）</span></strong>&nbsp;QQ：<span style=\"font-size:16px;color:#009900;\">2103370582</span><br />如果您不想打字可以留下您的联系方式，我们会立即给您回电！<br />&gt;&gt;&gt;对话已接通，欢迎咨询&gt;&gt;&gt;<br />（交谈中请勿关闭此窗口） </div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10174909";
	re2.prompt = "<p><span style=\"color:#ff0000;\">您好！欢迎光临全国连锁【生活家装饰-重庆站】</span><br />1.现在即可咨询【当前活动】详情<br />2.现在即可咨询【材料、报价、设计】等装修问题<br />3.现在即可提前预约您喜欢的设计师<br /><strong>我是您的专属服务顾问：谢雪雪 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;电话：</strong>157-2321-2926 <strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</strong>QQ:2469928284 &nbsp;<strong>&nbsp; &nbsp; &nbsp;<span style=\"color:#ff0000;\">&nbsp; </span>很高兴为您服务！</strong><br /></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10174910";
	re2.prompt = "<p><strong></strong></p>您好！欢迎光临全国连锁【生活家装饰-重庆站】<br />1.现在即可咨询【当前活动】详情<br />2.现在即可咨询【<span style=\"color:#cc0000;\"><strong>材料、报价、设计</strong></span>】等装修问题<br />3.现在即可提前预约您喜欢的设计师<br /><p>我是您的专属服务顾问：冉孟娟。</p><p>电话：15870571373 QQ:3065124781 &nbsp;很高兴为您服务！</p><p><span style=\"font-weight: bold;\"></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10174917";
	re2.prompt = "您好，欢迎访问生活家官方网站，我是您的专属家装顾问<span style=\"color:#000000;BACKGROUND-COLOR: #ffffff\">周老师（电话：023-67767767），</span>请问有什么可以帮您的吗？ ";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10175115";
	re2.prompt = "<img src=\"../upload/xheditor/9006234/cyy/201605191412418431.jpg\" height=\"150\" width=\"350\" alt=\"\" /><br />";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10175117";
	re2.prompt = "<span style=\"color: rgb(255, 95, 83); font-family: 微软雅黑, 宋体, Arial; font-size: 18px; line-height: 20px;\">您好，感谢关注【生活家家居-武汉站】,请问您家是哪个小区的房子咨询<span style=\"color: rgb(255, 95, 83); font-family: 微软雅黑, 宋体, Arial; font-size: 18px; line-height: 20px;\">装修</span>呢?#</span><span style=\"color: rgb(255, 95, 83); font-family: 微软雅黑, 宋体, Arial; font-size: 18px; line-height: 20px;\">全国连锁公司，集团全球采购</span><span style=\"color: rgb(255, 95, 83); font-family: 微软雅黑, 宋体, Arial; font-size: 18px; line-height: 20px;\">，详情咨询，吴聪15971401041#</span>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10175118";
	re2.prompt = "<p><span style=\"font-size:18px;\">您好，请问您房子在哪个小区？多大面积呢？我帮您查下我们公司是否有做过！</span></p><p><span style=\"font-size:18px;\">友情提示：如果您不方便打字，您可以拨打电话<strong><span style=\"font-size:32px;color:#ff0000;\">13419649223 洪敏</span></strong>或留下您的联系方式！ <br /></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10175119";
	re2.prompt = "<p>生活家家居武汉分公司专职客服经理程灿锋，真诚为您服务：</p><p><span style=\"font-family:Microsoft YaHei;font-size:18px;color:#ff0000;\"><strong>TEL:15827455141</strong></span></p><p><span style=\"font-family:Microsoft YaHei;font-size:18px;color:#3333ff;\"><strong>QQ:1051249910</strong></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10175120";
	re2.prompt = "您好！请问您是旧房改造，还是新房装修呢？??";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10175978";
	re2.prompt = "<p><span style=\"color:#33cc00;\"><span style=\"font-size:13px;\"><strong>苏州生活家官网欢迎您！{</strong></span>53b#35#}</span><br /><strong><span style=\"font-size:13px;\">我是您的专属家装顾问-高兴（电话/微信：178 0259 9520，QQ：20 3835 7225， 如果您不喜欢打字，可以留下您的联系方式，我会立即给您解决问题哦~<br /></span></strong></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10177240";
	re2.prompt = "您好，欢迎您的咨询，请问有什么需要帮助的吗？";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10177470";
	re2.prompt = "<p class=\"p\" style=\"PADDING-BOTTOM: 0pt; PADDING-TOP: 0pt; PADDING-LEFT: 0pt; MARGIN: 0.75pt 0pt; LINE-HEIGHT: 140%; PADDING-RIGHT: 0pt; -ms-word-break: break-all; mso-pagination: widow-orphan\"><span style=\"font-family:宋体;color:#000000;FONT-SIZE: 14pt; BACKGROUND: rgb(255,255,255); FONT-WEIGHT: normal\">【</span><span style=\"font-family:宋体;color:#000000;FONT-SIZE: 14pt; BACKGROUND: rgb(255,255,255); FONT-WEIGHT: normal\">杭州生活家</span><span style=\"font-family:宋体;color:#000000;FONT-SIZE: 14pt; BACKGROUND: rgb(255,255,255); FONT-WEIGHT: normal\">】</span><span style=\"font-family:宋体;color:#000000;FONT-SIZE: 10.5pt; BACKGROUND: rgb(255,255,255); FONT-WEIGHT: normal\">开业珍藏版限量发售，</span><strong>“O增项、无延期”</strong><span style=\"font-family:宋体;color:#000000;FONT-SIZE: 10.5pt; BACKGROUND: rgb(255,255,255); FONT-WEIGHT: normal\">是全国最大的一家健康整装公司，健康家装领导者，我们只做</span><strong>环保家装</strong><span style=\"font-family:宋体;color:#000000;FONT-SIZE: 10.5pt; BACKGROUND: rgb(255,255,255); FONT-WEIGHT: normal\">，</span><span style=\"font-family:宋体;color:#000000;FONT-SIZE: 10.5pt; BACKGROUND: rgb(255,255,255); FONT-WEIGHT: normal\">杭城首家</span><strong>硬软装一体化</strong><span style=\"font-family:宋体;color:#000000;FONT-SIZE: 10.5pt; BACKGROUND: rgb(255,255,255); FONT-WEIGHT: normal\">的家装模式，</span><span style=\"font-family:宋体;color:#000000;FONT-SIZE: 10.5pt; BACKGROUND: rgb(255,255,255); FONT-WEIGHT: normal\">生活家—&nbsp;</span><span style=\"font-family:宋体;color:#000000;FONT-SIZE: 10.5pt; BACKGROUND: rgb(255,255,255); FONT-WEIGHT: normal\">提供</span><span style=\"font-family:宋体;color:#000000;FONT-SIZE: 10.5pt; BACKGROUND: rgb(255,255,255); FONT-WEIGHT: normal\">极致性价比;</span><span style=\"font-family:宋体;color:#000000;FONT-SIZE: 10.5pt; BACKGROUND: rgb(255,255,255); FONT-WEIGHT: normal\">我是</span><span style=\"font-family:宋体;color:#000000;FONT-SIZE: 10.5pt; BACKGROUND: rgb(255,255,255); FONT-WEIGHT: normal\">您的专属客户经理：</span><span style=\"font-family:宋体;color:#000000;FONT-SIZE: 10.5pt; BACKGROUND: rgb(255,255,255); FONT-WEIGHT: normal\">小何（九儿）</span><span style=\"font-family:宋体;color:#000000;FONT-SIZE: 10.5pt; BACKGROUND: rgb(255,255,255); FONT-WEIGHT: normal\">，您</span><span style=\"font-family:宋体;color:#000000;FONT-SIZE: 10.5pt; BACKGROUND: rgb(255,255,255); FONT-WEIGHT: normal\">如果</span><span style=\"font-family:宋体;color:#000000;FONT-SIZE: 10.5pt; BACKGROUND: rgb(255,255,255); FONT-WEIGHT: normal\">打字不方便的话，可以直接给我</span><span style=\"font-family:宋体;color:#000000;FONT-SIZE: 10.5pt; BACKGROUND: rgb(255,255,255); FONT-WEIGHT: normal\">&nbsp;</span><span style=\"font-family:宋体;color:#000000;FONT-SIZE: 10.5pt; BACKGROUND: rgb(255,255,255); FONT-WEIGHT: normal\">来电</span><span style=\"font-family:宋体;color:#000000;FONT-SIZE: 10.5pt; BACKGROUND: rgb(255,255,255); FONT-WEIGHT: normal\">、</span><span style=\"font-family:宋体;color:#000000;FONT-SIZE: 10.5pt; BACKGROUND: rgb(255,255,255); FONT-WEIGHT: normal\">微信</span><span style=\"font-family:宋体;color:#000000;FONT-SIZE: 10.5pt; BACKGROUND: rgb(255,255,255); FONT-WEIGHT: normal\">：;</span><strong>13736202783</strong><span style=\"font-family:宋体;color:#000000;FONT-SIZE: 10.5pt; BACKGROUND: rgb(255,255,255); FONT-WEIGHT: normal\">,&nbsp;</span><span style=\"font-family:宋体;color:#000000;FONT-SIZE: 12pt; BACKGROUND: rgb(255,255,255); FONT-WEIGHT: normal\">QQ</span><span style=\"font-family:宋体;color:#000000;FONT-SIZE: 10.5pt; BACKGROUND: rgb(255,255,255); FONT-WEIGHT: normal\">:</span><strong>1195082246<o:p></o:p></strong></p><p style=\"FONT-FAMILY: 宋体; COLOR: rgb(0,0,0)\"><span style=\"font-size:18px;\">或者留下您的联系方式，第一时间跟您沟通~</span>??</p><div style=\"TOP: 0px\">??</div>";
            re2.carousel = "1";
        re2.carousel_interval = "15";
    	re2.carousel_num = "1";
        re2.carousel_prompt1 = "<div style=\"TOP: 0px\">【杭州生活家】开业珍藏版限量发售，<span style=\"font-size:16px;color:#cc0000;\"><strong>“O增项、无延期”</strong></span>是全国连锁的一家健康整装公司，我们只做环保家装，杭城硬软装一体化的家装模式，我是您的专属客服：<strong><em><span style=\"font-size:16px;color:#ff0000;\">阿宁</span></em></strong>，您如果打字不方便的话，可以直接给我 <em><span style=\"font-size:16px;color:#ff0000;\"><strong>来电、微信：15168329646 QQ:1061478384</strong></span></em></div>";
        re2.carousel_prompt2 = "我是咱们这边家装客户经理<span style=\"color:#ff0000;\"><strong>阿宁</strong></span>，您这边需要帮您介绍下公司的整装材料 优惠 设计 价格 施工吗？{53b#30#} ";
        re2.carousel_prompt3 = "";
        re2.carousel_prompt4 = "";
        re2.carousel_prompt5 = "";
        re2.carousel_prompt6 = "";
        re2.carousel_prompt7 = "";
        re2.carousel_prompt8 = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10177474";
	re2.prompt = "<p></p><h2></h2><h4></h4><h3><span style=\"color:#009900;\">【杭州生活家】</span><strong>开业珍藏版限量发售，<span style=\"color:#ff0000;\">“O<span style=\"font-family:宋体;\">增项、无延期</span><span style=\"font-family:Times New Roman;\">”</span></span>是全国最大的一家健康整装公司，健康家装领导者，我们只做<span style=\"color:#009900;\">环保家装</span>，杭城首家<span style=\"color:#000099;\">硬软装一体化</span>的家装模式，生活家— 提供极致性价比;我是您的专属客户经理：<span style=\"color:#ff6600;\">明月</span>，您如果打字不方便的话，可以直接给我 来电：<u>18767157019<br /></u></strong></h3><strong>微信、QQ:1198534170</strong><br /><p></p><p></p><br />";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10177475";
	re2.prompt = "<p>杭州生活家开业珍藏版限量发售，“<strong><em><span style=\"font-size:18px;color:#ff0000;\">0增项、无延期</span></em></strong>”全国第一家整装公司，极致性价比</p><p>您的专属<span style=\"font-size:18px;color:#ff0000;\">跑堂</span>：小陈，为您服务，电话/微信：18267352112，QQ:2280951855</p><p><span style=\"font-family:SimHei;font-size:13px;\"><em>如果您不方便打字，可以留下联系方式，我会尽快联系您，为您解答</em></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10177720";
	re2.prompt = "<div>&nbsp;杭州生活家开业珍藏版限量发售，<br /><span style=\"font-size: 16px;\"><strong><span style=\"color:#ff0000;\">“O增项、无延期”</span></strong></span><br />生活家健康整装公司专属顾问：微微，可以直接给我来电：18658113799，微信：18658113799<br /></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10177723";
	re2.prompt = "<p></p><p>您好！欢迎光临全国连锁【<strong><span style=\"color:#ff0000;\">生活家装饰-杭州站</span></strong>】</p><p>1.现在即可咨询【<strong><span style=\"color:#ff0000;\">当前活动</span></strong>】详情</p><p>2.现在即可咨询【<strong><span style=\"color:#ff0000;\">材料、设计、报价</span></strong>】装修问题</p><p>3.现在即提前<strong><span style=\"color:#ff0000;\">预约您喜欢的设计师</span></strong></p><p>我是您专属装修顾问：<strong><span style=\"color:#ff0000;\">唯曼</span></strong></p><p>欢迎来电咨询： <strong><span style=\"color:#000099;\">15925603867，QQ954093447 同微信</span></strong></p><p></p>";
            re2.carousel = "1";
        re2.carousel_interval = "15";
    	re2.carousel_num = "1";
        re2.carousel_prompt1 = "杭州生活家珍藏版限量发售<strong><span style=\"color:#ff0000;\">“O增项、无延期</span>”全国集团化<span style=\"color:#ff0000;\">家整装公司</span></strong>，生活家 极致性价比您的专属家装顾问：唯曼，欢迎来电咨询： 15925603867，QQ954093447同微信。";
        re2.carousel_prompt2 = "杭州生活家官网欢迎您咨询，我是您的专属家装顾问：唯曼，欢迎来电咨询： 715925603867，QQ95409344同微信";
        re2.carousel_prompt3 = "欢迎咨询中国<strong><span style=\"color:#ff0000;\">健康整装</span></strong>——生活家装饰客服，您可以向我们咨询关于装修的一切疑问，同时欢迎网络预约设计师，享受更多优惠。 友情提示：欢迎来电咨询：<strong> 15925603867，QQ954093447</strong>同微信";
        re2.carousel_prompt4 = "<ul id=\"content_20362160207\"><li class=\"Customer Air customer_right\"><p>您好！欢迎光临全国连锁【<strong><span style=\"color: rgb(255, 0, 0);\">生活家装饰-杭州站</span></strong>】</p><p>1.现在即可咨询【<strong><span style=\"color: rgb(255, 0, 0);\">当前活动</span></strong>】详情</p><p>2.现在即可咨询【<strong><span style=\"color: rgb(255, 0, 0);\">材料、设计、报价</span></strong>】装修问题</p><p>3.现在即提前<strong><span style=\"color: rgb(255, 0, 0);\">预约您喜欢的设计师</span></strong></p><p>我是您专属装修顾问：<strong><span style=\"color: rgb(255, 0, 0);\">唯曼</span></strong></p><p>欢迎来电咨询： <strong><span style=\"color: rgb(0, 0, 153);\">15925603867，QQ954093447 同微</span></strong></p></li></ul>";
        re2.carousel_prompt5 = "";
        re2.carousel_prompt6 = "";
        re2.carousel_prompt7 = "";
        re2.carousel_prompt8 = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10177724";
	re2.prompt = "<p></p><p>杭州生活家<strong>开业珍藏版</strong>限量发售，“O增项、无延期”</p><p>全国第一家整装公司，生活家— 极致性价比</p><p>&nbsp;您的专属<strong>小棉袄</strong>：<span style=\"color:#ff0000;\"><strong>艾希</strong></span>，可以直接给我来电：<span style=\"font-family:Arial;\">&nbsp;<span style=\"color:#ff0000;\"><strong>18367177836</strong></span></span><u><span style=\"color:#ff0000;\"><strong>，<span style=\"font-family:Arial;\">QQ:1031369548 同微信</span></strong></span></u></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10177738";
	re2.prompt = "杭州生活家开业珍藏版限量发售，<span style=\"font-family:SimSun;font-size:16px;color:#ff0000;\"><strong> “O增项、无延期”</strong></span><br />全国第一家健康整装公司，生活家— 极致性价比<br /><br /><br />&nbsp;您的专属小棉袄：辛巴，可以直接给我来电：13777407921 QQ:741406677";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10178012";
	re2.prompt = "<span style=\"font-size:18px;\">欢迎咨询健康整装——<span style=\"color:#cc0000;\"><strong>生活家装饰</strong></span>—重庆站！您可以向我们咨询关于装修的一切疑问，同时欢迎网络预约设计师，享受更多优惠。 友情提示：如果您不方便打字，可以留下您的电话，我们马上安排工作人员与您通话。您也可以拨打咨询热线：<span style=\"color:#ff0000;\"><strong>13996012771（李利） QQ：2911625513</strong></span></span> ";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10178013";
	re2.prompt = "<p style=\"font-family: 宋体;\"><span style=\"color: rgb(0, 0, 0); font-size: 14px;\">【杭州生活家】开业珍藏版限量发售，“<span style=\"font-size:18px;color:#ff0000;\">O增项、无延期</span>”是全国最大的一家健康整装公司，健康家装领导者，我们只做环保家装，杭城首家<span style=\"font-size:18px;color:#3366ff;\">硬软装一体化</span>的家装模式，生活家—&nbsp;提供极致性价比;我是您的专属客户经理：</span><span style=\"color:#33cc00;\"><span style=\"font-size: 18px;\">安琪</span></span><span style=\"font-size: 14px;\">，您如果打字不方便的话，可以直接给我来电，电话(微信)</span><span style=\"color: rgb(0, 0, 0); font-size: 16px;\"><strong>：13186985528，</strong></span><span style=\"font-size: 14px;\">&nbsp;QQ：</span><strong><span style=\"font-size:16px;\">277657549</span></strong></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10178843";
	re2.prompt = "<p><span style=\"font-family:KaiTi_GB2312;font-size:18px;\"><strong>杭州生活家开业珍藏版限量发售，</strong></span></p><p><span style=\"font-family:KaiTi_GB2312;font-size:18px;\"><strong>“<span style=\"color:#ff0000;\">O增项、无延期</span>”</strong></span></p><p><span style=\"font-family:KaiTi_GB2312;font-size:18px;\"><strong>全国第一家整装公司，生活家&nbsp;极致性价比</strong></span></p><p><span style=\"font-family:KaiTi_GB2312;font-size:18px;\"><strong>您的专属家装顾问：<span style=\"color:#ff0000;\">天天</span></strong></span></p><p><span style=\"font-family:KaiTi_GB2312;font-size:18px;\"><strong>欢迎来电咨询：<span style=\"color: rgb(255, 0, 0);\">18969027740（微信） &nbsp; QQ 1923279142 </span>&nbsp;&nbsp;&nbsp;</strong></span></p><p><br /></p><div style=\"top: 48px;\">??</div>";
            re2.carousel = "1";
        re2.carousel_interval = "15";
    	re2.carousel_num = "1";
        re2.carousel_prompt1 = "<span style=\"font-size:24px;color:#33cc00;\">杭州生活家</span>珍藏版限量发售<span style=\"font-size:24px;color:#ff0000;\">“0增项 无延期”</span> 全国健康整装公司，生活家 极致性价比您的专属家装顾问：<strong><span style=\"font-size:24px;\"><span style=\"color:#cc0000;\">天天</span> </span></strong>，欢迎来电咨询：<span style=\"font-size:18px;color:#ff0000;\">18969027740</span> &nbsp;（微信） &nbsp;QQ:1923279142 &nbsp;&nbsp;";
        re2.carousel_prompt2 = "<span style=\"font-size:24px;color:#33cc00;\">杭州生活家</span>官网欢迎您咨询，我是您的专属家装顾问：<span style=\"font-size:18px;color:#ff0000;\"><span style=\"background-color: rgb(255, 255, 255);\">天天</span></span>，欢迎来电咨询：<span style=\"font-size:18px;color:#cc0000;\">18969027740 &nbsp;</span>（微信） &nbsp;QQ:1923279142 &nbsp;&nbsp;";
        re2.carousel_prompt3 = "<span style=\"font-size:24px;color:#33cc00;\">欢迎咨询中国健康整装领导者——生活家装饰客服</span>，您可以向我们咨询关于装修的一切疑问，同时欢迎网络预约设计师，享受更多优惠。 友情提示：欢迎来电咨询：<span style=\"font-size:18px;color:#ff0000;\">18969027740 &nbsp;</span>（微信） &nbsp;QQ:1923279142 &nbsp;&nbsp;";
        re2.carousel_prompt4 = "您好！欢迎光临全国连锁<span style=\"font-size:24px;color:#33cc00;\">【生活家装饰-杭州站】</span><br />1.现在即可咨询【当前活动】详情<br />2.现在即可咨询【材料、设计、报价】装修问题<br />3.现在即提前预约您喜欢的设计师<br />我是您专属装修顾问：<span style=\"font-size:18px;background-color: rgb(255, 0, 0);\">天天</span><br />欢迎来电咨询：<span style=\"font-size:18px;color:#ff0000;\"><strong>18969027740</strong></span> &nbsp;（微信） &nbsp;QQ:1923279142 &nbsp;&nbsp;";
        re2.carousel_prompt5 = "";
        re2.carousel_prompt6 = "";
        re2.carousel_prompt7 = "";
        re2.carousel_prompt8 = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10178844";
	re2.prompt = "<p><span style=\"font-family:KaiTi_GB2312;\"><span style=\"font-size:16px;\">您好，欢迎光临生活家家居杭州官网，生活家是一家完全的拎包入住，健康整装的公司，内容包含所有<span style=\"color:#cc0000;\">水电改</span><span style=\"color:#cc0000;\">造、辅材、主材、家具、灯饰、软装和部</span><span style=\"color:#cc0000;\">分电器</span></span></span></p><p>产品优势：极致性价比、零增项、无延期。我是生活家装修顾问-艾达，很高兴为您服务！</p><p><span style=\"color:#cc0000;\"><span style=\"color: rgb(204, 0, 0);\"><strong>电话13732274709 &nbsp;QQ305350973</strong></span></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10179467";
	re2.prompt = "<p>您好，欢迎光临全国品牌<span style=\"font-size:16px;color:#ff0000;\">【生活家家居-成都站】</span></p><p>1.现在即可咨询<span style=\"font-size:18px;color:#ff0000;\">【最新优惠】</span>活动详情</p><p>2现在即可咨询<span style=\"font-size:18px;color:#ff0000;\">【报价、材料、设计等装修问题】</span></p><p>3<span style=\"font-size:18px;color:#ff0000;\">【拎包装震撼上线-30分钟家装实景效果呈现】</span>欢迎咨询</p><p>4现在即可提前预约您喜欢的设计师</p><p>我是您的专属服务顾问：<span style=\"font-size:16px;color:#ff0000;\"><strong>谢世兵</strong></span>，可以直接来电咨询</p><p><span style=\"font-size:16px;color:#ff0000;\"><strong>TEL:18602839290， QQ：303945153</strong></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180239";
	re2.prompt = "<div><strong><span style=\"font-size:16px;\">您好！欢迎光临全国品牌【<span style=\"color:#ff0000;\">生活家家居-北京站</span>】</span></strong></div><div><strong><span style=\"font-size:16px;\"><strong>&nbsp;我是今天的值班经理【张士兵】</strong><br />央视合作装修品牌，样板间征集，欢迎您的咨询。<br />热线：<span style=\"color:#ff0000;\"><u><strong>13301292992</strong></u></span><span style=\"color:#ff0000;\">（微信同步）<br /></span>QQ:<span style=\"color:#ff0000;\"><u>910600267</u></span></span></strong></div><div><strong><span style=\"font-size:16px;\"><span style=\"color:#330000;\">&nbsp; &nbsp;请问您家是多大面积那个小区的呢？</span></span></strong></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180382";
	re2.prompt = "<p>您好，欢迎进入生活家装饰官方网站，客服：小毕，很高兴为您服务<span style=\"BACKGROUND-COLOR: rgb(255,255,255)\">。<strong><span style=\"font-size:16px;\">（咨询电话：15288134759<span style=\"color:#0990;\"> </span>&nbsp;QQ：1301687712）</span></strong></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180459";
	re2.prompt = "<p></p><p>您好，我是生活家装饰太原分公司值班客户经理。欢迎您对生活家咨询了解！目前太原分公司一周年活动进行中——超级折扣，0利息0首付定装修，砸金蛋抢电器，油烟灶具免费送，金牌管家使用权，高端材料免费升级六大签单礼等您来拿。</p><p><strong><span style=\"font-size:18px;\"></span></strong>&nbsp;</p><p></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180468";
	re2.prompt = "<div>&nbsp;您好，欢迎您进入生活家家居太原分公司网站，很高兴为您服务。我是今天服务您的专属客服珮璇。电话18003549040您是想要咨询了解装修方面的问题吗？<br /></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180469";
	re2.prompt = "<p>您好，欢迎您咨询CCTV央视合作品牌【生活家装饰-太原站】<br />&nbsp;我是值班客户经理李吉琛【樱木】，很高兴为您服务。目前太原分公司一周年店庆活动进行中——6重好礼等您享【超级折扣，0利息0首付定装修，砸金蛋抢家电，老板油烟灶具免费送，金牌管家使用权，高端材料免费升级】<br />详细咨询欢迎来电：155-1302-1130（微信、QQ）:798916753<br />&nbsp;打我电话或加微信我加你好友，第一时间联系您。如果您现在不方便打字，可以留下您的联系方式，我将马上给您回复!</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180470";
	re2.prompt = "<p>您好，欢迎您咨询<span style=\"color:#cc0000;\"><strong>CCTV</strong></span>央视合作品牌<strong><span style=\"color:#cc0000;\">【生活家装饰-太原站】</span></strong><br />&nbsp;我是值班客户经理王婷，很高兴为您服务。目前太原分公司一周年店庆活动进行中——6重好礼等您享【超级折扣，0利息0首付定装修，砸金蛋抢家电，老板油烟灶具免费送，金牌管家使用权，高端材料免费升级】</p><p><strong>详细咨询欢迎来电：136-4360-0191（同微信）QQ:2053807687</strong><br /></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180473";
	re2.prompt = "<p>高品质整装公司<span style=\"background-color: rgb(255, 0, 0);\">央视合作品牌</span>生活家装饰欢迎您的咨询！品质保障：欧标德系工艺，德国原装进口辅材，《环保协议》和《保真协议》双重保障，详情咨询彭逵（阿冲）：18234026804（同微信）</p><p><br /></p><div style=\"top: 0px;\">﻿﻿</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180474";
	re2.prompt = "<p>您好！感谢了解生活家家居，我是您的专属客服<span style=\"color:#33cc00;background-color: rgb(255, 255, 255);\"><strong><span style=\"font-size:18px;\">阿萍</span></strong>。</span></p><p>电话：<span style=\"background-color: rgb(255, 255, 255);\"><span style=\"color:#ff0000;\"><strong><span style=\"font-size:16px;\">15513622166</span><span style=\"font-size:18px;\"> </span></strong></span></span>可加微信</p><p>QQ：<span style=\"font-size:16px;color:#ff0000;\"><strong>1375656179</strong></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180476";
	re2.prompt = "<p>您好！欢迎咨询<span style=\"background-color: rgb(255, 255, 255);\"><span style=\"color:#006600;\">品质生活服务商-央视合作品牌生活家装饰</span></span>【<span style=\"color:#ff0000;\"><strong>太原站</strong></span>】，我是今天的值班经理：<strong><span style=\"color:#ff0000;\">郝建峰</span></strong>。有任何关于装修方面的疑问、顾虑都可咨询我。</p><p><strong>电话/微信：</strong><u><span style=\"color:#006600;\"><strong>15135127979</strong></span></u></p><p><strong>QQ：</strong><u><span style=\"color:#ff0000;\"><strong>547476765</strong></span></u></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180478";
	re2.prompt = "<p>您好，欢迎您的咨询，我是您的专属客服韩雪芳，请问有什么需要帮助的吗？</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180480";
	re2.prompt = "您好，欢迎您的咨询太原生活家装饰（健康生活服务商）如果您不方便打字请直接电话咨询客户经理：姜楠，联系电话：<strong><span style=\"color:#ff0000;\">18636900389</span></strong>或者发送小区、面积、装修风格至联系电话5分钟迅速报价，咨询QQ：<span style=\"color:#ff0000;\"><strong>1041034917</strong></span>生活家装饰健康整装";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180552";
	re2.prompt = "<p><span style=\"font-size:13px;\">您好，欢迎进入<strong><span style=\"color:#009900;\">品质生活创享家</span></strong>——生活家家居是集</span><span style=\"font-size: 14px; text-decoration: underline;\"><span style=\"color:#ff2941;\">人工+主材+辅材+家具+配饰+厨电+入户水电,</span></span><span style=\"line-height: 1.6; font-size: 14px;\"></span><span style=\"font-size:13px;\">为一体的一站式服务装修模式,装修内容包括</span>：</p><span style=\"line-height: 1.6; font-size: 14px;\"></span><p>首推“<span style=\"color:#3da742;font-size: 14px;\"><strong>德标工程</strong></span>，是一款仅仅除了家电之外，真正的整装产品！</p><p>我是您的专属客服杨盛</p><p>联系电话：（15333018978）</p><p>微信：(15333018978),(398951889)</p><p>扣扣：(398951889）您都可以随时咨询!</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180593";
	re2.prompt = "<p>您好！欢迎光临全国品牌【生活家家居-武汉站】</p>1. 现在即可咨询【拎包装一键整体家装详细活动】<br />2. 现在即可咨询【报价、材料、设计等装修问题】<br />3. 现在即可提前预约您喜欢的设计师<br />我是您的专属服务顾问：<span style=\"color:#ff0000;\">越芳芳</span>，可以直接给我来电：<strong><span style=\"color:#ff0000;\">18872245794，QQ:3534485153</span></strong>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180594";
	re2.prompt = "<p><span style=\"font-family:Microsoft YaHei;\">您好，欢迎光临全国品牌【生活家装家居——武汉站】，我们主要从事新房，二手房，别墅大户型装修，欢迎参观8000平材料展厅，免费预约设计师热线</span></p><h2><span style=\"font-family:Microsoft YaHei;color:#ff0000;\"><strong>张经理：18271420151</strong></span></h2><div><span style=\"font-family: 'Microsoft YaHei';\"><strong><span style=\"font-size:18px;color:#ff0000;\">QQ:3311468490</span></strong></span></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180595";
	re2.prompt = "<img src=\"http://www17.53kf.com/upload/xheditor/9006234/cyy/201607171121331929.gif\" alt=\"\" />";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180604";
	re2.prompt = "<div><div>&nbsp;您好！欢迎光临全国品牌【生活家家居-武汉站】<br />1.&nbsp;现在即可咨询【拎包装一键整体家装详细活动】<br />2.&nbsp;现在即可咨询【报价、材料、设计等装修问题】<br />3.&nbsp;现在即可提前预约您喜欢的设计师<br />我是您的专属服务顾问：<span style=\"font-size:16px;\"><strong>小熊</strong></span>，可以直接给我来电：<span style=\"font-size:16px;\">159-7140-1041</span>，QQ:<span style=\"font-size:16px;\">3535037103</span><br /></div><span style=\"background-color: rgb(51, 51, 51);\"></span><br /></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180605";
	re2.prompt = "<p></p><p><span style=\"font-weight: bold;\">您好！欢迎光临全国品牌【生活家家居-武汉站】我是您的专属家居顾问<strong>：夏丽君，您可以直接给我来电</strong></span></p><p><strong><span style=\"background-color: rgb(255, 204, 204);\">电话：<span style=\"color:#0a4b22;\"><u>13294188378（微信同号）</u></span><span style=\"font-size: 13px;\">QQ</span>：2156913902</span></strong></p><br />";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180606";
	re2.prompt = "<span style=\"color:#000000;TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(241,248,249); TEXT-INDENT: 0px; LETTER-SPACING: normal; DISPLAY: inline !important; FONT: 12px/21px arial, 宋体; WHITE-SPACE: normal; FLOAT: none; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\"></span><div><div>您好！欢迎光临全国品牌【生活家家居-武汉站】</div><span style=\"font-stretch: normal; line-height: 21px; font-family: arial, 宋体; float: none; display: inline !important; background-color: rgb(241, 248, 249);\">1. 现在即可咨询【</span><span style=\"color:#ff6666;TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(241,248,249); TEXT-INDENT: 0px; LETTER-SPACING: normal; FONT: 12px/21px arial, 宋体; WHITE-SPACE: normal; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\"><strong>拎包装一键整体家装详细活动】<br /></strong></span><span style=\"color:#000000;TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(241,248,249); TEXT-INDENT: 0px; LETTER-SPACING: normal; DISPLAY: inline !important; FONT: 12px/21px arial, 宋体; WHITE-SPACE: normal; FLOAT: none; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\">2. 现在即可咨询【</span><span style=\"TEXT-ALIGN: left; LINE-HEIGHT: 21px; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(241,248,249); FONT-VARIANT: normal; FONT-STYLE: normal; TEXT-INDENT: 0px; LETTER-SPACING: normal; FONT-FAMILY: arial, 宋体; WHITE-SPACE: normal; COLOR: rgb(0,0,0); FONT-SIZE: 12px; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\"><span>报价、材料、设计等装修问题</span></span><span style=\"color:#000000;TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(241,248,249); TEXT-INDENT: 0px; LETTER-SPACING: normal; DISPLAY: inline !important; FONT: 12px/21px arial, 宋体; WHITE-SPACE: normal; FLOAT: none; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\">】</span><br style=\"TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(241,248,249); TEXT-INDENT: 0px; LETTER-SPACING: normal; FONT: 12px/21px arial, 宋体; WHITE-SPACE: normal; COLOR: rgb(0,0,0); WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\" /><span style=\"color:#000000;TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(241,248,249); TEXT-INDENT: 0px; LETTER-SPACING: normal; DISPLAY: inline !important; FONT: 12px/21px arial, 宋体; WHITE-SPACE: normal; FLOAT: none; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\">3. 现在即可提前预约您喜欢的设计师</span><br style=\"TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(241,248,249); TEXT-INDENT: 0px; LETTER-SPACING: normal; FONT: 12px/21px arial, 宋体; WHITE-SPACE: normal; COLOR: rgb(0,0,0); WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\" /><span style=\"color:#000000;TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(241,248,249); TEXT-INDENT: 0px; LETTER-SPACING: normal; DISPLAY: inline !important; FONT: 12px/21px arial, 宋体; WHITE-SPACE: normal; FLOAT: none; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\">我是您的专属服务顾问：<strong><span style=\"font-size:18px;color:#ff00;\">程灿锋</span></strong></span><span style=\"color:#000000;TEXT-ALIGN: left; TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(241,248,249); TEXT-INDENT: 0px; LETTER-SPACING: normal; DISPLAY: inline !important; FONT: 12px/21px arial, 宋体; WHITE-SPACE: normal; FLOAT: none; WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\">，可以直接给我来电：<span><span style=\"font-family:Microsoft YaHei;font-size:18px;color:#ff0000;\"><strong><u>15827455141</u></strong></span></span></span><span style=\"color:#ff00;\"><strong><span style=\"color:#ff0000;\">，</span>QQ:1051249910</strong></span></div><p><strong><u><span style=\"font-size:16px;color:#ff0000;\">有任何问题可在下方输入</span></u></strong></p><p><strong><u><span style=\"font-size:16px;color:#33cc00;\">↓↓↓↓</span></u></strong></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10183484";
	re2.prompt = "<div>您好！欢迎光临全国品牌【生活家家居-沈阳站——9.24盛大开业】<br />1.现在即可咨询【当前活动】详情<br /><br />2.现在即可咨询【材料、报价、设计】等装修问题<br /><br />3.现在即可提前预约您喜欢的设计师， 我是今天值班经理韩信，可以直接给我来电：13243906762</div><div><br /> </div>";
            re2.carousel = "1";
        re2.carousel_interval = "15";
    	re2.carousel_num = "1";
        re2.carousel_prompt1 = "你好，中国健康整装领导者—— 生活家装饰，我是客户经理韩信 {电话13243906762 微信同号} 很高兴为您服务";
        re2.carousel_prompt2 = "";
        re2.carousel_prompt3 = "";
        re2.carousel_prompt4 = "";
        re2.carousel_prompt5 = "";
        re2.carousel_prompt6 = "";
        re2.carousel_prompt7 = "";
        re2.carousel_prompt8 = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10183485";
	re2.prompt = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10183486";
	re2.prompt = "<p><span style=\"font-size:18px;\">您好，请问您是新房装修还是旧房改造？</span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10183703";
	re2.prompt = "<div><img src=\"file:///C:\\Users\\lenovo\\Documents\\Tencent Files\\245971836\\Image\\C2C\\%$_(7EX{1DFZQD$4(O)79[T.gif\" alt=\"\" />您好！欢迎光临全国品牌【生活家家居-石家庄站】<br />1.现在即可咨询【告别伪装者，健康整装抢签会】<br />2.现在即可咨询【材料、设计等装修问题】<br />3.现在即可提前预约您喜欢的设计师<br />我是您的专属服务顾问：15731170119（李宁）QQ：3388729269（如果你打字不方便，可以直接留下你的联系方式，我会立即与你联系）<br /></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10184459";
	re2.prompt = "<p>您好！欢迎光临全国品牌【 生活家家居——太原站 】1.现在即可咨询【活动优惠详情】 2.现在即可咨询【报价，材料，设计等装修问题】&nbsp;&nbsp; 3.现在即可提前预约您喜欢的设计师。 <br /><br />我是您的专属服务经理【王艺丹】，可以直接给我来电：18303416964（同微信），或者加我QQ858510020</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10184703";
	re2.prompt = "您好，欢迎您的咨询，请问有什么需要帮助的吗？";
            re2.carousel = "1";
        re2.carousel_interval = "15";
    	re2.carousel_num = "1";
        re2.carousel_prompt1 = "<p>您好！我是今天的值班经理【周天绍】，如果不方便打字可以直接给我打电话：13552028639；QQ：1261006714，周天绍</p><p>您家房子多大面积呢？</p>";
        re2.carousel_prompt2 = "";
        re2.carousel_prompt3 = "";
        re2.carousel_prompt4 = "";
        re2.carousel_prompt5 = "";
        re2.carousel_prompt6 = "";
        re2.carousel_prompt7 = "";
        re2.carousel_prompt8 = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10184704";
	re2.prompt = "您好，欢迎您的咨询，请问有什么需要帮助的吗？";
            re2.carousel = "1";
        re2.carousel_interval = "15";
    	re2.carousel_num = "1";
        re2.carousel_prompt1 = "<p><strong><font face=\"微软雅黑\"><span style=\"font-size: 18px;\">您好 欢迎进入“北京生活家装饰”我是您的专属客户顾问吕亚雷，官方预定热线：</span></font><font color=\"red\" style='margin: 0px; padding: 0px; border: 0px currentColor; border-image: none; font-family: 微软雅黑, \"Microsoft YaHei\", 宋体, Arial, Helvetica, sans-serif, Tahoma;'><span style=\"font-size: 24px;\">15011587429</span></font><font face=\"微软雅黑\"><span class=\"Apple-converted-space\" style=\"font-size: 24px;\">&nbsp;</span><span style=\"font-size: 18px;\">咨询QQ:</span><span style=\"color: rgb(229, 51, 51); font-size: 18px;\"><span style=\"font-size: 24px;\">136278662</span>（同微信）</span><br style='margin: 0px; padding: 0px; border: 0px currentColor; border-image: none; font-family: 微软雅黑, \"Microsoft YaHei\", 宋体, Arial, Helvetica, sans-serif, Tahoma;'><span style=\"font-size: 18px;\">“安全家居，你我同行”</span></font></strong><font color=\"red\" style='margin: 0px; padding: 0px; border: 0px currentColor; border-image: none; font-family: 微软雅黑, \"Microsoft YaHei\", 宋体, Arial, Helvetica, sans-serif, Tahoma;'><br style='margin: 0px; padding: 0px; border: 0px currentColor; border-image: none; font-family: 微软雅黑, \"Microsoft YaHei\", 宋体, Arial, Helvetica, sans-serif, Tahoma;'></font><font color=\"#008040\" size=\"2\" style='margin: 0px; padding: 0px; border: 0px currentColor; border-image: none; text-align: left; text-transform: none; line-height: normal; text-indent: 0px; letter-spacing: normal; font-family: 微软雅黑, \"Microsoft YaHei\", 宋体, Arial, Helvetica, sans-serif, Tahoma; font-style: normal; font-variant: normal; font-weight: normal; word-spacing: 0px; white-space: normal; widows: 1; background-color: rgb(255, 255, 255); -webkit-text-stroke-width: 0px;'><span style=\"font-size: 18px;\">如果你不方便打字可以留下您的联系方式，或拨打客服咨询电话</span><span style=\"color: rgb(229, 51, 51); font-size: 24px;\">15011587429</span><span style=\"font-size: 18px;\">我们会立即给您回电，为您服务！</span></font></p>";
        re2.carousel_prompt2 = "<span style=\"font-size: 18px;\"><span style=\"color: rgb(255, 0, 0);\">您家多大面积呢？</span></span>";
        re2.carousel_prompt3 = "";
        re2.carousel_prompt4 = "";
        re2.carousel_prompt5 = "";
        re2.carousel_prompt6 = "";
        re2.carousel_prompt7 = "";
        re2.carousel_prompt8 = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10184706";
	re2.prompt = "您好，欢迎您的咨询，请问有什么需要帮助的吗？";
            re2.carousel = "1";
        re2.carousel_interval = "15";
    	re2.carousel_num = "1";
        re2.carousel_prompt1 = "<p>您好！我是今天的值班经理【贺卫红】，如果不方便打字可以直接给我打电话：18295757981（微信）；QQ：535790119，贺卫红</p><p>您家房子多大面积呢？</p>";
        re2.carousel_prompt2 = "";
        re2.carousel_prompt3 = "";
        re2.carousel_prompt4 = "";
        re2.carousel_prompt5 = "";
        re2.carousel_prompt6 = "";
        re2.carousel_prompt7 = "";
        re2.carousel_prompt8 = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10185328";
	re2.prompt = "<p>您好，我是生活家装饰太原分公司值班客户经理谢凯。欢迎您对生活家咨询了解！</p><p>目前太原分公司一周年活动进行中——<span style=\"color:#ff0000;\">超级折扣，0利息0首付定装修，砸金蛋抢电器，油烟灶具免费送，金牌管家使用权，高端材料免费升级</span>六大签单礼等您来拿。</p><p><strong><span style=\"font-size:18px;\">咨询热线</span></strong></p><p><span style=\"font-size:18px;color:#ff0000;\"><strong>手机：13834506943</strong></span></p><p><span style=\"font-size:18px;color:#ff0000;\"><strong>微信：873612170</strong></span></p><p><span style=\"color: rgb(255, 0, 0);font-size:18px;\"><strong>QQ：2457430477</strong></span></p><p><br /></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10185927";
	re2.prompt = "您好，欢迎您的咨询，请问有什么需要帮助的吗？ ";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10185928";
	re2.prompt = "<div><div>&nbsp;</div></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10186613";
	re2.prompt = "<p><span style=\"font-size:16px;\">您好！欢迎光临全国品牌【生活家家居-重庆站】<br />我是您的专属服务顾问：龙莉，可以直接给我来电：<br /><br />TEL:</span><span style=\"color:#ff0000;\"><span style=\"font-size:18px;\"><strong>18983173131，</strong>QQ：3245194355</span></span></p><p><span style=\"color:#ff0000;\">如果您不方便打字，可以留下您的电话，我们马上安排工作人员与您联系！</span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10187027";
	re2.prompt = "<span style=\"font-family:FangSong_GB2312;font-size:13px;\">您好，欢迎进入生活家家居官方网站，我是【生活家】武汉站亢慧，很高兴为您服务，您有任何装修方面的问题都可以与我联系，电话：<span class=\"send_sms_from_msg callsoft_from_msg\" style=\"font-weight: bold; text-decoration: underline; cursor: pointer;\" data=\"15972213279\"><span style=\"color:#006600;\">15972213279</span></span>（微信） <span style=\"color:#009900;background-color: rgb(255, 255, 255);\">QQ：307178427</span></span>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10187093";
	re2.prompt = "<p><span style=\"color: rgb(0, 0, 0);\"><span style=\"font-size: 13px;\"></span></span></p><p>欢迎光临CCTV中央电视台合作品牌生活家装饰</p><p>好设计，好家装，就选生活家</p>您好，我是您的网络专属客户经理【安娜】，可以直接给我来电：<span style=\"color:#0a4b22;\"><strong><u>13860616801</u></strong></span>（微信同号） 很高兴为您服务！<br /><p style=\"font-family: 宋体;\"><span style=\"font-family: Arial, Verdana, sans-serif; font-size: 13px;\"></span></p><p>&nbsp;</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10189243";
	re2.prompt = "<p><span style=\"font-size:18px;\">您好！欢迎光临【</span><strong>青岛生活家家居】</strong><span style=\"font-size:18px;\">，<span style=\"font-size:18px;\">我是客户经理<span style=\"color:#ff0000;\">朱文杰</span>很高兴为您服务</span><span style=\"font-size:18px;\">，</span>装修咨询24h热线：15192625186微信：15966885101。</span></p><p></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10189735";
	re2.prompt = "<p style=\"LINE-HEIGHT: 150%; MARGIN: 0pt\"><span style=\"font-family:宋体;LINE-HEIGHT: 150%; TEXT-TRANSFORM: none; FONT-STYLE: normal; LETTER-SPACING: 0pt; FONT-SIZE: 9pt; FONT-WEIGHT: normal\">杭州生活家</span><strong><strong>开业珍藏版</strong></strong><span style=\"font-family:宋体;color:#000000;LINE-HEIGHT: 150%; TEXT-TRANSFORM: none; FONT-STYLE: normal; LETTER-SPACING: 0pt; FONT-SIZE: 9pt; FONT-WEIGHT: normal\">限量发售</span><span style=\"font-family:宋体;\"><span style=\"font-family:楷体_GB2312;color:#000000;LINE-HEIGHT: 150%; TEXT-TRANSFORM: none; FONT-STYLE: normal; LETTER-SPACING: 0pt; FONT-SIZE: 12pt; FONT-WEIGHT: normal\">，</span><span style=\"color:#992997;LINE-HEIGHT: 150%; TEXT-TRANSFORM: none; FONT-STYLE: normal; LETTER-SPACING: 0pt; FONT-SIZE: 12pt; FONT-WEIGHT: normal\">“</span><span style=\"color:#992997;LINE-HEIGHT: 150%; TEXT-TRANSFORM: none; FONT-STYLE: normal; LETTER-SPACING: 0pt; FONT-SIZE: 14pt; FONT-WEIGHT: normal\">O增项、无延期</span><span style=\"color:#5f497a;LINE-HEIGHT: 150%; TEXT-TRANSFORM: none; FONT-STYLE: normal; LETTER-SPACING: 0pt; FONT-SIZE: 14pt; FONT-WEIGHT: normal\">”</span></span></p><p style=\"TEXT-ALIGN: left; TEXT-INDENT: 0pt; MARGIN: 0pt; mso-pagination: widow-orphan; mso-line-height-alt: 12pt\"><span style=\"font-family:宋体;TEXT-TRANSFORM: none; FONT-STYLE: normal; LETTER-SPACING: 0pt; FONT-SIZE: 9pt; FONT-WEIGHT: normal\">全国第一家整装公司，生活家— 极致性价比!</span></p><p><br /></p>";
            re2.carousel = "1";
        re2.carousel_interval = "15";
    	re2.carousel_num = "1";
        re2.carousel_prompt1 = "";
        re2.carousel_prompt2 = "";
        re2.carousel_prompt3 = "";
        re2.carousel_prompt4 = "";
        re2.carousel_prompt5 = "&nbsp;杭州生活家开业珍藏版限量发售，<br />“<span style=\"font-size:24px;color:#ff0000;\"><strong>O增项、无延期</strong></span>”<br />全国第一家整装公司，生活家 极致性价比<br />您的专属家装顾问：只只，<br />欢迎来电咨询： <br />13738117469，QQ617053129";
        re2.carousel_prompt6 = "";
        re2.carousel_prompt7 = "";
        re2.carousel_prompt8 = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10189736";
	re2.prompt = "您好，<strong><span style=\"font-size:18px;color:#33cc00;\">杭州生活家装饰</span></strong>欢迎您的咨询，请问有什么需要帮助的吗？ ";
            re2.carousel = "1";
        re2.carousel_interval = "15";
    	re2.carousel_num = "1";
        re2.carousel_prompt1 = "您好，生活家装饰是杭州最大的整装公司，首推按套内面积收费，让您不在为公摊买单。主材不限使用，有效杜绝后期增项增量，水电是根据您家的设计需求点位包干真正做到“0增项，无延期”从而有效控制预算。咨询热线：<span style=\"font-size:18px;color:#cc0000;\">15825508025</span>，也可以加微信哦，家居顾问;<span style=\"font-size:18px;color:#cc0000;\">露娜</span>";
        re2.carousel_prompt2 = "";
        re2.carousel_prompt3 = "";
        re2.carousel_prompt4 = "";
        re2.carousel_prompt5 = "";
        re2.carousel_prompt6 = "";
        re2.carousel_prompt7 = "";
        re2.carousel_prompt8 = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10189737";
	re2.prompt = "您好，欢迎进入生活家集团网站，我是米莱，请问有什么可以帮您的呢？如打字不方便可以拨打电话：<span class=\"send_sms_from_msg callsoft_from_msg\" style=\"color: rgb(10, 75, 34); font-weight: bold; text-decoration: underline; cursor: pointer;\" data=\"15825508025\">18969145599</span>（电话.微信） QQ：405542336<br />";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10191650";
	re2.prompt = "<p>您好，这里是南京生活家装饰。很高兴为您服务！请问您是咨询设计还是报价的呢？我这边为您解答。<br />我是您的专属顾问--夏木<br />手机/微信/QQ：<span style=\"font-size:18px;color:#ff0000;\">138-5163-0712</span></p><div style=\"top: 0px;\">??</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10192058";
	re2.prompt = "<p><span style=\"FONT-FAMILY: \" yahei=\"\" microsoft=\"\"><span style=\"font-family:KaiTi_GB2312;\"><span style=\"font-family:'Microsoft YaHei';\"><span style=\"font-size:18px;\"></span></span></span></span></p><p><span style=\"font-size:16px;\"><span style=\"font-family:宋体;\">您好，我是今天的值班经理</span><strong><span style=\"font-family:宋体;\">丹丹</span></strong><span style=\"font-family:宋体;\">，您是有房子要装修是吗？</span><span style=\"font-family:宋体;\">留下小区名称</span>+户型面积+风格，即可获得装修报价</span></p><p>&nbsp;</p><p><strong><span style=\"font-size:18px;\"><span style=\"font-family:宋体;\">您可以加我微信：</span><span style=\"color:#006600;\">18600666787</span><span style=\"font-family:宋体;\">（微信）黄丹，朋友圈中有很多效果图和装修知识，欢迎您的咨询</span></span></strong></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10192059";
	re2.prompt = "<p></p><p><span style=\"font-size:13px;color:#ff6666;\"><strong>您好，生活家(北京)家居装饰有限公司为您提供健康生活.我是客户经理-雨墨，电话：13810319525可加微信（yumo1128），QQ279656127，您也可以留下您的联系方式，我们会尽快跟您联系。</strong></span><span style=\"font-weight: bold;\"><span style=\"font-size:18px;\"><span style=\"background-color: rgb(255, 204, 204);\"><span style=\"color:#ff0000;\"><br /><br /><br /><br /></span></span></span></span></p><p><span style=\"font-weight: bold;\"></span></p><p>留下您的【<strong>姓名+联系方式+小区名称</strong>】即可<span style=\"color:#ff0000;\"><strong>报名！</strong></span></p><p>咨询热线：13810319525 &nbsp;雨墨（可加微信yumo1128）报名QQ：279656127</p><div style=\"top: 0px;\">﻿﻿</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10192229";
	re2.prompt = "<p><span style=\"font-size: 16px;\">您好，</span><strong><span style=\"font-size:18px;color:#33cc00;\">杭州生活家家居装饰</span></strong><span style=\"font-size: 16px;\">欢迎您的咨询！</span></p><p><span style=\"font-size:16px;\">生活家家居，全国最大</span><span style=\"color: rgb(51, 204, 0);\"><span style=\"font-size:24px;\">整装</span></span><span style=\"font-size:16px;\">公司！</span></p><p><span style=\"font-family: 'Microsoft YaHei'; color: rgb(51, 102, 255);\"><span style=\"font-size:18px;\">中高端设计与品质，享受极致性价比！</span></span></p><p><span style=\"font-size:16px;\">您的专属客户经理：<span style=\"background-color: rgb(255, 0, 0);\">三清</span>，QQ：<span style=\"background-color: rgb(255, 0, 0);\">2448588618</span>，电话/微信：<span style=\"background-color: rgb(255, 0, 0);\">13735850716</span>。</span></p><p><span style=\"font-size:16px;\"><br /></span></p><p><br /></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10193388";
	re2.prompt = "<p>苏州生活家官网欢迎您！{53b#35#}</p><p>我是您的专属网络客户经理-广慧（电话/微信：152 5002 8064 ，QQ：297 303 5553），如果您不喜欢打字，可以留下您的联系方式，我会立即为您解答疑问!<br /></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10193390";
	re2.prompt = "<span style=\"font-size:16px;\"></span><p><span style=\"font-size:16px;\"><span style=\"color:#000000;\">新年装新家，跨年抢大礼。{53b#35#}即日起所有在线咨询预约报名业主，</span><strong>到店即送金逸影城电影票2张</strong>，名额有限，先到先得，详情请致电或加微信：<strong>18913537180&nbsp; 圆圆</strong></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10195184";
	re2.prompt = "您好，欢迎您的咨询，我是您的专属客户小魏，我能为您做点什么呢？如果您不方便打字，可以跟我留个联系方式，方便为您解决装修烦恼。【客服电话：15034070958 可加微信哦】";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10198651";
	re2.prompt = "<p><span style=\"font-size:13px;\">您好，我是<strong>生活家装饰太原分公司</strong>值班客户经理班甜。欢迎您对生活家咨询了解。目前</span><span style=\"font-size:16px;\"><span style=\"color:#ff0000;\">太原分公司一周年活动进行中—超级折扣，0利息0首付定装修，砸金蛋抢电器，油烟灶具免费送，金牌管家使用权，高端材料免费升级</span></span><span style=\"font-size:13px;\">六大签单礼等您拿。咨询热线</span><span style=\"font-size:16px;\">：</span><span style=\"font-size:13px;\">手机：</span><span style=\"font-size:13px;\"><span style=\"color:#ff0000;\"><strong>18636192397</strong> </span></span><span style=\"font-size:13px;\">&nbsp;</span><span style=\"font-size:13px;\">微信：</span><span style=\"color:#ff0000;font-size:13px;\"><strong>249967886</strong></span><span style=\"font-size:13px;\">&nbsp;&nbsp;</span><span style=\"font-size:13px;\">QQ：</span><span style=\"color:#ff0000;font-size:13px;\"><strong>3107498584</strong></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10201693";
	re2.prompt = "<div style=\"top: 0px;\">﻿﻿高品质整装公司<strong><span style=\"background-color: rgb(255, 0, 0);\">央视合作品牌</span></strong><span style=\"color:#ff0000;\">生活家装饰</span>欢迎您的咨询！<span style=\"color:#ff0000;\">品质保障</span>：<span style=\"color:#ff6666;\">欧标德系工艺</span>，德国<span style=\"color:#ff6666;\">原装进口</span>辅材，《环保协议》和《保真协议》双重保障，详情咨询<span style=\"color:#ff0000;\">彭逵（阿冲）</span>：18234026804（同微信）</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10201696";
	re2.prompt = "<p><span style=\"font-size: 13px;\"><span style=\"font-family:SimHei;\">您好，太原生活家家居欢迎您的到来，有什么可以帮到您？我是您的专属客服田宇超（<span style=\"color:#ff0000;\"><strong>13546303720</strong></span>）微信：<span style=\"color:#ff0000;\"><strong>同手机号</strong></span>；扣扣：<span style=\"color:#ff0000;\"><strong>675691037</strong></span>，可以随时咨询哦!</span></span> ﻿﻿﻿﻿</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10202416";
	re2.prompt = "您好，欢迎您的咨询，请问有什么需要帮助的吗？";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10209204";
	re2.prompt = "<!--StartFragment --><div><span style=\"color:#ff0000;\">您<img alt=\"\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAgCAYAAACcuBHKAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAOxAAADsQBlSsOGwAAEKtJREFUWAkBoBBf7wEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD98+j/+vHjAPvkzQD66N4A9uLYAPzs4QD++vsA/fPwAAEB+gAAAAAAAAAAAAEGBAD/+vwA/fz8AAIDCgARPU8AE0t/AAMNGAEAAAAAAAAAAAAAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/vz5//nfwQDuw6sA99rFAPnp5wAFCwMABg/8AAUNAQAIEPgAAAAAAAcMAAAAAAAAAAAAAAAAAAD59AAA6sj8AAQSEwAXVoAACzBcAAMIDAEAAAAAAAAAAAAAAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD99u7/9dKqAOqwkgD56ecADSYsAAkpJAASFOgAAQzqAAEB7wAAAAAAAPP4AAAAAAAA9PgAAAAAAAAAAAD17PcA47z8ABNIZAATToUAAwoSAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD327r/4YhBAPfj4gAQPVQAG2JCAAgX0gAA+tYA//ftAP/4AgAA9hEAAPr9AAAACgAA+foA/v0GAAAAAADm0h0A7cfdAOn0/wAO9vwAAAIGAOvW1P/jzc4AFyMjABIfIQAAAAAABhcWAAMEBAEBAAAAAAAAAAAAAAAAAAAAAP78+f/wvIIA5aGLAA85SAAZWWsAAxL5AAH3uAAA9+UAAAAAAAD6+gAAAAAA//j4AP/99AAB8PsAAPr8AAD5+gD12QsA+dQ6AAAAAADjvbEA3/v8AAogAQDsAxwA5OTlACQJFQAmLC4A/g4CABVaZgAbOjsBBAAAAAAAAAAAAAAAAP78+f/srHAA67moAB1tgQAPOEAAAPvVAAD1xwAAAAAAAAkbAAD++QAABvsAAPrxAAEAAAAA+AAAAQr6AP8A9QAAAAAA+v7zAOO9sQApXGkAK4mVACKkpADe08cA9vvjAE4vNQAWGR4AAAAAAOQA9AAAAAAAAAAAAAEAAAAAAAAAAAAAAADssHb/67CPACR2fwAEKEMAAPvLAAAC6QAAAAAAAAAAAAAAAAAA/vgAAP75AAD79wAA/PQAAPfyAP/4+AAB9/oA//b1AAD6/AD2y+4A36AUACVUVwABWFgABvT0APm0tAD50dAA+trZAO3l5AARqKsAF0VDAQAAAAACAAAAAAAAAADzzqL/56mQABlmggAEJxcAAPe6AAAC+QAAABAAAAAQAAAAEAAAABAAAAQNAAACBwAABQkAAAMHAAAGBgABAw0AAAAAAAAGAwAAAAAACi4MAPwf7ADzq6kA/goJAPvh4ADzq6kA+rKyAPXe3gDzAgEA5ejlAAAAAAAAAAAAAgAAAAD98+j/5Jt7ABZKUgAPOEAAAPz3AAAGCgAAAhAAAAIQAOTd+QDEs9wAAAIQAAD+CwAABA0AAAIHAAADDAAAAwgAAAX7AP8JBgABBAgAAAYEAAHsBAAA2QIADG1vAAPLywDxVlYAANjZAAAAAAAAAAAAAAAAAAS7uwAAAAAAAAAAAAIAAAAA772OAAAAAAAURVIAAP3EAAAC+QAAAhAAAAEMAAABDAD28gwAup/OAOvi9wAAAAAAAP4LAAACCAAAAwIAAAMHAAAGBgABAw0AAAAAAAAGAwDawvAAHAcSAAAAAADxfn0AAAAAAAAAAAAAAAAA+AcGAAQSCQDx4eAA9+Xm/wAAAAAC++vb/+u/qwAUR0QAAhXxAAD69gAA/gcAAAAAAAAAAAD//wsAJTMiAFx9WwCTbqMA5N35AAAAAAAAAgUAAAIHAAABBQAAAAAAAAX7AP8JBgAA9PkA39f/AAAAAAD0k5EAANjZAAAAAAD1BgUA9QYFAPMCAQAAAAAADx8gAN/f2wAAAAAABPjjxwD+8vAAEDEpAAD03gAABAgAAAAKALeZzQDZ0d4A7ubuABIaEgAQFBoA5NnkAH5OlQBiiE4AIioHABohBQAAAAAAAAMIAAAA+gAAAAAA8vULAPbg7AAMeW8A+rm4AO/e3gAAAAAAAAAAAPgHBgD1AwEAEwgSAPbyAADtzsEAu9K0/wTy0MMADSYsAAQMAAAA+u8AAAQZAAAA9gAtQhsAFhQaAAAAAAAAAAAAAAAAAN7SHAAAAAAAICodABUO9QAA/vMAAAAAAAAAAAAAAAAAAAAAAA8bBAAFOgwA1uLTAAbb2QANAAAA+AcGAAAAAADzAgEAAAAAANkDAQD0DfkA3BDJAA/l7gAE99rFAA0rLgAABO8AAPoAAAAAAAAAAAAAGyUuABwmFQAAAAAAAAAAALeoyQASGhIAaH2EAAga3AAA/eQAAPzzAAD/+wAA/fgA4OsBAPP+EgAa++sAS2gIAMKntADW6vkAKgwIAAv9/wD1AwEA7goEAAAAAAD4EwYA80IOAO0E7wAPAAAABP3z8AAIFw0AAPrvAAAAAAAA/PgAAADvAAEAAAAAAOoAAAAAAOvm9gDZwbcAW3lbAAcZ5wAA99oAAP/xAAD+9wAA/fkAAAMIAM/nBQC77/EA+/8CADAFGwBHTO4AMUHzAObDBADh0/gA2vQNACYM8wAFQzoA/UE3AOXtzAD78vsABwUNAAT+/gMABAkDAAD48wAAAAAAAAAAAAAAEQAAAO8AAAb5AAD+BwAVHPkAYH9XAA8XEAAB+M8AAP/xAAAA+AAA//sAAAAAAAD9+AAxGfsA5ww0ANPm0QDVAfgA1vgNAFP8AwBBTu4A5jkXAOjlDQBSIwMAzQUYANLx1QDq7u0ABwoCACkWNwACAAAAAP/37wAA/fMAAAAAAAAAAAAA+u8AAPz4AAD55wAA/O8AAPr2ABAT/gAB+M8AAP/xAAAA+AAA/vkAAP35AAD9+AAA+voAIBX/ABYDEQAjDiYA+fYBAP/8AACtBwoAv+sSABQJ/wACFQYAzQUjAMf+6wDl6uQABwr/ABMAEQAyITcABAAGBAD58/IACwAFAAD98wAA+AAAAAgNAAD67wAACQIAAP8AAAAA+AAA+/EAAAD4AAD++QAA//sAAP35AAAAAAAAAAAAAAAAAP/4+AA0CsAAAABAAO385gDq7u0ABwr/ALMEEQAk+f4A8gH/AMv26ADv/O8ABQYAAA0ICgA1AhgAEw0VAQQLGBwA+enwAAD6DwAAAAAAAAbzAAD4AAD4+PgA79wHAObjKQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAv8BgAdHSMAAAAAAOru7QD+BvkA1f8DAAAI+wDtAPgAAgQAAAEEAAAd1gUAO0BCAAAAlQAECik5AO/CogAARDAAAPrzAAAADQAABvMA3tb3AOjUDgARHh8ABCceAAT6AQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAgAAAAA/f0AP0JBADyDsUA//wAAAEE/QAAAAAA//wAAAX4CABVCx0AGe/DAA8iLgAAAAAABAkqTwDnqZAA8d/vAA8bBAAA+vMA/gD6ANrE8gDZtPMAGDQDAFRQngALDAoA/QABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAH9/QD/AwMAAv36ACkDBQAZywsAAc3UAOkZ+gDyAf8A+wP7AEgPJgA6KxMA7pWcABFMbQADER4AAAAAAAQIHi8ADy43APLI5QAPUxkA//z4AAIACABOTyIA0ScCALNttgCk6k8ANlxfAB0zMgAMDxIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAvb3AOnr6ADRzL0A0peYABAeKQB/j0EAs+HQAMDs9gBKLB8A8M/XAP716wAKLUQAAgQHAQAAAAAEAwgMAfPOov/gi2QAGd4OAAMeAwD//PgAAhAAADFHIADRclUA4o6rAMjS2gDpMSsAEgYVAAAAAAAL/gIAAAAAAAAAAAAAAAAA9QL+AO766wD16OcA1dfdAAcgDgBUgmoABP3HACDl9wBB2d0A5+TzAPXi4AATSGQACRw1AQAAAAAAAAAAAQAAAAD///7/45NQAPngygAjWBgAAAAAAAAAAAAABgMA/RFXANKc5gDJnK0AFen2AAAAAAAZAAgAAAAAAAz/AgAAAAAA9AH+AOcA+AAAAAAA1gf5ACM8KQBGf2YAERLpAOGvsgAHHkIADyUgAP/yzQDxx70AASJWAB1diAEAAAAAAAAAAAEAAAAAAAAAAPvr2//chEYADhnwABlCHwAA+vwAAAAAAAEQDwD8DU8A7+MRAOO51QD2ws0A+uLtAA3w+wAAAAAAAAAAAAAAAADzEAUA+ikeAB5JKAAiSEoA9dW8APrmwwAIIkIAEUZMAADvwwAA6eAA/u7fAOW92QAKSIsAFDdTAQAAAAABAAAAAAAAAAAAAAAA99u6/+CNVgAOIAEAGTwbAAAAAAAAAAAAAAYEAAEMOgAADzQA8+P6AOPL2AD72e8A/e7xAAAAAAADEg8AEzcZABQ3LwAGDgMAAfXsAN6ooAAAAAAAIlhgAPwJ4wAAAAAABfDxAP7u3wD819kA6ewbAB55wwEAAAAABAAAAAAAAAAAAAAAAAklRgH327r/4I5jAPvz5AAcOhAAAg8MAADz9gD/87wAAPTGAAwDKwAmQykAA0omAAAAAAAAAAAAAAAAAAAAAAD9+d0AAePXAAAAAAAGAgcAAAAAAAH23gAF+fYAAAAAAP/18QAC9/UAAAAAAPz38gAAAAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAACSVGAfvr2//nnGIA26vIABMxDAASJA8AAg8MAADz9gAAB9EAAvnuAAAHEgABCBkAAAAAAAAAAAAAAAAABAP2AAAIGQAAAAAA+v7bAPnc2wD42QIABhgKAAAAAAAC9/UAAO7sAPDo9wAHIEMAAADRAAAAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/vz5/+7NtADsr4YA/+jSAA4oDAAQGBUABhIKAAMS/AD/AB0AAAAAAAEHEgAAAAAAAAAAAPbv/ADy3OIA+93aAPTu/gAAMl8AB+W6ABko/AAKCQQAAAAAAPXm8ADq7xUAHW2sAAUVJQEAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAA/fz8//f3+AAAAAAA4+XlAPXSqgD+x7IADe/QAAAAAAAKEw4A/wj9AAkICQAAAAAA+PD6APn5AQD99PEA9wccAAcsTwD9N1AAGyMtAPzdygDzu38ABe7dAPr/BQAHIDYAFVOYAAkbGgEAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAPn5+f/09PQA7/DxAPT3+QDz8/QA9vTqAP3r2wAA7PIAB/PRAP30/gAAAAAAAAAAAAMMAgD5DS8AABQOAAMVJQAKDBYACggGAAoJCAAQDw0AAuPRAPrZwQAAAAAAFEFTAAkcNQEAAAAAAAAAAAAAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA///+//r6+wD7+vsA+fr5APr6+QD8+/wA+fv8APv7+wD5/P4AAAAAAAAAAAAAAAAABwQCAAUFBQAHBQQACgsLAAcGBwAFBgUABAMDAAMEBAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA43Ns0dMT/rMAAAAASUVORK5CYII=\" />好！欢迎光临全国品牌【生活家家居-大连站】<br />1.现在即可咨询【<!--StartFragment --></span><div><span style=\"color:#ff0000;\">生活家成功登陆央视和大连生活家冲A级公司的优惠活动<br /></span></div><span style=\"color:#ff0000;\">，健康整装抢签会】<br />2.现在即可咨询【报价、材料、设计等装修问题】<br />3.现在即可提前预约您喜欢的设计师<br />我是您的专属服务顾问：王城，可以直接给我来电：15142427671QQ：284831238（王城）</span></div><div style=\"top: 0px;\"><span style=\"color:#ff0000;\">﻿﻿</span></div><div style=\"top: 0px;\">﻿﻿</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10209205";
	re2.prompt = "您好，欢迎您来到生活家装饰官方网站，请问有什么需要帮助的吗？ ";
            re2.carousel = "1";
        re2.carousel_interval = "15";
    	re2.carousel_num = "1";
        re2.carousel_prompt1 = "<div>您<span style=\"color:#ff0000;\"><img alt=\"\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAgCAYAAACcuBHKAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAOxAAADsQBlSsOGwAAEKtJREFUWAkBoBBf7wEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD98+j/+vHjAPvkzQD66N4A9uLYAPzs4QD++vsA/fPwAAEB+gAAAAAAAAAAAAEGBAD/+vwA/fz8AAIDCgARPU8AE0t/AAMNGAEAAAAAAAAAAAAAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/vz5//nfwQDuw6sA99rFAPnp5wAFCwMABg/8AAUNAQAIEPgAAAAAAAcMAAAAAAAAAAAAAAAAAAD59AAA6sj8AAQSEwAXVoAACzBcAAMIDAEAAAAAAAAAAAAAAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD99u7/9dKqAOqwkgD56ecADSYsAAkpJAASFOgAAQzqAAEB7wAAAAAAAPP4AAAAAAAA9PgAAAAAAAAAAAD17PcA47z8ABNIZAATToUAAwoSAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD327r/4YhBAPfj4gAQPVQAG2JCAAgX0gAA+tYA//ftAP/4AgAA9hEAAPr9AAAACgAA+foA/v0GAAAAAADm0h0A7cfdAOn0/wAO9vwAAAIGAOvW1P/jzc4AFyMjABIfIQAAAAAABhcWAAMEBAEBAAAAAAAAAAAAAAAAAAAAAP78+f/wvIIA5aGLAA85SAAZWWsAAxL5AAH3uAAA9+UAAAAAAAD6+gAAAAAA//j4AP/99AAB8PsAAPr8AAD5+gD12QsA+dQ6AAAAAADjvbEA3/v8AAogAQDsAxwA5OTlACQJFQAmLC4A/g4CABVaZgAbOjsBBAAAAAAAAAAAAAAAAP78+f/srHAA67moAB1tgQAPOEAAAPvVAAD1xwAAAAAAAAkbAAD++QAABvsAAPrxAAEAAAAA+AAAAQr6AP8A9QAAAAAA+v7zAOO9sQApXGkAK4mVACKkpADe08cA9vvjAE4vNQAWGR4AAAAAAOQA9AAAAAAAAAAAAAEAAAAAAAAAAAAAAADssHb/67CPACR2fwAEKEMAAPvLAAAC6QAAAAAAAAAAAAAAAAAA/vgAAP75AAD79wAA/PQAAPfyAP/4+AAB9/oA//b1AAD6/AD2y+4A36AUACVUVwABWFgABvT0APm0tAD50dAA+trZAO3l5AARqKsAF0VDAQAAAAACAAAAAAAAAADzzqL/56mQABlmggAEJxcAAPe6AAAC+QAAABAAAAAQAAAAEAAAABAAAAQNAAACBwAABQkAAAMHAAAGBgABAw0AAAAAAAAGAwAAAAAACi4MAPwf7ADzq6kA/goJAPvh4ADzq6kA+rKyAPXe3gDzAgEA5ejlAAAAAAAAAAAAAgAAAAD98+j/5Jt7ABZKUgAPOEAAAPz3AAAGCgAAAhAAAAIQAOTd+QDEs9wAAAIQAAD+CwAABA0AAAIHAAADDAAAAwgAAAX7AP8JBgABBAgAAAYEAAHsBAAA2QIADG1vAAPLywDxVlYAANjZAAAAAAAAAAAAAAAAAAS7uwAAAAAAAAAAAAIAAAAA772OAAAAAAAURVIAAP3EAAAC+QAAAhAAAAEMAAABDAD28gwAup/OAOvi9wAAAAAAAP4LAAACCAAAAwIAAAMHAAAGBgABAw0AAAAAAAAGAwDawvAAHAcSAAAAAADxfn0AAAAAAAAAAAAAAAAA+AcGAAQSCQDx4eAA9+Xm/wAAAAAC++vb/+u/qwAUR0QAAhXxAAD69gAA/gcAAAAAAAAAAAD//wsAJTMiAFx9WwCTbqMA5N35AAAAAAAAAgUAAAIHAAABBQAAAAAAAAX7AP8JBgAA9PkA39f/AAAAAAD0k5EAANjZAAAAAAD1BgUA9QYFAPMCAQAAAAAADx8gAN/f2wAAAAAABPjjxwD+8vAAEDEpAAD03gAABAgAAAAKALeZzQDZ0d4A7ubuABIaEgAQFBoA5NnkAH5OlQBiiE4AIioHABohBQAAAAAAAAMIAAAA+gAAAAAA8vULAPbg7AAMeW8A+rm4AO/e3gAAAAAAAAAAAPgHBgD1AwEAEwgSAPbyAADtzsEAu9K0/wTy0MMADSYsAAQMAAAA+u8AAAQZAAAA9gAtQhsAFhQaAAAAAAAAAAAAAAAAAN7SHAAAAAAAICodABUO9QAA/vMAAAAAAAAAAAAAAAAAAAAAAA8bBAAFOgwA1uLTAAbb2QANAAAA+AcGAAAAAADzAgEAAAAAANkDAQD0DfkA3BDJAA/l7gAE99rFAA0rLgAABO8AAPoAAAAAAAAAAAAAGyUuABwmFQAAAAAAAAAAALeoyQASGhIAaH2EAAga3AAA/eQAAPzzAAD/+wAA/fgA4OsBAPP+EgAa++sAS2gIAMKntADW6vkAKgwIAAv9/wD1AwEA7goEAAAAAAD4EwYA80IOAO0E7wAPAAAABP3z8AAIFw0AAPrvAAAAAAAA/PgAAADvAAEAAAAAAOoAAAAAAOvm9gDZwbcAW3lbAAcZ5wAA99oAAP/xAAD+9wAA/fkAAAMIAM/nBQC77/EA+/8CADAFGwBHTO4AMUHzAObDBADh0/gA2vQNACYM8wAFQzoA/UE3AOXtzAD78vsABwUNAAT+/gMABAkDAAD48wAAAAAAAAAAAAAAEQAAAO8AAAb5AAD+BwAVHPkAYH9XAA8XEAAB+M8AAP/xAAAA+AAA//sAAAAAAAD9+AAxGfsA5ww0ANPm0QDVAfgA1vgNAFP8AwBBTu4A5jkXAOjlDQBSIwMAzQUYANLx1QDq7u0ABwoCACkWNwACAAAAAP/37wAA/fMAAAAAAAAAAAAA+u8AAPz4AAD55wAA/O8AAPr2ABAT/gAB+M8AAP/xAAAA+AAA/vkAAP35AAD9+AAA+voAIBX/ABYDEQAjDiYA+fYBAP/8AACtBwoAv+sSABQJ/wACFQYAzQUjAMf+6wDl6uQABwr/ABMAEQAyITcABAAGBAD58/IACwAFAAD98wAA+AAAAAgNAAD67wAACQIAAP8AAAAA+AAA+/EAAAD4AAD++QAA//sAAP35AAAAAAAAAAAAAAAAAP/4+AA0CsAAAABAAO385gDq7u0ABwr/ALMEEQAk+f4A8gH/AMv26ADv/O8ABQYAAA0ICgA1AhgAEw0VAQQLGBwA+enwAAD6DwAAAAAAAAbzAAD4AAD4+PgA79wHAObjKQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAv8BgAdHSMAAAAAAOru7QD+BvkA1f8DAAAI+wDtAPgAAgQAAAEEAAAd1gUAO0BCAAAAlQAECik5AO/CogAARDAAAPrzAAAADQAABvMA3tb3AOjUDgARHh8ABCceAAT6AQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAgAAAAA/f0AP0JBADyDsUA//wAAAEE/QAAAAAA//wAAAX4CABVCx0AGe/DAA8iLgAAAAAABAkqTwDnqZAA8d/vAA8bBAAA+vMA/gD6ANrE8gDZtPMAGDQDAFRQngALDAoA/QABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAH9/QD/AwMAAv36ACkDBQAZywsAAc3UAOkZ+gDyAf8A+wP7AEgPJgA6KxMA7pWcABFMbQADER4AAAAAAAQIHi8ADy43APLI5QAPUxkA//z4AAIACABOTyIA0ScCALNttgCk6k8ANlxfAB0zMgAMDxIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAvb3AOnr6ADRzL0A0peYABAeKQB/j0EAs+HQAMDs9gBKLB8A8M/XAP716wAKLUQAAgQHAQAAAAAEAwgMAfPOov/gi2QAGd4OAAMeAwD//PgAAhAAADFHIADRclUA4o6rAMjS2gDpMSsAEgYVAAAAAAAL/gIAAAAAAAAAAAAAAAAA9QL+AO766wD16OcA1dfdAAcgDgBUgmoABP3HACDl9wBB2d0A5+TzAPXi4AATSGQACRw1AQAAAAAAAAAAAQAAAAD///7/45NQAPngygAjWBgAAAAAAAAAAAAABgMA/RFXANKc5gDJnK0AFen2AAAAAAAZAAgAAAAAAAz/AgAAAAAA9AH+AOcA+AAAAAAA1gf5ACM8KQBGf2YAERLpAOGvsgAHHkIADyUgAP/yzQDxx70AASJWAB1diAEAAAAAAAAAAAEAAAAAAAAAAPvr2//chEYADhnwABlCHwAA+vwAAAAAAAEQDwD8DU8A7+MRAOO51QD2ws0A+uLtAA3w+wAAAAAAAAAAAAAAAADzEAUA+ikeAB5JKAAiSEoA9dW8APrmwwAIIkIAEUZMAADvwwAA6eAA/u7fAOW92QAKSIsAFDdTAQAAAAABAAAAAAAAAAAAAAAA99u6/+CNVgAOIAEAGTwbAAAAAAAAAAAAAAYEAAEMOgAADzQA8+P6AOPL2AD72e8A/e7xAAAAAAADEg8AEzcZABQ3LwAGDgMAAfXsAN6ooAAAAAAAIlhgAPwJ4wAAAAAABfDxAP7u3wD819kA6ewbAB55wwEAAAAABAAAAAAAAAAAAAAAAAklRgH327r/4I5jAPvz5AAcOhAAAg8MAADz9gD/87wAAPTGAAwDKwAmQykAA0omAAAAAAAAAAAAAAAAAAAAAAD9+d0AAePXAAAAAAAGAgcAAAAAAAH23gAF+fYAAAAAAP/18QAC9/UAAAAAAPz38gAAAAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAACSVGAfvr2//nnGIA26vIABMxDAASJA8AAg8MAADz9gAAB9EAAvnuAAAHEgABCBkAAAAAAAAAAAAAAAAABAP2AAAIGQAAAAAA+v7bAPnc2wD42QIABhgKAAAAAAAC9/UAAO7sAPDo9wAHIEMAAADRAAAAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/vz5/+7NtADsr4YA/+jSAA4oDAAQGBUABhIKAAMS/AD/AB0AAAAAAAEHEgAAAAAAAAAAAPbv/ADy3OIA+93aAPTu/gAAMl8AB+W6ABko/AAKCQQAAAAAAPXm8ADq7xUAHW2sAAUVJQEAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAA/fz8//f3+AAAAAAA4+XlAPXSqgD+x7IADe/QAAAAAAAKEw4A/wj9AAkICQAAAAAA+PD6APn5AQD99PEA9wccAAcsTwD9N1AAGyMtAPzdygDzu38ABe7dAPr/BQAHIDYAFVOYAAkbGgEAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAPn5+f/09PQA7/DxAPT3+QDz8/QA9vTqAP3r2wAA7PIAB/PRAP30/gAAAAAAAAAAAAMMAgD5DS8AABQOAAMVJQAKDBYACggGAAoJCAAQDw0AAuPRAPrZwQAAAAAAFEFTAAkcNQEAAAAAAAAAAAAAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA///+//r6+wD7+vsA+fr5APr6+QD8+/wA+fv8APv7+wD5/P4AAAAAAAAAAAAAAAAABwQCAAUFBQAHBQQACgsLAAcGBwAFBgUABAMDAAMEBAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA43Ns0dMT/rMAAAAASUVORK5CYII=\" /></span>好！欢迎光临全国品牌<strong>【生活家家居-大连站】<br /><span style=\"font-size:13px;\">1.</span></strong>现在即可咨询<span style=\"font-size:13px; color: rgb(204, 0, 0); background-color: rgb(255, 255, 255);\">【生活家成功登陆央视和大连生活家冲A级公司的优惠活动】</span><br /><strong><span style=\"font-size:13px;\">2.</span></strong><span style=\"font-size:13px;\">现在即可咨询</span><span style=\"font-size:13px; color: rgb(204, 0, 0);\">【报价、材料、设计等装修问题<span style=\"color: rgb(204, 0, 0);font-size:13px;\">】</span></span><br /><strong><span style=\"font-size:13px;\">3.</span></strong>现在即可<span style=\"color: rgb(204, 0, 0);font-size:13px;\">【</span><span style=\"font-size:13px;color:#cc0000;\">提前预约您喜欢的设计师】</span><br />我是您的专属客户经理：<strong><span style=\"font-size:13px;color:#330033;\">刘凤娟</span></strong><span style=\"font-size:10px;\"><strong>（艾米丽）</strong></span>，可以直接给我来电：<strong><span style=\"font-size:13px;\">15940887985 </span></strong>QQ：<strong><span style=\"font-size:13px;\">924482037</span></strong>（Babyuan）<br /></div>";
        re2.carousel_prompt2 = "";
        re2.carousel_prompt3 = "";
        re2.carousel_prompt4 = "";
        re2.carousel_prompt5 = "";
        re2.carousel_prompt6 = "";
        re2.carousel_prompt7 = "";
        re2.carousel_prompt8 = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10209308";
	re2.prompt = "您好，欢迎访问生活家装饰长沙分公司官方网站。我是生活家网络客服谭思颖，任何装修咨询请在线咨询或拨打联系电话：<span style=\"color: rgb(10, 75, 34); font-weight: bold; text-decoration: underline; cursor: pointer;\" class=\"send_sms_from_msg callsoft_from_msg\" data=\"13755186200\">13755186200</span>。请问您是想咨询装修预算、装修案例还是预约设计老师呢？";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10213120";
	re2.prompt = "<p><span style=\"font-size:18px;\"><span style=\"font-family: arial, 宋体; line-height: 21px; background-color: rgb(241, 248, 249);\">您好，欢迎光临</span><span style=\"font-family: arial, 宋体; line-height: 21px; background-color: rgb(241, 248, 249);\">央视合作品牌——生活家装饰</span><span style=\"font-family: arial, 宋体; line-height: 21px; background-color: rgb(241, 248, 249);\">！生活家装饰集团，全国25家分公司，集团化全球集采，率先推出拎包整装服务，<span style=\"color:#ff6666;\">详询：</span></span><span style=\"color:#ff6666;\">电话13856445516可加微信~QQ：805764824！</span></span><br /></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10216082";
	re2.prompt = "<div>&nbsp;您<img src=\"file:///C:\\Users\\Administrator\\Documents\\Tencent Files\\1004686391\\Image\\Group\\VJ$GJZ9TGU~0V}UUMU4WUMK.png\" alt=\"\" />好！欢迎光临【央视合作品牌】生活家家居-大连站<br />1.现在即可咨询【<div>&nbsp;<span style=\"font-size:16px;\"><span style=\"color:#ff0000;\">生活家成功登陆央视和大连生活家冲A级公司的优惠活动</span>&nbsp;</span></div>】<br />2.现在即可咨询【<span style=\"font-size:16px;color:#ff0000;background-color: rgb(255, 255, 255);\">报价、材料、设计等装修问题</span>】<br />3.现在即可提前预约您喜欢的设计师。<br />我是您的专属客户经理：周宇，也可以直接打电话给我：13591373707。</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10217829";
	re2.prompt = "<p>您好！欢迎进入石家庄生活家装饰官网，我是家装顾问韩琳，<span style=\"color:#0a4b22;\"><strong><u>13832128827</u></strong></span>，这是我的手机号，欢迎随时咨询&nbsp;<br /></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218468";
	re2.prompt = "<p>您好，欢迎您的咨询，请问有什么需要帮助的吗？</p><p><br /></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218469";
	re2.prompt = "<p><span style=\"font-size:13px;\">生活家装饰正式合作智能家居品牌</span></p><p><strong><span style=\"font-size:16px;color:#cc0000;\">888元</span><span style=\"font-size:13px;\">享全屋智能家居，抢先体验仅限</span><span style=\"font-size:16px;color:#cc0000;\">20户！</span></strong></p><p><span style=\"font-size:13px;\">大连生活家装饰带您走进智能家居时代！我是您的客户经理，李聪 拨打电话：</span></p><p><span style=\"font-size:13px;\"><span style=\"color: rgb(153, 0, 0);\">&nbsp;</span><span style=\"color: rgb(153, 0, 0);\"><strong>18640885201微信：cong0916</strong></span>获得更多装修资讯。</span></p><div style=\"top: 0px;\"><span style=\"font-size:13px;\">﻿﻿</span></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218470";
	re2.prompt = "<span style=\"font-family: SimSun;\"><span style=\"font-size:16px;\">您好，我是您的专属客服，关于家装的一切问题都可以问我。<span style=\"color:#6600cc;\">如不方便打字，可留下您电话！或可以直接来电！</span></span></span><br /><p><span style=\"font-size: 16px;\"><strong><span style=\"color:#3333ff;\">Tel:<strong>15942430873</strong></span></strong></span></p><p><span style=\"font-size: 16px;\"><strong><span style=\"color:#3366ff;\">QQ:1134032511</span></strong></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218476";
	re2.prompt = "<strong><span style=\"font-size: 16px;\"><span style=\"color:#ff0000;\">您好！欢迎光临</span><strong>全国品牌【生活家家居-北京站】</strong><br /><span style=\"color:#ff0000;\">1. 现在即可咨询【</span><strong>当期促销优惠详情</strong><span style=\"color:#ff0000;\">】</span><br /><span style=\"color:#ff0000;\">2. 现在即可咨询【</span><strong>报价、材料、设计等装修问题</strong><span style=\"color:#ff0000;\">】</span><br /><span style=\"color:#ff0000;\">3. 现在即可</span><strong>提前预约您喜欢的设计师；</strong><br /><span style=\"color:#ff0000;\">4.生活家首推“</span><strong><span style=\"color: rgb(0, 153, 0);\">德标工程</span></strong><span style=\"color:#ff0000;\">”和“</span><span style=\"color: rgb(0, 153, 0);\"><strong>健康环保协议书</strong></span><span style=\"color:#ff0000;\">”，为您家装保驾护航！</span><br /><span style=\"color:#ff0000;\">我是您的专属服务顾问</span><span style=\"color:#000099;\">吕亚雷</span><span style=\"color:#ff0000;\">，您可以直接给我来电：</span><br /><u><span style=\"color:#ff0000;\">15011587429 或者加我微信号：w136278662 &nbsp;QQ号：136278662</span></u></span></strong><br /><div><strong><span style=\"color: rgb(255, 0, 0);\"><span style=\"font-size: 16px;\"><strong><u><br /></u></strong></span></span></strong></div>";
            re2.carousel = "1";
        re2.carousel_interval = "15";
    	re2.carousel_num = "1";
        re2.carousel_prompt1 = "<strong><span style=\"font-size: 16px;\"><span style=\"color: rgb(255, 0, 0);\">您好！欢迎光临</span>全国品牌【生活家家居-北京站】<br /><span style=\"color: rgb(255, 0, 0);\">1. 现在即可咨询【</span>当期促销优惠详情<span style=\"color: rgb(255, 0, 0);\">】</span><br /><span style=\"color: rgb(255, 0, 0);\">2. 现在即可咨询【</span>报价、材料、设计等装修问题<span style=\"color: rgb(255, 0, 0);\">】</span><br /><span style=\"color: rgb(255, 0, 0);\">3. 现在即可</span>提前预约您喜欢的设计师；<br /><span style=\"color: rgb(255, 0, 0);\">4.生活家首推“</span><span style=\"color: rgb(0, 153, 0);\">德标工程</span><span style=\"color: rgb(255, 0, 0);\">”和“</span><span style=\"color: rgb(0, 153, 0);\">健康环保协议书</span><span style=\"color: rgb(255, 0, 0);\">”，为您家装保驾护航！</span><br /><span style=\"color: rgb(255, 0, 0);\">我是您的专属服务顾问</span><span style=\"color: rgb(0, 0, 153);\">吕亚雷</span><span style=\"color: rgb(255, 0, 0);\">，您可以直接给我来电：</span><br /><u><span style=\"color: rgb(255, 0, 0);\">15011587429 或者加我微信号：w136278662 &nbsp;QQ号：136278662</span></u></span></strong><br /><div><strong><span style=\"font-size: 16px;\"><u><span style=\"color: rgb(255, 0, 0);\"><br /></span></u></span></strong></div>";
        re2.carousel_prompt2 = "<strong><span style=\"font-size: 16px;\"><span style=\"color: rgb(255, 0, 0);\">您好！欢迎光临</span>全国品牌【生活家家居-北京站】<br /><span style=\"color: rgb(255, 0, 0);\">1. 现在即可咨询【</span>当期促销优惠详情<span style=\"color: rgb(255, 0, 0);\">】</span><br /><span style=\"color: rgb(255, 0, 0);\">2. 现在即可咨询【</span>报价、材料、设计等装修问题<span style=\"color: rgb(255, 0, 0);\">】</span><br /><span style=\"color: rgb(255, 0, 0);\">3. 现在即可</span>提前预约您喜欢的设计师；<br /><span style=\"color: rgb(255, 0, 0);\">4.生活家首推“</span><span style=\"color: rgb(0, 153, 0);\">德标工程</span><span style=\"color: rgb(255, 0, 0);\">”和“</span><span style=\"color: rgb(0, 153, 0);\">健康环保协议书</span><span style=\"color: rgb(255, 0, 0);\">”，为您家装保驾护航！</span><br /><span style=\"color: rgb(255, 0, 0);\">我是您的专属服务顾问</span><span style=\"color: rgb(0, 0, 153);\">吕亚雷</span><span style=\"color: rgb(255, 0, 0);\">，您可以直接给我来电：</span><br /><u><span style=\"color: rgb(255, 0, 0);\">15011587429 或者加我微信号：w136278662 &nbsp;QQ号：136278662</span></u></span></strong><br /><div><strong><span style=\"font-size: 16px;\"><u><span style=\"color: rgb(255, 0, 0);\"><br /></span></u></span></strong></div>";
        re2.carousel_prompt3 = "<strong><span style=\"font-size: 16px;\"><span style=\"color: rgb(255, 0, 0);\">您好！欢迎光临</span>全国品牌【生活家家居-北京站】<br /><span style=\"color: rgb(255, 0, 0);\">1. 现在即可咨询【</span>当期促销优惠详情<span style=\"color: rgb(255, 0, 0);\">】</span><br /><span style=\"color: rgb(255, 0, 0);\">2. 现在即可咨询【</span>报价、材料、设计等装修问题<span style=\"color: rgb(255, 0, 0);\">】</span><br /><span style=\"color: rgb(255, 0, 0);\">3. 现在即可</span>提前预约您喜欢的设计师；<br /><span style=\"color: rgb(255, 0, 0);\">4.生活家首推“</span><span style=\"color: rgb(0, 153, 0);\">德标工程</span><span style=\"color: rgb(255, 0, 0);\">”和“</span><span style=\"color: rgb(0, 153, 0);\">健康环保协议书</span><span style=\"color: rgb(255, 0, 0);\">”，为您家装保驾护航！</span><br /><span style=\"color: rgb(255, 0, 0);\">我是您的专属服务顾问</span><span style=\"color: rgb(0, 0, 153);\">吕亚雷</span><span style=\"color: rgb(255, 0, 0);\">，您可以直接给我来电：</span><br /><u><span style=\"color: rgb(255, 0, 0);\">15011587429 或者加我微信号：w136278662 &nbsp;QQ号：136278662</span></u></span></strong><br /><div><strong><span style=\"font-size: 16px;\"><u><span style=\"color: rgb(255, 0, 0);\"><br /></span></u></span></strong></div>";
        re2.carousel_prompt4 = "<strong><span style=\"font-size: 16px;\"><span style=\"color: rgb(255, 0, 0);\">您好！欢迎光临</span>全国品牌【生活家家居-北京站】<br /><span style=\"color: rgb(255, 0, 0);\">1. 现在即可咨询【</span>当期促销优惠详情<span style=\"color: rgb(255, 0, 0);\">】</span><br /><span style=\"color: rgb(255, 0, 0);\">2. 现在即可咨询【</span>报价、材料、设计等装修问题<span style=\"color: rgb(255, 0, 0);\">】</span><br /><span style=\"color: rgb(255, 0, 0);\">3. 现在即可</span>提前预约您喜欢的设计师；<br /><span style=\"color: rgb(255, 0, 0);\">4.生活家首推“</span><span style=\"color: rgb(0, 153, 0);\">德标工程</span><span style=\"color: rgb(255, 0, 0);\">”和“</span><span style=\"color: rgb(0, 153, 0);\">健康环保协议书</span><span style=\"color: rgb(255, 0, 0);\">”，为您家装保驾护航！</span><br /><span style=\"color: rgb(255, 0, 0);\">我是您的专属服务顾问</span><span style=\"color: rgb(0, 0, 153);\">吕亚雷</span><span style=\"color: rgb(255, 0, 0);\">，您可以直接给我来电：</span><br /><u><span style=\"color: rgb(255, 0, 0);\">15011587429 或者加我微信号：w136278662 &nbsp;QQ号：136278662</span></u></span></strong><br /><div><strong><span style=\"font-size: 16px;\"><u><span style=\"color: rgb(255, 0, 0);\"><br /></span></u></span></strong></div>";
        re2.carousel_prompt5 = "<strong><span style=\"font-size: 16px;\"><span style=\"color: rgb(255, 0, 0);\">您好！欢迎光临</span>全国品牌【生活家家居-北京站】<br /><span style=\"color: rgb(255, 0, 0);\">1. 现在即可咨询【</span>当期促销优惠详情<span style=\"color: rgb(255, 0, 0);\">】</span><br /><span style=\"color: rgb(255, 0, 0);\">2. 现在即可咨询【</span>报价、材料、设计等装修问题<span style=\"color: rgb(255, 0, 0);\">】</span><br /><span style=\"color: rgb(255, 0, 0);\">3. 现在即可</span>提前预约您喜欢的设计师；<br /><span style=\"color: rgb(255, 0, 0);\">4.生活家首推“</span><span style=\"color: rgb(0, 153, 0);\">德标工程</span><span style=\"color: rgb(255, 0, 0);\">”和“</span><span style=\"color: rgb(0, 153, 0);\">健康环保协议书</span><span style=\"color: rgb(255, 0, 0);\">”，为您家装保驾护航！</span><br /><span style=\"color: rgb(255, 0, 0);\">我是您的专属服务顾问</span><span style=\"color: rgb(0, 0, 153);\">吕亚雷</span><span style=\"color: rgb(255, 0, 0);\">，您可以直接给我来电：</span><br /><u><span style=\"color: rgb(255, 0, 0);\">15011587429 或者加我微信号：w136278662 &nbsp;QQ号：136278662</span></u></span></strong><br /><div><strong><span style=\"font-size: 16px;\"><u><span style=\"color: rgb(255, 0, 0);\"><br /></span></u></span></strong></div>";
        re2.carousel_prompt6 = "<strong><span style=\"font-size: 16px;\"><span style=\"color: rgb(255, 0, 0);\">您好！欢迎光临</span>全国品牌【生活家家居-北京站】<br /><span style=\"color: rgb(255, 0, 0);\">1. 现在即可咨询【</span>当期促销优惠详情<span style=\"color: rgb(255, 0, 0);\">】</span><br /><span style=\"color: rgb(255, 0, 0);\">2. 现在即可咨询【</span>报价、材料、设计等装修问题<span style=\"color: rgb(255, 0, 0);\">】</span><br /><span style=\"color: rgb(255, 0, 0);\">3. 现在即可</span>提前预约您喜欢的设计师；<br /><span style=\"color: rgb(255, 0, 0);\">4.生活家首推“</span><span style=\"color: rgb(0, 153, 0);\">德标工程</span><span style=\"color: rgb(255, 0, 0);\">”和“</span><span style=\"color: rgb(0, 153, 0);\">健康环保协议书</span><span style=\"color: rgb(255, 0, 0);\">”，为您家装保驾护航！</span><br /><span style=\"color: rgb(255, 0, 0);\">我是您的专属服务顾问</span><span style=\"color: rgb(0, 0, 153);\">吕亚雷</span><span style=\"color: rgb(255, 0, 0);\">，您可以直接给我来电：</span><br /><u><span style=\"color: rgb(255, 0, 0);\">15011587429 或者加我微信号：w136278662 &nbsp;QQ号：136278662</span></u></span></strong><br /><div><strong><span style=\"font-size: 16px;\"><u><span style=\"color: rgb(255, 0, 0);\"><br /></span></u></span></strong></div>";
        re2.carousel_prompt7 = "<strong><span style=\"font-size: 16px;\"><span style=\"color: rgb(255, 0, 0);\">您好！欢迎光临</span>全国品牌【生活家家居-北京站】<br /><span style=\"color: rgb(255, 0, 0);\">1. 现在即可咨询【</span>当期促销优惠详情<span style=\"color: rgb(255, 0, 0);\">】</span><br /><span style=\"color: rgb(255, 0, 0);\">2. 现在即可咨询【</span>报价、材料、设计等装修问题<span style=\"color: rgb(255, 0, 0);\">】</span><br /><span style=\"color: rgb(255, 0, 0);\">3. 现在即可</span>提前预约您喜欢的设计师；<br /><span style=\"color: rgb(255, 0, 0);\">4.生活家首推“</span><span style=\"color: rgb(0, 153, 0);\">德标工程</span><span style=\"color: rgb(255, 0, 0);\">”和“</span><span style=\"color: rgb(0, 153, 0);\">健康环保协议书</span><span style=\"color: rgb(255, 0, 0);\">”，为您家装保驾护航！</span><br /><span style=\"color: rgb(255, 0, 0);\">我是您的专属服务顾问</span><span style=\"color: rgb(0, 0, 153);\">吕亚雷</span><span style=\"color: rgb(255, 0, 0);\">，您可以直接给我来电：</span><br /><u><span style=\"color: rgb(255, 0, 0);\">15011587429 或者加我微信号：w136278662 &nbsp;QQ号：136278662</span></u></span></strong><br /><div><strong><span style=\"font-size: 16px;\"><u><span style=\"color: rgb(255, 0, 0);\"><br /></span></u></span></strong></div>";
        re2.carousel_prompt8 = "<strong><span style=\"font-size: 16px;\"><span style=\"color: rgb(255, 0, 0);\">您好！欢迎光临</span>全国品牌【生活家家居-北京站】<br /><span style=\"color: rgb(255, 0, 0);\">1. 现在即可咨询【</span>当期促销优惠详情<span style=\"color: rgb(255, 0, 0);\">】</span><br /><span style=\"color: rgb(255, 0, 0);\">2. 现在即可咨询【</span>报价、材料、设计等装修问题<span style=\"color: rgb(255, 0, 0);\">】</span><br /><span style=\"color: rgb(255, 0, 0);\">3. 现在即可</span>提前预约您喜欢的设计师；<br /><span style=\"color: rgb(255, 0, 0);\">4.生活家首推“</span><span style=\"color: rgb(0, 153, 0);\">德标工程</span><span style=\"color: rgb(255, 0, 0);\">”和“</span><span style=\"color: rgb(0, 153, 0);\">健康环保协议书</span><span style=\"color: rgb(255, 0, 0);\">”，为您家装保驾护航！</span><br /><span style=\"color: rgb(255, 0, 0);\">我是您的专属服务顾问</span><span style=\"color: rgb(0, 0, 153);\">吕亚雷</span><span style=\"color: rgb(255, 0, 0);\">，您可以直接给我来电：</span><br /><u><span style=\"color: rgb(255, 0, 0);\">15011587429 或者加我微信号：w136278662 &nbsp;QQ号：136278662</span></u></span></strong><br /><div><strong><span style=\"font-size: 16px;\"><u><span style=\"color: rgb(255, 0, 0);\"><br /></span></u></span></strong></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218484";
	re2.prompt = "<p>您好，我是今天值班的经理【张士兵】如果不方便打字，可以直接拨打电话：18801292789（微信）QQ910600267，请问您家多大面积呢？</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218486";
	re2.prompt = "您好，欢迎您的咨询，我是【小贺】<strong><span style=\"color:#ff0000;\">18295757981（同微信）&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></strong>今天的客服值班经理，<strong><span style=\"color:#ff0000;\">您家多大面积呢？</span></strong>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218497";
	re2.prompt = "您好，欢迎您的咨询，请问有什么需要帮助的吗？";
            re2.carousel = "1";
        re2.carousel_interval = "15";
    	re2.carousel_num = "1";
        re2.carousel_prompt1 = "<div class=\"chat_word\"><div><strong><span style=\"FONT-SIZE: 16px\"><span style=\"BACKGROUND-COLOR: #ffffff\">您好！欢迎光临全国品牌【</span><span style=\"BACKGROUND-COLOR: #ffffff; COLOR: #ff0000\">生活家家居-北京站</span><span style=\"BACKGROUND-COLOR: #ffffff\">】</span></span></strong></div><div><span style=\"font-weight: bold;\"><span style=\"FONT-SIZE: 16px\"><strong><span style=\"BACKGROUND-COLOR: #ffffff\">&nbsp;我是今天的值班经理【苟丹</span><span style=\"BACKGROUND-COLOR: #ffffff\">】</span></strong><br /><span style=\"BACKGROUND-COLOR: #ffffff\">央视合作装修品牌，样板间征集，欢迎您的咨询。</span><br /><span style=\"BACKGROUND-COLOR: #ffffff\">热线：</span><u><span style=\"color:#ff0000;\"><span style=\"BACKGROUND-COLOR: #ffffff\">15810613317</span></span></u><span style=\"COLOR: #ff0000\"><br /></span><span style=\"BACKGROUND-COLOR: #ffffff\">&nbsp;&nbsp;</span><span style=\"BACKGROUND-COLOR: #ffffff\">QQ:</span><span style=\"BACKGROUND-COLOR: #ffffff\">3028025350</span><span style=\"BACKGROUND-COLOR: #ffffff; COLOR: #ff0000\"><u>（微信同步）</u></span></span></span></div><div><strong><span style=\"BACKGROUND-COLOR: #ffffff; FONT-SIZE: 16px\"><span style=\"BACKGROUND-COLOR: #ffffff; COLOR: #330000\">&nbsp; &nbsp;请问您家是多大面积那个小区的呢？</span></span></strong></div></div><br />";
        re2.carousel_prompt2 = "<p><span style=\"BACKGROUND-COLOR: #b8d100\">如果您打字不方便，您可以加我微信<span style=\"BACKGROUND-COLOR: #ffe500\">3028025350</span>咨询交流</span></p>";
        re2.carousel_prompt3 = "<p>您家是多大面积呢？</p><p><br /></p>";
        re2.carousel_prompt4 = "";
        re2.carousel_prompt5 = "";
        re2.carousel_prompt6 = "";
        re2.carousel_prompt7 = "";
        re2.carousel_prompt8 = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218541";
	re2.prompt = "<div><span style=\"font-size:16px;\">我们是做中高端品质家装的家装公司广州生活家，公司主要是以整体全包为主的，包设计，包施工，包材料。</span></div><div><span style=\"font-size:16px;\">欢迎致电<strong>15915700463</strong>杨小姐</span></div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218542";
	re2.prompt = "欢迎光临全国品牌【生活家家居-广州站】<br />现在即可咨询：<br />1、【预约设计师量尺】<br />2、【8000方展厅体验预约】<br />3、【欧洲品质大牌主材任你选】<br />4、【五分钟短信报价】编辑小区名称户型面积装修风格老房/新房【到】13417028309<br /><p>我是您的专属家装顾问可以直接给我来电13417028309 &nbsp; QQ:487614518</p><p><br /></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218543";
	re2.prompt = "欢迎咨询中国健康整装领导者——生活家装饰客服，您可以向我们咨询关于装修的一切疑问，同时欢迎网络预约设计师，享受更多优惠。 友情提示：如果您不方便打字，您可以拨打电话13928852138 李先生";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218545";
	re2.prompt = "您好，欢迎访问中国健康整装品牌生活家——广州站！我是您的装修顾问小古（15521199213微信同号），您需要了解什么装修问题呢？";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218623";
	re2.prompt = "<p><strong>您好，我是今天的值班经理【张帅】，如果不方便打字，可直接拨打电话：<span style=\"color:#ff0000;\">15101001784</span>（微信），QQ：401732594</strong></p><p><strong>请问您家多大面积呢？</strong></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218810";
	re2.prompt = "<p><strong>您好，我是今天的值班经理【史贺】，如果不方便打字可以直接打电话：<span style=\"color:#ff0000;\">13718717812</span>（微信）；QQ：2213521641.</strong></p><p><strong>您家多大面积呢？</strong></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10219358";
	re2.prompt = "您好，欢迎您的咨询，请问有什么需要帮助的吗？";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10219892";
	re2.prompt = "您好，欢迎光临生活家家居。我是您的专属客户经理曾炯（电话&amp;微信：18584050815 QQ：562507416），请问您是哪个楼盘的房子在考虑装修呢？";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10219895";
	re2.prompt = "您好，欢迎光临生活家家居，我是你的专属客服经理冯宇13540004315，请问你是哪个楼盘、多大面积在考虑装修呢？";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10219912";
	re2.prompt = "您好，我是您的专属客户经理辜俊川（13488908003）请问你是哪个楼盘在考虑装修呢？如未及时回复可直接拨打电话进行沟通。";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10220662";
	re2.prompt = "<p><span style=\"font-family: 'Comic Sans MS';\"><strong><span style=\"background-color: rgb(255, 255, 255);\">哈喽~·欢迎进入石家庄生活家装饰官方网站。您对爱家的构思可直接戳我为您解答哦！</span></strong></span></p><p><span style=\"font-family: 'Comic Sans MS';\"><strong><span style=\"background-color: rgb(255, 255, 255);\"><span style=\"font-size:16px;\">【咨询报价】</span>请回复<span style=\"font-size:18px;color:#ff0000;\">1</span></span></strong></span></p><p><span style=\"font-family: 'Comic Sans MS';\"><strong><span style=\"background-color: rgb(255, 255, 255);\"><span style=\"font-size:16px;\">【预约设计】</span>请回复<span style=\"font-size:18px;color:#ff0000;\">2</span></span></strong></span></p><p><span style=\"font-family: 'Comic Sans MS';\"><strong><span style=\"background-color: rgb(255, 255, 255);\"><span style=\"font-size:16px;\">【参观工地】</span>请回复<span style=\"font-size:18px;color:#ff0000;\">3</span></span></strong></span></p><p><span style=\"font-family: 'Comic Sans MS';\"><strong><span style=\"background-color: rgb(255, 255, 255);\"><span style=\"font-size:16px;\">【活动优惠】</span>请回复<span style=\"font-size:18px;color:#ff0000;\">4</span></span></strong></span></p><p><span style=\"font-family: 'Comic Sans MS';\"><strong><span style=\"background-color: rgb(255, 255, 255);\"><span style=\"font-size:16px;\">【主材品牌】</span>请回复<span style=\"font-size:18px;color:#ff0000;\">5</span></span></strong></span></p><p><span style=\"font-family:Comic Sans MS;\"><strong><span style=\"font-size:13px;\">咨询电话和微信</span><span style=\"font-size:13px;color:#ff0000;\">18003316057</span><span style=\"color:#ff0000;font-size:16px;\">，</span><span style=\"font-size:13px;\">如打字不方便可以留下您的联系方式，我会马上回复您。</span></strong></span></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10220667";
	re2.prompt = "<!--StartFragment --><div><span style=\"color:#ff0000;\">您好！欢迎光临央视上榜品牌【生活家装饰-济南】<br />“5.20爱家专场”为自己的爱家添几分精彩！爱家大钜惠，签单赠送客厅顾家家具一套，还在等什么，赶快来吧。<br />现在即可点击右下角咨询！我是您的专属客户经理张新瑜。<br />如不方便打字，可留下您电话，我立即给您回电！或可以直接来电！<br />TEL:15165410826（同微信）&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QQ:1131144071<br /></span></div><p>﻿﻿</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10221066";
	re2.prompt = "您好，欢迎您的咨询，请问有什么需要帮助的吗？";
            re2.carousel = "1";
        re2.carousel_interval = "10";
    	re2.carousel_num = "1";
        re2.carousel_prompt1 = "<!--StartFragment --><div><br>您好！全国最大的整装集团公司、中央电视台合作单位（生活家装饰成都站）我们只做中高端整装<strong>——【新品预售</strong><strong>，感恩回馈老客户</strong><strong>】</strong>盛大活动！活动火热进行中……&nbsp; <span style=\"color: rgb(229, 51, 51);\">1，</span><strong><font color=\"#e53333\">高品质：生活家无论产品、服务乃至赠送绝对大牌合作；2，全成都首发，行业从来没有过的优惠，仅限新馆开业预售，3，联合上市品牌顾家家居半价抢16件套家具，百万家装补贴，仅限100户！</font></strong></div>";
        re2.carousel_prompt2 = "我是您的私人置家顾问小万，电话：13699010251，现在回复您的：<span style=\"color: rgb(229, 51, 51);\">楼盘+面积+手机</span>，生活家私人设计师将为您<span style=\"color: rgb(0, 153, 0);\">免费预算报价</span>！";
        re2.carousel_prompt3 = "";
        re2.carousel_prompt4 = "";
        re2.carousel_prompt5 = "";
        re2.carousel_prompt6 = "";
        re2.carousel_prompt7 = "";
        re2.carousel_prompt8 = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10221808";
	re2.prompt = "<div>欢迎光临中央电视台合作品牌生活家装饰<br />好设计，好家装，就选生活家&nbsp;<br />您好，我是您的网络专属客户经理【吴爽】，可以直接给我来电：18180604053（微信同号）QQ：2995830129&nbsp;很高兴为您服务！&nbsp;</div><br />";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10222871";
	re2.prompt = "<span style=\"background-color: rgb(255, 255, 255);\">您好</span>，<span style=\"color:#ff0000;\"><strong>太原生活家1周年&nbsp; 礼献全城，<span style=\"color:#333333;\">欢迎您的光临，请问有什么需要帮忙的吗？</span></strong></span>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10228011";
	re2.prompt = "<p>欢迎亲的咨询，请问我可以帮您什么呢？如不方便，可以留下您的联系方式！或者可以直接联系我【赵玥】</p><p>电话/微信：18698675850</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10229955";
	re2.prompt = "<span style=\"font-family:SimHei;font-size:18px;\">您好！欢迎光临全国品牌【生活家（北京）家居装饰有限公司】 &nbsp;我们的设计以客户为导向，根据不同业主的需求、喜好、文化背景等，打造适合于个人的专属定制方案。如果你也是爱家、懂生活的人，欢迎前来咨询预约，寻找属于自己的新家。速算报价：留下【<span style=\"color:#ff6666;\">姓名+联系方式+小区及面积+风格需求</span>】即可。咨询电话：<span style=\"color:#ff0000;\">15010095305(微信同号）QQ；774358724</span></span>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10229956";
	re2.prompt = "<span style=\"color: rgb(51, 102, 255); font-family: KaiTi_GB2312; font-size: 16px;\">您好，您是旧房翻新还是新房装修呢？如果您不方便打字可以直接来电，我叫马佳兴，电话</span><span style=\"font-family: KaiTi_GB2312; font-size: 16px;\"><span style=\"color: rgb(255, 0, 0);\">17710178625</span></span><span style=\"color: rgb(51, 102, 255); font-family: KaiTi_GB2312; font-size: 16px;\">&nbsp; QQ：mjxooo</span>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10229957";
	re2.prompt = "<h4><div>&nbsp;你好！欢迎光临全国品牌【生活家家居-北京站】<br />1、现在即可咨询【当期促销优惠详细】<br />2、现在即可咨询【报价、材料、设计等装修问题】<br />3、现在即可提前预约您喜欢的设计师；<br />4、生活家首推“德标工程”和“健康环保协议书”<br />为您家装保驾护航！<br />我是您的专属服务顾问赵经理，可以直接给我来电：&nbsp;<span style=\"color: rgb(255, 0, 0);\"><span style=\"font-size: 13px;\">15801038452（可添加微信）&nbsp;</span></span></div><p></p><p><span style=\"font-family: 'Microsoft YaHei'; line-height: 21px;\"><span style=\"color: rgb(255, 0, 0);\"><span style=\"font-size: 13px;\">QQ:117088708</span></span></span></p></h4>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10229961";
	re2.prompt = "您好，您是要咨询装修么?欢迎电话沟通,樱桃 : 13321172091 微信:h276256475";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10229963";
	re2.prompt = "<span style=\"font-family: 宋体; line-height: 14.4px; background-color: rgb(241, 248, 249);\">您是想了解装修设计、施工、主材、价格哪方面？我可以着重为您讲解！您打字不方便的话可以电话:15801132347（也可添加微信）也可留下您的【姓名+联系方式+小区名称】即可报名！</span>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10229974";
	re2.prompt = "<span style=\"font-size: 16px;\">您好！欢迎光临全国品牌【生活家（北京）家居装饰有限公司】</span>&nbsp; 不同业主的需求、喜好、文化背景等，打造适合于个人的专属定制方案。欢迎前来咨询预约，寻找属于自己的新家。速算报价：留下【<span style=\"color: rgb(204, 0, 0);\">姓名+联系方式+小区+风格需求</span>】即可。咨询电话：<span style=\"color:#ff0000;\">15911076838</span>(微信同号）QQ；<span style=\"color:#ff0000;\">1833395996</span>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10229975";
	re2.prompt = "你好！欢迎光临全国品牌【生活家家居-北京站】<br />1、现在即可咨询【当期促销优惠详细】<br />2、现在即可咨询【报价、材料、设计等装修问题】<br />3、现在即可提前预约您喜欢的设计师；<br />4、生活家首推“德标工程”和“健康环保协议书”<br />为您家装保驾护航！<br />我是您的专属服务顾问-袁世林，可以直接给我来电：13716435009（可添加微信）；QQ:497058904<div style=\"top: 0px;\">﻿﻿</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10229976";
	re2.prompt = "<p><strong><span style=\"font-size:18px;\"></span></strong></p><p style=\"margin: 1px 0px 0px; line-height: 21px; padding-left: 0px; font-family: arial, 宋体;\"><span style=\"font-size: 18px;\">您好，我是今天的值班经理<strong>王永</strong>，您是有房子要装修是吗？</span></p><p style=\"margin: 1px 0px 0px; line-height: 21px; padding-left: 0px; font-family: arial, 宋体;\"><span style=\"font-size: 16px;\"></span></p><p style=\"margin: 1px 0px 0px; line-height: 21px; padding-left: 0px; font-family: arial, 宋体;\"><span style=\"font-size: 24px;\"><span style=\"font-weight: bold;\"><span style=\"font-size: 18px;\">您可以直接给我打电话或者加我微信</span><span style=\"font-size: 18px;\">：<span style=\"color:#ff0000;\">18513580803</span>（</span><span style=\"font-size: 18px;\">微信）王永，朋友圈中有很多效果图和装修知识，欢迎您的咨询</span></span></span></p><p></p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5534110";
	re2.prompt = "";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5534111";
	re2.prompt = "您好，欢迎您的咨询，我是生活家客服经理，请问有什么需要帮助的吗？ ";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5534112";
	re2.prompt = "<p>&nbsp;您好！这里是中国高品质精装——生活家装饰！我是03号客服小谢. 请问您是需要了解装修的有关事宜吗？</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5609015";
	re2.prompt = "<span style=\"color:#ff0000;\">6月2【周年庆 巅峰惠 】优惠活动，一年仅有一次的逆天抄底钜惠（活动当天488套餐直降30元/平米 ，变身458元/平米）优活动咨询18798031894胡高琼</span><pre style=\"TOP: 0px\">&nbsp;</pre>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5615244";
	re2.prompt = "生活家装饰巫梦梅为您服务，请问有什么需要帮助的吗？全国咨询热线：400-993-6661 ";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5623830";
	re2.prompt = "您好，欢迎您的咨询，武汉生活家装饰家装顾问小吴为您服务，请问有什么装修方面需要帮助的？ ";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5626303";
	re2.prompt = "您好，生活家装饰客户经理李莎欢迎您的咨询，请问您有什么需要我帮助的吗？ 欢迎您致电029-81296916详细咨询！ ";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5627092";
	re2.prompt = "<p class=\"lmsg_color\">您好，欢迎来到生活家(北京）家居装饰有限公司武汉分公司，我是您的专属客户经理鲁文艳，从事家装行业3年，成功案例有：保利心语，福星城，东方夏威夷等。如果您有什么疑问，也可以拨打我的电话：<span style=\"color:#a4b22;font-weight: bold; text-decoration: underline; cursor: pointer;\">13797052910</span>或者加我的QQ：563942995 家装热线：027-83330280</p><div class=\"lmsg_color\">请问您是有装修方面的需求吗</div><p>&nbsp;</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5631489";
	re2.prompt = "<p><span style=\"font-size:24px;\">588新产品正式上线啊~30套德系样板房限量征集~纯德系工艺~德系材料，让你的家更加舒适、舒心。我是专业客户经理：张彪，竭诚为你服务。电话：18282061552</span></p><p>&nbsp;</p>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5635452";
	re2.prompt = "您好，长沙生活家装饰客服为您服务，请问有什么需要帮助的吗？ ";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5637329";
	re2.prompt = "您好，欢迎您的咨询，请问有什么需要帮助的吗？";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5639093";
	re2.prompt = "<div>{53b#15#}庆祝合肥新店开业，抢环保样板间，直省30%！！！名额只有30位！！！联系方式：胡艳15288321996&nbsp;&nbsp;&nbsp; QQ：584748342</div>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10098950";
	re2.prompt = "<p><span style=\"color:#ff00;\"><span style=\"font-size:13px;color:#000000;\">【生活家装饰】健康整装5.0震撼上市！全国首家以套内净面积计价、不再为您的公摊买单！一房一价、主材用量“十不限”、“0增项、0增量”，装修真正做到省钱省心！如果时间忙，可以直接来电：Tel：15827455141&nbsp;（程经理） QQ：1051249910 </span></span></p><p><span style=\"font-size:13px;color:#000000;\">&nbsp;</span></p><p><br /><span style=\"font-size:13px;color:#000000;\"></span></p><p><span style=\"color:#000000;\"><span style=\"font-size:13px;\"><u>如果您不想打字，也可以留下您的联系方式或者qq号</u>，我们会安排家装顾问尽快跟您取得联系，以便更好地帮助您！</span></span></p><span style=\"color:#000000;\"></span>";
        m_conn_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10126169";
	re2.prompt = "<span style=\"color:#3366ff;\">您好，欢迎您的咨询，请问有什么需要帮助的吗？</span> ";
        m_conn_prompt_list.push(re2);
    var busy_prompt = "对不起,线路繁忙,请稍候,您也可以给我们留言！";
  var close_prompt = "感谢您的咨询！谢谢，再见！";
  var m_close_prompt_list = new Array(); // 所有客服结束提示
          
    var re2 = new Object();
    re2.id6d = "5533758";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540327";
    re2.prompt = "<span style=\"font-size:16px;\">非常感谢您到访<span style=\"color:#ff0000;\">生活家网站</span>，想更深入了解更多装修问题，可以拨打我的</span><span style=\"font-size:16px;\">电话</span><span style=\"font-size:16px;color:#ff00;\"><strong><span style=\"font-size:16px;color:#ff00;\">13908040991</span></strong></span><span style=\"font-size:16px;color:#ff00;\">&nbsp;</span><span style=\"font-size:16px;\">或添加<span style=\"color:#000000;\">QQ</span><span style=\"color:#ff0000;\">:</span><strong><span style=\"color:#ff0000;\">207190667</span></strong></span><span style=\"color:#ff0000;\"> </span>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540328";
    re2.prompt = "<span style=\"font-size:16px;\"> 感谢您的咨询，祝您生活愉快，如果觉得本次聊天愉快，请惠存我电话：<span style=\"color:#ff0000;\"><span style=\"color:#000000;\"><strong>13558706645</strong>&nbsp;（微信同号）</span> </span>陈静雯，或者添加<span style=\"color:#000000;\"><strong>QQ：781166106</strong></span>，每天都有不同的实景案例和工地分享哦 ！</span> ";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540334";
    re2.prompt = "感谢您的咨询！祝您生活愉快，每天都有好心情！";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540335";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540336";
    re2.prompt = "<p><span style=\"font-family:SimSun;\">感谢你的到访 更多装修疑问联系</span></p><p><span style=\"font-family:SimSun;\"><strong><span style=\"color:#ff0000;\"><span style=\"font-family:SimSun;\">专业客户敬小艳电话&nbsp;</span></span></strong></span></p><p><span style=\"font-family:SimSun;\"><strong><span style=\"color:#ff0000;\">15181738349</span></strong></span></p><p><span style=\"font-family:SimSun;\"><strong>为你解答你的装修疑问</strong></span></p><p><br /></p><p><br /></p><p><span style=\"font-family:SimSun;\"><strong><span style=\"color:#ff0000;\"><br /></span></strong></span></p>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540337";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540338";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540339";
    re2.prompt = "谢谢您的光临，再见！欢迎下次光临！";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540340";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540341";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540343";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540346";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540348";
    re2.prompt = "感谢您的咨询！祝您身体健康，每天好心情！我是生活家【方妍】如果您下线后还有什么疑问，也可以拨打我的电话：18702963645（可加微信） 或加我的QQ：1120756007";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5564281";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5570336";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5570351";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5588224";
    re2.prompt = " 谢谢您的光临，很高兴为你服务，期待你的再次到来。 ";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5614794";
    re2.prompt = "<span style=\"color: rgb(22, 30, 38);\" 243=\"\" 241=\"\" 240=\"\" rgb=\"\" 22px=\"\" 13px=\"\" sans-serif=\"\" gb=\"\" sans=\"\" hiragino=\"\" arial=\"\" neue=\"\" helvetica=\"\" yahei=\"\" microsoft=\"\">您的专属顾问：</span><span 243=\"\" 241=\"\" 240=\"\" rgb=\"\" 22px=\"\" 13px=\"\" sans-serif=\"\" gb=\"\" sans=\"\" hiragino=\"\" arial=\"\" neue=\"\" helvetica=\"\" yahei=\"\" microsoft=\"\"><span style=\"color: rgb(0, 153, 0);\">高佳凤（小天）</span></span><span style=\"color: rgb(22, 30, 38);\" 243=\"\" 241=\"\" 240=\"\" rgb=\"\" 22px=\"\" 13px=\"\" sans-serif=\"\" gb=\"\" sans=\"\" hiragino=\"\" arial=\"\" neue=\"\" helvetica=\"\" yahei=\"\" microsoft=\"\">咨询热线：</span><span 243=\"\" 241=\"\" 240=\"\" rgb=\"\" 22px=\"\" 13px=\"\" sans-serif=\"\" gb=\"\" sans=\"\" hiragino=\"\" arial=\"\" neue=\"\" helvetica=\"\" yahei=\"\" microsoft=\"\"><span style=\"color: rgb(0, 153, 0);\">17313145230（微信同号，QQ：1297115170）</span></span><span style=\"color: rgb(22, 30, 38);\" 243=\"\" 241=\"\" 240=\"\" rgb=\"\" 22px=\"\" 13px=\"\" sans-serif=\"\" gb=\"\" sans=\"\" hiragino=\"\" arial=\"\" neue=\"\" helvetica=\"\" yahei=\"\" microsoft=\"\"> 。小天感谢您的咨询！</span>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5615246";
    re2.prompt = "感谢您的咨询。有任何不懂的都可以跟金琳咨询。<strong></strong>请加<strong>QQ：571593302</strong>、或者拨打咨询热线：18684858109<strong>&nbsp;金琳</strong><span style=\"font-weight: bold;\"></span>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5621251";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5627088";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5627090";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5627091";
    re2.prompt = " 感谢您的咨询！如果有疑问您随时可以拨打:4008-122-100联系我们，祝您生活愉快！";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5635450";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5635451";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5636778";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5639924";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5641351";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10075777";
    re2.prompt = "感谢您的咨询，生活家家居全体伙伴期待您的到来，祝您生活愉快。";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10075803";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10095802";
    re2.prompt = "<p>感谢您的咨询，我是您的专属家居顾问：郭丽琴，后期有任何问题可以随时联系我。</p><p><strong><span style=\"color:#ff0000;\">TEL:<strong>18161298378</strong></span></strong></p><p><strong><span style=\"color:#ff0000;\">QQ：2232984991</span></strong></p><p>&nbsp;</p>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10098948";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10104415";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10112944";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10113531";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10113969";
    re2.prompt = "请问您是要咨询装修吗？若不方便打字可留下电话我们与您联系或拨打电话18872245794越芳芳咨询";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10113970";
    re2.prompt = "<p>如果您现在很忙或者不方便打字，可以留下您的联系方式，也可加我微信或致电：15926265882，我会在第一时间回复您并解决您的装修问题</p><p>qq263618167</p>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115920";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115921";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115923";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115925";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115926";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115928";
    re2.prompt = "<span style=\"font-family:SimSun;font-size:16px;\"><strong>南京生活家家居顾问亚鹏祝您生活愉快（微信/电话：18351445237）</strong></span>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115938";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115939";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115940";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115943";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10116149";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10118476";
    re2.prompt = "感谢您咨询生活家装饰，有任何问题可随时联系客服热线17710178625，祝工作顺利！";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10118477";
    re2.prompt = "&nbsp;<strong>现在是咨询高峰期，您留下您的联系方式，小区面积，装修风格，稍后给您回电，详细为您解答！或者在线ＱＱ：931823975；24小时热线：13321172091&nbsp;</strong><p><strong><span style=\"font-size: 18px;\">&nbsp;&nbsp;&nbsp;祝您生活愉快~！</span></strong></p>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10118478";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10121866";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10121867";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10121868";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10122777";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10123832";
    re2.prompt = "&nbsp;<p><strong><span style=\"font-size:18px;\">欢迎咨询“生活家(北京)家居装饰有限公司”官方网站，如有什么问题，请拨打<span style=\"color:#ff0000;\">18513580803 小王</span> ，或者加QQ<span style=\"color:#ff0000;\">123830049</span>&nbsp;&nbsp;<br />咨询。&nbsp;&nbsp;&nbsp;祝您生活愉快~！</span></strong></p>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10123834";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10126170";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10127827";
    re2.prompt = "您好，您还在吗？";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10127828";
    re2.prompt = "感谢您咨询生活家装饰，有任何问题可随时联系客服热线17710178625，祝工作顺利！";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10127834";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10128229";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10128657";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10128658";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10128659";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10129655";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10129656";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10130936";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10130937";
    re2.prompt = "您好，再次欢迎您的咨询。如您还有其他问题，也可以直接拨打咨询热线：13716435009即可；";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10131845";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10133077";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10133155";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10135878";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10135879";
    re2.prompt = "感谢您的咨询，祝您生活愉快，如果觉得本次聊天愉快，请惠存我的电话魏婷：<strong>15182969932</strong>，或者添加QQ：<strong>976324984</strong>.很高兴为您服务。";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10136735";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10136736";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10136738";
    re2.prompt = "感谢您咨询生活家家居！祝您及家人生活愉快";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10136739";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10136740";
    re2.prompt = "生活家家居感谢您的质询，最后祝您及家人生活愉快，工作顺利，新的一年发大财 ";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10137012";
    re2.prompt = "<div style=\"TOP: 0px\">非常高兴能和您认识，感谢您的信任！</div><div style=\"TOP: 0px\">&nbsp;</div><div style=\"TOP: 0px\">有装修问题请咨询爱丽丝：18953771209</div>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10137013";
    re2.prompt = "<div><div>您好，欢迎进入生活家装饰官方网站，我是您的家装顾问马新森，很高兴为您服务！如果您不方便打字可以拨打咨询电话：17865215124(微信)<br /></div></div><div style=\"top: 0px;\">﻿﻿</div>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10137015";
    re2.prompt = "<div style=\"TOP: 0px\">??</div><!--StartFragment --><div><div>您好，欢迎进入生活家装饰官方网站，我是您的家装顾问 徐鑫 ，很高兴为您服务！如果您不方便打字可以拨打咨询电话：15106772547 QQ：1445196264。或者留下您的联系方式，我会及时给你回电。</div><div><br /></div></div>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10137381";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10137382";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10138350";
    re2.prompt = "感谢您的来访和咨询，生活家竭诚为您服务！";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10141303";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10141305";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10141306";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10141354";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10141355";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10141356";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10141357";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10143198";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10143327";
    re2.prompt = "<span style=\"font-size:18px;color:#006600;\"><strong>非常感谢您的咨询，有什么问题可以随时电话咨询李敏（18629061427）</strong></span>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10143328";
    re2.prompt = "感谢您的咨询，祝您生活愉快，有任何疑问请咨询热线：<span style=\"color:#ff0000;\"><strong><u>18629061427</u></strong></span>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10143922";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10143923";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10143925";
    re2.prompt = "感谢您对生活家家居的关注与信任，您可以保存生活家装修热线：18071027570（张家龙）到通讯录，方便以后直接联系！";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10144339";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10144341";
    re2.prompt = "<span style=\"font-size:18px;color:#ff0000;\">谢谢您的咨询，希望可以帮助到您！</span>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10147317";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10148213";
    re2.prompt = " 感谢您对咱生活家装饰的支持！";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10148215";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10150125";
    re2.prompt = "<strong> 谢谢您的光临，生活家小郭很高兴为您服务</strong> ";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10150126";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10151040";
    re2.prompt = "感谢您的惠顾，欢迎下次光临网站，再见。 ";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10151041";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10151042";
    re2.prompt = "《二哥说事儿》走进天津期待已久的家装盛典！<br />&nbsp;8月13日 &nbsp;百万豪礼钜惠来袭 ！百元现金红包等您拿<br />报名方式：<br />1：楼盘+姓名+电话 &nbsp; 报名成功<br />2：在线咨询客服可【回复2】<br />3：自动咨询请拨打15022121094<br />4：人工服务请留联系方式！稍后回复！&nbsp;";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10151044";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10152552";
    re2.prompt = "<p><span style=\"font-size:16px;\">感谢您的咨询，祝您家装愉快!生活幸福！18690971161</span></p>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10152554";
    re2.prompt = "&nbsp;如果有疑惑，欢迎拨打<span style=\"font-size:16px;color:#ff0000;\"><strong><strong>18366285417（微信）</strong></strong></span>或者添加QQ：1162555785 ";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10152947";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10152986";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10152989";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10152995";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10153062";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10153063";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10153067";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10153068";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10153069";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10153462";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10154010";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10154381";
    re2.prompt = "<div style=\"TOP: 0px\">感谢您的咨询，祝您身体健康，每天好心情！</div>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10154382";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10155388";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10155556";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10156010";
    re2.prompt = "&nbsp;12年来我们专注于简约、后现代、现代简约、欧式、美式、简欧、新中式、中式、地中海等装修风格，公司拥有6000平米的展厅，有各种风格的样板房，欢迎前来参观。 ";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10156083";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10156085";
    re2.prompt = "<div>如果不方便打字，请直接拨打电话： &nbsp; 13624269040<br /></div>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10156086";
    re2.prompt = "咨询可拨打13591803648寇鹏";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10156087";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10156088";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10156091";
    re2.prompt = "我是您的专属服务顾问：<span style=\"color:#9999ff;\"><strong>孙超 &nbsp;</strong></span><span style=\"color:#6633ff;\">&nbsp;</span><strong><span style=\"background-color: rgb(255, 204, 204);\">TEL：<u>15142433005</u>&nbsp;&nbsp;</span><span style=\"background-color: rgb(255, 204, 204);\">QQ：<u>3184169522</u></span><span style=\"background-color: rgb(255, 255, 255);\">&nbsp;</span>有什么问题随时联系我，感谢您的咨询，咱们下次见！</strong>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10156093";
    re2.prompt = "<p>您好,我是您的家装顾问马金梅</p><p>欢迎咨询；15942430873</p><p>QQ：1134032511</p>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10156094";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10157035";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10157909";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10157910";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10157911";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10157912";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10157913";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10158191";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10158332";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10158826";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10159459";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10159643";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10159644";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10160581";
    re2.prompt = "<strong><span style=\"font-size:16px;color:#3366ff;\">欢迎来店咨询，祝您生活愉快！再见！</span></strong>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10160582";
    re2.prompt = "【生活家家居】拥有8000平方米的展厅，欧式、中式、美式、简约等风格的样板房，我们竭诚为您打造温馨舒适的雅居。 ";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10161218";
    re2.prompt = "<p><span style=\"font-family:Microsoft YaHei;font-size:16px;\">您还在电脑旁吗？</span></p>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10161219";
    re2.prompt = "<span style=\"BACKGROUND-COLOR: #b8d100; FONT-SIZE: 32px\">感谢您的咨询，祝您生活愉快，天天好心情</span>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10161221";
    re2.prompt = "感谢您咨询生活家装饰，有任何问题可随时联系客服热线13511060478，祝工作顺利！ ";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10161537";
    re2.prompt = "<h2></h2><h2><h3>您好，欢迎您的咨询，请问有什么需要帮助的吗？</h3></h2>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10161538";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10161539";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10162395";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10162396";
    re2.prompt = "<p><span style=\"font-size:13px;color:#ff00;\"><span style=\"font-size:13px;\"><strong>生活家家居6000平米展厅体验馆等您来参观！您可以直接添加QQ微信 ：673998428 </strong></span></span><span style=\"font-size:13px;color:#ff00;\"><strong><span style=\"font-size:13px;color:#ff00;\">我们发详细的装修材料，效果图装修案例供您参考！</span></strong></span> </p>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10162704";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10162705";
    re2.prompt = "<span style=\"color:#330099;\">感谢您的咨询！我是您的专属客户经理【<strong><span style=\"color:#ff00;\">一休</span></strong>】如果您下线后还有什么疑问，可以拨打一休的电话：<span style=\"color:#ff00;\">15005948703&nbsp; </span></span>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10162706";
    re2.prompt = "<p>感谢你的咨询！如果您下线后还有什么疑问可以免费咨询热线:婷婷18850236922</p>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10162707";
    re2.prompt = "您好，我是李阳（电话：13960829853 微信：13960829853 QQ 3339574486） 是您的专属VIP网络客服很高兴为您服务!这个是临时对话窗口,系统不太稳定~您留下您的QQ号码吧?我加您为好友,第一时间联系您！如果您现在不方便打字，可以留下您的联系方式，我将马上给您回复！";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10162708";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10162709";
    re2.prompt = "感谢您的咨询！我是您的<span style=\"color:#ff0000;\">【专属客户经理小邓】</span><br />如果您下线后还有什么疑问，也可以拨打免费咨询热线：<strong><span style=\"color:#ff0000;\">15159638820</span> </strong>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10162710";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10163136";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10163137";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10164805";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10164806";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10165094";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10165674";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10165692";
    re2.prompt = "<p><span style=\"font-size:18px;\"><strong><span style=\"color:#009900;\">非常感谢您访问健康生活服务商-苏州生活家装饰！</span></strong></span><strong>{53b#35#}</strong></p><p><span style=\"font-size: 16px;\"><strong>想浏览更多更全效果图，请添加官方QQ：<strong>3074 604980，</strong></strong></span></p><p><span style=\"font-size: 16px;\"><strong><span style=\"color:#33cc00;\">更多优惠名额申请，请致电：137 3263 8135。</span></strong></span></p>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10165693";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10166149";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10166151";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10166719";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10167088";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10167451";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10169564";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10169565";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10169705";
    re2.prompt = "<div><div><span style=\"font-family:'Microsoft YaHei';\"><span style=\"font-size:13px;\"><span style=\"color:#3366ff;\"></span></span></span><div><span style=\"font-family:'Microsoft YaHei';\"><span style=\"font-size:13px;\">&nbsp;很高兴为您服务，<u><span style=\"color:#ff0000;\"><strong>祝您生活愉快</strong></span></u>！</span></span></div></div></div>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10169706";
    re2.prompt = "<p><span style=\"font-family:Microsoft YaHei;font-size:13px;\"><strong>欢迎来店咨询，预约电话18602070863，再见！<u><span style=\"color:#ff0000;\"></span></u></strong></span></p><div style=\"top: 0px;\">﻿﻿</div>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10170117";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10170118";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10170248";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10170249";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171033";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171035";
    re2.prompt = "感谢您咨询生活家家居上海分公司，祝您生活愉快！";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171804";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171806";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171814";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171816";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171817";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171818";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171819";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171821";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171822";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171826";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171827";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171829";
    re2.prompt = "<p>您好，欢迎光临全国连锁装企品牌【生活家家居-重庆站】<br />1，本窗口可咨询<span style=\"color: rgb(153, 0, 0);\"><strong>【当前优惠活动】</strong></span><br />2，本窗口可咨询<strong><span style=\"color: rgb(153, 0, 0);\">【材料，报价，施工，设计】</span></strong>等装修问题<br />3，本窗口可预约您喜欢的设计师</p><p>如网络不稳定请加<strong><span style=\"color: rgb(51, 0, 153);\">QQ：3245194355</span></strong>或拨打<strong><span style=\"color: rgb(51, 0, 153);\">免费咨询电话：18983097138（龙莉）</span></strong>进行咨询！</p>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10172100";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10172243";
    re2.prompt = " 谢谢咨询！祝您生活愉快！ ";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10172248";
    re2.prompt = " 下线后，有什么疑问，可以咨询我 盼盼<span style=\"font-size:16px;color:#ff00;\">15911076838（可加微信）</span> ";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10172466";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10172534";
    re2.prompt = "<p>感谢您的光临，期待您的下次光临！生活家祝您生活愉快！工作顺利！</p>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10172563";
    re2.prompt = "如果您不方便打字，请留下您的电话号码，小何将在第一时间和您取得联系为您详细介绍。或者给小何来电也是可以的，电话：15111880113 QQ 1935322081 ";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10174144";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10174909";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10174910";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10174917";
    re2.prompt = "再见，祝您生活愉快！ ";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10175115";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10175117";
    re2.prompt = "谢谢您的拜访，期待您下次光临。家居顾问：<span style=\"font-size:24px;\"><span style=\"color:#ff0000;\">吴聪</span><span style=\"color:#ff0000;\">15971401041</span></span>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10175118";
    re2.prompt = "<p>感谢您的咨询！再见！</p><p>客服联系方式：<strong><span style=\"color:#ff0000;\">13419649223</span></strong></p>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10175119";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10175120";
    re2.prompt = "<div style=\"top: 0px;\"><span style=\"font-size: 18px;\">【生活家家居】健康生活服务商！</span></div><p><span style=\"font-size: 18px;\"><span style=\"color:#ff0000;\"><span style=\"color:#000000;\">服务全国25城，大品牌值得信赖!</span><strong>生活家家居重推产品拎包装，黄金性价比家装，包含5大软装，8大国际主材，16件品牌家具，实现7大空间，161项高端配置。一站齐全，省时省心!<br /></strong></span>如果您打字不方便，也可以拨打电话：<span style=\"color:#009900;\">13971803017</span>(吴钰)&nbsp;</span><span style=\"font-size:18px;\">或者加微信：13971803017</span></p>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10175978";
    re2.prompt = "<strong><span style=\"font-size:13px;\">&nbsp;</span></strong><div><strong><span style=\"font-size:13px;\"><span style=\"color:#33cc00;\"><span style=\"color:#33cc00;\">非常感谢您访问健康生活服务商-苏州生活家装饰！{53b#35#}<br /></span><br /></span>想浏览更多更全效果图，请添加官方QQ：20 3835 7225，<br /><br /><span style=\"color:#33cc00;\">更多优惠名额申请，请致电：178 0259 9520。</span></span></strong><br /></div>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10177240";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10177470";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10177474";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10177475";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10177720";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10177723";
    re2.prompt = " 我们公司品质还是可以信赖的，祝您生活愉快";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10177724";
    re2.prompt = "&nbsp;<p><strong>亲爱的主人 ，谢谢您来生活家，给您100个赞！</strong></p>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10177738";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10178012";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10178013";
    re2.prompt = "<div style=\"top: 0px;\">??</div>感谢您的咨询！我是您的<u>专属客户经理 <strong><span style=\"font-size:16px;color:#ff0000;\">安琪</span></strong></u><br />如果您下线后还有什么疑问，也可以拨打服务热线<strong><span style=\"font-size:16px;\">13186985528。<span style=\"font-size:16px;\">很高兴为您效劳</span></span></strong>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10178843";
    re2.prompt = "<span style=\"font-family:KaiTi_GB2312;font-size:18px;\"><strong>感谢您的访问，如有疑问可随时联系<span style=\"color: rgb(255, 0, 0);\">-天天 &nbsp;18969027740 &nbsp;（微信）</span> 祝您生活愉快！</strong></span>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10178844";
    re2.prompt = "<p>感谢您的访问，如有疑问可随时联系--艾达 13732274709&nbsp; 祝您生活愉快！</p>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10179467";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180239";
    re2.prompt = "<strong><span style=\"font-size:13px;\"></span></strong><div>&nbsp;您联系方式多少，让设计师跟您电话沟通细节<br /></div> ";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180382";
    re2.prompt = "<p>感谢您的咨询，祝您身体健康，每天好心情！</p>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180459";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180468";
    re2.prompt = "<div>&nbsp;非常感谢您对生活家的关注，我是您的专属客服珮璇，（18003549040）您有任何装修需求，都可以随时联系我哦！<br /></div>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180469";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180470";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180473";
    re2.prompt = "您好！感谢您关注生活家装饰，我是您的专属客服小彭，电话：18234026804（微信），您有什么装修需求，都可以随时联系我！";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180474";
    re2.prompt = "感谢您了解生活家家居，我是你的专属客服阿萍，很高兴为您服务，希望能帮到您！";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180476";
    re2.prompt = "<span class=\"txt\"></span><table class=\"xheLayout                             \" role=\"presentation\" style=\"width: 199px; height: 302px;\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td class=\"xheIframeArea\" id=\"xhe0_iframearea\" role=\"presentation\" style=\"height: 300px;\"><p>您好！感谢您咨询央视合作家装品牌-【生活家装饰集团】【太原站】，我是您的品质家装服务经理：郝建峰。</p><p>有其他疑问可以留下联系方式，我稍后会与您电话沟通，您也可来电咨询。</p><p>咨询电话/微信：15135127979</p><p>QQ：547476765<br /><textarea name=\"advance_cyy_content\" class=\"textarea xheditor {upImgUrl:\" id=\"advance_cyy_content\" style=\"width: 460px; height: 302px; display: none;\" immediate=\"2&amp;arg=p9006234_10180476&amp;imgurl=../upload/xheditor/9006234/cyy'}'\" php=\"\" rpc_editor_up=\"\" impl=\"\"></textarea></p></td></tr></tbody></table>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180478";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180480";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180552";
    re2.prompt = "非常感谢您对生活家的关注，我是您的专属客服杨盛，（15333018978）您有任何装修需求，都可以随时联系我哦！";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180593";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180594";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180595";
    re2.prompt = "如果有什么疑问可以拔打电话咨询:18986211158";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180604";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180605";
    re2.prompt = "<p><span style=\"font-family:Arial Black;\">欢迎您的咨询，小夏很高兴为您解答装修的疑问，随时欢迎来电：13294188378</span></p><p><span style=\"font-family:Arial Black;\"><span style=\"font-family: KaiTi_GB2312; font-size: 16px;\">您好！欢迎光临全国品牌</span><span style=\"font-family: KaiTi_GB2312; font-size: 16px;\">【</span><span style=\"color: rgb(0, 153, 0); font-family: KaiTi_GB2312; font-size: 16px;\">生活家家居-武汉站</span><span style=\"font-family: KaiTi_GB2312; font-size: 16px;\">】 &nbsp; &nbsp; &nbsp;现在即可咨询 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span><span style=\"font-family: KaiTi_GB2312; font-size: 16px;\">1.</span><span style=\"font-family: KaiTi_GB2312; font-size: 16px;\">【</span><span style=\"color: rgb(255, 102, 102); font-family: KaiTi_GB2312; font-size: 16px;\">拎包装-键整体家装详细活动</span><span style=\"font-family: KaiTi_GB2312; font-size: 16px;\">】</span></p><p><span style=\"font-family: KaiTi_GB2312; font-size: 16px;\">&nbsp;2.</span><span style=\"font-family: KaiTi_GB2312; font-size: 16px;\">【</span><span style=\"color: rgb(102, 0, 204); font-family: KaiTi_GB2312; font-size: 16px;\">报价、材料、设计装修问题</span><span style=\"font-family: KaiTi_GB2312; font-size: 16px;\">】</span></p><p><span style=\"font-family: KaiTi_GB2312; font-size: 16px;\">&nbsp;3.</span><span style=\"font-family: KaiTi_GB2312; font-size: 16px;\">【</span><span style=\"color: rgb(51, 204, 0); font-family: KaiTi_GB2312; font-size: 16px;\">预约喜欢的设计师</span><span style=\"font-family: KaiTi_GB2312; font-size: 16px;\">】</span></p><p><span style=\"font-family: KaiTi_GB2312; font-size: 16px;\">我是客户经理</span><span style=\"font-family: KaiTi_GB2312; font-size: 16px;\">【夏丽君</span><span style=\"font-family: KaiTi_GB2312; font-size: 16px;\">】，如不便打字可留下联系方式，或者直接来电： &nbsp; &nbsp; &nbsp; TEL：13294188378 &nbsp;</span><span style=\"font-family: KaiTi_GB2312; font-size: 16px;\">&nbsp;</span></p><p><span style=\"font-family: KaiTi_GB2312; font-size: 16px;\">QQ：2156913902</span></p><div><span style=\"font-family: KaiTi_GB2312; font-size: 16px;\"><br /></span></div>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180606";
    re2.prompt = " 感谢您的到访，祝您生活愉快！如有问题未解决，请拨打电话15827455141程经理咨询。 ";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10183484";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10183485";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10183486";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10183703";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10184459";
    re2.prompt = "您好！我是太原生活家装饰的客服王艺丹（电话：<span class=\"send_sms_from_msg callsoft_from_msg\" style=\"color: rgb(10, 75, 34); font-weight: bold; text-decoration: underline; cursor: pointer;\" data=\"18303416964\">18303416964</span>，QQ：858510020）您方便的话 留个电话 我给您回过去。&nbsp;";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10184703";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10184704";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10184706";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10185328";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10185927";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10185928";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10186613";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10187027";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10187093";
    re2.prompt = "&nbsp;感谢您的咨询！我是您的【专属客户经理】<br />如果您下线后还有什么疑问，也可以拨打免费咨询热线：<span style=\"color:#6600cc;BACKGROUND-COLOR: rgb(255,255,255)\">13860616801 安娜</span> ";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10189243";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10189735";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10189736";
    re2.prompt = "&nbsp; &nbsp; 感谢您的咨询。我是您的专属小棉袄，线下还有什么问题，可以加我微信或者来电咨询哦。<strong>15825508025露娜</strong>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10189737";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10191650";
    re2.prompt = "感谢您的咨询，祝您生活愉快！";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10192058";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10192059";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10192229";
    re2.prompt = "感谢您的咨询，祝您身体健康，每天好心情！";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10193388";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10193390";
    re2.prompt = "<span style=\"font-size:16px;\">{53b#20#}感谢您的访问咨询，苏州生活家祝您生活愉快！</span> ";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10195184";
    re2.prompt = "您好！感谢您关注生活家家居，您有什么装修需求或问题，都可随时联系我！【客服电话：15034070958】";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10198651";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10201693";
    re2.prompt = "<p><span style=\"font-size: 24px;\"><span style=\"font-size:18px;\">生活家装饰家居顾问<span style=\"color:#ff0000;\">【彭逵：18234026804】</span><span style=\"color:#ff0000;\"><span style=\"color:#000000;\">很高兴为您服务，期待您的到来，祝您生活愉快，阖家欢乐</span></span></span></span></p>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10201696";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10202416";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10209204";
    re2.prompt = "<p>您的专属客户经理王城&nbsp; 电话&amp;微信：15142427671&nbsp; 有问题 随时来电</p>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10209205";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10209308";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10213120";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10216082";
    re2.prompt = "感谢您的咨询，祝您生活愉快！生活家客户经理周宇，电话：13591373707。";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10217829";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218468";
    re2.prompt = "欢迎您下次咨询，有装修疑问随时可以联系我15668673986";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218469";
    re2.prompt = "<p>感谢您的咨询，希望您生活愉快！拨打电话：</p><p><span style=\"background-color: rgb(255, 255, 255);\"><span style=\"color:#cc0000;\"><strong>18640885201</strong></span></span>（可加微信）获得更多装修建议、方案、报价！</p>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218470";
    re2.prompt = "<span style=\"font-size:16px;\">通话已结束，很高兴为您服务，欢迎下次询问。</span>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218476";
    re2.prompt = "<span style=\"color:#ff0000;\"><span style=\"font-size:18px;\">非常感谢您的咨询！有什么没有帮到的地方还望体谅</span>！</span>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218484";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218486";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218497";
    re2.prompt = "<span style=\"BACKGROUND-COLOR: #99bb00\">感谢您的咨询，祝您身体健康，每天好心情！</span>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218541";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218542";
    re2.prompt = "<p>感谢您的咨询，如有疑问随时打我电话联系：13417028309（小郑）</p>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218543";
    re2.prompt = "您好，更多健康品质装修欢迎咨询13928852138 李先生";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218545";
    re2.prompt = "感谢您的来访，期待与您的合作。如果您还有其他不清楚的地方，您可以加小古微信15521199213";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218623";
    re2.prompt = "<p><strong>感谢您的来访，我是今天的值班经理【张帅】，如果不方便打字，可直接拨打电话：<span style=\"color:#ff0000;\">15101001784</span>（微信），QQ：401732594</strong></p><p><strong>祝您生活愉快！</strong></p>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218810";
    re2.prompt = " 欢迎您的咨询来访，我是值班经理【史贺】，我的电话：13718717812（微信），您可以直接搜索我的电话添加我的微信，可以获得设计方案一套，祝您生活愉快！ ";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10219358";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10219892";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10219895";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10219912";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10220662";
    re2.prompt = "<strong><span style=\"font-family: 'Comic Sans MS';\">详细咨询可加微或电话噢~·<span style=\"background-color: rgb(255, 102, 102);\">605415425、18003316057</span></span></strong>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10220667";
    re2.prompt = "<div style=\"top: 0px;\"><div><span style=\"color:#ff0000;\"></span><div><span style=\"color:#ff0000;\">您好！欢迎光临央视上榜品牌【生活家装饰-济南】<br />“5.20爱家专场”为自己的爱家添几分精彩！爱家大钜惠，签单赠送客厅顾家家具一套，还在等什么，赶快来吧。<br />现在即可点击右下角咨询！我是您的专属客户经理张新瑜。<br />如不方便打字，可留下您电话，我立即给您回电！或可以直接来电！<br />TEL:15165410826（同微信）&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QQ:1131144071<br /></span></div>﻿﻿</div></div><div style=\"top: 119px;\">﻿﻿</div>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10221066";
    re2.prompt = "感谢您对生活家装饰的关注与厚爱~ 用我们真诚的心协同公司的平台为您们打造爱的家。您也可以继续关注我们的官方微信订阅号:成都生活家（shj488)有朋友也可以给我们推荐哟~ 我们会为您提供惊喜大礼！这个时候一定要说找小万哟~";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10221808";
    re2.prompt = "<p>感谢您的咨询！我是您的专属客户经理（吴爽），如果您下线后还有什么疑问，欢迎您拨打咨询热线：18180604053</p><p>&nbsp;</p>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10222871";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10228011";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10229955";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10229956";
    re2.prompt = "感谢您咨询生活家装饰，有任何问题可随时联系客服热线17710178625，祝工作顺利！";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10229957";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10229961";
    re2.prompt = "我是生活家樱桃13321172091，您咨询随时都可以";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10229963";
    re2.prompt = "";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10229974";
    re2.prompt = "很高兴为您服务，线下可以咨询生活家客户经理 盼盼<span style=\"font-size: 16px;\">15911076838（可加微信）</span>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10229975";
    re2.prompt = "<div style=\"top: 0px;\">﻿﻿您好，再次欢迎您的咨询。如您还有其他问题，也可以直接拨打咨询热线：13716435009即可；</div>";
    m_close_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10229976";
    re2.prompt = "<strong><span style=\"font-size:16px;\">感谢您的咨询，如果想看装修案例或想预约观看施工现场。预约电话：<span style=\"color:#ff0000;\">18513580803</span> 微信：<span style=\"color:#ff0000;\">18513580803</span> 王永</span></strong>";
    m_close_prompt_list.push(re2);
    var lword_prompt = "您好，现在客服不在线，请留言。如果没有留下您的联系方式，客服将无法和您联系！";
  var reject_prompt = "无法连接客服，您已被阻止！";
  var close_bro_prompt = "您即将离开咨询页面，离开后不能继续与客服人员沟通，您确定离开吗？点击确定离开，点击取消继续与客服人员沟通";
  var zdkf_auto = "15";
  var worker_id = "njshj2016@163.com,sdlc53kfnj18@163.com,sdlc53kfnj6@163.com,njshj2015@163.com,sdlc53kfnj1@163.com,sdlc53kfnj12@163.com";
      var wids = "njshj2016@163.com,sdlc53kfnj18@163.com,sdlc53kfnj6@163.com,njshj2015@163.com,sdlc53kfnj1@163.com,sdlc53kfnj12@163.com";
    var worker_name = "";
  var zdyly_ck = "";
  var online_cnt = "1";
  var is_wlist = "0";
  var reg_stat = "2"; //reg_stat=0; // 调试用

  var disp = "";
  var stat = "";
  var arg = "9006234";
  var style = "10";
  var style_id = "106124178";
  var verify_key = "dbcd33be4a08e13bc907b512ccf40df3";
  
  var is_fav = "1";  // 是否弹出IE收藏夹
  var zsk = "1";
  var flashad = "0"; // flash广告功能
  var service = "53kf";

  var m_zsk_all = new Array();                    // 所有机器人信息
          
    var re2 = new Object();
    re2.id = "147114b04ebdc025947ab54f9b5a6a45";
		re2.auto_login = "0";
    re2.state = "1";
		re2.auto_hidden = "1";
    re2.name = "生活家装饰";
    re2.robot_ly = "1";
    re2.prompt = "品质整装，生活家装饰为您服务<br>欢迎致电装修顾问-17710178625 马佳兴";
		re2.zsktb_url = "../img/manage/robot_icon2.png";
    m_zsk_all.push(re2);
  
  var m_robid = "";                // 机器人id
  var zsk_prompt = "";           // 机器人问候语
  var zsk_name = "";               // 机器人昵称
  var zsk_auto_login = "";   // 机器人自动上线
  var zsk_state = "";             // 机器人状态
  var zsk_auto_hidden = ""; // 机器人客服在线时隐身
  var zsk_robot_ly = "";       // 机器人留言链接
	var zsk_zsktb_url = "";     // 机器人头像
  var zsk_un_prompt = "";//机器人不明白的回答
  var robot_ass = "0";        //机器人优先接待

  var m_typeId = 0;                               // 机器人问题类别
  var m_oquesArray = new Array();                 // 保存其他类别问题
  var m_typeArray = new Array();                  // 保存类别

  var reg_prompt = ""; // 注册提示语
  var rwordstr = '<tr><td align="right">姓名:</td><td align="left"><input id="reg_name" name="reg_name" type="text" maxlength="100" size="30"/></td></tr><tr><td align="right">E-mail:</td><td align="left"><input id="reg_email" name="reg_email" type="text" maxlength="100" size="30"/></td></tr><tr><td align="right">电话:</td><td align="left"><input id="reg_phone" name="reg_phone" type="text" maxlength="100" size="30"/></td></tr><tr><td align="right">QQ:</td><td align="left"><input id="reg_qq" name="reg_qq" type="text" maxlength="100" size="30"/></td></tr><tr><td align="right">单位:</td><td align="left"><input id="reg_company" name="reg_company" type="text" maxlength="100" size="30"/></td></tr>'; // 注册填写项目
  var zdyzc_checked = '0';//自定义注册字段选中的个数
  var zdyzc_arr = [];//自定义注册字段选中的个数
  var ly_first = true; // 首次留言
  var contact_first = true; // 首次联系方式
  var reg_c = 'name,email,phone,qq,company'; // 注册配置项目

  //留言界面
  var lwordstr_reg = '          <tr id =name>            <td align="right" valign="middle" class="leaveword_left_td">姓名:</td>            <td align="left" valign="middle"><input id="ly_name" name="ly_name" type="text" class="leaveword_input"/></td>          </tr>          <tr id =email>            <td align="right" valign="middle" class="leaveword_left_td">E-mail:</td>            <td align="left" valign="middle"><input id="ly_email" name="ly_email" type="text" class="leaveword_input"/></td>          </tr>          <tr id =phone>            <td align="right" valign="middle" class="leaveword_left_td">电话:</td>            <td align="left" valign="middle"><input id="ly_phone" name="ly_phone" type="text" class="leaveword_input"/></td>          </tr>						<tr id="phone_hint">							<td align="right" valign="middle" class="leaveword_left_td">&nbsp;</td>							<td align="left" valign="middle"><font color="red">*电话输入框也可以填写手机(供短信回复用)</font></td>						</tr>          <tr id =qq>            <td align="right" valign="middle" class="leaveword_left_td">QQ:</td>            <td align="left" valign="middle"><input id="ly_qq" name="ly_qq" type="text" class="leaveword_input"/></td>          </tr>          <tr id =company>            <td align="right" valign="middle" class="leaveword_left_td">单位:</td>            <td align="left" valign="middle"><input id="ly_company" name="ly_company" type="text" class="leaveword_input"/></td>          </tr>'; // 留言注册项
  var lwordstr_ly = '    <tr id="lwordstr_ly">      <td align="right" valign="top" class="leaveword_left_td"><font color="red">*</font>留言内容:</td>      <td align="left" valign="middle"><textarea id="ly_content" name="ly_content" class="leaveword_textarea"></textarea></td>    </tr>';  // 留言内容项
  var is_ly_custom = ''; //留言定制版
  var ly_captcha = '1';//留言验证码是否开启

  if(is_ly_custom == 1){
    var lwordstr_submit = '<tr class="ly_sub" height="36"><td ><input id="reset_sub" class="reset" onclick="formReset()" type="button" value="重置"/></td><td align="rig" valign="middle"><div class="lw_sb_div" id="lw_sb_div" style="float:left;width:85px;"><input id="lw_sb" name="lw_sb" onclick="try{save_lword(\''+reg_c+'\')}catch(e){}" type="button" value="'+infos[94]+'" style="cursor:pointer;height:24px;"/></div>'+"<div style='margin-top:2px;'></div>"+'</td></tr><tr height="36"><td align="right" valign="top" class="leaveword_left_td"></td></tr>'; // 留言提交项
  }else if(ly_captcha == 2){
    var lwordstr_submit = '<tr class="ly_sub" height="36"><td align="right" valign="top" class="leaveword_left_td"></td><td align="left" valign="middle"><div style="float:left;width:85px;"><input id="lw_sb" name="lw_sb" onclick="try{save_lword(\''+reg_c+'\')}catch(e){}" type="button" value="'+infos[94]+'" style="cursor:pointer;height:24px;"/></div>'+"<div style='margin-top:2px;'></div>"+'</td></tr><tr height="36"><td align="right" valign="top" class="leaveword_left_td"></td>'; // 留言提交项
  }else{
      var lwordstr_submit = '<tr><td align="right" valign="middle" class="leaveword_left_td"><font color="red">*</font>验证码:</td><td class="leaveword_left_td" align="left" valign="middle"><input onfocus="return_check_status()" maxlength="4" style="width:50px" type="text" class="leaveword_input" name="ly_check_num" id="ly_check_num" />&nbsp;<img id="is_ok" src="" style="position: relative; top: 4px; display: none;margin-right:5px;" /><img id="refresh_img"  src="img/refresh_img.png" style="position: relative; top: 5px; width: 20px; cursor: pointer;" /></td></tr><tr class="ly_sub" height="36"><td align="right" valign="top" class="leaveword_left_td"></td><td align="left" valign="middle"><div style="float:left;width:85px;"><input id="lw_sb" name="lw_sb" onclick="try{save_lword(\''+reg_c+'\')}catch(e){}" type="button" value="'+infos[94]+'" style="cursor:pointer;height:24px;"/></div>'+"<div style='margin-top:2px;'></div>"+'</td></tr><tr height="36"><td align="right" valign="top" class="leaveword_left_td"></td><td align="left" valign="middle"><img title="换一张" onclick="replace_check_num();" id="check_img" style="position:relative; cursor: pointer; width: 135px; height: 55px; visibility: hidden;" src="include/ImgCode.php?'+parseInt(10000*Math.random())+'" /></td></tr>'; // 留言提交项
  }

  var ly_mode_column = 'web,email,sms'; // 留言回复栏目
  var ly_object_column = 'company,department'; // 留言对象栏目

	var m_replyMode = '3'; // 留言回复方式
	var lword_replymMode = '<tr><td align="right" valign="middle" class="leaveword_left_td">回复方式:</td><td align="left" valign="middle"><input type="radio" value="3" checked name="ly_mode" onclick="m_replyMode=3;" />网站&nbsp;&nbsp;<input type="radio" value="2" name="ly_mode" onclick="m_replyMode=2;" />邮件&nbsp;&nbsp;<input type="radio" value="1" name="ly_mode" onclick="m_replyMode=1;" />短信</td></tr>'; // 留言回复方式项

	var m_lwordObject = '0'; // 留言对象
	var lword_object = '<tr><td align="right" valign="middle" class="leaveword_left_td">留言对象:</td><td align="left" valign="middle"><select id="object_select" name="object_select" style="width:166px;" onchange="set_ly_obj(this.value)"><option value="zdgs">公司</option></select></td></tr>'; // 留言对象项
        var ly_assign_type = '1';
        var ly_assign_obj = 'zdgs';
        var ly_assign_value = '';
	
  var zdkf_type = '3';
  var m_cardImport = -1; // 名片是否导入
  var m_lyszc = 'on'; // 留言时注册
  var m_regStat = '2'; // 对话前注册

  var is_zdkf = '1'; // 指定客服功能是否开通
  var kf_status = '1'; //是否显示客服繁忙程度

  var brief = "http://www6.53kf.com/iframe_brief.php?style_id=106124178&language=cn&arg=9006234"; // 公司简介接口
  var logo = "http://www6.53kf.com/iframe_logo.php?arg=9006234&style_id=106124178&is_zdylogo=1&company_id=70831548&key=1&ykey=1"; // logo接口

  var ly_isImportTimer = 0; // 留言时检测是否导入定时器
  var ly_isImportTryNum = 0; // 留言时检测是否导入计数

  var dbgg = "www6.53kf.com/zdy_dbgg2.php?style_id=106124178&company_id=70831548&dbgg_type=2";  // 底部广告url
  var dbgg_from = "1";  // 底部广告来源
  var company_title = "网页对话";
  var title_power = "1";

  var auto_disconnect = "0";  // 系统自动断开时间
	var disconnect_prompt = "您已经很长时间没有发送信息了，再过3分钟，系统将会自动断开对话";  // 系统自动断开自定义提示
  var lnk_param = "Y%264%C1"; // lnk参数
  var kf_expand = "1"; // 是否展开
  var fav_addr = "http://yingxiao2.53kf.com/talk.php?arg=9006234&style=10&type=kf&src=fav"; // 收藏夹地址

  var kf_auto_tip = "0"; // 客服无响应提示
  var kf_auto_tip_phrase = "不好意思，客服现在正忙，请稍等……"; // 客服无响应提示语
  var m_phrase_prompt_list = new Array(); // 所有客服无响应提示语
          
    var re2 = new Object();
    re2.id6d = "5533758";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540327";
    re2.prompt = "<span style=\"font-size:16px;\">您好，系统繁忙，我是您的专属服务顾问：</span><span style=\"color:#ff0000;\"><strong>任露莹</strong></span><span style=\"font-size:16px;\">，电话：</span><span style=\"font-size:16px;color:#ff00;\"><strong><span style=\"font-size:16px;color:#ff00;\">13908040991</span></strong></span><span style=\"font-size:16px;color:#ff00;\">&nbsp;<span style=\"color:#000000;\">QQ</span>:<strong>207190667</strong></span> ";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540328";
    re2.prompt = "<span style=\"font-size:16px;color:#000000;\"> 如果您暂时没有问题和疑虑，可以加我 <strong>QQ：781166106</strong> 下来为您解决更多哦</span> ";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540334";
    re2.prompt = "现在咨询的人员较多，请稍等。";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540335";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540336";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540337";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540338";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540339";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540340";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540341";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540343";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540346";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5540348";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5564281";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5570336";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5570351";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5588224";
    re2.prompt = " 您好，由于现在网络繁忙，方便留下你的联系电话吗？客服稍后和你联系。 ";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5614794";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5615246";
    re2.prompt = "您现在在长沙吗？在长沙的话可以来我们公司详细了解哦，我们公司是全国连锁的做高品质整装的，主材在公司5000平米的家居展馆都有展出，还有不同风格的实体样板间展示，金琳帮您安排好设计师在这边等您，这样您可以全面了解清楚哦！请加<strong>QQ： 571593302</strong>、或者拨打咨询热线：18684858109&nbsp;<strong>金琳</strong>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5621251";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5627088";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5627090";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5627091";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5635450";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5635451";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5636778";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5639924";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "5641351";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10075777";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10075803";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10095802";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10098948";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10104415";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10112944";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10113531";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10113969";
    re2.prompt = "请问您是要咨询装修吗？若不方便打字可留下电话我们与您联系或拨打电话18872245794越芳芳咨询";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10113970";
    re2.prompt = "可以留下您的联系方式，我们尽快与您联系！";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115920";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115921";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115923";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115925";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115926";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115928";
    re2.prompt = "<h3>现在咨询的人比较多，您可以拨打<span style=\"color:#cc0000;\">18351445237</span>进行人工服务！</h3>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115938";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115939";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115940";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10115943";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10116149";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10118476";
    re2.prompt = "现在是咨询高峰期，您留下您的联系方式，小区面积，装修风格，稍后给您回电，详细为您解答!&nbsp;&nbsp;&nbsp;或者在线QQ：1600455330&nbsp;&nbsp;；&nbsp;&nbsp; 24小时热线：17710178625";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10118477";
    re2.prompt = "系统提示：您好，这会信息有点忙，感谢您的理解，可以留个联系方式，稍后给您回过去～可以直接拨打下133-2117-2091，也是微信号<br />";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10118478";
    re2.prompt = "留下您的【姓名+联系方式+小区名称】即可获取方案和报价!,欢迎您的咨询！咨询热线：15801132347（可加微信）陈刚<br />";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10121866";
    re2.prompt = "<span style=\"color:#1B1D74\"><span style=\"font-size:13px;\">您好，这会信息有点忙，感谢您的理解，可以留个联系方式，稍后给您回过去~ 可以直接拨打下<strong><span style=\"color:#ff0000;\"><u><strong>15811360206</strong></u></span></strong>，也是微信号</span> </span>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10121867";
    re2.prompt = " 目前不在席位，请留言，会最快速度给您答复！";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10121868";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10122777";
    re2.prompt = "<span style=\"font-weight: bold;\">现在是咨询高峰期，感谢您的理解，您可以留下您的【联系方式+小区面积+装修风格】稍后会在第一时间给您回电，详细的为您解答。24小时咨询电话：15010095305 &nbsp;在线QQ: 774358724</span>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10123832";
    re2.prompt = "&nbsp;<p><strong><span style=\"font-size:18px;\">欢迎咨询“生活家(北京)家居装饰有限公司”官方网站，如有什么问题，请拨打<span style=\"color:#ff0000;\">18513580803 小王</span> ，或者加QQ<span style=\"color:#ff0000;\">123830049</span>&nbsp;&nbsp;<br />咨询。&nbsp;&nbsp;&nbsp;祝您生活愉快~！</span></strong></p>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10123834";
    re2.prompt = "<span style=\"font-weight: bold;\"><span style=\"font-size: 18px;\"><span style=\"font-weight: normal; font-stretch: normal; font-size: 12px; line-height: 14px; font-family: tahoma; background-color: rgb(238, 238, 238);\">您好！欢迎光临全国品牌【生活家家居-北京站】</span></span></span><br style=\"font-stretch: normal; line-height: 14px; font-family: tahoma; background-color: rgb(238, 238, 238);\" />&nbsp;<span style=\"font-weight: bold;\"><span style=\"font-size: 18px;\"><span style=\"font-weight: normal; font-stretch: normal; font-size: 12px; line-height: 14px; font-family: tahoma; background-color: rgb(238, 238, 238);\">1.现在即可咨询【</span><span style=\"color: rgb(255, 0, 0);\"><span style=\"font-weight: normal; font-stretch: normal; font-size: 12px; line-height: 14px; font-family: tahoma; background-color: rgb(238, 238, 238);\">报</span><span style=\"font-weight: normal; font-stretch: normal; font-size: 12px; line-height: 14px; font-family: tahoma; background-color: rgb(238, 238, 238);\">价、材料、设计等装修</span><span style=\"font-weight: normal; font-stretch: normal; font-size: 12px; line-height: 14px; font-family: tahoma; background-color: rgb(238, 238, 238);\">问题</span></span><span style=\"font-weight: normal; font-stretch: normal; font-size: 12px; line-height: 14px; font-family: tahoma; background-color: rgb(238, 238, 238);\">】</span><br style=\"font-weight: normal; font-stretch: normal; font-size: 12px; line-height: 14px; font-family: tahoma; background-color: rgb(238, 238, 238);\" /><span style=\"font-weight: normal; font-stretch: normal; font-size: 12px; line-height: 14px; font-family: tahoma; background-color: rgb(238, 238, 238);\">2.现在即可</span></span><span style=\"font-size: 18px;\"><span style=\"color: rgb(255, 0, 0); font-weight: normal; font-stretch: normal; font-size: 12px; line-height: 14px; font-family: tahoma;\">提前预约您喜欢的设计师<br /></span><span style=\"font-weight: normal; font-stretch: normal; font-size: 12px; line-height: 14px; font-family: tahoma; background-color: rgb(238, 238, 238);\">我是您的</span><span style=\"font-weight: normal; font-stretch: normal; font-size: 12px; line-height: 14px; font-family: tahoma; background-color: rgb(238, 238, 238);\">专</span><span style=\"font-weight: normal; font-stretch: normal; font-size: 12px; line-height: 14px; font-family: tahoma; background-color: rgb(238, 238, 238);\">属</span><span style=\"font-weight: normal; font-stretch: normal; font-size: 12px; line-height: 14px; font-family: tahoma; background-color: rgb(238, 238, 238);\">服</span><span style=\"font-weight: normal; font-stretch: normal; font-size: 12px; line-height: 14px; font-family: tahoma; background-color: rgb(238, 238, 238);\">务</span><span style=\"font-weight: normal; font-stretch: normal; font-size: 12px; line-height: 14px; font-family: tahoma; background-color: rgb(238, 238, 238);\">顾</span><span style=\"font-weight: normal; font-stretch: normal; font-size: 12px; line-height: 14px; font-family: tahoma; background-color: rgb(238, 238, 238);\">问</span><span style=\"font-weight: normal; font-stretch: normal; font-size: 12px; line-height: 14px; font-family: tahoma; background-color: rgb(238, 238, 238);\">：<strong><span style=\"color: rgb(255, 0, 0);\">小孙</span></strong>，可以直接给我来电：<span style=\"color:#ff0000;\">17710882702</span></span><span style=\"font-weight: normal; font-stretch: normal; font-size: 12px; line-height: 14px; font-family: tahoma; background-color: rgb(238, 238, 238);\"><strong>，</strong>或者加我QQ<strong>：<span style=\"color: rgb(0, 51, 0);\">1062967850</span></strong></span></span></span>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10126170";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10127827";
    re2.prompt = "如没有及时回复，咨询客户太多。请您拨打电话：15801132347咨询";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10127828";
    re2.prompt = "现在是咨询高峰期，您留下您的联系方式，小区面积，装修风格，稍后给您回电，详细为您解答!&nbsp;&nbsp;&nbsp;或者在线QQ：1600455330；24小时热线：17710178625";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10127834";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10128229";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10128657";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10128658";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10128659";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10129655";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10129656";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10130936";
    re2.prompt = "<strong>现在是咨询高峰期，感谢您的理解，您可以留下您的联系方式，小区面积，装修风格，稍后会在第一时间给您回电，详细的为您解答。24小时咨询电话：&nbsp;15801038452 &nbsp;在线QQ: 117088708</strong>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10130937";
    re2.prompt = "你好，这会信息有点忙，感谢您的理解，可以留下联系方式，稍后给您回过去~可以直接拨打 <u><span style=\"font-size:13px;color:#cc0000;\"><strong>13716435009</strong></span></u>，可加微信";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10131845";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10133077";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10133155";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10135878";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10135879";
    re2.prompt = "你好，欢迎访问CCTV合作品牌——生活家装饰，我是客户经理魏婷电话&amp;微信：<span style=\"text-decoration: underline; cursor: pointer;\" class=\"send_sms_from_msg callsoft_from_msg\" data=\"13550091793\"><strong>15182969932</strong></span>，QQ号：<strong>976324984</strong>，很高兴为您服务！您是咨询装修？还是咨询设计？或是优惠呢？我可以详细为您解答。";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10136735";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10136736";
    re2.prompt = "您好,现在咨询的人比较多 如果方便请留下您的联系方式 我会稍后给您回电。";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10136738";
    re2.prompt = "<p></p><p>您好，欢迎进入生活家家居健康整体家装，很高兴为您服务，</p><p>您可以向我们咨询关于装修的一切疑问，同时欢迎网络预约设计师，享受更多优惠。&nbsp;</p><p>友情提示：如果您不方便打字，可以留您联系方式马上给您回电话！</p>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10136739";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10136740";
    re2.prompt = "<p><span style=\"font-size:13px;\"></span></p><div class=\"list02\" sizset=\"0\" sizcache=\"23338\"><div style=\"WIDTH: 460px; HEIGHT: 302px; OVERFLOW: auto\" id=\"send_advance_cyy_content\" class=\"textarea\"><p>您好：亲生活家健康整体家装</p><p>现在即可</p><ol><li>咨询 整装报价-回复1</li><li>咨询 设计风格-回复2</li><li>咨询 主材品牌-回复3</li><li>咨询 参观工地-回复4</li><li>咨询 家居风格-回复5</li><li>咨询 旧房翻新-回复6</li><li>咨询 新房装修-回复7</li><li>咨询 促销活动-回复8</li></ol><p>我是您的专属网络客户经理丹丹，也可直接电话咨询：【电话&amp;微信:<span style=\"color:#ff0000;\"><strong>15922296525 </strong></span>QQ:<span style=\"color:#ff0000;\"><strong>2966074922</strong></span>】{53b#30#} &nbsp;</p><p>打字不方便也可直接留联系方式，马上给您回电话过去。</p></div></div><p></p>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10137012";
    re2.prompt = "您好，您有什么问题可以留言马上会给您回复！或者您直接拨打咨询电话13082631111";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10137013";
    re2.prompt = "<div><div>您好，欢迎进入生活家装饰官方网站，我是您的家装顾问马新森，很高兴为您服务！如果您不方便打字可以拨打咨询电话：17865215124(微信)<br /></div></div><div style=\"top: 0px;\">﻿﻿</div>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10137015";
    re2.prompt = "<div style=\"TOP: 0px\">??</div><!--StartFragment --><div><div>您好，欢迎进入生活家装饰官方网站，我是您的家装顾问 徐鑫 ，很高兴为您服务！如果您不方便打字可以拨打咨询电话：15106772547QQ：1445196264。或者留下您的联系方式，我会及时给你回电。</div><div><br /></div></div>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10137381";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10137382";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10138350";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10141303";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10141305";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10141306";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10141354";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10141355";
    re2.prompt = "<p></p><p><span style=\"color:#ff0000;\"></span></p><p><span style=\"font-size:13px;\">您好！欢迎光临全国直营连锁</span><font size=\"3\"><span style=\"color:#ff0000;\"><strong>央视独家合作装修品牌</strong><span style=\"font-size:13px;\"><span style=\"color:#000000;\">【</span><span style=\"color:#000000;\">生活家家居-贵阳站</span><span style=\"color:#000000;\">】</span><span style=\"font-size:16px;color:#000000;\">！</span></span></span></font></p><p><strong><span style=\"font-size:13px;\">纯进口<span style=\"color:#ff0000;\"><u>德系</u></span>材料，时尚潮流领先，全球<span style=\"color:#ff0000;\"><u>顶级</u></span>配置。</span></strong></p><p><strong>网上咨询报名到店的业主专享<span style=\"font-size:16px;color:#ff00;\"><u>2000元</u></span><span style=\"color:#ff0000;\">现金减免！！！</span></strong>现在赶紧回复“1”报名参与，或拨打电话<span style=\"color:#ff0000;\">189-8438-5132</span><strong><span style=\"color:#ff0000;\">（小</span><span style=\"color:#ff0000;\">谢）</span></strong><span style=\"color:#ff0000;\"></span>，共同开始一段“不将就”的家装品质之旅<strong><span style=\"color:#ff0000;\">【生活家家居】</span></strong><span style=\"color:#ff0000;\"></span></p><div style=\"top: 1px;\">﻿﻿</div>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10141356";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10141357";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10143198";
    re2.prompt = "<p style=\"margin: 0pt; padding: 0pt; text-align: left; mso-pagination: widow-orphan;\"></p><div><span style=\"font-size:18px;\">&nbsp;<span style=\"color:#ff0000;\"><strong>生活家</strong></span></span>是济南首家做健康拎包装模式的装修公司，包含咱家的<strong>设计</strong>、<strong>基础施工</strong>、<strong>主材</strong>、<strong>辅材</strong>、<strong>人工</strong>、<strong>损耗</strong>、<strong>灯具</strong>、<strong>配饰</strong>、<strong>售后</strong>于一体的新型装修模式&nbsp;。<br /><strong>预约设计师</strong>&nbsp;回复1&nbsp;<br /><strong>咨询报价</strong>&nbsp;回复2&nbsp;<br /><strong>参观样板间</strong>&nbsp;回复&nbsp;3&nbsp;<br /><strong>风格案例</strong>&nbsp;回复4&nbsp;<br /><strong>优惠活动</strong>&nbsp;回复&nbsp;5&nbsp;<br /><strong>其他问题</strong>&nbsp;回复&nbsp;6 &nbsp;<br /></div><p></p><div><br /></div>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10143327";
    re2.prompt = "<div><strong><span style=\"font-size: 18px;\"><span style=\"color: rgb(51, 102, 255);\"></span></span></strong></div><div><span style=\"font-size: 16px;\"><strong>您好！欢迎光临全国品牌【生活家家居-西安站】</strong></span></div><div><br /></div><div><strong><span style=\"font-size: 18px;\"><span style=\"color: rgb(51, 102, 255);\"></span></span></strong></div><div><strong><span style=\"font-size:13px;\">您好！欢迎光临全国品牌【生活家家居-西安站】</span></strong></div><div><strong><span style=\"color: rgb(51, 102, 255);\"><span style=\"font-size:13px;\">很高兴为您服务！我是您的专属VIP服务顾问：李敏</span></span></strong></div><div><strong><span style=\"font-size:13px;\"><span style=\"color: rgb(51, 102, 255);\">如果您不方便打字可以直接来电或者留个您的联系方式，我会立刻联系您。</span><span style=\"color: rgb(204, 0, 0);\">我叫李敏:&nbsp;<u>18629061427</u>（电话可以加微信，随时分享案例）</span></span></strong></div><div><strong><span style=\"color: rgb(51, 102, 255);\"><span style=\"font-size:13px;\">或者您加QQ：2505421776</span></span></strong></div><div><span style=\"font-size: 18px;\"><strong><span style=\"color: rgb(51, 102, 255);\"></span></strong></span></div><div><span style=\"font-size: 18px;\"><strong><span style=\"color: rgb(51, 102, 255);\"></span></strong></span></div>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10143328";
    re2.prompt = "不好意思，网上咨询客户比较多，请您留下联系方式到对话框，我们会尽快跟您联系哦";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10143922";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10143923";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10143925";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10144339";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10144341";
    re2.prompt = "<span style=\"font-size:16px;color:#cc33cc;\">现在咨询的人比较多，您可以拨打18751916564 &nbsp; &nbsp; 进行人工服务</span>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10147317";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10148213";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10148215";
    re2.prompt = " <span style=\"font-size:13px;\">一次装修，永久朋友！生活家装饰短信速算报价！！您只需提供小区名称、几室几厅、建筑面积、装修风格、发送到<strong><span style=\"color:#3333ff;\">13250745173</span></strong>（5分钟内即可得到装修报价）</span><span style=\"font-size: 16px; font-family: 宋体;\"></span>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10150125";
    re2.prompt = "<strong>咨询的可能比较多，您可以拨15880689529进行人工咨询</strong>&nbsp; ";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10150126";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10151040";
    re2.prompt = "不好意思，我有事离开一下，马上回来，请稍候。 ";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10151041";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10151042";
    re2.prompt = "《二哥说事儿》走进天津期待已久的家装盛典！<br />&nbsp;8月13日 &nbsp;百万豪礼钜惠来袭 ！百元现金红包等您拿<br />报名方式：<br />1：楼盘+姓名+电话 &nbsp; 报名成功<br />2：在线咨询客服可【回复2】<br />3：自动咨询请拨打150221094<br />4：人工服务请留联系方式！稍后回复！&nbsp;";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10151044";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10152552";
    re2.prompt = "<span style=\"font-size:18px;\">系统提示：您好！我是客户经理<strong><span style=\"color:#ff0000;\">张伟</span></strong>。由于当前咨询量较大，您可直接拨打热线：<span style=\"BACKGROUND-COLOR: rgb(255,255,255)\"><span style=\"color:#ff0000;\"><strong>18690971161</strong></span></span>（微信）</span> <strong><span style=\"font-size:18px;\">QQ</span></strong>:&nbsp;<span style=\"font-size:18px;\">1356855376</span> ";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10152554";
    re2.prompt = "<p>不好意思，我是卢博臣<strong><span style=\"color:#006600;\"><span style=\"font-size:16px;\">，</span></span></strong>现在网络咨询繁忙，您可以添加<span style=\"font-size:16px;color:#cc33cc;\"><strong><em>QQ</em></strong></span>：<strong><span style=\"font-size:16px;color:#ff0000;\">1162555785</span></strong>，或者拨打电话：<span style=\"background-color: rgb(255, 255, 255);\"><span style=\"color:#ff0000;\"><strong>18366285417</strong></span></span><strong><span style=\"font-size:16px;color:#ff0000;\"><strong><strong>，</strong></strong></span></strong>我会第一时间回复您。<br /></p>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10152947";
    re2.prompt = "<div>您好！欢迎光临央视上榜品牌【生活家装饰-济南】<br />“5.20，爱家日”征集央视上榜样板间，一线品牌建材，纯正徳标工艺，铸造品质家装。现在咨询即可抢占样板间名额，名额有限，还在等什么？马上点击右下角进行咨询~~~<br />我是您的网络<span style=\"color:#ff0000;\">客户经理--三丰</span><br />如不方便打字，可留下您电话，我立即给您回电！或可以直接来电！<br /></div><br /><strong>TEL:<span style=\"color: rgb(255, 0, 0);\">15628882021 QQ:1144900439</span></strong><br />";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10152986";
    re2.prompt = "<div>&nbsp;您好！欢迎光临央视上榜品牌【生活家装饰-济南】<br />“<span style=\"background-color: rgb(255, 255, 102);\">5.20，爱家日</span>”征集央视上榜样板间，一线品牌建材，纯正徳标工艺，铸造品质家装。现在咨询即可抢占样板间名额，名额有限，还在等什么？马上点击右下角进行咨询~~~<br />我是您的专属客户经理<span style=\"background-color: rgb(255, 255, 102);\">小凡。</span><br />如不方便打字，可留下您电话，我立即给您回电！或可以直接来电！<br />TEL：<span style=\"background-color: rgb(255, 255, 102);\">18560789897</span>&nbsp;&nbsp;&nbsp;&nbsp;QQ：<span style=\"background-color: rgb(255, 255, 102);\">960202164</span><br /></div>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10152989";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10152995";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10153062";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10153063";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10153067";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10153068";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10153069";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10153462";
    re2.prompt = "<span style=\"color: rgb(27, 29, 116); font-family: tahoma; background-color: rgb(231, 231, 231);\">不好意思，客服现在正忙，请稍等……</span>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10154010";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10154381";
    re2.prompt = "<div style=\"TOP: 0px\">不好意思，刚刚有个热线电话呼入，非常抱歉，让您久等了！</div>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10154382";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10155388";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10155556";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10156010";
    re2.prompt = "&nbsp;12年来我们专注于简约、后现代、现代简约、欧式、美式、简欧、新中式、中式、地中海等装修风格，公司拥有6000平米的展厅，有各种风格的样板房，欢迎前来参观。 ";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10156083";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10156085";
    re2.prompt = "<span style=\"word-wrap: break-word; -webkit-nbsp-mode: space; -webkit-line-break: after-white-space;\">我现在临时有事需要离开电脑，您可以先浏览一下网站看看产品详情，或者<span style=\"color:#ff0000;\">留下您的联系方式</span>等我回复，给您带来不便请多谅解！</span>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10156086";
    re2.prompt = "<p>稍等片刻，马上回来！着急咨询可拨打13550091793 寇鹏</p>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10156087";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10156088";
    re2.prompt = "您好，我是客户经理孙露15842617190，现在咨询客户较多，您可以留下联系方式，稍后我给您打回去详细说。";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10156091";
    re2.prompt = "您看您这面方便留下电话么，我给您打过去，让您详细的了解下。";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10156093";
    re2.prompt = "<p>您好，我是您的家装顾问马金梅</p><p>欢迎咨询；15942430873</p><p>QQ：1134032511</p>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10156094";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10157035";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10157909";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10157910";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10157911";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10157912";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10157913";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10158191";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10158332";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10158826";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10159459";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10159643";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10159644";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10160581";
    re2.prompt = "<span style=\"color:#3366ff;\"><span style=\"font-size:16px;\"><strong>不好意思，我正在接电话，麻烦您留下联系方式，我稍后回复您。</strong></span></span>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10160582";
    re2.prompt = "<div><div><div><div><div>终于等到您~这里是【生活家装饰】集团官网，我是您的专属客户经理小萍（客服热线：13922329660）<a href=\"http://wpa.qq.com/msgrd?v=3&amp;uin=939130943&amp;site=qq&amp;menu=yes\" target=\"_blank\"><img title=\"咨询报价\" alt=\"咨询报价\" src=\"http://wpa.qq.com/pa?p=2:939130943:51\" border=\"0\" /></a>即日起，预约量房，成功即送100元京东购物卡，只限100个名额哦!<br />【咨询报价】回复&nbsp;1<br />【设计案例】回复&nbsp;2<br />【预约量房】回复&nbsp;3<br />【活动优惠】回复 4</div><div>【材料品牌】回复 5<br />【三分钟短信报价】&nbsp;&nbsp;编辑短信：楼盘+面积+姓名 到13922329660<br /><br />人工服务请直接留下联系方式，小萍会尽快给您回电哈！<br /></div><br /></div>﻿﻿</div></div></div><div style=\"top: 0px;\">﻿﻿</div>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10161218";
    re2.prompt = "<span style=\"font-family:SimHei;font-size:16px;\">一次装修，永久朋友！生活家装饰短信速算报价！！您只需提供小区名称、几室几厅、建筑面积、装修风格、发送到<span style=\"color:#ff0000;\"><strong>18311168463</strong></span>（5分钟内即可得到装修报价）&nbsp;</span><span style=\"font-family:宋体;\"><span style=\"font-size:16px;color:#ff0000;\"><strong></strong></span></span>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10161219";
    re2.prompt = "<span style=\"FONT-SIZE: 32px\">系统繁忙，请咨询15810613317苟丹</span>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10161221";
    re2.prompt = "<p>现在是咨询高峰期，您留下您的联系方式，小区面积，装修风格，稍后给您回电，详细为您解答!&nbsp;&nbsp;&nbsp;或者在线QQ：631523665；24小时热线：13511060478（手机号也是微信号）</p>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10161537";
    re2.prompt = "<h2></h2><h2></h2><h2><h3><h3>您好，欢迎您的咨询，请问有什么需要帮助的吗？</h3></h3></h2>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10161538";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10161539";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10162395";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10162396";
    re2.prompt = "<p><strong><span style=\"font-size:13px;\"><span style=\"color:#ff0000;\">生活家家居6000平米展厅体验馆等您来参观！您可以直接添加QQ：673998428</span></span><span style=\"color:#ff0000;\"><span style=\"font-size:13px;\">我们发详细的装修材料，效果图装修案例供您参考！</span></span></strong> </p>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10162704";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10162705";
    re2.prompt = "<div><span style=\"color:#330099;\"><img alt=\"\" src=\"file:///C:\\Users\\sc\\AppData\\Roaming\\Tencent\\Users\\393790920\\QQ\\WinTemp\\RichOle\\DKU3[9A2@K6]Y{MIDU0DM43.png\" />现在忙碌中，未能及时回复，您可以留下您的电话，一休空了给您回电，或者可以拨打咨询热线:15005948703 &nbsp;<span style=\"font-family:Arial;\">QQ&amp;微信:418493726</span></span></div>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10162706";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10162707";
    re2.prompt = "您好，我是李阳（电话：13960829853 微信：13960829853 QQ 3339574486） 是您的专属VIP网络客服很高兴为您服务!这个是临时对话窗口,系统不太稳定~您留下您的QQ号码吧?我加您为好友,第一时间联系您！如果您现在不方便打字，可以留下您的联系方式，我将马上给您回复！";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10162708";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10162709";
    re2.prompt = "<span style=\"font-size: 13px;\">&nbsp;<span style=\"font-family:宋体;\">您好，我是生活家装饰的客户经理小邓</span>,<span style=\"font-family:宋体;\">现在有事离开了，您方便可以拨打我们的热线：<span style=\"font-family:Arial;color:#ff0000;\"><strong>15159638820</strong></span><span style=\"font-family:宋体;\">，</span></span><span style=\"font-family:宋体;\">或者加我<span style=\"color:#ff0000;\"><strong>微信/<span style=\"font-family:Arial;\">QQ</span></strong></span><span style=\"font-family:宋体;\"><span style=\"color:#ff0000;\"><strong>：494601989</strong></span> </span></span><span style=\"font-family:宋体;\">很高兴为您解答装修问题。</span></span> ";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10162710";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10163136";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10163137";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10164805";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10164806";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10165094";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10165674";
    re2.prompt = "<span style=\"color:#3366ff;BACKGROUND-COLOR: #ffffff\">您好，业务繁忙，请耐心等待或者来电咨询：17780739870（屈依依）</span> ";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10165692";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10165693";
    re2.prompt = "&nbsp;现在客户们都挤到夏天这里了，夏天已经把双脚都用来打字呢，请您稍等片刻，夏天马上回来。";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10166149";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10166151";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10166719";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10167088";
    re2.prompt = ".";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10167451";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10169564";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10169565";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10169705";
    re2.prompt = "<div><div><div><span style=\"font-family:'Microsoft YaHei';\"><span style=\"font-size:13px;\">&nbsp;不好意思，我正在接电话，<span style=\"color:#ff00;\"><strong><u>麻烦您留下联系方式</u></strong></span>，我稍后回复您。</span></span></div></div></div>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10169706";
    re2.prompt = "<p><span style=\"font-family:Microsoft YaHei;font-size:13px;\"><strong>不好意思，小葵暂时离开电脑前，麻烦您留下联系方式，我稍后回复您。或者您也可以直接联系小葵18602070863</strong></span></p>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10170117";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10170118";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10170248";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10170249";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171033";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171035";
    re2.prompt = "您好，生活家家居上海分公司，竭诚为您服务，您的问题我们将马上回复您！<strong>如果您不想打字，请留下您的联系方式，我们马上与您联系！</strong>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171804";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171806";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171814";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171816";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171817";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171818";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171819";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171821";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171822";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171826";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171827";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10171829";
    re2.prompt = "<p>您好，欢迎光临全国连锁装企品牌【生活家家居-重庆站】<br />1，本窗口可咨询<span style=\"color: rgb(153, 0, 0);\"><strong>【当前优惠活动】</strong></span><br />2，本窗口可咨询<strong><span style=\"color: rgb(153, 0, 0);\">【材料，报价，施工，设计】</span></strong>等装修问题<br />3，本窗口可预约您喜欢的设计师</p><p>如网络不稳定请加<strong><span style=\"color: rgb(51, 0, 153);\">QQ：3245194355</span></strong>或拨打<strong><span style=\"color: rgb(51, 0, 153);\">免费咨询电话：18983097138（龙莉）</span></strong>进行咨询！</p>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10172100";
    re2.prompt = "<strong>请稍等，我正在打字</strong>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10172243";
    re2.prompt = "<p><span style=\"font-size:13px;\">你好，我是您的专属装修顾问六六，我暂时不在，如果有关于装修方面的问题想要咨询，可以拨打我的电话：<span style=\"color:#ff0000;\"><strong>13125678468</strong></span>，也可以加我微信：<strong><span style=\"color:#ff0000;\">w1666400224</span></strong>，欢迎打扰</span></p>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10172248";
    re2.prompt = "&nbsp;很抱歉，目前坐席忙，您的问题我已收到，请您稍等片刻，我来为您解答，给您带来的不便，请您谅解！也可以留下【<span style=\"color:#cc0000;\">姓名+联系方式+小区+风格需求</span>】即可。直接拨打我的电话：<span style=\"font-size:16px;color:#ff00;\">15911076838（可加微信）</span> ";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10172466";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10172534";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10172563";
    re2.prompt = "您好，我是重庆生活家装饰的客户经理何丽娜。很高兴为您服务！生活家“年终巨献跨年狂抢” 特推出家装珍藏版 品牌升级 品质升级 升级不加价与您同贺品质家装全球盛宴！详情咨询：15111880113 QQ：1935322081《交谈中请勿关闭窗口》 ";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10174144";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10174909";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10174910";
    re2.prompt = " 您好，现在是咨询高峰期，请耐心等待回复，也可留下您的联系方式，我们这边马上安排工作人员为您回复。 ";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10174917";
    re2.prompt = "抱歉，现在很忙，方便的话可以留下您的联系电话，我们会在10分钟以内电话联系您！ ";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10175115";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10175117";
    re2.prompt = "<p>在看我们官网吧，弹窗若有打扰到您我很抱歉，您想咨询了解，有三种方式可以找到我：</p><p>QQ：1480003127</p><p>TEL/微信：15971401041</p><p>期待您的咨询哦！</p>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10175118";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10175119";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10175120";
    re2.prompt = "<p><strong>如果您打字不方便，也可以拨打电话：<span style=\"font-family:Microsoft YaHei;color:#ff0000;\">13971803017</span>（吴钰）或者加微信：13971803017</strong></p>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10175978";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10177240";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10177470";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10177474";
    re2.prompt = "<div style=\"top: 0px;\">??</div><h3><span style=\"color:#009900;\">【杭州生活家】</span><strong>开业珍藏版限量发售，<span style=\"color:#ff0000;\">“O<span style=\"font-family:宋体;\">增项、无延期</span><span style=\"font-family:Times New Roman;\">”</span></span>是全国最大的一家健康整装公司，健康家装领导者，我们只做<span style=\"color:#009900;\">环保家装</span>，杭城首家<span style=\"color:#000099;\">硬软装一体化</span>的家装模式，生活家— 提供极致性价比;我是您的专属客户经理：<span style=\"color:#ff6600;\">明月</span>，如果我这边不在的话，您可以直接给我 来电：<u>18767157019<br /></u></strong></h3><strong>微信、QQ:1198534170</strong>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10177475";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10177720";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10177723";
    re2.prompt = "专属家装顾问：唯曼，欢迎来电咨询： 15925603867，QQ954093447同微信";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10177724";
    re2.prompt = "&nbsp;<p><strong>亲爱的主人，我可以为您服务吗？</strong></p>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10177738";
    re2.prompt = "我可以为您服务吗？";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10178012";
    re2.prompt = "&nbsp;<span style=\"font-size:18px;\">欢迎咨询健康整装——<span style=\"color:#cc0000;\"><strong>生活家装饰</strong></span>—重庆站！您可以向我们咨询关于装修的一切疑问，同时欢迎网络预约设计师，享受更多优惠。 友情提示：如果您不方便打字，可以留下您的电话，我们马上安排工作人员与您通话。您也可以拨打咨询热线：<span style=\"color:#ff0000;\"><strong>13996012771（李利） QQ：2911625513</strong></span></span> ";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10178013";
    re2.prompt = "<div style=\"top: 0px;\">??</div><p style=\"color: rgb(0, 0, 0); font-family: 宋体; font-size: 14px;\">【杭州生活家】开业珍藏版限量发售，“<span style=\"font-size:18px;color:#ff0000;\">O增项、无延期</span>”是全国最大的一家健康整装公司，健康家装领导者，我们只做环保家装，杭城首家<span style=\"font-size:18px;color:#3366ff;\">硬软装一体化</span>的家装模式，生活家—&nbsp;提供极致性价比;我是您的专属客户经理：<span style=\"font-size:18px;color:#33cc00;\">安琪</span>，您如果打字不方便的话，可以直接给我来电，电话，微信<span style=\"font-size:16px;color:#000000;\"><strong>：13186985528，</strong></span>&nbsp;QQ：<strong><span style=\"font-size:16px;\">277657549</span></strong></p>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10178843";
    re2.prompt = "<p><span style=\"font-family:KaiTi_GB2312;font-size:18px;\"><strong>很抱歉，您访问的客服正在忙，您可以直接留下联系方式或直接联系<span style=\"color: rgb(255, 0, 0); background-color: rgb(255, 255, 255);\">生活家装修顾问-天天</span></strong></span></p><p><span style=\"color: rgb(255, 0, 0);\"><strong><span style=\"font-family:KaiTi_GB2312;font-size:18px;\">&nbsp;电话18969027740（微信） &nbsp; QQ 1923279142&nbsp;</span><br /></strong></span></p><p><br /></p>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10178844";
    re2.prompt = "<p>很抱歉，您访问的客服正忙，您可以直接留下联系方式或者直接联系<span style=\"color:#cc0000;\"><strong>生活家装修顾问-艾达</strong></span></p><p><span style=\"color:#cc0000;\"><span style=\"color: rgb(204, 0, 0);\">电话：13732274709 &nbsp; &nbsp;QQ305350973</span></span></p>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10179467";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180239";
    re2.prompt = "<span style=\"font-size:13px;\">您好，这会信息有点忙，感谢您的理解，可以留个联系方式，稍后给您回过去~ 可以直接拨打下<strong><span style=\"color:#ff0000;\"><u>13301292992</u></span></strong>，也是微信号</span> ";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180382";
    re2.prompt = "<p>不好意思，在线咨询客户较多，非常抱歉，让您久等了！</p>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180459";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180468";
    re2.prompt = "<div>&nbsp;您好！我现在不在电脑旁，您可以留下您的联系方式，我稍后第一时间联系您，解决您的装修疑虑，谢谢您的到来！<br /></div>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180469";
    re2.prompt = "您好，我是生活家的客服李吉琛（樱木）（电话15513021130 微信798916753）是您的专属vip网络客服，很高兴为你服务！这个是临时对话窗口，系统不太稳定，您留下您的qq号吧，我加你好友，第一时间联系您。如果您现在不方便打字，可以留下您的联系方式，李吉琛将马上给您回复! ";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180470";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180473";
    re2.prompt = "您好！由于访问客户比较多，您可以留个联系方式或者联系我：18234026804（ 可加微信），我会第一时间联系您!";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180474";
    re2.prompt = "您好！由于咨询客户比较多，没办法及时回复您，非常抱歉！您可以留下您的装修需求和您的联系方式，我稍后第一时间回复您，解决您的装修疑虑！";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180476";
    re2.prompt = "<div style=\"top: 0px;\">﻿您好！欢迎咨询央视合作家装品牌-【生活家装饰集团】【太原站】，我是您的品质家装服务经理：郝建峰。</div><p>如果您打字不方便，可以留下您的联系方式，我稍后会与您电话沟通，您也可以来电咨询。</p><p>咨询电话/微信：15135127979</p><p>QQ：547476765</p>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180478";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180480";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180552";
    re2.prompt = "您好！我现在不在电脑旁，您可以留下您的联系方式，我稍后第一时间联系您，解决您的装修疑虑，谢谢您的到来！";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180593";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180594";
    re2.prompt = "目前咨询人数较多，如没有及时回复请谅解，您可以留下您的联系方式稍后给您回电";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180595";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180604";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180605";
    re2.prompt = "<span style=\"font-family:KaiTi_GB2312;font-size:16px;\">我是您的专属服务顾问：夏丽君，如果不方便打字可以留下您的联系电话，小夏稍后给您电话，也可以直接给我来电：13294188378</span><br />";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10180606";
    re2.prompt = " 您好，系统出现问题，客服接待暂时无法畅通。您可以拨打电话15827455141或添加QQ1051249910咨询 ";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10183484";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10183485";
    re2.prompt = "你好，由于咨询人数过多，客服繁忙，您可以电话咨询，或加微信：13614039417（电话同）";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10183486";
    re2.prompt = "不好意思亲，现在有点小忙，去给亲们研究<span style=\"color:#ff0000;\">装修优惠活动</span>了，您可以联系<span style=\"background-color: rgb(51, 255, 51);\">我电话18341611666 微信18341611666新鲜出炉的好消息第一时间播报给您哈！</span>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10183703";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10184459";
    re2.prompt = "&nbsp;您好，现在客服经理不在值班或者正在繁忙，您可以直接电话咨询，给您带来不便，还请电话来指点18303416964";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10184703";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10184704";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10184706";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10185328";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10185927";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10185928";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10186613";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10187027";
    re2.prompt = "<span style=\"font-family:FangSong_GB2312;\">您好，由于现在系统比较繁忙，咨询人数比较多，回复不及时请您谅解。请留下您的电话，稍后客服会给您回电，为您提供装修方面的咨询服务。</span>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10187093";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10189243";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10189735";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10189736";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10189737";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10191650";
    re2.prompt = "<div>装修中您有哪些疑问或者您最感兴趣的问题可以与我沟通一下喔</div>！留下您的联系方式，我会尽快与您联系的呦！";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10192058";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10192059";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10192229";
    re2.prompt = "由于现在咨询的客户比较多，请耐心等待，或者你可以直接联系客户经理 <strong>&nbsp;<span style=\"font-size:18px;\"><span style=\"background-color: rgb(153, 255, 153);\">三清</span></span></strong>，电话/微信：<span style=\"font-size:18px;background-color: rgb(255, 0, 0);\">13735850716</span>，QQ：<span style=\"font-size:18px;background-color: rgb(255, 0, 0);\">2448588618</span>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10193388";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10193390";
    re2.prompt = "<span style=\"font-size:16px;\">{53b#30#}抱歉，现在系统忙，请稍等片刻！</span> ";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10195184";
    re2.prompt = "您好！由于访问客户比较多，您可以留个联系方式方便联系！【客服电话15034070958可加微信】";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10198651";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10201693";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10201696";
    re2.prompt = "抱歉，由于客服系统繁忙，可能不能及时回复您的信息，如果有需求可添加微信：13546303720敬请谅解。";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10202416";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10209204";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10209205";
    re2.prompt = "<p><span style=\"font-size:10px;\"><span style=\"font-family:FangSong_GB2312;\">您<span style=\"color:#ff0000;\"><img alt=\"\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAgCAYAAACcuBHKAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAOxAAADsQBlSsOGwAAEKtJREFUWAkBoBBf7wEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD98+j/+vHjAPvkzQD66N4A9uLYAPzs4QD++vsA/fPwAAEB+gAAAAAAAAAAAAEGBAD/+vwA/fz8AAIDCgARPU8AE0t/AAMNGAEAAAAAAAAAAAAAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/vz5//nfwQDuw6sA99rFAPnp5wAFCwMABg/8AAUNAQAIEPgAAAAAAAcMAAAAAAAAAAAAAAAAAAD59AAA6sj8AAQSEwAXVoAACzBcAAMIDAEAAAAAAAAAAAAAAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD99u7/9dKqAOqwkgD56ecADSYsAAkpJAASFOgAAQzqAAEB7wAAAAAAAPP4AAAAAAAA9PgAAAAAAAAAAAD17PcA47z8ABNIZAATToUAAwoSAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD327r/4YhBAPfj4gAQPVQAG2JCAAgX0gAA+tYA//ftAP/4AgAA9hEAAPr9AAAACgAA+foA/v0GAAAAAADm0h0A7cfdAOn0/wAO9vwAAAIGAOvW1P/jzc4AFyMjABIfIQAAAAAABhcWAAMEBAEBAAAAAAAAAAAAAAAAAAAAAP78+f/wvIIA5aGLAA85SAAZWWsAAxL5AAH3uAAA9+UAAAAAAAD6+gAAAAAA//j4AP/99AAB8PsAAPr8AAD5+gD12QsA+dQ6AAAAAADjvbEA3/v8AAogAQDsAxwA5OTlACQJFQAmLC4A/g4CABVaZgAbOjsBBAAAAAAAAAAAAAAAAP78+f/srHAA67moAB1tgQAPOEAAAPvVAAD1xwAAAAAAAAkbAAD++QAABvsAAPrxAAEAAAAA+AAAAQr6AP8A9QAAAAAA+v7zAOO9sQApXGkAK4mVACKkpADe08cA9vvjAE4vNQAWGR4AAAAAAOQA9AAAAAAAAAAAAAEAAAAAAAAAAAAAAADssHb/67CPACR2fwAEKEMAAPvLAAAC6QAAAAAAAAAAAAAAAAAA/vgAAP75AAD79wAA/PQAAPfyAP/4+AAB9/oA//b1AAD6/AD2y+4A36AUACVUVwABWFgABvT0APm0tAD50dAA+trZAO3l5AARqKsAF0VDAQAAAAACAAAAAAAAAADzzqL/56mQABlmggAEJxcAAPe6AAAC+QAAABAAAAAQAAAAEAAAABAAAAQNAAACBwAABQkAAAMHAAAGBgABAw0AAAAAAAAGAwAAAAAACi4MAPwf7ADzq6kA/goJAPvh4ADzq6kA+rKyAPXe3gDzAgEA5ejlAAAAAAAAAAAAAgAAAAD98+j/5Jt7ABZKUgAPOEAAAPz3AAAGCgAAAhAAAAIQAOTd+QDEs9wAAAIQAAD+CwAABA0AAAIHAAADDAAAAwgAAAX7AP8JBgABBAgAAAYEAAHsBAAA2QIADG1vAAPLywDxVlYAANjZAAAAAAAAAAAAAAAAAAS7uwAAAAAAAAAAAAIAAAAA772OAAAAAAAURVIAAP3EAAAC+QAAAhAAAAEMAAABDAD28gwAup/OAOvi9wAAAAAAAP4LAAACCAAAAwIAAAMHAAAGBgABAw0AAAAAAAAGAwDawvAAHAcSAAAAAADxfn0AAAAAAAAAAAAAAAAA+AcGAAQSCQDx4eAA9+Xm/wAAAAAC++vb/+u/qwAUR0QAAhXxAAD69gAA/gcAAAAAAAAAAAD//wsAJTMiAFx9WwCTbqMA5N35AAAAAAAAAgUAAAIHAAABBQAAAAAAAAX7AP8JBgAA9PkA39f/AAAAAAD0k5EAANjZAAAAAAD1BgUA9QYFAPMCAQAAAAAADx8gAN/f2wAAAAAABPjjxwD+8vAAEDEpAAD03gAABAgAAAAKALeZzQDZ0d4A7ubuABIaEgAQFBoA5NnkAH5OlQBiiE4AIioHABohBQAAAAAAAAMIAAAA+gAAAAAA8vULAPbg7AAMeW8A+rm4AO/e3gAAAAAAAAAAAPgHBgD1AwEAEwgSAPbyAADtzsEAu9K0/wTy0MMADSYsAAQMAAAA+u8AAAQZAAAA9gAtQhsAFhQaAAAAAAAAAAAAAAAAAN7SHAAAAAAAICodABUO9QAA/vMAAAAAAAAAAAAAAAAAAAAAAA8bBAAFOgwA1uLTAAbb2QANAAAA+AcGAAAAAADzAgEAAAAAANkDAQD0DfkA3BDJAA/l7gAE99rFAA0rLgAABO8AAPoAAAAAAAAAAAAAGyUuABwmFQAAAAAAAAAAALeoyQASGhIAaH2EAAga3AAA/eQAAPzzAAD/+wAA/fgA4OsBAPP+EgAa++sAS2gIAMKntADW6vkAKgwIAAv9/wD1AwEA7goEAAAAAAD4EwYA80IOAO0E7wAPAAAABP3z8AAIFw0AAPrvAAAAAAAA/PgAAADvAAEAAAAAAOoAAAAAAOvm9gDZwbcAW3lbAAcZ5wAA99oAAP/xAAD+9wAA/fkAAAMIAM/nBQC77/EA+/8CADAFGwBHTO4AMUHzAObDBADh0/gA2vQNACYM8wAFQzoA/UE3AOXtzAD78vsABwUNAAT+/gMABAkDAAD48wAAAAAAAAAAAAAAEQAAAO8AAAb5AAD+BwAVHPkAYH9XAA8XEAAB+M8AAP/xAAAA+AAA//sAAAAAAAD9+AAxGfsA5ww0ANPm0QDVAfgA1vgNAFP8AwBBTu4A5jkXAOjlDQBSIwMAzQUYANLx1QDq7u0ABwoCACkWNwACAAAAAP/37wAA/fMAAAAAAAAAAAAA+u8AAPz4AAD55wAA/O8AAPr2ABAT/gAB+M8AAP/xAAAA+AAA/vkAAP35AAD9+AAA+voAIBX/ABYDEQAjDiYA+fYBAP/8AACtBwoAv+sSABQJ/wACFQYAzQUjAMf+6wDl6uQABwr/ABMAEQAyITcABAAGBAD58/IACwAFAAD98wAA+AAAAAgNAAD67wAACQIAAP8AAAAA+AAA+/EAAAD4AAD++QAA//sAAP35AAAAAAAAAAAAAAAAAP/4+AA0CsAAAABAAO385gDq7u0ABwr/ALMEEQAk+f4A8gH/AMv26ADv/O8ABQYAAA0ICgA1AhgAEw0VAQQLGBwA+enwAAD6DwAAAAAAAAbzAAD4AAD4+PgA79wHAObjKQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAv8BgAdHSMAAAAAAOru7QD+BvkA1f8DAAAI+wDtAPgAAgQAAAEEAAAd1gUAO0BCAAAAlQAECik5AO/CogAARDAAAPrzAAAADQAABvMA3tb3AOjUDgARHh8ABCceAAT6AQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAgAAAAA/f0AP0JBADyDsUA//wAAAEE/QAAAAAA//wAAAX4CABVCx0AGe/DAA8iLgAAAAAABAkqTwDnqZAA8d/vAA8bBAAA+vMA/gD6ANrE8gDZtPMAGDQDAFRQngALDAoA/QABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAH9/QD/AwMAAv36ACkDBQAZywsAAc3UAOkZ+gDyAf8A+wP7AEgPJgA6KxMA7pWcABFMbQADER4AAAAAAAQIHi8ADy43APLI5QAPUxkA//z4AAIACABOTyIA0ScCALNttgCk6k8ANlxfAB0zMgAMDxIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAvb3AOnr6ADRzL0A0peYABAeKQB/j0EAs+HQAMDs9gBKLB8A8M/XAP716wAKLUQAAgQHAQAAAAAEAwgMAfPOov/gi2QAGd4OAAMeAwD//PgAAhAAADFHIADRclUA4o6rAMjS2gDpMSsAEgYVAAAAAAAL/gIAAAAAAAAAAAAAAAAA9QL+AO766wD16OcA1dfdAAcgDgBUgmoABP3HACDl9wBB2d0A5+TzAPXi4AATSGQACRw1AQAAAAAAAAAAAQAAAAD///7/45NQAPngygAjWBgAAAAAAAAAAAAABgMA/RFXANKc5gDJnK0AFen2AAAAAAAZAAgAAAAAAAz/AgAAAAAA9AH+AOcA+AAAAAAA1gf5ACM8KQBGf2YAERLpAOGvsgAHHkIADyUgAP/yzQDxx70AASJWAB1diAEAAAAAAAAAAAEAAAAAAAAAAPvr2//chEYADhnwABlCHwAA+vwAAAAAAAEQDwD8DU8A7+MRAOO51QD2ws0A+uLtAA3w+wAAAAAAAAAAAAAAAADzEAUA+ikeAB5JKAAiSEoA9dW8APrmwwAIIkIAEUZMAADvwwAA6eAA/u7fAOW92QAKSIsAFDdTAQAAAAABAAAAAAAAAAAAAAAA99u6/+CNVgAOIAEAGTwbAAAAAAAAAAAAAAYEAAEMOgAADzQA8+P6AOPL2AD72e8A/e7xAAAAAAADEg8AEzcZABQ3LwAGDgMAAfXsAN6ooAAAAAAAIlhgAPwJ4wAAAAAABfDxAP7u3wD819kA6ewbAB55wwEAAAAABAAAAAAAAAAAAAAAAAklRgH327r/4I5jAPvz5AAcOhAAAg8MAADz9gD/87wAAPTGAAwDKwAmQykAA0omAAAAAAAAAAAAAAAAAAAAAAD9+d0AAePXAAAAAAAGAgcAAAAAAAH23gAF+fYAAAAAAP/18QAC9/UAAAAAAPz38gAAAAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAACSVGAfvr2//nnGIA26vIABMxDAASJA8AAg8MAADz9gAAB9EAAvnuAAAHEgABCBkAAAAAAAAAAAAAAAAABAP2AAAIGQAAAAAA+v7bAPnc2wD42QIABhgKAAAAAAAC9/UAAO7sAPDo9wAHIEMAAADRAAAAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/vz5/+7NtADsr4YA/+jSAA4oDAAQGBUABhIKAAMS/AD/AB0AAAAAAAEHEgAAAAAAAAAAAPbv/ADy3OIA+93aAPTu/gAAMl8AB+W6ABko/AAKCQQAAAAAAPXm8ADq7xUAHW2sAAUVJQEAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAA/fz8//f3+AAAAAAA4+XlAPXSqgD+x7IADe/QAAAAAAAKEw4A/wj9AAkICQAAAAAA+PD6APn5AQD99PEA9wccAAcsTwD9N1AAGyMtAPzdygDzu38ABe7dAPr/BQAHIDYAFVOYAAkbGgEAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAPn5+f/09PQA7/DxAPT3+QDz8/QA9vTqAP3r2wAA7PIAB/PRAP30/gAAAAAAAAAAAAMMAgD5DS8AABQOAAMVJQAKDBYACggGAAoJCAAQDw0AAuPRAPrZwQAAAAAAFEFTAAkcNQEAAAAAAAAAAAAAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA///+//r6+wD7+vsA+fr5APr6+QD8+/wA+fv8APv7+wD5/P4AAAAAAAAAAAAAAAAABwQCAAUFBQAHBQQACgsLAAcGBwAFBgUABAMDAAMEBAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA43Ns0dMT/rMAAAAASUVORK5CYII=\" /></span>好！欢迎来到生活家家居健康整装世界。您的客服暂时不在线，稍等片刻，马上回来！<strong>如有问题请拨打电话:</strong></span></span><strong>15940887985。</strong><span style=\"font-size:10px;font-family: FangSong_GB2312;\">或留下您的联系方式，我们会尽快联系您！</span></p>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10209308";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10213120";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10216082";
    re2.prompt = "您好，现在有些忙儿。您有什么问题可以先给我留言，稍后我会给您解答的，请您耐心等待下。";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10217829";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218468";
    re2.prompt = "在线咨询较多，可致电15668673986";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218469";
    re2.prompt = "<p>咨询量比较大，请您耐心等待哦！咨询热线：</p><p><strong><span style=\"color:#cc0000;\">18640885201 微信：cong0916</span></strong></p>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218470";
    re2.prompt = "<span style=\"font-size:16px;\">您好，现在有事不在。有关家装的问题。</span><span style=\"font-family: SimSun;\"><span style=\"font-size: 16px;\"><span style=\"color: rgb(102, 0, 204);\">可留下您电话！或可以直接来电！</span></span></span><br /><p><span style=\"font-size: 16px;\"><strong><span style=\"color: rgb(51, 51, 255);\">Tel:<strong>15942430873</strong></span></strong></span></p><p><strong>QQ:1134032511</strong></p>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218476";
    re2.prompt = "<span style=\"color: rgb(0, 0, 255); font-family: 宋体; font-size: 14px; line-height: 16.8px; background-color: rgb(241, 248, 249);\">您好！欢迎光临【生活家装饰-北京站】</span><br style=\"color: rgb(0, 0, 255); font-family: 宋体; font-size: 14px; line-height: 16.8px;\" /><span style=\"color: rgb(0, 0, 255); font-family: 宋体; font-size: 14px; line-height: 16.8px; background-color: rgb(241, 248, 249);\">我是家居顾问：</span><span style=\"font-family: 宋体; font-size: 14px; line-height: 16.8px; background-color: rgb(241, 248, 249);\"><span style=\"color:#ff0000;\">吕亚雷&nbsp;</span></span><br style=\"color: rgb(0, 0, 255); font-family: 宋体; font-size: 14px; line-height: 16.8px;\" /><span style=\"color: rgb(0, 0, 255); font-family: 宋体; font-size: 14px; line-height: 16.8px; background-color: rgb(241, 248, 249);\">咨询电话：</span><span style=\"font-family: 宋体; font-size: 14px; line-height: 16.8px; background-color: rgb(241, 248, 249);\"><span style=\"color:#ff0000;\">15011587429</span></span><span style=\"color: rgb(0, 0, 255); font-family: 宋体; font-size: 14px; line-height: 16.8px; background-color: rgb(241, 248, 249);\"> &nbsp; &nbsp; &nbsp;微信咨询：</span><span style=\"font-family: 宋体; font-size: 14px; line-height: 16.8px; background-color: rgb(241, 248, 249);\"><span style=\"color:#ff0000;\">w136278662</span></span><br style=\"color: rgb(0, 0, 255); font-family: 宋体; font-size: 14px; line-height: 16.8px;\" /><span style=\"color: rgb(0, 0, 255); font-family: 宋体; font-size: 14px; line-height: 16.8px; background-color: rgb(241, 248, 249);\">QQ咨询：</span><span style=\"font-family: 宋体; font-size: 14px; line-height: 16.8px; background-color: rgb(241, 248, 249);\"><span style=\"color:#ff0000;\">136278662</span></span><br style=\"color: rgb(0, 0, 255); font-family: 宋体; font-size: 14px; line-height: 16.8px;\" /><span style=\"color: rgb(0, 0, 255); font-family: 宋体; font-size: 14px; line-height: 16.8px; background-color: rgb(241, 248, 249);\">温馨的提示：3月份是装修的最好时候，这时候看装修的也是最多的，建议您提前了解装修。</span><br />";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218484";
    re2.prompt = "请问 您家是新房还是老房整体翻新呢";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218486";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218497";
    re2.prompt = "<span style=\"BACKGROUND-COLOR: #99bb00\">很抱歉，目前坐席忙，您的问题我已收到，请您稍等片刻，我来为您解答，给您带来的不便，请您谅解！</span>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218541";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218542";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218543";
    re2.prompt = "您好，欢迎您的咨询，请问有什么可以帮到您吗？健康品质装修欢迎致电13928852138 李先生";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218545";
    re2.prompt = "您好，我是小古，现在有事离开一下，您可以留下联系方式，我回来后会立刻联系您，或者您也可以加微信15521199213。祝您生活愉快!";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218623";
    re2.prompt = "<p><strong>不好意思让您久等了，我是今天的值班经理【张帅】，如果不方便打字，可直接拨打电话：<span style=\"color:#ff0000;\">15101001784</span>（微信），QQ：401732594</strong></p><p><strong>请问您家多大面积呢？</strong></p>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218810";
    re2.prompt = "&nbsp;<strong>您好，我是今天的值班经理【史贺】，如果不方便打字可以直接打电话：<span style=\"color:#ff0000;\">13718717812</span>（微信）；QQ：2213521641.</strong><p><strong>您家多大面积呢？</strong></p>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10219358";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10219892";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10219895";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10219912";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10220662";
    re2.prompt = "<span style=\"font-family: 'Comic Sans MS';\"><strong>请允许小杰喝口水，稍等一秒就好~·<span style=\"background-color: rgb(255, 102, 102);\">18003316057</span></strong></span>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10220667";
    re2.prompt = "<div style=\"top: 0px;\"><div><span style=\"color:#ff0000;\"></span><div><span style=\"color:#ff0000;\">您好！欢迎光临央视上榜品牌【生活家装饰-济南】<br />“5.20爱家专场”为自己的爱家添几分精彩！爱家大钜惠，签单赠送客厅顾家家具一套，还在等什么，赶快来吧。<br />现在即可点击右下角咨询！我是您的专属客户经理张新瑜。<br />如不方便打字，可留下您电话，我立即给您回电！或可以直接来电！<br />TEL:15165410826（同微信）&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QQ:1131144071<br /></span></div>﻿﻿</div></div><div style=\"top: 119px;\">﻿﻿</div>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10221066";
    re2.prompt = "亲亲，非常抱歉！当前客户咨询繁忙，您可以回复您的：<span style=\"color: rgb(229, 51, 51);\">楼盘+面积+手机</span>，小万将在第一时间安排生活家私人设计师为您<span style=\"color: rgb(0, 153, 0);\">免费预算报价</span>！";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10221808";
    re2.prompt = "<p>不好意思，现在正忙。</p><p>欢迎您的咨询，期待您的光临！</p><p>实地参观8000平米材料展厅，接待专线：18180604053</p>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10222871";
    re2.prompt = "";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10228011";
    re2.prompt = "稍等哦，目前咨询人数较多，我会尽快回复，么么哒";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10229955";
    re2.prompt = "<span style=\"font-family:SimHei;font-size:16px;\">现在是咨询高峰期，感谢您的理解，您可以留下您的【<span style=\"color:#ff0000;\">联系方式+小区及面积+装修风格</span>】稍后会在第一时间给您回电，详细的为您解答。24小时咨询电话：15010095305 &nbsp;在线QQ: 774358724</span>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10229956";
    re2.prompt = "现在是咨询高峰期，您留下您的联系方式，小区面积，装修风格，稍后给您回电，详细为您解答!&nbsp;&nbsp;&nbsp;或者在线QQ：1600455330；24小时热线：17710178625";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10229957";
    re2.prompt = "<span style=\"font-weight: bold;\">现在是咨询高峰期，感谢您的理解，您可以留下您的联系方式，小区面积，装修风格，稍后会在第一时间给您回电，详细的为您解答。24小时咨询电话：&nbsp;15801038452 &nbsp;在线QQ: 117088708</span>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10229961";
    re2.prompt = "（如果您打字不方便的话，可以留下您的联系方式，我会尽快联系您的！）";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10229963";
    re2.prompt = "<span style=\"font-family: 宋体; line-height: 14.4px; background-color: rgb(241, 248, 249);\">您是想了解装修设计、施工、主材、价格哪方面？我可以着重为您讲解！您打字不方便的话可以电话:15801132347（也可添加微信）也可留下您的【姓名+联系方式+小区名称】即可报名！</span>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10229974";
    re2.prompt = "&nbsp;很抱歉，目前坐席忙，您的问题我已收到，请您稍等片刻，我来为您解答，给您带来的不便，请您谅解！也可以留下【<span style=\"color: rgb(204, 0, 0);\">姓名+联系方式+小区+风格需求</span>】即可。直接拨打我的电话：<span style=\"font-size: 16px;\">15911076838（可加微信）</span>";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10229975";
    re2.prompt = "<div style=\"top: 0px;\">﻿﻿</div>你好，这会信息有点忙，感谢您的理解，可以留下联系方式，稍后给您回过去~可以直接拨打 <u><span style=\"font-size:13px;color:#cc0000;\"><strong>13716435009</strong></span></u>，可加微信";
    m_phrase_prompt_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10229976";
    re2.prompt = "<strong><span style=\"font-size:18px;\">现在咨询业主比较多，请您稍等一下，敬请谅解，或者可以直接电话咨询<span style=\"color:#ff0000;\">18513580803</span> 王永</span></strong>";
    m_phrase_prompt_list.push(re2);
    
  var m_busy_prompt_time_list = new Array(); // 所有客服繁忙提示语时间
          
    var re2 = new Object();
    re2.id6d = "10075777";
    re2.busy_prompt_time = "1";
    m_busy_prompt_time_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10161219";
    re2.busy_prompt_time = "";
    m_busy_prompt_time_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10184703";
    re2.busy_prompt_time = "";
    m_busy_prompt_time_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10184704";
    re2.busy_prompt_time = "1";
    m_busy_prompt_time_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10184706";
    re2.busy_prompt_time = "";
    m_busy_prompt_time_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10218497";
    re2.busy_prompt_time = "";
    m_busy_prompt_time_list.push(re2);
          
    var re2 = new Object();
    re2.id6d = "10221066";
    re2.busy_prompt_time = "";
    m_busy_prompt_time_list.push(re2);
    var imkf_no_talk_time = "600"; // IM客服无响应时间(s)

  var refreshkey = "1"; // 屏蔽F5
	var shieldrkey = "1"; // 屏蔽右键

	var tfrom = "2"; // 1:图标 2:邀请框 3:固定链接 6:新版访客端
	
	var chatrobot = 1;// 1:更新统计表 2:更新成功了 3:不用更新统计表

	var company_tpl_color = "";// 访客端颜色

	var talk_his_table = "talk_his_d1";// talk_his切表用
	var message_table = "message_d1";// message切表用
  
  var hz6d_last_kf_online = "0";// 上次接待客服是否在线
  var hz6d_last_link_all = "1";// 上次接待客服是否占线

  var company_activity = "";// 活动公告

  var m_worker_intro_all = new Array();// 所有工号个人说明
  
  var firewall = "0";// 访客防火墙
	var firewall_uuid = "765cd267694d62205c8233392e4575b6";// 访客防火墙 uuid 作为页面识别
  var firewall_image_times = "3";// 访客防火墙 uuid 作为页面识别
  
  var verify_code = "0";// 访客验证码
  var fire_level = "1";
  var fire_set = "0";
  var verify_key = "dbcd33be4a08e13bc907b512ccf40df3";
  var is_verify = "0";
  
  var resizable = "1";// 访客端最大化
  var fk_sound = "1";// 访客端音效
  var lnkopentime = "1495676097";// 访客端打开时间
	var kf_card = "1";//客服名片
	var kf_card_column = "bname,phone,email,qq";//客服名片选项
  var is_powerby = "Y";//版权信息是否显示
  var ucust_id = ""; //客户网站会员ID
  var u_stat_id = '';
  var uid = '39e01823682ac408a282b016f232d523';
  var select_ground_id = 0;
  var select_ground_name = "";
  var dz_kfheader = '';//客服头像;
  var dz_kfimg = '<img src="../style/chat/minichat2/img/kefu_arrow'+ minchat_style +'.png">';//聊天框箭头图标;
  var dz_khheader = '';//访客头像;
  var dz_khimg = "<b class='g-arrows'><img src='../style/chat/minichat2/img/arrow"+ minchat_style +".png'>";//访客聊天框箭头图标;
  if(khchat_style == 1){
    dz_kfheader = '<img class="head_kf" src="style/chat/kfdz/img/head_kf.png">';
    dz_kfimg = '<img src="style/chat/kfdz/img/arrow1.png">';
    dz_khheader = '<img class="head_gk" src="style/chat/kfdz/img/head_gk.png">';
    dz_khimg = '<img src="style/chat/kfdz/img/arrow2.png">';
  }
  var fz_hw_list = new Array();
}catch(e){}

function getWlist(type)
{
  var wlist = "";
  if(type==0 || type==1)
  {
    display_status(infos[5]);

    g_comm.QuitWait();
    g_comm.ShutDown(true);  // 断开GET连接
    if(typeof(arguments[1]) != "undefined") {//代表转接给机器人
        if(typeof(ret.tempid)!="undefined") {
            mytempid = ret.tempid;
        }
        $.ajax({
            type: "POST",
            url: "sendmsg.jsp",
            data: "cmd=SRBT&sid="+myid+"&did="+mytempid+"&companyId="+company_id+"&time="+getTime(),
            success: function(msg){
                ret.tempid = parseInt(msg);  
            }
        });
    }
    lnkover = 6;
    set_ly_items();
  }
  else if(type==2)
  {
    var hasonline = 0;
    wlist += UBBCode(UBBEncode("欢迎光临！<br>如果您对我们的产品或者服务有任何意见或者建议，都可以随时与我们线上取得联系，我们的客服人员会给您详尽细致的解答。<br>请选择以下客服人员开始对话："))+"<br><table width='90%' cellpadding='0' cellspacing='0'><tr>";
    var w_k = 0;
    var dept_man_show = "1";
    var dept_over = false;

      //指定分组
      var worker_num = "";
      var worker_ids = "";
      var khchat_wlist = "<h5>请选择咨询类型:</h5>";//华为定制分组列表
      var khchat_gnum = 0;//华为定制 分组个数
              worker_ids = "";
        var len = 0;
        if((w_k%1==0) && w_k!="0")
        {
          wlist += "</tr><tr>";
        }
                  if("0"== '1'){
            len++;
          }
          worker_ids += 'njshj2016@163.com'+",";
                  if("0"== '1'){
            len++;
          }
          worker_ids += 'sdlc53kfnj18@163.com'+",";
                  if("1"== '1'){
            len++;
          }
          worker_ids += 'sdlc53kfnj6@163.com'+",";
                  if("0"== '1'){
            len++;
          }
          worker_ids += 'njshj2015@163.com'+",";
                  if("0"== '1'){
            len++;
          }
          worker_ids += 'sdlc53kfnj1@163.com'+",";
                  if("0"== '1'){
            len++;
          }
          worker_ids += 'sdlc53kfnj12@163.com'+",";
                if(len==0)
        {
          worker_num = "<b style='color:gray'>"+infos[25]+"</b>";
        }
        else {
          //根据是否显示坐席接待数量来判断是否显示在线客服数量
          if ("1"== 2) {
            worker_num = infos[31];
          } else {
            worker_num = len+infos[147];
          }
  
        }
        wlist += "<td width='50%' align=left>&nbsp;&nbsp;&nbsp;<span class='span-link' onclick='to_kf(\""+worker_ids+"\",\""+HtmlEncode("南京客服")+"\","+len+",\""+229117+"\")'><b>"+HtmlEncode("南京客服")+" ("+worker_num+")</b></span></td>";
        w_k++;
        var group_info = fz_hw_list["229117"] ? fz_hw_list["229117"] : "";
        var description = "";
        var default_imgUrl = "";
        var selected_imgUrl = "";
        if(group_info != ""){
          description = group_info.description;
          default_imgUrl = group_info.default_imgUrl;
          selected_imgUrl = group_info.selected_imgUrl;
        }else{
          default_imgUrl = selected_imgUrl = "style/chat/kfdz/img/sq.jpg";
        }
        if(khchat_style == 1){
          khchat_wlist += "<div class='sever_item' id='sever_item_229117' onmouseover='mouseOver(this,\""+selected_imgUrl+"\")' onmouseout='mouseOut(this,\""+default_imgUrl+"\")' onclick='to_kf(\""+worker_ids+"\",\""+HtmlEncode("南京客服")+"\","+len+",\""+229117+"\")''><a href='#'><div class='sever_item_left'><img id='default_imgUrl_229117' src='"+default_imgUrl+"' alt='"+HtmlEncode("南京客服")+"'></div><div class='sever_item_right'><h3>"+HtmlEncode("南京客服")+"</h3><p class='sever_info' id='sever_info_229117'>"+description+"</p></div><div class='clear'></div></a></div>";
        }
        khchat_gnum++;
            $(".pop_bg").show();
      $(".select_wrap").show();
      $("#sever_select").html(khchat_wlist);
      set_margin(khchat_gnum);
        
    wlist += "</tr></table>";

    if(zsk=="1")
    {
      if(m_robid!="")
      {
        if(zsk_auto_login=="0")
        {
          if(zsk_auto_hidden=="0")
          {
            wlist += "<table cellpadding='0' cellspacing='0' border='0'>";
            wlist += "<tr><td colspan='2' align='left'><b>"+infos[91]+"</b></td></tr><tr><td>&nbsp;&nbsp;&nbsp;<span class='span-link' onclick='showzsk()'><b>"+zsk_name+" ("+infos[92]+")</b></span></td>";
            wlist += "</tr></table>";
          }
        }
        else
        {
          if(zsk_state=="1")
          {
            if(zsk_auto_hidden=="0")
            {
              wlist += "<table cellpadding='0' cellspacing='0' border='0'>";
              wlist += "<tr><td colspan='2' align='left'><b>"+infos[91]+"</b></td></tr><tr><td>&nbsp;&nbsp;&nbsp;<span class='span-link' onclick='showzsk()'><b>"+zsk_name+" ("+infos[92]+")</b></span></td>";
              wlist += "</tr></table>";
            }
          }
        }
      }
    }
  }
	
	return wlist;
}

function expandStaff(id)
{
  if(document.getElementById("group_"+id).style.display=="none")
  {
    document.getElementById("group_"+id).style.display = "block";
    document.getElementById("plus_"+id).innerHTML = "<img src='img/close.gif' />";
  }
  else
  {
    document.getElementById("group_"+id).style.display = "none";
    document.getElementById("plus_"+id).innerHTML = "<img src='img/open.gif' />";
  }
}

// 获取留言项
function set_ly_items()
{
  if(m_lyszc=="on")
  {
    if(isold==0)
    {
      m_cardImport = 0;
      ly_items_table(m_cardImport);
    }
    else
    {
      m_cardImport = document.getElementById("kh_has_import").value;
      if(m_cardImport!=-1)
      {
        ly_items_table(m_cardImport);
      }
      else
      {
        ly_isImportTimer = setInterval("ly_checkIsImport()", 500);
      }
    }
  }
  else
  {
    m_cardImport = 1;
    ly_items_table(m_cardImport);
  }
}

// 留言时检测is_import_true()返回
function ly_checkIsImport()
{
  m_cardImport = document.getElementById("kh_has_import").value;
  if(m_cardImport!=-1)
  {
    clearInterval(ly_isImportTimer);
    ly_items_table(m_cardImport);
  }
  else
  {
    if(ly_isImportTryNum>=CONST_REG_OVERTIME)
    {
      clearInterval(ly_isImportTimer);
      insertErrorInfos("2", "rpc", "is_import_true request failed!");
      m_cardImport = 0;
      ly_items_table(m_cardImport);
    }
    ly_isImportTryNum++;
  }
}

// 留言项字符串
function ly_items_table(isreg)
{
  try
  {
		document.getElementById("ly_items").innerHTML = UBBCode(UBBEncode(lword_prompt));
		document.getElementById("ly_items").innerHTML += "<table border='0' cellpadding='0' cellspacing='0' class='leaveword_tb'>"+lword_replymMode + lword_object + lwordstr_reg + lwordstr_ly + lwordstr_submit+"</table>";
    if(select_ground_id != 0){
      m_lwordObject = 'g#' + select_ground_id;
      $('#object_select').html('<option value="g#'+select_ground_id+'">'+select_ground_name+'</option>');
    }
    showImgCode();
    if(ly_mode_column!=""){// 默认选中第一项
      var objs = document.getElementsByName("ly_mode");
      objs[0].checked = true;
    }

        if (m_lyszc != "on") {// 留言时注册没有开启时，默认是回复方式的第一个
            var objs = document.getElementsByName("ly_mode");
            for (var i = 0; i < objs.length; i++) {
                objs[i].disabled = true;
            }
        }
        get_ly_objs();

		if(isreg==1 && m_lyszc=="on"){
			get_user_card();
		}else{
			set_ly_items_value(m_regName, m_regEmail, m_regPhone, m_regQQ, m_regMSN, m_regCompany, m_regAddr);
		}

    // 滚动条置顶
    document.getElementById("box-main-l-disp").scrollTop += -10000;
    setTimeout("set_ly_focus()", 1);
    document.getElementById("res_leaveword").style.display = "none";
    document.getElementById("part_leaveword").style.display = "block";

        if (origin_type != '1') {
            talk_type = 3;
            sendkafka('type', '1', '1');
            origin_type = 1;
        }
    }
    catch (e) {
    }
}

function get_ly_objs(){
    if(ly_assign_obj == 'zdgs'){
        m_lwordObject = 'zdgs';
        return;
    }
    $.ajax({
        type:'POST',
        url:'impl/rpc_ly_object.php',
        data:{check_id:'11917718fe939f3106d35a30074bcd30',company_id:company_id,lang:locate,style_id:'106124178',ly_assign_type:ly_assign_type,ly_assign_obj:ly_assign_obj,ly_assign_value:ly_assign_value},
        dataType:'JSON',
        success:function(data){
            setObjectSelectOption(data);
        }
    })
}

// 设置留言项的值
function set_ly_items_value(name, email, phone, qq, msn, company, addr)
{
	if(reg_c.indexOf("name")>-1)
	{
		if(name.length>0){
			$('#ly_name').parent().parent().css('display','none');
		}
		try{document.getElementById("ly_name").value = name;}catch(e){}
	}
	if(reg_c.indexOf("email")>-1)
	{
		try{document.getElementById("ly_email").value = email;}catch(e){}
	}
	if(reg_c.indexOf("phone")>-1)
	{
		try{document.getElementById("ly_phone").value = phone;}catch(e){}
	}
	if(reg_c.indexOf("qq")>-1)
	{
		try{document.getElementById("ly_qq").value = qq;}catch(e){}
	}
	if(reg_c.indexOf("msn")>-1)
	{
		try{document.getElementById("ly_msn").value = msn;}catch(e){}
	}
	if(reg_c.indexOf("company")>-1)
	{
		try{document.getElementById("ly_company").value = company;}catch(e){}
	}
	if(reg_c.indexOf("addr")>-1)
	{
		try{document.getElementById("ly_addr").value = addr;}catch(e){}
	}
}

// 设置留言焦点
function set_ly_focus()
{
  if(reg_c!="" && m_cardImport==0)
  {
    var arr = reg_c.split(",");
    try
    {
      document.getElementById("ly_"+arr[0]).focus();
    }
    catch(e)
    {
      document.getElementById("ly_content").focus();
    } 
  }
  else
  {
    try
    {
      document.getElementById("ly_content").focus();
    }catch(e){}
  }
}

// 客服状态
function kfState(max_link, cnt)
{
  var state = "";

  if(max_link!=cnt)
  {
    if(kf_status==2)
		{
		  state = infos[31];
		}
		else
		{
		  
            /*state = infos[61];*/
            
			if(cnt == 0)
			{
				state = infos[60];
			}
			else if((cnt > 0) && (cnt < Math.ceil(max_link/2)))
			{
				state = infos[61];
			}
			else if(cnt >= Math.ceil(max_link/2))
			{
				state = infos[62];
			}
			else{}
            
		}
  }
  else
  {
    state = "<font color='red'>"+infos[63]+"</font>";
    //state = infos[31];
  }

  return state;
}

function to_rec()
{
  document.getElementById("input1").focus();
  if (locate=="cn")
  {
    document.getElementById("input1").value="请在此发送留言！";
  }
  else if (locate=="ko")
  {
    document.getElementById("input1").value="여기서 메시지를 전송해 주세요.";
  }
  else if (locate=="en")
  {
    document.getElementById("input1").value="Please send message here!";
  }
  else if (locate=="tw")
  {
    document.getElementById("input1").value="請在此發送留言！";
  }
  document.getElementById("input1").select();
}

// 打开自助答疑页面
function openzsk()
{
  window.open("faq.php?company_id=70831548&style_id=106124178");
}

// 机器人问答
function sendtext(cmd, type_id, question_id, wd)
{
  try
  {
    if(cmd=="GetHotList")
    {
      m_typeId = type_id;
      display_tool(getTypeName(type_id));
    }

    var senddata = "cmd="+cmd+"&company_id="+company_id+"&robot_id="+m_robid+"&type_id="+type_id+"&question_id="+question_id+"&wd="+wd; 
    var url = "impl/zsk.php";
    xmlhttp.open("POST", url, false);
 //   xmlhttp.setRequestHeader("Content-Length", senddata.length);
    xmlhttp.setRequestHeader("CONTENT-TYPE", "application/x-www-form-urlencoded");
    xmlhttp.send(senddata);

    var dom = xmlhttp.responseXML;
    var rspNodes = XMLGetNodes(dom, "Response");
    var rspNode = XMLGetNode(rspNodes,0);
    
    //alert(xmlhttp.responseText);

    if(rspNode!=null)
    {
      var ecode = XMLGetNamedAttr(rspNode,"ecode");
      var cmd = XMLGetNamedAttr(rspNode,"cmd");
    }
    else
    {
      return;
    }

    if(ecode==0)
    {
      switch(cmd)
      {
        case "GetTypeList": // 获取问题分类
          var typeArray = new Array();

          var datas = XMLGetNodes(rspNode,"Data");
          var data = XMLGetNode(datas,0);

          var rowList = XMLGetNodes(data,"row");
          var nodeLength=XMLGetNodesLength(rowList);

          for(var i=0;i<nodeLength;i++)
          {
            var node=XMLGetNode(rowList,i);
            var type = new Object();

            type.id = XMLGetNamedAttr(node,"id");
            type.name = XMLGetNamedAttr(node,"name");
            
            typeArray.push(type);
          }
          showTypeList(typeArray);
          break;
        case "GetQuestionList": // 获取问题列表
          var quesArray = new Array();
          var oquesArray = new Array();

          var datas = XMLGetNodes(rspNode,"Data");
          var data = XMLGetNode(datas,0);

          var rowList = XMLGetNodes(data,"row");
          var nodeLength=XMLGetNodesLength(rowList);
          
          for(var i=0;i<nodeLength;i++)
          {
            var node=XMLGetNode(rowList,i);
            var ques = new Object();

            ques.id = XMLGetNamedAttr(node,"id");
            ques.question = XMLGetNamedAttr(node,"question");
            
            quesArray.push(ques);
          }

          var othertypes = XMLGetNodes(rspNode,"OtherType");
          var othertype = XMLGetNode(othertypes,0);

          var rowList = XMLGetNodes(othertype,"row");
          var nodeLength=XMLGetNodesLength(rowList);
          
          for(var i=0;i<nodeLength;i++)
          {
            var node=XMLGetNode(rowList,i);
            var ques = new Object();
              
            ques.id = XMLGetNamedAttr(node,"id");
            ques.question = XMLGetNamedAttr(node,"question");
            
            oquesArray.push(ques);
          }
          
          showQuestionList(quesArray, oquesArray);
          break;
        case "GetAnswer": // 获取问题内容
          var answer = XMLGetNamedAttr(rspNode,"answer");
          var msg = "<div class='send-msg-name'>"+zsk_name+"&nbsp;"+infos[8]+"</div><p class='recv-msg-content'>"+UBBCode(UBBEncode(answer.replace(/(\n)/g,"<br>")))+"</p>";
          display_msg2(msg);
					//更改成机器人咨询
					if(chatrobot==1) chatRobot();
          break;
        case "GetHotList": // 获取热门问题列表
          var hotArray = new Array();

          var datas = XMLGetNodes(rspNode,"Data");
          var data = XMLGetNode(datas,0);

          var rowList = XMLGetNodes(data,"row");
          var nodeLength=XMLGetNodesLength(rowList);

          
          for(var i=0;i<nodeLength;i++)
          {
            var node=XMLGetNode(rowList,i);
            var hot = new Object();
              
            hot.id = XMLGetNamedAttr(node,"id");
            hot.question = XMLGetNamedAttr(node,"question");
            
            hotArray.push(hot);
          }

          showHotList(hotArray);
          break;
        default:
          break;
      }
    }
    else if(ecode==1)
    {
      alert("参数错误！");
    }
    else if(ecode==2)
    {
      alert("无效的cmd！");
    }
  }
  catch(e){}
}

// 问题分类显示
function showTypeList(typeArray)
{
  m_typeArray = typeArray;
  var len = typeArray.length;
  
  if(len==0) return;

  hide_typeList();

  disp += "<span class=\"typeList\"><br>"+infos[73]+"<table><tr><td colspan=3><hr style='margin-left:10px; '><td></tr><tr>";
  for(var i=0; i<len; i++)
  {
    var type = typeArray[i];
    var id = type.id;
    var name = type.name;

    if(i%3==2)
    {
      if(i==len-1)
      {
        disp += "<td align='left'>&nbsp;&nbsp;&nbsp;<span class='span-link' onclick='sendtext(\"GetHotList\", \""+id+"\")'><b>"+name+"</b></span></td></tr>";
      }
      else
      {
        disp += "<td align='left'>&nbsp;&nbsp;&nbsp;<span class='span-link' onclick='sendtext(\"GetHotList\", \""+id+"\")'><b>"+name+"</b></span></td></tr><tr>";
      }
    }
    else
    {
      disp += "<td align='left'>&nbsp;&nbsp;&nbsp;<span class='span-link' onclick='sendtext(\"GetHotList\", \""+id+"\")'><b>"+name+"</b></span></td>";
    }
  }
  if(len%3==0)
  {
    disp += "<tr><td align='left'>&nbsp;&nbsp;&nbsp;<span class='span-link' onclick='sendtext(\"GetHotList\", \"0\")'><b>"+infos[76]+"</b></span></td></tr><tr><td colspan=3><hr style='margin-left:10px; '><td></tr></table></span>";
  }
  else
  {
    disp += "<td align='left'>&nbsp;&nbsp;&nbsp;<span class='span-link' onclick='sendtext(\"GetHotList\", \"0\")'><b>"+infos[76]+"</b></span></td></tr><tr><td colspan=3><hr style='margin-left:10px; '><td></tr></table></span>";
  }

  document.getElementById("box-main-l-disp").innerHTML = disp;
  scrollToBottom();
}

function hide_typeList()
{
  try
  {
		var re = new RegExp("class=\"typeList\"", "gim");
		disp = disp.replace(re,'class=\"\" style=\"display:none\"');

		document.getElementById("box-main-l-disp").innerHTML = disp;
		scrollToBottom();
	}catch(e){}
}

// 该类热门问题显示
function showHotList(hotArray)
{
  var len = hotArray.length;

  if(len==0) return;

  disp += "<br>&nbsp;&nbsp;&nbsp;&nbsp;"+getTypeName(m_typeId)+"&nbsp;&nbsp;"+infos[74]+"<table>";
  for(var i=0; i<len; i++)
  {
    var hot = hotArray[i];
    var id = hot.id;
    var question = hot.question;

    disp += "<tr><td align='left'>&nbsp;&nbsp;&nbsp;"+(i+1)+". "+"<span class='span-link' onclick='getAnswer(\""+id+"\",\""+question.replace(/\\/g, "\\\\").replace(/&quot;/g, "\\&quot;")+"\")'><b>"+question+"</b></span></td></tr>";
  }
  disp += "</table>";

  document.getElementById("box-main-l-disp").innerHTML = disp;
  scrollToBottom();
}

// 问题列表显示
function showQuestionList(quesArray, oquesArray)
{
  m_oquesArray = oquesArray;

  var ques_len = quesArray.length;
  var oques_len = oquesArray.length;
  var msg = "";

  msg = "<font color=\"#666666\"><br />"+zsk_name+" "+infos[8]+"</font><br />";
  if(ques_len!=0)
  {
    msg += "<table><tr><td>"+infos[77]+"</td></tr>";
    for(var i=0; i<ques_len; i++)
    {
      var ques = quesArray[i];
      var id = ques.id;
      var question = ques.question;

      msg += "<tr><td align='left'>&nbsp;&nbsp;&nbsp;"+(i+1)+". "+"<span class='span-link' onclick='getAnswer(\""+id+"\", \""+question.replace(/\\/g, "\\\\").replace(/&quot;/g, "\\&quot;")+"\")'><b>"+question+"</b></span></td></tr>";
    }
    msg += "</table>";
    if(oques_len!=0)
    {
      msg += "<table>"+infos[78]+"<font color='red'> "+oques_len+" </font>"+infos[79]+"</table>";
    }
  }
  else if(oques_len!=0)
  {
    msg += infos[84]+"<br />";
    msg += "<table>"+infos[78]+"<font color='red'> "+oques_len+" </font>"+infos[79]+"</table>";
  }
  else if(ques_len==0 && oques_len==0)
  {
    msg = "<font color=\"#666666\"><br />"+zsk_name+" "+infos[8]+"</font><br />"+infos[84]+"<br />";
  }

  if(msg!="")
  {
    disp = disp+msg;
    document.getElementById("box-main-l-disp").innerHTML = disp;
    scrollToBottom();
  }
}

// 查看其他类别的类似问题
function lookOver()
{
  var oques_len = m_oquesArray.length;
  var msg = "<table>";
  for(var i=0; i<oques_len; i++)
  {
    var oques = m_oquesArray[i];
    var id = oques.id;
    var question = oques.question;

    msg += "<tr><td align='left'>&nbsp;&nbsp;&nbsp;"+(i+1)+". "+"<span class='span-link' onclick='getAnswer(\""+id+"\", \""+question.replace(/\\/g, "\\\\").replace(/&quot;/g, "\\&quot;")+"\")'><b>"+question+"</b></span></td></tr>";
  }
  msg += "</table>";

  disp = disp+msg;
  document.getElementById("box-main-l-disp").innerHTML = disp;
  scrollToBottom();
}

// 获取类型名
function getTypeName(styeId)
{
  var len = m_typeArray.length;

  for(var i=0; i<len; i++)
  {
    if(m_typeArray[i].id==styeId)
    {
      return m_typeArray[i].name;
    }
  }

  return infos[83];
}

// 获取问题答案
function getAnswer(id, question)
{
  var msg = "<div class='send-msg-name'>"+infos[13]+"&nbsp;"+infos[8]+":</div><p class='send-msg-content'>"+question.replace(/</g, "&lt;")+"</p>";
  display_msg2(msg);
  sendtext("GetAnswer", "", id);
}

// 发送访客消息，点发送按钮
function sendmsg() 
{   
  try
  {
    textCounter(document.getElementById("input1"), 1000);
  }catch(e){}
  msg = document.getElementById("input1").value;
  //检测输入字符 替换ASCII码小于32的
  for(var i=1;i<32;i++) { 
    special_char = String.fromCharCode(i);
    
    if(msg.indexOf(special_char) != -1 && (i != 13 && i != 10) ) {              
        reg_special = new RegExp(special_char, "ig");
        msg = msg.replace(reg_special,"");               
    }                 
  }
  msg = msg.trim();
	try{
    msg = msgFilter(msg);
  }catch(e){}
  //过滤超链接new lyc20140528
  var href_link = msg.match(/\[.[url|URL].=[A-Za-z0-9].*?\].*?\[\/.[url|URL].\]/g);
  if(href_link){
	var href_url = msg.toLowerCase().match(/\[.[url|URL].=.*?\]/g);
	if(href_url){
		var href_len = href_url.length;
		for(var i = 0; i < href_len; i++){
			var href_java = href_url[i].match(/javascript:/g);
			if(href_java) return false;
		}
	}
  }
  var show_msg = msg;

  if(m_success==false && lnkover!=200)
  {
    if(lnkover==2)
    {
      document.getElementById("send_tips").innerHTML = "<p>"+infos[88]+"</p>";
    }
    else
    {
      document.getElementById("send_tips").innerHTML = "<p>"+infos[89]+"</p>";
    }
    document.getElementById("send_tips").style.display = "block";
    setTimeout("hide_sendTips()", 1000);
    return;
  }
  else if(msg=="")
  {
    document.getElementById("send_tips").innerHTML = "<p>"+infos[90]+"</p>";
    document.getElementById("send_tips").style.display = "block";
    setTimeout("hide_sendTips()", 1000);
    return;
  }

  document.getElementById("input1").value = "";

  msg = UBBEncode(msg);
  msg = HtmlEncode(msg);
  msg = msg.trim();
  
  if(typeof(rec_stat)!="undefined" && rec_stat==1)
  {
    if(lnkover==200)
    {
        
      display_msg2("<div class='send-msg-name'>"+infos[13]+"&nbsp;"+infos[8]+":</div><p class='send-msg-content'>"+show_msg+"</p>");
      <!-- sendtext("GetQuestionList", m_typeId, "", UrlEncode(show_msg)); -->
		//更改成机器人咨询
        robot_main(msg);
      return;
    }
    else
    {
      display_msg2("<div class='send-msg-name'>"+infos[29]+":</div><p class='send-msg-content'>"+UBBCode(UBBEncode(lword_prompt))+"</p>");
    }
  }
  else
  {
    qstmsg(UrlEncode(msg));
  }

  show_msg = UBBEncode(show_msg);
  show_msg = HtmlEncode(show_msg);
  show_msg = UBBCode(show_msg);
  show_msg = show_msg.replace(/<br>/g, "<br>");
  
  if(minchat_style == 1 && khchat_style == 0){
    display_msg2("<div class='me'><p>"+infos[13]+"&nbsp;&nbsp;"+getTime2()+"</p><b class='g-arrows'><img src='../style/setting/ver06/img/suspend/blue-arrow.png'></img></b><div class='chat_word'>"+show_msg+"</div></div>");
  }else{
    display_msg2("<div class='me'>"+dz_khheader+"<p>"+infos[13]+"&nbsp;&nbsp;"+getTime2()+"</p><b class='g-arrows'>"+dz_khimg+"</b><div class='chat_word'>"+show_msg+"</div></div>");  
  }
  
  try{
    clearInterval(carousel_id);      
  }catch(e){}
}

function hide_sendTips()
{
  document.getElementById("send_tips").style.display = "none";
}

// 发送截图
function getSnapshotParam(pic_path, pic_name, state)
{
  var picc_path = pic_path;
  var picc_name = pic_name;
  var url = "http://www6.53kf.com/upload/snapshot/" + picc_path + "/" + picc_name;

  if(state=="200") {
    var msg = "<img src='"+url+"' class='snapimg' border='0' />";
    var ubb_img = "[IMG]"+url+"[/IMG]";
    display_msg("<font color=\"#666666\">"+infos[13]+": "+getTime2()+"</font><br>&nbsp;&nbsp;"+msg);
    qstmsg(ubb_img);
  } else if (state == '') {
    
  } else {
    var msg = "信息提示: 发送截图失败！"
    display_msg("<font color=\"red\">"+msg+"</font>");
  }
}

function keydown(evt)
{
  if(evt.altKey)
  {
    if(evt.keyCode==83) sendmsg();
  }
}

function keypress(evt)
{
  evt = evt ? evt : (window.event ? window.event : null); 
  
  var keynum ;
  if(window.event)
  {
        keynum = evt.keyCode;
  }
  else
  {
        keynum = evt.which;
  }

  if(postkey==1)
  {
    if(!evt.shiftKey && evt.keyCode==13)
    {
      sendmsg();
      return false;
    }
    else if(evt.ctrlKey && evt.keyCode==10)
    {
      //event.keyCode = 13;
      sendmsg();
    }
    return true;
  }
  if(postkey==2)
  {
    if(evt.ctrlKey && (evt.keyCode==10 || evt.keyCode ==13))
    {
      sendmsg();
      return false;
    }
    return true;
  }
}

function getPostkey()
{
  postkey = 1;
  if(getCookie2("53kf_postkey") != "")
  {
    postkey = getCookie2("53kf_postkey");
    if(postkey=="")
    {
      postkey = 1;
    }
  }
  if(postkey==1)
  {
    document.getElementById("line1-left").className = "pressdiv-line-left pkselect";
    document.getElementById("line2-left").className = "pressdiv-line-left";
  }
  else if(postkey==2)
  {
    document.getElementById("line1-left").className = "pressdiv-line-left";
    document.getElementById("line2-left").className = "pressdiv-line-left pkselect";
  }
}

function setpostkey(args)
{
  if(args==1)
  {
    document.getElementById("line1-left").className = "pressdiv-line-left pkselect";
    document.getElementById("line2-left").className = "pressdiv-line-left";
  }
  else if(args==2)
  {
    document.getElementById("line1-left").className = "pressdiv-line-left";
    document.getElementById("line2-left").className = "pressdiv-line-left pkselect";
  }
  showpkset();
  postkey = args;
  arr1 = setCookie2("53kf_postkey", postkey);
}

function display_status(stat)
{
  var stat = stat;
  document.getElementById("l-ts-wd").innerHTML=stat;
}

function display_msg(msg)
{
  disp += msg+"<br>";
  document.getElementById("box-main-l-disp").innerHTML = disp+"<br/>";
  scrollToBottom();
}

function display_msg2(msg)
{
  disp += msg;
  document.getElementById("box-main-l-disp").innerHTML = disp+"<br/>";
  scrollToBottom();
}

//访客端多窗口情况下，后续窗口对第一个窗口中信息的展示
function display_msg3(msg)
{
  disp = msg+disp;
  document.getElementById("box-main-l-disp").innerHTML = disp+"<br/>";
  scrollToBottom();
}

function display_msg_center(msg)
{
  document.getElementById("box-main-l-disp").innerHTML = "<table width='100%' height='100%' border='0' cellpadding='0' cellspacing='0'><tr><td align='center'><img src='../img/setting/wait.gif'><br><br><span style='font-size:12px;color:#888;'>"+msg+"</span></td></tr></table>";
}

function scrollToBottom(){// 滚动条置底
  try{
    setTimeout(function(){
      document.getElementById("box-main-l-disp").scrollTop += 100000;
    }, 10);
  }catch(e){}
}

function display_tool(msg)
{
  var msg_tool = infos[81]+" <span style='color:#0000CE; text-decoration:none; cursor:pointer;' onclick='sendtext(\"GetHotList\", \""+m_typeId+"\")'>"+msg+"</span> "+infos[82];
	if(company_tpl=="new2010"){
		document.getElementById("part_buttons_tool").innerHTML = '<div style="float:left; margin-top:5px; margin-left:3px;">&gt;&gt; 您正在咨询机器人';;
	}else{
		document.getElementById("part_buttons").innerHTML = '<div style="float:left; margin-top:5px; margin-left:3px;">&gt;&gt; 您正在咨询机器人';;
	}
}

function getPos(a,sProp) 
{
  var iPos = 0;
  while (a!=null) 
  {
    iPos+=a["offset" + sProp];
    a = a.offsetParent;
  }
  return iPos;
}

function showpkset()
{
  if(document.getElementById("pressdiv").style.display=="none")
  {
    document.getElementById("press_top").style.zIndex = 1;
    document.getElementById("pressdiv").style.display = "block";
  }
  else
  {
    document.getElementById("press_top").style.zIndex = 0;
    document.getElementById("pressdiv").style.display = "none";
  }
}

function changeclass(type,lineid)
{
  if (type=="over")
  {
    document.getElementById(lineid).className="pressdiv-line over";
  }
  else
  {
    document.getElementById(lineid).className="pressdiv-line";
  }
}

function closewindow()
{
  setTimeout('parent.window.opener=null;parent.window.close()', 1 );
}

// 插入链接
function toinsertlink()
{
 if(arguments[0] == 'khdz1'){
 $('<div id="link_insert_div" style="right: 0;bottom: 0;top: 0;left: 0;height: 190px;width: 360px;border: 1px solid #ddd;position: absolute;font-size: 14px;background: white;z-index: 9999;margin: auto;"><div style="float:right;margin-top: 5px;margin-right: 5px;width:12px;height:12px;cursor:pointer;background: url(style/chat/kfdz/img/Btn_close.png) no-repeat;" onclick="destryInsertDiv(&quot;link&quot;);$(\'.pop_bg\').hide()"></div><div style="margin: 5px 15px;"><table cellpadding="0" cellspacing="0" border="0" width="100%" align="left" style="border-collapse:separate;float:none;border-spacing:0px 8px;"><tbody><tr align="left"><td style="color: #666;">链接地址</td></tr><tr align="center" style="height:28px;"><td><input id="insert_link_url" type="text" value="http://" style="height: 98%;width: 100%;" onkeypress="if(event.keyCode==13){getLinkContent();try{window.focus();}catch(e){}return false;}"></td></tr><tr align="left"><td style="font-size: 14px;color: #666;"><span style="color:red">*</span>如果链接文字为空，则直接显示链接</td></tr><tr align="left" style="height:28px;"><td><input id="insert_link_text" type="text" style="height: 100%;width: 98%;" onkeypress="if(event.keyCode==13){getLinkContent();try{window.focus();}catch(e){}return false;}"></td></tr><tr style="height:30px;color:red;" align="center"><td><input class="btn-can" type="button" value="取消" onclick="destryInsertDiv(&quot;link&quot;);$(\'.pop_bg\').hide()" style="font-size: 14px;color: #323232;width: 60px;height: 28px;background: white;border-radius: 3px;border: 1px solid #ddd;margin-right: 10px;"><span><input class="btn-hover" type="button" value="确定" onclick="getLinkContent();" style="width: 60px;height: 28px;background: #e41e2b;color: white;border: 1px solid #e41e2b;font-size: 14px;border-radius: 3px;"></span></td></tr></tbody></table></div></div>').appendTo('body');
   $('.pop_bg').show();
   return;
  }
  var type = typeof(arguments[0]) == 'undefined'?"link":arguments[0];
  var height = document.documentElement.clientHeight;
  var width = document.documentElement.clientWidth;

  createFreeze("insert_freeze", 0, 0, height, width);
  var words = new Array();
  words.push(infos[107]);
  words.push(infos[116]);
  words.push(infos[115]);
  words.push(infos[15]);
  words.push(infos[14]);
  createInsertDiv(type, height, width, words);
}

// 获取链接内容
function getLinkContent()
{
  var linkurl = document.getElementById("insert_link_url").value.trim();
  if(linkurl=="")
  {
    alert(infos[99]);
    document.getElementById("insert_link_url").focus();
  }
  else
  {
    var linktext = document.getElementById("insert_link_text").value.trim();
    if(linktext=="") linktext = linkurl;
    if(linkurl.substring(0,4).toLowerCase()!="http")
    {
      linkurl = "http://"+linkurl;
    }
    var html = "[URL="+linkurl+"]"+linktext+"[/URL]";
    document.getElementById("input1").value += html;
    if(typeof(arguments[0]) != "undefined") {
        destryInsertDiv(arguments[0]);    
    }else{
        destryInsertDiv("link");    
    }
    
    document.getElementById("input1").focus();
  }
  if(khchat_style == 1) $('.pop_bg').hide();
}
//插入文件对象操作
var to_send_file_obj={
  ajaxuploadfile:function(){
    $.ajaxFileUpload({
            url:'upload_file.php?company_id='+company_id+'&type=uploadfile',//处理图片脚本
            secureuri :false,
            fileElementId :'file_pic',//file控件id
            dataType : 'json',
            success : function (data, status){
              if(data.upload=='success'){
                $("#src-input").val(data.url);
                 upload_file_name=data.real_name;
                 $("#real_filename_hidden").val(data.real_name);
              }else if(data.upload=='fail'){
                alert('上传文件失败');
              }

              if(data.filetype=='error'){
                alert('仅支持fla/pdf/txt/doc/xls/docx/xlsx/tmp/html/wps/ppt/bmp/gif/jpeg/png/swf/jpg/avi/mpeg/asf/wmv/rm/rmvb/mp3/ape/wma/wav/zip/rar');
              }
              if(data.maxsize=='true'){
                alert('文件必须小于4M');
              }
              
            },
            error: function(data, status, e){
                alert(e);
            }
      });
  },
  sendfiles : function(){
    if(upload_file_name==""){
      alert('您未上传文件');
      return false;
    }
      try
      {
        if(m_success==false && lnkover!=200)
        {
          if(lnkover==2)
          {
            document.getElementById("send_tips").innerHTML = "<p>"+infos[88]+"</p>";
          }
          else
          {
            document.getElementById("send_tips").innerHTML = "<p>"+infos[89]+"</p>";
          }
          document.getElementById("send_tips").style.display = "block";
          setTimeout("hide_sendTips()", 1000);
          return;
        }
        var file_url = "http://"+host+"/down_file.php?type=srv&company_id="+company_id+"&file="+upload_file_name;
        
        display_msg("<span>• "+infos[42]+" \"<a href=\""+file_url.substring(0,file_url.lastIndexOf("*"))+"\" target=\"_blank\" style='text-decoration:underline;color:#8A2BE2;'>"+upload_file_name.substring(upload_file_name.lastIndexOf("*")+1)+"</a>\"</span>");
        
        file_url = UrlEncode(file_url);
        
        send_FIL(file_url); // 发送文件给客服

        display_msg("<span>• "+infos[70]+"</span>");
        upload_file_name = "";
        if(khchat_style == 1) $('.pop_bg').hide();
        clearInterval(carousel_id);
      }catch(e){}
      return true;
    
  }

};


//插入图片对象操作
var to_insert_img_obj = {
  sendimg : function(urlstr){
    if(urlstr==""||urlstr=="请输入网络地址或点击浏览上传"){
      alert('图片路径不能为空');
      return false;
    }
    var urlcode='[IMG]'+urlstr+'[/IMG]';
    to_insert_img_obj.sendimgmsg(urlcode);
    return true;
  },
  ajaxuploadimg:function(){
    $.ajaxFileUpload({
            url:'upload_img.php?type=visiter&company_id='+company_id,//处理图片脚本
            secureuri :false,
            fileElementId :'img_pic',//file控件id
            dataType : 'json',
            success : function (data, status){

              if(data.upload=='success'){
                $("#src-input").val(data.url);
              }else if(data.upload=='fail'){
                 alert('上传文件失败');
              }
         
              if(data.filetype=='error'){
               alert('仅支持jpg、jpeg、gif、png格式');
              }
              if(data.maxsize=='true'){
                alert('仅支持文件小于2M');
              }
              
            },
            error: function(data, status, e){
                alert(e);
            }
      });
  },
  sendimgmsg:function(msg){
    msg = msg.trim();
    try{
      msg = msgFilter(msg);
    }catch(e){}
    var show_msg = msg;

    if(m_success==false && lnkover!=200)
    {
      if(lnkover==2)
      {
        document.getElementById("send_tips").innerHTML = "<p>"+infos[88]+"</p>";
      }
      else
      {
        document.getElementById("send_tips").innerHTML = "<p>"+infos[89]+"</p>";
      }
      document.getElementById("send_tips").style.display = "block";
      setTimeout("hide_sendTips()", 1000);
      return;
    }
    else if(msg=="")
    {
      document.getElementById("send_tips").innerHTML = "<p>"+infos[90]+"</p>";
      document.getElementById("send_tips").style.display = "block";
      setTimeout("hide_sendTips()", 1000);
      return;
    }

    document.getElementById("input1").value = "";

    msg = UBBEncode(msg);
    msg = HtmlEncode(msg);
    msg = msg.trim();
    

    if(typeof(rec_stat)!="undefined" && rec_stat==1)
    {
      if(lnkover==200)
      {
        display_msg2("<div class='send-msg-name'>"+infos[13]+"&nbsp;"+infos[8]+":</div><p class='send-msg-content'>"+show_msg+"</p>");
        sendtext("GetQuestionList", m_typeId, "", UrlEncode(show_msg));
        //更改成机器人咨询
        if(chatrobot==1) chatRobot();
        return;
      }
      else
      {
        display_msg2("<div class='send-msg-name'>"+infos[29]+":</div><p class='send-msg-content'>"+UBBCode(UBBEncode(lword_prompt))+"</p>");
      }
    }
    else
    {
      qstmsg(UrlEncode(msg));
    }

    show_msg = UBBEncode(show_msg);
    show_msg = HtmlEncode(show_msg);
    show_msg = UBBCode(show_msg);
    show_msg = show_msg.replace(/<br>/g, "<br>");

    if(khchat_style == 1){
      display_msg2("<div class='me'>"+dz_khheader+"<p>"+infos[13]+"&nbsp;&nbsp;"+getTime2()+"</p><b class='g-arrows'>"+dz_khimg+"</b><div class='chat_word'>"+show_msg+"</div></div>")
    }else{
      display_msg2("<div class='send-msg-name'>"+infos[13]+"&nbsp;"+getTime2()+"</div><p class='send-msg-content'>"+show_msg+"</p>");
    }
   
   if(khchat_style == 1) $(".pop_bg").hide();
   try{
    clearInterval(carousel_id);
   }catch(e){}
  }
};
// 插入图片

function toinsertimg()
{  
  if(typeof($('#dialogUpImg').val()) != "undefined") {
    $('#dialogUpImg').remove();
    return;  
  }
  if(arguments[0] == 'dz8') {//定制版
  $('<div id="dialogUpImg" class="dialogs" style="top: 57px; left: 15px; height: 180px; width: 290px; border: 1px solid rgb(51, 153, 204); position: absolute; font-size: 14px; z-index: 9999; background: url(/img/pf_bg.gif) repeat-x;"><div style="float:right;margin-top:8px;margin-right:8px;width:12px;height:12px;cursor:pointer;background:url(../style/chat/minichat2/img/minchat_ns_dz8.png) -18px 0 no-repeat;" onclick="$(\'#dialogUpImg\').remove();"></div><div style=""><p style="margin: 0;background: #139ea1;color: #fff;font-size: 14px;line-height: 30px;text-align: left;padding-left: 10px;">图片上传</p><table cellpadding="0" cellspacing="8" border="0" width="100%" align="center" style="padding-top: 5px;"><tbody><tr><td style="text-align: left; padding-right:5px;position: relative;"><input id="src-input" type="text" class="comm-tbox" placeholder="请上传图片或输入地址" style="width: 200px; line-height: 24px; height: 24px;float: left;border: 1px solid #ddd;padding: 1px 5px;" onkeypress="if(event.keyCode==13){getLinkContent();try{window.focus();}catch(e){}return false;}"><input id="img_pic" name="userimg" type="file" value="浏览" onchange="to_insert_img_obj.ajaxuploadimg();" style="width: 66px;  height: 28px;-moz-opacity: 0.0;  filter: alpha(opacity=0);  opacity: 0;position: absolute;z-index: 5;"><span style="position: absolute;display: block;width: 51px;height: 26px;line-height: 26px;right: 5px;border: 1px solid #ddd;background: #fff;padding-left: 5px;z-index: 4;">浏览..</span></td></tr><tr><td style="text-align: left; font-size:12px;padding-bottom: 5px; color:red;">*仅支持JPG、JPEG、GIF、PNG格式，文件大小2M以内</td></tr><tr><td style=" text-align:right;padding-top: 36px;"><span style="padding-right:5px;"><input type="button" value="确定" onclick="if(to_insert_img_obj.sendimg($(\'#src-input\').val()))$(\'#dialogUpImg\').remove();" style="width: 78px;height: 31px;background:url(../style/chat/minichat2/img/dialog_send.png) no-repeat; border:none; text-indent:100em;"></span></td></tr></tbody></table></div></div>').appendTo(body);
    return;
  }
  if(arguments[0] == 'dz9') {//定制版
  $('<div id="dialogUpImg" class="dialogs" style="top: 57px; left: 45px; height: 180px; width: 290px; border: 1px solid #000; border-radius:5px; overflow:hidden; position: absolute; font-size: 14px; z-index: 9999; background: #f9f3f1;"><div style="float:right;margin-top:8px;margin-right:8px;width:12px;height:12px;cursor:pointer;background:url(../style/chat/minichat2/img/minchat_ns_dz8.png) -18px 0 no-repeat;" onclick="$(\'#dialogUpImg\').remove();"></div><div style=""><p style="margin: 0;background: #000;color: #fff;font-size: 14px;line-height: 30px;text-align: left;padding-left: 10px;">图片上传</p><table cellpadding="0" cellspacing="8" border="0" width="100%" align="center" style="padding-top: 5px;"><tbody><tr><td style="text-align: left; padding-right:5px;position: relative;"><input id="src-input" type="text" class="comm-tbox" placeholder="请上传图片或输入图片地址" style="width: 200px; line-height: 24px; height: 24px;float: left;border: 1px solid #ddd;padding: 1px 5px;" onkeypress="if(event.keyCode==13){getLinkContent();try{window.focus();}catch(e){}return false;}"><input id="img_pic" name="userimg" type="file" value="浏览" onchange="to_insert_img_obj.ajaxuploadimg();" style="width: 66px;  height: 28px;-moz-opacity: 0.0;  filter: alpha(opacity=0);  opacity: 0;position: absolute;z-index: 5;"><span style="position: absolute;display: block;width: 51px;height: 26px;line-height: 26px;right: 5px;border: 1px solid #ddd;background: #fff;padding-left: 5px;z-index: 4;">浏览..</span></td></tr><tr><td style="text-align: left; font-size:12px;padding-bottom: 5px; color:red;">*仅支持JPG、JPEG、GIF、PNG，大小2M以内</td></tr><tr><td style=" text-align:center;padding-top: 36px;"><span style="padding-right:5px;"><input type="button" value="确定" onclick="if(to_insert_img_obj.sendimg($(\'#src-input\').val()))$(\'#dialogUpImg\').remove();" style="width: 78px;height: 31px;background:url(../style/chat/minichat2/img/dialog_send9.png) no-repeat; border:none; color:#000; font-size:14px;"></span></td></tr></tbody></table></div></div>').appendTo(body);
    return;
  }
  if(arguments[0] == 'dz10') {//定制版
  $('<div id="dialogUpImg" class="dialogs" style="top: 57px; left: 55px; height: 180px; width: 290px; border: 1px solid #909fa8; border-radius:10px; overflow:hidden; position: absolute; font-size: 14px; z-index: 9999; background: #fff;"><div style="float:right;margin-top:6px;margin-right:6px;width:15px;height:15px;cursor:pointer;background:url(../style/chat/minichat2/img/close_llt.png) right center no-repeat;" onclick="$(\'#dialogUpImg\').remove();"></div><div style=""><p style="margin: 0;background:url(../style/chat/minichat2/img/dialog_top_bg.png) repeat-x;color: #525c63;font-size: 14px;line-height: 30px;text-align: left;padding-left: 10px;">图片上传</p><table cellpadding="0" cellspacing="8" border="0" width="100%" align="center" style="padding-top: 5px;"><tbody><tr><td style="text-align: left; padding-right:5px;position: relative;"><input id="src-input" type="text" class="comm-tbox" placeholder="请上传图片或输入图片地址" style="width: 200px; line-height: 24px; height: 24px;float: left;border: 1px solid #ddd;padding: 1px 5px;" onkeypress="if(event.keyCode==13){getLinkContent();try{window.focus();}catch(e){}return false;}"><input id="img_pic" name="userimg" type="file" value="浏览" onchange="to_insert_img_obj.ajaxuploadimg();" style="width: 66px;  height: 28px;-moz-opacity: 0.0;  filter: alpha(opacity=0);  opacity: 0;position: absolute;z-index: 5;"><span style="position: absolute;display: block;width: 51px;height: 26px;line-height: 26px;right: 5px;border: 1px solid #ddd;background: #fff;padding-left: 5px;z-index: 4;">浏览..</span></td></tr><tr><td style="text-align: left; font-size:12px;padding-bottom: 5px; color:red;">*仅支持JPG、JPEG、GIF、PNG，大小2M以内</td></tr><tr><td style=" text-align:center;padding-top: 36px;"><span><input type="button" value="确定" onclick="if(to_insert_img_obj.sendimg($(\'#src-input\').val()))$(\'#dialogUpImg\').remove();" style="width: 78px;height: 27px;background:url(../style/chat/minichat2/img/btn_send1.png) no-repeat; border:none; color:#fff; font-size:14px;"></span></td></tr></tbody></table></div></div>').appendTo(body);
    return;
  }
  if(arguments[0] == 'dz16') {//定制版
  $('<div id="dialogUpImg" class="dialogs" style="top: 57px; left: 22px; height: 180px; width: 290px;  overflow:hidden; position: absolute; font-size: 14px; z-index: 9999; background: #fff;"><div style="float:right;margin-top:8px;margin-right:8px;width:12px;height:12px;cursor:pointer;background:url(../style/chat/minichat2/img/close-x.png) 50% 50% no-repeat;" onclick="$(\'#dialogUpImg\').remove();"></div><div style=""><p style="margin: 0;background: #f7f8fa;color: #434C5E;font-size: 14px;line-height: 30px;text-align: left;padding-left: 10px;">图片上传</p><table cellpadding="0" cellspacing="8" border="0" width="100%" align="center" style="padding-top: 5px;"><tbody><tr><td style="text-align: left; padding-right:5px;position: relative;"><input id="src-input" type="text" class="comm-tbox" placeholder="请上传图片或输入图片地址" style="width: 200px; line-height: 24px; height: 24px;float: left;border: 1px solid #ddd;padding: 1px 5px;" onkeypress="if(event.keyCode==13){getLinkContent();try{window.focus();}catch(e){}return false;}"><input id="img_pic" name="userimg" type="file" value="浏览" onchange="to_insert_img_obj.ajaxuploadimg();" style="width: 66px;  height: 28px;-moz-opacity: 0.0;  filter: alpha(opacity=0);  opacity: 0;position: absolute;z-index: 5;"><span style="position: absolute;display: block;width: 51px;height: 26px;line-height: 26px;right: 5px;border: 1px solid #ddd;background: #fff;padding-left: 5px;font-size:12px;z-index: 4;background:#F4F5F9";>浏览..</span></td></tr><tr><td style="text-align: left; font-size:12px;padding-bottom: 5px; color:red;">*仅支持JPG、JPEG、GIF、PNG，大小2M以内</td></tr><tr><td style=" text-align:center;padding-top: 36px;"><span style="padding-right:5px;"><input type="button" value="确定" onclick="if(to_insert_img_obj.sendimg($(\'#src-input\').val()))$(\'#dialogUpImg\').remove();" style="width: 258px;height: 28px;background:#56C10A; border:none; color:#fff; font-size:14px;"></span></td></tr></tbody></table></div></div>').appendTo(body);
    return;
  }
  if(arguments[0] == 'khdz1'){
  $('<div id="dialogUpImg" class="dialogs" style="display:block;position: fixed;top: 20px;left: 20px;bottom: 0;right: 0;margin: auto;background:#fafafa;z-index:200000000;width: 360px;height: 180px;"><style> .img_load_lh .head {  height: 35px; line-height: 35px; background: #717171; box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.2);}.img_load_lh .head strong.title {  padding-left: 10px; color: white;} .img_load_lh .head .close {background:url("style/chat/kfdz/img/Btn_close2.png") no-repeat;  display: block; width: 10px; height: 10px; font-size: 17px; line-height: 20px; text-align: center; position: absolute; top: 9px; right: 9px;}  .img_load_lh .uploadImg{  display: block;border: 1px solid #999;width: 55px;height: 25px;position: absolute; right: 25px;top: 55px;line-height: 25px;text-align: center;background-color: #eee;}.img_load_lh .head .close:hover {  text-decoration: none; color: #c00;}.img_load_lh .btns {  position: relative; margin-top:20px; left: 0; width: 100%;} .img_load_lh .btn-complete, .img_load_lh .btn-cancel { margin-bottom: 10px; display:inline-block; font-size: 11px; font-weight:bold; border-radius:2px;} .img_load_lh .btns .btn-complete {  margin-right: 10px; color:#fff;} .img_load_lh .btns .btn-cancel {  margin-left: 10px; color:#555; background:#eee; border:1px solid #b3b3b3;}.img_load_lh .btn-cancel:hover{ text-decoration: none;}.img_load_lh .btn-complete:hover { text-decoration: none; background:#f90000 !important;} .img_load_lh .comm-tbox { margin-top:0;text-indent:10px;color:#666; width: 265px; height: 28px; line-height: 28px; border: 1px solid #ddd;} .img_load_lh p {  margin: 15px 10px 0; *margin-left: 5px;} .img_load_lh p.uComment {  color: #999; font-size:12px;} .img_load_lh .choice{  width:300px;position:relative;border-left:1px solid #aaa;border-top:1px solid #aaa;border-right:1px solid #bbb;border-bottom:1px solid #bbb;background-color:#FFF;margin:10px;}.img_load_lh{display: block; width: 100%;height:100%; background: #fff; border: 1px solid #aaa; position:absolute;z-index: 200000000;box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1);border-radius: 3px;}.img_load_lh .choice span{display:block;}#inputUploadImg {  height: 30px; *height: 28px; position: absolute; right: 23px; *right: 5px; top: 53px; *top: 55px; width: 61px; *width: 58px; opacity: 0; filter:alpha(opacity=0); cursor: pointer;}</style><div class="img_load_lh" style=""><div class="head"><strong class="title">图片设置</strong><a class="close" href="#" onclick="$(\'#dialogUpImg\').remove();$(\'.pop_bg\').hide();" hidefocus=""></a></div>    <table border="0" cellpadding="0" cellspacing="0" style="margin-top: 25px;margin-left: 15px;"><tbody><tr style=""><td><input id="src-input" class="comm-tbox" type="text" target="blank" value="请输入网络地址或点击浏览上传" onfocus="if(this.value==\'请输入网络地址或点击浏览上传\')this.value=\'\';" onblur="if(this.value==\'\')this.value=\'请输入网络地址或点击浏览上传\'">        </td><td><input type="file" id="img_pic" name="userimg" onchange="to_insert_img_obj.ajaxuploadimg();" style="width: 64px;height: 28px;-moz-opacity: 0.0;filter: alpha(opacity=0);opacity:0;"><span style="cursor: pointer;background-color: white;border-top: 1px solid #ddd;border-right: 1px solid #ddd;border-bottom: 1px solid #ddd;display:block;height: 28px;line-height: 28px;position:absolute;text-align:center;top: 60px;width: 64px;z-index:-1;color: #666;">浏 览</span></td></tr></tbody></table><p></p>    <p class="uComment" style="margin-top: 15px;margin-left: 40px;width: 400px;"><span style="color:red">*</span>仅支持JPG、JPEG、GIF、PNG,大小2M以内</p>    <div class="btns" style="text-align: center;"><a href="#" class="btn-cancel" onclick="$(\'#dialogUpImg\').remove();$(\'.pop_bg\').hide();" style="width: 60px;font-size: 14px;background: white;height: 28px;color: #666;line-height: 28px;margin-right: 10px;">取消</a><a href="#" class="btn-complete" onclick="if(to_insert_img_obj.sendimg($(\'#src-input\').val()))$(\'#dialogUpImg\').remove();" style="font-size: 14px;width: 60px;height: 28px;    border: 1px solid #e41e2b !important;background: #e41e2b;line-height: 28px;">发送</a></div></div></div>').appendTo('body');
  $('.pop_bg').show();
   return;
  }
  if(window.location.href.indexOf("tpl=minichat2")!=-1){
    $('<div id="dialogUpImg" class="dialogs" style="display:block;position:absolute;top:75px;left:25px;background:#fafafa;z-index:200000000;width:350px;"><style>\
 .img_load_lh .head {\
  height: 30px; line-height: 30px; background: #ddd; box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.2); text-align: left;\
}\
.img_load_lh .head strong.title {\
  padding-left: 10px; color: #333;\
}\
 .img_load_lh .head .close {\
  display: block; width: 20px; height: 20px; font-size: 17px; line-height: 20px; text-align: center; position: absolute; top: 3px; right: 5px;\
}\
  .img_load_lh .uploadImg{\
  display: block;border: 1px solid #999;width: 55px;height: 25px;position: absolute;right: 25px;top: 55px;line-height: 25px;text-align: center;background-color: #eee;\
}.img_load_lh .head .close:hover {\
  text-decoration: none; color: #c00; \
}.img_load_lh .btns {\
  position: relative; margin-top:10px; left: 0; width: 100%; text-align: left;\
}\
 .img_load_lh .btn-complete, .img_load_lh .btn-cancel {\
 margin-bottom: 10px; display:inline-block; font-size: 11px; font-weight:bold; padding: 2px 15px; border-radius:2px;\
}\
 .img_load_lh .btns .btn-complete {\
  margin-right: 30px; float: right; color:#fff; background:#f7af1f; border:1px solid #e7840f;\
}\
 .img_load_lh .btns .btn-cancel {\
  margin-left: 30px; color:#555; background:#eee; border:1px solid #b3b3b3;\
}\
.img_load_lh .btn-cancel:hover{\
 text-decoration: none; text-decoration: none; background:#f3f3f3; border:1px solid #a5a5a5; box-shadow:0 1px 1px rgba(0, 0, 0, 0.1);\
}\
.img_load_lh .btn-complete:hover {\
 text-decoration: none; background:#f7ba3f; border:1px solid #d5780b; box-shadow:0 1px 1px rgba(250, 138, 0, 0.3);\
}\
 .img_load_lh .comm-tbox {\
  position:absolute; left:10px;top:0;width: 276px;padding-left:5px; height: 25px; line-height: 25px; border: 1px solid #666;margin-top:9px; box-shadow: inset 1px 2px 0 rgba(0, 0, 0, 0.15);color:#999999;\
}\
 .img_load_lh p {\
  margin: 15px 10px 0; *margin-left: 5px;\
}\
 .img_load_lh p.uComment {\
  color: #999; font-size:12px; text-align:left; font-family:arial;\
}\
 .img_load_lh .choice{\
  width:300px;position:relative;border-left:1px solid #aaa;border-top:1px solid #aaa;border-right:1px solid #bbb;border-bottom:1px solid #bbb;background-color:#FFF;margin:10px;\
}\
.img_load_lh{\
background-color: #fafafa; border: 1px solid #aaa; position:relative;z-index: 200000000;box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1);border-radius: 3px;\
}\
.img_load_lh .choice span{display:block;}\
#inputUploadImg {\
  height: 30px; *height: 28px; position: absolute; right: 23px; *right: 5px; top: 53px; *top: 55px; width: 61px; *width: 58px; opacity: 0; filter:alpha(opacity=0); cursor: pointer;\
}</style><div class="img_load_lh"><div class="head"><strong class="title">'+infos[148]+'</strong><a class="close" href="#" onclick="$(\'#dialogUpImg\').remove();">×</a></div>\
    <div style="position:relative;height:35px;"><input id="src-input" class="comm-tbox" type="text" target="blank" value="'+infos[149]+'" onFocus="if(this.value==\''+infos[149]+'\') this.value=\'\';" onblur="if(this.value==\'\')this.value=\''+infos[149]+'\'">\
       <input type="file" id="img_pic" name="userimg" onchange="to_insert_img_obj.ajaxuploadimg();" style="cursor: pointer;font-size: 9px;position:absolute;width:43px;height:30px;z-index:4;top:8px;right:10px;-moz-opacity: 0.0;filter: alpha(opacity=0);opacity:0;"/><span style="background-color:#F6F6F6;border-left:1px solid #666666;border-top:1px solid #666666;border-right:1px solid #AAAAAA;border-bottom:1px solid #AAAAAA;display:block;height:27px;line-height:27px;position:absolute;right:8px;text-align:center;top:9px;width:46px;z-index:3;">'+infos[150]+'</span></div>\
    <p class="uComment">*'+infos[151]+'</p>\
    <div class="btns"><a href="#" class="btn-complete" onclick="if(to_insert_img_obj.sendimg($(\'#src-input\').val())) $(\'#dialogUpImg\').remove();">'+infos[152]+'</a><a href="#" class="btn-cancel" onclick="$(\'#dialogUpImg\').remove();">'+infos[153]+'</a></div></div></div>').appendTo(body);
  }else{
    $('<div id="dialogUpImg" class="dialogs" style="display:block;position:absolute;top:150px;left:25px;background:#fafafa;z-index:200000000;width:350px;"><style>\
 .img_load_lh .head {\
  height: 30px; line-height: 30px; background: #ddd; box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.2);\
}\
.img_load_lh .head strong.title {\
  padding-left: 10px; color: #333;\
}\
 .img_load_lh .head .close {\
  display: block; width: 20px; height: 20px; font-size: 17px; line-height: 20px; text-align: center; position: absolute; top: 3px; right: 5px;\
}\
  .img_load_lh .uploadImg{\
  display: block;border: 1px solid #999;width: 55px;height: 25px;position: absolute; right: 25px;top: 55px;line-height: 25px;text-align: center;background-color: #eee;\
}.img_load_lh .head .close:hover {\
  text-decoration: none; color: #c00;\
}.img_load_lh .btns {\
  position: relative; margin-top:10px; left: 0; width: 100%;\
}\
 .img_load_lh .btn-complete, .img_load_lh .btn-cancel {\
 margin-bottom: 10px; display:inline-block; font-size: 11px; font-weight:bold; padding: 2px 15px; border-radius:2px;\
}\
 .img_load_lh .btns .btn-complete {\
  margin-right: 10px; float: right; color:#fff; background:#f7af1f; border:1px solid #e7840f;\
}\
 .img_load_lh .btns .btn-cancel {\
  margin-left: 10px; color:#555; background:#eee; border:1px solid #b3b3b3;\
}\
.img_load_lh .btn-cancel:hover{\
 text-decoration: none; text-decoration: none; background:#f3f3f3; border:1px solid #a5a5a5; box-shadow:0 1px 1px rgba(0, 0, 0, 0.1);\
}\
.img_load_lh .btn-complete:hover {\
 text-decoration: none; background:#f7ba3f; border:1px solid #d5780b; box-shadow:0 1px 1px rgba(250, 138, 0, 0.3);\
}\
 .img_load_lh .comm-tbox {\
  width: 291px; height: 25px; line-height: 25px; border: 1px solid #666;margin-top:9px; box-shadow: inset 1px 2px 0 rgba(0, 0, 0, 0.15);\
}\
 .img_load_lh p {\
  margin: 15px 10px 0; *margin-left: 5px;\
}\
 .img_load_lh p.uComment {\
  color: #999; font-size:12px;\
}\
 .img_load_lh .choice{\
  width:300px;position:relative;border-left:1px solid #aaa;border-top:1px solid #aaa;border-right:1px solid #bbb;border-bottom:1px solid #bbb;background-color:#FFF;margin:10px;\
}\
.img_load_lh{\
display: block; width: 350px; background: #fafafa; border: 1px solid #aaa; position:absolute;z-index: 200000000;box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1);border-radius: 3px;\
}\
.img_load_lh .choice span{display:block;}\
#inputUploadImg {\
  height: 30px; *height: 28px; position: absolute; right: 23px; *right: 5px; top: 53px; *top: 55px; width: 61px; *width: 58px; opacity: 0; filter:alpha(opacity=0); cursor: pointer;\
}</style><div class="img_load_lh" style="position:relative;"><div class="head"><strong class="title">'+infos[148]+'</strong><a class="close" href="#" onclick="$(\'#dialogUpImg\').remove();" hidefocus="">×</a></div>\
    <p><table border="0" cellpadding="0" cellspacing="0"><tr><td><input id="src-input" class="comm-tbox" type="text" target="blank" value="'+infos[149]+'" onFocus="if(this.value==\''+infos[149]+'\')this.value=\'\';" onblur="if(this.value==\'\')this.value=\''+infos[149]+'\'">\
        </td><td><input type="file" id="img_pic" name="userimg" onchange="to_insert_img_obj.ajaxuploadimg();" style="cursor: pointer;font-size: 9px;position:absolute;width:43px;height:30px;z-index:4;top:53px;-moz-opacity: 0.0;filter: alpha(opacity=0);opacity:0;"/><span style="background-color:#F6F6F6;border-left:1px solid #666666;border-top:1px solid #666666;border-right:1px solid #AAAAAA;border-bottom:1px solid #AAAAAA;display:block;height:29px;line-height:25px;position:absolute;right:10px;text-align:center;top:53px;*top:53px;width:46px;z-index:3;">'+infos[150]+'</span></td></tr></table></p>\
    <p class="uComment">*'+infos[151]+'</p>\
    <div class="btns"><a href="#" class="btn-complete" onclick="if(to_insert_img_obj.sendimg($(\'#src-input\').val()))$(\'#dialogUpImg\').remove();">'+infos[152]+'</a><a href="#" class="btn-cancel" onclick="$(\'#dialogUpImg\').remove();">'+infos[153]+'</a></div></div></div>').appendTo(body);
  }
  
}


// 获取图片内容
function getImageContent()
{
  var imagePath = document.getElementById("insert_image_url").value.trim();
  if(imagePath=="")
  {
    alert(infos[99]);
    document.getElementById("insert_image_url").focus();
  }
  else
  {
    var html = "[IMG]"+imagePath+"[/IMG]";
    document.getElementById("input1").value += html;
    destryInsertDiv("image");
    document.getElementById("input1").focus();
  }
}

function toinsertHTML()
{
  var msgHTML = prompt(infos[16], '');
  if(msgHTML==null || msgHTML.trim()=="") return;
  msgHTML = msgHTML.replace(new RegExp('<scr'+'ipt[^>]*?>.*?</scr'+'ipt>','g'), "") ;
  msgHTML = msgHTML.replace(new RegExp('\<\!\-\-.*?\-\-\>','g'), "") ;
  msgHTML = msgHTML.replace('\<\!\-\-', "") ;
  msgHTML += "</a>";
  display_msg("<font color=\"#666666\">"+infos[13]+": "+getTime2()+"</font><br>&nbsp;&nbsp;"+msgHTML.trim());
  qstmsg(msgHTML.trim());
}

// 插入表情
function toinsertsmile()
{
	if ($("#face_src").attr('src') == '') $("#face_src").attr('src', "face.php?company_id="+company_id+"&locate="+locate); // 加载表情
  document.getElementById("face_div").style.display = document.getElementById("face_div").style.display==""?"none":"";
}

function insertsmile(smilename)
{
  document.getElementById("face_div").style.display = "none";
  document.getElementById("input1").value += smilename;
  document.getElementById("input1").focus();
}

var upload_file_name = "";
var up_time = null;
var is_upload_file = 0;
function getUpStat()
{
  if(upload_file_name!="")
  {
    clearInterval(up_time);
    is_upload_file = 0;

    var file_url = "http://"+host+"/down_file.php?type=srv&company_id="+company_id+"&file="+upload_file_name;
    file_url = UrlEncode(file_url);

    send_FIL(file_url); // 发送文件给客服

    display_msg("<span>• "+infos[70]+"</span>");
    upload_file_name = "";
    closeUpload();
  }
}

// 开始上传文件
function start_getUpStat(filename)
{
  upload_file_name = "";
  is_upload_file = 1;
  display_msg("<span>• "+infos[42]+" \"<a href=\""+filename+"\" target=\"_blank\" style='text-decoration:underline;color:#8A2BE2;'>"+filename.substring(filename.lastIndexOf("\\")+1)+"</a>\"</span>");
  up_time = setInterval(getUpStat,500);
}

function closeUpload()
{
  document.getElementById("upload_iframe").src="";
  document.getElementById("uploaddiv").style.display="none";
}

function show_file()
{
  if(typeof($('#dialogUpImg').val()) != "undefined") {
    $('#dialogUpImg').remove();
    return;  
  }
  
  if(arguments[0] == 'dz8') {//定制版
  $('<div id="dialogUpImg" class="dialogs" style="top: 57px; left: 15px; height: 180px; width: 290px; border: 1px solid rgb(51, 153, 204); position: absolute; font-size: 14px; z-index: 9999; background: url(/img/pf_bg.gif) repeat-x;"><div style="float:right;margin-top:8px;margin-right:8px;width:12px;height:12px;cursor:pointer;background:url(../style/chat/minichat2/img/minchat_ns_dz8.png) -18px 0 no-repeat;" onclick="$(\'#dialogUpImg\').remove();"></div><div style=""><p style="margin: 0;background: #139ea1;color: #fff;font-size: 14px;line-height: 30px;text-align: left;padding-left: 10px;">文件上传</p><table cellpadding="0" cellspacing="8" border="0" width="100%" align="center" style="padding-top: 5px;"><tbody><tr><td style="text-align: left; padding-right:5px;position: relative;"><input id="src-input" type="text" class="comm-tbox" placeholder="请点击上传文件" style="width: 200px; line-height: 24px; height: 24px;float: left;border: 1px solid #ddd;padding: 1px 5px;" onkeypress="if(event.keyCode==13){getLinkContent();try{window.focus();}catch(e){}return false;}"><input id="file_pic" name="userfile" type="file" value="浏览" onchange="to_send_file_obj.ajaxuploadfile();" style="width: 66px;  height: 28px;-moz-opacity: 0.0;  filter: alpha(opacity=0);  opacity: 0;position: absolute;z-index: 5;"><span style="position: absolute;display: block;width: 51px;height: 26px;line-height: 26px;right: 5px;border: 1px solid #ddd;background: #fff;padding-left: 5px;z-index: 4;">浏览..</span></td></tr><tr><td style="text-align: left; font-size:12px;padding-bottom: 5px; color:red;">*文件发送支持常用文档、影音、图片、压缩文件发送，文件大小不超过4M。</td></tr><tr><td style=" text-align:right;padding-top: 22px;"><span style="padding-right:5px;"><input type="button" value="确定" onclick="if(to_send_file_obj.sendfiles())$(\'#dialogUpImg\').remove();" style="width: 78px;height: 31px;background:url(../style/chat/minichat2/img/dialog_send.png) no-repeat; border:none; text-indent:100em;"></span></td></tr></tbody></table></div></div>').appendTo(body);
    return;
  }
  if(arguments[0] == 'dz9') {//定制版
    $('<div id="dialogUpImg" class="dialogs" style="top: 57px; left: 45px; height: 180px; width: 290px; border: 1px solid #000; position: absolute; border-radius:5px; overflow:hidden; font-size: 14px; z-index: 9999; background: #f9f3f1;"><div style="float:right;margin-top:8px;margin-right:8px;width:12px;height:12px;cursor:pointer;background:url(../style/chat/minichat2/img/minchat_ns_dz8.png) -18px 0 no-repeat;" onclick="$(\'#dialogUpImg\').remove();"></div><div style=""><p style="margin: 0;background: #000;color: #fff;font-size: 14px;line-height: 30px;text-align: left;padding-left: 10px;">文件上传</p><table cellpadding="0" cellspacing="8" border="0" width="100%" align="center" style="padding-top: 5px;"><tbody><tr><td style="text-align: left; padding-right:5px;position: relative;"><input id="src-input" type="text" class="comm-tbox" placeholder="请点击上传文件" style="width: 200px; line-height: 24px; height: 24px;float: left;border: 1px solid #ddd;padding: 1px 5px;" onkeypress="if(event.keyCode==13){getLinkContent();try{window.focus();}catch(e){}return false;}"><input id="file_pic" name="userfile" type="file" value="浏览" onchange="to_send_file_obj.ajaxuploadfile();" style="width: 66px;  height: 28px;-moz-opacity: 0.0;  filter: alpha(opacity=0);  opacity: 0;position: absolute;z-index: 5;"><span style="position: absolute;display: block;width: 51px;height: 26px;line-height: 26px;right: 5px;border: 1px solid #ddd;background: #fff;padding-left: 5px;z-index: 4;">浏览..</span></td></tr><tr><td style="text-align: left; font-size:12px;padding-bottom: 5px; color:red;">*文件发送支持常用文档、影音、图片、压缩文件的发送，请控制您的发送文件大小不超过4M。</td></tr><tr><td style=" text-align:center;padding-top: 22px;"><span style="padding-right:5px;"><input type="button" value="确定" onclick="if(to_send_file_obj.sendfiles())$(\'#dialogUpImg\').remove();" style="width: 78px;height: 31px;background:url(../style/chat/minichat2/img/dialog_send9.png) no-repeat; border:none; color:#000; font-size:14px;"></span></td></tr></tbody></table></div></div>').appendTo(body);
    return;
  }
  if(arguments[0] == 'dz16') {//定制版
    $('<div id="dialogUpImg" class="dialogs" style="top: 57px; left: 22px; height: 180px; width: 290px; position: absolute;  overflow:hidden; font-size: 14px; z-index: 9999; background: #fff;"><div style="float:right;margin-top:8px;margin-right:8px;width:12px;height:12px;cursor:pointer;background:url(../style/chat/minichat2/img/close-x.png) 50% 50% no-repeat;" onclick="$(\'#dialogUpImg\').remove();"></div><div style=""><p style="margin: 0;background: #F7F8FA;color: #434C5E;font-size: 14px;line-height: 30px;text-align: left;padding-left: 10px;">文件上传</p><table cellpadding="0" cellspacing="8" border="0" width="100%" align="center" style="padding-top: 5px;"><tbody><tr><td style="text-align: left; padding-right:5px;position: relative;font-size:12px;"><input id="src-input" type="text" class="comm-tbox" placeholder="请点击上传文件" style="width: 200px; line-height: 24px; height: 24px;float: left;border: 1px solid #ddd;padding: 1px 5px;" onkeypress="if(event.keyCode==13){getLinkContent();try{window.focus();}catch(e){}return false;}"><input id="file_pic" name="userfile" type="file" value="浏览" onchange="to_send_file_obj.ajaxuploadfile();" style="text-align:center;width: 66px;background:#F4F5F9;height: 28px;-moz-opacity: 0.0;  filter: alpha(opacity=0);  opacity: 0;position: absolute;z-index: 5;"><span style="position: absolute;display: block;width: 51px;height: 26px;line-height: 26px;right: 5px;border: 1px solid #ddd;background: #fff;padding-left: 5px;z-index: 4;background:F4F5F9";font-size:12px;>浏览..</span></td></tr><tr><td style="text-align: left; font-size:12px;padding-bottom: 5px; color:red;">*文件发送支持常用文档、影音、图片、压缩文件的发送，请控制您的发送文件大小不超过4M。</td></tr><tr><td style=" text-align:center;padding-top: 22px;"><span style="padding-right:5px;"><input type="button" value="确定" onclick="if(to_send_file_obj.sendfiles())$(\'#dialogUpImg\').remove();" style="width: 258px;height: 28px;background:#56C10A; border:none; color:#fff; font-size:12px;"></span></td></tr></tbody></table></div></div>').appendTo(body);
    return;
  }   
  if(arguments[0] == 'khdz1'){
   $('<div id="dialogUpImg" class="dialogs" style="display:block;position: fixed;top: 20px;left: 20px;bottom: 0;right: 0;margin: auto;background:#fafafa;z-index:200000000;width: 360px;height: 180px;"><style> .img_load_lh .head {  height: 35px; line-height: 35px; background: #717171; box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.2);}.img_load_lh .head strong.title {  padding-left: 10px; color: white;} .img_load_lh .head .close {background:url("style/chat/kfdz/img/Btn_close2.png") no-repeat;  display: block; width: 10px; height: 10px; font-size: 17px; line-height: 20px; text-align: center; position: absolute; top: 9px; right: 9px;}  .img_load_lh .uploadImg{  display: block;border: 1px solid #999;width: 55px;height: 25px;position: absolute; right: 25px;top: 55px;line-height: 25px;text-align: center;background-color: #eee;}.img_load_lh .head .close:hover {  text-decoration: none; color: #c00;}.img_load_lh .btns {  position: relative; margin-top:15px; left: 0; width: 100%;} .img_load_lh .btn-complete, .img_load_lh .btn-cancel { margin-bottom: 10px; display:inline-block; font-size: 11px; font-weight:bold; border-radius:2px;} .img_load_lh .btns .btn-complete {  margin-right: 10px; color:#fff;border:1px solid #e41e2b;} .img_load_lh .btns .btn-cancel {  margin-left: 10px; color:#555; background:#eee; border:1px solid #b3b3b3;}.img_load_lh .btn-cancel:hover{ text-decoration: none; text-decoration: none; background:#f3f3f3; border:1px solid #a5a5a5; box-shadow:0 1px 1px rgba(0, 0, 0, 0.1);}.img_load_lh .btn-complete:hover { text-decoration: none; box-shadow:0 1px 1px rgba(250, 138, 0, 0.3);} .img_load_lh .comm-tbox { text-indent:10px;color:#666; width: 265px; height: 28px; line-height: 28px; border: 1px solid #ddd;} .img_load_lh p {  margin: 15px 10px 0; *margin-left: 5px;} .img_load_lh p.uComment {  color: #999; font-size:12px;} .img_load_lh .choice{  width:300px;position:relative;border-left:1px solid #aaa;border-top:1px solid #aaa;border-right:1px solid #bbb;border-bottom:1px solid #bbb;background-color:#FFF;margin:10px;}.img_load_lh{display: block; width: 100%;height:100%; background: #fff; border: 1px solid #aaa; position:absolute;z-index: 200000000;box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1);border-radius: 3px;}.img_load_lh .choice span{display:block;}#inputUploadImg {  height: 30px; *height: 28px; position: absolute; right: 23px; *right: 5px; top: 53px; *top: 55px; width: 61px; *width: 58px; opacity: 0; filter:alpha(opacity=0); cursor: pointer;}</style><div class="img_load_lh" style="/* position:relative; */"><div class="head"><strong class="title">文件设置</strong><a class="close" href="#" onclick="$(\'#dialogUpImg\').remove();$(\'.pop_bg\').hide();" hidefocus=""></a></div>    <table border="0" cellpadding="0" cellspacing="0" style="margin-top: 20px;margin-left: 15px;"><tbody><tr style=""><td><input id="src-input" class="comm-tbox" type="text" target="blank" value="请点击浏览上传文件" onfocus="if(this.value==\'请点击浏览上传文件\')this.value=\'\';" onblur="if(this.value==\'\')this.value=\'请点击浏览上传文件\'">        </td><td><input type="file" id="file_pic" name="userfile" onchange="to_send_file_obj.ajaxuploadfile();" style="cursor: pointer;width: 64px;height: 28px;-moz-opacity: 0.0;filter: alpha(opacity=0);opacity:0;"><span style="background-color: white;border-top: 1px solid #ddd;border-right: 1px solid #ddd;border-bottom: 1px solid #ddd;display:block;height: 28px;line-height: 28px;position:absolute;text-align:center;top: 55px;*top:53px;width: 64px;z-index:-1;color: #666;">浏 览</span></td></tr></tbody></table><p></p>    <p class="uComment" style="margin-left: 15px;"><span style="color:red">*</span>文件发送支持常用文档、影音、图片、压缩文件的使用、请控制您的发送文件大小不超过4M。</p>    <div class="btns" style="text-align: center;"><a href="#" class="btn-cancel" onclick="$(\'#dialogUpImg\').remove();$(\'.pop_bg\').hide();" style="width: 60px;font-size: 14px;background: white;height: 28px;color: #666;line-height: 28px;margin-right: 10px;">取消</a><a href="#" class="btn-complete" onclick="if(to_send_file_obj.sendfiles())$(\'#dialogUpImg\').remove();" style="font-size: 14px;width: 60px;height: 28px;background: #e41e2b;line-height: 28px;">发送</a></div></div></div>').appendTo('body');
   $(".pop_bg").show();
   return;
  }
  if(window.location.href.indexOf("tpl=minichat2")!=-1){
    $('<div id="dialogUpImg" class="dialogs" style="display:block;position:absolute;top:60px;left:25px;background:#fafafa;z-index:200000000;width:350px;"><style>\
 .img_load_lh .head {\
  height: 30px; line-height: 30px; background: #ddd; box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.2);text-align:left;\
}\
.img_load_lh .head strong.title {\
  padding-left: 10px; color: #333;\
}\
 .img_load_lh .head .close {\
  display: block; width: 20px; height: 20px; font-size: 17px; line-height: 20px; text-align: center; position: absolute; top: 3px; right: 5px;\
}\
  .img_load_lh .uploadImg{\
  display: block;border: 1px solid #999;width: 55px;height: 25px;position: absolute;*position:relative;_position:relative;right: 25px;top: 55px;line-height: 25px;text-align: center;background-color: #eee;\
}.img_load_lh .head .close:hover {\
  text-decoration: none; color: #c00;\
}.img_load_lh .btns {\
  position: relative; margin-top:10px; left: 0; width: 100%; text-align:left;\
}\
 .img_load_lh .btn-complete, .img_load_lh .btn-cancel {\
 margin-bottom: 10px; display:inline-block; font-size: 11px; font-weight:bold; padding: 2px 15px; border-radius:2px;\
}\
 .img_load_lh .btns .btn-complete {\
  margin-right: 30px; float: right; color:#fff; background:#f7af1f; border:1px solid #e7840f;\
}\
 .img_load_lh .btns .btn-cancel {\
  margin-left: 30px; color:#555; background:#eee; border:1px solid #b3b3b3;\
}\
.img_load_lh .btn-cancel:hover{\
 text-decoration: none; text-decoration: none; background:#f3f3f3; border:1px solid #a5a5a5; box-shadow:0 1px 1px rgba(0, 0, 0, 0.1);\
}\
.img_load_lh .btn-complete:hover {\
 text-decoration: none; background:#f7ba3f; border:1px solid #d5780b; box-shadow:0 1px 1px rgba(250, 138, 0, 0.3);\
}\
 .img_load_lh .comm-tbox {\
  width: 276px;padding-left:5px;color:#999999; height: 25px; line-height: 25px; border: 1px solid #666;left:10px;top:5px;position:absolute; box-shadow: inset 1px 2px 0 rgba(0, 0, 0, 0.15);\
}\
 .img_load_lh p {\
  margin: 10px 10px 0; *margin-left: 5px;\
}\
 .img_load_lh p.uComment {\
  color: #999; font-size:12px; text-align:left;word-break:break-all;\
}\
 .img_load_lh .choice{\
  width:300px;position:relative;border-left:1px solid #aaa;border-top:1px solid #aaa;border-right:1px solid #bbb;border-bottom:1px solid #bbb;background-color:#FFF;margin:10px;\
}\
.img_load_lh{\
display: block; width: 350px; background: #fafafa; border: 1px solid #aaa; position:relative;z-index: 200000000;box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1);border-radius: 3px;\
}\
.img_load_lh .choice span{display:block;}\
#inputUploadImg {\
  height: 30px; *height: 28px; position: absolute; right: 23px; *right: 5px; top: 53px; *top: 55px; width: 61px; *width: 58px; opacity: 0; filter:alpha(opacity=0); cursor: pointer;\
}</style><div class="img_load_lh"><div class="head"><strong class="title">'+infos[154]+'</strong><a class="close" href="#" onclick="$(\'#dialogUpImg\').remove();">×</a></div>\
    <div style="position:relative;height:35px;margin-top:5px;"><input id="src-input" class="comm-tbox" type="text" target="blank" value="'+infos[155]+'" onFocus="if(this.value==\''+infos[155]+'\')this.value=\'\';" onblur="if(this.value==\'\')this.value=\''+infos[155]+'\'"><input type="hidden" id="real_filename_hidden">\<input type="file" id="file_pic" name="userfile" onchange="to_send_file_obj.ajaxuploadfile();" style="cursor: pointer;font-size: 9px;position:absolute;width:43px;height:27px;z-index:4;top:5px;-moz-opacity: 0.0;filter: alpha(opacity=0);opacity:0;right:13px;"/><span style="background-color:#F6F6F6;border-left:1px solid #666666;border-top:1px solid #666666;border-right:1px solid #AAAAAA;border-bottom:1px solid #AAAAAA;display:block;height:27px;line-height:25px;position:absolute;right:10px;text-align:center;top:5px;width:46px;z-index:3;">'+infos[150]+'</span></div>\
    <p class="uComment">'+infos[156]+'</p>\
    <div class="btns"><a href="#" class="btn-complete" onclick="if(to_send_file_obj.sendfiles())$(\'#dialogUpImg\').remove();">'+infos[152]+'</a><a href="#" class="btn-cancel" onclick="$(\'#dialogUpImg\').remove();">'+infos[153]+'</a></div></div></div>').appendTo(body);

  }else{
    $('<div id="dialogUpImg" class="dialogs" style="display:block;position:absolute;top:135px;left:25px;background:#fafafa;z-index:200000000;width:350px;"><style>\
 .img_load_lh .head {\
  height: 30px; line-height: 30px; background: #ddd; box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.2);\
}\
.img_load_lh .head strong.title {\
  padding-left: 10px; color: #333;\
}\
 .img_load_lh .head .close {\
  display: block; width: 20px; height: 20px; font-size: 17px; line-height: 20px; text-align: center; position: absolute; top: 3px; right: 5px;\
}\
  .img_load_lh .uploadImg{\
  display: block;border: 1px solid #999;width: 55px;height: 25px;position: absolute;right: 25px;top: 55px;line-height: 25px;text-align: center;background-color: #eee;\
}.img_load_lh .head .close:hover {\
  text-decoration: none; color: #c00;\
}.img_load_lh .btns {\
  position: relative; margin-top:10px; left: 0; width: 100%;\
}\
 .img_load_lh .btn-complete, .img_load_lh .btn-cancel {\
 margin-bottom: 10px; display:inline-block; font-size: 11px; font-weight:bold; padding: 2px 15px; border-radius:2px;\
}\
 .img_load_lh .btns .btn-complete {\
  margin-right: 10px; float: right; color:#fff; background:#f7af1f; border:1px solid #e7840f;\
}\
 .img_load_lh .btns .btn-cancel {\
  margin-left: 10px; color:#555; background:#eee; border:1px solid #b3b3b3;\
}\
.img_load_lh .btn-cancel:hover{\
 text-decoration: none; text-decoration: none; background:#f3f3f3; border:1px solid #a5a5a5; box-shadow:0 1px 1px rgba(0, 0, 0, 0.1);\
}\
.img_load_lh .btn-complete:hover {\
 text-decoration: none; background:#f7ba3f; border:1px solid #d5780b; box-shadow:0 1px 1px rgba(250, 138, 0, 0.3);\
}\
 .img_load_lh .comm-tbox {\
  width: 313px; height: 25px; line-height: 25px; border: 1px solid #666;margin-top:9px; box-shadow: inset 1px 2px 0 rgba(0, 0, 0, 0.15);\
}\
 .img_load_lh p {\
  margin: 15px 10px 0; *margin-left: 5px;\
}\
 .img_load_lh p.uComment {\
  color: #999; font-size:12px;\
}\
 .img_load_lh .choice{\
  width:300px;position:relative;border-left:1px solid #aaa;border-top:1px solid #aaa;border-right:1px solid #bbb;border-bottom:1px solid #bbb;background-color:#FFF;margin:10px;\
}\
.img_load_lh{\
display: block; width: 350px; background: #fafafa; border: 1px solid #aaa; position:absolute;z-index: 200000000;box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1);border-radius: 3px;\
}\
.img_load_lh .choice span{display:block;}\
#inputUploadImg {\
  height: 30px; *height: 28px; position: absolute; right: 23px; *right: 5px; top: 53px; *top: 55px; width: 61px; *width: 58px; opacity: 0; filter:alpha(opacity=0); cursor: pointer;\
}</style><div class="img_load_lh"><div class="head"><strong class="title">'+infos[154]+'</strong><a class="close" href="#" onclick="$(\'#dialogUpImg\').remove();">×</a></div>\
    <p><table border="0" cellpadding="0" cellspacing="0"><tr><td><input id="src-input" class="comm-tbox" type="text" target="blank" value="'+infos[155]+'" onFocus="if(this.value==\''+infos[155]+'\')this.value=\'\';" onblur="if(this.value==\'\')this.value=\''+infos[155]+'\'"><input type="hidden" id="real_filename_hidden">\
        </td><td><input type="file" id="file_pic" name="userfile" onchange="to_send_file_obj.ajaxuploadfile();" style="cursor: pointer;font-size: 9px;position:absolute;width:43px;height:30px;z-index:4;top:53px;-moz-opacity: 0.0;filter: alpha(opacity=0);opacity:0;right:13px;"/><span style="background-color:#F6F6F6;border-left:1px solid #666666;border-top:1px solid #666666;border-right:1px solid #AAAAAA;border-bottom:1px solid #AAAAAA;display:block;height:29px;line-height:25px;position:absolute;right:10px;text-align:center;top:53px;*top:53px;width:46px;z-index:3;">'+infos[150]+'</span></td></tr></table></p>\
    <p class="uComment">'+infos[156]+'</p>\
    <div class="btns"><a href="#" class="btn-complete" onclick="if(to_send_file_obj.sendfiles())$(\'#dialogUpImg\').remove();">'+infos[152]+'</a><a href="#" class="btn-cancel" onclick="$(\'#dialogUpImg\').remove();">'+infos[153]+'</a></div></div></div>').appendTo(body);
  }
}

// 关闭访客端，提示是否评分，
// 点取消,取消评分 
function  window_beforeunload(){
  m_browserClose = true;
  if(typeof(lnkover)!="undefined")
  {
		
    if(lnkover==1)
    {
      lnkover=100;
      if(kfpf!=0 && !vote_true)
      {
        if(enable_talk_collection==1){
			     $.ajax({
				    type: "POST",
				    url: "impl/rpc_count.php",
				    data: "kf_id="+obj_id+"&kh_id="+myid+"&kh_up="+khtalk_up+"&kh_down="+khtalk_down+"&talk_id="+mytempid,
				    dataType: "xml",
				    success: function(data){
				    }
				    });
         }
        if(window.event) window.event.returnValue = close_bro_prompt;
        vote_open();
      }
      else
      {
        if(window.event) window.event.returnValue = close_bro_prompt;
      }
    }
    else if(lnkover==2)
    {
      lnkover = 100;
      if(window.event) window.event.returnValue=infos[28];
    }
    else if(lnkover==3 && kfpf!=0 && !vote_true)
    {
      vote_open();
    }
    else if(lnkover==200)
    {
      
    }
  }
}

// 点击评分按钮
function to_vote_open() 
{
 if(arguments[0] == 'khdz1'){
  var str = "";
      var checked = "";
    if(vote_value=="0")
    {
      checked = "checked";
    }
    str += '<input name="vote" type="radio" value=0 '+checked+' onclick="set_vote_value(this.value)" style="vertical-align: middle;margin-right: 3px;">满意  ';
      var checked = "";
    if(vote_value=="1")
    {
      checked = "checked";
    }
    str += '<input name="vote" type="radio" value=1 '+checked+' onclick="set_vote_value(this.value)" style="vertical-align: middle;margin-right: 3px;">较好  ';
      var checked = "";
    if(vote_value=="2")
    {
      checked = "checked";
    }
    str += '<input name="vote" type="radio" value=2 '+checked+' onclick="set_vote_value(this.value)" style="vertical-align: middle;margin-right: 3px;">一般  ';
      var checked = "";
    if(vote_value=="3")
    {
      checked = "checked";
    }
    str += '<input name="vote" type="radio" value=3 '+checked+' onclick="set_vote_value(this.value)" style="vertical-align: middle;margin-right: 3px;">较差  ';
      var checked = "";
    if(vote_value=="4")
    {
      checked = "checked";
    }
    str += '<input name="vote" type="radio" value=4 '+checked+' onclick="set_vote_value(this.value)" style="vertical-align: middle;margin-right: 3px;">恶劣  ';
  
 $('<div id="vote_div" style="top: 187px;left: 231px;height: 180px;width: 410px;position: absolute;font-size: 14px;z-index: 9999;"><table width="410" height="210" border="0" cellpadding="0" cellspacing="4" style="background: white;padding: 0 14px;"><tbody><tr><td height="15" align="right" valign="middle"><a href="#" onclick="cancel_vote();return false;"><img src="style/chat/kfdz/img/Btn_close.png" width="12" height="12" border="0" style="position: absolute;right: 5px;top: 5px;" chat="" crystal_blue="" img1=""></a></td></tr><tr><td align="left" height="15" style="word-break:break-all;font-size: 12px;/* padding-left:5px; *//* padding-right:5px; *//* padding-top:10px; */color: #666;">感谢您的咨询，请对本次服务评价。</td></tr><tr><td height="20" align="left" valign="bottom" style="font-size: 12px;color: #666;"><span style="margin-right: 15px;">'+str+'</span></td></tr><tr><td height="60" align="left" valign="top"><table width="100%" height="70" border="0" align="left" cellpadding="0" cellspacing="0" style="font-size: 12px;color: #666;margin-top: 10px;"><tbody><tr><td><textarea style="width: 97%;height: 70px;/* line-height: 2em; */font-size: 12px;padding: 5px;" id="vote_note" name="vote_note" placeholder="| 请输入您的建议"></textarea></td></tr></tbody></table><span style="color: #666;font-size:12px;height:12px;line-height: 2em;"><span style="color:red">*</span>字数控制在150字以内</span></td></tr><tr><td height="32" align="center" valign="top"><input class="btn-hover" type="button" value="给客服评分" onclick="save_vote()" style="border: none;background: #e41e2b;color: white;padding: 4px;border-radius: 3px;"></td></tr></tbody></table></div>').appendTo('body');
   $('.pop_bg').show();
   return;
  }
  if(m_success==false) return;
  if(vote_true)
  {
    vote_bt = infos[39];
  }
  else
  {
    if(kfpf!=0)
    {
      vote_open();
    }
  }
}

// 创建评分冻结层 
function createVoteFreeze()
{
  var obj = document.getElementById("vote_freeze");
  if(obj!=null) return;

  var height = document.documentElement.clientHeight;
  var width = document.documentElement.clientWidth;
  createFreeze("vote_freeze", 0, 0, height, width);
  createVoteDiv(height, width);
  try
  {
    window.focus();
  }
  catch(e){}
}

// 创建评分Div
function createVoteDiv(height, width)
{
  if(khchat_style == 1) {
    to_vote_open("khdz1");
    return;
  }
  var pf_tip="";
  if(kfpf==999){
      pf_tip=infos[145];
  }
  else{
      pf_tip=infos[146];
  }
  var vote_str = document.createElement("div");
  vote_str.id = "vote_div";

  vote_str.style.top = Math.round((height-180)/2)+"px";
  vote_str.style.left = Math.round((width-358)/2)+"px";
  vote_str.style.height = "180px";
  vote_str.style.width = "358px";
  vote_str.style.position = "absolute";
  vote_str.style.fontSize = "14px";
  vote_str.style.zIndex = 9999;
  var str = '<table width="358" height="210" border="0" cellpadding="0" cellspacing="4" background="../img/tijiao_4.gif"><tr><td height="15" align="right" valign="middle"><a href="#" onclick="cancel_vote();return false;"><img src="../img/tijiao_10.gif" width="15" height="15" border="0" /></a></td></tr>'+'<tr><td align="left" height="30" style="word-break:break-all;font-size: 12px;padding-left:5px;padding-right:5px;padding-top:10px;">'+pf_tip+'</td></tr>'+'<tr><td height="20" align="center" valign="bottom" style="font-size: 12px;color: #000000;">';
  if(width < 358) {
    vote_str.style.width = "300px";  
    vote_str.style.left = Math.round((width-300)/2)+"px";
    str = '<table width="300" height="180" border="0" cellpadding="0" cellspacing="4" background="../img/tijiao_dz8.png"><tr><td height="15" align="right" valign="middle"><a href="#" onclick="cancel_vote();return false;"><img src="../img/tijiao_dz8_2.png" width="15" height="15" border="0" /></a></td></tr><tr><td height="30" align="center" valign="bottom" style="font-size: 12px;color: #000000;">';
  }
  if(width == 330) {
    vote_str.style.width = "290px";  
    vote_str.style.left = Math.round((width-290)/2)+"px";
    str = '<table width="290" height="180" border="0" cellpadding="0" cellspacing="4" background="../style/chat/minichat2/img/tijiao_dz16.png"><tr ><td height="15" align="right" valign="middle"><a href="#" onclick="cancel_vote();return false;"><img src="../style/chat/minichat2/img/close-x.png" width="15" height="15" border="0" /></a></td></tr><tr><td height="30" align="center" valign="bottom" style="font-size: 12px;color: #000000;">';
  }
  if(width == 370) {
    vote_str.style.top = Math.round((height-280)/2)+"px";
    vote_str.style.height = "183px";
	vote_str.style.borderRadius = "5px";
	vote_str.style.overflow = "hidden";
    vote_str.style.width = "292px";  
    vote_str.style.left = Math.round((width-292)/2)+"px";
    str = '<table width="292" height="185" border="0" cellpadding="0" cellspacing="4" background="../img/tijiao_dz9.png?20150826"><tr><td height="15" align="right" valign="middle"><a href="#" onclick="cancel_vote();return false;"><img src="../img/tijiao_dz8_2.png" width="12" height="12" border="0" style="margin-top:5px; margin-right:5px;" /></a></td></tr><tr><td height="30" align="center" valign="bottom" style="font-size: 12px;color: #000000;">';
  }
  
  if(width == 400) {
    vote_str.style.top = Math.round((height-280)/2)+"px";
    vote_str.style.height = "182px";
	vote_str.style.borderRadius = "5px";
	vote_str.style.overflow = "hidden";
    vote_str.style.width = "291px";  
    vote_str.style.left = Math.round((width-291)/2)+"px";
    str = '<table width="291" height="185" border="0" cellpadding="0" cellspacing="4" background="../img/tijiao_dz10.png?20150907"><tr><td height="15" align="right" valign="middle"><a href="#" onclick="cancel_vote();return false;"><img src="../img/tijiao_dz10_1.png" width="12" height="12" border="0" style="margin-top:7px; margin-right:7px;" /></a></td></tr><tr><td height="30" align="center" valign="bottom" style="font-size: 12px;color: #000000;">';
  }
  
	    var checked = "";
    if(vote_value=="0")
    {
      checked = "checked";
    }
	  str += '<input name=vote type=radio value=0 '+checked+' onclick=set_vote_value(this.value) />满意  ';
	    var checked = "";
    if(vote_value=="1")
    {
      checked = "checked";
    }
	  str += '<input name=vote type=radio value=1 '+checked+' onclick=set_vote_value(this.value) />较好  ';
	    var checked = "";
    if(vote_value=="2")
    {
      checked = "checked";
    }
	  str += '<input name=vote type=radio value=2 '+checked+' onclick=set_vote_value(this.value) />一般  ';
	    var checked = "";
    if(vote_value=="3")
    {
      checked = "checked";
    }
	  str += '<input name=vote type=radio value=3 '+checked+' onclick=set_vote_value(this.value) />较差  ';
	    var checked = "";
    if(vote_value=="4")
    {
      checked = "checked";
    }
	  str += '<input name=vote type=radio value=4 '+checked+' onclick=set_vote_value(this.value) />恶劣  ';
	  var vote_dis = "";
  if(vote_true)
  {
    vote_bt = infos[39];
    vote_dis = "disabled";
  }
	  if(width == 330){
        str += '</td></tr><tr><td height="60" align="center"  valign="top"><table width="85%" height="55" border="0" align="center" cellpadding="2" cellspacing="0" style="font-size: 12px;color: #000000;"><tr><td><textarea style="width:252px; height:50px" id="vote_note" name="vote_note" placeholder="'+infos[119]+'"></textarea></td></tr></table></td></tr><tr><td height="32" align="center" valign="top"><input type="button" style="width: 258px;height: 28px; border:none; font-size:14px; color:#fff;background:#56C10A" '+vote_dis+' value="'+vote_bt+'" onclick="save_vote()" /></td></tr></table>';
    }
    else if(width < 358) {
        str += '</td></tr><tr><td height="60" align="center"  valign="top"><table width="85%" height="55" border="0" align="center" cellpadding="0" cellspacing="0" style="font-size: 12px;color: #000000;"><tr><td width="50" align="center">'+infos[119]+'</td><td><textarea style="width:235px; height:50px" id="vote_note" name="vote_note"></textarea></td></tr></table><span style="color:red;font-size:12px;height:12px;">'+infos[120]+'</span></td></tr><tr><td height="32" align="center" valign="top"><input type="button" style="width: 78px;height: 31px;background:url(../img/tijiao_dz8_1.png) no-repeat; border:none; text-indent:100em;" '+vote_dis+' value="'+vote_bt+'" onclick="save_vote()" /></td></tr></table>';
    }
    else if(width == 370){
        str += '</td></tr><tr><td height="60" align="center"  valign="top"><table width="85%" height="55" border="0" align="center" cellpadding="2" cellspacing="0" style="font-size: 12px;color: #000000;"><tr><td width="50" align="center">'+infos[119]+'</td><td><textarea style="width:235px; height:50px" id="vote_note" name="vote_note"></textarea></td></tr></table><span style="color:red;font-size:12px;height:12px;">'+infos[120]+'</span></td></tr><tr><td height="32" align="center" valign="top"><input type="button" style="width: 77px;height: 30px;background:url(../img/dialog_send9.png) no-repeat; border:none; font-size:14px; color:#000;" '+vote_dis+' value="'+vote_bt+'" onclick="save_vote()" /></td></tr></table>';
    }else if(width == 400){
        str += '</td></tr><tr><td height="60" align="center"  valign="top"><table width="85%" height="55" border="0" align="center" cellpadding="2" cellspacing="0" style="font-size: 12px;color: #000000;"><tr><td width="50" align="center">'+infos[119]+'</td><td><textarea style="width:235px; height:50px" id="vote_note" name="vote_note"></textarea></td></tr></table><span style="color:red;font-size:12px;height:12px;">'+infos[120]+'</span></td></tr><tr><td height="32" align="center" valign="top"><input type="button" style="width: 78px;height: 27px;background:url(../img/btn_send1.png) no-repeat; border:none; font-size:14px; color:#fff;" '+vote_dis+' value="'+vote_bt+'" onclick="save_vote()" /></td></tr></table>';
    }else{
        str += '</td></tr><tr><td height="60" align="center"  valign="top"><table width="85%" height="55" border="0" align="center" cellpadding="0" cellspacing="0" style="font-size: 12px;color: #000000;"><tr><td width="50" align="center">'+infos[119]+'</td><td><textarea style="width:235px; height:50px" id="vote_note" name="vote_note"></textarea></td></tr></table><span style="color:red;font-size:12px;height:12px;">'+infos[120]+'</span></td></tr><tr><td height="32" align="center" valign="top"><input type="button" '+vote_dis+' value="'+vote_bt+'" onclick="save_vote()" /></td></tr></table>';
    }
    
  vote_str.innerHTML = str;
  var vote_freeze = document.getElementById("vote_freeze");
  document.body.insertBefore(vote_str, vote_freeze);
}

// 评分
function vote_open()
{
  if (obj_id==0)  
  {
    display_msg(infos[50]);  // 输出信息：尚未与客服建立对话，不能评分!
    return;
  }
  
  createVoteFreeze();
}

function set_vote_value(v)
{
  if(!vote_true)
  {
  	vote_value = v;
  }
}

var isIE = (document.all)?1:0;
var xmlhttp = null;

if(isIE)
{
  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
else
{
  xmlhttp = new XMLHttpRequest();
}

// 取消评分
function cancel_vote()
{
  if(khchat_style == 1) $('.pop_bg').hide();
  replayVote("2");//取消评分

  if(lnkover==100)
  {
    closewindow();
  }
  var obj = document.getElementById("vote_div");
  obj.parentNode.removeChild(obj);
  obj = document.getElementById("vote_freeze");
  obj.parentNode.removeChild(obj);
}

// 提交评分
function save_vote()
{

  if(khchat_style == 1 ){
    $('.pop_bg').hide();
    if(m_success==false && lnkover==2){
      $("#vote_div").remove();
      return;
    }
  } 
	if (myfirst_tempid == '') myfirst_tempid = mytempid;
  try
  {
    if(!vote_true)
    {
			var vote_note = document.getElementById("vote_note").value.trim();
			if(_length(vote_note) > 300)
			{
				alert(infos[121]);
				return;
			}

			var url = "vote.php";
			vote_true = true;
			
      var senddata="company_id="+company_id+"&id6d="+obj_id+"&action=vote&vote="+vote_value+"&note="+UrlEncode(vote_note)+"&temp_id="+myfirst_tempid+"&guest_id="+myid;
    
      xmlhttp.open("POST",url,false);
      //xmlhttp.setRequestHeader("Content-Length",senddata.length);
			xmlhttp.setRequestHeader("CONTENT-TYPE","application/x-www-form-urlencoded");
      xmlhttp.send(senddata);

      replayVote("1");//评分成功
      
      if(lnkover==3 || lnkover==100)
      {
        display_msg("<br/>"+infos[38]);
      }
      else
      {
        display_msg("<br/>"+infos[49]);
      }
    }
    else
    {
      display_msg("<br/>"+infos[39]);
    }
  }
  catch(e)
  {
    display_msg("<br/>"+infos[105]);
  }

  cancel_vote();

  // 浏览器关闭按钮被点击过则直接关闭窗口
  if(m_browserClose)
  {
    closewindow();
  }
}

// 发送注册信息
function do_send_reg(name, email, phone, qq, msn, company, addr, company_id, guest_id, id6d, zdyzc_obj)
{
  
    if(company_id<0 || guest_id<0 || m_regStat!=0 || reg_c=="" || m_hasreg>0) return;

    if(!checkInputMobile(phone))
    {
      var mobile = "";
      var phone = phone;
    }
    else
    {
      var mobile = phone;
      var phone = "";
    }

    mobile = UrlEncode(mobile);
    phone = UrlEncode(phone);
    var name = UrlEncode(name);
    var email = UrlEncode(email);
    var qq = UrlEncode(qq);
    var msn = UrlEncode(msn);
    var company = UrlEncode(company);
    var addr = UrlEncode(addr);
    var company_id = UrlEncode(company_id);
    var guest_id = UrlEncode(guest_id);
    var id6d = UrlEncode(id6d);
    var talk_page = UrlEncode(talkpage);
    var tfrom = UrlEncode(tfrom);
    try{
        if($.browser.version=="7.0"||$.browser.version=="6.0") {
		  var zdyzc_obj = jQuery.parseJSON(zdyzc_obj);
        } else {
          var zdyzc_obj = JSON.stringify(zdyzc_obj);     
        }
    }catch(e){
        var zdyzc_obj = '';
    }
    
    var zdyzc_str = UrlEncode(zdyzc_obj);
    var senddata = "action=import&name="+name+"&email="+email+"&mobile="+mobile+"&phone="+phone+"&qq="+qq+"&msn="+msn+"&company="+company+"&addr="+addr+"&company_id="+company_id+"&guest_id="+guest_id+"&id6d="+id6d+"&arg="+arg+'&guest_uid='+ucust_id+'&zdyzc_str='+zdyzc_str+'&talk_page='+talk_page+'&tfrom='+tfrom;

    reg_data_url = "impl/guest_info.php?"+senddata;
    /*
    xmlhttp.open("GET", url, true);
    xmlhttp.setRequestHeader("Content-Length",senddata.length);
    xmlhttp.setRequestHeader("CONTENT-TYPE","application/x-www-form-urlencoded");
    xmlhttp.send(null);

    xmlhttp.onreadystatechange = function()
    {
      if(4==xmlhttp.readyState)
      {
        if(200==xmlhttp.status)
        {
          var dom = xmlhttp.responseXML;
          var rspNodes = XMLGetNodes(xmlhttp.responseXML,'Response');
          
          if(rspNodes!=null)
          {
            var rspNode = rspNodes[0];
            var ecode = XMLGetNamedAttr(rspNode, "ecode");

            if(ecode==0)
            {
              g_comm.RegSuccess(guest_id);
            }
          }
        }
      }
    }
    */
    reg_err_fun(guest_id);
 
}
//注册失败补救
function reg_err_fun(guest_id) {
    $.ajax({
        type: "GET",
        url: reg_data_url,
        timeout:15000,
        success: function(msg) {
            g_comm.RegSuccess(guest_id);    
        },
        error: function(e) {
            setTimeout(reg_err_fun,3000,guest_id);
        }     
    });    
}

// 检查mobile
function checkInputMobile(mobile)
{
  var regx = /^1\d{10}$/;
  if(!regx.test(mobile))
  {
    return false;
  }
  return true;
}

// 提交留言
var ret = new Object();
function save_lword(zdyly_c)
{
  var url = "lword.php";
  
  if(typeof(ret.tempid)!="undefined")
  {
    mytempid = ret.tempid;
  }
  
  
  if(m_lwordObject == '0' || m_lwordObject == null){
      alert('请选择留言对象');
      return false;
  }
  m_lwordObject = m_lwordObject == 'zdgs' ? '' : m_lwordObject;
  var senddata = "action=import&company_id="+company_id+"&tempid="+mytempid+"&guest_id="+myid+"&referer=http://www.shjhome.com/15&referer1=&ly_mode="+m_replyMode+"&ly_object="+m_lwordObject+"&hasrobot="+chatrobot+"&ucust_id="+ucust_id+"&u_stat_id="+u_stat_id+"&talk_his_table="+talk_his_table+"&message_table="+message_table;

  var check_str = "";
  var check_flag = 0;
  var content_str = "";
  var content_flag = 0;
  var arr = zdyly_c.split(",");
  var tmp = '';
  {
    for(var i=0; i<arr.length; i++)
    {
      try
      {
    
        if(zdyly_ck.indexOf(arr[i])>-1)
        {
          if(document.getElementById("ly_"+arr[i]).value.trim()=="")
          {
            var alertinfo = "";
            if(arr[i]=="name")
            {
              alertinfo = infos[51];
            }
            else if(arr[i]=="email")
            {
              alertinfo = infos[52];
            }
            else if(arr[i]=="phone")
            {
              alertinfo=infos[53];
            }
            else if(arr[i]=="qq")
            {
              alertinfo = infos[55];
            }
            else if(arr[i]=="company")
            {
              alertinfo = infos[86];
            }
            else if(arr[i]=="addr")
            {
              alertinfo = infos[112];
            }

            alert(alertinfo);
            document.getElementById("ly_"+arr[i]).focus();
            document.getElementById("lw_sb").disabled = false;
            return false;
          }
          if(!checkLyInput(arr[i]))
          {
            return false;
          }
                    
        }
        else
        {
          if(document.getElementById("ly_"+arr[i]).value.trim()!="")
          {
            if(!checkLyInput(arr[i]))
            {
              return false;
            }
          }
        }
        senddata += "&ly_"+arr[i]+"="+UrlEncode(document.getElementById("ly_"+arr[i]).value.trim());

      }catch(e){}
    }
    /* 处理自定义注册项数据 开始*/
    try{
      if(zdyzc_checked > 0 && contact_first) {
        for(var key in zdyzc_arr) {               
            if(zdyzc_arr[key][2] == 1 && document.getElementById("ly_"+key).value.trim()=="") {
                alertinfo = infos[143];
                alert(alertinfo);
                document.getElementById("ly_"+key).focus();
                document.getElementById("lw_sb").disabled = false;
                return false;
            }else{
                if(zdyzc_arr[key][1] == 1){
                    tmp = zdyzc_arr[key][0];
                    zdyzc_obj[tmp] = document.getElementById("ly_"+key).value.trim();
                   //alert(JSON.stringify(zdyzc_obj));    
                }
            }
        }                                    
      }
     }catch(e){} 
     /* 处理自定义注册项数据 结束*/      
        if(is_ly_custom!=1 && ly_captcha !=2){
          senddata += "&ly_check_num=" + document.getElementById('ly_check_num').value.trim();
        }else{
          senddata += "&is_ly_custom=1";
        }
        
        if(zdyzc_checked > 0 && contact_first) {
            var zdyzc_str = UrlEncode(JSON.stringify(zdyzc_obj));
            senddata += "&zdyzc_str=" + zdyzc_str;     
        }
        
  }

//  if(m_lwordObject=="d#no_group")
//  {
//    alert(infos[130]);
//    return false;
//  }

  if(document.getElementById("ly_content").value.trim()=="")
  {
    alert(infos[56]);
    return false;
  }

  if(ly_captcha !=2 && is_ly_custom!=1 && document.getElementById('ly_check_num').value.trim()==""){
    alert(prompt137);
    return false;
  }
  
  if(ly_captcha !=2 && is_ly_custom!=1 && !check_num_status){
    alert(prompt138);
	replace_check_num();
    return false;
  }
  
  var postdata = senddata + "&ly_content="+UrlEncode(document.getElementById("ly_content").value.trim().replace(/(<)/gim,"&lt;").replace(/(>)/gim,"&gt;").replace(/(\r\n)/gim,"<br/>"));
  if(contact_first)
  {
    var postdata = senddata + "&ly_first=true&iscard="+m_cardImport+"&m_lyszc="+m_lyszc+"&ly_content="+UrlEncode(document.getElementById("ly_content").value.trim().replace(/(<)/gim,"&lt;").replace(/(>)/gim,"&gt;").replace(/(\r\n)/gim,"<br/>"));
    contact_first = false;
  }

  xmlhttp.open("POST", url, false);
  //xmlhttp.setRequestHeader("Content-Length", postdata.length);
  xmlhttp.setRequestHeader("CONTENT-TYPE", "application/x-www-form-urlencoded");
  xmlhttp.send(postdata);

  if(origin_type == '1'){
    sendkafka('type','1','-1',origin_time);
    origin_type = 0;
  }
  if(talk_type != '1'){
    talk_type = 1;
    sendkafka('type','1','1');
  }

  var restxt = xmlhttp.responseText;

  var suc_msg = infos[97]+"<a href='#' onclick='continuelword();return false;' style='font-size:14px;'>"+infos[98]+"</a>";

  document.getElementById("res_tip").innerHTML = suc_msg;
  document.getElementById("res_leaveword").style.display = "block";
  document.getElementById("part_leaveword").style.display = "none";
  
  document.getElementById("lw_sb").value = infos[95]; 
  document.getElementById("lw_sb").onclick = function(){try{save_lword('')}catch(e){}};  

  document.getElementById("ly_content").readOnly = false;
  document.getElementById("ly_content").value = "";

  ret = str_to_obj(restxt);
  if(parseInt(ret.guestid)>0)
  {
    myid = ret.guestid;
    try 
    {
      setCookie2("guest_id", myid);
      setFlashGid();
    }catch(e){}
  }
  is_bind = 0;
}

function continuelword()
{
  document.getElementById("part_leaveword").style.display = "block";
  document.getElementById("res_leaveword").style.display = "none";
  document.getElementById("ly_items").innerHTML = UBBCode(UBBEncode(lword_prompt));
  document.getElementById("ly_items").innerHTML += "<table border='0' cellpadding='0' cellspacing='0' class='leaveword_tb'>"+lwordstr_ly + lwordstr_submit+"</table>";
  replace_check_num();
  showImgCode();
}

// 检查输入项
function checkLyInput(inputName)
{
  if(inputName=="email")
  {
    if(!document.getElementById("ly_"+inputName).value.trim().IsEmail())
    {
      alert(infos[109]);
      document.getElementById("ly_"+inputName).focus();
      document.getElementById("lw_sb").disabled = false;
      return false;
    }
  }
  if(inputName=="phone")
  {
    if(!document.getElementById("ly_"+inputName).value.trim().IsTelephone2())
    {
      alert(infos[54]);
      document.getElementById("ly_"+inputName).focus();
      document.getElementById("lw_sb").disabled = false;
      return false;
    }
  }
  if(inputName=="msn")
  {
    if(!document.getElementById("ly_"+inputName).value.trim().IsEmail())
    {
      alert(infos[110]);
      document.getElementById("ly_"+inputName).focus();
      document.getElementById("lw_sb").disabled = false;
      return false;
    }
  }
  return true;
}

//str:  a:1;b:2;c:3
//obj:  obj.a=1,obj.b=2,obj.c=3
function str_to_obj(str)
{
  var tmp  = new Object(); //split by ;
  var tmp2 = new Object(); //split by :
  var ret  = new Object(); //return object
  tmp = str.split(";");
  for(var i=0; i<tmp.length; i++)
  {
    tmp2 = tmp[i].split(":");
    ret[tmp2[0]] = tmp2[1];
  }
  
  return ret;
}

function saveas()
{
  if(lnkover==1 || lnkover==3 || lnkover==100)
  {
    if (myfirst_tempid == '') myfirst_tempid = mytempid;
    try
    {
      var savestyle='<style type="text/css"> <!--body{margin: 0px; padding: 0px 0px 0px 0px; border: 0px;FONT-SIZE: 9pt; FONT-FAMILY: Tahoma;}td { font-family: Tahoma; font-size: 9pt; }p { margin-top:0px;margin-bottom:0px;FONT-SIZE: 9pt; FONT-FAMILY: Tahoma; }.dialog_content{ width:471px; height:276px;border:2px solid #e3ebf8;background:url(http://www.53kf.com/img/dialog_content_bg.gif) 100% 100% no-repeat #fff; word-wrap: break-word; word-break: break-all; font-size:14px;padding-left:5px;padding-top:5px; text-align:left;}--></style>';
      var time=new Date();
      var filename=time.toLocaleDateString();
      filename=filename+" "+cname+".htm";
      if(!!window.ActiveXObject || "ActiveXObject" in window){
        var a=document.createElement("a");
        a.href='http://'+host+'/impl/rpc_download_html.php?company_id='+company_id+'&tempid='+myfirst_tempid+'&lang='+locate+'&message_table='+message_table+'&filename='+UrlEncode(filename);
        a.target="_blank";
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
      }else{
        var winSave=window.open('http://'+host+'/impl/rpc_download_html.php?company_id='+company_id+'&tempid='+myfirst_tempid+'&lang='+locate+'&message_table='+message_table+'&filename='+UrlEncode(filename),'_blank','top=10000');
      }
    }
    catch(e){}
  }
} 

function chatRobot()
{
	try
  {
    var httprequest = createHttpRequest();
    if(httprequest!=null)
    {
      var senddata = "company_id="+company_id+"&tempid="+mytempid+"&chatrobot=1&talk_his_table="+talk_his_table+"&message_table="+message_table;

      var url = "lword.php";
      httprequest.open("POST", url, true);
     // httprequest.setRequestHeader("Content-Length", senddata.length);
      httprequest.setRequestHeader("CONTENT-TYPE", "application/x-www-form-urlencoded");
			httprequest.send(senddata);

      httprequest.onreadystatechange = function()
      {
        if(4==httprequest.readyState)
        {
          if(200==httprequest.status)
          {
                chatrobot = httprequest.responseText;
          }
        }
      }
    }
  }
  catch(e){}
}

// 设置talk_last_time
function set_talk_last_time()
{
	if(company_id<=0 || mytempid<=0) return;
	try
	{
    var httprequest = createHttpRequest();
    if(httprequest!=null)
    {
      var url = "impl/rpc_set_time.php";
      var senddata = "check_id=11917718fe939f3106d35a30074bcd30&company_id="+company_id+"&temp_id="+mytempid+"&talk_his_table="+talk_his_table;

      httprequest.open("POST", url, true);
      //httprequest.setRequestHeader("Content-Length", senddata.length);
      httprequest.setRequestHeader("CONTENT-TYPE", "application/x-www-form-urlencoded");
      httprequest.send(senddata);

      httprequest.onreadystatechange = function()
      {
        if(4==httprequest.readyState)
        {
          if(200==httprequest.status)
          {
           
          }
        }
      }
    }
  }
  catch(e){}
}

// 设置conn_prompt
function set_conn_prompt(cp)
{
	if(company_id<=0 || mytempid<=0) return;
	try
	{
    var httprequest = createHttpRequest();
    if(httprequest!=null)
    {
      var url = "impl/rpc_set_prompt.php";
      var senddata = "check_id=11917718fe939f3106d35a30074bcd30&company_id="+company_id+"&temp_id="+mytempid+"&conn_prompt="+UrlEncode(cp)+"&message_table="+message_table;

      httprequest.open("POST", url, true);
     // httprequest.setRequestHeader("Content-Length", senddata.length);
      httprequest.setRequestHeader("CONTENT-TYPE", "application/x-www-form-urlencoded");
      httprequest.send(senddata);

      httprequest.onreadystatechange = function()
      {
        if(4==httprequest.readyState)
        {
          if(200==httprequest.status)
          {

          }
        }
      }
    }
  }
  catch(e){}
}

// 获取名片
function get_user_card()
{
 try
  {
    var httprequest = createHttpRequest();
    if(httprequest!=null)
    {
      var url = "impl/rpc_user_card.php";
      var senddata = "check_id=11917718fe939f3106d35a30074bcd30&company_id="+company_id+"&guest_id="+myid;

      httprequest.open("POST", url, true);
    //  httprequest.setRequestHeader("Content-Length", senddata.length);
      httprequest.setRequestHeader("CONTENT-TYPE", "application/x-www-form-urlencoded");
      httprequest.send(senddata);

      httprequest.onreadystatechange = function()
      {
        if(4==httprequest.readyState)
        {
          if(200==httprequest.status)
          {
		
			var dom = httprequest.responseXML;

			var workerArray = new Array();
			var list_cnt = 0;

			var rowList = XMLGetNodes(dom, "row");

			var row = XMLGetNode(rowList, 0);
			name = XMLGetNamedAttr(row, "name");
			mobile = XMLGetNamedAttr(row, "mobile");
			email = XMLGetNamedAttr(row, "email");
			phone = XMLGetNamedAttr(row, "phone");
			qq = XMLGetNamedAttr(row, "qq");
			msn = XMLGetNamedAttr(row, "msn");
			company = XMLGetNamedAttr(row, "company");
			addr = XMLGetNamedAttr(row, "addr");

			if(mobile!="") phone = mobile;
			
			set_ly_items_value(name, email, phone, qq, msn, company, addr);
          }
        }
      }
    }
  }
  catch(e){}
}

// 设置部分留言项只读
function set_ly_items_disabled()
{
	if(reg_c.indexOf("name")>-1)
	{
		document.getElementById("ly_name").disabled = true;
	}
	if(reg_c.indexOf("qq")>-1)
	{
		document.getElementById("ly_qq").disabled = true;
	}
	if(reg_c.indexOf("msn")>-1)
	{
		document.getElementById("ly_msn").disabled = true;
	}
	if(reg_c.indexOf("company")>-1)
	{
		document.getElementById("ly_company").disabled = true;
	}
	if(reg_c.indexOf("addr")>-1)
	{
		document.getElementById("ly_addr").disabled = true;
	}
}
//设置留言对象
function set_ly_obj(obj){
    m_lwordObject = obj;
}
// 设置下拉框选项
function setObjectSelectOption(options)
{
    if(select_ground_id != 0){
      m_lwordObject = 'g#' + select_ground_id;
      $('#object_select').append('<option value="g#'+select_ground_id+'">'+select_ground_name+'</option>');
      return;
    }
    if(options.status == 'error'){
        $('#object_select').append('<option value="zdgs">公司</option>');
        m_lwordObject = 'zdgs';
        return;
    }
    if(ly_assign_type == '0' && ly_assign_obj == 'zdfz'){
        m_lwordObject = 'g#' + options[0].group_id;
        for(var i = 0;i<options.length;i++){
            $('#object_select').append('<option value="g#'+options[i].group_id+'">'+options[i].group_name+'</option>');
        }
    }
    if(ly_assign_type == '0' && ly_assign_obj == 'zdkf'){
        m_lwordObject = '0';
        for(var group_id in options){
          if(options[group_id].group_name == undefined){
            continue;
          }
          $('#object_select').append('<option value="0">--------'+options[group_id].group_name+'--------</option>');
          var workers = options[group_id].workers;
          for(var id6d in workers){
                $('#object_select').append('<option value="w#'+workers[id6d].id6d+'">'+workers[id6d].name+'</option>');
            }
        }
    }
    if(ly_assign_type == '1' && ly_assign_obj == 'zdfz'){
        m_lwordObject = 'g#' + options.group_id;
        $('#object_select').append('<option value="g#'+options.group_id+'">'+options.group_name+'</option>');
    }
    if(ly_assign_type == '1' && (ly_assign_obj == 'zdkf' || ly_assign_obj == 'zbkf')){
        m_lwordObject = 'w#' + options.id6d;
        $('#object_select').append('<option value="w#'+options.id6d+'">'+options.name+'</option>');
    }
}

function window_unload()
{
	try{document.cookie = "hz6d_open_talk_"+company_id+"=0";}catch(e){}
	if(m_setTalkLastTime) set_talk_last_time();
}

function first_get()
{
	if(getCookie2("guest_id")!="")
  {
    myid = getCookie2("guest_id");
  }
}

//更换验证码
function replace_check_num(){
    $('#check_img').attr("src","include/ImgCode.php?"+parseInt(10000*Math.random()));
    $('#is_ok').hide();
    $('#ly_check_num').val("");
    check_num_status = 0;
}
//验证码图片显示
function showImgCode(){
    $("#ly_check_num").click(function(evt){
      stopPro(evt);
    }).focus(function(){
      imgCodeVisible();
    });
    
    $("#check_img").click(function(evt){
      stopPro(evt);
    });
    
    $("#refresh_img").click(function(evt){
      stopPro(evt);
      replace_check_num();
      imgCodeVisible();
    });

    $(document).click(function(){
      $("#check_img").css('visibility','hidden');             
    });
}
function stopPro(evt){
    var evt = evt ? evt : (window.event ? window.event : null);
    evt.stopPropagation ? evt.stopPropagation() : (evt.cancelBubble=true);
}
function imgCodeVisible(){
    var check_img_top = parseInt($("#ly_check_num").parent().position().top - $("#ly_check_num").position().top - 116);
    $("#check_img").css("top",check_img_top);
    $("#check_img").css('visibility','visible');
}
/* 验证码 开始*/
var is_bind = 0;
function return_check_status(){
    if(!is_bind){
        is_bind = 1;
        var input_dom = $('#ly_check_num');   
      //返回验证码状态   
        input_dom.keyup(function(){ 
            if(input_dom.val().length == 4){
                $.ajax({
                    type: "GET",
                    url: "include/check_num_status.php?check_num="+input_dom.val(),
                    success: function(msg){
                        $('#is_ok').show();
                        if(msg == 'right'){
                            check_num_status = 1;
                            $('#is_ok').attr("src","img/check_right.gif");
                        }else{
                            check_num_status = 0;
                            $('#is_ok').attr("src","img/check_wrong.gif");
                        }
                    }
                });  
            }else{
                check_num_status = 0;
                $('#is_ok').attr("src","").hide();               
            }
        });   
    }  
}
/* 验证码 结束*/
// 获取cookie
function getCookie3(name)
{
  var search = name+"=";
  if(document.cookie.length>0)
  {
    offset = document.cookie.indexOf(search);
    if(offset!=-1)
    {
      offset += search.length
      end = document.cookie.indexOf(";", offset)
      if(end==-1)
      {
        end = document.cookie.length;
      }
      return decodeURI(document.cookie.substring(offset, end));
    } 
  }
  return "";
}
</script>
<script for=document event=onfocusout>
  imfocus = 0;
</script>
<script for=document event=onfocusin>
  imfocus = 1;
</script>

<script type="text/javascript">
  setTimeout(function(){
    try{
      if(m_startInitial==false){
        insertErrorInfos2("2", "initial", "call initial() failed!"+talkpage);
      }
    }catch(e){}
  }, 8000);
</script>
<script type="text/javascript">
//计算售后服务弹出层上移高度
function set_margin(n){
  try{
  	var top = -(38+n*95)/2;
  	document.getElementById('sever_select').style.marginTop = top+'px';
  }catch(e){}
}

//切换售后服务图片
function mouseOver(ele,src){
	ele.getElementsByTagName('img')[0].src=src
}
function mouseOut(ele,src){
	ele.getElementsByTagName('img')[0].src=src
}
</script>
<script type="text/javascript" FOR="snapShot_obj" EVENT="OnSend(a,b,c)">ocx_callback(a,b,c);</script>
<script src="min/?g=.js?kh_2017051706" type="text/javascript"></script>
﻿<style>
.dialog_content{
	overflow: auto;
}
#robot_input_tips{
	z-index: 1000; position: absolute; cursor: pointer; padding: 10px 0; bottom: 85px; left: 20px; background-color: #FFF; border: 1px solid #6f90ca; word-break: break-all; word-wrap: break-word;
}
#robot_input_tips p{
	margin: 0; padding: 0 10px; height: 25px; line-height: 25px; overflow: hidden;
}
.greetings_init ul li{
	line-height: 20px;
}
.greetings_init ul li a{
	color: #1A8ECE;
}
.greetings_init ul li a:hover{
	color: #1A8ECE;
}
.greetings_init ul li span{
	color: #1ABECE;
}
/*气泡样式*/
#new_box-main-l-disp{
	font: 12px "Microsoft Yahei",simsun,sans-serif; color: #333;
}
#new_box-main-l-disp .new_mnkf_dialog_send{
	text-align: right;
}
#new_box-main-l-disp .new_mnkf_dialog_send, #new_box-main-l-disp .new_mnkf_dialog_receive{
	margin:7px 30px 0;
}
#new_box-main-l-disp .new_mnkf_dialog_send .msgbox{
	background: none repeat scroll 0 0 #EFF3FC;
}
#new_box-main-l-disp .new_mnkf_dialog_receive .dialog_arrow{
	background-color: #F3F3F3; left: -8px; top: 0;
}
#new_box-main-l-disp .new_mnkf_dialog_send .msgbox{
	border-radius: 7px; border-top-right-radius: 0; display: inline-block; max-width: 1000px; padding: 10px 15px; position: relative; text-align: left; word-break: break-all; word-wrap: break-word; font-size:12px;
}
 #new_box-main-l-disp .new_mnkf_dialog_send em{
	border-color: #EFF3FC #FFFFFF #FFFFFF #EFF3FC; border-style: solid; border-width: 4px 4px; height: 0; width: 0;
}
 #new_box-main-l-disp .new_mnkf_dialog_receive em{
	border-color: #D7EEF6 #D7EEF6 #FFFFFF #FFFFFF; border-style: solid; border-width: 4px 4px; height: 0; width: 0;
}
#new_box-main-l-disp .new_mnkf_dialog_send .time, #new_box-main-l-disp .new_mnkf_dialog_receive .time{
	font-weight: normal; font-size: 12px; line-height: 24px; color: #999;
}

#new_box-main-l-disp .new_mnkf_dialog_receive .msgbox{
	background: none repeat scroll 0 0 #D7EEF6;
}
#new_box-main-l-disp .dialog_arrow{
	bottom: 6px; display: block; height: 11px; overflow: hidden; position: absolute; width: 7px;
}

#new_box-main-l-disp .new_mnkf_dialog_send .dialog_arrow{
	right: -8px; top: 0;
}

#new_box-main-l-disp .new_mnkf_dialog_receive .msgbox{
	border-radius: 7px; border-top-left-radius: 0; display:inline-block; max-width: 1000px; padding: 10px 15px; position: relative; text-align: left; word-break: break-all; word-wrap: break-word; font-size: 12px;
}


#new_box-main-l-disp p.answer_tickling, #new_box-main-l-disp p.answer_reason{
	font:normal 12px/14px Arial,"宋体"; margin: 5px; padding-left: 10px; text-align: right; position: relative; bottom: -5px;
}
#new_box-main-l-disp p.answer_reason label{
	margin-right: 5px;
}
 #new_box-main-l-disp p.answer_reason input{
	position: relative; top: 2px;
}
#new_box-main-l-disp p.answer_tickling img{
	width: 18px; height: 18px; position: relative; top: 5px; margin-right: 3px;
}
#new_box-main-l-disp p.answer_tickling a:hover{
	text-decoration: none; cursor: pointer; color: #333;
}
#new_box-main-l-disp p.answer_tickling a.answer_helpful{
	margin:0 10px; background:url(../minkh/style/good-mark.png?201405141515) no-repeat 13px 0; width: 30px; height: 16px; display: inline-block; text-align: left;
}
#new_box-main-l-disp p.answer_tickling a.answer_useless{
	background:url(../minkh/style/bad-mark.png?201405141515) no-repeat 13px 0; width: 30px; height: 16px; display: inline-block; text-align: left;
}
</style>
<div class="dialog_content" id="new_box-main-l-disp" style="display:none;">
	<div class="robot_images" style="float:left;">
		<img src="" width="64" height="64" />
	</div>
	<div id="greetings_init" class="greetings_init" style="float:left;margin-left:10px;">
		<span style="display:block;">您好！我是智能机器人 </span>
		<span style="display:block;margin-top:10px;"></span>
				<ul style="padding:0;margin:0;list-style:none;">
					</ul>
	</div>
	<div style="clear:both;"></div>
</div>
<div id="robot_input_tips" style="display:none;"></div>
<!-- 机器人的新界面代码开始 -->
<script type="text/javascript">
	var robot_id = "";
	var robot_prompt = "";
	var robot_un_prompt = "";
	var robot_name = "";
	var robot_icon_url = "";
	var com_id = "70831548";
	var robot_dialog = document.getElementById("new_box-main-l-disp");
	var parent_dialog = document.getElementById("box-main-l-disp").parentNode;
	var part_input = document.getElementById("part_input_content");
	var input_area = document.getElementById("input1");
	var robot_input_tips = document.getElementById("robot_input_tips");

	if (zsk_state == 1 && online_cnt == 0 && m_robid != "") {
		var now = new Date();
	    var exitTime = now.getTime() + 5000;
		input_area.onkeyup = function() {
			now = new Date();
			if (now.getTime() > exitTime) {
				var word = input_area.value;
				if (word != "") {
					get_tips(word);
				} else {
					robot_input_tips.style.display = "none";
				}
				exitTime = now.getTime() + 1000;
			}
		};
		document.getElementById("box-main-l-disp").style.display = "none";
		parent_dialog.appendChild(robot_dialog);
		part_input.parentNode.insertBefore(robot_input_tips, part_input);
		document.getElementById("new_box-main-l-disp").style.display = "block";
	}

	function robot_main(question) {
		$.ajax({
			url: "fenci/robot_fenci.php",
			dataType:"json",
			data: {cmd: "UQR", com_id: com_id, robot_id: robot_id, question: question},
			success: function(result) {
				if (result != null && result["q_id"] != "0") {
					var robot_answer = result["answer"];
					var q_id = result["q_id"];
					show_robot_dialog(q_id, question, robot_answer);
				} else {
					show_robot_dialog("0", question, robot_un_prompt);
				}
			}
		});
	}
	
	//获得输入提示
	function get_tips(word) {
		$.ajax({
			url: "fenci/robot_fenci.php",
			data: {cmd: "ACQ", com_id: com_id, robot_id: robot_id, word: word},
			success: function(result) {
				var result = eval("(" + result + ")");
				var rows = result.rows;
				var q_list = "";
				for (var i = 0; i < result.total; i++) {
					var question = rows[i]["question"];
					var answer = rows[i]["answer"];
					var q_id = rows[i]["q_id"];
					q_list = q_list + "<p onclick=\"show_robot_dialog('" + q_id + "', '" + question + "', '" + answer + "')\">" + question + "</p>";
				}
				if (q_list != ""){
					robot_input_tips.innerHTML = q_list;
					robot_input_tips.style.display = "block";
				} else {
					robot_input_tips.style.display = "none";
				}
			}
		});
	}
	
	//用户反馈接口
	function customer_response(q_id, val) {
		if (q_id != "0") {
			$.ajax({
				url: "fenci/robot_fenci.php",
				data: {cmd: "CR", com_id: com_id, robot_id: robot_id, q_id: q_id, val: val},
				success: function(result) {
					;
				}
			});
		}
	}
	
	//对话接口
	function show_robot_dialog(q_id, question, answer) {
	    stop_beforeunload = 1;//阻止clickc触发IE beforeunload事件
		customer_response(q_id, 5);
		question_dialog(question);

		$.ajax({
			url: "fenci/robot_fenci.php",
			data: {cmd: "GT", com_id: com_id, q_id: q_id},
			dataType:"json",
			success: function(rela_ques) {
				answer_dialog(q_id, answer, rela_ques);
				if(chatrobot==1) chatRobot(); //统计机器人次数
				clear_inner();
				scrollToBottomRobot();
				if(origin_type == '1'){
				    sendkafka('type','1','-1',origin_time);
				    origin_type = 0;
				}
				if(talk_type != 2){
					talk_type = 2;
					sendkafka('type','1','1');
				}
			}
		});
	}

	//追加
	function insertAfter(newElement, targetElement){
		var parent = targetElement.parentNode;
		if (parent.lastChild == targetElement){
			parent.appendChild(newElement);
		}
		else{
			parent.insertBefore(newElement, targetElement.nextSibling);
		}
	}
	//问题
	function question_dialog(question){
		var robot_dialog_lastchild = robot_dialog.lastChild,
			new_mnkf_dialog_send = document.createElement('div');
			new_mnkf_dialog_send.className = 'new_mnkf_dialog_send';
			if(khchat_style != 1){
				new_mnkf_dialog_send.innerHTML = '<p class="time">我&nbsp;说：</p><div class="msgbox">'+question+'<em class="dialog_arrow"></em></div>';
			}else{
				new_mnkf_dialog_send.innerHTML = '<img class="head_gk" src="style/chat/kfdz/img/head_gk.png"><span class="time gk_name">我&nbsp;19:16</p><div class="msgbox">'+question+'<em class="dialog_arrow"></em></div>';
			}
		insertAfter(new_mnkf_dialog_send, robot_dialog_lastchild);
	}
	//答案
	function answer_dialog(q_id, answer, rela_ques){
		var robot_dialog_lastchild = robot_dialog.lastChild,
			new_mnkf_dialog_receive = document.createElement('div');
			new_mnkf_dialog_receive.className = 'new_mnkf_dialog_receive';
			if(q_id != '0'){
				var html = '';
				if(rela_ques != ''){
					html = html + '<p>你可能问：</p><ul style="padding:0;margin:0;list-style:none;">';
					for(var i=0;i<rela_ques.length;i++){
						html = html + '<li><span>&gt;&nbsp;</span><a onclick="show_robot_dialog(\''+rela_ques[i].id+'\', \''+rela_ques[i].question+'\',\''+rela_ques[i].answer+'\')" style="cursor:pointer">'+rela_ques[i].question+'</a></li>';
					}
					html = html + '</ur>';
				}
				if(khchat_style != 1){
					new_mnkf_dialog_receive.innerHTML = '<p class="time">'+robot_name+'&nbsp;说：</p><div class="msgbox" id="'+q_id+'">'+answer+'<em class="dialog_arrow"></em><p class="answer_tickling">此回答对您有帮助吗？<a class="answer_helpful" value="4">有</a><a class="answer_useless">无</a><span style="display:none;">感谢您的反馈&nbsp;&nbsp;<img src="../minkh/style/check_alt.png?201405141515" /></span></p><p class="answer_reason" style="display:none;">请选择原因：<input type="radio" name="answer_resion_btn" value="0"/><label>简单</label><input type="radio" name="answer_resion_btn" value="1" /><label>复杂</label><input type="radio" name="answer_resion_btn" value="2"/><label>无关</label><input type="radio" name="answer_resion_btn" value="3"/><label>其他</label></p>'+html+'</div></div>';
				}else{
					new_mnkf_dialog_receive.innerHTML = '<img class="head_kf" src="../img/manage/robot_icon.png"><span  class="time kf_name">机器人'+robot_name+'&nbsp;19:18</p><div class="msgbox" id="'+q_id+'">'+answer+'<em class="dialog_arrow"></em><p class="answer_tickling">此回答对您有帮助吗？<a class="answer_helpful" value="4">有</a><a class="answer_useless">无</a><span style="display:none;">感谢您的反馈&nbsp;&nbsp;<img src="../minkh/style/check_alt.png?201405141515" /></span></p><p class="answer_reason" style="display:none;">请选择原因：<input type="radio" name="answer_resion_btn" value="0"/><label>简单</label><input type="radio" name="answer_resion_btn" value="1" /><label>复杂</label><input type="radio" name="answer_resion_btn" value="2"/><label>无关</label><input type="radio" name="answer_resion_btn" value="3"/><label>其他</label></p></div></div>';
				}
			}else{
				new_mnkf_dialog_receive.innerHTML = '<p class="time">'+robot_name+'&nbsp;说：</p><div class="msgbox" id="'+q_id+'">'+answer+'<em class="dialog_arrow"></em></div></div>';
			}
		insertAfter(new_mnkf_dialog_receive, robot_dialog_lastchild);
	}
	//清空
	function clear_inner(){
		robot_input_tips.innerHTML = '';
		robot_input_tips.style.display = 'none';
		input_area.value = '';
	}
	// 滚动条置底
	function scrollToBottomRobot(){
		try{
			setTimeout(function(){
				document.getElementById('new_box-main-l-disp').scrollTop = document.getElementById('new_box-main-l-disp').scrollHeight;
			}, 1);
		}catch(e){}
	}
	$(function(){
		$('.answer_tickling > a').live('click', function(event){
			var event = event || window.event,
				target = event.target || event.srcElement;
			if(target.className == 'answer_helpful'){
				var answer_reason_val = $(this).attr('value'),
					answer_id = $(this).parent().parent().attr('id');
				customer_response(answer_id, answer_reason_val);
				$(this).hide();
				$(this).siblings('a').hide();
				$(this).siblings('span').show();
			}else if(target.className == 'answer_useless'){
				$(this).parent().siblings('p').show();
				scrollToBottomRobot();
			}
		});
		$('.answer_reason > input[type="radio"]').live('click', function(event){
			var event = event || window.event,
				answer_reason_val = $(this).val(),
				answer_id = $(this).parent().parent().attr('id');
			$(this).parent().hide();
			$(this).parent().siblings('p').find('a').hide();
			$(this).parent().siblings('p').find('span').show();
			customer_response(answer_id, answer_reason_val);
		});
		$('#robot_input_tips').find('p').live('mouseover mouseout', function(event){
			var event = event || window.event;
			if (event.type == 'mouseover') {
				$(this).css('background-color','#F2F2F2');
			} else {
				$(this).css('background-color','#FFF');
			}
		})
	});
</script>
<!-- 机器人的新界面代码结束 --></html>
