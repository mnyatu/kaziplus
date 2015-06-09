
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <form action="<?=  base_url()?>index.php/projects/addproject/" method="post" class="form-horizontal">
            <p></p>
            <label for="project_name" class="label label-default">project_name</label>
            <input type="text" name="project_name" class="form-control input-sm" required placeholder="project_name">
            <p></p>
            <label for="start_date" class="label label-default">start_date</label>
            <input type="date" name="start_date" class="form-control input-sm" required placeholder="start_date" id="start_date">
            <p></p>
            <label for="end_date" class="label label-default">end_date</label>
            <input type="date" name="end_date" class="form-control input-sm" required placeholder="end_date" id="end_date">
            <p></p>
            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Add</button>
            <p></p>
        </form>
    </div>
</div>