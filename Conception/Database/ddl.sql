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