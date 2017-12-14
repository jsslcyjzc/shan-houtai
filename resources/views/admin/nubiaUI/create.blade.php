@extends('admin.index')



@section('title')
<title>nubiaUI 管理</title>
@endsection

@section('page')
@endsection


@section('am')
<div class="tpl-content-page-title">
    nubia UI 添加
</div>
<ol class="am-breadcrumb">
    <li><a href="/admin" class="am-icon-home">首页</a></li>
    <li><a href="/UIluntan/create">nubia UI 添加</a></li>
    <li class="am-active">内容</li>
</ol>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> nubia UI 添加
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
                <form class="am-form tpl-form-line-form" action="/UIluntan" method="post" enctype="multipart/form-data">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">标题 <span class="tpl-form-line-small-title">Title</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入标题文字" name="title">
                            <small>请填写标题文字10-20字左右。</small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-email" class="am-u-sm-3 am-form-label">发布时间 <span class="tpl-form-line-small-title">Time</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" class="am-form-field tpl-form-no-bg" placeholder="发布时间" data-am-datepicker="" readonly="" name="time">
                            <small>发布时间为必填</small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-phone" class="am-u-sm-3 am-form-label">作者 <span class="tpl-form-line-small-title">Author</span></label>

                       
                        <div class="am-u-sm-9">
                        	<input type="text" class="tpl-form-input" placeholder="作者" name="author" id="user-author">
						</div>
                    </div>




                    <div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">头像 <span class="tpl-form-line-small-title">photo</span></label>
                        <div class="am-u-sm-9">
                            <div class="am-form-group am-form-file">
                                <div class="tpl-form-file-img">
                                    <img id="xmTanImg"/ style="width: 80px;height: 80px;border-radius: 360px;">
                                    <div id="xmTanDiv"></div>
                                </div>
                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
									<i class="am-icon-cloud-upload"></i> 添加头像图片
                                    <input id="doc-form-file" type="file" multiple="" name="photo" id="xdaTanFileImg" onchange="xmTanUploadImg(this)" accept="image/*"/>

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
                    </div>





                    <div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">封面图 <span class="tpl-form-line-small-title">Images</span></label>
                        <div class="am-u-sm-9">
                            <div class="am-form-group am-form-file">
                                <div class="tpl-form-file-img">
                                    <img id="xmTanImgtwo"/>
                                    <div id="xmTanDivtwo"></div>
                                </div>
                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
									<i class="am-icon-cloud-upload"></i> 添加封面图片
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

                    <div class="am-form-group">
                        <label for="user-intro" class="am-u-sm-3 am-form-label">隐藏文章</label>
                        <div class="am-u-sm-9">
                            <div class="tpl-switch">
                                <input type="checkbox" class="ios-switch bigswitch tpl-switch-btn" checked="">
                                <div class="tpl-switch-btn-view">
                                    <div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-email" class="am-u-sm-3 am-form-label">文章内容</label>
                        <script id="editor" type="text/plain" name="content" style="width:750px;height:500px;float: left;margin-left: 240px;margin-top: -20px;"></script>
                        <label for="user-email" class="am-form-label" style="margin-left: 15px;">文章内容</label>
                        <script id="editor" type="text/plain" name="content" style="width:800px;height:500px;"></script>
                    </div>
                    

                    {{ csrf_field() }}
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
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


<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>
<script>
    var ue = UE.getEditor('editor',{
        // toolbars: [
        //     ['fullscreen', 'source', 'undo', 'redo', 'bold']
        // ]
    });
</script> 
@endsection