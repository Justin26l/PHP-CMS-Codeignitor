<h2>Menu List</h2>
<a href="<?=base_url('backend/testimonial_add')?>" class="btn btn-primary">Create Testimonial</a>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Work</th>
                    <th scope="col">Message</th>
                    <th scope="col">Image</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($testimonialList as $v) {
                echo '<tr>
                    <td>'.$v['id'].'</td>
                    <td>'.$v['name'].'</td>
                    <td>'.$v['work'].'</td>
                    <td>'.$v['message'].'</td>
                    <td><img src="'.base_url($v['img']).'" class="img-fluid" style="width:100px;height:100px;"/></td>
                    <td>
                    <a href="'.base_url('backend/testimonial_edit/'.$v['id']).'">Edit</a>
                    <a href="'.base_url('backend/testimonial_delete/'.$v['id']).'">Delete</a>
                    </td>
                </tr>';
                }
                ?>
            </tbody>
            </table>
        </div>