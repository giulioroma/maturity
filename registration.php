<?php
   echo "
		<!DOCTYPE html>
        <html>
            <head>

                <title>registrazione</title>
                <link href=\"stile.css\" rel=\"stylesheet\" type=\"text/css\">
				
            </head>
      
            <body>
			<div class=\"container\">
					<div class\"header\"> 
						<h1>Pagina di registrazione</h1><br><br>
					</div>
					<div class=\"content\">
						<form action =\"script.php\" method=\"post\">
							Nome 	 <input type=\"text\" name=\"nome\"><br><br>
							Cognome	 <input type=\"text\" name=\"nome\"><br><br>
							Nome utente		<input type=\"text\" name=\"cognome\"><br><br>     
							Password	<input type=\"text\" name=\"pass\"><br><br>
							Conferma <br>password	<input type=\"text\" name=\"passcon\" ><br>	
							<input type=\"submit\" value=\"invia\">	
							<br><br>
						</form>
					</div>	
			</div>
            </body>
        </html>
	";
?>
