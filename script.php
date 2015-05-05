 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script src="js/bootstrap.js"></script>
 <script>
            $("#carousel").carousel();
        </script>

<script type="text/javascript">
     $(document).ready(function () {
$("input#submit").click(function(){
    $.ajax({
        type: "POST",
        url: "process.php", //process to mail
        data: $('form.contact').serialize(),
        success: function(msg){
            $("#contact").modal('hide'); //hide popup  
        },
        error: function(){
            alert("failure");
        }
    });
});
});
  </script>