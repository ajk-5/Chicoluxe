<?php

?>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.message a').click(function() {
                    $('#signInForm').animate({ height: "toggle", opacity: "toggle" }, "slow");
                    $('#registrationForm').animate({ height: "toggle", opacity: "toggle" }, "slow");
                });
            });
        </script>
        <div id="signUpRegistration">
            <div id="signInForm">
                <h2 style='color:goldenrod'> LOG IN </h2>
                <form id="signIn" action="connectComptes.php " method="post">
                    <label for="email">EMAIL:</label>
                    <input type="email" id="email" name="email"><br>
                    <label for="motDePasse">PASSWORD:</label>
                    <input type="password" id="motDePasse" name="motDePasse"><br>
                    <input type="submit" value="LOG IN">
                </form>
                <p class="message"> NOT REGISTERED? <a href="#">CREATE AN ACCOUNT</a></p>
            </div>
            <div id="registrationForm" style="display: none;">
                <h2 style='color:goldenrod'>REGISTER </h2>
                <form id="registration" action="signUpRegister.php" method="post">
                    
                    <label for="prenom">FIRST NAME:</label>
                    <input type="text" id="prenom" name="prenom"><br>
                    <label for="nom">LAST NAME:</label>
                    <input type="text" id="nom" name="nom"><br>
                    <label for="pseudo">USER NAME:</label>
                    <input type="text" id="pseudo" name="pseudo"><br>
                    <label for="dob">DATE OF BIRTH:</label>s
                    <input type="date" id="dob" name="dob"><br>
                    <label for="emailReg">EMAIL:</label>
                    <input type="email" id="email" name="email"><br>
                    <label for="motDePasse">PASSWORD:</label>
                    <input type="password" id="motDePasseReg" name="motDePasse"><br>
                    <input type="submit" name="Register" value="REGISTER">
                </form>
                <p class="message">ALREADY REGISTERED? <a href="#">LOG IN</a></p>
            </div>
        </div>
    </body>
</html>
