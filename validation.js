
//validation for users
    var divs = new Array();
    divs[2] = "errUsername";
    divs[3] = "errCompanyName";
    divs[4] = "errPhoneNumber";
    divs[5] = "errPassword";
    divs[6] = "errRepeatPassword";
    divs[7] = "errEmailAddress";
    function validate()
  {
      var inputs = new Array();
      inputs[2] = document.getElementById('Username').value;
      inputs[3] = document.getElementById('CompanyName').value;
      inputs[4] = document.getElementById('PhoneNumber').value;
      inputs[5] = document.getElementById('Password').value;
      inputs[6] = document.getElementById('RepeatPassword').value;
     inputs[7] = document.getElementById('EmailAddress').value;

      var errors = new Array();
      errors[2] = "<span style='color:red'>*</span>";
      errors[3] = "<span style='color:red'>*</span>";
      errors[4] = "<span style='color:red'>*</span>";
      errors[5] = "<span style='color:red'>*</span>";
      errors[6] = "<span style='color:red'>*</span>";
      errors[7] = "<span style='color:red'>*</span>";
    
      for (i in inputs)
      {
        var errMessage = errors[i];
        var div = divs[i];
        if (inputs[i] == "")
          document.getElementById(div).innerHTML = errMessage;
        else if (i==7)
        {
          var atpos=inputs[i].indexOf("@");
          var dotpos=inputs[i].lastIndexOf(".");
          if (atpos<1 || dotpos<atpos+2 || dotpos+2>=inputs[i].length)
          document.getElementById('errEmailAddress').innerHTML = "<span style='color: red'>Enter a valid email address!</span>";
          else
          document.getElementById(div).innerHTML = " ";
        }
        else if (i==6)
        {
          var first = document.getElementById('Password').value;
          var second = document.getElementById('RepeatPassword').value;
          if (second != first)
          document.getElementById('errRepeatPassword').innerHTML = "<span style='color: red'>Your passwords don't match!</span>";
          else
          document.getElementById(div).innerHTML = " ";
        }
        else
          document.getElementById(div).innerHTML = " ";
       }
     }
        function finalValidate()
        {
          var count = 2;
          for(i=2;i<8;i++)
          {
            var div = divs[i];
            if(document.getElementById(div).innerHTML == " ")
            count = count + 1;
          }
          if(count == 8)
            document.getElementById("errFinal").innerHTML = " ";
        }
  