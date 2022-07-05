

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/suggestions.css">
    <title>Document</title>
</head>
<body>
    
<div class="container">
    <div class="container-form">
    
        <form action="/panel.php" method="post">
            <div class="content_email_name">
                <div>
                    <label for="name"> Name :</label>
                    <input type="text" id="name" name="user_name" />
                </div>
                <div>
                    <label for="mail"> Email :</label>
                    <input type="email" id="mail" name="user_mail" />
                </div>
            </div>
          
            <div>
                <label for="msg"> your message :</label>
                <br>
                <textarea id="msg" name="description" style="width: 195px; height:100px ;"></textarea>
            </div>
        
            <div class="button">
                <button  onclick="document.write('<?php message() ?>');"> Send</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>

<!-- Codes PHP -->
<?php

    function message() {
       
        function tag($name,$atts="",$content="") {
            $str_atts = "";
            if(is_array($atts)) {
            foreach($atts as $key=>$val) if(!($val===null || $val===false)) $str_atts.= " $key=\"$val\"";
          } else $str_atts = " ".preg_replace("/=(?!\")(\S+)/m","=\"\\1\"",$atts);
            if($name=="img" && !strpos($str_atts,"alt=")) $str_atts.= " alt=\"\"";
            if(in_array($name,array("input","img","col","br","hr","meta"))) $name.= "/";
            if(substr($name,-1)=="/") { $name = substr($name,0,-1); return "<{$name}{$str_atts}/>"; }
            else return "<{$name}{$str_atts}>$content</$name>";
        }


    }
    echo "<input type='button' name='Release' onclick= hello(); value='Click to Release'>";


?>
