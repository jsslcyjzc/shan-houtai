@extends('admin.index')


@section('page')
	
@endsection


@section('am')

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
                        <span class="am-icon-code"></span>商品修改
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <i class="am-icon-search"></i>
                                <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
                        </div>
                    </div>

                </div>
                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">


                        <div class="am-u-sm-12 am-u-md-9">

                            <form class="am-form am-form-horizontal" action="/goods/{{$goods->id}}" role="form" method="post" enctype="multipart/form-data">
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">商品标题</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-title" placeholder="请输入您要用的标题" name="title" value="{{$goods->title}}">
                                        <small>请输入您的标题</small>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">商品价格</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-price" placeholder="请输入您要用的标题" name="price" value="{{$goods->price}}">
                                        <small>请输入您的标题</small>
                                    </div>
                                </div>
                                

                                <div class="am-form-group">
                                    <label for="user-photo" class="am-u-sm-3 am-form-label">图片添加</label>
                                    <input type="file" name="" multiple="" id="user-pic" class="am-input-sm" name="pic">
                                </div>

                                  <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">文章内容</label>
                                     
                                    <script id="editor" type="text/plain" name="content" style="width:780px;height:500px;margin-left: 200px;">{!!$goods->content!!}</script>
                                </div>

                                 {{csrf_field()}}
                                 {{method_field('PUT')}}

                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit" class="am-btn am-btn-primary">修改</button>

                                        <button type="button" class="am-btn am-btn-primary">重置</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>

            </div>

 <script>
    var ue = UE.getEditor('editor',{
        // toolbars: [
        //     ['fullscreen', 'source', 'undo', 'redo', 'bold']
        // ]
    });
</script> 




@endsection