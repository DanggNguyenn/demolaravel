<h1>thêm chuyên mục</h1>
<form method="POST" action="<?php echo route('categories.add');?>">
    <div>
        <input type="text" name="category_name" placeholder="tên chuyên mục">
    </div>
    <?php echo csrf_field();?>
    <!-- <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" > -->
    <button type="summit" >them chuyen muc</button>
</form>