$("#step").text("STEP 1 OUT 3");
$("#text").text(
  "We care about your time, that's why we created a 3-stage onboarding that will not take more than 5 minutes to complete"
);
$("#investmentplans").addClass("stepNotActive");
$("#investmentpref").addClass("stepNotActive");

$(window).load(function() {
  $(".container-fluid").fadeIn(5000, function() {
  });
});

$(".next-button").on("click", function () {
  $("#step").fadeOut("slow", function () {
    $(this).text("STEP 2 OUT 3").fadeIn("slow");
  });

  $("#text").fadeOut("slow", function () {
    $(this)
      .text(
        "Save from thousands to millions on your deal. Secure the best possible. And get independent, unbiased advice for free"
      )
      .fadeIn("slow");
  });

  if ($("#contact").is(":visible")) {
    $("#investmentplans").fadeOut("slow", function () {
      $(this).removeClass("stepNotActive").fadeIn("slow");
    });
    $("#contact").fadeOut("slow", function () {
      $("#plans").fadeIn("slow");
    });
  } else if ($("#plans").is(":visible")) {
    $("#investmentpref").fadeOut("slow", function () {
      $(this).removeClass("stepNotActive").fadeIn("slow");
    });
    $("#plans").fadeOut("slow", function () {
      $("#step").text("STEP 3 OUT 3").fadeIn("slow");
      $("#text")
        .text(
          "United Properties is about fast & easy searching, buying, selling and investing ever — online, with an expert by our side"
        )
        .fadeIn("slow");
      $("#pref").fadeIn("slow");
    });
  }
});

$(".back-step").on("click", function () {
  $("#step").fadeOut("slow", function () {
    $(this).text("STEP 2 OUT 3").fadeIn("slow");
  });

  $("#text").fadeOut("slow", function () {
    $(this)
      .text(
        "Save from thousands to millions on your deal. Secure the best possible. And get independent, unbiased advice for free"
      )
      .fadeIn("slow");
  });

  if ($("#pref").is(":visible")) {
    $("#investmentpref").fadeOut("slow", function () {
      $(this).addClass("stepNotActive").fadeIn("slow");
    });
    $("#pref").fadeOut("slow", function () {
      $("#plans").fadeIn("slow");
    });
  } else if ($("#plans").is(":visible")) {
    $("#investmentplans").fadeOut("slow", function () {
      $(this).addClass("stepNotActive").fadeIn("slow");
    });
    $("#plans").fadeOut("slow", function () {
      $("#step").text("STEP 1 OUT 3").fadeIn("slow");
      $("#text")
        .text(
          "We care about your time, that's why we created a 3-stage onboarding that will not take more than 5 minutes to complete"
        )
        .fadeIn("slow");
      $("#contact").fadeIn("slow");
    });
  }
});
