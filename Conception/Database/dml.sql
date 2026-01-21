INSERT INTO roles (role) VALUES
('candidat'),
('recruiter'),
('admin');

INSERT INTO users (full_name, email, password_hash, phone, role_id) VALUES
('Mohamed El Amrani', 'mohamed@gmail.com', '$2y$10$abc123hash', '+212600112233', 1),
('Sara Benali', 'sara@gmail.com', '$2y$10$def456hash', '+212611223344', 1),
('Youssef Tech', 'youssef@techcorp.ma', '$2y$10$xyz789hash', '+212622334455', 2),
('Admin System', 'admin@platform.com', '$2y$10$adminhash', '+212699999999', 3);

INSERT INTO candidats (id, curriculum_vitae) VALUES
(1, NULL),
(2, NULL);

INSERT INTO recuiters (id, company_name, email_pro, city) VALUES
(3, 'TechCorp Morocco', 'hr@techcorp.ma', 'Casablanca');

INSERT INTO tags (name) VALUES
('PHP'),
('Laravel'),
('JavaScript'),
('React'),
('MySQL'),
('Python');


INSERT INTO categories (name, tag_id) VALUES
('Web Development', 1),
('Backend Development', 2),
('Frontend Development', 4),
('Data Science', 6);

INSERT INTO offers (title, description, recuiter_id, category_id) VALUES
(
 'Junior PHP Developer',
 'Looking for a junior PHP developer with Laravel knowledge',
 3,
 2
),
(
 'Frontend React Developer',
 'React developer needed for modern web applications',
 3,
 3
);


INSERT INTO offers_tags (offer_id, tag_id) VALUES
(1, 1),
(1, 2),
(1, 5),
(2, 4),
(2, 3);
INSERT INTO condidat_tag (candidat_id, tag_id) VALUES
(1, 1),
(1, 2),
(1, 5),
(2, 4),
(2, 3);

INSERT INTO applications (offer_id, condidate_id) VALUES
(1, 1),
(2, 2);
