function sq(query) {
    return document.querySelector(query);
}

function headerEvents() {
    sq('.jsDropdown').onmouseenter = function() {
        this.classList.add('active');
    }
    
    sq('.jsDropdown').onmouseleave = function() {
        this.classList.remove('active');
    }
    
    sq('.jsHeaderMenuBtn').onclick = function() {
        controlHideShowMenuHeader();
    }
    
    function controlHideShowMenuHeader() {
        sq('body').classList.toggle('gra-menu-active');
    }
}

headerEvents();