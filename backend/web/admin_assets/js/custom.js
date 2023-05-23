$(document).ready(function () {
    $('[data-plugin="switchery"]').each(function(e, a) {
        new Switchery(a, $(a).data())
    });
    let previewImage = document.querySelector('.card .preview');
    if(previewImage)
        previewImage.onchange = function (e) {
            const [file] = previewImage.files
            if (file) {
                this.parentNode.parentNode.querySelector('img').src = URL.createObjectURL(file)
            }
        }
})
