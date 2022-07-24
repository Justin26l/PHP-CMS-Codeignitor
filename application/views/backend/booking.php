<h2>Booking Listed</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">phone</th>
                <th scope="col">date</th>
                <th scope="col">time</th>
                <th scope="col">people</th>
                <th scope="col">created_date</th>
                </tr>
            </thead>
            <tbody>
                <?php $x=1;
                foreach($booklist as $b){?>
                <tr>
                    <td><?=$x?></td>
                    <td><?=$b['name']?></td>
                    <td><?=$b['email']?></td>
                    <td><?=$b['phone']?></td>
                    <td><?=$b['date']?></td>
                    <td><?=$b['time']?></td>
                    <td><?=$b['people']?></td>
                    <td><?=$b['created_date']?></td>
                    <td><a href="<?=base_url('backend/booking/delete/'.$b['booking_id'])?>">Noted</a></td>
                </tr>
                <?php $x+=1;} ?>
                <tr><td colspan="9" class="bg-light"><h2 class="bg-light">History Booking</h2></td></tr>
                <?php $x=1;
                foreach($booklist_is_deleted as $b){?>
                <tr>
                    <td><?=$x?></td>
                    <td><?=$b['name']?></td>
                    <td><?=$b['email']?></td>
                    <td><?=$b['phone']?></td>
                    <td><?=$b['date']?></td>
                    <td><?=$b['time']?></td>
                    <td><?=$b['people']?></td>
                    <td><?=$b['created_date']?></td>
                    <td></td>
                </tr>
                <?php $x+=1;} ?>
            </tbody>
            </table>
        </div>