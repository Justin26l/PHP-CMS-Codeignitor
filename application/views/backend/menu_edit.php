<form method="POST" action="<?=base_url('backend/menu_update')?>">
    <input type="hidden" name="menu_id" value="<?=$menuDetail['menu_id']?>"/>
    <div class="form-group">
        <label for="title">Title</label>
        <input id="title" name="title" class="form-control" value="<?=$menuDetail['title']?>"/>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input id="description" name="description"  class="form-control" value="<?=$menuDetail['description']?>" />
    </div>
    <div class="form-group">
        <label for="menu_type">Menu Type</label>
        <input id="menu_type" name="menu_type"  class="form-control" value="<?=$menuDetail['menu_type']?>" />
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input id="image" name="image"  class="form-control" value="<?=$menuDetail['image']?>" />
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input id="price" name="price"   class="form-control" value="<?=$menuDetail['price']?>"/>
    </div>
    <input type="submit" value="Submit" class="btn btn-primary" />
</form>