jQuery(document).ready(function ($) {
  function submitForminatorForm(formId, addToCartValue) {
    $(formId + "Popup").show();

    $(formId + ' input[name="phone"]').val(user_phone_data.phone_number);

    $(formId).submit();

    window.location.href =
      "https://hbxstudio.in/webdev/checkout/?add-to-cart=" +
      addToCartValue +
      "&quantity=1";
  }

  $("#demo").on("submit", function (e) {
    e.preventDefault();
    submitForminatorForm("#50608a4", "14");
  });

  $("#demo1").on("submit", function (e) {
    e.preventDefault();
    submitForminatorForm("#50608a4", "16");
  });

  $("#cfa_nov3").on("submit", function (e) {
    e.preventDefault();
    submitForminatorForm("#50608a4", "8482");
  });

  $("#cfa_nov4").on("submit", function (e) {
    e.preventDefault();
    submitForminatorForm("#50608a4", "8485");
  });
});
