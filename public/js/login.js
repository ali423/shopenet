$('#start-model-check').change(function() 
  {
    if(this.checked == true)
    {
        $('#start-model-form').css('display','block');
        $('#customer').css('display','none');
    }else{
        $('#start-model-form').css('display','none');
        $('#customer').css('display','block');
    }
}); 

$('.close-model').on('click', function(){
    $('#start-model').addClass('d-none').removeClass('d-flex');
});

$('#start-model-overlay').on('click', function(){
    $('#start-model').addClass('d-none').removeClass('d-flex');
});

$('#header-img a').on('click', function(){
    $('#start-model').addClass('d-flex align-content-center align-items-center').removeClass('d-none');
});

$('.overlay .1').on('click', function(){
    $('.overlay').css('right','-100%').css('transform','rotate(180deg)');
    $('.overlay div').css('transform','rotate(180deg)');
    $('.overlay .1').addClass('d-none').removeClass('d-block');
    $('.overlay .2').addClass('d-block').removeClass('d-none');
});

$('.overlay .2').on('click', function(){
    $('.overlay').css('right','0').css('transform','rotate(0deg)');
    $('.overlay div').css('transform','rotate(0deg)');
    $('.overlay .2').addClass('d-none').removeClass('d-block');
    $('.overlay .1').addClass('d-block').removeClass('d-none');
});

$('#sign-in .second').on('click', function(){
    $('#sign-up').addClass('d-block').removeClass('d-none');
    $('#sign-in').addClass('d-none').removeClass('d-block');
});

$('#sign-up .second').on('click', function(){
    $('#sign-up').addClass('d-none').removeClass('d-block');
    $('#sign-in').addClass('d-block').removeClass('d-none');
});

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

$('#pass').on("change paste keyup", function(){
    $('#repass').attr('pattern', $('#pass').val());
    if($('.needs-validation').is('.was-validated')){
        if($('#repass').val()==$('#pass').val()){
            $('.repass .input-group-append span').css('background-color','#55efc4').css('color','#16a085');
            $('.repass input').css('border-color','#55efc4');
        }else{
            $('.repass .input-group-append span').css('background-color','#ff7675').css('color','#c0392b');
            $('.repass input').css('border-color','#ff7675');
        }
    }
});

$('#repass').on("change paste keyup", function(){
    if($('#repass').val()==$('#pass').val()){
        $('.repass .input-group-append span').css('background-color','#55efc4').css('color','#16a085');
        $('.repass input').css('border-color','#55efc4');
    }else{
        $('.repass .input-group-append span').css('background-color','#ff7675').css('color','#c0392b');
        $('.repass input').css('border-color','#ff7675');
    }
});

//verification js

$(document).ready(function() {

    // Function to update counters on all elements with class counter
    var doUpdate = function() {
      $('.progress-value').each(function() {
        var count = parseInt($(this).html());
        if (count !== 0) {
            $(this).html(count - 1);
        }else{
            if(count==0){
                $('.resend').addClass('active-resend');
            }
        }
      });
    };
  
    // Schedule the update to happen once every second
    setInterval(doUpdate, 1000);
 });