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
                        <span class="am-icon-code"></span> 公益列表
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <i class="am-icon-search"></i>
                                <input type="search" class="form-control form-control-solid" placeholder="搜索..." value="{{$keywords}}" name="keywords"> 
                            </div>
                        </div>
                    </div>
                </div>
                 
                 

                <div class="tpl-block">
                    <div class="am-g">
                        <div class="am-u-sm-12">
                            
                                <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-check"></th>
                                            <th class="table-id">ID</th>
                                            <th class="table-title" style="width: 80px;">标题</th>
                                            <th class="table-author" style="width: 80px;margin-left: 100px;">作者</th>
                                            <th class="table-time" style="width: 80px;">时间</th>
                                            <th class="table-images" style="width: 100px;">图片</th>
                                            <th class="table-content" style="width: 120px;">内容</th>
                                            <th class="table-status" style="width: 70px;">状态</th>
                                            <th class="table-set" style="width: 170px;">操作</th>
                                        </tr>
                                    </thead>

                                    <style>
                                        table thead tr th{
                                            font-size: 15px;
                                        }
                                        table tbody tr td{
                                            font-size: 15px;
                                        }
                                        table tbody tr td div span{
                                            font-size: 15px;
                                        }
                                    </style>
                                    <tbody>
                                        @if(count($gongyi) > 0)
                                        @foreach($gongyi as $k=>$v)
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>{{ $v->id }}</td>
                                            <td><a href="#" style="font-size: 15px;">{{ $v->title }}</a></td>
                                            <td>{{ $v -> author }}</td>
                                            <td>{{ $v -> time }}</td>
                                            <td>{{ $v -> images }}</td>
                                            <td>{{ $v -> content }}</td>
                                            <td>
                                                @if(($v->status) > 0)
                                                    <span style="color: green;">在线</span>
                                               @else
                                                        
                                                        <span style="color: red;">离线</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs" style="margin-top: 7px;">
                                                       <a href="/gongyis/{{$v->id}}/edit" class="am-btn am-btn-default am-btn-xs am-text-secondary bj" type="submit" style="font-size: 15px; width: 70px;height: 30px;line-height: 10px;">
                                                            <span class="am-icon-pencil-square-o"></span> 修改
                                                        
                                                       </a>
                                                         <form class="del" action="/gongyis/{{$v->id}}" method="post" style="float: left;">
                                                            {{method_field('DELETE')}}
                                                            {{csrf_field()}}
                                                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" style="font-size: 15px; width: 70px;height: 30px;line-height: 10px;"><span class="am-icon-trash-o"></span> 删除</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                       @endforeach
                                       @else
                                       <tr>
                                        <td colspan="12" class="am-text-center">暂无数据</td>
                                       </tr>
                                       @endif
                                    </tbody>
                                </table>
                                <hr>
                                            
                                {{ $gongyi->appends(['num'=>$num])->links() }}
                            
                        </div>

                    </div>
                </div>
                <div class="tpl-alert"></div>
            </div>
@endsection

@section('css')

<style type="text/css">
    .am-btn-group .bj{
        background-color: #fff;
    }
    .am-btn-group .bj:hover{
        background: #eee;
        color: #000;
    }
    .pagination{
        float: right;
    }
    .pagination li{
        width: 30px;
        float: left;
        text-align: center;
        margin-right: 10px;
        border: 1px solid #ddd;
        color: #36c6d3;
        border-radius: 5px;
    }
</style>

@endsection

@section('js')
<script>
$('.del').submit(function(e){
    if(!confirm('您确定要删除该文章么?')) return false;
});
</script>
@endsection

@section('css')
<style type="text/css">
      .am-table>caption+thead>tr:first-child>td, .am-table>caption+thead>tr:first-child>th, .am-table>colgroup+thead>tr:first-child>td, .am-table>colgroup+thead>tr:first-child>th, .am-table>thead:first-child>tr:first-child>td, .am-table>thead:first-child>tr:first-child>th{
        font-size: 14px;
      }
</style>
@endsection