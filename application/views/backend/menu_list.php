<h2>Menu List</h2>
<a href="<?=base_url('backend/menu_add')?>" class="btn btn-primary">Create Menu</a>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Menu Type</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">Created Date</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $x=1;
                foreach($menuList as $v) {
                echo '<tr>
                    <td>'.$x.'</td>
                    <td>'.$v['title'].'</td>
                    <td>'.$v['menu_type'].'</td>
                    <td>'.$v['description'].'</td>
                    <td><img src="'.base_url($v['image']).'" class="img-fluid" style="width:100px;height:100px;" /></td>
                    <td>'.$v['price'].'</td>
                    <td>'.$v['created_date'].'</td>
                    <td>
                    <a href="'.base_url('backend/menu_edit/'.$v['menu_id']).'">Edit</a>
                    <a href="'.base_url('backend/menu_delete/'.$v['menu_id']).'">Delete</a>
                    </td>
                </tr>';
                $x+=1;}
                ?>
            </tbody>
            </table>
        </div>