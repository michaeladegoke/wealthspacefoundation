window.onscroll = function() {
    console.log("Scroll event detected!"); // Check if this message appears in the console
    const navbar = document.getElementById('navbarContent');
    if (window.pageYOffset > 500) {
        console.log("Adding 'fixed' class");
        navbar.classList.add('fixed');
    } else {
        console.log("Removing 'fixed' class");
        navbar.classList.remove('fixed');
    }
};


// Sample array of programs with name, description, and image URL
const programs = [
    { name: 'November Tuesday Miscellaneous:', description: 'Join us for our November Tuesday Miscellaneous, where our guest will expound the concept of CHAMPIONING GREEN TECHNOLOGY.', image: 'uploads/flyer.jfif' },
   ];


   function displayPrograms() {
    const programList = document.getElementById('programList');

    programs.forEach(program => {
        const programDiv = document.createElement('div');
        programDiv.classList.add('program-item');

        const readMoreLink = document.createElement('a');
        readMoreLink.href = 'https://www.linkedin.com/events/championinggreentechnology7121422069094830081'; // Set your desired link here
        readMoreLink.classList.add('read-more');
        readMoreLink.textContent = 'Read More';

        const closeBtn = document.createElement('button');
        closeBtn.classList.add('close-btn');
        closeBtn.textContent = 'Close';

        programDiv.innerHTML = `
            <h3>${program.name}</h3>
            <img class="program-image" src="${program.image}" alt="${program.name}">
            <p>${program.description}</p>
        `;

        // Append the buttons to the programDiv
        programDiv.appendChild(readMoreLink);
        programDiv.appendChild(closeBtn);

        programList.appendChild(programDiv);
    });

    programList.addEventListener('click', function(event) {
        if (event.target.classList.contains('close-btn')) {
            event.target.parentElement.style.display = 'none'; // Hide the clicked item
        } else if (event.target.classList.contains('read-more')) {
            // Implement what happens when "Read More" is clicked
            // For example, expand the program description or link to another page.
            // You can define the behavior for the "Read More" link here.
            console.log("Read More clicked");
        }
    });
}


document.addEventListener('DOMContentLoaded', function() {
    displayPrograms(); // Call the function once the document has loaded
});
