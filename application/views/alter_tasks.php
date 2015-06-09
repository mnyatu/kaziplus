<div class="row">
    <table class="table table-condensed table-hover">
        <thead>
        <th>Date Done</th>
        <th>Task</th>
        <th>Comment</th>
        <th><span class="glyphicon glyphicon-trash"></span> Delete</th>
        </thead>
        
        <tbody>
            
            <?php
            foreach ($tasks as $row) { ?>
    
            <tr>
                <td><?=$row['date_done']?></td>
                <td><?=$row['task']?></td>
                <td><?=$row['comments']?></td>
                <td><a href="<?=  base_url()?>index.php/tasks/deletetask/<?=$row['tid']?>"><span class="glyphicon glyphicon-trash text-danger"></span></a></td>
            </tr>
            
            <?php } ?>
            
        </tbody>
    </table>
</div>