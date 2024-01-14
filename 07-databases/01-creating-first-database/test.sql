CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    body TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


SHOW TABLES;

INSERT INTO posts (title, body) VALUES ('Post One', 'This is post one');
INSERT INTO posts (title, body) VALUES ('Post Two', 'This is post two');

SELECT title FROM posts;
SELECT * FROM posts;

INSERT INTO posts (title, body) VALUES ('Post Three', 'This is post three');

SELECT * FROM posts;

SELECT * FROM posts WHERE id = 2;

UPDATE posts SET body = 'This is an updated post' WHERE id = 2;

SELECT * FROM posts WHERE id = 2;

DELETE FROM posts WHERE id = 2;

SELECT * FROM posts;

INSERT INTO posts (title, body) VALUES ('Post Four', 'This is post four'), ('Post Five', 'This is post five');

SELECT * FROM posts;


DROP DATABASE blog; /* Deletes the database */