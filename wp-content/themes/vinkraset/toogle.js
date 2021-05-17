function toggleShow(el) {
  $(el).show();
  $(el)
    .parents("section")
    .find(".toggle-icon")
    .first()
    .removeClass("closed");
}
function toggleHide(el) {
  $(el).hide();
  $(el)
    .parents("section")
    .find(".toggle-icon")
    .first()
    .addClass("closed");
}

function initToggles() {
  $("[data-toggle]")
    .not(".set")
    .on("click", function(e) {
      e.stopPropagation();
      var button = $(this);

      if (button.hasClass("locked")) {
        return;
      }

      var headline = button.parents(".section-headline").first();
      var toggleId = button.attr("data-toggle");
      var toggleContainer = $(toggleId);
      var isClosed = toggleContainer.css("display") == "none" ? true : false;
      if (isClosed) {
        if (headline.length) headline.removeClass("closed");
        $(toggleId)
          .removeClass("d-none")
          .show();
      } else {
        if (headline.length) headline.addClass("closed");
        $(toggleId).hide();
      }
    });
  $("[data-toggle]").addClass("set");
}

$(".toggle-down").click(function() {
  $(this).toggleClass("toggle-up-arrow");
});

jQuery(function($) {
  initToggles();
});
