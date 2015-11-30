@extends('app.header')

<div class="banner">
  <div style="margin-top:0px;">
	</br>
	
    <h2 >{{$name}}---你是<strong style="color:black">{{$person}}</strong>，天啦！！！</h2>
    </br>
  </div>
  <div >
    <img src="/images/lyb/{{$photo}}.jpg" alt=""/>
  
  </div>
  <div class="transform am-container">
    <p>{{$description}}</p>
    <form class="am-form">
      <div class="am-form-group">
        <button type="button" id="button_submit"  class="am-btn am-btn-success" onclick="windows.location.href='/'">玩玩其他</button>
        <button type="button" id="button_submit"  class="am-btn am-btn-success" onclick="windows.location.href='/'">再来一次</button>
        
      </div>
    </form>
  </div>
</div>

@extends('app.footer')