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
                        <span class="am-icon-code"></span>分类添加
                    </div>

                </div>
                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">


                        <div class="am-u-sm-12 am-u-md-9">

                            <form class="am-form am-form-horizontal" action="/cate" role="form" method="post" enctype="multipart/form-data">
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">分类名</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-name" placeholder="分类名称" name="name" style="font-size: 15px;">
                                    </div>
                                </div>
                                
                                <div class="am-form-group">
                                    <label for="user-password" class="am-u-sm-3 am-form-label">父级分类</label>
                                    <div class="am-u-sm-9">
                                    <select class="form-control" name="pid" style="font-size: 13px;">
                                        <option value="0">顶级分类</option>
                                        @foreach($cates as $k=>$v)
                                        <option value="{{$v->id}}">{{$v->name}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>
                                 
                                 {{csrf_field()}}

                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit" class="am-btn am-btn-primary" style="font-size: 15px;">添加</button>

                                        <button type="button" class="am-btn am-btn-primary" style="font-size: 15px;">重置</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>

            </div>
@endsection