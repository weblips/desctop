<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>jQuery AJAX</title>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>
<body>

<textarea id="textField" name="text"></textarea> <br/>
<input type="button" id="btn" value="Go"/>

<script>
    $(document).ready(function() {
        $('#btn').click(function() {
            var textValue = $('#textField').val();


            /*
            $.post('/test.php',{text: textValue}).done(function(data) {
                alert(data);
            }); */

            $.ajax({
                url: '/test.php',
                method: 'POST',
                data: {text: textValue},

                success: function(data) {
                    alert(data);
                }
            });


        });
    });
</script>

</body>
</html>