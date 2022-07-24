        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr class="bg-primary">
                        <td colspan="9"><h2 class="text-light">- New Booking</h2></td>
                    </tr>
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
                        <td><a href="<?=base_url('backend/booking/delete/'.$b['booking_id'])?>">Archives</a></td>
                    </tr>
                    <?php $x+=1;} ?>
                </tbody>
            </table>
        </div>

        <br><br><br>

        <div class="table-responsive">
            <table class="table table-striped table-sm">
            <tbody>
                <tr class="bg-secondary"><td colspan="8"><h2 class="text-light">- Archives Booking</h2></td></tr>
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