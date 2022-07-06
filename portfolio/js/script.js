const menuToggle = document.querySelector('.menu-toggle');
const navigation = document.querySelector('.navigation');
const aLink = document.querySelectorAll('.a-link');
menuToggle.onclick = ()=>{
    navigation.classList.toggle('open')
    
    };
const listItems = document.querySelector('list-item');
listItems.forEach( item => {
    item.onclick = () =>{
        listItems.forEach(item =>
            item.classList.remove('active'));
            item.classList.add('active');
        }
});