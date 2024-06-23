-- CREATING A DATABASE NAME
CREATE DATABASE Company;

-- Selecting a Database
USE Company;

-- Creating a Table
CREATE TABLE Employees (
    EmployeeID INT PRIMARY KEY,
    FirstName VARCHAR(20),
    LastName VARCHAR(20),
    Age INT,
    Department VARCHAR(50)
);

-- Inserting Data into a Table
 INSERT INTO Employees (EmployeeId, FirstName, LastName, Age, Department)
    -> VALUES
    -> ("1", "Nathaniel", "Rays", "22", "Developer"),
    -> ("2", "Nathalie", "Sinag", "20", "UI/UX"),
    -> ("3", "George", "Stone", "26", "SEO"),
    -> ("4", "Zatara", "Count", "22", "Project Manager"),
    -> ("5", "Henry", "Mejia", "23", "Scrum Master");

-- Viewing Data
SELECT * FROM Employees;

-- Updating Data
UPDATE Employees SET Department = "Marketing" WHERE EmployeeID = 2;

-- Deleting Data
DELETE FROM Employees WHERE EmployeeID = 3;

-- Dropping the Table
DROP TABLE Employees;