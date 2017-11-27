@extends("admin.base")
@section("main")

        <!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="http://myproject1.com/admin">首页</a> &raquo; <a href="#">产品管理</a> &raquo; 产品编辑
</div>
<!--面包屑导航 结束-->
<div class="result_wrap">
    <form action="#" method="post">
        <table class="add_tab">
            <tbody>
            <tr>
                <th width="120"><i class="require">*</i>选择所属课程：</th>
                <td>
                    <select name="">
                        <option value="">==请选择==</option>
                        <option value="19">精品界面</option>
                        <option value="20">推荐界面</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th width="120"><i class="require">*</i>选择所属班级：</th>
                <td>
                    <select name="">
                        <option value="">==请选择==</option>
                        <option value="19">精品界面</option>
                        <option value="20">推荐界面</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>产品名称：</th>
                <td>
                    <input type="text" class="lg" name="" >

                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>类型状态：</th>
                <td>
                    <input type="text" class="sm" name="">级
                    <p>1：上架；2：下架</p>
                </td>
            </tr>
            <tr>
                <th></i>价格：</th>
                <td>
                    <input type="text" class="sm" name="">元
                    <span><i class="fa fa-exclamation-circle yellow"></i>这里是短文本长度</span>
                </td>
            </tr>
            <tr>
                <th></i>价值：</th>
                <td>
                    <input type="text" class="sm" name="">元
                    <span><i class="fa fa-exclamation-circle yellow"></i>这里是短文本长度</span>
                </td>
            </tr>
            <tr>
                <th></i>访问量：</th>
                <td>
                    <input type="text" class="sm" name="">
                    <span><i class="fa fa-exclamation-circle yellow"></i>这里是短文本长度</span>
                </td>
            </tr>
            <tr>
                <th></i>虚拟量：</th>
                <td>
                    <input type="text" class="sm" name="">
                    <span><i class="fa fa-exclamation-circle yellow"></i>这里是短文本长度</span>
                </td>
            </tr>
            <tr>
                <th></i>视频地址：</th>
                <td>
                    <input type="text" class="lg" name="">
                </td>
            </tr>
            <tr>
                <th>描述：</th>
                <td>
                    <textarea name="discription" id="content"></textarea>
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input type="submit" class="btn btn-primary" value="提交">
                    <input type="button" class="btn" onclick="history.go(-1)" value="返回">
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
</script>
@endsection