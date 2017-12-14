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
            <span class="am-icon-code"></span>文章修改
        </div>
        <div class="tpl-portlet-input tpl-fz-ml">
            <div class="portlet-input input-small input-inline">
                <div class="input-icon right">
                    <i class="am-icon-search"></i>
                    <input type="text" class="form-control form-control-solid" placeholder="搜索..."> 
                </div>
            </div>
        </div>
    </div>
    <div class="tpl-block ">
        <div class="am-g tpl-amazeui-form">
            <div class="am-u-sm-12 am-u-md-9">

                <style>
                    .am-form-group .am-u-sm-9 input{
                        font-size: 15px;
                    }
                </style>

                <form class="am-form am-form-horizontal" action="/article/{{$article->id}}" role="form" method="post" enctype="multipart/form-data">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">用户标题</label>
                        <div class="am-u-sm-9">
                            <input type="text" id="user-title" placeholder="请输入您要用的标题" name="title" value="{{$article->title}}">
                            <small>请输入您的标题</small>
                        </div>
                    </div>



                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">文章作者</label>
                        <div class="am-u-sm-9">
                            <input type="text" id="user-author" placeholder="请输入文章作者的名字" name="author" value="{{$article->author}}">
                            <small>请输入文章作者的名字</small>
                        </div>
                    </div>


                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">创建时间</label>
                        <div class="am-u-sm-9">
                            <input type="text" id="user-time" placeholder="请输入文章的创建时间" name="time" value="{{$article->time}}">
                            <small>请输入文章的创建时间</small>
                        </div>
                    </div>


                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">副标题</label>
                        <div class="am-u-sm-9">
                            <input type="text" id="user-contop" placeholder="请输入文章的副标题" name="contop" value="{{$article->contop}}">
                            <small>请输入文章的副标题</small>
                        </div>
                    </div>
                    

                    <div class="am-form-group">
                        <label for="user-pic" class="am-u-sm-3 am-form-label">文章照片</label>
                        <div class="am-form-group am-form-file">
                            <div class="tpl-form-file-img" style="margin-left: 20px;">
                                <img id="xmTanImg" src="{{$article->pic}}" />
                                <div id="xmTanDiv"></div>

                            </div>
                            <button type="button" class="am-btn am-btn-danger am-btn-sm" style="margin-left: 20px;">
                            <i class="am-icon-cloud-upload"></i> 添加封面图片
                            <input id="doc-form-file" type="file" multiple="" name="pic" id="xdaTanFileImg" onchange="xmTanUploadImg(this)" accept="image/*"/>

                            </button>
                        </div>
                        <script type="text/javascript">            
                            //判断浏览器是否支持FileReader接口
                            if (typeof FileReader == 'undefined') {
                                document.getElementById("xmTanDiv").InnerHTML = "<h1>当前浏览器不支持FileReader接口</h1>";
                                //使选择控件不可操作
                                document.getElementById("xdaTanFileImg").setAttribute("disabled", "disabled");
                            }

                            //选择图片，马上预览
                            function xmTanUploadImg(obj) {
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

                                    var img = document.getElementById("xmTanImg");
                                    img.src = e.target.result;
                                    //或者 img.src = this.result;  //e.target == this
                                }

                                reader.readAsDataURL(file)
                            }
                        </script>
                    </div>

                    <div class="am-form-group">
                         <label for="user-email" class="am-u-sm-3 am-form-label">文章内容</label>
                         <script id="editor" type="text/plain" name="content" style="width:790px;height:500px;float: left; margin-left: 200px;margin-top: -20px;">
                             {!!$article->content!!}
                         </script>
                    </div>

                     {{csrf_field()}}
                     {{method_field('PUT')}}

                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button type="submit" class="am-btn am-btn-primary">修改</button>

                            <button type="button" class="am-btn am-btn-primary">重置</button>
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

</div>

 <script>
    var ue = UE.getEditor('editor',{
        // toolbars: [
        //     ['fullscreen', 'source', 'undo', 'redo', 'bold']
        // ]
    });
</script> 

@endsection