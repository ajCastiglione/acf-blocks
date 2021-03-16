const $ = jQuery;

const FAQs = {
  settings: {
    block: $("#faqs-block"),
    title: $("#faqs-block .faq-title"),
  },

  init: function () {
    FAQs.settings.title.on("click", this.handleToggle);
  },

  handleToggle: function () {
    var title = $(this);
    var content = title.parent().find(".faq-content");

    title.toggleClass("active");
    content.slideToggle(300);
  },
};
FAQs.init();

console.log("loading script");
