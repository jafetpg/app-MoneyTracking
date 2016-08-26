    <h2>Inicio de sesión</h2>



    <style type="text/css">

    body {
    	background: tomato;
    }

    	h2 {
    		font-family: "comfortaa";
    	}

    	.boton {
    		border-radius: 40px;
    		height: 40px;
        width: 180px;
        border-style: double;
        font-family: "comfortaa";
        text-align: center;
        font-size: 20px;
    	}

      .login {
        width: 80px;
        height: 40px;
        background-color: #00B159;
        border-radius: 40px;
        border-style: none;
        color:white;
        font-size: 20px;
      }


      .login:hover {
       background: rgba(0,0,0,0);
       color: #3a7999;
       box-shadow: inset 0 0 0 3px #3a7999;
       transition: all 200ms ease;
      }

      label {
        font-family: "comfortaa";
      }

    </style>

        <form action="<?php echo APP_URL; ?>users/login" method="POST">
            <p>
               <label for="username"></label>
                <input type="text" name="username" placeholder="Username" class="boton">
            </p>
            <p>
               <label for="password"> </label>
                <input type="password" name="password" placeholder="Password" class="boton">
            </p>

            <p>
                <input type="submit" value="login" class="login">
                <br><br />
                <br />
                <label>Recordar datos</label>
                <input type="checkbox">
            </p>
        </form>
