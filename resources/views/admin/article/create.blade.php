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
                        <span class="am-icon-code"></span>文章添加
                    </div>

                </div>
                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">


                        <div class="am-u-sm-12 am-u-md-9">

                            <form class="am-form am-form-horizontal" action="/article" role="form" method="post" enctype="multipart/form-data">
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">文章标题</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-name" placeholder="请输入您要写的标题" name="title" style="font-size: 15px;">
                                    </div>
                                </div>
                                

                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">文章头图</label>
                                    <div class="am-u-sm-9">
                                        <input type="file" id="user-file" class="am-input-sm" name="pic">

                                    </div>
                                </div>


                                <div class="am-form-group">
                                    <label for="user-email" class="am-form-label" style="margin-left: 15px;">文章内容</label>
                                    <script id="editor" type="text/plain" name="content" style="width:800px;height:500px;"></script>
                                </div>
                                 
                                 {{csrf_field()}}

                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit" class="am-btn am-btn-primary">保存</button>

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