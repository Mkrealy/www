const menuToggle = document.querySelector('.menu-toggle');
const navigation = document.querySelector('.navigation');
const aLink = document.querySelectorAll('.a-link');

// this function is Disables links in sidebar and open the side bar on mobile mod
function navbaroff() 
{
    navigation.classList.toggle('open');

    const aLink = document.querySelectorAll('.a-link');

    var veriableid = aLink[0].id
    if (veriableid == 'display-none') {
        aLink[0].id = ""
        aLink[1].id = ""
        aLink[2].id = ""
        aLink[3].id = ""
        aLink[4].id = ""

    } else {
        aLink[0].id = "display-none",
            aLink[1].id = "display-none",
            aLink[2].id = "display-none",
            aLink[3].id = "display-none",
            aLink[4].id = "display-none";
    };
};


// main conteent text effect
