<form method="POST" action="<?=base_url('backend/menu_submit')?>">
    <div class="form-group">
        <label for="title">Title</label>
        <input id="title" name="title" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input id="description" name="description"  class="form-control" />
    </div>
    <div class="form-group">
        <label for="menu_type">Menu Type</label>
        <input id="menu_type" name="menu_type"  class="form-control" />
    </div>
    <div class="form-group">
        <label for="image">Image url</label>
        <input type="text" id="image" name="image"  class="form-control" enctype="multipart/form-data"/>
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input id="price" name="price"   class="form-control"/>
    </div>
    <input type="submit" value="Submit" class="btn btn-primary" />
</form>