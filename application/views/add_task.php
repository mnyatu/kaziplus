
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <form action="<?=  base_url()?>index.php/tasks/addtask/" method="post" class="form-horizontal">
                      
            <p></p>
            <label for="pid" class="label label-default">Select Project</label>
            <select name="pid" class="form-control">
                
                <?php
                foreach ($projects as $row){ ?>
                    <option value="<?=$row['pid']?>"><?=$row['project_name']?></option>
                <?php } ?>
                
            </select>
            <p></p>
            <label for="task" class="label label-default">Task Name</label>
            <input type="text" name="task" class="form-control input-sm" required placeholder="task details">
            <p></p>
            <label for="date_done" class="label label-default">date_done</label>
            <input type="date" name="date_done" class="form-control input-sm" required placeholder="date_done" id="date_done">
            <p></p>
            <label for="time_taken" class="label label-default">time_taken</label>
            <input type="number" name="time_taken" class="form-control input-sm" required placeholder="time_taken">
            <p></p>
            <textarea name="comments" class="form-control">
                
            </textarea>
            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Add</button>
            <p></p>
        </form>
    </div>
</div>