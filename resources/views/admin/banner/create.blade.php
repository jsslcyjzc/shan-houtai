@extends('admin.index')

@section('title')
<title>Banner 管理</title>
@endsection


@section('page')
@endsection



@section('am')
    @if(session('msg'))
        <div class="alert alert-info col-md-12 bg-primary">
            {{session('msg')}}
        </div>
    @endif

    <div class="tpl-content-page-title">
        Banner 管理
    </div>
    <ol class="am-breadcrumb">
        <li><a href="/admin" class="am-icon-home">首页</a></li>
        <li><a href="/banner">Banner 管理</a></li>
        <li class="am-active">添加 Banner</li>
    </ol>
    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-green bold">
                <span class="am-icon-code"></span> 添加 Banner
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

        <div class="tpl-block">

            <div class="am-g">
                <div class="tpl-form-body tpl-form-line">
                    <form class="am-form tpl-form-line-form" method="post" action="/banner" enctype="multipart/form-data">
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">Banner 名称 <span class="tpl-form-line-small-title">/ name</span></label>
                            <div class="am-u-sm-9">
                                <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入Banner 名称文字" name="bname">
                                <small>请填写Banner 名称文字10-20字左右。</small>
                            </div>
                        </div>


                        <div class="am-form-group">
                            <label class="am-u-sm-3 am-form-label">Banner 链接<span class="tpl-form-line-small-title">/ link</span></label>
                            <div class="am-u-sm-9">
                                <input type="text" placeholder="输入Banner 链接" name="blink">
                                <small>请填写Banner 链接文字10-20字左右。</small>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-weibo" class="am-u-sm-3 am-form-label">封面图 <span class="tpl-form-line-small-title">/ Images</span></label>
                            <div class="am-u-sm-9">
                                <div class="am-form-group am-form-file">
                                    <div class="tpl-form-file-img">
                                        <img id="xmTanImg"/>
                                        <div id="xmTanDiv"></div>

                                    </div>
                                    <button type="button" class="am-btn am-btn-danger am-btn-sm">
									<i class="am-icon-cloud-upload"></i> 添加封面图片
                                    <input id="doc-form-file" type="file" multiple="" name="pic" id="xdaTanFileImg" onchange="xmTanUploadImg(this)" accept="image/*"/>

                                    </button>
                                    
                                    </div>
                                    <hr />
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


                        {{csrf_field()}}
                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>




@endsection



