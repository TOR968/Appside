$(document).ready(function () {
  $('form').submit(function () {
    //Change
    var th = $(this);
    $.ajax({
      type: 'POST',
      url: 'mail.php', //Change
      data: th.serialize(),
    }).then(console.log);
    //     .done(function () {
    //   // alert('Thank you!');

    //   setTimeout(function () {
    //     // Done Functions
    //     th.trigger('reset');
    //   }, 1000);
    // });
    // return false;
  });
});

// const form = document.querySelector('.neo_form');
