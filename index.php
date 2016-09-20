<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="application-name" content="Xerroe">
  <meta charset="utf-8">
  <title>Login to Career Connect</title>
  <link href='https://fonts.googleapis.com/css?family=Sigmar+One' rel='stylesheet' type='text/css'>
  <link type="text/css" rel="stylesheet" href="/style/login.css">
  <script src="/frontrscs/jQuery.min.js"></script>
  <style id="dimensions"></style>
  <script type="application/javascript">
    var height = screen.availHeight;
    var width = screen.availWidth;
  </script>
</head>
<body>
<div id="header">
  <div id="menu-top-gradient"></div>
  <div id="menu-bar">
    <div id="logo">
      CareerConnect
    </div>
    <div id="logo2">
      C
    </div>
    <div id="login-container">
      <form id="login-form" action="#" autocomplete="on">
        <input type="email" id="login-email-input" class="login-sign-up-input" name="email" placeholder="Enter Email" required="required" autocomplete="off">
        <input type="password" id="login-password-input" class="login-sign-up-input" name="password" placeholder="Enter Password" required="required">
        <input type="submit" id="login-btn" value="Sign In">
      </form>
      <div id="message-section">
        <a href="#" id="forgot-password-link">Forgot Your Password? Click here</a>
      </div>
    </div>
  </div>
  <div id="menu-bottom-gradient"></div>
</div>

<div id="main-container">
  <div id="sign-up-form-container">
    <div id="welcome-msg-container">
      <div id="welcome-msg-prompt">
        Welcome to Zimbabwe Career Connect the platform to hire and get hired. Registration is Free!
      </div>
    </div>
    <form method="post" action="cc/createAccount.php" id="sign-up-form" target="_blank" AUTOCOMPLETE="off" onreset="resetSignUpForm()">
      <div id="account-type-section" class="sign-up-input-section">
        <span id="account-type-prompt">
          Account Type:
        </span>
        <div id="account-type-options">
          <select name="type" id="account-type-options" required="required" onchange="changeOptions(this)">
            <option value="none">Select Account Type</option>
            <option value="individual">Individual Account</option>
            <option value="company">Company Account</option>
          </select>
        </div>
      </div>
      <div id="email-section" class="sign-up-input-section">
        <input type="email" id="email-input" class="sign-up-input" name="email" placeholder="Email" required="required">
      </div>
      <div id="password-section" class="sign-up-input-section">
        <input type="password" id="password-input" class="sign-up-input" name="password" placeholder="Password" required="required" onfocus="removePasswordErrorMsg();clearRetypePasswrdForm();">
        <input type="password" id="password-retype-input" class="sign-up-input" name="password-retype" placeholder="Retype Password" required="required" onfocus="removePasswordErrorMsg();" onblur="checkIfPasswordsMatch();">
      </div>
      <div id="password-error-section" class="error-section">
        <span id="password-error-msg" class="error-msg"></span>
      </div>
      <div id="policy-section">
        <span id="policy-prompt">
          By signing up you agree with Career Connect <a href="#">terms</a> and <a href="#">conditions</a>
          as well as our <a href="#">cookie policy</a>.
        </span>
      </div>
      <div id="submit-section" class="sign-up-input-section">
        <input id="signup-btn" type="submit" class="signup-btns" value="Sign Up" disabled>
        <input  id="reset-btn" type="reset" class="signup-btns" value="Reset">
      </div>
    </form>
  </div>
  <div id="placeholder"></div>
</div>

<div id="footer">
  <div id="footer-txt">
    Zim Career Connect Inc. 2016
  </div>
</div>
<script type="application/javascript">

  /**
   * changes the options and inputs available and suited for the individual user
   * */
  function changeIndividualOptions(){
    /*change name options*/
    choseOptions(
      "sign-up-form","name-section",2,
      '<input type="text" id="firstname-input" class="sign-up-input" name="firstname" placeholder="First Name" required="required">' +
      '<input type="text" id="lastname-input" class="sign-up-input" name="lastname" placeholder="Last Name" required="required">'
    );
    /*change sex options*/
    choseOptions(
      "sign-up-form","sex-section",9,
      "<label for=\"male\">" +
      "<span class=\"sex-container\" id=\"male-container\">" +
      "Male" +
      "</span>" +
      "</label>" +
      "<input type=\"radio\" id=\"male-input\" class=\"signup-select-sex\" name=\"sex\" value=\"male\">" +
      "<label for=\"female\">" +
      "<span class=\"sex-container\" id=\"female-container\">" +
      "Female" +
      "</span>" +
      "</label>" +
      "<input type=\"radio\" id=\"female-input\" class=\"signup-select-sex\" name=\"sex\" value=\"female\">"
    );
  }//changeIndividualOptions

  /**
   * changes the options and inputs available and suited for the company
   * */
  function changeCompanyOptions(){
    /*change name options*/
    choseOptions(
      "sign-up-form","name-section",2,
      '<input type="text" id="company-name-input" class="sign-up-input" name="companyName" placeholder="Name of Company" required="required">'
    );
    /*change industry options*/
    choseOptions(
      "sign-up-form","industry-type-section",9,
      '<span id="industry-type-prompt">' +
      'Industry:' +
      '</span>' +
      '<div id="industry-type-options">' +
      '<select id="industry-type-options" required="required" name="industry">' +
      '<option value="none">Select Industry</option>' +
      '<option value="finance">Finance</option>' +
      '<option value="technology">Technology</option>' +
      '<option value="education">Education</option>' +
      '<option value="nonProfit">Non-profit</option>' +
      '<option value="health">Health</option>' +
      '<option value="business">Business</option>' +
      '</select>' +
      '</div>'
    );
  }//changeCompanyOptions

  /**
   * resets the options to their default for neither company or individual user
   */
  function resetOptions(){
    rmOpts("sex");
    rmOpts("name");
    rmOpts("industry");
  }//resetOptions

  /**
   * removes section containing 'opt' options
   * @param opt, string, the section to be removed
   * */
  function rmOpts(opt){
    try {
      switch (opt) {
        case "sex":
          $("#sex-section").remove();
          break;
        case "name":
          $("#name-section").remove();
          break;
        case "industry":
          $("#industry-type-section").remove();
          break;
        default:
          resetOptions();
      }
    }catch(e) {
      console.log(e.message);
    }
  }//rmOpts

  /**
   * changes name and sex options depending on the selected object
   * */
  function changeOptions(selectedObject){
    //first reset all the options
    resetOptions();
    var selectedOption = selectedObject.options[selectedObject.selectedIndex].value.trim();
    /* if the user has not selected anything, disable the submit button*/
    if(selectedOption == "none"){
      document.getElementById("signup-btn").disabled = true;
    }else{
      //enable the signup button
      document.getElementById("signup-btn").disabled = false;
      /*individual options are displayed when the account being created is for a single user*/
      if(selectedOption == "individual") {
        changeIndividualOptions();
      }else if(selectedOption == "company") {
        changeCompanyOptions();
      }
    }
  }//changeOptions

  /**
   * adds or removes relevant section depenting with the selected option
   * @param parentId,string, theid of the form or the parent element
   * @param sectionId,string, the id of the section to be displayed
   * @bparam selectedOption, the selected option from the drop down
   * @param insertPosition, the position to insert the new option
   * @param sectionContent, the html content for the added section
   */
  function choseOptions(parentId,sectionId,insertPosition,sectionContent){
    var parent = document.getElementById(parentId);
    /*create the sex section attribute*/
    if (document.getElementById(sectionId) === null) {
      var newChild = document.createElement("div");
      newChild.setAttribute("id", sectionId);
      newChild.setAttribute("class", "sign-up-input-section");
    }
    /*add the section*/
    parent.insertBefore(newChild, parent.childNodes[insertPosition]);
    document.getElementById(sectionId).innerHTML = sectionContent;
  }//choseOptions

  /**
   *checks if the two entered passwords are similar
   * @returns {boolean}
   */
  function passwordsMatch(){
    var password1 = document.getElementById("password-input").value.trim();
    var password2 = document.getElementById("password-retype-input").value.trim();
    return password1 === password2;
  }//passwordIsSimilar

  /**
   * prints error message on the login page
   * @param containerId, the id where the message is to be printed
   * @param errorMessage, the message to be printed
   */
  function printError(containerId,errorMessage){
    document.getElementById(containerId).innerHTML = errorMessage;
  }//printError

  /**
   * clears error for container with id 'containerId'
   * */
  function clearError(containerId){
    document.getElementById(containerId).innerHTML = "";
  }//clearError

  /**
   * checks if the two passwords match
   * */
  function checkIfPasswordsMatch(){
    if(!passwordsMatch()){
      printError("password-error-msg","Error! Passwords do not match. Please retype passwords.");
      /*show the error message*/
      $("#password-error-section").show();
    }else{
      removePasswordErrorMsg();
    }
  }//checkIfPasswordsMatch

  /**
   * removes the password error message
   * */
  function removePasswordErrorMsg(){
    clearError("password-error-msg");
    /* hide the container */
    $("#password-error-section").hide();
  }

  /**
   * clear the retype message form if the two passwords do not match
   */
  function clearRetypePasswrdForm(){
    if(!passwordsMatch()) {
      document.getElementById("password-retype-input").value = "";
    }
  }//clearRetypePasswrdForm

  /**
   * resetd the sign up form to its default
   */
  function resetSignUpForm(){
    //remove the name section
    $("#name-section").remove();
    //remove the sex section
    $("#sex-section").remove();
    //clear the password error
    removePasswordErrorMsg();
    //make the signup button disabled
    document.getElementById("signup-btn").disabled = true;
  }//resetForm

</script>
</body>
</html>
