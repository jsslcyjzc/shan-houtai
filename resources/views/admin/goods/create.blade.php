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
                    </div>
                </div>
            </div>
                 
                 

  <div class="tpl-block">
      
      <div class="am-g">
          <div class="am-u-sm-12">
              
              <form class="am-form" role="form" action="/goods" method="post" enctype="multipart/form-data">
                 <div class="container">
                  <div id="forms" class="mt10">
                          <div class="box">
                              <div class="box_center">
                                 <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
                                   <tr>
                                    <td class="td_right"></td>
                                    <td class=""> 
                                      <label>产品名称</label>
                                      <input type="text" name="title" class="input-text lh10" size="20">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="td_right"></td>
                                    <td class="">
                                    <label>价格</label> 
                                      <input type="text" name="price" class="input-text lh30" size="40">
                                    </td>
                                    
                                  </tr>
                                  <tr >
                                    <td class="td_right"></td>
                                    <td class="">
                                      <label>库存</label>
                                     <input type="text" class="form-control" name="kucun"> 
                                    </td>
                                   </tr>
                                   
                                   <tr>
                                    <td class="td_right"></td>
                                   <td>
                                      <table id="addfile">
                                         <tr>
                                            <td>
                                              <label>商品图片</label>
                                               <input type="file" class="form-control" name="pic[]" multiple>
                                            </td>
                                         </tr>
                                      </table>
                                   </td>
                                  </tr>

                                   <tr>
                                    <td class="td_right"></td>
                                    <td>
                                      <label>商品详情</label>
                                      <script id="editor" type="text/plain" name="content" style="width:800px;height:500px;"></script>
                                    </td>
                                   </tr>
                                  {{csrf_field()}}
                                   <tr>
                                     <td class="td_right">&nbsp;</td>
                                     <td class="">
                                       <button type="submit" class="btn btn-primary" style="min-width: 100px;background: #004885;color: #fff;">添加</button>
                                       <button type="reset" class="btn btn-primary" style="min-width: 100px;background: #004885;color: #fff;">重置</button>
                                     </td>
                                   </tr>
                                 </table>
                              </div>
                          </div>
                       </div> 
                     </div> 
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

