<html>
<head>
<title>
    Update
</title>
<style>
    body{
        background-color:whitesmoke;
    }
    input{
        width:40%;
        height:5%
        border:1px;
        border-radius:05px;
        padding: 8px 15px 8px 15px;
        margin:10px 0px 15px 0px;   
        bos-shadow:1px 1px 2px 1px grey;
    }
</style>
</head>
<body>
<center>
<h1>
    Student Sign-UP
</h1>
    <form action="Insert.php" method="POST">
         <input type="text" name="id" placeholder="Enter student id"><br>
         <input type="text" name="fname" placeholder="Enter First Name"><br>
         <input type="text" name="lname" placeholder="Enter Last Name"><br>
         <input type="text" name="email" placeholder="Enter Emaii id"><br>
         <input type="text" name="password" placeholder="Enter Password"><br>
         <input type="text" name="address" placeholder="Enter Address"><br>
         <input type="text" name="phone" placeholder="Enter Phone Number"><br>

         <input type="submit" name="submit" value="Submit"/>
    </form>
</center>
</body>
</html>