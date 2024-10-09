window.addEventListener('scroll', function() {
    var header = document.querySelector('.sticky-header');
    header.classList.toggle('scrolled', window.scrollY > 0);
  });