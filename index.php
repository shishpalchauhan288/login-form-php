<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="u
                _name"></td>
            </tr>

            <tr>
            <td>Password:</td>
                <td><input type="password" name="u_pass"></td>
            </tr> 
            </tr>

            <tr>
            <td></td>
                <td><input type="submit" name="u_login"></td>
            </tr> 
            </tr>
           
            </table>
           </form>


        <?php
    
       if (isset($_POST['u_login'])){
           $u_name = md5($_POST['u_name']);
           $u_pass = $_POST['u_pass'];

           echo $u_name;
           echo '<br>';

           echo $u_pass;
       }
           
       ?>
                

                
      
      


</body>
</html>

