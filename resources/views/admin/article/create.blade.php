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
                        <label for="user-email" class="am-u-sm-3 am-form-label">文章作者</label>
                        <div class="am-u-sm-9">
                            <input type="text" id="user-author" placeholder="请输入文章作者的名字" name="author" style="font-size: 15px;">

                        </div>
                    </div>


                    <div class="am-form-group">
                        <label for="user-email" class="am-u-sm-3 am-form-label">创建时间</label>
                        <div class="am-u-sm-9">
                            <input type="text" id="user-time" placeholder="请输入文章的创建时间" name="time" style="font-size: 15px;">

                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-email" class="am-u-sm-3 am-form-label">副标题</label>
                        <div class="am-u-sm-9">
                            <input type="text" id="user-contop" placeholder="请输入文章的副标题" name="contop" style="font-size: 15px;">
                        </div>
                    </div>


                    <div class="am-form-group">
                        <label for="user-email" class="am-u-sm-3 am-form-label">文章图片</label>
                        <div class="am-form-group am-form-file">
                            <div class="tpl-form-file-img" style="margin-left: 20px;">
                                <img id="xmTanImg"/>
                                <div id="xmTanDiv"></div>

                            </div>
                            <button type="button" class="am-btn am-btn-danger am-btn-sm" style="margin-left: 20px;">
                            <i class="am-icon-cloud-upload"></i> 添加图片
                            <input id="doc-form-file" type="file" multiple="" name="pic" id="xdaTanFileImg" onchange="xmTanUploadImg(this)" accept="image/*"/>

                            </button>
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

                    </div>

                    <div class="am-form-group">
                        <label for="user-email" class="am-u-sm-3 am-form-label">文章内容</label>
                        <script id="editor" type="text/plain" name="content" style="width:750px;height:500px;float: left;margin-left: 190px;margin-top: -20px;"></script>
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