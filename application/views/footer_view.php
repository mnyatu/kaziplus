<footer class="row">
        
        <hr>
        <p class="text-center text-muted">
            <small>
                Terms and Condition apply. Copyright&COPY; <?=  strftime("%Y", time())?>. Created By eduguru.weru@gmail.com
            </small>
        </p>
    </footer>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?=  base_url()?>public/js/jquery.js"><\/script>');</script>

<script type="text/javascript" src="<?=  base_url()?>public/bootstrap/js/bootstrap.min.js"></script>

<script src="<?=  base_url()?>public/bootstrap/js/date-picker.js"></script>

<script type="text/javascript">
    $(document).ready(function () {

        $('#date_done').datepicker({
            format: "yyyy-mm-dd"
        });  
        
        $('#end_date').datepicker({
            format: "yyyy-mm-dd"
        });
        
        $('#start_date').datepicker({
            format: "yyyy-mm-dd"
        });


    });
</script>
</body>
</html>