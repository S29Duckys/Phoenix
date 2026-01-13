-- =========================
-- SUPPRESSION (si existe)
-- =========================
DROP TABLE IF EXISTS tp_orders;
DROP TABLE IF EXISTS tp_travels;
DROP TABLE IF EXISTS tp_accounts;
DROP TABLE IF EXISTS tp_category;

-- =========================
-- TABLE : tp_category
-- =========================
CREATE TABLE tp_category (
    id_category INT AUTO_INCREMENT PRIMARY KEY,
    name_category VARCHAR(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- =========================
-- TABLE : tp_accounts
-- =========================
CREATE TABLE tp_accounts (
    id_account INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(45) NOT NULL,
    password VARCHAR(45) NOT NULL,
    email VARCHAR(255) NOT NULL,
    name VARCHAR(45) NOT NULL,
    adress VARCHAR(100),
    tel VARCHAR(15),
    num_carte VARCHAR(16),
    crypto VARCHAR(3),
    conditions TINYINT(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- =========================
-- TABLE : tp_travels
-- =========================
CREATE TABLE tp_travels (
    id_travel INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(45) NOT NULL,
    description TEXT,
    image VARCHAR(255),
    price FLOAT NOT NULL,
    id_category INT NOT NULL,
    CONSTRAINT fk_travels_category
        FOREIGN KEY (id_category)
        REFERENCES tp_category(id_category)
        ON DELETE CASCADE
        ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- =========================
-- TABLE : tp_orders
-- =========================
CREATE TABLE tp_orders (
    id_order INT AUTO_INCREMENT PRIMARY KEY,
    reference VARCHAR(8) NOT NULL,
    id_account INT NOT NULL,
    id_travel INT NOT NULL,
    nb_personne INT NOT NULL,
    nb_week INT NOT NULL,
    total FLOAT NOT NULL,
    CONSTRAINT fk_orders_account
        FOREIGN KEY (id_account)
        REFERENCES tp_accounts(id_account)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    CONSTRAINT fk_orders_travel
        FOREIGN KEY (id_travel)
        REFERENCES tp_travels(id_travel)
        ON DELETE CASCADE
        ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
