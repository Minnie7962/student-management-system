let students = [];
let editingIndex = null;

// Function to add or update a student
function addStudent(name, age, grade) {
    const student = { name, age, grade };
    students.push(student);
}

// Function to display students in the table
function displayStudents() {
    const tableBody = document.getElementById("studentTableBody");
    tableBody.innerHTML = ""; // Clear the table body
    students.forEach((student, index) => {
        const row = `
            <tr>
                <td>${student.name}</td>
                <td>${student.age}</td>
                <td>${student.grade}</td>
                <td>
                    <button class="btn btn-warning btn-sm" onclick="editStudent(${index})">Edit</button>
                    <button class="btn btn-danger btn-sm" onclick="deleteStudent(${index})">Delete</button>
                </td>
            </tr>
        `;
        tableBody.innerHTML += row;
    });
}

// Handle form submission
document
    .getElementById("studentForm")
    .addEventListener("submit", function (event) {
        event.preventDefault();
        const name = document.getElementById("name").value;
        const age = document.getElementById("age").value;
        const grade = document.getElementById("grade").value;
        if (editingIndex !== null) {
            students[editingIndex] = { name, age, grade };
            editingIndex = null;
        } else {
            addStudent(name, age, grade);
        }
        displayStudents();
        // Reset form fields
        document.getElementById("studentForm").reset();
    });

// Function to edit a student
function editStudent(index) {
    const student = students[index];
    document.getElementById("name").value = student.name;
    document.getElementById("age").value = student.age;
    document.getElementById("grade").value = student.grade;
    document.querySelector("button[type=submit]").innerText = "Save";
    editingIndex = index;
}

// Function to delete a student
function deleteStudent(index) {
    students.splice(index, 1); // Remove student from array
    displayStudents(); // Refresh the table
}