<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet"><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&family=Tajawal:wght@300&display=swap" rel="stylesheet">

        <style>
            body{
                background-color:whitesmoke;
                font-family: 'Tajawal', sans-serif;


            }
            #mother{
                width:100%;
                font-size:20px;
            }
            main{
                float:right;
                border:1px solid gray;
                padding:5px;
                 
            }
            input{
                padding:4px;
                border:2px solid black;
                text-align:center;
                font-size:17px;
                font-family:'Tajawal', sans-serif;
            }
            aside{
                text-align:center;
                width:300px;
                float:left;
                border:1px solid black;
                padding:10px;
                font-size:20px;
                background-color:silver;
                color:white;
            }
            #tbl{
                width:890px;
                font-size:20px;
            }
            #tbl th{
                background-color:silver;
                color:black;
                font-size:20px;
                padding:10px;
            }
            aside button{
                width:190px;
                padding:8px;
                margin-top:7px;
                font-size:17px;
                font-family:'Tajawal', sans-serif;
                font-weight:bold;

            }
        </style>
        <script>
            function fun(){
                alert("thank you for visiting our site")
            }
        </script>
</head>
<body>
    <?php
    #الاتصال مع قاعده البيانات
    $host='localhost';
    $user='root';
    $pass='';
    $db='student2';
    $con= mysqli_connect($host,$user,$pass,$db);
    $res=mysqli_query($con,"select * from student");
    # button varible --
    $id='';
    $name='';
    $section='';
    if(isset($_post['id'])){
        $id= $_post['id'];
    }
    if(isset($_post['name'])){
        $name=$_post['name'];
    }
    if(isset($_post['section'])){
        $section=$_post['section'];
    }
    $sqls='';
    if(isset($_post['add'])){
        $squls ="insert into student value($id,'$name','$section')";
        mysqli_query($con,$sqls);
        header("location: home.php");
    }
    if(isset($_post['del'])){
        $squls="delete from student where name='$name'";
        mysqli-query($con,$sqls);
        header("location: home.php");

    }
    
    ?>
    <div id="mother">
        <form method="post">
            <aside>
                <div id="div">
                    <img src="data:image/jpeg;base64,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" alt="لوجو الموقع">
                    <h3> Control Panel </h3>
                    <label> :Student Number</label><br>
                    <input type="text" name="id" id="id"><br>
                    <label>:Student Name </label><br>
                    <input type="text" name="name" id="name"><br>
                    <label> :Student Section </label><br>
                    <input type="text" name="section" id="section"><br><br>
                    <button name="add"> Add</button>
                    <button name="del"> Delete</button>
                    <button onclick="fun()">are you sure to exit</button>

</div>

</aside>
<main>
    <table id="tbl">
        <tr>
            <th> Serial Number</th>
            <th> Student Name</th>
            <th>Student Section</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($res)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['section']."</td>";
            echo "</tr>";
        }
        ?>


    </table>
</main>
</form>
</div>
</body>
    </html>