<!--左侧导航 开始-->
<div class="menu_box">

    <ul class="sub_menu">


    <ul>

        <li>
            <h3><i class="fa fa-fw fa-clipboard"></i>产品管理</h3>
            <ul class="sub_menu">
                <li><a href="/admin/product/create" target="main"><i class="fa fa-fw fa-plus-square"></i>产品添加</a></li>
                <li><a href="/admin/product" target="main"><i class="fa fa-fw fa-list-ul"></i>产品管理</a></li>
            </ul>
        </li>
        <li>
            <h3><i class="fa fa-fw fa-cog"></i>订单管理</h3>

            <ul class="sub_menu" >
                <li><a href="/admin/order" target="main"><i class="fa fa-fw fa-cubes"></i>管理订单</a></li>
                <li><a href="/admin/orderdetail" target="main"><i class="fa fa-fw fa-database"></i>订单详情</a></li>
            </ul>
        </li>
        <li>
            <h3><i class="fa fa-fw fa-clipboard"></i>产品类型管理</h3>
            <ul class="sub_menu">
                <li><a href="/admin/productType/create" target="main"><i class="fa fa-fw fa-plus-square"></i>类型添加</a></li>
                <li><a href="/admin/productType" target="main"><i class="fa fa-fw fa-list-ul"></i>类型管理</a></li>
            </ul>
        </li>
        <li>
            <h3><i class="fa fa-fw fa-clipboard"></i>用户管理</h3>
            <ul class="sub_menu">
                <li><a href="/admin/user/create" target="main"><i class="fa fa-fw fa-plus-square"></i>用户添加</a></li>
                <li><a href="/admin/user" target="main"><i class="fa fa-fw fa-list-ul"></i>用户管理</a></li>
            </ul>
        </li>
        <li>
            <h3><i class="fa fa-fw fa-clipboard"></i>用户组管理</h3>
            <ul class="sub_menu">
                <li><a href="/admin/role/create" target="main"><i class="fa fa-fw fa-plus-square"></i>用户组添加</a></li>
                <li><a href="/admin/role" target="main"><i class="fa fa-fw fa-list-ul"></i>用户组管理</a></li>
            </ul>
        </li>
        <li>
            <h3><i class="fa fa-fw fa-clipboard"></i>用户权限管理</h3>
            <ul class="sub_menu">
                <li><a href="/admin/permission/create" target="main"><i class="fa fa-fw fa-plus-square"></i>权限添加</a></li>
                <li><a href="/admin/permission" target="main"><i class="fa fa-fw fa-list-ul"></i>权限管理</a></li>
            </ul>
        </li>
        <li>
            <h3><i class="fa fa-fw fa-cog"></i>系统设置</h3>
            <ul class="sub_menu">
                <li><a href="#" target="main"><i class="fa fa-fw fa-cubes"></i>网站配置</a></li>
                <li><a href="#" target="main"><i class="fa fa-fw fa-database"></i>备份还原</a></li>
            </ul>
        </li>

    </ul>
</div>
<!--左侧导航 结束-->
<script>
    $(function(){
        $.Huifold("#Huifold1 .item h4","#Huifold1 .item .info","fast",1,"click"); /*5个参数顺序不可打乱，分别是：相应区,隐藏显示的内容,速度,类型,事件*/
    });
</script>