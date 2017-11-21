@extends("admin.base")
@section("main")

    <div class="panel panel-info">
        <div class="panel-heading ">产品编辑</div>
        <div class="panel-body">
            <form id="myform" action="/admin/product/{{$product->id}}" method="post">
                <input type="hidden" name="_method" value="put"/>
                {{csrf_field()}}
                <div class="form-group form-inline">
                    <select class="form-control" name="sort">
                        <option value="-1">选择所属课程</option>
                        <?php
                        echo App\ProductType::getSortOption($product->sort_id);
                        ?>
                    </select>
                    <select class="form-control" name="sort2">
                        <option value="0">选择所属班型</option>
                        <?php
                        if(!$product->class_id){
                            $product->class_id = 0 ;
                        }
                        echo App\ProductType::getSortOption($product->class_id, 3);
                        ?>
                    </select>
                </div>
                <div class="form-group form-inline">
                    <label for="name">*产品名称：</label> <input id="name" name="name" class="form-control input-sm"
                                                            type="text" value="{{$product->name}}"
                                                            style="width:70%">

                </div>
                <div class="form-group form-inline">
                    <label for="price">产品价格：</label><input id="price" class="form-control  input-sm" type="text"
                                                           name="price" value="{{$product->price}}">
                    <label for="price2">产品价值：</label><input id="price2" class="form-control  input-sm"
                                                            type="text" name="price2"
                                                            value="{{$product->price2}}">
                </div>
                <div class="form-group form-inline">

                    <label for="visited">访问量：</label> <input id="visited" readonly name="visited"
                                                             class="form-control input-sm"
                                                             type="text" value="{{$product->visited}}">
                    <label for="visited2">虚拟量：</label> <input id="visited2" name="visited2"
                                                              class="form-control input-sm"
                                                              type="text"
                                                              value="{{$product->visited_virtual}}">
                </div>

                <div class="form-group">
                    <label for="url">视频地址：</label> <input id="url" name="url" class="form-control input-sm"
                                                          type="text" value="{{$product->url}}">
                </div>
                <div class="form-group">
                    <label for="desc">产品描述：</label> <input id="desc" name="desc" class="form-control input-sm"
                                                           type="text" value="{{$product->desc}}">
                </div>
                <div class="form-group">
                    <label for="pic">产品图片：</label> <input id="pic" name="pic" class="form-control input-sm"
                                                          type="text" value="{{$product->pic}}">
                </div>


                <textarea name="detail" id="" cols="30" rows="2">
                           {{$product->detail}}
                        </textarea>
                <br>
                <input class="btn btn-info" type="submit" value="确定添加">
            </form>

        </div>
    </div>

@endsection


@section("jsbottom")
<script src="/kindeditor/kindeditor-all-min.js"></script>
<script>
    KindEditor.ready(function (K) {
        var editor1 = K.create('textarea[name="detail"]', {
            width: '100%',
            height: "390px",
            cssPath: '/kindeditor/plugins/code/prettify.css',
            uploadJson: '/kindeditor/php/upload_json.php',
            fileManagerJson: '/kindeditor/php/file_manager_json.php',
            allowFileManager: true
        });

    });
</script>
@endsection
