const menuToggle = document.querySelector('.menu-toggle');
const navigation = document.querySelector('.navigation');
const aLink = document.querySelectorAll('.a-link');
menuToggle.onclick = ()=>{
    navigation.classList.toggle('open'),
    aLink[0].setAttribute("id", "display-none"),
    aLink[1].setAttribute("id", "display-none"),
    aLink[2].setAttribute("id", "display-none"),
    aLink[3].setAttribute("id", "display-none")
    
    ;};
const listItems = document.querySelector('list-item');
listItems.forEach( item => {
    item.onclick = () =>{
        listItems.forEach(item =>
            item.classList.remove('active'));
            item.classList.add('active');
        }
});
// aLink.forEach(item =>{
//    item.onclick= () =>{
//     aLink.forEach(item =>
//         item.classList.remove('display-none'));
//         item.classList.add('display-none');
   
//    }
// });
