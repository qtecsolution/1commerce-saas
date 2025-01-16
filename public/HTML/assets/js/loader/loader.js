const preloader = document.querySelector('#preloader');

function showHidePreloader() {
  preloader.classList.add('d-none');
}

window.addEventListener('load', showHidePreloader);