const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);
const tabs = $$(".tabItems");
const panes = $$(".tab-pane");
const tabSubnav = $(".manage-bill");
const subnav = $(".subnav");

tabSubnav.addEventListener("click", function () {
  subnav.classList.toggle("hide");
});

const tabActive = $(".tabItems.active");
const tabsubnav = $(".tabItems.subnav");

tabs.forEach((tab, index) => {
  const pane = panes[index];
  tab.onclick = function () {
    $(".tabItems.active").classList.remove("active");
    $(".tab-pane.active").classList.remove("active");

    this.classList.add("active");
    pane.classList.add("active");
  };
});
