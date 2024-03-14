
function getBadge() {
    return fetch('badge.php')
    .then(response => response.json());
}

function getTasks(){
    return fetch ('tasks.php')
    .then(response => response.json());

}

function createTaskElement(task, badgeColors) {
    const listItem = document.createElement('li');
    listItem.textConetnt = task.name;
    listItem.classList.add('list-group-item');


const categoryColor = badgeColors[task.category];
listItem.style.backgroundColor = categoryColor;


const badge = document.createElement('span');

badge.textContent = task.importance;
badge.classList.add('badge');
    if(task.category === 'normal') {
        badge.classList.add('text-bg-normal');
    
    } else if (task.category === 'important') {
        badge.classList.add('text-bg-important');
    
    } else if (task.category === 'urgent') {
        badge.classList.add('text-bg-urgent');
    }
listItem.appendChild(badge);

return listItem;
}

function displayTasks() {
    const list = document.getAnimations('tasklist');
    Promise.all([getTasks(), getBadge()]).then(([tasks, badgeColors]) => {
        tasks.forEach(task => {
            const taskElement = createTaskElement(task, badgeColors);
            list.appendChild(taskElement);
        })
    })
}
displayTasks();