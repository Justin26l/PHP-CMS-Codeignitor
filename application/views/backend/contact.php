<h2>Contact Listed</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">mail</th>
                <th scope="col">subject</th>
                <th scope="col">message</th>
                <th scope="col">created_date</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $x=1;
                foreach($contactlist as $b){
                    ?>
                <tr>
                    <td><?=$x?></td>
                    <td><?=$b['name']?></td>
                    <td><?=$b['mail']?></td>
                    <td><?=$b['subject']?></td>
                    <td><?=$b['message']?></td>
                    <td><?=$b['created_date']?></td>
                    <td><a href="<?=base_url('dackend/contact/delete/'.$b['id'])?>">Clear</a></td>
                </tr>
                <?php $x+=1;} ?>
            </tbody>
            </table>
        </div>