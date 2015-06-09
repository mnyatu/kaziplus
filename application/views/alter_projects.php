<div class="row">
    <table class="table table-condensed table-hover">
        <thead>
        <th>Project Name</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th><span class="glyphicon glyphicon-trash"></span> Delete</th>
        </thead>
        
        <tbody>
            
            <?php
            foreach ($projects as $row) { ?>
    
            <tr>
                <td><?=$row['project_name']?></td>
                <td><?=$row['start_date']?></td>
                <td><?=$row['end_date']?></td>
                <td><a href="<?=  base_url()?>index.php/projects/deleteproject/<?=$row['pid']?>"><span class="glyphicon glyphicon-trash text-danger"></span></a></td>
            </tr>
            
            
            <?php } ?>
            
        </tbody>
    </table>
</div>