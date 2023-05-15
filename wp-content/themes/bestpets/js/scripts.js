

window.onload = function () {
  addEventListeners();



}


function addEventListeners() {
 window.addEventListener('scroll', showHeader);

}

function showHeader() {
  if (window.pageYOffset > 0 && !document.getElementById('header').classList.contains('colored')){
    document.getElementById('header').classList.add('colored');
    document.getElementById('searchform').classList.add('bordered');
  } else if (window.pageYOffset == 0) {
    document.getElementById('header').classList.remove('colored');
    document.getElementById('searchform').classList.remove('bordered');
  }
}

















function addEventLictenerToClass(listener, className, functionName, boolean) {
  let list = document.getElementsByClassName(className);
  for (i = 0; i < list.length; i++) {
    list[i].addEventListener(listener, functionName, boolean);
  }
}

function removeClassByClassList(className, removeClass) {
  let list = document.getElementsByClassName(className);
  for (i = 0; i < list.length; i++) {
    if (list[i].classList.contains(removeClass)) {
      list[i].classList.remove(removeClass);
    }
  }
}

function getPositionOfElementInArray(className, element) {
  let list = document.getElementsByClassName(className);
  for (i = 0; i < list.length; i++) {
    if (list[i] == element) {
      return i
    }
  }
}

function addClassToElementOnPosition(className, position, addClass) {
  let list = document.getElementsByClassName(className);
  list[position].classList.add(addClass);
}








