<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <script>
        function clicked(x) {
            alert("number"+x);
        }
    </script>
    <?php
        echo "<button onclick='clicked(23)'>this is btn</button>";
        echo (int)(12/10) * 10+1;
    ?>

    <!-- <script src="click.js"></script> -->
</body>
</html>