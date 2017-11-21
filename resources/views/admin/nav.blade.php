<div class="col-sm-3">
    {{--订单管理--}}
    <div class="panel panel-default" >
        <div class="list-group-item active list-group-item-success" >
            <h4 class="panel-title" >
                <a data-toggle="collapse" data-parent="#accordion"
                   href="#collapseOne" >
                    订单管理
                </a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse">

                <a href="#" class="list-group-item">管理订单表</a>
                <a href="#" class="list-group-item">订单明细表</a>

        </div>
    </div>

    {{--产品管理--}}
    <div class="panel panel-default">
        <div class="list-group-item   list-group-item-info">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion"
                   href="#collapseTwo">
                    产品管理
                </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse">
            <a href="#" class="list-group-item">产品添加</a>
            <a href="#" class="list-group-item">产品管理</a>
        </div>
    </div>

    {{--产品类型管理--}}
    <div class="panel panel-default">
        <div class="list-group-item   list-group-item-warning">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion"
                   href="#collapseThree">
                    产品类型管理
                </a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse">
            <a href="{{route('productType.create')}}" class="list-group-item">添加</a>
            <a href="#" class="list-group-item">管理</a>
        </div>
    </div>

    {{--用户管理--}}
    <div class="panel panel-default">
        <div class="list-group-item  list-group-item-danger">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion"
                   href="#collapseFour">
                    用户管理
                </a>
            </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse">
            <a href="#" class="list-group-item">添加</a>
            <a href="#" class="list-group-item">管理</a>
        </div>
    </div>

    {{--用户组管理--}}
    <div class="panel panel-default">
        <div class="list-group-item  list-group-item-success">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion"
                   href="#collapseFive">
                    用户组管理
                </a>
            </h4>
        </div>
        <div id="collapseFive" class="panel-collapse collapse">
            <a href="#" class="list-group-item">添加</a>
            <a href="#" class="list-group-item">管理</a>
        </div>
    </div>

    {{--用户权限管理--}}
    <div class="panel panel-default">
        <div class="list-group-item active list-group-item-error">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion"
                   href="#collapseSix">
                    用户权限管理
                </a>
            </h4>
        </div>
        <div id="collapseSix" class="panel-collapse collapse">
            <a href="#" class="list-group-item">添加</a>
            <a href="#" class="list-group-item">管理</a>
        </div>
    </div>
</div>