let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
  searchForm.classList.toggle('active');
  navbar.classList.remove('active');
}

let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    menu.classList.remove('bx-x');
    searchForm.classList.remove('active');
    navbar.classList.remove('active');

}


$(document).ready(function() {
    $('.navbar a.dropdown-toggle').on('click', function(e) {
       var $el = $(this);
       var $parent = $(this).offsetParent(".dropdown-menu");
       $(this).parent("li").toggleClass('open');
       if(!$parent.parent().hasClass('nav')) {
            $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
       }
       $('.nav li.open').not($(this).parents("li")).removeClass("open");
       return false;
      });
  });
