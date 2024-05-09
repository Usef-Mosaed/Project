<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Application</title>
    <link rel="stylesheet" href="Style1.css">
    <script>
        function aj(){
            var req = new XMLHttpRequest();
            req.onreadystatechange = function(){
                if(req.readyState==4 && req.status==200){
                    document.getElementById('chat').innerHTML=req.responseText;
                }
            }
        req.open('GET','chat.php',true);
        req.send();
        }
        setInterval(function(){aj()},1000);
    </script>
</head>
<body onload="aj();">
    <div id="container">
        <div id="chatbox">
            <div id="chat">
            </div>
        </div>
        <form action="index.php" method="post">
            <input type="text" name="name" placeholder="Enter name">
            <textarea name="message" placeholder="Send Message"></textarea>
            <input type="submit" name="submit" value="Send">
        </form>
        <?php
        if(isset($_POST['submit']))
        {
            $n=$_POST['name'];
            $m=$_POST['message'];
        
        $insert="insert into chat (name,message) values('$n','$m')";
        $run_insert=mysqli_query($con,$insert);
        if($run_insert)
        {
            echo '<embed loop="false" hidden="true" src="" autoplay="true"';
        }
        header('location: index.php');
        }
        
        ?>
    </div>
</body>
</html>