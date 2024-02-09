document.addEventListener('DOMContentLoaded', function() {
    var faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(function(item) {
        item.querySelector('.faq-question').addEventListener('click', function() {
            var currentlyActive = document.querySelector('.faq-active');
            if (currentlyActive && currentlyActive !== item) {
                currentlyActive.classList.remove('faq-active');
            }
            item.classList.toggle('faq-active');
        });
    });
});
