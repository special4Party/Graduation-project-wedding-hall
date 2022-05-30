let preveiwContainer = document.querySelector('.products-preview');
let previewBox = preveiwContainer.querySelectorAll('.preview');



previewBox.forEach(close => {
    close.querySelector('.fa-times').onclick = () => {
        close.classList.remove('active');
        preveiwContainer.style.display = 'none';
    };
});

document.querySelectorAll('.row .colum-4').forEach(product => {
    product.onclick = () => {
        preveiwContainer.style.display = 'flex';
        let name = product.getAttribute('data-name');
        previewBox.forEach(preview => {
            let target = preview.getAttribute('data-target');
            if (name == target) {
                preview.classList.add('active');
            }
        });
    };
});


function go1() {
    document.location.href = "../../include/php_page/booking.php";
}

function go2() {
    document.location.href = "../../include/php_page/hall_profile.php";
}