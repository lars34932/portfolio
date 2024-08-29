let phpButton = document.getElementById("phpButton");
let cssButton = document.getElementById("cssButton");
let jsButton = document.getElementById("jsButton");
let sqlButton = document.getElementById("sqlButton");
let pythonButton = document.getElementById("pythonButton");
let wordpressButton = document.getElementById("wordpressButton");

let lastClickedButton = null;

function filter(type) {
    let clickedButton, projectClass;

    switch(type) {
        case "php":
            clickedButton = phpButton;
            projectClass = "php__project";
            break;
        case "css":
            clickedButton = cssButton;
            projectClass = "css__project";
            break;
        case "js":
            clickedButton = jsButton;
            projectClass = "js__project";
            break;
        case "sql":
            clickedButton = sqlButton;
            projectClass = "sql__project";
            break;
        case "python":
            clickedButton = pythonButton;
            projectClass = "python__project";
            break;
        case "wordpress":
            clickedButton = wordpressButton;
            projectClass = "wordpress__project";
            break;
    }

    const allProjects = document.querySelectorAll(".php__project, .css__project, .js__project, .sql__project, .python__project, .wordpress__project");

    if (lastClickedButton === clickedButton) {
        allProjects.forEach(project => {
            project.style.display = "block";
        });
        clickedButton.style.backgroundImage = "";
        lastClickedButton = null;
    } else {
        allProjects.forEach(project => {
            project.style.display = "none";
        });

        const selectedProjects = document.querySelectorAll(`.${projectClass}`);
        selectedProjects.forEach(project => {
            project.style.display = "block";
        });

        if (lastClickedButton) {
            lastClickedButton.style.backgroundImage = "";
        }

        const gradient = "linear-gradient(90deg, rgba(120,162,45,1) 25%, rgba(30,120,61,1) 100%)";
        clickedButton.style.backgroundImage = gradient;

        lastClickedButton = clickedButton;
    }
}
