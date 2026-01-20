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