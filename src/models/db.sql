CREATE TABLE cogip.employee (
    id INT NOT NULL,
    username VARCHAR(50),
    password VARCHAR(255),
    status TINYINT 
);
-- create table employee in cogip db

ALTER TABLE employee
ADD PRIMARY KEY (id);
-- OK

ALTER TABLE employee
MODIFY id INT NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 1;
-- OK

-- INSERT INTO employee VALUES
-- (0, 'blabla', 'blabla', 0);