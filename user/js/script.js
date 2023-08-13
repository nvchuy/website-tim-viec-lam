$('.message a').click(function () {
    $(".register-form").css("display", "none");
    $('form').animate({ height: "toggle", opacity: "toggle" }, "slow");
});

// $('#btnRegis').click(function () {
//     // console.log("Btn regis's clicked");
//     alert("Btn regis's clicked");
// });
