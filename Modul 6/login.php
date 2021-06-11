<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
    
<style>
    @import url('https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap');
    
    .center{
        margin-left: auto;
        margin-right: auto;
        margin-top: 150px;
    }
    .box{
        background-color: aliceblue;
        border-radius: 15px;
        width: 40%;
    }
    label,h1, a{
        color: black;
        font-family: 'Zen Dots', cursive;
        
    }
    input{
        box-sizing: border-box;
        width: 100%;
        padding: 8px 15px;
        border-radius: 15px;
    }
    input[type=checkbox]{
        width: 20%;
        
    }
    input[type=submit]{
        border: none;
        background-color: cyan;
    }
    table{
        padding: 25px; 
    }
    table, tr,td{
        padding-bottom: 150;
    }
    h1{
        text-align: center;
        margin: 10px;
        font-size: 40px;
    }
    footer{
        color: azure;
        text-align: center;
        text-shadow: 2px 2px black;
    }

</style>

<body style="background-image: url(bg2.jpg); background-size: cover; background-repeat: no-repeat">
    <main>
        <section>
            <form method="POST" action="aksi_login.php">
                <table class="center box">
                    <tr>
                        <td> <h1>Login</h1><br></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="username">Username</label><br>
                            <input name="username" type="text" required placeholder="Your Username...">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password">Password</label><br>
                            <input name="password" required type="password" placeholder="Your password...">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input required type="checkbox" value="on">
                            <label for="checkbox">Remember Me</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="submit">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#.html">Don't have an Account?</a>
                        </td>
                    </tr>
                </table>
            </form>
        </section>
    </main>
</body>


<footer>
    <p>&copy; 2021 JIFM All rights reserved.</p>
</footer>
</html>