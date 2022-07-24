        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr class="bg-primary">
                        <td colspan="9"><h2 class="text-light">- New Contact</h2></td>
                    </tr>
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
                        <td><a href="<?=base_url('backend/contact/delete/'.$b['id'])?>">Archives</a></td>
                    </tr>
                    <?php $x+=1;} ?>
                </tbody>
            </table>
        </div>
        <br><br><br>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <tbody>
                    <tr class="bg-secondary">
                        <td colspan="8"><h2 class="text-light">- Archives Contact</h2></td>
                    </tr>
                    <?php $x=1;
                    foreach($contactlist_is_deleted as $b){?>
                    <tr>
                        <td><?=$x?></td>
                        <td><?=$b['name']?></td>
                        <td><?=$b['mail']?></td>
                        <td><?=$b['subject']?></td>
                        <td><?=$b['message']?></td>
                        <td><?=$b['created_date']?></td>
                        <td></td>
                    </tr>
                    <?php $x+=1;} ?>
                </tbody>
            </table>
        </div>