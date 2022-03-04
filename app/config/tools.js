/*   PARAMETROS POR URL   */
const GET_URL = (_par) =>{
  let _p = null;
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


/*   REDIRIGIR PAGINA   */
const PAGE_DIR = (url) =>{
  if(url===false){
    history.back();
  }else{
    window.location = 'alertas';
  }
}

/*   FORMATO MONEDA   */
function MONEY_FORMAT(valor){
  let valor_separado = valor.split(',');
  let result_moneda = NUMBER_FORMAT(valor_separado[0], 0);
  if (valor_separado.length>1) {
    result_moneda = result_moneda+','+valor_separado[1];
  }
  return '$ '+result_moneda;
}

/*   FORMATO NUMERO   */
function NUMBER_FORMAT(amount, decimals){
  amount += ''; 
  amount = parseFloat(amount.replace(/[^0-9\.]/g, ''));
  decimals = decimals || 0; 
  if (isNaN(amount) || amount === 0) 
      return parseFloat(0).toFixed(decimals);
  amount = '' + amount.toFixed(decimals);
  var amount_parts = amount.split(','),
      regexp = /(\d+)(\d{3})/;
  while (regexp.test(amount_parts[0]))
      amount_parts[0] = amount_parts[0].replace(regexp, '$1' + '.' + '$2');
  return amount_parts.join(',');
}

/*   NOTIFICACIONES   */
function NOTIFICATION(type,msj) {
  toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": 300,
    "hideDuration": 1000,
    "timeOut": 5000,
    "extendedTimeOut": 1000,
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
  toastr[type](msj);
}