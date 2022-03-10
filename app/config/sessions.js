$(document).ready(function(){
  SESSION_STATUS();
});

const SESSION_STATUS = () => {
  let userSession = sessionStorage['session'];
  userSession === "ACTIVE" ? SESSION_ON() : SESSION_OFF();
};

const SESSION_ON = () => {
  
};

const SESSION_OFF = () => {
  $.ajax({
    url: "../app/php/session.php?a=off",
  }).done(function (e) {
    sessionStorage.removeItem('session');
    localStorage.clear();
    window.location = "../";
  });
};

const DATA_USER = (x) => {
  return localStorage.getItem(x);
};