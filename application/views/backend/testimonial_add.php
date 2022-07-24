<form method="POST" action="<?=base_url('backend/testimonial_submit')?>">
    <div class="form-group">
        <label for="title">Name</label>
        <input id="title" name="name" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="description">Work</label>
        <input id="description" name="work"  class="form-control" />
    </div>
    <div class="form-group">
        <label for="menu_type">message</label>
        <input id="menu_type" name="message"  class="form-control" />
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input id="image" name="img"  class="form-control" />
    </div>
    <input type="submit" value="Submit" class="btn btn-primary" />
</form>