<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="GBK">
  <title>爱因斯坦奇幻之旅</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="alternate icon" type="image/png" href="/i/favicon.png">
  <link rel="stylesheet" href="/css/amazeui.min.css"/>
  <link rel="stylesheet" href="/css/app.css"/>
  
  <script language="javascript" type="text/javascript">
  
		function commit() {
				target=document.getElementById('input_name');
				var name= target.value;
				//alert(name);
				var url = "http://www.qiaokewang.com/test/?name=" + escape(name);
				window.location.href = url;
		}
		
		/*
		function commit(){
				target=document.getElementById('input_name');
				var input_name= target.value;
   			$.ajax({
            		//提交数据的类型 POST GET
           			 type:"POST",
            		//提交的网址
           			 url:"/test/",
            		//提交的数据
            		data:{name:"hello"},
            		//返回数据的格式
            		datatype: "text",//"xml", "html", "script", "json", "jsonp", "text".
            	
            		//调用执行后调用的函数
           		 complete: function(XMLHttpRequest, textStatus){
               		alert(textStatus);
               		window.location.href = "/test/";
                		//HideLoading();
           			 },
            		//调用出错执行的函数
            		error: function(){
                			//请求出错处理
           			 }         
         });

  }
  */
</script>


<script>
/*
$(document).ready(function(){
  $("button").click(function(){
    $.post("/test/",
    {
      name:"Donald Duck",
      city:"Duckburg"
    },
    function(data,status){
    	//escape()
      alert("数据：" + data + "\n状态：" + status);
    });
  });
});
*/
</script>


</head>
<body>


<!-- banner -->
