//Class selected già creata
function clickPlus(){
  var h3 = $(".cont > h3");

  h3.click(function () {
    var me = $(this);

    me.children("i.fas.fa-minus").toggle();
    me.children("i.fas.fa-plus").toggle();

    me.next("p").slideToggle();
  });
}

function init(){
  clickPlus();
}

$(document).ready(init);
