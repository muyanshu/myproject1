@extends("admin.base")
@section("main")

    <script src="/js/jquery-form.js"></script>
    <style>
        #preview img{width: 150px;height: 150px;}
    </style>
        <!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="/admin">首页</a> &raquo; <a href="#">产品管理</a> &raquo; 产品编辑
</div>
<!--面包屑导航 结束-->
<div class="result_wrap">
    <form action="/admin/product/{{$rs->id}}/update" method="post" enctype="multipart/form-data"  id="myform">
        <table class="add_tab">
            <tbody>
            <tr>
                <th width="120"><i class="require">*</i>选择所属课程：</th>
                <td>
                    <select name="course_cate">
                        <option value="">==请选择课程==</option>
                        @foreach($class_1 as $v)
                            <option value="{{$v->id}}" @if($v->id == $rs->course_cate)selected @endif>{{$v->name}}</option>
                        @endforeach
                    </select>
                    <span style="color: red" id="course_message">@if(!empty($message_arr->course))*{{$message_arr->course}}@endif</span>
                </td>
            </tr>
            <tr>
                <th width="120"><i class="require">*</i>选择所属班级：</th>
                <td>
                    <select name="class_cate">
                        <option value="">==请选择班级==</option>
                        @foreach($class_2 as $v)
                            <option value="{{$v->id}}" @if($v->id == $rs->class_cate)selected @endif>{{$v->name}}</option>
                        @endforeach
                    </select>
                    <span style="color: red" id="class_message">@if(!empty($message_arr->class))*{{$message_arr->class}}@endif</span>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>产品名称：</th>
                <td>
                    <input type="text" class="lg" name="name" placeholder="请输入产品类型名称" style="width: 400px" value="{{$rs->name}}"><span style="color: red" id="name_message">@if(!empty($message_arr->name))*{{$message_arr->name}}@endif</span>

                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>产品图片：</th>
                <td>
                    <div style="position: relative;width: 114px;height: 45px">
                        <input type="button" value="上传图片">
                        <input multiple name="pic" id="pic" type="file" accept=".gif,.jpg,.png,.jpeg"  style="opacity: 0;background-color: transparent;position: absolute;top:9px;left: 0px;width: 114px;height: 25px">
                        <input type="hidden" name="thumb" id="thumb"  value="{{$rs->thumb}}">
                        <span style="color: red;position: absolute;top:4px;left: 130px;width: 200px;height: 25px" id="pic_message">@if(!empty($message_arr->pic))*{{$message_arr->pic}}@endif</span>
                    </div>
                    <div id="preview"><img src="/{{$rs->thumb}}" alt=""></div>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>类型状态：</th>
                <td>
                    <label for="is_status1"><input type="radio" name="status" value="1" id="is_status1" @if($rs->status == 1)checked @endif> 上架</label>
                    <label for="is_status2"><input type="radio" name="status" value="0" id="is_status2" @if($rs->status == 0)checked @endif> 下架</label>
                </td>
            </tr>
            <tr>
                <th></i>价格：</th>
                <td>
                    <input type="text" class="sm" name="price" value="{{$rs->price}}">元
                    <span><i class="fa fa-exclamation-circle yellow"></i>这里是短文本长度</span><span style="color: red" id="price_message">@if(!empty($message_arr->price))*{{$message_arr->price}}@endif</span>
                </td>
            </tr>
            <tr>
                <th></i>价值：</th>
                <td>
                    <input type="text" class="sm" name="value" value="{{$rs->value}}">元
                    <span><i class="fa fa-exclamation-circle yellow"></i>这里是短文本长度</span><span style="color: red" id="value_message">@if(!empty($message_arr->value))*{{$message_arr->value}}@endif</span>
                </td>
            </tr>
            <tr>
                <th>访问量：</th>
                <td>
                    <input type="text" class="sm" name="visit_1" value="{{$rs->visit_1}}">
                    <span><i class="fa fa-exclamation-circle yellow"></i>这里是短文本长度</span>
                </td>
            </tr>
            <tr>
                <th>虚拟量：</th>
                <td>
                    <input type="text" class="sm" name="visit_2" value="{{$rs->visit_2}}">
                    <span><i class="fa fa-exclamation-circle yellow"></i>这里是短文本长度</span>
                </td>
            </tr>
            <tr>
                <th></i>视频地址：</th>
                <td>
                    <input type="text" class="lg" name="video_url" value="{{$rs->video_url}}">
                </td>
            </tr>
            <tr>
                <th>描述：</th>
                <td>
                    <textarea name="detail" id="content">{{$rs->detail}}</textarea>
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$rs->id}}">
                    <input type="submit" value="提交">
                    <input type="button" class="back" onclick="history.go(-1)" value="返回">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>




<script type="text/javascript">
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    UE.getEditor('content',{initialFrameWidth:600,initialFrameHeight:210,});

    $('input[type="submit"]').click(function () {
        var i = 0;
        if($('select[name="course_cate"]').val()==""){
            $("#course_message").html("*请选择所属课程!");
            i = 1;
        }
        if($('select[name="class_cate"]').val()==""){
            $("#class_message").html("*请选择所属班级!");
            i = 1;
        }
        if($('input[name="name"]').val()==""){
            $("#name_message").html("*产品名称不能为空!");
            i = 1;
        }
        if($('input[name="thumb"]').val()==''){
            $("#pic_message").html("*请选择产品图片!");
            i = 1;
        }

        if($('input[name="price"]').val()==""){
            $("#price_message").html("*价格不能为空!");
            i = 1;
        }
        if(isNaN($('input[name="price"]').val())){
            $("#price_message").html("*价格必须为数字!");
            i = 1;
        }
        if($('input[name="value"]').val()==""){
            $("#value_message").html("*价值不能为空!");
            i = 1;
        }
        if(isNaN($('input[name="value"]').val())){
            $("#price_message").html("*价值必须为数字!");
            i = 1;
        }
        if(i == 1){
            return false;
        }

    });

    $("#pic").on('change', function(){


        var ajax_option={
            url:"/admin/product/picUpload",
            type:"post",
            dataType:'json',
            success:function (data) {
                //console.log(data);
                //return false;
                //$('#preview').show();

                var img ='<img src="/'+data+'" alt="">';
                $('#preview').html(img);
                $('#thumb').val(data);
            },
            error:function (data) {
                console.log(data);
            }
        }
        $('#myform').ajaxSubmit(ajax_option);
        return false;

    });


</script>
@endsection