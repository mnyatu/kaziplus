<div class="row">
    <table class="table table-condensed table-hover">
        <thead>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th><span class="glyphicon glyphicon-trash"></span> Delete</th>
        </thead>
        
        <tbody>
            
            <?php
            foreach ($users as $row) { ?>
    
            <tr>
                <td><?=$row['first_name']?></td>
                <td><?=$row['last_name']?></td>
                <td><?=$row['phone']?></td>
                <td><?=$row['email']?></td>
                <td><a href="<?=  base_url()?>index.php/users/deleteuser/<?=$row['eid']?>"><span class="glyphicon glyphicon-trash text-danger"></span></a></td>
            </tr>            
            
            <?php } ?>
            
        </tbody>
    </table>
</div>