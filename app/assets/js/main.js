$(document).ready(function(){
  let userSession = localStorage.getItem("session");
  userSession==='ACTIVE'?sessionData():sessionOff();
});





// SESSIONS //

const sessionOff = ()=>{
  $.ajax({
    url: '../app/php/session.php?a=off'
  }).done(function(e) { 
    localStorage.clear();
    window.location = "../";
  });
}

const sessionData = ()=>{
  $('#session_user_name').html(localStorage.getItem("session_name"));
}


// VARIABLES //

const http_data = "http://localhost/server/portrans_Api/rest/";
const http_file = "http://localhost/server/portrans_Api/rest/";



// FUNCTIONS PUBLIC //

const getUrl = (_par) =>{
  var _p = null;
  if (location.search)
    location.search
      .substr(1)
      .split("&")
      .forEach(function (pllv) {
        var s = pllv.split("="),
          ll = s[0],
          v = s[1] && decodeURIComponent(s[1]);
        if (ll == _par) {
          if (_p == null) {
            _p = v;
          } else if (Array.isArray(_p)) {
            _p.push(v);
          } else {
            _p = [_p, v];
          }
        }
      });
  return _p;
}

const pageDir = (page) =>{
  switch(page) {
    case 'alertas':
        window.location = 'alertas';
      break;
    default:
        history.back();
      break;
  }
}

const numberFormat = (amount, decimals) =>{
  amount += "";
  amount = parseFloat(amount.replace(/[^0-9\.]/g, ""));
  decimals = decimals || 0;
  if (isNaN(amount) || amount === 0) return parseFloat(0).toFixed(decimals);
  amount = "" + amount.toFixed(decimals);
  var amount_parts = amount.split(","),
    regexp = /(\d+)(\d{3})/;
  while (regexp.test(amount_parts[0]))
    amount_parts[0] = amount_parts[0].replace(regexp, "$1" + "." + "$2");
  return amount_parts.join(",");
}
