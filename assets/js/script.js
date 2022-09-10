const navLink = document.querySelectorAll('.nav-link');
const dropdownItem = document.querySelectorAll('.dropdown-item');
navLink[2].href = 'product';

for (let i = 0; i < navLink.length; i++) {
  if (navLink[i].href === window.location.href) {
    navLink[i].classList.add('active');
    navLink[i].setAttribute('aria-current', 'page');
  }
}

for (let i = 0; i < dropdownItem.length; i++) {
  if (dropdownItem[i].href === window.location.href) {
    dropdownItem[i].classList.add('active');
    dropdownItem[i].setAttribute('aria-current', 'true');
    navLink[2].classList.add('active');
    navLink[2].setAttribute('aria-current', 'page');
  }
}
