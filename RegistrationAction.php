<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registration Form</title>
    </head>
    <body>
        <h1 style=text-align:center>Registration Form</h1>
        <form>
           <fieldset>
                 <legend>
                     Basic Information: 
                 </legend>
                 First Name : <input type="text" placeholder="Ratul Hasan" name="firstName" required><br><br>
                 last  Name : <input type="text" placeholder="Rahat" name="LastName" required><br><br>
                 Gender : <input type="radio" name="gender">Male
                          <input type="radio" name="gender">Female
                          <input type="radio" name="gender" required>Other<br><br>
                 Date of Birth : <input type="date" required><br><br>
                 Religion : <input type="radio" name="religion">Muslims
                          <input type="radio" name="religion">Hindus
                          <input type="radio" name="religion" required>Buddists <input type="radio" name="religion" required>Christians<br><br>
                 


           </fieldset>

                      <fieldset>
                 <legend>
                     Basic Information: 
                 </legend>
                 Present Address : <input type="text" name="presentAddress" required><br><br>
                 Permanent Address : <input type="text" name="permanentAddress"><br><br>
                 Mobile : <input type="tel" name="mobileNumber"><br><br>
                 Email : <input type="email" name="user email" required><br><br>
                 Personal Website Link : <input type="URL" name="websiteUrl"><br><br>


           </fieldset>

                      <fieldset>
                 <legend>
                     Basic Information: 
                 </legend>
                 Username : <input type="text" size="5" name="username" required><br><br>
                 Password : <input type="password" name="userPassword" required><br><br>
                 Confirm Password : <input type="password" name="userPassword" required><br><br>


           </fieldset>

        <br><input type="submit" value="SUBMIT">
        <input type="reset" value="RESET"><br>
        </form>
        </body>
</html>