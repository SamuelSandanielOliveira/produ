CRATE DATABASE produ;
USE produ;

CRATE TABLE produtos(
    id INT AUTO_INCREMET PRIMAY KEY,
    nome VARCHAR(100) NOT NULL,
    categoria VARCHAR(100) NOT NULL,
    preco DECIMAL (10,2) NOT NULL,
    quantidade INT NOT NULL
)