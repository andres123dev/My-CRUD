# My-CRUD

<div align="center">
  <table border="0" cellpadding="0" cellspacing="0">
    <tbody>
      <tr> <th>Proyect</th> <td>My CRUD</td>  </tr>
      <tr>
        <th>Description</th>
	<td>A web CRUD with singleton pattern.</td>
      </tr>
      <tr> <th>Author</th> <td>Andrés Fernández Burón</td> </tr>
      <tr> <th>Copyright</th> <td>2023 &copy; All rights reserved</td> </tr>
    </tbody>
  </table>
</div>

<hr>

- Frontend:  
    - HTML, CSS & Javascript. 
    - jQuery  
    - Bootstrap 5  
    - TypeScript  
      
- Backend:  
    - PHP
    - MariaDB

More:  
    - Asynchronous request with AJAX.  
    - Database connection with PDO (PHP Data Objects).  
    - Development enviroment XAMPP.  

# Requirements

- Web server (Apache)  
- Database server (MariaDB)  
- A user, a database and a table created in the DBMS  

## Database

### Credentials
Harcoded credentials in PHP code (in DDBB private construct).  

Database: gamedb  
User: andres  
Password: password  

### Table  
Player  

- id - INT(11) - Autoincrement  
- name - VARCHAR(50)  
- score - INT(11)  

### SQL
In the root directory of the repository, you have the SQL code to create the table and to insert some rows (````createtable.sql````).  


