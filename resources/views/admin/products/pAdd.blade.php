@extends("admin.base")


@section("main")

            <div class="panel panel-info">
                <div class="panel-heading ">产品添加</div>
                <div class="panel-body">
                    <form id="myform" action="/admin/product" method="post">
                        {{csrf_field()}}
                        <div class="form-group form-inline">
                            <select class="form-control" name="sort">
                                <option value="-1">选择所属课程</option>
                                <?php
                                echo App\ProductType::getSortOption($sortid);
                                ?>
                            </select>
                            <select class="form-control" name="sort2">
                                <option value="0">选择所属班型</option>
                                <?php
                                echo App\ProductType::getSortOption(0, 3);
                                ?>
                            </select>
                        </div>
                        <div class="form-group form-inline">
                            <label for="price">产品价格：</label><input id="price" class="form-control  input-sm" type="text"
                                                                   name="price" placeholder="产品价格">
                            <label for="price2">产品价值：</label><input id="price2" class="form-control  input-sm"
                                                                    type="text" name="price2" placeholder="产品价值">
                        </div>
                        <div class="form-group">
                            <label for="name">*产品名称：</label> <input id="name" name="name" class="form-control input-sm"
                                                                    type="text" placeholder="请输入产品名称">
                        </div>


                        <div class="form-group">
                            <label for="url">视频地址：</label> <input id="url" name="url" class="form-control input-sm"
                                                                  type="text" placeholder="如果有视频请填写视频地址">
                        </div>
                        <div class="form-group">
                            <label for="desc">产品描述：</label> <input id="desc" name="desc" class="form-control input-sm"
                                                                   type="text" placeholder="请输入产品描述">
                        </div>

                        <input class="btn btn-info" type="submit" value="确定添加">
                    </form>

                </div>
            </div>



@endsection

