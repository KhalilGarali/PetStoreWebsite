function getCurrentDate(){
    const today = new Date();
    var day;
    switch (today.getDay()){
        case 0 : day = "Sunday";
        break;
        case 1 : day = "Monday";
        break;
        case 2 : day = "Tuesday";
        break;
        case 3 : day = "Thursday";
        break;
        case 4 : day = "Wednesday";
        break;
        case 5 : day = "Friday";
        break;
        case 6 : day = "Saturday";
        break;
    }
    var month;
    switch (today.getMonth()){
        case 0 : month = "January";
        break;
        case 1 : month = "February";
        break;
        case 2 : month = "March";
        break;
        case 3 : month = "April";
        break;
        case 4 : month = "May";
        break;
        case 5 : month = "June";
        break;
        case 6 : month = "July";
        break;
        case 7 : month = "August";
        break;
        case 8 : month = "September";
        break;
        case 9 : month = "October";
        break;
        case 10 : month = "November";
        break;
        case 11 : month = "December";
        break; 
    }
    return day + ", " + month + " " + today.getDate() + ", " + today.getFullYear();
}

function myClock() {         
    setTimeout(function() {   
      const d = new Date();
      const n = d.toLocaleTimeString();
      document.getElementById("clock").innerHTML = n; 
      myClock();             
    }, 1000)
  }
  myClock();

  function check1() {
    var checked = document.getElementsByName('petType'); 
    var hasChecked = false;
    for (var i =0; i<checked.length; i++){
        if(checked[i].checked){
            hasChecked = true;
            break;
        }
        }
        if(hasChecked ==false) {
            alert("You need to choose the pet type!");
            return false;
        }
        return true;
    }
    function check2() {
    var checked = document.getElementsByName('petGender'); 
    var hasChecked = false;
    for (var i =0; i<checked.length; i++){
        if(checked[i].checked){
            hasChecked = true;
            break;
        }
        }
        if(hasChecked ==false) {
            alert("You need to choose the gender!");
            return false;
        }
        return true;
    }
    function check3() {
    var checked = document.getElementsByName('petAttitude'); 
    var hasChecked = false;
    for (var i =0; i<checked.length; i++){
        if(checked[i].checked){
            hasChecked = true;
            break;
        }
        }
        if(hasChecked ==false) {
            alert("You must tell us if it needs to get along with other's!");
            return false;
        }
        return true;
    }

    function validateDropDown1(){
    var a = document.getElementById("pet");
    var selectedValue = a.options[a.selectedIndex].value;
        if (selectedValue == "selectoption")
    {
        alert("Please select a pet from the dropdown list!");
    }
    }

    function validateDropDown2(){
    var a = document.getElementById("agerange");
    var selectedValue = a.options[a.selectedIndex].value;
        if (selectedValue == "selectoption")
    {
        alert("Please select the age range from the dropdown list!");
    }
    }

    function myfunctions(){
        check1();
        check2();
        check3();
        validateDropDown1();
        validateDropDown2();
    }