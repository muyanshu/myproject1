@extends("admin.base")
@section("main")
        <!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="http://myproject1.com/admin">首页</a> &raquo; <a href="#">产品管理</a> &raquo; 添加产品
</div>
<!--面包屑导航 结束-->
<!--结果集标题与导航组件 开始-->
<div class="result_wrap">
    <div class="result_title">
        <h3>快捷操作</h3>
    </div>
    <div class="result_content">
        <div class="short_wrap">
            <a href="#"><i class="fa fa-plus"></i>新增产品</a>
            <a href="#"><i class="fa fa-recycle"></i>批量删除</a>
            <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
        </div>
    </div>
</div>
<!--结果集标题与导航组件 结束-->
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
                    <input type="text" class="lg" name="" placeholder="请输入产品类型名称">
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
</script>
@endsection