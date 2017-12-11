@extends('admin.index')


@section('page')
	
@endsection

@section('am')
    @if(session('msg'))
    <div class="alert alert-info col-md-12 bg-primary">
        {{session('msg')}}
    </div>
    @endif
    <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 尺寸添加
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                        </div>
                    </div>
                </div>
                 
                 

                <div class="tpl-block">
                    
                    <div class="am-g">
                        <div class="am-u-sm-12">
                        	
                            <form class="am-form">
                               <div id="forms" class="mt10">
					            <div class="box_center">
					              <form action="__CONTROLLER__/saveSize" method="post" class="jqtransform" >
					               <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
					                 <tr >
					                  <td class="td_right">选择产品类别</td>
					                  <td>
					                    <span class="fl">
					                      <div class="select_border"> 
					                        <div class="select_containers "> 
					                        <select name="protype" class="select" >
					                          <volist name="type" id="v"> 
					                             <option value="<{$v.ptid}>"><{$v.ptname}></option> 
					                          </volist>
					                        </select> 
					                        </div> 
					                      </div> 
					                    </span>
					                  </td>
					                 </tr>
					                 <tr>
					                  <td class="td_right">尺寸名称</td>
					                  <td class=""> 
					                    <input type="text" name="size" class="input-text lh30" size="40" style="width: 110px;">
					                  </td>
					                  
					                </tr>
					                
					                 
					                 <tr>
					                   <td class="td_right">&nbsp;</td>
					                   <td class="">
					                     <input type="submit" name="button" class="btn btn82 btn_save2" value="保存"> 
					                    <input type="reset" name="button" class="btn btn82 btn_res" value="重置"> 
					                   </td>
					                 </tr>
					               </table>
					               </form>
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
.prev,.next,.num,.current{
  display: block;
  float:left;
  padding: 4px 12px;
  line-height: 20px;
  text-decoration: none;
  background-color: #fff;
  background: url('__PUBLIC__/Mange/images/bottom_bg.png') 0px 0px;
 border: 1px solid #d3dbde;
 border-left-width: 0;
 color: #08c;
}
.prev:hover,.next:hover,.num:hover,.current:hover{
  background-color: red;

}
.am-g{
	font-size: 15px;
}
.am-form select{
	font-size: 13px;
}
</style>
@stop

@section('js')

<script type="text/javascript">
      $(function(){  
        $(".list_table").colResizable({
          liveDrag:true,
          gripInnerHtml:"<div class='grip'></div>", 
          draggingClass:"dragging", 
          minWidth:30
        }); 
        
      }); 
   </script>

@stop

