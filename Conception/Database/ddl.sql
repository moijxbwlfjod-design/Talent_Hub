CREATE TABLE roles(
    id INT AUTO_INCREMENT PRIMARY KEY,
    role ENUM('candidat','recruiter','admin') not NULL 

);


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

CREATE TABLE candidats(
    id INT PRIMARY KEY,
    curriculum_vitae binary,
);
CREATE TABLE tags(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL UNIQUE,
    update_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP NULL
);
CREATE TABLE condidat_tag(
    candidat_id int NOT NULL,
    tag_id INT NOT NULL,
    Foreign Key (candidat_id) REFERENCES candidats(id)
    Foreign Key (tag_id) REFERENCES tags(id),
);
CREATE TABLE categoris(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL UNIQUE,
    tag_id INT NOT NULL,
    update_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP NULL,
    Foreign Key (tag_id) REFERENCES tags(id)
);
CREATE TABLE offers(
 id INT PRIMARY KEY AUTO_INCREMENT ,
 title VARCHAR(100) NOT NULL,
 description VARCHAR(255) NOT NULL,
 recuiter_id INT NOT NULL,
 category_id INT NOT NULL,
 FOREIGN KEY (recuiter_id) REFERENCES recuiters(id),
 FOREIGN KEY (category_id) REFERENCES categories(id),
 created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 update_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE offers_tags(
    tag_id INT NOT NULL,
    offer_id INT NOT NULL,
    FOREIGN KEY (tag_id) REFERENCES tags(id),
    FOREIGN key (offer_id)  REFERENCES offers(id)
);

CREATE TABLE applications(
 id INT PRIMARY KEY AUTO_INCREMENT ,
 offer_id INT NOT NULL,
 condidate_id INT NOT NULL,
 FOREIGN KEY (offer_id) REFERENCES offers(id),
 FOREIGN KEY (condidate_id) REFERENCES conditate(id)
);