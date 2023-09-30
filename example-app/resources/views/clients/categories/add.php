<h1>Thêm chuyên mục</h1>
<form method="POST" action="<?php echo route('categories.add');?>">
    <div>
        <input type="text" placeholder="Tên chuyên mục" name="category_name" />
    </div>
    <button type="submit" name="">Thêm chuyên mục</button>
    <?php echo csrf_field();?>
    <!-- <input type="hidden" name="_token" value="<?php echo csrf_token();?>" /> -->
</form>