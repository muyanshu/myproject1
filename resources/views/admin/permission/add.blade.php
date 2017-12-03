@extends("admin.base")
@section("main")
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="http://myproject1.com/admin">首页</a> &raquo; <a href="/admin/permission">用户权限管理</a> &raquo; 添加用户权限
    </div>
    <!--面包屑导航 结束-->
    <!--结果集标题与导航组件 开始-->
    <div class="result_wrap">
        <div class="result_title">
            <h3>快捷操作</h3>
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="#"><i class="fa fa-plus"></i>返回用户权限</a>
                <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->

            <div class="result_wrap">
                <form action="{{asset('/admin/permission')}}" method="post" e>
                    {{csrf_field()}}
                    <table class="add_tab">
                        <tbody>
                        <tr>
                            <th><i class="require">*</i>权限描述：</th>
                            <td>
                                <input type="text" class="md" name="{{old('name')}}" placeholder="请输入名称">
                                @if($errors->has("name"))
                                    <div style="color: red; float: left; height:23px;line-height: 30px;">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            {{--<th width="120"><i class="require">*</i>权限类型：</th>--}}
                            <td class="sd" style="left:50px;">
                            <td><select name="resource_id">
                                    <option value="-1">所有资源类型</option>
                                    <?php
                                    echo App\ProductType::getSortOption();
                                    ?>
                                </select></td>
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require">*</i>所属角色：</th>
                            <td>
                                <div style="width: 400px">
                                    @foreach($role as $v)
                                        @if($v->status=="1")
                                            {{$v->id}}&nbsp;<input type="checkbox" id="role{{$v->id}}" name="roles[]" value="{{$v->id}}">
                                            {{$v->name}};&nbsp&nbsp
                                        @endif
                                    @endforeach
                                </div>

                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input type="submit" value="提交">
                                <input type="button" class="back" onclick="history.go(-1)" value="返回">
                            </td>
                        </tr>
                        </tbody>
                    </table>
        </form>
    </div>
@endsection