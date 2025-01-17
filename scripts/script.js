window.onload = function() {
    const dropdownElems = document.querySelectorAll('.dropdown-trigger');
    M.Dropdown.init(dropdownElems, {
        coverTrigger: false
    });

    const sidenavElems = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sidenavElems);
};