CREATE TABLE IF NOT EXISTS short_links 
    (
        id INT NOT NULL UNIQUE AUTO_INCREMENT, original TEXT(360),
        reference VARCHAR(50) UNIQUE,
        uses INT, PRIMARY KEY (id)
    );