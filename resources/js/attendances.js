import axios from 'axios';

document.addEventListener('DOMContentLoaded', () => {
    const attendanceTable = document.getElementById('attendance-table');

    axios.get('/attendances')
        .then(response => {
            const attendances = response.data;
            attendances.forEach(attendance => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${attendance.student.name}</td>
                    <td>${attendance.course.name}</td>
                    <td>${attendance.attended ? 'Yes' : 'No'}</td>
                    <td>
                        <a href="/attendances/${attendance.id}/edit" class="btn btn-primary">Edit</a>
                        <a href="/attendances/${attendance.id}" class="btn btn-danger">Delete</a>
                    </td>
                `;
                attendanceTable.appendChild(row);
            });
        })
        .catch(error => {
            console.error(error);
        });
});