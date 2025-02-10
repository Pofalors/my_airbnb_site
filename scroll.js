/* Αυτό το script βοηθάει ώστε να εμφανίζονται με συγκεκριμένο τρόπο τα sections */
/* Συγκεκριμένα τα έκανα να εμφανίζονται απ' τα αριστερά με ένα μικρό blur */

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry);
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        } else {
            entry.target.classList.remove('show');
        }
    });
});


const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el));