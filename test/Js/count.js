jQuery(function($){
    $('#startClock').on('click', doCount);
 });
 
 function doCount(){
    var counter = 600;
    setInterval(function() {
       counter--;
       if (counter >= 0) {
            span = document.getElementById("count");
            span.innerHTML = counter;
         }
         if (counter === 0) {
         alert('Sajnos az ideje lejárt');
         clearInterval(counter);
         document.getElementsByName("submit11")[0].click()
         }
    }, 1000);
 }
