// Sample array of programs (you can modify this with your actual program data)
const programs = [
    { name: 'Program A', description: 'Description for Program A' },
    { name: 'Program B', description: 'Description for Program B' },
    { name: 'Program C', description: 'Description for Program C' }
];

// Function to display programs on the page
function displayPrograms() {
    const programList = document.getElementById('programList');

    // Create and append program information to the programList element
    programs.forEach(program => {
        const programDiv = document.createElement('div');
        programDiv.innerHTML = `<h3>${program.name}</h3><p>${program.description}</p>`;
        programList.appendChild(programDiv);
    });
}

// Call the function to display programs when the page loads
displayPrograms(); // This line should display the programs without waiting for the page to fully load

// Optional: Check if the script file is loaded
console.log("Script loaded");
