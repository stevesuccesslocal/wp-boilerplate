var dropCookie = true;
var cookieDuration = 30;
var cookieFadeout = 5000;
var cookieName = 'complianceCookie';
var cookieValue = 'on';

function createDiv(){
  var bodytag = document.getElementsByTagName('body')[0];
  var div = document.createElement('div');
  div.setAttribute('id','cookie');
  div.className = 'cookie-banner';
  div.innerHTML = '<p class="no-margin"><strong>This website uses cookies</strong></p><p class="margin--none">We use cookies in order to give you the best experience of our website. <a class="color--white" title="Privacy Cookies Page" target="_blank" href="/privacy-policy/">Read More.</a></p><p class="button color--black block font-600 text-center" id="cookieaccept">I Accept</p>';

  bodytag.appendChild(div);
  document.getElementsByTagName('body')[0].className+=' cookiebanner';
  createCookie(window.cookieName,window.cookieValue, window.cookieDuration);
}

function createCookie(name,value,days) {
  if (days) {
    var date = new Date();
    date.setTime(date.getTime()+(days*24*60*60*1000));
    var expires = "; expires="+date.toGMTString();
  }
  else var expires = "";
  if(window.dropCookie) {
    document.cookie = name+"="+value+expires+"; path=/";
  }
}

function checkCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
  }
  return null;
}

function eraseCookie(name) {
  createCookie(name,"",-1);
}

jQuery(document).ready(function(){
  
  if(checkCookie(window.cookieName) != window.cookieValue){
    createDiv();
    // window.setTimeout(function() {
    // jQuery('#cookie').fadeOut();
    // }, cookieFadeout);
  jQuery("#cookieaccept").click(function(){
    jQuery("#cookie").fadeOut();
  });
  }
  
});