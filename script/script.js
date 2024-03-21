
// Supposons que vous avez un formulaire HTML avec les champs Nom, Prenom, Email et MotDePasse

document.getElementById('votre-formulaire').addEventListener('submit', function(event) {
    event.preventDefault(); // Empêche le formulaire de se soumettre normalement

    // Récupération des valeurs des champs du formulaire
    const nom = document.getElementById('Nom').value;
    const prenom = document.getElementById('Prenom').value;
    const email = document.getElementById('Email').value;
    const motDePasse = document.getElementById('MotDePasse').value;

    // Création d'un objet FormData pour envoyer les données au serveur
    const formData = new FormData();
    formData.append('Nom', nom);
    formData.append('Prenom', prenom);
    formData.append('Email', email);
    formData.append('MotDePasse', motDePasse);

    // Envoi des données au serveur en utilisant fetch
    fetch('./../votre-fichier-php.php', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error("Une erreur s'est produite.");
        }
        return response.json(); // On attend une réponse JSON du serveur
    })
    .then(data => {
        console.log(data); // Affichage de la réponse du serveur
        // Redirection vers une autre page si nécessaire
        window.location.href = './../index.php';
    })
    .catch(error => {
        console.error('Erreur :', error);
        // Gérer l'erreur ici (afficher un message d'erreur, par exemple)
    });
});



// function getBadge() {
//     return fetch('badge.php')
//     .then(response => response.json());
// }

// function getTasks(){
//     return fetch ('tasks.php')
//     .then(response => response.json());

// }

// function createTaskElement(task, badgeColors) {
//     const listItem = document.createElement('li');
//     listItem.textConetnt = task.name;
//     listItem.classList.add('list-group-item');


// const categoryColor = badgeColors[task.category];
// listItem.style.backgroundColor = categoryColor;


// const badge = document.createElement('span');

// badge.textContent = task.importance;
// badge.classList.add('badge');
//     if(task.category === 'normal') {
//         badge.classList.add('text-bg-normal');
    
//     } else if (task.category === 'important') {
//         badge.classList.add('text-bg-important');
    
//     } else if (task.category === 'urgent') {
//         badge.classList.add('text-bg-urgent');
//     }
// listItem.appendChild(badge);

// return listItem;
// }

// function displayTasks() {
//     const list = document.getAnimations('tasklist');
//     Promise.all([getTasks(), getBadge()]).then(([tasks, badgeColors]) => {
//         tasks.forEach(task => {
//             const taskElement = createTaskElement(task, badgeColors);
//             list.appendChild(taskElement);
//         })
//     })
// }
// displayTasks();