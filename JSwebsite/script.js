var ajax = new XMLHttpRequest();

const linkHome = document.getElementById("linkHome");
const linkCatalogue = document.getElementById("linkContact");
const root = document.getElementById("root");

linkHome.onclick = function (){
  ajax.open("GET", "home.html", false);
  ajax.send();
  root.innerHTML = ajax.responseText;
};

linkCatalogue.onclick = function (){
  ajax.open("GET", "contact.html", false);
  ajax.send();
  root.innerHTML = ajax.responseText;
};