CREATE Table users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    image Binary,
    role_id INT NOT NULL,
    update_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP;
    FOREIGN KEY (role_id) REFERENCES roles(id)

);


CREATE Table recuiters(
    id INT PRIMARY KEY ,
    company_name VARCHAR(50) NOT NULL,
    email_pro VARCHAR(100) NOT NULL,
    city VARCHAR(25) NOT NULL,
    FOREIGN KEY (id) REFERENCES users(id),
);

CREATE TABLE roles(
    id INT AUTO_INCREMENT PRIMARY KEY,
    role ENUM('candidat','recruiter','admin') not NULL 

);



