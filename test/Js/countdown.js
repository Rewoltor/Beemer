jQuery(function($){
    $('#startClock').on('click', doCount);
 });
 
 function doCount(){
    var counter = 5;
    setInterval(function() {
       counter--;
       if (counter >= 0) {
            span = document.getElementById("count");
            span.innerHTML = counter;
         }
         /*
         if (counter === 0) {
         alert('Sajnos az ideje lejárt');
         clearInterval(counter);
         }
         */
         if (counter === 0) {
            alert('Sajnos az ideje lejárt');
               if (document.getElementById("co1").value == ""){
                  document.getElementById("co1").value="a"
                  document.forms[0].submit()
               }
            clearInterval(counter);
      }
    }, 1000);
 }

 //If time expires all answers shall be submitted and wrong answers
 //shall be lelected that it should pass to next page

/*
document.getElementById('username').value="moo"
document.forms[0].submit()

*/

/*
document.getElementById("_1234").checked = true;

if(document. getElementById("co1"). value. length == 0){
   document.getElementById("_1234").checked = true;
}

if (document.getElementById("co1").value == ""){
   document.getElementByValue("a").checked = true;
   alert('Sajnos az ideje lejárt');
}

*/