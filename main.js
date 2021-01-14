const liensNav = document.querySelectorAll('nav ul li > a');
const divsFormulaire = document.querySelectorAll('form > div');
const labelsFormulaire = document.querySelectorAll('form > div > label');

let ajouterClasses = (elements, ...classesBootstrap) => {
    for(element of elements) {
        element.classList.add(...classesBootstrap)
    }
};

ajouterClasses(liensNav, 'text-dark');
ajouterClasses(divsFormulaire, 'my-3');
ajouterClasses(labelsFormulaire, 'mb-1');