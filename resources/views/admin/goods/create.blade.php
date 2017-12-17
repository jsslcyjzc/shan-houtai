@extends('admin.index')


@section('page')
    
@endsection

@section('am')

@if(session('msg'))
        <div class="alert alert-info col-md-12 bg-primary">
            {{session('msg')}}
        </div>
    @endif
 <script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>

    @if(session('msg'))
    <div class="alert alert-info col-md-12 bg-primary">
        {{session('msg')}}
    </div>
    @endif
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 商品添加
        </div>
        <div class="tpl-portlet-input tpl-fz-ml">
            <div class="portlet-input input-small input-inline">
              <div class="input-icon right">
                <i class="am-icon-search"></i>
                    <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
            </div>
        </div>
    </div>
                 
                 

  <div class="tpl-block">
      
      <div class="am-g">
          <div class="tpl-form-body tpl-form-line">
              
              <form class="am-form tpl-form-line-form" role="form" action="/goods" method="post" enctype="multipart/form-data">
                  <!-- 产品名称 start -->
                  <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">产品名称 <span class="tpl-form-line-small-title">Title</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入产品名称" name="title">
                            <small>请填写产品名称10-20字左右。</small>
                        </div>
                  </div>
                  <!-- 产品名称 end -->
                  <!-- 产品价格 start -->
                  <div class="am-form-group">
                        <label for="user-phone" class="am-u-sm-3 am-form-label">产品价格 <span class="tpl-form-line-small-title">price</span></label>
                        <div class="am-u-sm-9">
                          <input type="text" class="tpl-form-input" placeholder="产品价格" name="price" id="user-price">
                          <small>请填写产品价格。</small>
                        </div>
                  </div>
                  <!-- 产品价格 end -->
                  <!-- 产品库存 start -->
                  <div class="am-form-group">
                        <label for="user-phone" class="am-u-sm-3 am-form-label">产品库存 <span class="tpl-form-line-small-title">kucun</span></label>
                        <div class="am-u-sm-9">
                          <input type="text" class="tpl-form-input" placeholder="产品库存" name="kucun" id="user-kucun">
                          <small>请填写产品库存。</small>
                        </div>
                  </div>
                  <!-- 产品库存 end -->
                  <!-- 商品图片 start -->
                  <div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">商品图片 <span class="tpl-form-line-small-title">Images</span></label>
                        <div class="am-u-sm-9">
                            <div class="am-form-group am-form-file">
                                <div class="tpl-form-file-img">
                                    <img id="xmTanImgtwo"/>
                                    <div id="xmTanDivtwo"></div>
                                </div>
                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                    <i class="am-icon-cloud-upload"></i> 添加商品图片
                                    <input id="doc-form-file" type="file" multiple="" name="pic" id="xdaTanFileImgtwo" onchange="xmTanUploadImgtwo(this)" accept="image/*"/>

                                </button>

                                <script type="text/javascript">            
                                        //判断浏览器是否支持FileReader接口
                                        if (typeof FileReader == 'undefined') {
                                            document.getElementById("xmTanDivtwo").InnerHTML = "<h1>当前浏览器不支持FileReader接口</h1>";
                                            //使选择控件不可操作
                                            document.getElementById("xdaTanFileImgtwo").setAttribute("disabled", "disabled");
                                        }

                                        //选择图片，马上预览
                                        function xmTanUploadImgtwo(obj) {
                                            var file = obj.files[0];
                                            
                                            console.log(obj);console.log(file);
                                            console.log("file.size = " + file.size);  //file.size 单位为byte

                                            var reader = new FileReader();

                                            //读取文件过程方法
                                            reader.onloadstart = function (e) {
                                                console.log("开始读取....");
                                            }
                                            reader.onprogress = function (e) {
                                                console.log("正在读取中....");
                                            }
                                            reader.onabort = function (e) {
                                                console.log("中断读取....");
                                            }
                                            reader.onerror = function (e) {
                                                console.log("读取异常....");
                                            }
                                            reader.onload = function (e) {
                                                console.log("成功读取....");

                                                var img = document.getElementById("xmTanImgtwo");
                                                img.src = e.target.result;
                                                //或者 img.src = this.result;  //e.target == this
                                            }

                                            reader.readAsDataURL(file)
                                        }
                                    </script>
                            </div>

                        </div>
                    </div>
                  <!-- 商品图片 end -->
                  <!-- 商品详情 start -->
                  <div class="am-form-group">
                        <label for="user-email" class="am-u-sm-3 am-form-label">商品详情 <span class="tpl-form-line-small-title">particulars</span></label>
                        <script id="editor" type="text/plain" name="content" style="width:750px;height:500px;float: left;margin-left: 240px;margin-top: -20px;"></script>
                        <label for="user-email" class="am-form-label" style="margin-left: 15px;">商品详情</label>
                        <script id="editor" type="text/plain" name="content" style="width:800px;height:500px;"></script>
                  </div>
                  <!-- 商品详情 end -->


                  {{ csrf_field() }}



                  <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">添加</button>
                            <button type="reset" class="am-btn am-btn-primary tpl-btn-bg-color-success">重置</button>
                        </div>
                  </div>
                    <style>
                        .am-form-group .am-u-sm-push-3 button{
                            font-size: 15px;
                        }
                    </style>

              </form>                             
          </div>
       </div>
  </div>
   <div class="tpl-alert"></div>
</div>
@endsection


@section('css')
  <style type="text/css">
    .tpl-block{
        font-size: 15px;
    }
    .am-form select{
        height: 35px;
        font-size: 13px;
        width: 64px;
    }
  </style>
@stop

@section('js')

<script type="text/javascript">
       window.onload=function(){
          var dz=document.getElementsByName("status");
          var zk=document.getElementById("zk");

          for(var i=0;i<dz.length;i++){
             dz[i].onchange=function(){
                 if(dz[0].checked==true){
                    zk.disabled=false;
                 }else{
                    zk.disabled=true;
                 }
             }
          }

          var tab=document.getElementById("addfile");
          var add=document.getElementById("add");
          var del=document.getElementById("del");
          add.onclick=function(){
             if(tab.children.length>4){
              return false;
             }
             var tr=document.createElement("tr");
             tr.innerHTML="<td><input type='file' name='file[]' class='input-text lh30' size='10'></td>";

             tab.appendChild(tr);
          }
          del.onclick=function(){
             if(tab.children.length<=1){
                return false;
             }
             var last=tab.lastElementChild || tab.lastChild;
             tab.removeChild(last);
          }
          var type=document.getElementById("type");
          var t_children=type.children;
          var len=t_children.length;
          var typeId=null;
          var size=document.getElementById("size");
          var size_info="";
          type.onchange=function(){
              size_info="<option value='0'>请选择</option>";
             for(var i=0;i<len;i++){
                if(t_children[i].selected==true){
                    typeId=t_children[i].value;
                }
             }
            $.ajax({
               "type":"get",
               "url":"__CONTROLLER__/addSize",
               "data":{
                   "typeid":typeId
               },
               "dataType":"json",
               "success":function(data){
                  for(var i=0;i<data.length;i++){
                      size_info+="<option value='"+data[i].psid+"'>"+data[i].psname+"</option>"; 
                  }
                 size.innerHTML=size_info;
               }
            });
          }
       }
    </script>
  <script>
    var ue = UE.getEditor('editor',{
        // toolbars: [
        //     ['fullscreen', 'source', 'undo', 'redo', 'bold']
        // ]
    });
</script> 
@stop

