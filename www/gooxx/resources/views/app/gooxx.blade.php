@extends('app.header')

<div class="banner">
  <div style="margin-top:0px;">
	</br>
	</br>
    <h2>测测你是《琅琊榜》里的哪个人物？</h2>
    <h3> 一卷风云琅琊榜,囊尽天下奇英才</h3>
  </div>
  <div >
    <img src="/images/lyb/lyb.png" alt=""/>
  </div>
  <div class="transform am-container">
    <form class="am-form">
      <div class="am-form-group">
        <input type="text" id="input_name" class="transform-input" placeholder="输入姓名，例如：周星驰"  /> 
        </br>
        
        <button type="button" id="button_submit"  class="am-btn am-btn-success" onclick="commit()">开始测试</button>
        
      </div>
    </form>
  </div>
</div>

@extends('app.footer')