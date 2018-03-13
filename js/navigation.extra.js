(function($) {
  $('#root-menu-div').ready(function() {
    $('#root-menu-div div.menu-div:nth-child(1) ul').prepend($('#root-menu-div div.menu-div:nth-child(1) li:nth-child(10)'));
    $('#root-menu-div div.menu-div:nth-child(1) ul').prepend($('#root-menu-div div.menu-div:nth-child(1) li:nth-child(2)'));
  })
}(CRM.$));

