function validation(){
  
    var catagory= document.getElementById('category').category;
    var value= document.getElementById('value').value;
    if( value==''|| unit == ''||)
    {
        document.getElementById("unit").innerHTML = "field required";

       return false;
      }

      else if(value.length<8)
{
        document.getElementById("unit").innerHTML = "must 8 characters";

       return false;
      }

     else if(unit.length<5) {
        document.getElementById("unit").innerHTML = "must 5characters";

       return false;
      }