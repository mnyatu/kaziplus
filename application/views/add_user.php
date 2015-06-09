
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <form action="<?=  base_url()?>index.php/users/adduser/" method="post" class="form-horizontal">
            <p></p>
            <label for="first_name" class="label label-default">first_name</label>
            <input type="text" name="first_name" class="form-control input-sm" required placeholder="first_name">
            <p></p>
            <label for="last_name" class="label label-default">last_name</label>
            <input type="text" name="last_name" class="form-control input-sm" required placeholder="last_name">
            <p></p>
            <label for="phone" class="label label-default">phone</label>
            <input type="text" name="phone" class="form-control input-sm" required placeholder="phone">
            <p></p>
            <label for="email" class="label label-default">email</label>
            <input type="email" name="email" class="form-control input-sm" required placeholder="email">
            <p></p>
            <label for="password" class="label label-default">password</label>
            <input type="password" name="password" class="form-control input-sm" required placeholder="password">
            
            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Add</button>
            <p></p>
        </form>
    </div>
</div>