-- Create a database named "solve_it"
CREATE DATABASE solve_it;

-- Select the database "solve_it"
USE solve_it;

CREATE TABLE candidates (
  id INT AUTO_INCREMENT PRIMARY KEY,
  candidate_name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  age INT NOT NULL
);

INSERT INTO candidates (candidate_name, email, age)
VALUES
  ('Phase TUMURERE', 'phasetumurere@solvit.com', 30),
  ('Bosco KWIZERA', 'bkwizera@solvit.com', 25),
  ('Elvis MUGISHA', 'elvis@solvit.com', 35);