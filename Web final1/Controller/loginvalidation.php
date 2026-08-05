<?php
$name="";
$email="";
$website="";
$comment="";
$gender="";
$nameErr="";
if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name=trim($_POST["name"] ?? "");

        $email=trim($_POST["email"] ?? "");

        $website=trim($_POST["website"] ?? "");

        $comment=trim($_POST["comment"] ?? "");

        $gender=trim($_POST["gender"] ?? "");

        if(!empty($name) && strlen($name)>=3)
            {
                echo "Name: ".$name;
                echo "<br>";
            }
            else{
                $nameErr ="Name Must be at least 5 Characters\n";
            }



        if(!empty($email))
            {
                echo "Email: ".$email;
                echo "<br>";
            }
            else{
               echo "Email can not be empty\n";
            }


        if(!empty($gender))
            {
                echo "Gender: ".$gender;
                echo "<br>";
            }
            else{
                echo "Gender should be selected\n";
            }


        if(!empty($website))
            {
                echo "Website: ".$website;
                echo "<br>";
            }


        if(!empty($comment))
            {
                echo "Comment: ".$comment;
                echo "<br>";
            }
    }
?>