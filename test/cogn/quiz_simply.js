var total = 10; //total number of questions

$(document).ready(function(){
  //hide all questions
  $('.questionForm').hide();
  $('#results').hide();

  //show introduction
  $('#introduction').show();

  //show first question
  $('#introduction a').on('click', function(){
    $('#introduction').hide();
    $('#co1').show();    //I have changed it from co1 to co8 to test the css and cut time, it must be changed back
  });

  $('.questionForm #submit').click(function(){
    //Get data attributes
    current = $(this).parents('div:first').data('question');
    next = $(this).parents('div:first').data('question')+1;
    //Hide all questions
    $('.questionForm').hide();
    //Show next questions
    $('#co'+next+'').fadeIn(300);
    process(''+current+'');
    return false;
    });

    $('.questionForm #submita').click(function(){
      //Get data attributes
      current = $(this).parents('div:first').data('question');
      next = $(this).parents('div:first').data('question')-1;
      //Hide all questions
      $('.questionForm').hide();
      //Show next questions
      $('#co'+next+'').fadeIn(300);
      process(''+current+'');
      return false;
      });

});



//process the answers
function process(n){
  //Get input value
  var submitted = $('input[name=co'+n+']:checked').val();
  if(n<=6){
    if(submitted == sessionStorage.getItem('a'+n+'')){
          logic = logic + 1;
    }
  }
  else if (6<n<11) {
    if(submitted == sessionStorage.getItem('a'+n+'')){
          math = math + 2;
    }
  }

  if(n == total){
      document.cookie = 'logic='+logic;
      document.cookie = 'math='+math;

      //window.location.href="sikeres_test.php";
      //document.getElementById("inputButton").action = "../Includes/test.inc.php";
  }
  return false;
}

//Add event listener
window.addEventListener('load',init,false);
