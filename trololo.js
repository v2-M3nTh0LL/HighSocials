const alaw = "abcdefghijklmnopqrstuvwxyz._0987654321";

let lung;

function istrol() {
   document.getElementById("errorr").style="visibility:hidden; ";
 var val = document.getElementById("inp").value;
 val = val.toString();
 lung=val.length;
 if (alaw.indexOf(val[lung-1]) == -1) {
   if (val.length > 17)
     trolis("lungime");
   else {
     if (val[lung-1] == ' ')
       trolis("space");
     else {
       if (val[lung-1] == '@')
         {trolis("arond");
       }
       else {
         if (val[lung-1] != val[lung-1].toLowerCase() && val[lung-1].toUpperCase() == val[lung-1])
           trolis("mare");
         else
           trolis("special");
       }
     }
   }
 }



}

function trolis(crime) {

 if (crime == "lungime")
   {
   //  alert("Che cazzo fe? Max 17");
   document.getElementById("errorr").style="visibility:visible; ";
   document.getElementById("errorr").innerHTML="Please insert most 17 characters!";
   }
 if (crime == "space"){
   //alert("Che cazzo fe? no space");
   document.getElementById("errorr").style="visibility:visible; ";
   document.getElementById("errorr").innerHTML="Please don't insert spaces!";
}
 if (crime == "arond")
 {  //alert("Che cazzo fe? no @");
   document.getElementById("errorr").style="visibility:visible; ";
   document.getElementById("errorr").innerHTML="Please don't insert @!";
 }
 if (crime == "mare"){
   //alert("Che cazzo fe? no A");
   document.getElementById("errorr").style="visibility:visible; ";
   document.getElementById("errorr").innerHTML="Please don't insert UPPERCASE letters!";
 }
 if (crime == "special"){
 //  alert("Che cazzo fe? U r not that special");
 document.getElementById("errorr").style="visibility:visible; ";
 document.getElementById("errorr").innerHTML="Please don't insert special characters!";
}

}
