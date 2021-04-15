let button = document.getElementById('button-top');

setInterval(function() {
    if (window.scrollY > 100) {
        button.classList.remove('hidden');
        button.classList.add('go-top');
    } else {
        button.classList.remove('go-top');
        button.classList.add('hidden');
    }
}, 100);

function goTop() {
    window.scroll(0, 0);
};
